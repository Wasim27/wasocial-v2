<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class RoutesTest extends TestCase
{

  public function test_home_page_can_be_rendered()
  {
      $response = $this->get('/');
      $response->assertStatus(200);
  }

  public function test_my_profile_page_can_be_rendered()
  {
      $user = User::factory()->create();

      $this->post('/login', [
          'email' => $user->email,
          'password' => 'password',
      ]);

      $response = $this->get('/profile');
      $response->assertStatus(200);
  }

  public function test_other_profile_pages_can_be_rendered()
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

  public function test_user_search_page_can_be_rendered()
  {
    $user = User::factory()->create();

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);
    
      $response = $this->get('/users');
      $response->assertStatus(200);
  }

  public function test_2fa_setup_page_can_be_rendered()
  {
    $user = User::factory()->create();

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);
    
      $response = $this->get('/2fa');
      $response->assertStatus(200);
  }

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
}
?>