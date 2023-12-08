<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'customer_id',
        'address',
        'postal_Code',
        'status',
        'name',
        'phone',
        'notes',
        'paymentMethod',
        'total_price'
    ];
    
    public function OrderDetail(){
        return $this->hasMany(OrderDetail::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
