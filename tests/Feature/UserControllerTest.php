<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use App\Http\Livewire\ProfilePhoto;

class UserControllerTest extends TestCase
{
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

  public function test_profile_photo_can_be_updated()
  {
      $this->actingAs(User::factory()->create());

      Livewire::test(ProfilePhoto::class)
          ->set('profile_photo', 'https://img.favpng.com/25/7/23/computer-icons-user-profile-avatar-image-png-favpng-LFqDyLRhe3PBXM0sx2LufsGFU.jpg')
          ->call('update');

      $this->assertTrue(User::whereProfilePhoto('https://img.favpng.com/25/7/23/computer-icons-user-profile-avatar-image-png-favpng-LFqDyLRhe3PBXM0sx2LufsGFU.jpg')->exists());
  }
}

?>