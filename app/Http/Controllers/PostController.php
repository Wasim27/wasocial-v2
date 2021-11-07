<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curUser = auth()->user();
        $posts = Post::withLikes('posted_at')->get()->sortByDesc('posted_at');

        return view('dashboard', [
            'posts' => $posts,
            'current_user' => $curUser
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curUser = auth()->user();
        $request->validate([
            'body' => 'required',
        ]);

        Post::create([
            'user_id' => $curUser->id,
            'body' => $request->body,
        ]);

        session()->flash('message', 'New Post Created Successfully!');
        return redirect()->route('profile.index');
    }
}
