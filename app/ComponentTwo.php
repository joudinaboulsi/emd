<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComponentTwo extends Model
{
    //

    protected $table="component_twos";
    protected $fillable = [
        'id',
        'title',
        'text',
        'image',
        'alt',

       'product_id',

    ];




    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
