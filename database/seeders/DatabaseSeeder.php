<?php
/** 
 * References:
 *   bapat411. (2019). User Profile Avatar Image. favpng. https://favpng.com/png_view/avatar-user-profile-avatar-image-png/TKPbi4A5
 * 
 *  catnikma. Unknown Person Silhouette. depositphotos. https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg
*/
namespace Database\Seeders;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
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

        Post::factory(8)->create([
          'user_id' => $default_user->id,
      ]);

        for ($i = 0; $i < 30; $i++){
          $user = User::factory()->create();
          Like::factory()->create();

            Post::factory(6)->create([
              'user_id' => $user->id,
          ]);
      }
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
