<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model
{
    //

    protected $table = "slider_images";
    protected $fillable = [
       'image',
       'title',
       'subtitle',
       'link',
       'link_url',
       'logo',
       'alt',
    ];
}
