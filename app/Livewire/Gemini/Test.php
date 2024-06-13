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

        $results = $pixabayClient->getImages([
                        'q' => 'Cameroon', // A URL encoded search term. If omitted, all images are returned. This value may not exceed 100 characters. Example: "yellow+flower"
                        'lang' => 'en', // Language code of the language to be searched in. Accepted values: cs, da, de, en, es, fr, id, it, hu, nl, no, pl, pt, ro, sk, fi, sv, tr, vi, th, bg, ru, el, ja, ko, zh. Default: "en"
                        'image_type' => 'all', // Filter results by image type. Accepted values: "all", "photo", "illustration", "vector". Default: "all"
                        'orientation' => 'horizontal', // Whether an image is wider than it is tall, or taller than it is wide. Accepted values: "all", "horizontal", "vertical". Default: "all"
                        'category' => '', // Filter results by category. Accepted values: backgrounds, fashion, nature, science, education, feelings, health, people, religion, places, animals, industry, computer, food, sports, transportation, travel, buildings, business, music
                        'min_width' => '0', // Minimum image width. Default: "0"
                        'min_height' => '0', // Minimum image height. Default: "0"
                        'colors' => 'grayscale,transparent', // Filter images by color properties. A comma separated list of values may be used to select multiple properties. Accepted values: "grayscale", "transparent", "red", "orange", "yellow", "green", "turquoise", "blue", "lilac", "pink", "white", "gray", "black", "brown
                        'editors_choice' => "false", // Select images that have received an Editor's Choice award. Accepted values: "true", "false". Default: "false"
                        'safesearch' => "true", // A flag indicating that only images suitable for all ages should be returned. Accepted values: "true", "false". Default: "false"
                        'order' => 'popular', // How the results should be ordered. Accepted values: "popular", "latest". Default: "popular"
                        'page' => 1, // Returned search results are paginated. Use this parameter to select the page number. Default: 1
                        'per_page' => 200, // Determine the number of results per page. Accepted values: 3 - 200. Default: 20
                    ],true);

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
