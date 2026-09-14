@extends('statamic::layout')
@section('title', 'Resources')

@section('content')
<ui-header title="{{ __('Resources') }}" icon="pin"></ui-header>

@if(count($looms) > 0)
    <ui-panel heading="{{ __('Videos') }}" icon="movie-video-clip">
        <ui-card>
            <div class="flex flex-row flex-wrap -mx-2">
                @foreach($looms as $loom)
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <div class="mb-2 rounded-lg overflow-hidden" style="position: relative; padding-bottom: 60.55625790139065%; height: 0;">
                            <iframe src="{{ $loom['embed_url'] }}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                        </div>
                        <h3 class="text-sm font-medium text-gray-700 dark:text-gray-300 mt-2">{{ $loom['name'] }}</h3>
                    </div>
                @endforeach
            </div>
        </ui-card>
    </ui-panel>
@endif

@if(count($additionalResources) > 0)
    <ui-panel heading="{{ __('Additional Resources') }}" icon="external-link">
        <ui-card>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-1.5 list-disc pl-5 text-sm">
                @foreach($additionalResources as $additionalResource)
                    <li><a class="text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300" href="{{ $additionalResource['url'] }}">{{ $additionalResource['name'] }}</a></li>
                @endforeach
            </ul>
        </ui-card>
    </ui-panel>
@endif
@endsection

@push('head')
    <link rel="preconnect" href="https://loom.com" />
@endpush
