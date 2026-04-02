<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SubjectSeeder::class,
        ]);

        User::firstOrCreate(
            ['email' => 'admin@unitracker.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );
    }
}
