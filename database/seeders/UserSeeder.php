<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => 'Augustin',
            'email' => 'augustin@ecogest.dev',
            'password' => Hash::make('Password:123')
        ]);
        User::factory()->create([
            'username' => 'Marion',
            'email' => 'marion@ecogest.dev',
            'password' => Hash::make('Password:123')
        ]);
        User::factory()->create([
            'username' => 'Léa',
            'email' => 'leaa@ecogest.dev',
            'password' => Hash::make('Password:123')
        ]);
        User::factory()->create([
            'username' => 'Eléonore',
            'email' => 'eleonore@ecogest.dev',
            'password' => Hash::make('Password:123')
        ]);
    }
}
