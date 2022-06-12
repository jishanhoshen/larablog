<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Add Student</title>
</head>

<body class="bg-slate-800">
    @if (\Session::has('success'))
    <div class="absolute top-4 right-4 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
        role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg></div>
            <div>
                <p class="font-bold">Success</p>
                <p class="text-sm">{!! \Session::get('success') !!}</p>
            </div>
        </div>
    </div>
    @endif
    <div class="main-area flex">
        <div class="flex h-screen w-1/2 bg-slate-50 justify-center items-center">
            <form action="{{ route('addstudent') }}" method="post">
                @csrf
                <div class="w-80 bg-gray-100 rounded-lg p-8 flex flex-col">
                    <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Add Student</h2>
                    <div class="relative mb-4">
                        <label for="full_name" class="leading-7 text-sm text-gray-600">Full Name</label>
                        <input type="text" id="full_name" name="full_name"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button
                        class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Add</button>
                </div>
            </form>
        </div>
        <div class="h-screen w-1/2 flex justify-center items-center">
            <img src="{{ asset('image/laravel.png') }}" alt="laravel" class="w-32">
        </div>
    </div>
</body>

</html>