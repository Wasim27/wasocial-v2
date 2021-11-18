<?php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\PostLikesController;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserExperienceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_feed_screen_can_be_rendered()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/feed');
        $response->assertStatus(200);
    }

    public function test_my_profile_screen_can_be_rendered()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/profile');
        $response->assertStatus(200);
    }

    public function test_other_profile_screens_can_be_rendered()
    {
        $user = User::factory()->create();
        $default_user = User::factory()->create([
            'username' => 'Bob',
            'name' => 'Bob Doe',
            'email' => 'Bob@gmail.com',
            'password' => 'testacc123',
        ]);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/profile/Bob');
        $response->assertStatus(200);
    }

    public function test_post_can_be_created()
    {
        $user = User::factory()->create();
 
        $post = (Post::create([
            'user_id' => $user->id,
            'body' => 'Hello I am doing nothing today!'
        ]));

        $this->assertTrue(Post::whereBody('Hello I am doing nothing today!')->exists());
    }

    public function test_post_can_be_liked_and_disliked()
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

        $post->dislike($default_user);

        $this->assertDatabaseHas('likes', [
            'user_id' => $default_user->id,
            'post_id' => $post->id,
            'liked' => '0',
        ]);
    }
}
