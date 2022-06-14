@extends('layout.app')

@section('title', 'Home')

@section('content')

<div class="container mx-auto px-5">
<div class="px-10 py-5 flex">
    <div class="w-2/3">
        <div class="toppostslide owl-carousel owl-theme relative px-6 inline rounded ">
        @foreach($posts as $post)
        <div class="h-96 relative">
                <img src="{{ asset($post->image) }}" alt="" class="h-full w-full rounded object-cover object-center" />
                <div class="bg-slate-900 h-full w-full absolute top-0 opacity-50 rounded"></div>
                <div class="posttitle absolute bottom-6 inset-x-0 mx-6 text-slate-50">
                    <div class="mb-2">
                        <a href="">{{ $post->category }}</a>
                        /
                        <a href="">{{ date('F j Y', strtotime($post->date)) }}</a>
                    </div>
                    <h1 class="text-2xl font-medium overflow-hidden text-ellipsis whitespace-nowrap">
                        <a href="">
                            {{ $post->title }}
                        </a>
                    </h1>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="w-1/3 px-4 py-2 rounded">
        <div class="bg-slate-50 px-5 py-2 flex justify-between items-center">
            <h2 class="text-2xl text-slate-900 font-bold">Categories</h2>
            <a href="">View All</a>
        </div>
        @for($i = 0; $i < 4; $i++) <div class="h-16 bg-slate-50 mt-4 relative">
            <img src="https://picsum.photos/seed/picsum/200/300" alt="" class="w-full h-full object-cover object-center">
            <div class="bg-slate-900 h-full w-full absolute top-0 opacity-40"></div>
            <h2 class="absolute inset-0 flex justify-center items-center text-slate-50 text-xl font-bold">
                <a href="">Categories</a>
            </h2>
    </div>
    @endfor

</div>
</div>
<div class="px-16">
    <div class="bg-slate-50 px-5 py-2 flex justify-between items-center">
        <h2 class="text-2xl text-slate-900 font-bold">Featured</h2>
        <a href="">View All</a>
    </div>
</div>
<div class="px-10 py-5 flex flex-wrap justify-center gap-3 ">
    @for($i = 0; $i < 3; $i++) <div class="card w-80 bg-base-100 shadow-xl mx-4 my-2 inline ">
        <figure class="h-48 overflow-hidden"><img src="https://picsum.photos/seed/picsum/200/300" alt="Shoes" class="object-cover object-center h-full w-full" /></figure>
        <div class="card-body relative">
            <div class="badge badge-secondary absolute right-4 top-3">NEW</div>
            <h2 class="card-title overflow-hidden text-ellipsis whitespace-nowrap">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facere earum perferendis, eligendi consequatur, quod laboriosam consequuntur laudantium dicta aliquam voluptatem dolores sed dolorem accusamus quibusdam magni temporibus sequi quis.
            </h2>
            <p class=" h-14 pt-1 overflow-hidden text-ellipsis">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In vero facilis harum enim ad id, nemo voluptate eligendi, est soluta perferendis magni eos, vel ut! Assumenda consectetur perspiciatis a vel! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laudantium deleniti eius harum provident animi, voluptatum id! Veritatis reprehenderit dolorem numquam, placeat maiores porro commodi dolores, veniam, vero earum error!
            </p>
            <div class="card-actions justify-between ">
                <div>
                    <div class="badge badge-outline">Fashion</div>
                    <div class="badge badge-outline">Products</div>
                </div>
                <a class=" text-blue-500 ">Read more..</a>
            </div>
        </div>
</div>
@endfor
</div>
<div class="px-16">
    <div class="bg-slate-50 px-5 py-2 flex justify-between items-center">
        <h2 class="text-2xl text-slate-900 font-bold">Popular</h2>
        <a href="">View All</a>
    </div>
