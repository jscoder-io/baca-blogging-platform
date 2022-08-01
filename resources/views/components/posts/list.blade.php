
<ul class="divide-y divide-gray-200">
    @foreach ($posts as $post)
    <li class="py-12">
        <article>
            <div class="space-y-2 xl:grid xl:grid-cols-4 xl:items-baseline xl:space-y-0">
                <dl>
                    <dt class="sr-only">Published on</dt>
                    <dd class="text-base font-medium leading-6 text-gray-500">
                        <time>
                            {{ \Illuminate\Support\Facades\Date::createFromTimeString($post->created_at)->format('F j, Y'); }}
                        </time>
                    </dd>
                </dl>
                <div class="space-y-5 xl:col-span-3">
                    <div class="space-y-6">
                        <div>
                            <h2 class="text-2xl font-bold leading-8 tracking-tight">
                                <a class="text-gray-900" href="{{ route('blog.view', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                            </h2>
                        </div>
                        <div class="max-w-none text-gray-500">{{ $post->intro }}</div>
                    </div>
                    <div class="text-base font-medium leading-6">
                        <a class="text-teal-600 hover:text-teal-700" href="{{ route('blog.view', ['slug' => $post->slug]) }}">Read more →</a>
                    </div>
                </div>
            </div>
        </article>
    </li>
    @endforeach
</ul>
