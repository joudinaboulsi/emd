<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    //
    protected $table ="marketings";
    protected $fillable = [
       'image',
       'alt',
       'title',
       'item',
       'item_value',
       'price_value',
       'price',
       'title_modal',
       'text_modal',
       'image2',
       'alt2',
    ];
}
