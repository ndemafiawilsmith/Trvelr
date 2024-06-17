<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
        <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Plans</h1>
            {{-- <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div> --}}

                <a href="{{ route('add.plan') }}" class="button px-30 fw-400 text-14 -blue-1 bg-blue-1 h-50 text-dark-1">Add Plan</a>
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
                        data-tab-target=".-tab-item-1">All Plans</button>
                </div>

                {{-- <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-2">Completed</button>
                </div>

                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-3">Processing</button>
                </div>

                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-4">Confirmed</button>
                </div>

                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-5">Cancelled</button>
                </div>

                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-6">Paid</button>
                </div> --}}

                {{-- <div class="col-auto">
              <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                data-tab-target=".-tab-item-7">Unpaid</button>
            </div>

            <div class="col-auto">
              <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                data-tab-target=".-tab-item-8">Partial Payment</button>
            </div> --}}

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="overflow-scroll scroll-bar-1">
                        <table class="table-3 -border-bottom col-12">
                            <thead class="bg-light-2">
                                <tr>
                                    <th>Destination</th>
                                    <th>Title</th>
                                    {{-- <th>Order Date</th> --}}
                                    <th>Tour Date</th>
                                    <th>Budget</th>
                                    <th>Saved</th>
                                    <th>Remain</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($plans as $plan)
                                @php
                                    $plan->start_date = Carbon\Carbon::parse($plan->start_date);
                                    $plan->end_date = Carbon\Carbon::parse($plan->end_date);
                                @endphp
                                    <tr>
                                        <td>{{ $plan->country->countryname }}</td>
                                        <td>{{ $plan->title }}</td>
                                        <td class="lh-16">Start : {{ $plan->start_date->format('d/m/Y') }}<br>End : {{ $plan->end_date->format('d/m/Y') }}</td>
                                        <td class="fw-500">${{ number_format($plan->budget, 0, '.', ',') }}</td>
                                        <td>$@if($plan->savingsGoal) {{ number_format($plan->savingsGoal->saved_amount) }} @else 0 @endif</td>
                                        <td>$@if($plan->savingsGoal) {{ number_format($plan->budget - $plan->savingsGoal->saved_amount) }} @else 0 @endif</td>
                                        <td><span
                                                class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</span>
                                        </td>

                                        <td>
                                            <div class="dropdown js-dropdown js-actions-1-active">
                                                <div class="dropdown__button d-flex items-center rounded-4 text-blue-1 bg-blue-1-05 text-14 px-15 py-5"
                                                    data-el-toggle=".js-actions-1-toggle-{{ $plan->id }}"
                                                    data-el-toggle-active=".js-actions-1-active">
                                                    <span class="js-dropdown-title">Actions</span>
                                                    <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                                </div>

                                                <div
                                                    class="toggle-element -dropdown-2 js-click-dropdown js-actions-1-toggle-{{ $plan->id }}">
                                                    <div class="text-14 fw-500 js-dropdown-list">

                                                        <div><a href="{{ route('plan.details', ['id'=>$plan->id]) }}" class="d-block">Details</a>
                                                        </div>

                                                        <div><a href="{{ route('savings.create', ['id'=>$plan->id]) }}" class="d-block">Create Goal</a>
                                                        </div>

                                                        <div><a href="#" class="d-block js-dropdown-link">Cancel</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-30">
            <div class="row justify-between">
                <div class="col-auto">
                    <button class="button -blue-1 size-40 rounded-full border-light">
                        <i class="icon-chevron-left text-12"></i>
                    </button>
                </div>

                {{-- <div class="col-auto">
                    <div class="row x-gap-20 y-gap-20 items-center">

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">1</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">3</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">5</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">...</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">20</div>

                        </div>

                    </div>
                </div> --}}

                <div class="col-auto">
                    <button class="button -blue-1 size-40 rounded-full border-light">
                        <i class="icon-chevron-right text-12"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
