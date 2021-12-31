<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use App\Http\Livewire\ProfilePhoto;

class UserTest extends TestCase
{
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