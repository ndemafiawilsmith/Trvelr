<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
        <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Add Plan</h1>
            <div class="text-15 text-light-1">Answer quick questions for a tailored itinerary</div>

        </div>

        <div class="col-auto">

        </div>
    </div>


    <div class="py-30 px-30 rounded-4 bg-white shadow-3">
        <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

                <div class="col-auto">
                    <button
                        class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                        data-tab-target=".-tab-item-1">1. Content</button>
                </div>

                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-2">2. Location</button>
                </div>

                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-3">3. Pricing</button>
                </div>

                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-4">4. Attributes</button>
                </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">
                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="col-xl-10">
                        <div class="text-18 fw-500 mb-10">Preferred Travel Destination</div>
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-12">

                                <div class="form-select">
                                    <select required>
                                        <option value="" disabled selected>Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="usa" style="background-image:url('{{ asset('mysql-country-with-flag/flags-medium/'.$country->code.'.png') }}'); background-repeat:no-repeat; background-position:left center; padding-left:20px;">{{ $country->countryname }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <label class="lh-1 text-16 text-light-1">Select Country</label> --}}
                                </div>

                            </div>
                            <div class="col-12">

                                <div class="form-input ">
                                    <textarea required rows="5"></textarea>
                                    <label class="lh-1 text-16 text-light-1">Content</label>
                                </div>

                            </div>
                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Youtube Video</label>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="d-inline-block pt-30">

                        <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Save Changes <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div>
                </div>

                <div class="tabs__pane -tab-item-2">
                    <div class="col-xl-10">
                        <div class="text-18 fw-500 mb-10">Location</div>
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Location</label>
                                </div>

                            </div>
                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Real address</label>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Map Latitude</label>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Map Longitude</label>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Map Zoom</label>
                                </div>

                            </div>
                        </div>

                        <div class="d-flex ratio ratio-4:1 mt-30">
                            <div class="d-flex px-20 py-20 bg-light-2 h-full w-1/1 absolute rounded-4">
                                <div class="">

                                    <div class="form-input bg-white">
                                        <input type="text" required>
                                        <label class="lh-1 text-16 text-light-1">Search by name...</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="text-18 fw-500 mb-10 mt-30">Surroundings</div>
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Hotel rating standard</label>
                                </div>

                            </div>
                        </div>


                        <div class="mt-30">
                            <div class="fw-500 mb-20">Education</div>

                            <div class="overflow-scroll scroll-bar-1">
                                <table class="table-5 -border-bottom col-12">
                                    <thead class="bg-light-2">
                                        <tr>
                                            <th>Name</th>
                                            <th>Content</th>
                                            <th>Distance</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-6">

                                                <div class="form-input ">
                                                    <textarea required rows="5"></textarea>
                                                    <label class="lh-1 text-16 text-light-1">Content</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Select Country</label>
                                                </div>

                                            </td>
                                            <td class="col-auto">
                                                <button class="flex-center bg-light-2 rounded-4 size-35">
                                                    <i class="icon-trash-2 text-16 text-light-1"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-6">

                                                <div class="form-input ">
                                                    <textarea required rows="5"></textarea>
                                                    <label class="lh-1 text-16 text-light-1">Content</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Select Country</label>
                                                </div>

                                            </td>
                                            <td class="col-auto">
                                                <button class="flex-center bg-light-2 rounded-4 size-35">
                                                    <i class="icon-trash-2 text-16 text-light-1"></i>
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-end">
                                <button class="button -md -blue-1 bg-blue-1-05 text-blue-1 mt-20">Add Item</button>
                            </div>
                        </div>

                        <div class="mt-30">
                            <div class="fw-500 mb-20">Health</div>

                            <div class="overflow-scroll scroll-bar-1">
                                <table class="table-5 -border-bottom col-12">
                                    <thead class="bg-light-2">
                                        <tr>
                                            <th>Name</th>
                                            <th>Content</th>
                                            <th>Distance</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-6">

                                                <div class="form-input ">
                                                    <textarea required rows="5"></textarea>
                                                    <label class="lh-1 text-16 text-light-1">Content</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Select Country</label>
                                                </div>

                                            </td>
                                            <td class="col-auto">
                                                <button class="flex-center bg-light-2 rounded-4 size-35">
                                                    <i class="icon-trash-2 text-16 text-light-1"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-6">

                                                <div class="form-input ">
                                                    <textarea required rows="5"></textarea>
                                                    <label class="lh-1 text-16 text-light-1">Content</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Select Country</label>
                                                </div>

                                            </td>
                                            <td class="col-auto">
                                                <button class="flex-center bg-light-2 rounded-4 size-35">
                                                    <i class="icon-trash-2 text-16 text-light-1"></i>
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-end">
                                <button class="button -md -blue-1 bg-blue-1-05 text-blue-1 mt-20">Add Item</button>
                            </div>
                        </div>

                        <div class="mt-30">
                            <div class="fw-500 mb-20">Transportation</div>

                            <div class="overflow-scroll scroll-bar-1">
                                <table class="table-5 -border-bottom col-12">
                                    <thead class="bg-light-2">
                                        <tr>
                                            <th>Name</th>
                                            <th>Content</th>
                                            <th>Distance</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-6">

                                                <div class="form-input ">
                                                    <textarea required rows="5"></textarea>
                                                    <label class="lh-1 text-16 text-light-1">Content</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Select Country</label>
                                                </div>

                                            </td>
                                            <td class="col-auto">
                                                <button class="flex-center bg-light-2 rounded-4 size-35">
                                                    <i class="icon-trash-2 text-16 text-light-1"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-6">

                                                <div class="form-input ">
                                                    <textarea required rows="5"></textarea>
                                                    <label class="lh-1 text-16 text-light-1">Content</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                                                </div>

                                            </td>
                                            <td class="col-2">

                                                <div class="form-input ">
                                                    <input type="text" required>
                                                    <label class="lh-1 text-16 text-light-1">Select Country</label>
                                                </div>

                                            </td>
                                            <td class="col-auto">
                                                <button class="flex-center bg-light-2 rounded-4 size-35">
                                                    <i class="icon-trash-2 text-16 text-light-1"></i>
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-end">
                                <button class="button -md -blue-1 bg-blue-1-05 text-blue-1 mt-20">Add Item</button>
                            </div>
                        </div>


                        <div class="d-inline-block pt-30">

                            <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                Save Changes <div class="icon-arrow-top-right ml-15"></div>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="tabs__pane -tab-item-3">
                    <div class="col-xl-9 col-lg-11">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-12">
                                <div class="text-18 fw-500 mb-10">Pricing</div>


                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Hotel Price</label>
                                </div>


                                <div class="d-flex mt-20">
                                    <div class="form-checkbox ">
                                        <input type="checkbox" name="name">
                                        <div class="form-checkbox__mark">
                                            <div class="form-checkbox__icon icon-check"></div>
                                        </div>
                                    </div>

                                    <div class="text-15 lh-11 ml-10">Enable extra price</div>

                                </div>


                                <div class="fw-500 mt-30">Enable service fee</div>

                                <div class="d-flex mt-10">
                                    <div class="form-checkbox ">
                                        <input type="checkbox" name="name">
                                        <div class="form-checkbox__mark">
                                            <div class="form-checkbox__icon icon-check"></div>
                                        </div>
                                    </div>

                                    <div class="text-15 lh-11 ml-10">Enable extra price</div>

                                </div>

                            </div>
                        </div>

                        <div class="text-18 fw-500 mb-10 pt-30">Check in / Check out time</div>
                        <div class="row x-gap-20 y-gap-20">

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Time for check in</label>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Time for check out</label>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Minimum advance reservations</label>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" required>
                                    <label class="lh-1 text-16 text-light-1">Minimum day stay requirements</label>
                                </div>

                            </div>

                        </div>

                        <div class="d-inline-block mt-30">

                            <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                Save Changes <div class="icon-arrow-top-right ml-15"></div>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="tabs__pane -tab-item-4">
                    <div class="col-xl-9 col-lg-11">
                        <div class="row x-gap-100 y-gap-15">
                            <div class="col-12">
                                <div class="text-18 fw-500">Property Type</div>
                            </div>


                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Holiday homes</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Holiday homes</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Holiday homes</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Holiday homes</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row x-gap-100 y-gap-15 pt-30">
                            <div class="col-12">
                                <div class="text-18 fw-500">Facilities</div>
                            </div>


                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row x-gap-100 y-gap-15 pt-30">
                            <div class="col-12">
                                <div class="text-18 fw-500">Hotel Services</div>
                            </div>


                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="row y-gap-15">
                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Apartments</div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 lh-11 ml-10">Boats</div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="d-inline-block mt-30">

                            <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                Save Changes <div class="icon-arrow-top-right ml-15"></div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
