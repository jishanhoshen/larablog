<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>@yield('title')</title>
</head>

<body class="bg-slate-200">

    <div class="topheader text-slate-50 bg-black text-sm font-medium capitalize">
        <div class="container mx-auto px-5 flex items-center justify-between">
            <div class="flex items-center">
                <div class="tranding bg-red-600 text-slate-50 inline-block p-3 uppercase">
                    Trending
                </div>
                <div class="trendingtopic w-96 owl-carousel owl-theme">
                    <div class="topicslide px-4 text-slate-50 overflow-hidden text-ellipsis whitespace-nowrap">
                        <a href="#">trendting topic trendting topic trendting topic trendting topic trendting topic </a>
                    </div>
                    <div class="topicslide px-4 text-slate-50 overflow-hidden text-ellipsis whitespace-nowrap">
                        <a href="#">trendting topic trendting topic trendting topic trendting topic trendting topic </a>
                    </div>
                    <div class="topicslide px-4 text-slate-50 overflow-hidden text-ellipsis whitespace-nowrap">
                        <a href="#">trendting topic trendting topic trendting topic trendting topic trendting topic </a>
                    </div>
                </div>
            </div>
            <div class="date flex justify-end">
                @php
                $mytime = Carbon\Carbon::now();
                echo $mytime->format('l, F d, Y');
                @endphp
            </div>
        </div>
    </div>

    <div class="container mx-auto px-5 flex justify-between items-center">
        <div class="logo">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="{{ asset('image/laravel.png') }}" alt="logo" class="h-8">
                <span class="ml-3 text-xl">Laravel</span>
            </a>
        </div>
        <div class="ads py-2">
            <img src="{{ asset('image/ads-700x70.jpg') }}" alt="">
        </div>
    </div>

    <div class="text-gray-600 body-font bg-slate-50">
        <div class="container mx-auto flex flex-wrap px-5 flex-col md:flex-row items-center justify-between">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base">
                <a href="{{ route('/') }}" class="mr-5 p-3 hover:text-slate-50 hover:cursor-pointer hover:bg-red-600 {{ request()->is('/') ? 'bg-red-600 text-slate-50' : '' }}">Home</a>
                <a href="{{ route('categories') }}" class="mr-5 p-3 hover:text-slate-50 hover:cursor-pointer hover:bg-red-600 {{ request()->is('categories') ? 'bg-red-600 text-slate-50' : '' }}">Categories</a>
                <a href="{{ route('contact') }}" class="mr-5 p-3 hover:text-slate-50 hover:cursor-pointer hover:bg-red-600 {{ request()->is('contact') ? 'bg-red-600 text-slate-50' : '' }}">Contact</a>
            </nav>

            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
                <a href="{{ route('signin') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Signin
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    
        @yield('content')

    <footer class="footer p-10 bg-base-200 text-base-content">
        <div>
            <span class="footer-title">Services</span>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </div>
        <div>
            <span class="footer-title">Company</span>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </div>
        <div>
            <span class="footer-title">Legal</span>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
        </div>
    </footer>
    <footer class="footer px-10 py-4 border-t bg-base-200 text-base-content border-base-300">
        <div class="items-center grid-flow-col">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="{{ asset('image/laravel.png') }}" alt="logo" class="h-8">
            </a>
            <p> <b>LARAVEL</b> Development Industries Ltd. <br>Providing reliable tech since 1992</p>
        </div>
        <div class="md:place-self-center md:justify-self-end">
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg></a>
            </div>
        </div>
    </footer>
</body>

</html>