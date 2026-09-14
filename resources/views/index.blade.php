@extends('statamic::layout')
@section('title', 'Resources')

@section('content')
<header class="relative flex flex-wrap items-center justify-between gap-4 px-2 sm:px-0 py-6 max-md:pb-8 md:py-8">
    <h1 class="text-[25px] leading-[1.25] font-medium antialiased flex items-center gap-2.5 md:flex-1">
        {{ __('Resources') }}
    </h1>
</header>

@if(count($looms) > 0)
    <div class="relative bg-gray-150 dark:bg-gray-950/35 w-full rounded-2xl mb-6 p-1.75">
        <header class="px-4.5 py-3">
            <h2 class="text-sm tracking-tight text-gray-700 dark:text-white font-medium antialiased flex items-center gap-2">
                {{ __('Videos') }}
            </h2>
        </header>

        <div class="bg-white dark:bg-gray-850 rounded-xl ring ring-gray-200 dark:ring-gray-700/80 shadow-ui-md px-4 sm:px-4.5 py-5">
            <div class="flex flex-row flex-wrap -mx-2">
                @foreach($looms as $loom)
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <div class="mb-2 rounded-lg overflow-hidden" style="position: relative; padding-bottom: 60.55625790139065%; height: 0;">
                            <iframe src="{{ $loom['embed_url'] }}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                        </div>
                        <h3 class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ $loom['name'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif

@if(count($additionalResources) > 0)
    <div class="relative bg-gray-150 dark:bg-gray-950/35 w-full rounded-2xl mb-6 p-1.75">
        <header class="px-4.5 py-3">
            <h2 class="text-sm tracking-tight text-gray-700 dark:text-white font-medium antialiased flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-gray-500 dark:text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                </svg>
                {{ __('Additional Resources') }}
            </h2>
        </header>

        <div class="bg-white dark:bg-gray-850 rounded-xl ring ring-gray-200 dark:ring-gray-700/80 shadow-ui-md px-4 sm:px-4.5 py-5">
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-1.5 list-disc pl-5 text-sm">
                @foreach($additionalResources as $additionalResource)
                    <li><a class="text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300" href="{{ $additionalResource['url'] }}">{{ $additionalResource['name'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@endsection

@push('head')
    <link rel="preconnect" href="https://loom.com" />
@endpush
