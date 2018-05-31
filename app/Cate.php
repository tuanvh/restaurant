<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'cates';

    protected $fillable = [
        'name',
        'alias',
        'order',
        'keywords',
        'description',
        'parent_id'
    ];

    public $timestamps = false;

    public function product()
    {
        // 1 cate co nhieu product
        return $this->hasMany('App\Product');
    }

}
