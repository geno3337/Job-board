<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Blog\Database\Factories\PostFactory;
// use Modules\Blog\Database\Factories\PostFactory;

class Post extends Model
{
    use HasFactory;

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'discription',
        'body',
        'author'
    ];

    protected static function newFactory(): PostFactory
    {
        return PostFactory::new();
    }
}
