<?php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;

class PostsLikesControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_post_can_be_liked()
    {
        $user = User::factory()->create();
        $default_user = User::factory()->create([
            'username' => 'Pete12344',
            'name' => 'Pete Doe',
            'email' => 'Pete@gmail.com',
            'password' => 'testacc123',
        ]);

        $post = (Post::create([
            'user_id' => $user->id,
            'body' => 'Test Likes!'
        ]));

        $post->like($default_user);
        $this->assertDatabaseHas('likes', [
            'user_id' => $default_user->id,
            'post_id' => $post->id,
            'liked' => '1',
        ]);
    }

    public function test_post_can_be_disliked()
    {
        $user = User::factory()->create();
        $user_two = User::factory()->create();

        $post = (Post::create([
            'user_id' => $user->id,
            'body' => 'Test Likes!'
        ]));

        $post->dislike($user_two);

        $this->assertDatabaseHas('likes', [
            'user_id' => $user_two->id,
            'post_id' => $post->id,
            'liked' => '0',
        ]);
    }
}
