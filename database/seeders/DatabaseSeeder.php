<?php
/** 
 * References:
 *   bapat411. (2019). User Profile Avatar Image. favpng. https://favpng.com/png_view/avatar-user-profile-avatar-image-png/TKPbi4A5
 * 
 *  catnikma. Unknown Person Silhouette. depositphotos. https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg
*/
namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        $password = bcrypt('testacc123');
        $default_user = User::factory()->create([
            'username' => 'John',
            'name' => 'John Doe',
            'email' => 'John@gmail.com',
            'password' => $password,
            'profile_photo' => 'https://img.favpng.com/25/7/23/computer-icons-user-profile-avatar-image-png-favpng-LFqDyLRhe3PBXM0sx2LufsGFU.jpg'
        ]);

        Post::create([
            'user_id' => $default_user->id,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere lorem sapien, dapibus sodales massa ullamcorper eu. Aenean in elit lorem.'
        ]);

        Post::create([
            'user_id' => $default_user->id,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere lorem sapien, dapibus sodales massa ullamcorper eu. Aenean in elit lorem.'
        ]);
        
        for ($i = 0; $i < 2; $i++){
          $user = User::factory()->create([
              'profile_photo' => 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg'
          ]);

          Post::create([
            'user_id' => $user->id,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere lorem sapien, dapibus sodales massa ullamcorper eu. Aenean in elit lorem. Cras non vulputate lorem. Pellentesque blandit ut mi et tristique.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere lorem sapien, dapibus sodales massa ullamcorper eu. Aenean in elit lorem. Cras non vulputate lorem. Pellentesque blandit ut mi et tristique.'
        ]);
        }
    }
}
