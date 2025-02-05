<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta property="og:locale" content="en_NG">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Trvelr' }}">
    <meta property="og:description"
        content="{{ $description ??
            'At Trvelr we believe that planning a vacation should be as enjoyable as the trip itself.
        Our mission is to help you save money for your dream vacations in a fun, easy, and stress-free way. Leveraging the power of AI, we curate personalized itineraries tailored to your preferences and interests, making every journey unique and unforgettable.
        ' }}">
    <meta property="og:image" content="{{ asset('img/favicon.png') }}">
    <meta name="google:card" content="summary_large_image">
    <meta name="google:description"
        content="{{ $description ??
            'At Trvelr we believe that planning a vacation should be as enjoyable as the trip itself.
        Our mission is to help you save money for your dream vacations in a fun, easy, and stress-free way. Leveraging the power of AI, we curate personalized itineraries tailored to your preferences and interests, making every journey unique and unforgettable.
        ' }}">
    <meta name="google:title" content="{{ $title ?? 'Trvelr' }}">
    <meta name="google:image" content="{{ asset('img/favicon.png') }}">
    <meta name="description"
        content="{{ $description ??
            'At Trvelr we believe that planning a vacation should be as enjoyable as the trip itself.
        Our mission is to help you save money for your dream vacations in a fun, easy, and stress-free way. Leveraging the power of AI, we curate personalized itineraries tailored to your preferences and interests, making every journey unique and unforgettable.
        ' }}" />
    <meta name="author" content="Trvelr" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="Trvelr, vacation planning, AI travel app, personalized itineraries, save money for vacations, dream vacations, stress-free travel planning, easy travel planning, fun travel planning, unique journeys, unforgettable travel experiences, travel savings, customized travel plans, travel budget management, travel recommendations" />



    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Trvelr</title>
    @livewireStyles()

    <style>
        /* HTML: <div class="loader"></div> */
        .loaderr {
            width: 30px;
            padding: 8px;
            aspect-ratio: 1;
            border-radius: 50%;
            background: #25b09b;
            --_m:
                conic-gradient(#0000 10%, #000),
                linear-gradient(#000 0 0) content-box;
            -webkit-mask: var(--_m);
            mask: var(--_m);
            -webkit-mask-composite: source-out;
            mask-composite: subtract;
            animation: l3 1s infinite linear;
        }

        @keyframes l3 {
            to {
                transform: rotate(1turn)
            }
        }
    </style>
</head>

<body>
    <div class="preloader js-preloader">
        <div class="preloader__wrap">
            <div class="preloader__icon">
                <svg width="38" height="37" viewBox="0 0 38 37" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
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

        <div class="preloader__title">Trvelr</div>
    </div>

    <main>


        <header data-add-bg="bg-dark-1" class="header  js-header" data-x="header" data-x-toggle="is-menu-opened">
            <div data-anim="fade" class="header__container container">
                <div class="row justify-between items-center">

                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <div class="mr-20">
                                <button class="d-flex items-center icon-menu text-white text-20"
                                    data-x-click="desktopMenu"></button>
                            </div>

                            <a href="{{ route('index') }}" class="header-logo mr-30" data-x="header-logo"
                                data-x-toggle="is-logo-dark">
                                <img src="{{ asset('img/general/logo-light-2.svg') }}" alt="logo icon">
                                <img src="{{ asset('img/general/logo-dark.svg') }}" alt="logo icon">
                            </a>

                            <div class="relative xl:d-none">
                                <div class="searchMenu-loc js-form-dd js-liverSearch">
                                    {{-- <div class="d-flex items-center" data-x-dd-click="searchMenu-loc">
                                        <i class="text-20 icon-search text-white mr-15"></i>

                                        <div class="text-15 text-white ls-2 lh-16">
                                            <input autocomplete="off" type="search"
                                                placeholder="Destination, attraction, hotel, etc"
                                                class="text-white js-search js-dd-focus" />
                                        </div>
                                    </div> --}}

                                    <div class="searchMenu-loc__field shadow-2 js-popup-window"
                                        data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                        <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                                            {{-- <div class="y-gap-5 js-results">

                                                <div>
                                                    <button
                                                        class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                        <div class="d-flex">
                                                            <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                            </div>
                                                            <div class="ml-10">
                                                                <div
                                                                    class="text-15 lh-12 fw-500 js-search-option-target">
                                                                    London
                                                                </div>
                                                                <div class="text-14 lh-12 text-light-1 mt-5">Greater
                                                                    London,
                                                                    United Kingdom</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <div>
                                                    <button
                                                        class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                        <div class="d-flex">
                                                            <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                            </div>
                                                            <div class="ml-10">
                                                                <div
                                                                    class="text-15 lh-12 fw-500 js-search-option-target">
                                                                    New
                                                                    York</div>
                                                                <div class="text-14 lh-12 text-light-1 mt-5">New York
                                                                    State,
                                                                    United States</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <div>
                                                    <button
                                                        class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                        <div class="d-flex">
                                                            <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                            </div>
                                                            <div class="ml-10">
                                                                <div
                                                                    class="text-15 lh-12 fw-500 js-search-option-target">
                                                                    Paris
                                                                </div>
                                                                <div class="text-14 lh-12 text-light-1 mt-5">France
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <div>
                                                    <button
                                                        class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                        <div class="d-flex">
                                                            <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                            </div>
                                                            <div class="ml-10">
                                                                <div
                                                                    class="text-15 lh-12 fw-500 js-search-option-target">
                                                                    Madrid
                                                                </div>
                                                                <div class="text-14 lh-12 text-light-1 mt-5">Spain
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <div>
                                                    <button
                                                        class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                        <div class="d-flex">
                                                            <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                            </div>
                                                            <div class="ml-10">
                                                                <div
                                                                    class="text-15 lh-12 fw-500 js-search-option-target">
                                                                    Santorini</div>
                                                                <div class="text-14 lh-12 text-light-1 mt-5">Greece
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    {{-- <div class="col-auto">
                        <div class="d-flex items-center">

                            <div class="row x-gap-20 items-center xxl:d-none">
                                <div class="col-auto">
                                    <button class="d-flex items-center text-14 text-white" data-x-click="currency">
                                        <span class="js-currencyMenu-mainTitle">USD</span>
                                        <i class="icon-chevron-sm-down text-7 ml-10"></i>
                                    </button>
                                </div>

                                <div class="col-auto">
                                    <div class="w-1 h-20 bg-white-20"></div>
                                </div>

                                <div class="col-auto">
                                    <button class="d-flex items-center text-14 text-white" data-x-click="lang">
                                        <img src="{{ asset('img/general/lang.png') }}" alt="image"
                                            class="rounded-full mr-10">
                                        <span class="js-language-mainTitle">United Kingdom</span>
                                        <i class="icon-chevron-sm-down text-7 ml-15"></i>
                                    </button>
                                </div>
                            </div>


                            <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                                <a href="{{ route('become.expert') }}"
                                    class="button px-30 fw-400 text-14 -blue-1 bg-white h-50 text-dark-1">Become A Tour
                                    Expert</a>
                                <a href="{{ route('login') }}"
                                    class="button px-30 fw-400 text-14 border-white -blue-1 h-50 text-white ml-20">Sign
                                    In /
                                    Register</a>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </header>


        {{ $slot }}

        {{-- @include('includes.footer') --}}

    </main>

    <div class="langMenu is-hidden js-langMenu" data-x="lang" data-x-toggle="is-hidden">
        <div class="langMenu__bg" data-x-click="lang"></div>

        <div class="langMenu__content bg-white rounded-4">
            <div class="d-flex items-center justify-between px-30 py-20 sm:px-15 border-bottom-light">
                <div class="text-20 fw-500 lh-15">Select your language</div>
                <button class="pointer" data-x-click="lang">
                    <i class="icon-close"></i>
                </button>
            </div>

            <div class="modalGrid px-30 py-30 sm:px-15 sm:py-15">

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">English</div>
                        <div class="text-14 lh-15 mt-5 js-title">United States</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>
                        <div class="text-14 lh-15 mt-5 js-title">Turkey</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>
                        <div class="text-14 lh-15 mt-5 js-title">España</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>
                        <div class="text-14 lh-15 mt-5 js-title">France</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>
                        <div class="text-14 lh-15 mt-5 js-title">Italia</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">English</div>
                        <div class="text-14 lh-15 mt-5 js-title">United States</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>
                        <div class="text-14 lh-15 mt-5 js-title">Turkey</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>
                        <div class="text-14 lh-15 mt-5 js-title">España</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>
                        <div class="text-14 lh-15 mt-5 js-title">France</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>
                        <div class="text-14 lh-15 mt-5 js-title">Italia</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">English</div>
                        <div class="text-14 lh-15 mt-5 js-title">United States</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>
                        <div class="text-14 lh-15 mt-5 js-title">Turkey</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>
                        <div class="text-14 lh-15 mt-5 js-title">España</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>
                        <div class="text-14 lh-15 mt-5 js-title">France</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>
                        <div class="text-14 lh-15 mt-5 js-title">Italia</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">English</div>
                        <div class="text-14 lh-15 mt-5 js-title">United States</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>
                        <div class="text-14 lh-15 mt-5 js-title">Turkey</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>
                        <div class="text-14 lh-15 mt-5 js-title">España</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>
                        <div class="text-14 lh-15 mt-5 js-title">France</div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>
                        <div class="text-14 lh-15 mt-5 js-title">Italia</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="currencyMenu is-hidden js-currencyMenu" data-x="currency" data-x-toggle="is-hidden">
        <div class="currencyMenu__bg" data-x-click="currency"></div>

        <div class="currencyMenu__content bg-white rounded-4">
            <div class="d-flex items-center justify-between px-30 py-20 sm:px-15 border-bottom-light">
                <div class="text-20 fw-500 lh-15">Select your currency</div>
                <button class="pointer" data-x-click="currency">
                    <i class="icon-close"></i>
                </button>
            </div>

            <div class="modalGrid px-30 py-30 sm:px-15 sm:py-15">

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - лв.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - лв.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - лв.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - лв.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="mapFilter" data-x="mapFilter" data-x-toggle="-is-active">
        <div class="mapFilter__overlay"></div>

        <div class="mapFilter__close">
            <button class="button -blue-1 size-40 bg-white shadow-2" data-x-click="mapFilter">
                <i class="icon-close text-15"></i>
            </button>
        </div>

        <div class="mapFilter__grid" data-x="mapFilter__grid" data-x-toggle="-filters-hidden">
            <div class="mapFilter-filter scroll-bar-1">
                <div class="px-20 py-20 md:px-15 md:py-15">
                    <div class="d-flex items-center justify-between">
                        <div class="text-18 fw-500">Filters</div>

                        <button class="size-40 flex-center rounded-full bg-blue-1" data-x-click="mapFilter__grid">
                            <i class="icon-chevron-left text-12 text-white"></i>
                        </button>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Popular Filters</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">Breakfast Included</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">Romantic</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">Airport Transfer</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">WiFi Included </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">5 Star</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Nightly Price</h5>
                        <div class="row x-gap-10 y-gap-30">
                            <div class="col-12">
                                <div class="js-price-rangeSlider">
                                    <div class="text-14 fw-500"></div>

                                    <div class="d-flex justify-between mb-20">
                                        <div class="text-15 text-dark-1">
                                            <span class="js-lower"></span>
                                            -
                                            <span class="js-upper"></span>
                                        </div>
                                    </div>

                                    <div class="px-5">
                                        <div class="js-slider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Amenities</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Breakfast Included</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">WiFi Included </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Pool</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Restaurant </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Air conditioning </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Star Rating</h5>
                        <div class="row x-gap-10 y-gap-10 pt-10">

                            <div class="col-auto">
                                <a href="#"
                                    class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">1</a>
                            </div>

                            <div class="col-auto">
                                <a href="#"
                                    class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">2</a>
                            </div>

                            <div class="col-auto">
                                <a href="#"
                                    class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">3</a>
                            </div>

                            <div class="col-auto">
                                <a href="#"
                                    class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">4</a>
                            </div>

                            <div class="col-auto">
                                <a href="#"
                                    class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">5</a>
                            </div>

                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Guest Rating</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Any</div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Wonderful 4.5+</div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Very good 4+</div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Good 3.5+ </div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Style</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Budget</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Mid-range </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Luxury</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Family-friendly </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Business </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Neighborhood</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Central London</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Guests&#39; favourite area </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Westminster Borough</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Kensington and Chelsea </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Oxford Street </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="mapFilter-results scroll-bar-1">
                <div class="px-20 py-20 md:px-15 md:py-15">
                    <div class="row y-gap-10 justify-between">
                        <div class="col-auto">
                            <div class="text-14 text-light-1">
                                <span class="text-dark-1 text-15 fw-500">3,269 properties</span>
                                in Europe
                            </div>
                        </div>

                        <div class="col-auto">
                            <button class="button -blue-1 h-40 px-20 md:px-5 text-blue-1 bg-blue-1-05 rounded-100">
                                <i class="icon-up-down mr-10"></i>
                                Top picks for your search
                            </button>
                        </div>
                    </div>


                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mapFilter-map">
                <div class="map js-map"></div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    @livewireScripts()
    @stack('scripts')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>

    <script src="{{ asset('js/vendors.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


    <script>
        window.addEventListener('feedback', event => {
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success(event.detail.feedback);
        });

        window.addEventListener('errfeedback', event => {
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error(event.detail.errfeedback);
        });
    </script>
</body>

</html>
