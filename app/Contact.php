<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $table = "contacts";

    protected $fillable = [
            'title',
            'title_main',
            'image',
            'title_office',
            'email',
            'location',
            'location_url',
            'phone',
            'phone_url',
            'phone2',
            'phone2_url',
            'phone3',
            'phone3_url',
            'title_location',
            'location2',
            'location2_url',
            'phone4',
            'phone4_url',
            'phone5',
            'phone5_url',
            'map',
    ];
}
