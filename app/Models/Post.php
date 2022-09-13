<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasFactory, HasSlug, HasTags, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'intro',
        'content',
        'meta_keywords',
        'meta_description',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->preventOverwrite()
            ->doNotGenerateSlugsOnUpdate();
    }

    /**
     * Get a previous post
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function getPrev()
    {
        return (new static)->where('id', '<', $this->id)
            ->orderBy('id', 'desc')
            ->limit(1)
            ->first();
    }

    /**
     * Get a next post
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function getNext()
    {
        return (new static)->where('id', '>', $this->id)
            ->orderBy('id', 'asc')
            ->limit(1)
            ->first();
    }

    /**
     * Get latest posts with limit
     *
     * @param  int  $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getLatest($limit = 5)
    {
        return (new static)->latest()->limit($limit)->get();
    }
}
