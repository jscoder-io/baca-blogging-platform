<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['path', 'value'];

    public static function getByPath($path)
    {
        $setting = (new static)->where('path', $path)->get()->first();

        return $setting ? $setting->value : null;
    }
}
