<?php

namespace App\Livewire\User;

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
    public function mount($id){
        $this->dispatch('clickk', el:'dashboard');
        $this->itineraryDet = itinerarie::findorfail($id);
    }


    public function getImages($desc){
        HttpClient::init([
            'applicationId' => 'uCZgmxagUe6CE2fm_MjiIEwpY3iQIMFH6y5RhfsKYKU',
            'secret' => 'SUoyUSmVGnunDfCCBR9X24y_PDcLS3F8LQ_cZmy0bx4',
            'callbackUrl' => 'https://your-application.com/oauth/callback',
            'utmSource' => 'Trvelr'
        ]);

        $search = $desc. ', Africa';
        $page = 6;
        $per_page = 15;
        $orientation = 'landscape';

        return Search::photos($search, $page, $per_page, $orientation)->getResults();

        // return Photo::random($filters);
    }


    #[Layout('layouts.dashboard')]
    public function render()
    {
        $itinerary = $this->itineraryDet;
        $desc = $itinerary->country->countryname;
        $photos = $this->getImages($desc);
        $activities = json_decode($itinerary->activities, true);
        // dd($activities);
        return view('livewire.user.plan-details', with(compact('itinerary', 'photos', 'activities')));
    }


}
