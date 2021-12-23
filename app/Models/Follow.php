<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Follow extends Model
{
    use HasFactory;

    // public function follow(User $user)
    // {
    //     return $this->follows()->save($user);
    // }

    // public function unfollow(User $user)
    // {
    //     return $this->follows()->detach($user);
    // }

    // public function follows()
    // {
    //     return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_id');
    // }

    // public function following(User $user)
    // {
    //     return $this->follows()->where('following_id', $user->id)->exists();
    // }
}
