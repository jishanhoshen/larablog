@extends('admin/layout.admin')

@section('title', 'Add Post')

@section('maincontent')

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
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Add Post
</h2>
<!-- General elements -->
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

    <form action="{{ route('store_post') }}" method="post" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';">
        @csrf
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Post Title *</span>
            <input name="title" class="block w-full mt-1 text-gray-500 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-input @error('title') is-invalid @enderror" placeholder="what's on your mind?" value="{{ old('title') }}" />
            @error('title')<span class="text-red-400 mt-2 inline-block">{{ $message }}</span>@enderror
        </label>
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Post Thumbnail *</span>
            <input type="file" name="thumbnail" class="block w-full mt-1 text-gray-500 text-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 form-input @error('thumbnail') is-invalid @enderror" />
            @error('thumbnail')<span class="text-red-400 mt-2 inline-block">{{ $message }}</span>@enderror
        </label>
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
                Category *
            </span>
            <select name="category" class="capitalize block w-full mt-1 text-sm text-gray-500 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select @error('category') is-invalid @enderror">
                <option value>Choose...</option>
                @foreach($categories as $category)
                <option {{ old('category') == $category->id ? 'selected' : '' }} value="{{ $category->id }}" class="capitalize">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')<span class="text-red-400 mt-2 inline-block">{{ $message }}</span>@enderror
        </label>
        <div class="inputTags  mt-4 bg-white dark:bg-gray-800">
            <span class="text-gray-700 dark:text-gray-400">
                Tags *
            </span>
            <div class="content bg-white dark:border-gray-600 dark:bg-gray-700">
                <ul class="border dark:border-gray-600 dark:bg-gray-700 form-input @error('tags') is-invalid @enderror">
                    @if(old('tags'))
                    @php $alltag = ''; @endphp
                    @foreach(old('tags') as $oldtag)
                    @php $alltag .= $oldtag.',' @endphp
                    @endforeach
                    @php
                    $alltag = substr($alltag, 0 , -1 );
                    @endphp
                    @endif
                    <!-- tags list -->
                    <input placeholder="Tags" class="tagsInput text-sm text-gray-500 bg-white dark:border-gray-600 dark:bg-gray-700 focus:outline-none dark:text-gray-300" type="text" spellcheck="false" {{ old('tags') ? 'data-value='.$alltag : ''}} data-limit="100">
                    <!-- add data-value in input fild for preloaded value -->
                    <!-- data-limit for limited tags -->
                </ul>
            </div>
            <div class="details">
                <p class="text-gray-700 dark:text-gray-400"><span>0</span> tags are remaining</p>
                <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Remove All
                </button>
            </div>
            @error('tags')<span class="text-red-400 mt-2 inline-block">{{ $message }}</span>@enderror
        </div>
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Description (Optional)</span>
            <textarea name="description" class="block w-full mt-1 text-gray-500 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Description">{{ old('description') }}</textarea>
        </label>

        <div class="mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
                Status *
            </span>
            <div class="mt-2">
                <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                    <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="status" value="1" {{ old('status') == 'active' ? 'checked' : '' }} checked />
                    <span class="ml-2">Active</span>
                </label>
                <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="status" value="0" {{ old('status') == 'deactive' ? 'checked' : '' }} />
                    <span class="ml-2">Deactive</span>
                </label>
            </div>
            @error('status')<span class="text-red-400 mt-2 inline-block">{{ $message }}</span>@enderror
        </div>

        <div class="mt-4">
            <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Save
            </button>
        </div>
    </form>
    <script src="{{ asset('js/tagify.js')}}"></script>
</div>
@endsection