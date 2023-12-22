<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketingSLiderText extends Model
{
    //

    protected $table ="marketing_s_lider_texts";
    protected $fillable = [
        'text',
        'text2',
    ];
}
