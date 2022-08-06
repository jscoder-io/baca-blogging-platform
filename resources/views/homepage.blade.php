<x-main-layout>
    <div class="divide-y divide-gray-200">
        <div class="space-y-2 pt-6 pb-8 md:space-y-5">
            <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10 md:text-6xl">Latest</h1>
            <p class="text-lg leading-7 text-gray-500">My latest blog posts</p>
        </div>

        <x-latest-posts />
    </div>

    <div class="flex justify-end text-base font-medium leading-6">
        <a class="text-teal-600 hover:text-teal-700" href="{{ route('blog.list') }}">All Posts →</a>
    </div>

    @livewire('newsletter-signup-form')
</x-main-layout>
