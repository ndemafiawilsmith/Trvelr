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
        $countries  = country::all();
        foreach($countries as $country){

            $prompt = "
            Please provide detailed information about $country->countryname in JSON format. The information should include the following fields:

            1. Country Overview:
            - description
            - country_name
            - capital_city
            - official_language
            - currency
            - population (as a number)
            - time_zone

            Here's an example of the JSON format I expect, with the population formatted correctly:
            '''json
            {
                \"name\": \"Country Name\",
                \"capital_city\": \"Capital City\",
                \"official_languages\": [\"Language1\", \"Language2\"],
                \"currency\": \"Currency Name\",
                \"population\": 12345678,
                \"time_zones\": [\"Time Zone1\", \"Time Zone2\"],
                \"flag\": \"URL to the image of the flag\"
            }
            '''
        ";
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

        $data = json_decode($json, true);
        dd($data);
        countryDetails::create([
            'country_id' => $country->id, // Assuming country_id 1 exists in your countries table
            'description' => $data['description'],
            'name' => $data['country_name'],
            'capital_city' => $data['capital_city'],
            'official_languages' => $data['official_language'],
            'currency' => $data['currency'],
            'population' => $data['population'],
            'time_zones' => $data['time_zone']
        ]);

        }

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
