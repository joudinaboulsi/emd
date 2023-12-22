<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderText extends Model
{
    //

    protected $table ="slider_texts";
    protected $fillable = [
        'text',
        'text2',
    ];
}
