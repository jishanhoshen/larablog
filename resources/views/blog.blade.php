@extends('layout.app')

@section('title', 'Categories')

@section('content')

<div class="container m-auto px-5">
    <div class="px-16">
        <div class="bg-slate-50 px-5 mt-3 py-2 flex justify-between items-center">
            <h2 class="text-2xl text-slate-900 font-bold">Category - Entertainment</h2>
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
</div>
<div class="container m-auto px-5">
    <div class="px-16">
        <div class="bg-slate-50 px-5 mt-3 py-2 flex justify-between items-center">
            <h2 class="text-2xl text-slate-900 font-bold">Tag - Health</h2>
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
</div>

@endsection