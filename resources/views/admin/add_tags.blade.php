@extends('admin/layout.admin')

@section('title', 'Add Tag')

@section('maincontent')

<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Add Tag
</h2>
<!-- General elements -->
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Tag Name *</span>
        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Jane Doe" />
    </label>

    <div class="mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
            Status *
        </span>
        <div class="mt-2">
            <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="active" />
                <span class="ml-2">Active</span>
            </label>
            <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="deactive" />
                <span class="ml-2">Deactive</span>
            </label>
        </div>
    </div>


    <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">Description (Optional)</span>
        <textarea class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Description"></textarea>
    </label>
    <div class="mt-4">
        <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Save
        </button>
    </div>
</div>
@endsection