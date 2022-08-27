<x-main-layout>
    <div class="divide-y divide-gray-200">
        <div class="space-y-2 pt-6 pb-8 md:space-y-5">
            <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10 md:text-6xl">{{ __('Tags') }}: {{ $name }}</h1>
            <p class="text-lg leading-7 text-gray-500">{{ __('All blog posts with matching tags.') }}</p>
        </div>

        <x-posts.list :posts="$posts" />

        @if ($posts->hasPages())
            <div class="py-5">{{ $posts->links() }}</div>
        @endif
    </div>
</x-main-layout>