<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $posts = Post::withLikes('created_at')->get()->sortByDesc('created_at');

        $topUsersJoinQuery = DB::table('follows')
        ->select('following_id', DB::raw('COUNT(following_id) AS count'))
        ->groupBy('following_id'); 

        $top_users = DB::table('users')->select('*')
        ->join(DB::raw('(' . $topUsersJoinQuery->toSql() . ') i'), function ($join)
        {
            $join->on('i.following_id', '=', 'users.id');
        })
        ->orderBy('count', 'desc')
        ->select('name', 'username', 'profile_photo')
        ->take(10)
        ->get();

        return view('dashboard', [
            'posts' => $posts,
            'current_user' => $curUser,
            'top_users' => $top_users
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
        return back();
    }
}
