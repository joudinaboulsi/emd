<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    //
    protected $table="components";
  
    protected $fillable = [
        'id',
        'name',
       'product_id',

    ];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
