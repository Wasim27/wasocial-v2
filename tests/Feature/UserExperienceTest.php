<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Contracts\Auth\Authenticatable;

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
}
