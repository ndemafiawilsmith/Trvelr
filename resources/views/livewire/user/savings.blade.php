<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
        <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Saving Goals</h1>
            {{-- <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div> --}}

                {{-- <a href="{{ route('add.plan') }}" class="button px-30 fw-400 text-14 -blue-1 bg-blue-1 h-50 text-dark-1">Add Plan</a> --}}
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
                        data-tab-target=".-tab-item-1">All Saving Goals</button>
                </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="overflow-scroll scroll-bar-1">
                        <table class="table-3 -border-bottom col-12">
                            <thead class="bg-light-2">
                                <tr>
                                    <th>Title</th>
                                    {{-- <th>Title</th> --}}
                                    {{-- <th>Order Date</th> --}}
                                    <th>Goal Deadline</th>
                                    <th>Budget</th>
                                    <th>Saved</th>
                                    <th>Remain</th>
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($savings as $saving)
                                @php
                                    $saving->goal_deadline = Carbon\Carbon::parse($saving->goal_deadline);
                                @endphp
                                    <tr>
                                        <td>{{ $saving->itinerary->title }}</td>
                                        <td class="lh-16">{{ $saving->goal_deadline->format('D d M') }}</td>
                                        <td class="fw-500">${{ number_format($saving->goal_amount, 0, '.', ',') }}</td>
                                        <td>${{ number_format($saving->saved_amount) }}</td>
                                        <td>${{ number_format($saving->goal_amount - $saving->saved_amount) }}</td>
                                        <td>
                                            <a href="{{ route('save', ['id'=>$saving->id]) }}">
                                                <span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Save</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="pt-30">
            <div class="row justify-between">
                <div class="col-auto">
                    <button class="button -blue-1 size-40 rounded-full border-light">
                        <i class="icon-chevron-left text-12"></i>
                    </button>
                </div>

                <div class="col-auto">
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
                </div>

                <div class="col-auto">
                    <button class="button -blue-1 size-40 rounded-full border-light">
                        <i class="icon-chevron-right text-12"></i>
                    </button>
                </div>
            </div>
        </div> --}}
    </div>
</div>
