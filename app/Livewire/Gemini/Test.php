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
    public function mount()
    {

//         $data = '
//    {

//         "name": "Cameroon",

//         "capital_city": "Yaoundé",

//         "official_languages": [

//             "French",

//             "English"

//         ],

//         "currency": "Central African CFA franc (XAF)",

//         "population": 27.02 million (2023 est.),

//         "time_zones": [

//             "Central Africa Time (UTC+1)"

//         ],

//         "flag": "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Flag_of_Cameroon.svg/1280px-Flag_of_Cameroon.svg.png"

//     } ';
//         dd(json_decode($data, true));
        $prompt = '
        Please provide detailed information about Cameroon in JSON format. The information should include the following fields:

                1. Country Overview:
                - Description
                - Name of the country
                - Capital city
                - Official language(s)
                - Currency
                - Population
                - Time zone(s)
                - Flag

                Here\'s an example of the JSON format I expect Format the values(population), so it does not affect te json output:
                \'\'\'
                {
                "name": "Country Name",
                "capital_city": "Capital City",
                "official_languages": ["Language1", "Language2"],
                "currency": "Currency Name",
                "population": "Population Number",
                "time_zones": ["Time Zone1", "Time Zone2"],
                "flag": "URL to the image of the flag"
                }
                \'\'\'
        ';
        $stream = Gemini::geminipro()->streamGenerateContent($prompt);
        $content = "";
        foreach ($stream as $response) {
            $content .= $response->text();
        }

        $jon = $content;

         // Clean Json
        // Remove everything before the first '['
        $json = preg_replace('/^[^\[]*\{/', '{', $jon);

        // // Remove everything after the last ']'
        $json = preg_replace('/\}[^\]]*$/', '}', $json);

        dd(json_decode($json, true));
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
