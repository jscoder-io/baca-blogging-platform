<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\Tags\Tag as SpatieTag;

class Tag extends SpatieTag
{
    /**
     * Relation with posts
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    /**
     * Find a tag from slug
     *
     * @param  string  $name
     * @param  string  $type
     * @param  string  $locale
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public static function findFromSlug(string $name, string $type = null, string $locale = null)
    {
        $locale = $locale ?? static::getLocale();

        return static::query()
            ->where("slug->{$locale}", $name)
            ->where('type', $type)
            ->first();
    }

    /**
     * Find a tag from slug of fail
     *
     * @param  string  $name
     * @param  string  $type
     * @param  string  $locale
     * @return \Illuminate\Database\Eloquent\Model|null
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public static function firstOrFailFromSlug(string $name, string $type = null, string $locale = null)
    {
        if (! is_null($model = static::findFromSlug($name))) {
            return $model;
        }

        throw (new ModelNotFoundException)->setModel(static::class);
    }
}
