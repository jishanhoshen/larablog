<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Tag input</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="inputTags  mt-4 bg-white">
        <span class="text-gray-700">
            Tags *
        </span>
        <div class="content bg-white">
            <ul class="form-input">
                <input class="tagsInput bg-white focus:outline-none" type="text" spellcheck="false" data-value="hello,world" data-limit="10">
            </ul>
        </div>
        <div class="details">
            <p><span>0</span> tags are remaining</p>
            <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Remove All
            </button>
        </div>
        <script src="{{ asset('js/tagify.js')}}"></script>
    </div>
</body>

</html>