<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function store(Post $post)
    {
        $current_user = auth()->user();
        $post->like($current_user);

        return back();
    }

    /**
     * Destroy a resource in storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $current_user = auth()->user();
        $post->dislike($current_user);

        return back();
    }
}
