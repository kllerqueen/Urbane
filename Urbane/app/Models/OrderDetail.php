<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'order_id',
        'item_id',
        'qty',
        'size',
        'color'
    ];

    public function Order() {
        return $this->belongsTo(Order::class);
    }
   
}
