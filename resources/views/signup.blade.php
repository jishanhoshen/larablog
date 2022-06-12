@extends('layout.app')

@section('title', 'Sign Up')

@section('content')
<div class="main-area flex justify-center w-full my-10">
    <form action="{{ route('addstudent') }}" method="post">
        @csrf
        <div class="w-80 bg-gray-100 rounded-lg p-8 flex flex-col">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign Up</h2>
            <div class="relative mb-4">
                <label for="full_name" class="leading-7 text-sm text-gray-600">Full Name</label>
                <input type="text" id="full_name" name="full_name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
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