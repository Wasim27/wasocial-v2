<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Livewire\Livewire;
use App\Http\Livewire\DeletePost;

class PostControllerTest extends TestCase
{
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

  public function test_post_can_be_created()
  {
      $user = User::factory()->create();

      $post = (Post::create([
          'user_id' => $user->id,
          'body' => 'Hello I am doing nothing today!'
      ]));

      $this->assertTrue(Post::whereBody('Hello I am doing nothing today!')->exists());
  }


  public function test_post_can_be_deleted()
  {
      $user = User::factory()->create();

      $post = (Post::create([
          'user_id' => $user->id,
          'body' => 'I want to delete this post'
      ]));

      Livewire::test(DeletePost::class)
          ->set('post', $post)
          ->call('destroy');
      
      $this->assertTrue(Post::whereBody('I want to delete this post')->doesntExist());
  }
}

?>