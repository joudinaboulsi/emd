<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //

    protected $table = "news";
    protected $fillable = [
       'image',
       'alt',
       'title',
        'text',
       'link',
       'image_detail',
    ];
}
