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
        'meta_description'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->preventOverwrite()
            ->doNotGenerateSlugsOnUpdate();
    }

    public function getPrev()
    {
        return (new static)->find($this->id - 1);
    }

    public function getNext()
    {
        return (new static)->find($this->id + 1);
    }

    public static function getLatest($limit = 5)
    {
        return (new static)->latest()->limit($limit)->get();
    }
}
