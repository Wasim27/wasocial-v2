<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Follow;

class FollowTest extends TestCase 
{

  public function test_user_can_follow()
  {
    $user = User::factory()->create();
    $user_two = User::factory()->create();

    $user->follow($user_two);
    $this->assertDatabaseHas('follows', [
      'user_id' => $user->id,
      'following_id' => $user_two->id,
    ]);
  }

  public function test_user_can_unfollow()
  {
    $user = User::factory()->create();
    $user_two = User::factory()->create();

    $user->follow($user_two);
    $user->unfollow($user_two);
    $this->assertDatabaseMissing('follows', [
      'user_id' => $user->id,
      'following_id' => $user_two->id,
    ]);
  }
}

?>