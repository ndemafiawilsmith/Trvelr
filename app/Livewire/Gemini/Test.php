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

    }
    public function render()
    {

        HttpClient::init([
            'applicationId' => 'uCZgmxagUe6CE2fm_MjiIEwpY3iQIMFH6y5RhfsKYKU',
            'secret' => 'SUoyUSmVGnunDfCCBR9X24y_PDcLS3F8LQ_cZmy0bx4',
            'callbackUrl' => 'https://your-application.com/oauth/callback',
            'utmSource' => 'Trvelr'
        ]);


        $filters = [
            'query'    => 'Maasai Mara',
            'w'        => 1000,
            'h'        => 100,
            'orientation' => 'landscape'
        ];
        $result = Photo::random($filters);


        // $search = 'Nairobi National Park';
        // $page = 1;
        // $per_page = 1;
        // $orientation = 'landscape';

        // $result = Search::photos($search, $page, $per_page, $orientation);
        // $photos = $result->getResults();

    $var = "'''[ {
sdfds
SDfsdf
},
{dfsdf
}
]";

    // Remove everything before the first '['
    $var = preg_replace('/^[^\[]*\[/', '[', $var);

    // Remove everything after the last ']'
    $var = preg_replace('/\][^\]]*$/', ']', $var);

    // Output the result

    dd($var);
        dd($result);
        return view('livewire.gemini.test', with(compact('photos')));
    }
}
