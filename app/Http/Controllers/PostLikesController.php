<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{
    public function store(Post $post)
    {
        $current_user = auth()->user();
        $post->like($current_user);

        return back();
    }

    public function destroy(Post $post)
    {
        $current_user = auth()->user();
        $post->dislike($current_user);

        return back();
    }
}
