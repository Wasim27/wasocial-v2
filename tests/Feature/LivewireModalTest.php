<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Livewire\Livewire;
use App\Http\Livewire\EditPost;
use App\Http\Livewire\DeletePost;
use App\Http\Livewire\ProfilePhoto;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LivewireModalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_profile_photo_can_be_updated()
    {
        $this->actingAs(User::factory()->create());

        Livewire::test(ProfilePhoto::class)
            ->set('profile_photo', 'https://img.favpng.com/25/7/23/computer-icons-user-profile-avatar-image-png-favpng-LFqDyLRhe3PBXM0sx2LufsGFU.jpg')
            ->call('update');

        $this->assertTrue(User::whereProfilePhoto('https://img.favpng.com/25/7/23/computer-icons-user-profile-avatar-image-png-favpng-LFqDyLRhe3PBXM0sx2LufsGFU.jpg')->exists());
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
