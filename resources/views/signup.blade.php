@extends('layout.app')

@section('title', 'Sign Up')

@section('content')
@if (\Session::has('success'))
<div id="sucnot" class="absolute top-20 right-10 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
    <div class="flex">
        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
            </svg></div>
        <div>
            <p class="font-bold">Success</p>
            <p class="text-sm">{!! \Session::get('success') !!}</p>
        </div>
        <div class="ml-4">
            <i class="fa fa-times px-2 pb-2 cursor-pointer" onclick="document.getElementById('sucnot').remove()"></i>
        </div>
    </div>
</div>
@endif
<div class="main-area flex justify-center w-full my-10">
    <form action="{{ route('signupAction') }}" method="post">
        @csrf
        <div class="w-80 bg-gray-100 rounded-lg p-8 flex flex-col">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign Up</h2>
            <div class="relative mb-4">
                <label for="full_name" class="leading-7 text-sm text-gray-600">Full Name @error('fullname') {{  $message  }} @enderror</label>
                <input type="text" id="full_name" name="fullname" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email @error('email') {{$message}} @enderror</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="password" class="leading-7 text-sm text-gray-600">Password @error('passowrd') {{$message}} @enderror</label>
                <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Sign
                Up</button>
            <p class="text-xs text-gray-500 mt-3">
                Already have an account?
                <a href="{{ route('signin') }}" class="text-indigo-500">Signin</a>
            </p>
        </div>
    </form>
</div>
@endsection