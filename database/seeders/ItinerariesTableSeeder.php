<?php

namespace Database\Seeders;

use App\Models\country;
use App\Models\itinerarie;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItinerariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch the country id for 'Algeria'
        $kenyaId = country::where('countryname', 'Kenya')->value('id');

        Itinerarie::create([
            'user_id' => 1,
            'title' => 'Safari Adventure',
            'destination' => $kenyaId, // Use the fetched id
            'budget' => 1500.00,
            'start_date' => Carbon::create(2024, 7, 1),
            'end_date' => Carbon::create(2024, 7, 15),
            'activities' => json_encode(['Safari', 'Wildlife Viewing', 'Camping']),
            'travel_companions' => json_encode([
                ['name' => 'John Doe', 'age_group' => 'adult'],
                ['name' => 'Jane Doe', 'age_group' => 'adult']
            ])
        ]);

        // Fetch the country id for 'Botswana'
        $ghanaId = country::where('countryname', 'Ghana')->value('id');

        Itinerarie::create([
            'user_id' => 1,
            'title' => 'Cultural Trip',
            'destination' => $ghanaId, // Use the fetched id
            'budget' => 2000.00,
            'start_date' => Carbon::create(2024, 8, 1),
            'end_date' => Carbon::create(2024, 8, 10),
            'activities' => json_encode(['Cultural Tours', 'Historical Sites', 'Beach']),
            'travel_companions' => json_encode([
                ['name' => 'Alice Smith', 'age_group' => 'adult'],
                ['name' => 'Bob Smith', 'age_group' => 'teenager']
            ])
        ]);
    }
}
