<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    //

    protected $table ="home_pages";
    protected $fillable = [
        'title_s1',
        'subtitle_s1',
        'text_s1',
        'image_s1',
        'alt_s1',
        'image_title',
        'count',
        'count_title',
        'count2',
        'count_title2',
        'count3',
        'count_title3',
        'count4',
        'count_title4',
        'youtube',
        'link',
        'link_url',
        'small_title',
        'small_title2',
        'subtitle_product',
        'title_product',
        'subtitle_news',
        'title_news',
        'title_client',
    ];
}
