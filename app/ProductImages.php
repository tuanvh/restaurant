<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $table = "product_images";

    protected $fillable = ['images', 'product_id'];

    public $timestamps = false;

    public function product()
    {
        // 1 image thuoc ve 1 product nao do
        return $this->belongsTo('App\Product');
    }
}
