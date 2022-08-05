<?php

namespace App\Models;

use App\Models\Post;
use Spatie\Tags\Tag as SpatieTag;

class Tag extends SpatieTag
{
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public static function findFromSlug(string $name, string $type = null, string $locale = null)
    {
        $locale = $locale ?? static::getLocale();

        return static::query()
            ->where("slug->{$locale}", $name)
            ->where('type', $type)
            ->first();
    }
}
