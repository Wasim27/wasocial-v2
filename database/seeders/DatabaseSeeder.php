<?php

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
        ]);

        $user = User::factory()->create();

        Post::create([
            'user_id' => $user->id,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere lorem sapien, dapibus sodales massa ullamcorper eu. Aenean in elit lorem. Cras non vulputate lorem. Pellentesque blandit ut mi et tristique.'
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
