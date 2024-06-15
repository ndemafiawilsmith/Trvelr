<div>
    @php
        use Carbon\Carbon;
    @endphp
    {{-- The whole world belongs to you. --}}
    <section class="pt-40">
        <div class="container">
            <div class="row x-gap-40 y-gap-30 items-center">
                <div class="col-auto">
                    <div class="d-flex items-center">
                        <div class="size-40 rounded-full flex-center bg-blue-1">
                            <i class="icon-check text-16 text-white"></i>
                        </div>
                        <div class="text-18 fw-500 ml-10">Create Goal</div>
                    </div>
                </div>

                <div class="col">
                    <div class="w-full h-1 bg-border"></div>
                </div>

                <div class="col-auto">
                    <div class="d-flex items-center">
                        <div class="size-40 rounded-full flex-center bg-blue-1-05 text-blue-1 fw-500">2</div>
                        <div class="text-18 fw-500 ml-10">Save</div>
                    </div>
                </div>

                <div class="col">
                    <div class="w-full h-1 bg-border"></div>
                </div>

                <div class="col-auto">
                    <div class="d-flex items-center">
                        <div class="size-40 rounded-full flex-center bg-blue-1-05 text-blue-1 fw-500">3</div>
                        <div class="text-18 fw-500 ml-10">Take Trip</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40 layout-pb-md">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="py-15 px-20 rounded-4 text-15 bg-blue-1-05">
                        You can now set your savings goal in your local currency, and we will automatically convert it into US Dollars
                    </div>

                    <h2 class="text-22 fw-500 mt-40 md:mt-24">Set a saving Goal</h2>

                    <form wire:submit.prevent='addGoal'>
                        <div class="row x-gap-20 y-gap-20 pt-20">
                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="text" required wire:model='goal_amount'>
                                    <label class="lh-1 text-16 text-light-1">Goal Amount</label>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="date" required wire:model='goal_deadline'>
                                    <label class="lh-1 text-16 text-light-1">Goal Deadline</label>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-input">
                                    <label class="lh-1 text-16 text-light-1">Payment Schedule</label>
                                    <select name="payment_schedule" required wire:model='payment_schedule'>
                                        <option value="" disabled selected>Select a schedule</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="daily">Daily</option>
                                    </select>
                                </div>

                            </div>


                            <div class="col-12">
                                <div class="row y-gap-20 items-center justify-between">
                                    <div class="col-auto">
                                        <div class="text-14 text-light-1">
                                            By proceeding with this Goal, I agree to Trvelr Terms of Use and Privacy
                                            Policy.
                                        </div>
                                    </div>

                                    <div class="col-auto">

                                        <button type="submit" class="button h-60 px-24 -dark-1 bg-blue-1 text-white">
                                            Set Savings Goal<div class="icon-arrow-top-right ml-15"></div>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="w-full h-1 bg-border mt-40 mb-40"></div>

                    {{-- <div class="mt-40">
                        <h3 class="text-22 fw-500 mb-20">How do you want to pay?</h3>

                        <div class="row y-gap-20 x-gap-20">
                            <div class="col-auto">
                                <button class="button -dark-1 bg-blue-1 text-white px-20 py-15">Credit/Debit
                                    Card</button>
                            </div>

                            <div class="col-auto">
                                <button class="button -blue-1 bg-light-2 px-20 py-15">Digital Payment</button>
                            </div>
                        </div>

                        <div class="row x-gap-20 y-gap-20 pt-20">
                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Select payment method *</label>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Card holder name *</label>
                                </div>


                                <div class="form-input mt-20">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Credit/debit card number *</label>
                                </div>


                                <div class="row x-gap-20 y-gap-20 pt-20">
                                    <div class="col-md-6">

                                        <div class="form-input ">
                                            <input type="text" required>
                                            <label class="lh-1 text-16 text-light-1">Expiry date *</label>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-input ">
                                            <input type="text" required>
                                            <label class="lh-1 text-16 text-light-1">CVC/CVV *</label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="img/booking-pages/card.png" alt="image" class="h-full">
                            </div>
                        </div>
                    </div>

                    <div class="mt-60 md:mt-32">
                        <div class="row y-gap-20 x-gap-20">
                            <div class="col-auto">
                                <button class="button -dark-1 bg-blue-1 text-white px-20 py-15">Credit/Debit
                                    Card</button>
                            </div>

                            <div class="col-auto">
                                <button class="button -blue-1 bg-light-2 px-20 py-15">Digtal Payment</button>
                            </div>
                        </div>

                        <div class="mt-20">

                            <div class="form-input ">
                                <input type="text" required>
                                <label class="lh-1 text-16 text-light-1">Select payment method *</label>
                            </div>

                        </div>

                        <div class="mt-20">
                            <ul class="list-disc y-gap-4 text-15 text-light-1">
                                <li>You have chosen to pay by PayPal. You will be forwarded to the PayPal website to
                                    proceed with this transaction.</li>
                                <li>The total amount you will be charged is: $2,338.01</li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-full h-1 bg-border mt-40 mb-40"></div>

                    <div class="row y-gap-20 items-center justify-between">
                        <div class="col-auto">

                            <div class="d-flex items-center">
                                <div class="form-checkbox ">
                                    <input type="checkbox" name="name">
                                    <div class="form-checkbox__mark">
                                        <div class="form-checkbox__icon icon-check"></div>
                                    </div>
                                </div>

                                <div class="text-14 lh-10 text-light-1 ml-10">Get access to members-only deals, just
                                    like the millions of other email subscribers</div>

                            </div>

                        </div>

                        <div class="col-auto">

                            <a href="#" class="button h-60 px-24 -dark-1 bg-blue-1 text-white">
                                Book Now <div class="icon-arrow-top-right ml-15"></div>
                            </a>

                        </div>
                    </div>

                    <div class="d-flex flex-column items-center mt-60 lg:md-40 sm:mt-24">
                        <div class="size-80 flex-center rounded-full bg-dark-3">
                            <i class="icon-check text-30 text-white"></i>
                        </div>

                        <div class="text-30 lh-1 fw-600 mt-20">System, your order was submitted successfully!</div>
                        <div class="text-15 text-light-1 mt-10">Booking details has been sent to:
                            admin@bookingcore.test</div>
                    </div>

                    <div class="border-type-1 rounded-8 px-50 py-35 mt-40">
                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="text-15 lh-12">Order Number</div>
                                <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">13119</div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="text-15 lh-12">Date</div>
                                <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">27/07/2021</div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="text-15 lh-12">Total</div>
                                <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">$40.10</div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="text-15 lh-12">Payment Method</div>
                                <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">Direct Bank Transfer</div>
                            </div>

                        </div>
                    </div>

                    <div class="border-light rounded-8 px-50 py-40 mt-40">
                        <h4 class="text-20 fw-500 mb-30">Your Information</h4>

                        <div class="row y-gap-10">

                            <div class="col-12">
                                <div class="d-flex justify-between ">
                                    <div class="text-15 lh-16">First name</div>
                                    <div class="text-15 lh-16 fw-500 text-blue-1">System</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-between border-top-light pt-10">
                                    <div class="text-15 lh-16">Last name</div>
                                    <div class="text-15 lh-16 fw-500 text-blue-1">Admin</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-between border-top-light pt-10">
                                    <div class="text-15 lh-16">Email</div>
                                    <div class="text-15 lh-16 fw-500 text-blue-1">admin@bookingcore.test</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-between border-top-light pt-10">
                                    <div class="text-15 lh-16">Phone</div>
                                    <div class="text-15 lh-16 fw-500 text-blue-1">112 666 888</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-between border-top-light pt-10">
                                    <div class="text-15 lh-16">Address line 1</div>
                                    <div class="text-15 lh-16 fw-500 text-blue-1"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-between border-top-light pt-10">
                                    <div class="text-15 lh-16">Address line 2</div>
                                    <div class="text-15 lh-16 fw-500 text-blue-1"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-between border-top-light pt-10">
                                    <div class="text-15 lh-16">City</div>
                                    <div class="text-15 lh-16 fw-500 text-blue-1">New York</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-between border-top-light pt-10">
                                    <div class="text-15 lh-16">State/Province/Region</div>
                                    <div class="text-15 lh-16 fw-500 text-blue-1"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-between border-top-light pt-10">
                                    <div class="text-15 lh-16">ZIP code/Postal code</div>
                                    <div class="text-15 lh-16 fw-500 text-blue-1"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-between border-top-light pt-10">
                                    <div class="text-15 lh-16">Country</div>
                                    <div class="text-15 lh-16 fw-500 text-blue-1">United States</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-between border-top-light pt-10">
                                    <div class="text-15 lh-16">Special Requirements</div>
                                    <div class="text-15 lh-16 fw-500 text-blue-1"></div>
                                </div>
                            </div>

                        </div>
                    </div> --}}

                </div>

                <div class="col-xl-5 col-lg-4">
                    <div class="ml-80 lg:ml-40 md:ml-0">
                        <div class="px-30 py-30 border-light rounded-4">
                            <div class="text-20 fw-500 mb-30">Your Travel details</div>

                            <div class="row x-gap-15 y-gap-20">

                                <div class="col">

                                    <div class="lh-17 fw-500">{{ $itinerary->title }}
                                    </div>
                                    <div class="text-14 lh-15 mt-5">{{ $itinerary->country->countryname }}</div>
                                </div>
                            </div>

                            <div class="border-top-light mt-30 mb-20"></div>


                            @php
                                $start_date = Carbon::parse($itinerary->start_date);
                                $start_date = $start_date->format('D d M');

                                $end_date = Carbon::parse($itinerary->end_date);
                                $end_date = $end_date->format('D d M');
                            @endphp
                            <div class="row y-gap-20 justify-between">
                                <div class="col-auto">
                                    <div class="text-15">Start Date</div>
                                    <div class="fw-500">{{ $start_date }}</div>
                                </div>

                                <div class="col-auto md:d-none">
                                    <div class="h-full w-1 bg-border"></div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15">End Date</div>
                                    <div class="fw-500">{{ $end_date }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="px-30 py-30 border-light rounded-4 mt-30">
                            <div class="text-20 fw-500 mb-20">Your Budget summary</div>

                            <div class="row y-gap-5 justify-between">
                                <div class="col-auto">
                                    <div class="text-15">Total Budget</div>
                                </div>
                                <div class="col-auto">
                                    <div class="text-15">${{ number_format($itinerary->budget) }}</div>
                                </div>
                            </div>

                            <div class="row y-gap-5 justify-between pt-5">
                                <div class="col-auto">
                                    <div class="text-15">Saved</div>
                                </div>
                                <div class="col-auto">
                                    <div class="text-15">US$674.47</div>
                                </div>
                            </div>

                            <div class="row y-gap-5 justify-between pt-5">
                                <div class="col-auto">
                                    <div class="text-15">Remaining</div>
                                </div>
                                <div class="col-auto">
                                    <div class="text-15">FREE</div>
                                </div>
                            </div>

                            <div class="px-20 py-20 bg-blue-2 rounded-4 mt-20">
                                <div class="row y-gap-5 justify-between">
                                    <div class="col-auto">
                                        <div class="text-18 lh-13 fw-500">Price</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-18 lh-13 fw-500">US$4,046.81</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-30 py-30 border-light rounded-4 mt-30">
                            <div class="text-20 fw-500 mb-20">Your payment schedule</div>

                            <div class="row y-gap-5 justify-between">
                                <div class="col-auto">
                                    <div class="text-15">Before you stay you'll pay</div>
                                </div>
                                <div class="col-auto">
                                    <div class="text-15">US$4,047</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-auto">
                    <div class="sectionTitle -md">
                        <h2 class="sectionTitle__title">Why Choose Us</h2>
                        <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
                    </div>
                </div>
            </div>

            <div class="row y-gap-40 justify-between pt-50">

                <div class="col-lg-3 col-sm-6">

                    <div class="featureIcon -type-1 ">
                        <div class="d-flex justify-center">
                            <img src="#" data-src="{{ asset('img/featureIcons/1/1.svg') }}" alt="image" class="js-lazy">
                        </div>

                        <div class="text-center mt-30">
                            <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                            <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="featureIcon -type-1 ">
                        <div class="d-flex justify-center">
                            <img src="#" data-src="{{ asset('img/featureIcons/1/2.svg') }}" alt="image" class="js-lazy">
                        </div>

                        <div class="text-center mt-30">
                            <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                            <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="featureIcon -type-1 ">
                        <div class="d-flex justify-center">
                            <img src="#" data-src="{{ asset('img/featureIcons/1/3.svg') }}" alt="image" class="js-lazy">
                        </div>

                        <div class="text-center mt-30">
                            <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                            <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

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
