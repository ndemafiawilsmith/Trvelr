<?php

namespace App\Livewire\User;

use App\Models\country;
use App\Models\countryDetails;
use App\Models\countryImages;
use App\Models\itinerarie;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Unsplash\HttpClient;
use Unsplash\Photo;
use Unsplash\Search;

class PlanDetails extends Component
{
    public $itineraryDet;
    public $activities;
    public function mount($id)
    {
        $this->dispatch('clickk', el: 'dashboard');
        $this->itineraryDet = itinerarie::findorfail($id);
    }


    public function getImages($desc)
    {
        $country = country::where('countryname', $desc)->first();
        $CountryImages = countryImages::where('country_id', $country->id)->count();
        if ($CountryImages > 0) {
        } else {


            $pixabayClient = new \Pixabay\PixabayClient([
                'key' => '44352890-0bad1da01135aeecd7217db19'
            ]);

            // test it out
            $results = $pixabayClient->get(['q' => $desc . ', Africa'], true);
            // dd($results);

            foreach ($results['hits'] as $images) {
                countryImages::create(
                    [
                        'country_id' => $country->id,
                        'previewURL' => $images['previewURL'],
                        'imageURL' => $images['imageURL'], // Note: In your schema, the column name is 'imgeURL', correct if needed
                        'tags' => $images['tags'],
                        'status' => 1,
                        'type' => 'api',
                    ]
                );
            }
        }
        $photoo = countryImages::where('country_id', $country->id)->get();

        return $photoo;
    }


    #[Layout('layouts.dashboard')]
    public function render()
    {
        $itinerary = $this->itineraryDet;
        $desc = $itinerary->country->countryname;
        $photos = $this->getImages($desc);
        $activities = json_decode($itinerary->activities, true);

        // Get Country Deatils
        $countryDetails = countryDetails::where('country_id', $itinerary->country->id)->first();
        return view('livewire.user.plan-details', with(compact('itinerary', 'photos', 'activities', 'countryDetails')));
    }
}
