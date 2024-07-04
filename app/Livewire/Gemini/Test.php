<?php

namespace App\Livewire\Gemini;

use App\Models\country;
use App\Models\countryDetails;
use Gemini\Laravel\Facades\Gemini;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Unsplash\HttpClient;
use Unsplash\OAuth2\Client\Provider\Unsplash;
use Unsplash\Photo;
use Unsplash\Search;

class Test extends Component
{
    public function mount()
    {


        // Create the prompt
        $prompt = "
        You are an AI travel planner assistant. Your task is to create a detailed travel itinerary for a user who is planning a trip. The user has provided the following details:

        - Budget: $1000
        - Destination: Kenya
        - Start Date: 02/07/2024
        - End Date: 07/07/2024
        - Allergies: Peanuts
        - User Remark:

        Based on these details, generate a diverse and engaging itinerary that includes daily activities, specific times, locations, latitude and longitude coordinates, and the budget for each activity. Ensure the activities are suitable for the user's overall budget and preferences, and consider the allergy information when suggesting meal options. Provide activities that highlight local culture, adventure, and natural beauty. The output should be formatted as JSON.

        Example output format:
        '''
        [
          {
            \"day\": 1,
            \"date\": \"2024-07-02\",
            \"activities\": [
              {
                \"time\": \"10:00 AM\",
                \"activity\": \"Arrival in Nairobi\",
                \"budget\": \"\$50\",
                \"location\": \"Nairobi Jomo Kenyatta International Airport\",
                \"lat\": -1.319167,
                \"lng\": 36.9275,
                \"image\": \"https://example.com/nairobi_airport.jpg\"
              },
              {
                \"time\": \"12:00 PM\",
                \"activity\": \"Check-in at hotel\",
                \"budget\": \"\$100\",
                \"location\": \"Hotel XYZ\",
                \"lat\": -1.28333,
                \"lng\": 36.81667,
                \"image\": \"https://example.com/hotel_xyz.jpg\"
              },
              {
                \"time\": \"03:00 PM\",
                \"activity\": \"Visit Nairobi National Museum\",
                \"budget\": \"\$20\",
                \"location\": \"Nairobi National Museum\",
                \"lat\": -1.276222,
                \"lng\": 36.812739,
                \"image\": \"https://example.com/nairobi_museum.jpg\"
              }
            ]
          },
          {
            \"day\": 2,
            \"date\": \"2024-07-03\",
            \"activities\": [
              {
                \"time\": \"09:00 AM\",
                \"activity\": \"Full-day safari at Nairobi National Park\",
                \"budget\": \"\$150\",
                \"location\": \"Nairobi National Park\",
                \"lat\": -1.361111,
                \"lng\": 36.851111,
                \"image\": \"https://example.com/nairobi_park.jpg\"
              },
              {
                \"time\": \"07:00 PM\",
                \"activity\": \"Dinner at local restaurant (peanut-free options)\",
                \"budget\": \"\$30\",
                \"location\": \"Peanut-Free Restaurant\",
                \"lat\": -1.292066,
                \"lng\": 36.821946,
                \"image\": \"https://example.com/restaurant.jpg\"
              }
            ]
          }
        ]
        '''

        Note: The images should be actual image links to places the user will be visiting on that day. You can search for relevant images online. Ensure the latitude and longitude coordinates are accurate and correspond to the actual locations.

        Please generate the complete itinerary in the JSON format as shown based on the given details. Make sure the response is pure JSON with no extra strings or characters added.
        ";






        // Run Gemini API call asynchronously
        $this->generateItinerary($prompt);
    }
    public function render()
    {



        // // Remove everything before the first '['
        // $var = preg_replace('/^[^\[]*\[/', '[', $var);

        // // Remove everything after the last ']'
        // $var = preg_replace('/\][^\]]*$/', ']', $var);

        // // Output the result

        // dd($var);
        //     dd($result);
            return view('livewire.gemini.test');
    }


    public function generateItinerary($prompt)
    {
        try {
            // Make the POST request to the external API
            $response = Http::post('https://e-mpactpharma.com/api/gemini', [
                'prompt' => $prompt,
                'code' => "J@mes"
            ]);

            // Check if the request was successful
            if ($response->successful()) {
                // Return the response body as JSON
                dd($response->json());
                // $this->result = $response->json();
                // dd($response->json());
                // return response()->json($response->json(), 201);
            } else {
                // Handle the failed request
                return response()->json(['error' => 'Failed to fetch data from Gemini API'], $response->status());
            }
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json(['error' => $e->getMessage()], 500);
        }


        // try {
        //     // Asynchronously call Gemini API (this example assumes a synchronous call for simplicity)
        //     $stream = Gemini::geminipro()->generateContent($prompt);

        //     // foreach ($stream as $response) {
        //     //     $this->result .= $response->text();
        //     // }
        //     // Addedd other API
        //     $this->result = $stream->text();
        // } catch (\Exception $e) {
        //     // Dump and die the error for debugging
        //     dd($e);
        // }

    }
}
