<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $table ="products";
    protected $fillable = [
        'image_header',
        'title_header',
        'subtitle_header',
        'name_product',
        'image',
        'alt',
        'title',
        'desc1',
        'desc2',
        'small_title_components',
        'category1',
        'category2',
        'category3',
        'category4',
        'tag1',
        'tag2',
        'tag3',
        'tag4',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',
        
    ];


    public function images(){
        return $this->hasMany(ProductImages::class, 'product_id', 'id');
     }

     public function components(){
        return $this->hasMany(Component::class);
     }

     public function componentsSecond(){
        return $this->hasMany(ComponentTwo::class, 'product_id', 'id');
     }

 

}
