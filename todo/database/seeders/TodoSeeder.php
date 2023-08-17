<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = \App\Models\User::all();

        foreach ($users as $user) {
            \App\Models\Todo::factory(5)->create([
                'user_id' => $user->id,
            ]);
        }

    }
}
