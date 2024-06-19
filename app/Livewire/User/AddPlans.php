<?php

namespace App\Livewire\User;

use App\Models\country;
use App\Models\itinerarie;
use Gemini\Laravel\Facades\Gemini;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Exception\RequestException;

class AddPlans extends Component
{
    public $country;
    public $budget;
    public $title;
    public $start_date;
    public $end_date;
    public $remark;
    public $travelCompanion;
    public $step = 1;
    public $loading = false;
    public $result;


    // Real-time validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
    }


    #[Layout('layouts.dashboard')]
    public function render()
    {
        $countries = country::all();
        return view('livewire.user.add-plans', with(compact('countries')));
    }

    public function addTitle()
    {
        $this->validate([
            'title' => 'required|min:3|max:255',
        ]);
        $this->step += 1;
    }

    public function addBudget()
    {
        $this->validate([
            'budget' => 'required|numeric',
        ]);
        $this->step += 1;
    }

    public function addRemark()
    {
        $this->validate([
            'remark' => 'required',
        ]);
        $this->step += 1;
    }

    public function addDate()
    {
        $this->validate([
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        $this->step += 1;
    }

    public function updatePlan($function, $value)
    {
        if ($function == 'country') {
            $this->country = $value;
            $this->step += 1;
        }
    }

    public function Submit()
    {

        $itinerary = new itinerarie();

        // Assign values from the dump (replace with actual properties from your component)
        $itinerary->user_id = Auth::user()->id;
        $itinerary->destination = $this->country;
        $itinerary->title = $this->title;
        $itinerary->start_date = $this->start_date;
        $itinerary->end_date = $this->end_date;
        $itinerary->budget = $this->budget;
        $itinerary->remark = $this->remark;
        $itinerary->status = 'start';

        // Save the itinerary
        $itinerary->save();



        // Extract necessary details from the itinerary
        $budget = $itinerary->budget;
        $destination = $itinerary->country->countryname;
        $startDate = $itinerary->start_date;
        $endDate = $itinerary->end_date;
        $allergies = Auth::user()->allergies; // Assuming allergies are fixed or can be set similarly
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

        // return redirect(route('compute', ['id' => $itinerary->id]));

         // Run Gemini API call asynchronously
         $this->generateItinerary($prompt);

         // Clean Json
         // Remove everything before the first '['
         $json = preg_replace('/^[^\[]*\[/', '[', $this->result);

         // // Remove everything after the last ']'
         $json = preg_replace('/\][^\]]*$/', ']', $json);


         // check if it's json first then add Json to itinirary table
         $itinerary->update(['activities' => $json]);

         // Redirect to itinerary details page
         return redirect()->route('plan.details', ['id' => $itinerary->id]);
    }


    public function generateItinerary($prompt)
    {
        try {
            // Asynchronously call Gemini API (this example assumes a synchronous call for simplicity)
            $stream = Gemini::geminipro()->generateContent($prompt);

            // foreach ($stream as $response) {
            //     $this->result .= $response->text();
            // }
            // Addedd other API
            $this->result = $stream->text();
        } catch (\Exception $e) {
            // Dump and die the error for debugging
            dd($e);
        }

    }






    public function next()
    {
        $this->step += 1;
    }

    public function prev()
    {
        $this->step -= 1;
    }
}