</div>
<div class="px-10 py-5">
    <div class="featured owl-carousel owl-theme relative px-6 inline rounded ">
        <div class="h-96 relative">
            <img src="{{ asset('image/news-700x435-1.jpg') }}" alt="" class="h-full w-full rounded object-cover object-center" />
            <div class="bg-slate-900 h-full w-full absolute top-0 opacity-50 rounded"></div>
            <div class="posttitle absolute bottom-6 inset-x-0 mx-6 text-slate-50">
                <div class="mb-2">
                    <a href="">Categories</a>
                    /
                    <a href="">Post date</a>
                </div>
                <h1 class="text-2xl font-medium overflow-hidden text-ellipsis whitespace-nowrap">
                    <a href="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit voluptas quisquam laboriosam velit dolor labore eum distinctio ullam totam nihil doloremque, repellendus aliquid, deleniti nemo consequuntur repellat accusantium est nobis.
                    </a>
                </h1>
            </div>
        </div>
        <div class="h-96 relative">
            <img src="{{ asset('image/news-700x435-1.jpg') }}" alt="" class="h-full w-full rounded object-cover object-center" />
            <div class="bg-slate-900 h-full w-full absolute top-0 opacity-50 rounded"></div>
            <div class="posttitle absolute bottom-6 inset-x-0 mx-6 text-slate-50">
                <div class="mb-2">
                    <a href="">Categories</a>
                    /
                    <a href="">Post date</a>
                </div>
                <h1 class="text-2xl font-medium overflow-hidden text-ellipsis whitespace-nowrap">
                    <a href="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit voluptas quisquam laboriosam velit dolor labore eum distinctio ullam totam nihil doloremque, repellendus aliquid, deleniti nemo consequuntur repellat accusantium est nobis.
                    </a>
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="px-16 py-5 flex justify-between">
    <div class="w-8/12">
        <div class="ads pb-3">
            <img src="{{ asset('image/ads-700x70.jpg') }}" alt="" class="w-full">
        </div>
        <div class="bg-slate-50 px-5 py-2 flex justify-between items-center">
            <h2 class="text-2xl text-slate-900 font-bold">Latest</h2>
            <a href="">View All</a>
        </div>
        <div class="flex juslify-between">
            @for($i=0;$i < 2;$i++) <div class="mt-4 w-[calc(50%-1rem)] first:mr-4 last:ml-4">
                <div class="bg-slate-50">
                    <img src="{{ asset('image/news-700x435-1.jpg') }}" alt="" class="h-52 w-full object-cover object-center">
                    <div class="p-6">
                        <p class="text-sm pb-1"><a href="" class="text-red-600">Category</a> / <a href="" class="text-slate-600">Post Date</a></p>
                        <h1 class="text-2xl text-slate-900 font-semibold overflow-hidden text-ellipsis whitespace-nowrap pb-1"><a href="">Est stet amet ipsum stet clita rebum duo</a> </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolorum soluta nisi esse ratione quas, nihil pariatur odit ducimus totam iure sit, deserunt provident? Dignissimos, iste sunt? Atque, at temporibus!</p>
                    </div>
                </div>
        </div>
        @endfor
    </div>
</div>
<div class="w-[calc((33.33%)-1rem)] ml-4">
    <div class="bg-slate-50 px-5 py-2 flex justify-between items-center">
        <h2 class="text-2xl text-slate-900 font-bold">Follow Us</h2>
    </div>
    <div class="flex flex-wrap">
        @for($i=0;$i < 6;$i++) <div class="inline-block mt-3 w-[calc(50%-0.5rem)] odd:mr-2 even:ml-2 px-4 py-2 bg-slate-50">
            12345 fan
    </div>
    @endfor
</div>
<div class="bg-slate-50 my-3 px-5 py-2 flex justify-between items-center">
    <h2 class="text-2xl text-slate-900 font-bold">Newsletter</h2>
</div>
<div class="bg-slate-50 px-6 py-5">
    <p class="text-center pb-4 text-slate-600">Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
    <div class="form-control">
        <div class="input-group justify-center">
            <input type="text" placeholder="Email Address" class="input input-bordered bg-slate-50" />
            <button class="btn btn-square min-w-min px-3 bg-red-600 border-red-500 text-slate-50">
                Subscribe
            </button>
        </div>
    </div>
</div>
<div class="bg-slate-50 my-3 px-5 py-2 flex justify-between items-center">
    <h2 class="text-2xl text-slate-900 font-bold">Tags</h2>
</div>
<div>
    <a href="" class="inline-block py-1 px-2 mr-2 mb-2 text-slate-400 border border-slate-400 border-solid hover:bg-slate-500 hover:text-slate-50">Politics</a>
    <a href="" class="inline-block py-1 px-2 mr-2 mb-2 text-slate-400 border border-slate-400 border-solid hover:bg-slate-500 hover:text-slate-50">Business</a>
    <a href="" class="inline-block py-1 px-2 mr-2 mb-2 text-slate-400 border border-slate-400 border-solid hover:bg-slate-500 hover:text-slate-50">Corporate</a>
    <a href="" class="inline-block py-1 px-2 mr-2 mb-2 text-slate-400 border border-slate-400 border-solid hover:bg-slate-500 hover:text-slate-50">Sports</a>
    <a href="" class="inline-block py-1 px-2 mr-2 mb-2 text-slate-400 border border-slate-400 border-solid hover:bg-slate-500 hover:text-slate-50">Health</a>
    <a href="" class="inline-block py-1 px-2 mr-2 mb-2 text-slate-400 border border-slate-400 border-solid hover:bg-slate-500 hover:text-slate-50">Education</a>
</div>
</div>
</div>
</div>
@endsection