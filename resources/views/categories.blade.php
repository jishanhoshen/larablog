@extends('layout.app')

@section('title', 'Categories')

@section('content')

<div class="container m-auto px-5">
    <div class="titlebar flex justify-between py-2 px-6 bg-slate-50 mt-3 mb-2">
        <h2 class="text-2xl text-slate-900">Categories</h2>
    </div>
    <div class="flex flex-wrap">
        @for($i = 0; $i < 5; $i++) <div class="py-1 w-[calc(25%-2rem)] mx-4">
            <div class=" h-40 overflow-hidden">
                <figure><img src="https://picsum.photos/seed/picsum/200/300" alt="Shoes" class="object-cover object-center h-full w-full" /></figure>
            </div>
            <div class="">
                <h2 class="text-slate-900 pl-3 my-2 text-base font-medium">
                    <a href="">Lorem ipsum dolor, sit amet consectetur adipis</a>
                </h2>
            </div>
    </div>
    @endfor
</div>
</div>

@endsection