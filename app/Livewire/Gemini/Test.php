<?php

namespace App\Livewire\Gemini;

use App\Models\country;
use App\Models\countryDetails;
use Gemini\Laravel\Facades\Gemini;
use Livewire\Component;
use Unsplash\HttpClient;
use Unsplash\OAuth2\Client\Provider\Unsplash;
use Unsplash\Photo;
use Unsplash\Search;

class Test extends Component
{
    public function mount()
    {

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
        //     return view('livewire.gemini.test', with(compact('photos')));
    }
}
