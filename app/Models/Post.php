<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory, HasSlug, SoftDeletes;

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
