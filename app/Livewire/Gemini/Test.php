<?php

namespace App\Livewire\Gemini;

use Gemini\Laravel\Facades\Gemini;
use Livewire\Component;
use Unsplash\HttpClient;
use Unsplash\OAuth2\Client\Provider\Unsplash;
use Unsplash\Photo;
use Unsplash\Search;

class Test extends Component
{
    public function mount(){
        // $result = Gemini::geminipro()->generateContent('Hello how are you? Who are you?');
        // dd($result->text());
        $pixabayClient = new \Pixabay\PixabayClient([
            'key' => '44352890-0bad1da01135aeecd7217db19'
        ]);

        // test it out
        $results = $pixabayClient->get(['q' => 'Touristic Areas cameroon '], true);

        dd($results);
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
