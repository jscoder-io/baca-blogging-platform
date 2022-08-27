<x-main-layout>
    <div class="flex flex-col items-start justify-start divide-y divide-gray-200 md:mt-24 md:flex-row md:items-center md:justify-center md:space-x-6 md:divide-y-0">
        <div class="space-x-2 pt-6 pb-8 md:space-y-5">
            <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10 md:border-r-2 md:px-6 md:text-6xl md:leading-14">{{ __('Tags') }}</h1>
        </div>
        <div class="flex max-w-lg flex-wrap">
            @foreach ($tags as $tag)
                <div class="mt-2 mb-2 mr-5">
                    <a class="mr-3 text-sm font-semibold uppercase text-teal-500 hover:text-teal-600" href="{{ route('tags.view', ['slug' => $tag->slug]) }}">{{ $tag->name }}</a>
                    <a class="-ml-2 text-sm font-semibold uppercase text-gray-600" href="{{ route('tags.view', ['slug' => $tag->slug]) }}"> ({{ $tag->posts()->count() }})</a>
                </div>
            @endforeach
        </div>
    </div>
</x-main-layout>