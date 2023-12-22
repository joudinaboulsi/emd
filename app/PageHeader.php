<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageHeader extends Model
{
    //

    protected $table="page_headers";
    protected $fillable = [
        'page_name',
        'image_header',
        'title_header',
        'subtitle_header',
        'related',
        'text_product',
        'link_video',
     'image_marketing',
    ];
}
