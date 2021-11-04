<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curUser = auth()->user();
        $posts = Post::withLikes('posted_at')->where('user_id', '=', $curUser->id)->get()->sortByDesc('posted_at');
        
        return view('my-profile', [
            'current_user' => $curUser,
            'userName' => $curUser->username,
            'profile_photo' => $curUser->profile_photo,
            'posts' => $posts,
        ]);
    }

    public function showAllUsers()
    {
        $posts_count = User::with('posts')->get();

        $users = User::orderBy('username')->paginate(10);
        $sortedUsers = $users->getCollection()->sortBy('username')->values();

        return view('all-users', [
            'users' => $users->setCollection($sortedUsers),
            'post_count' => $posts_count,
        ]);
    }

    public function search(Request $request)
    {
        $keyword =  $request->input('search');
        if($keyword != "")
        {
            $users = User::where(function ($query) use ($keyword) {
                $query->where('username', 'like', '%'.$keyword.'%');
            })->paginate(10);
            $users->appends(['search' => $keyword]);
        }
        else {
            $users = User::paginate(10);
        }
        return view('all-users')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function showUserProfile(User $user)
    {
        $curUser = auth()->user();

        $posts = Post::withLikes('posted_at')->where('user_id', '=', $user->id)->get()->sortByDesc('posted_at');

        return view('user-profile', [
            'current_user' => $curUser,
            'profile_photo' => $user->profile_photo,
            'profileName' => $user->username,
            'posts' => $posts,
        ]);
    }

    public function showCurrentUserProfile(User $user)
    {
        $curUser = auth()->user();
        return view('my-profile', [
            'userName' => $curUser->username,
            'profile_photo' => $curUser->profile_photo,
            'posts' => $curUser->posts->sortByDesc('posted_at'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

}
