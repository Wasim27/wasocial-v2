<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['posted_at'];

   public function user()
   {
       return $this->belongsTo(User::class, 'user_id');
   }

   public function scopeWithLikes($query)
   {
       $query->leftJoinSub(
           'select post_id, sum(liked) likes, sum(!liked) dislikes from likes group by post_id',
           'likes',
           'likes.post_id',
           'posts.id'
       );
   }

   public function like($user = null, $liked = true)
   {
       $this->likes()->updateOrCreate([
           'user_id' => $user ? $user->id : auth()->id(),
       ], [
           'liked' => $liked,
       ]);
   }

   public function dislike($user = null)
   {
       return $this->like($user, false);
   }

   public function isLikedBy(User $user)
   {
       return $this->likes()->where('user_id', $user->id)->where('liked', true)->count();
   }

   public function isDislikedBy(User $user)
   {
       return $this->likes()->where('user_id', $user->id)->where('liked', false)->count();
   }

   public function likes()
   {
       return $this->hasMany(Like::class);
   }
}
