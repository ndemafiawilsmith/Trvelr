<div>
    {{-- The whole world belongs to you. --}}
    <section class="py-10 d-flex items-center bg-light-2">
        <div class="container">
            <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">
                    <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
                        <div class="col-auto">
                            <div class="">Home</div>
                        </div>
                        <div class="col-auto">
                            <div class="">></div>
                        </div>
                        <div class="col-auto">
                            <div class="">Plans</div>
                        </div>
                        <div class="col-auto">
                            <div class="">></div>
                        </div>
                        <div class="col-auto">
                            <div class="text-dark-1">Plan Details</div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-auto">
              <a href="#" class="text-14 text-blue-1 underline">All Hotel in London</a>
            </div> --}}
            </div>
        </div>
    </section>

    <section class="pt-40">
        <div class="container">
            <div class="row y-gap-15 justify-between items-end">
                <div class="col-auto">
                    <h1 class="text-30 fw-600">{{ $itinerary->title }}</h1>

                    <div class="row x-gap-20 y-gap-20 items-center pt-10">
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                <div class="d-flex x-gap-5 items-center">

                                    <i class="icon-star text-10 text-yellow-1"></i>

                                    <i class="icon-star text-10 text-yellow-1"></i>

                                    <i class="icon-star text-10 text-yellow-1"></i>

                                    <i class="icon-star text-10 text-yellow-1"></i>

                                    <i class="icon-star text-10 text-yellow-1"></i>

                                </div>

                                <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="row x-gap-10 items-center">
                                <div class="col-auto">
                                    <div class="d-flex x-gap-5 items-center">
                                        <i class="icon-placeholder text-16 text-light-1"></i>
                                        <div class="text-15 text-light-1">{{ $itinerary->country->countryname }}</div>
                                    </div>
                                </div>

                                {{-- <div class="col-auto">
                      <button data-x-click="mapFilter" class="text-blue-1 text-15 underline">Show on map</button>
                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="row x-gap-10 y-gap-10">
                        <div class="col-auto">
                            <button class="button px-15 py-10 -blue-1">
                                <i class="icon-share mr-10"></i>
                                Share
                            </button>
                        </div>

                        <div class="col-auto">
                            <button class="button px-15 py-10 -blue-1 bg-light-2">
                                <i class="icon-heart mr-10"></i>
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40 js-pin-container">
        <div class="container">
            <div class="row y-gap-30">
                <div class="col-lg-8">
                    <div class="relative d-flex justify-center overflow-hidden js-section-slider"
                        data-slider-cols="base-1" data-nav-prev="js-img-prev" data-nav-next="js-img-next">
                        <div class="swiper-wrapper">
                            @foreach ($photos as $photo)
                                <div class="swiper-slide">
                                    <img src="{{ $photo['urls']['small'] }}" alt="image"
                                        class="rounded-4 col-12 h-full object-cover">
                                </div>
                            @endforeach

                        </div>

                        <div class="absolute h-full col-11">

                            <button
                                class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-prev">
                                <i class="icon icon-chevron-left text-12"></i>
                            </button>

                            <button
                                class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-next">
                                <i class="icon icon-chevron-right text-12"></i>
                            </button>

                        </div>

                        <div class="absolute h-full col-12 z-2 px-20 py-20 d-flex justify-end items-end">
                            @php
                                $first = $photos[0]['urls']['regular'];
                            @endphp
                            <a href="{{ $first }}"
                                class="button -blue-1 px-24 py-15 bg-white text-dark-1 js-gallery"
                                data-gallery="gallery2">
                                See All Photos
                            </a>
                            @foreach ($photos as $index => $photo)
                                @if ($index == 0)
                                    @continue
                                @endif
                                <a href="{{ $photo['urls']['regular'] }}" class="js-gallery"
                                    data-gallery="gallery2"></a>
                            @endforeach

                        </div>
                    </div>

                    <h3 class="text-22 fw-500 mt-30">
                        Tour snapshot
                    </h3>

                    <div class="row y-gap-30 justify-between pt-20">

                        <div class="col-md-auto col-6">
                            <div class="d-flex">
                                <i class="icon-clock text-22 text-blue-1 mr-10"></i>
                                <div class="text-15 lh-15">
                                    Duration:<br> 11h
                                </div>
                            </div>
                        </div>

                        <div class="col-md-auto col-6">
                            <div class="d-flex">
                                <i class="icon-customer text-22 text-blue-1 mr-10"></i>
                                <div class="text-15 lh-15">
                                    Group size:<br> 52
                                </div>
                            </div>
                        </div>

                        <div class="col-md-auto col-6">
                            <div class="d-flex">
                                <i class="icon-route text-22 text-blue-1 mr-10"></i>
                                <div class="text-15 lh-15">
                                    Near public<br> transportation
                                </div>
                            </div>
                        </div>

                        <div class="col-md-auto col-6">
                            <div class="d-flex">
                                <i class="icon-access-denied text-22 text-blue-1 mr-10"></i>
                                <div class="text-15 lh-15">
                                    Free cancellation <br><a href='#' class='text-blue-1 underline'>Learn more</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="border-top-light mt-40 mb-40"></div>

                    <div class="row x-gap-40 y-gap-40">
                        <div class="col-12">
                            <h3 class="text-22 fw-500">Overview</h3>

                            <p class="text-dark-1 text-15 mt-20">
                                Unless you hire a car, visiting Stonehenge, Bath, and Windsor Castle in one day is next
                                to impossible. Designed specifically for travelers with limited time in London, this
                                tour allows you to check off a range of southern England's historical attractions in
                                just one day by eliminating the hassle of traveling between each one independently.
                                Travel by comfortable coach and witness your guide bring each UNESCO World Heritage Site
                                to life with commentary. Plus, all admission tickets are included in the tour price.
                            </p>

                            <a href="#" class="d-block text-14 text-blue-1 fw-500 underline mt-10">Show More</a>
                        </div>

                        <div class="col-md-6">
                            <h5 class="text-16 fw-500">Available languages</h5>
                            <div class="text-15 mt-10">German, Chinese, Portuguese, Japanese, English, Italian, Chinese,
                                French, Spanish</div>
                        </div>

                        <div class="col-md-6">
                            <h5 class="text-16 fw-500">Cancellation policy</h5>
                            <div class="text-15 mt-10">For a full refund, cancel at least 24 hours in advance of the
                                start date of the experience.</div>
                        </div>

                        {{-- <div class="col-12">
                            <h5 class="text-16 fw-500">Highlights</h5>
                            <ul class="list-disc text-15 mt-10">
                                <li>Travel between the UNESCO World Heritage sites aboard a comfortable coach</li>
                                <li>Explore with a guide to delve deeper into the history</li>
                                <li>Great for history buffs and travelers with limited time</li>
                            </ul>
                        </div> --}}
                    </div>

                    {{-- <div class="mt-40 border-top-light">
                        <div class="row x-gap-40 y-gap-40 pt-40">
                            <div class="col-12">
                                <h3 class="text-22 fw-500">What's Included</h3>

                                <div class="row x-gap-40 y-gap-40 pt-20">
                                    <div class="col-md-6">
                                        <div class="text-dark-1 text-15">
                                            <i class="icon-check text-10 mr-10"></i> Entry ticket to Harry Potter
                                            Warner Bros Studio Tour London
                                        </div>
                                        <div class="text-dark-1 text-15">
                                            <i class="icon-check text-10 mr-10"></i> Return transfers in
                                            air-conditioned coach
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="text-dark-1 text-15">
                                            <i class="icon-close text-green-2 text-10 mr-10"></i> Food and drinks
                                        </div>
                                        <div class="text-dark-1 text-15">
                                            <i class="icon-close text-green-2 text-10 mr-10"></i> Gratuities
                                        </div>
                                        <div class="text-dark-1 text-15">
                                            <i class="icon-close text-green-2 text-10 mr-10"></i> Digital guide
                                            available in 10 different languages at additional cost
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="col-lg-4">
                    <div class="d-flex justify-end js-pin-content">
                        <div class="w-360 lg:w-full d-flex flex-column items-center">
                            <div class="px-30 py-30 rounded-4 border-light bg-white shadow-4">
                                <div class="text-14 text-light-1">
                                    From <span class="text-20 fw-500 text-dark-1 ml-5">US$72</span>
                                </div>

                                <div class="row y-gap-20 pt-30">
                                    <div class="col-12">

                                        <div
                                            class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar js-calendar-el">

                                            <div data-x-dd-click="searchMenu-date">
                                                <h4 class="text-15 fw-500 ls-2 lh-16">Date</h4>

                                                <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                    <span class="js-first-date">Wed 2 Mar</span>
                                                    -
                                                    <span class="js-last-date">Fri 11 Apr</span>
                                                </div>
                                            </div>


                                            <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date"
                                                data-x-dd-toggle="-is-active">
                                                <div class="bg-white px-30 py-30 rounded-4">
                                                    <div class="elCalendar js-calendar-el-calendar"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div
                                            class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">

                                            <div data-x-dd-click="searchMenu-guests">
                                                <h4 class="text-15 fw-500 ls-2 lh-16">Number of travelers</h4>

                                                <div class="text-15 text-light-1 ls-2 lh-16">
                                                    <span class="js-count-adult">2</span> adults
                                                    -
                                                    <span class="js-count-child">1</span> childeren
                                                    -
                                                    <span class="js-count-room">1</span> room
                                                </div>
                                            </div>


                                            <div class="searchMenu-guests__field shadow-2"
                                                data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                                                <div class="bg-white px-30 py-30 rounded-4">
                                                    <div class="row y-gap-10 justify-between items-center">
                                                        <div class="col-auto">
                                                            <div class="text-15 fw-500">Adults</div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="d-flex items-center js-counter"
                                                                data-value-change=".js-count-adult">
                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                    <i class="icon-minus text-12"></i>
                                                                </button>

                                                                <div class="flex-center size-20 ml-15 mr-15">
                                                                    <div class="text-15 js-count">2</div>
                                                                </div>

                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                                    <i class="icon-plus text-12"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="border-top-light mt-24 mb-24"></div>

                                                    <div class="row y-gap-10 justify-between items-center">
                                                        <div class="col-auto">
                                                            <div class="text-15 lh-12 fw-500">Children</div>
                                                            <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17
                                                            </div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="d-flex items-center js-counter"
                                                                data-value-change=".js-count-child">
                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                    <i class="icon-minus text-12"></i>
                                                                </button>

                                                                <div class="flex-center size-20 ml-15 mr-15">
                                                                    <div class="text-15 js-count">1</div>
                                                                </div>

                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                                    <i class="icon-plus text-12"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="border-top-light mt-24 mb-24"></div>

                                                    <div class="row y-gap-10 justify-between items-center">
                                                        <div class="col-auto">
                                                            <div class="text-15 fw-500">Rooms</div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="d-flex items-center js-counter"
                                                                data-value-change=".js-count-room">
                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                    <i class="icon-minus text-12"></i>
                                                                </button>

                                                                <div class="flex-center size-20 ml-15 mr-15">
                                                                    <div class="text-15 js-count">1</div>
                                                                </div>

                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                                    <i class="icon-plus text-12"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12">
                                        <button
                                            class="button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white">
                                            Book Now
                                        </button>
                                    </div>
                                </div>

                                <div class="d-flex items-center pt-20">
                                    <div class="size-40 flex-center bg-light-2 rounded-full">
                                        <i class="icon-heart text-16 text-green-2"></i>
                                    </div>
                                    <div class="text-14 lh-16 ml-10">94% of travelers recommend this experience</div>
                                </div>
                            </div>

                            <div class="px-30">
                                <div class="text-14 text-light-1 mt-30">Not sure? You can cancel this reservation up to
                                    24 hours in advance for a full refund.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="pt-40">
        <div class="container">
            <div class="pt-40 border-top-light">
                <div class="row x-gap-40 y-gap-40">
                    <div class="col-auto">
                        <h3 class="text-22 fw-500">Important information</h3>
                    </div>
                </div>

                <div class="row x-gap-40 y-gap-40 justify-between pt-20">
                    <div class="col-lg-4 col-md-6">
                        <div class="fw-500 mb-10">Inclusions</div>
                        <ul class="list-disc">
                            <li>Superior Coach, Wi-Fi and USB Charging On-board</li>
                            <li>Expert guide</li>
                            <li>Admission to Windsor Castle (if option selected)</li>
                            <li>Admission to Stonehenge</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="fw-500 mb-10">Departure details</div>
                        <div class="text-15">
                            Departures from 01st April 2022: Tour departs at 8 am (boarding at 7.30 am), Victoria Coach
                            Station Gate 1-5
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="fw-500 mb-10">Know before you go</div>
                        <ul class="list-disc">
                            <li>Duration: 11h</li>
                            <li>Mobile tickets accepted</li>
                            <li>Instant confirmation</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="fw-500 mb-10">Exclusions</div>
                        <ul class="list-disc">
                            <li>Hotel pick-up and drop-off</li>
                            <li>Gratuities</li>
                            <li>Lunch</li>
                        </ul>
                    </div>

                    <div class="col-12">
                        <div class="fw-500 mb-10">Additional information</div>
                        <ul class="list-disc">
                            <li>Confirmation will be received at time of booking</li>
                            <li>Departs at 8am (boarding at 7.30am), Victoria Coach Station Gate 1-5, 164 Buckingham
                                Palace Road, London, SW1W 9TP</li>
                            <li>As Windsor Castle is a working royal palace, sometimes the entire Castle or the State
                                Apartments within the Castle need to be closed at short notice. (if selected this
                                option)</li>
                            <li>Stonehenge is closed on 21 June due to the Summer Solstice. During this time, we will
                                instead visit the Avebury Stone Circle.</li>
                            <li>Please note: the tour itinerary and order may change</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="container mt-40 mb-40">
        <div class="border-top-light"></div>
    </div>


    {{-- <section>
        <div class="container">
            <h3 class="text-22 fw-500 mb-20">Itinerary</h3>

            <div class="row y-gap-30">
                <div class="col-lg-4">
                    <div class="relative">
                        <div class="border-test"></div>

                        <div class="accordion -map row y-gap-20 js-accordion">

                            <div class="col-12">
                                <div class="accordion__item ">
                                    <div class="d-flex">
                                        <div
                                            class="accordion__icon size-40 flex-center bg-blue-2 text-blue-1 rounded-full">
                                            <div class="text-14 fw-500">1</div>
                                        </div>

                                        <div class="ml-20">
                                            <div class="text-16 lh-15 fw-500">Windsor Castle</div>
                                            <div class="text-14 lh-15 text-light-1 mt-5">Stop: 60 minutes - Admission
                                                included</div>

                                            <div class="accordion__content">
                                                <div class="pt-15 pb-15">
                                                    <img src="{{ asset('img/lists/tour/single/2.png') }}"
                                                        alt="image" class="rounded-4 mt-15">
                                                    <div class="text-14 lh-17 mt-15">Our first stop is Windsor Castle,
                                                        the ancestral home of the British Royal family for more than 900
                                                        years and the largest, continuously occupied castle in Europe.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion__button">
                                                <button data-open-change-title="See less"
                                                    class="d-block lh-15 text-14 text-blue-1 underline fw-500 mt-5">
                                                    See details & photo
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="accordion__item js-accordion-item-active">
                                    <div class="d-flex">
                                        <div
                                            class="accordion__icon size-40 flex-center bg-blue-2 text-blue-1 rounded-full">
                                            <div class="text-14 fw-500">2</div>
                                        </div>

                                        <div class="ml-20">
                                            <div class="text-16 lh-15 fw-500">St. George&#39;s Chapel</div>
                                            <div class="text-14 lh-15 text-light-1 mt-5">Stop: 60 minutes - Admission
                                                included</div>

                                            <div class="accordion__content">
                                                <div class="pt-15 pb-15">
                                                    <img src="{{ asset('img/lists/tour/single/2.png') }}"
                                                        alt="image" class="rounded-4 mt-15">
                                                    <div class="text-14 lh-17 mt-15">Our first stop is Windsor Castle,
                                                        the ancestral home of the British Royal family for more than 900
                                                        years and the largest, continuously occupied castle in Europe.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion__button">
                                                <button data-open-change-title="See less"
                                                    class="d-block lh-15 text-14 text-blue-1 underline fw-500 mt-5">
                                                    See details & photo
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="accordion__item ">
                                    <div class="d-flex">
                                        <div
                                            class="accordion__icon size-40 flex-center bg-blue-2 text-blue-1 rounded-full">
                                            <div class="text-14 fw-500">3</div>
                                        </div>

                                        <div class="ml-20">
                                            <div class="text-16 lh-15 fw-500">The Roman Baths</div>
                                            <div class="text-14 lh-15 text-light-1 mt-5">Stop: 60 minutes - Admission
                                                included</div>

                                            <div class="accordion__content">
                                                <div class="pt-15 pb-15">
                                                    <img src="{{ asset('img/lists/tour/single/2.png') }}"
                                                        alt="image" class="rounded-4 mt-15">
                                                    <div class="text-14 lh-17 mt-15">Our first stop is Windsor Castle,
                                                        the ancestral home of the British Royal family for more than 900
                                                        years and the largest, continuously occupied castle in Europe.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion__button">
                                                <button data-open-change-title="See less"
                                                    class="d-block lh-15 text-14 text-blue-1 underline fw-500 mt-5">
                                                    See details & photo
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="accordion__item ">
                                    <div class="d-flex">
                                        <div
                                            class="accordion__icon size-40 flex-center bg-blue-2 text-blue-1 rounded-full">
                                            <div class="text-14 fw-500">4</div>
                                        </div>

                                        <div class="ml-20">
                                            <div class="text-16 lh-15 fw-500">Stonehenge</div>
                                            <div class="text-14 lh-15 text-light-1 mt-5">Stop: 60 minutes - Admission
                                                included</div>

                                            <div class="accordion__content">
                                                <div class="pt-15 pb-15">
                                                    <img src="{{ asset('img/lists/tour/single/2.png') }}"
                                                        alt="image" class="rounded-4 mt-15">
                                                    <div class="text-14 lh-17 mt-15">Our first stop is Windsor Castle,
                                                        the ancestral home of the British Royal family for more than 900
                                                        years and the largest, continuously occupied castle in Europe.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion__button">
                                                <button data-open-change-title="See less"
                                                    class="d-block lh-15 text-14 text-blue-1 underline fw-500 mt-5">
                                                    See details & photo
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="map rounded-4 js-map-places"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-40 mb-40">
        <div class="border-top-light"></div>
    </div> --}}

    {{-- FAqs --}}
    {{-- <section>
        <div class="container">
            <div class="row y-gap-20">
                <div class="col-lg-4">
                    <h2 class="text-22 fw-500">FAQs about<br> The Crown Hotel</h2>
                </div>

                <div class="col-lg-8">
                    <div class="accordion -simple row y-gap-20 js-accordion">

                        <div class="col-12">
                            <div class="accordion__item px-20 py-20 border-light rounded-4">
                                <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                        <i class="icon-plus"></i>
                                        <i class="icon-minus"></i>
                                    </div>

                                    <div class="button text-dark-1">What do I need to hire a car?</div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="accordion__item px-20 py-20 border-light rounded-4">
                                <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                        <i class="icon-plus"></i>
                                        <i class="icon-minus"></i>
                                    </div>

                                    <div class="button text-dark-1">How old do I have to be to rent a car?</div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="accordion__item px-20 py-20 border-light rounded-4">
                                <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                        <i class="icon-plus"></i>
                                        <i class="icon-minus"></i>
                                    </div>

                                    <div class="button text-dark-1">Can I book a hire car for someone else?</div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="accordion__item px-20 py-20 border-light rounded-4">
                                <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                        <i class="icon-plus"></i>
                                        <i class="icon-minus"></i>
                                    </div>

                                    <div class="button text-dark-1">How do I find the cheapest car hire deal?</div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="accordion__item px-20 py-20 border-light rounded-4">
                                <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                        <i class="icon-plus"></i>
                                        <i class="icon-minus"></i>
                                    </div>

                                    <div class="button text-dark-1">What should I look for when I&#39;m choosing a car?
                                    </div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-40 mb-40">
        <div class="border-top-light"></div>
    </div> --}}

    {{-- Guest Reviews --}}
    {{-- <section>
        <div class="container">
            <div class="row y-gap-40 justify-between">
                <div class="col-xl-3">
                    <h3 class="text-22 fw-500">Guest reviews</h3>

                    <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-70 text-22 fw-600 text-white">4.8</div>
                        <div class="ml-20">
                            <div class="text-16 text-dark-1 fw-500 lh-14">Exceptional</div>
                            <div class="text-15 text-light-1 lh-14 mt-4">3,014 reviews</div>
                        </div>
                    </div>

                    <div class="row y-gap-20 pt-20">

                        <div class="col-12">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Location</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Staff</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Cleanliness</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Value for money</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Comfort</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Facilities</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Free WiFi</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="row y-gap-40">


                        <div class="col-12">
                            <div class="row x-gap-20 y-gap-20 items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/avatars/2.png') }}" alt="image">
                                </div>
                                <div class="col-auto">
                                    <div class="fw-500 lh-15">Tonko</div>
                                    <div class="text-14 text-light-1 lh-15">March 2022</div>
                                </div>
                            </div>

                            <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
                            <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location.
                                Located in quiet small street, but just 50 meters from main street and bus stop. Tube
                                station is short walk, just like two grocery stores. </p>


                            <div class="row x-gap-30 y-gap-30 pt-20">

                                <div class="col-auto">
                                    <img src="{{ asset('img/testimonials/1/1.png') }}" alt="image"
                                        class="rounded-4">
                                </div>

                                <div class="col-auto">
                                    <img src="{{ asset('img/testimonials/1/2.png') }}" alt="image"
                                        class="rounded-4">
                                </div>

                                <div class="col-auto">
                                    <img src="{{ asset('img/testimonials/1/3.png') }}" alt="image"
                                        class="rounded-4">
                                </div>

                                <div class="col-auto">
                                    <img src="{{ asset('img/testimonials/1/4.png') }}" alt="image"
                                        class="rounded-4">
                                </div>

                            </div>


                            <div class="d-flex x-gap-30 items-center pt-20">
                                <button class="d-flex items-center text-blue-1">
                                    <i class="icon-like text-16 mr-10"></i>
                                    Helpful
                                </button>

                                <button class="d-flex items-center text-light-1">
                                    <i class="icon-dislike text-16 mr-10"></i>
                                    Not helpful
                                </button>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="row x-gap-20 y-gap-20 items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/avatars/2.png') }}" alt="image">
                                </div>
                                <div class="col-auto">
                                    <div class="fw-500 lh-15">Tonko</div>
                                    <div class="text-14 text-light-1 lh-15">March 2022</div>
                                </div>
                            </div>

                            <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
                            <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location.
                                Located in quiet small street, but just 50 meters from main street and bus stop. Tube
                                station is short walk, just like two grocery stores. </p>


                            <div class="row x-gap-30 y-gap-30 pt-20">

                                <div class="col-auto">
                                    <img src="{{ asset('img/testimonials/1/1.png') }}" alt="image"
                                        class="rounded-4">
                                </div>

                                <div class="col-auto">
                                    <img src="{{ asset('img/testimonials/1/2.png') }}" alt="image"
                                        class="rounded-4">
                                </div>

                                <div class="col-auto">
                                    <img src="{{ asset('img/testimonials/1/3.png') }}" alt="image"
                                        class="rounded-4">
                                </div>

                                <div class="col-auto">
                                    <img src="{{ asset('img/testimonials/1/4.png') }}" alt="image"
                                        class="rounded-4">
                                </div>

                            </div>


                            <div class="d-flex x-gap-30 items-center pt-20">
                                <button class="d-flex items-center text-blue-1">
                                    <i class="icon-like text-16 mr-10"></i>
                                    Helpful
                                </button>

                                <button class="d-flex items-center text-light-1">
                                    <i class="icon-dislike text-16 mr-10"></i>
                                    Not helpful
                                </button>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="row x-gap-20 y-gap-20 items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/avatars/2.png') }}" alt="image">
                                </div>
                                <div class="col-auto">
                                    <div class="fw-500 lh-15">Tonko</div>
                                    <div class="text-14 text-light-1 lh-15">March 2022</div>
                                </div>
                            </div>

                            <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
                            <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location.
                                Located in quiet small street, but just 50 meters from main street and bus stop. Tube
                                station is short walk, just like two grocery stores. </p>


                            <div class="d-flex x-gap-30 items-center pt-20">
                                <button class="d-flex items-center text-blue-1">
                                    <i class="icon-like text-16 mr-10"></i>
                                    Helpful
                                </button>

                                <button class="d-flex items-center text-light-1">
                                    <i class="icon-dislike text-16 mr-10"></i>
                                    Not helpful
                                </button>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="row x-gap-20 y-gap-20 items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/avatars/2.png') }}" alt="image">
                                </div>
                                <div class="col-auto">
                                    <div class="fw-500 lh-15">Tonko</div>
                                    <div class="text-14 text-light-1 lh-15">March 2022</div>
                                </div>
                            </div>

                            <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
                            <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location.
                                Located in quiet small street, but just 50 meters from main street and bus stop. Tube
                                station is short walk, just like two grocery stores. </p>


                            <div class="d-flex x-gap-30 items-center pt-20">
                                <button class="d-flex items-center text-blue-1">
                                    <i class="icon-like text-16 mr-10"></i>
                                    Helpful
                                </button>

                                <button class="d-flex items-center text-light-1">
                                    <i class="icon-dislike text-16 mr-10"></i>
                                    Not helpful
                                </button>
                            </div>
                        </div>


                        <div class="col-auto">

                            <a href="#" class="button -md -outline-blue-1 text-blue-1">
                                Show all 116 reviews <div class="icon-arrow-top-right ml-15"></div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-40 mb-40">
        <div class="border-top-light"></div>
    </div> --}}

    {{-- Reply  --}}
    {{-- <section>
        <div class="container">
            <div class="row y-gap-30 justify-between">
                <div class="col-xl-3">
                    <div class="row">
                        <div class="col-auto">
                            <h3 class="text-22 fw-500">Leave a Reply</h3>
                            <p class="text-15 text-dark-1 mt-5">Your email address will not be published.</p>
                        </div>
                    </div>

                    <div class="row y-gap-30 pt-30">

                        <div class="col-sm-6">
                            <div class="text-15 lh-1 fw-500">Location</div>
                            <div class="d-flex x-gap-5 items-center pt-10">

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="text-15 lh-1 fw-500">Staff</div>
                            <div class="d-flex x-gap-5 items-center pt-10">

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="text-15 lh-1 fw-500">Cleanliness</div>
                            <div class="d-flex x-gap-5 items-center pt-10">

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="text-15 lh-1 fw-500">Value for money</div>
                            <div class="d-flex x-gap-5 items-center pt-10">

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="text-15 lh-1 fw-500">Comfort</div>
                            <div class="d-flex x-gap-5 items-center pt-10">

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="text-15 lh-1 fw-500">Facilities</div>
                            <div class="d-flex x-gap-5 items-center pt-10">

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="text-15 lh-1 fw-500">Free WiFi</div>
                            <div class="d-flex x-gap-5 items-center pt-10">

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                                <div class="icon-star text-10 text-yellow-1"></div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="row y-gap-30">
                        <div class="col-xl-6">

                            <div class="form-input ">
                                <input type="text" required>
                                <label class="lh-1 text-16 text-light-1">Text</label>
                            </div>

                        </div>
                        <div class="col-xl-6">

                            <div class="form-input ">
                                <input type="text" required>
                                <label class="lh-1 text-16 text-light-1">Email</label>
                            </div>

                        </div>
                        <div class="col-12">

                            <div class="form-input ">
                                <textarea required rows="6"></textarea>
                                <label class="lh-1 text-16 text-light-1">Write Your Comment</label>
                            </div>

                        </div>
                        <div class="col-auto">

                            <a href="#" class="button -md -dark-1 bg-blue-1 text-white">
                                Post Comment <div class="icon-arrow-top-right ml-15"></div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="mt-50 border-top-light"></div>
    </div> --}}

    {{-- Similar  --}}
    {{-- <section class="layout-pt-lg layout-pb-lg">
        <div class="container">
            <div class="row justify-between items-end">
                <div class="col-auto">
                    <div class="sectionTitle -md">
                        <h2 class="sectionTitle__title">Similar Experiences</h2>
                        <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                    </div>
                </div>

                <div class="col-auto">

                    <a href="#" class="button h-50 px-24 -blue-1 bg-blue-1-05 text-blue-1">
                        See All <div class="icon-arrow-top-right ml-15"></div>
                    </a>

                </div>
            </div>

            <div class="row y-gap-30 pt-40 sm:pt-20">

                <div class="col-xl-3 col-lg-3 col-sm-6">

                    <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">
                        <div class="tourCard__image">

                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">

                                    <img class="rounded-4 col-12" src="{{ asset('img/tours/1.png') }}"
                                        alt="image">


                                </div>

                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>


                                <div class="cardImage__leftBadge">
                                    <div
                                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                        LIKELY TO SELL OUT*
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="tourCard__content mt-10">
                            <div class="d-flex items-center lh-14 mb-5">
                                <div class="text-14 text-light-1">16+ hours</div>
                                <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                                <div class="text-14 text-light-1">Full-day Tours</div>
                            </div>

                            <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>Stonehenge, Windsor Castle and Bath with Pub Lunch in Lacock</span>
                            </h4>

                            <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                            <div class="row justify-between items-center pt-15">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="d-flex items-center x-gap-5">

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                        </div>

                                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-14 text-light-1">
                                        From
                                        <span class="text-16 fw-500 text-dark-1">US$72</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                    <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">
                        <div class="tourCard__image">

                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">


                                    <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <img class="col-12" src="{{ asset('img/tours/2.png') }}"
                                                    alt="image">
                                            </div>

                                            <div class="swiper-slide">
                                                <img class="col-12" src="{{ asset('img/tours/1.png') }}"
                                                    alt="image">
                                            </div>

                                            <div class="swiper-slide">
                                                <img class="col-12" src="{{ asset('img/tours/3.png') }}"
                                                    alt="image">
                                            </div>

                                        </div>

                                        <div class="cardImage-slider__pagination js-pagination"></div>

                                        <div class="cardImage-slider__nav -prev">
                                            <button
                                                class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                                <i class="icon-chevron-left text-10"></i>
                                            </button>
                                        </div>

                                        <div class="cardImage-slider__nav -next">
                                            <button
                                                class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                                <i class="icon-chevron-right text-10"></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>

                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>


                            </div>

                        </div>

                        <div class="tourCard__content mt-10">
                            <div class="d-flex items-center lh-14 mb-5">
                                <div class="text-14 text-light-1">9+ hours</div>
                                <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                                <div class="text-14 text-light-1">Attractions &amp; Museums</div>
                            </div>

                            <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>Westminster Walking Tour & Westminster Abbey Entry</span>
                            </h4>

                            <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                            <div class="row justify-between items-center pt-15">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="d-flex items-center x-gap-5">

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                        </div>

                                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-14 text-light-1">
                                        From
                                        <span class="text-16 fw-500 text-dark-1">US$72</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                    <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">
                        <div class="tourCard__image">

                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">

                                    <img class="rounded-4 col-12" src="{{ asset('img/tours/3.png') }}"
                                        alt="image">


                                </div>

                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>


                                <div class="cardImage__leftBadge">
                                    <div
                                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                                        Best Seller
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="tourCard__content mt-10">
                            <div class="d-flex items-center lh-14 mb-5">
                                <div class="text-14 text-light-1">40–55 minutes</div>
                                <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                                <div class="text-14 text-light-1">Private and Luxury</div>
                            </div>

                            <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>High-Speed Thames River RIB Cruise in London</span>
                            </h4>

                            <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                            <div class="row justify-between items-center pt-15">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="d-flex items-center x-gap-5">

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                        </div>

                                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-14 text-light-1">
                                        From
                                        <span class="text-16 fw-500 text-dark-1">US$72</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                    <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">
                        <div class="tourCard__image">

                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">

                                    <img class="rounded-4 col-12" src="{{ asset('img/tours/4.png') }}"
                                        alt="image">


                                </div>

                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>


                                <div class="cardImage__leftBadge">
                                    <div
                                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                                        Top Rated
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="tourCard__content mt-10">
                            <div class="d-flex items-center lh-14 mb-5">
                                <div class="text-14 text-light-1">94+ days</div>
                                <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                                <div class="text-14 text-light-1">Bus Tours</div>
                            </div>

                            <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>Edinburgh Darkside Walking Tour: Mysteries, Murder and Legends</span>
                            </h4>

                            <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                            <div class="row justify-between items-center pt-15">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="d-flex items-center x-gap-5">

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                            <div class="icon-star text-yellow-1 text-10"></div>

                                        </div>

                                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-14 text-light-1">
                                        From
                                        <span class="text-16 fw-500 text-dark-1">US$72</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </section> --}}

    {{-- newsleter --}}
    {{-- <section class="layout-pt-md layout-pb-md bg-dark-2">
        <div class="container">
            <div class="row y-gap-30 justify-between items-center">
                <div class="col-auto">
                    <div class="row y-gap-20  flex-wrap items-center">
                        <div class="col-auto">
                            <div class="icon-newsletter text-60 sm:text-40 text-white"></div>
                        </div>

                        <div class="col-auto">
                            <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
                            <div class="text-white">Sign up and we'll send the best deals to you</div>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
                        <div>
                            <input class="bg-white h-60" type="text" placeholder="Your Email">
                        </div>

                        <div>
                            <button class="button -md h-60 bg-blue-1 text-white">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</div>
