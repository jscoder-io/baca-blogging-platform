<x-main-layout>
    <div class="divide-y divide-gray-200">
        <div class="text-center space-y-2 pt-6 pb-8 md:space-y-5">
            <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">About</h1>
        </div>
        <div class="items-start space-y-2 xl:grid xl:grid-cols-3 xl:gap-x-8 xl:space-y-0">
            @if ($name)
            <div class="flex flex-col items-center pt-8">
                <h3 class="pb-2 text-2xl font-bold leading-8 tracking-tight">{{ $name }}</h3>
                @if ($job_title)
                <div class="text-gray-500">{{ $job_title }}</div>
                @endif
            </div>
            @endif
            @if ($bio)
            <div class="text-gray-500 max-w-none pt-8 pb-8 xl:col-span-2">{!! $bio !!}</div>
            @endif
        </div>
    </div>
</x-main-layout>