<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'alias',
        'price',
        'intro',
        'content',
        'image',
        'keywords',
        'description',
        'user_id',
        'cat_id'
    ];

    public $timestamps = false;

    public function cate()
    {
        //1 product thuoc ve 1 cat nao do
        return $this->belongsTo('App\Cate');
    }

    public function user()
    {
        // 1  product thuoc ve 1 user nao do
        return $this->belongsTo('App\User');
    }

    public function pimages()
    {
        // 1 product co nhieu images
        return $this->hasMany('App\Product_')
    }
}
