<?php

namespace App\Livewire\User;

use App\Models\itinerarie;
use Gemini\Laravel\Facades\Gemini;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ComputePlan extends Component
{
    public $itinerary;
    public $result;
    public $loading = false;

    public function mount($id)
    {
        $itinerary = itinerarie::findOrFail($id);
        $this->itinerary = $itinerary;
        // Extract necessary details from the itinerary
        $budget = $itinerary->budget;
        $destination = $itinerary->country->countryname;
        $startDate = $itinerary->start_date;
        $endDate = $itinerary->end_date;
        $allergies = Auth::user()->allergies; // Assuming allergies are fixed or can be set similarly
        $allergies = implode(", ", $allergies);
        $remark = $itinerary->remark;

        // Create the prompt
        $prompt = "
    You are an AI travel planner assistant. Your task is to create a detailed travel itinerary for a user who is planning a trip. The user has provided the following details:

    - Budget: $$budget
    - Destination: $destination
    - Start Date: $startDate
    - End Date: $endDate
    - Allergies: $allergies
    - User Remark: $remark

    Based on these details, generate a diverse and engaging itinerary that includes daily activities, specific times, locations, and the budget for each activity. Ensure the activities are suitable for the user's overall budget and preferences, and consider the allergy information when suggesting meal options. Provide activities that highlight local culture, adventure, and natural beauty. The output should be formatted as JSON.

    Example output format:
    '''
      [
        {
          \"day\": 1,
          \"date\": \"2024-03-10\",
          \"activities\": [
            {\"time\": \"10:00 AM\", \"activity\": \"Arrival in Nairobi\", \"budget\": \"\$50\"},
            {\"time\": \"12:00 PM\", \"activity\": \"Check-in at hotel\", \"budget\": \"\$100\"},
            {\"time\": \"03:00 PM\", \"activity\": \"Visit Nairobi National Museum\", \"budget\": \"\$20\"}
          ]
        },
        {
          \"day\": 2,
          \"date\": \"2024-03-11\",
          \"activities\": [
            {\"time\": \"09:00 AM\", \"activity\": \"Full-day safari at Nairobi National Park\", \"budget\": \"\$150\"},
            {\"time\": \"07:00 PM\", \"activity\": \"Dinner at local restaurant (peanut-free options)\", \"budget\": \"\$30\"}
          ]
        }
      ]
    '''

    Please generate the complete itinerary in the JSON format as shown based on the given details. Make sure the response is pure json no extra strings or characters added.
    ";


        $this->loading = true;

        // Run Gemini API call asynchronously
        $this->generateItinerary($prompt);

        // Clean Json
        // Remove everything before the first '['
        $json = preg_replace('/^[^\[]*\[/', '[', $this->result);

        // // Remove everything after the last ']'
        $json = preg_replace('/\][^\]]*$/', ']', $json);


        // check if it's json first then add Json to itinirary table
        $this->itinerary->update(['activities' => $json]);

        // Redirect to itinerary details page
        return redirect()->route('plan.details', ['id' => $id]);

    }


    public function generateItinerary($prompt)
    {
        // Asynchronously call Gemini API (this example assumes a synchronous call for simplicity)
        $stream = Gemini::geminipro()->streamGenerateContent($prompt);

        foreach ($stream as $response) {
            $this->result .= $response->text();
        }
    }



    public function render()
    {
        // dd($this->result);

        // Now $json contains the cleaned JSON string
        // dd($json);
        // dd(json_decode($json, true));
        return view('livewire.user.compute-plan');
    }
}
