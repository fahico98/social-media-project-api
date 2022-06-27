<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return  void
     */
    public function __construct()
    {
        $this->middleware("auth:api");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(["user", "images", "videos"])->get();
        return response()->json(compact("posts"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data["user_id"] = auth()->user()->id;
        $post = Post::insert($data);
        return response()->json(compact("post"), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return response()->json(compact("post"), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return response()->json(compact("post"), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response("success", 200);
    }

    /**
     * Display the post list for the authenticated user timeline.
     *
     * @param   int  $page
     * @param   int  $postsPerPage
     * @return  \Illuminate\Http\Response
     */
    public function userTimelinePosts(int $page, int $postsPerPage)
    {
        $user = auth()->user()->load("followings:id");
        $followings = $user->followings;
        $followingsIds = array_column($followings, "id");

        $posts = Post::whereIn("user_id", $followings)->get();

        // $posts = Post::where("user_id", auth()->user()->id)
        //     ->offset($postsPerPage * ($page - 1))
        //     ->limit($postsPerPage + 1)
        //     ->orderBy("date", "desc")
        //     ->get();

        return response()->json(compact("posts"), 200);
    }

    /**
     * Display the post list posted by a given user.
     *
     * @param   int  $page
     * @param   int  $postsPerPage
     * @param   \App\Models\User  $user
     * @return  \Illuminate\Http\Response
     */
    public function userPosts(int $page, int $postsPerPage, User $user)
    {
        $posts = Post::where("user_id", $user->id)
            ->offset($postsPerPage * ($page - 1))
            ->limit($postsPerPage + 1)
            ->orderBy("date", "desc")
            ->get();

        return response()->json(compact("posts"), 200);
    }

    /**
     * User likes post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function like(Request $request)
    {
        $alreadyLike = DB::table("like_post")->where([
            ["user_id", "=", $request->user_id],
            ["post_id", "=", $request->post_id]
        ])->exists();

        if ($alreadyLike) return response("rejected", 200);

        DB::table("like_post")->insert([
            "user_id" => $request->user_id,
            "post_id" => $request->post_id
        ]);

        return response("success", 200);
    }

    /**
     * User dislikes post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dislike(Request $request)
    {
        $alreadyDislike = DB::table("dislike_post")->where([
            ["user_id", "=", $request->user_id],
            ["post_id", "=", $request->post_id]
        ])->exists();

        if ($alreadyDislike) return response("rejected", 200);

        DB::table("dislike_post")->insert([
            "user_id" => $request->user_id,
            "post_id" => $request->post_id
        ]);

        return response("success", 200);
    }

    /**
     * User likes post anymore.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function undoLike(Request $request)
    {
        $whereMatrix = [
            ["user_id", "=", $request->user_id],
            ["post_id", "=", $request->post_id]
        ];

        $alreadyLike = DB::table("like_post")->where($whereMatrix)->exists();
        if (!$alreadyLike) return response("rejected", 200);

        $alreadyLike = DB::table("like_post")->where($whereMatrix)->delete();
        return response("success", 200);
    }

    /**
     * User dislikes post anymore.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function undoDislike(Request $request)
    {
        $whereMatrix = [
            ["user_id", "=", $request->user_id],
            ["post_id", "=", $request->post_id]
        ];

        $alreadyDislike = DB::table("dislike_post")->where($whereMatrix)->exists();
        if (!$alreadyDislike) return response("rejected", 200);

        $alreadyDislike = DB::table("dislike_post")->where($whereMatrix)->delete();
        return response("success", 200);
    }
}
