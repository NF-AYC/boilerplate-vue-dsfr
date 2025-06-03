<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $firstNames = [
                        'Yoan',
                        'Johan',
                        'Alexis',
                        'Etienne',
                        'Adrien',
                        'Nans',
                        'Jonathan',
                        'Azilis',
                        'Bastien',
                        'Lilian',
                        'Alexandre',
                        'Léo',
                        ];

        foreach ($firstNames as $firstName) {
            User::create([
                'name' => $firstName,
                'email' => strtolower($firstName) . '@test.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Mot de passe par défaut
                'remember_token' => Str::random(10),
            ]);
        }

        // Create 10 users
        // $users = User::factory(10)->create();
        $users = User::all();

        // Create 3-5 categories
        $categories = \App\Models\Category::factory(rand(3, 5))->create();

        // For each user, create between 10 and 30 tasks
        $users->each(function ($user) use ($categories) {
            $tasks = \App\Models\Task::factory(rand(10, 30))->create(['user_id' => $user->id]);

            // Attach each task to 1-3 categories
            $tasks->each(function ($task) use ($categories) {
                $task->categories()->attach(
                    $categories->random(rand(1, 3))->pluck('id')->toArray(),
            ['created_at' => now(), 'updated_at' => now()]
                );
            });
        });
    }
}