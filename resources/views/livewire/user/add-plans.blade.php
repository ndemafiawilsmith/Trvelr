<div>
    {{-- @if ($loading) --}}
        <div wire:loading>
            <div class="preloader js-preloader">
                <div class="preloader__wrap">
                    <div class="preloader__icon">
                        <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_41)">
                                <path
                                    d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z"
                                    fill="#3554D1" />
                            </g>

                            <defs>
                                <clipPath id="clip0_1_41">
                                    <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>

                <div class="preloader__title">GoTrip</div>
                @php
                    $africa_travel_facts = [
                        "The Sahara Desert is the largest hot desert in the world, covering approximately 9.2 million square kilometers.",
                        "Africa is home to the longest river in the world, the Nile, which stretches about 6,650 kilometers (4,130 miles).",
                        "Mount Kilimanjaro in Tanzania is the highest peak in Africa, standing at 5,895 meters (19,341 feet).",
                        "The continent boasts the world's largest terrestrial animal, the African elephant, which can weigh up to 6,000 kg (13,227 lbs).",
                        "Victoria Falls, located on the border of Zambia and Zimbabwe, is one of the largest and most famous waterfalls in the world.",
                        "Africa has 54 countries, making it the continent with the most countries.",
                        "The Great Migration in the Serengeti and Masai Mara is the largest terrestrial mammal migration in the world, involving over 1.5 million wildebeest and hundreds of thousands of other animals.",
                        "Madagascar, an island country off the southeastern coast of Africa, is home to about 5% of the world's plant and animal species, many of which are not found anywhere else on Earth.",
                        "Africa's Lake Victoria is the largest tropical lake in the world and the second-largest freshwater lake by surface area.",
                        "The Namib Desert, one of the world's oldest deserts, features some of the highest sand dunes, with some reaching over 300 meters (980 feet)."
                    ];

                    $randomFact = $africa_travel_facts[array_rand($africa_travel_facts)];
                @endphp
                <p class="" id='randomFact' style="text-align: center;"><b>Trvelr AI:</b> Planning</p>
                <p class="" style="text-align: center;"><b>Do you know</b>:{{$randomFact}}</p>
                @push('scripts')
                <script>
                    const facts = @json($africa_travel_facts);
                    let factIndex = 0;

                    function showNextFact() {
                        factIndex = (factIndex + 1) % facts.length;
                        document.getElementById('randomFact').innerHTML = `<b>Do you know</b>: ${facts[factIndex]}`;
                    }

                    setInterval(showNextFact, 5000);
                </script>
                @endpush
            </div>
        </div>
    {{-- @else --}}
        <style>
            .country-card {
                border-radius: 16px;
                border: 2px solid #ccc;
                padding: 8px;
                text-align: center;
                margin: 12px;
                max-width: 240px;
                min-height: 217px;
                transition: all 0.3s;
                display: block;
                color: inherit;
                text-decoration: none;
            }

            .country-card:hover {
                filter: brightness(0.3);
            }

            .country-card img {
                width: 100%;
                border-radius: 10px;
            }

            .country-card h5 {
                margin-top: 10px;
                font-weight: 700;
            }

            .country-card p {
                margin-top: 6px;
                color: #555;
            }

            .input-bordered {
                border: 2px solid #007bff;
                border-radius: 4px;
            }
        </style>
        {{-- Close your eyes. Count to one. That is how long forever feels. --}}
        <div class="row y-gap-20 justify-center items-end pb-60 lg:pb-40 md:pb-32">
            <div class="col-auto">

                <h4 class="text-30 dispaly-4">Answer quick questions for a tailored itinerary</h4>

            </div>

            <div class="col-auto">

            </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
            <div class="container my-4">
                @if ($step == 1)
                    <div class="text-center mb-4">
                        <h1 class="">I want to travel to...</h1>
                    </div>
                    <div class="container my-5">
                        <div class="row justify-content-center">
                            @foreach ($countries as $country)
                                <div class="col-md-4">
                                    <a href="javascript:void(0);"
                                        wire:click="updatePlan('country', '{{ $country->id }}')" class="country-card">
                                        <img src="{{ asset('mysql-country-with-flag/flags-medium/' . strtolower($country->code) . '.png') }}"
                                            alt="{{ $country->countryname }}">
                                        <h5>{{ $country->countryname }}</h5>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @elseif ($step == 2)
                    <div class="text-center mb-4">
                        <h1 class="">Add a title for your plan</h1>
                    </div>
                    <div class="container my-4">
                        <div class="row justify-content-center">
                            <form wire:submit.prevent='addTitle'>
                                <div class="col-md-8">
                                    <input type="text" wire:model='title' class="form-control input-bordered"
                                        placeholder="Vacation to Tanzania">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="d-flex mt-5">
                                    <button class="btn btn-primary" wire:click="prev()">Prev</button>
                                    <button class="btn btn-primary ml-auto" type="submit">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @elseif ($step == 3)
                    <div class="text-center mb-4">
                        <h1 class="">When is your Trip?</h1>
                    </div>
                    <div class="container my-4">
                        <div class="row justify-content-center">
                            <form wire:submit.prevent='addDate'>
                                <div class="col-md-8">
                                    <label for="start_date">Start Date</label>
                                    <input type="date" wire:model='start_date' class="form-control input-bordered"
                                        placeholder="Enter your Satrt Date here">
                                    @error('start_date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <label for="end_date">End Date</label>
                                    <input type="date" wire:model='end_date' class="form-control input-bordered"
                                        placeholder="Enter your End Date here">
                                    @error('end_date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="d-flex mt-5">
                                    <button class="btn btn-primary" wire:click="prev()">Prev</button>
                                    <button class="btn btn-primary ml-auto" type="submit">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @elseif ($step == 4)
                    <div class="text-center mb-4">
                        <h1 class="">What is your Budget?</h1>
                    </div>
                    <div class="container my-4">
                        <div class="row justify-content-center">
                            <form wire:submit.prevent='addBudget'>
                                <div class="col-md-8">
                                    <input type="text" wire:model='budget' class="form-control input-bordered"
                                        placeholder="Enter your Budget here in Us Dollars">
                                    @error('budget')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="d-flex mt-5">
                                    <button class="btn btn-primary" wire:click="prev()">Prev</button>
                                    <button class="btn btn-primary ml-auto"
                                        wire:click="updatePlan('budget', '')">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @elseif($step == 5)
                    <div class="text-center mb-4">
                        <h1 class="">Add Remark</h1>
                    </div>
                    <div class="container my-4">
                        <div class="row justify-content-center">
                            <form wire:submit.prevent='Submit'>
                                <div class="col-md-8">
                                    <!-- Remark Textarea -->
                                    <textarea wire:model='remark' class="form-control input-bordered" rows="5"
                                                placeholder="Add:
                                        - Add cultural experiences for day 3.
                                        - Include a visit to local markets on day 5.
                                        - Suggest a local cuisine tasting event on day 7."
                                                style="text-align: justify;">
                                        </textarea>

                                    @error('remark')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div wire:loading class="flex">
                                    <div class="loaderr"></div>
                                    <p>Generating Itineraries with AI</p>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-primary" wire:click="prev()">Prev</button>
                                    <button class="btn btn-primary ml-auto" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif

            </div>

        </div>
    {{-- @endif --}}
</div>
