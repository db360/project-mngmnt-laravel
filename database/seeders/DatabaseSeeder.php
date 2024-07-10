<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Creamos un usuario
        User::factory()->create([
            'name' => 'Dab User',
            'email' => 'da.b@hotmail.es',
            'password' => bcrypt('123.324A'),
            'email_verified_at' => time()
        ]);

        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create([
                'created_by' => 1,
                'updated_by' => 1,
            ]);
    }
}
