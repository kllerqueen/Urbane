<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillables = [
        'category_id',
        'item_name',
        'item_desc',
        'item_price',
        'item_createTime'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function pictures(){
        return $this->hasMany(Picture::class);
    }
}
