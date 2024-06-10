<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password'),
                'ip_address' => '192.168.1.1',
                'preferences' => json_encode(['destination' => 'Kenya', 'travel_type' => 'Adventure']),
                'travel_history' => json_encode(['visited' => ['Kenya', 'Uganda']]),
                'allergies' => json_encode(['peanuts']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password'),
                'ip_address' => '192.168.1.2',
                'preferences' => json_encode(['destination' => 'South Africa', 'travel_type' => 'Cultural']),
                'travel_history' => json_encode(['visited' => ['South Africa', 'Nigeria']]),
                'allergies' => json_encode(['gluten']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
                'password' => Hash::make('password'),
                'ip_address' => '192.168.1.3',
                'preferences' => json_encode(['destination' => 'Tanzania', 'travel_type' => 'Relaxation']),
                'travel_history' => json_encode(['visited' => ['Tanzania', 'Egypt']]),
                'allergies' => json_encode(['dairy']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
