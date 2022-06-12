@extends('admin/layout.admin')

@section('title', 'Add Category')

@section('maincontent')

<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Edit Category
</h2>
<!-- General elements -->
<form action="{{ route('update_category', $category->id) }}" method="post">
    @csrf
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Category Name *</span>
            <input name="name" value={{ $category->name ?? '' }} class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Fruit" />
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </label>

        <div class="mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
                Status *
            </span>
            <div class="mt-2">
                <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                    <input name="status" {{ $category->status == 1 ? 'checked' : ''}} type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="1" />
                    <span class="ml-2">Active</span>
                </label>
                <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input name="status" {{ $category->status == 0 ? 'checked' : ''}} type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="0" />
                    <span class="ml-2">Deactive</span>
                </label>

            </div>
            @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Description (Optional)</span>
            <textarea name="description" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Description">{{ $category->description ?? '' }}</textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </label>
        <div class="mt-4">
            <button name="save" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Save
            </button>
        </div>
    </div>
</form>
@endsection