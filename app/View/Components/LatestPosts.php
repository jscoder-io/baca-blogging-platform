<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class LatestPosts extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.posts.list')
            ->with('posts', Post::getLatest(setting('blog.latest.per_page')));
    }
}
