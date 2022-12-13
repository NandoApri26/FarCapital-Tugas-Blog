@extends('templating.main')
@section('title', 'Article || TOKOMafia')

@section('content')

<div class="flex container flex-wrap gap-14">
    @foreach ($article as $item)
    <div class=" pt-4">
        <div class="max-w-sm mt-8 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{asset('img-article/' . $item->image_article)}}" alt="" />
            </a>
            <div class="p-5">
                <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
                    {{ $item -> tanggal }}
                </p>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{(strlen($item->judul_article) > 5) ? substr ($item -> judul_article, 0, 20). "..." : $item -> judul_article}}
                    </h5>
                </a>
                <a href="#">
                    <h6 class="mb-2 text-base font-reguler tracking-tight text-gray-900 dark:text-white">
                        {{(strlen($item->sub_description) > 5) ? substr ($item -> sub_description, 0, 35). "..." : $item -> sub_description}}
                    </h6>
                </a>
                <a href="{{ url ('/Article/' . $item->id) . '/detail'}}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Read Mode
                    </span>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
