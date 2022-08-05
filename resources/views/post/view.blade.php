<x-main-layout>
    <div class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <article>
            <div class="xl:divide-y xl:divide-gray-200">
                <header class="pt-6 xl:pb-6">
                    <div class="space-y-1 text-center">
                        <dl class="space-y-10">
                            <div>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base font-medium leading-6 text-gray-500">
                                    <time>{{ \Illuminate\Support\Facades\Date::createFromTimeString($post->created_at)->format('l, F j, Y'); }}</time>
                                </dd>
                            </div>
                        </dl>
                        <div>
                            <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10 md:text-5xl md:leading-[3.5rem]">{{ $post->title }}</h1>
                        </div>
                    </div>
                </header>
                <div class="divide-y divide-gray-200 pb-8 xl:grid xl:grid-cols-4 xl:gap-x-6 xl:divide-y-0" style="grid-template-rows: auto 1fr;">
                    <dl></dl>
                    <div class="divide-y divide-gray-200 xl:col-span-3 xl:row-span-2 xl:pb-0">
                        <div class="max-w-none pt-10 pb-8 text-gray-500 leading-7">{!! $post->content !!}</div>
                    </div>
                    <footer>
                        @if ($tags || $prev || $next)
                        <div class="flex justify-between py-4 xl:block xl:space-y-8 xl:py-11">
                            @if ($tags)
                            <div>
                                <h2 class="text-xs uppercase tracking-wide text-gray-500">Tags</h2>
                                <div class="text-teal-500 hover:text-teal-600">
                                    @foreach ($tags as $tag)
                                    <a href="{{ route('tags.view', ['slug' => $tag->slug]) }}" class="mr-3">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            @if ($prev)
                            <div>
                                <h2 class="text-xs uppercase tracking-wide text-gray-500">Previous Article</h2>
                                <div class="text-teal-500 hover:text-teal-600">
                                    <a href="{{ route('blog.view', ['slug' => $prev->slug]) }}">{{ $prev->title }}</a>
                                </div>
                            </div>
                            @endif

                            @if ($next)
                            <div>
                                <h2 class="text-xs uppercase tracking-wide text-gray-500">Next Article</h2>
                                <div class="text-teal-500 hover:text-teal-600">
                                    <a href="{{ route('blog.view', ['slug' => $next->slug]) }}">{{ $next->title }}</a>
                                </div>
                            </div>
                            @endif
                        </div>
                        @endif

                        <div class="pt-0 xl:pt-0">
                            <a class="text-teal-500 hover:text-teal-600" href="{{ route('blog.list') }}">← Back to the blog</a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>
    </div>
</x-main-layout>