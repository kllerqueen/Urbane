<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'address',
        'postal_Code',
        'name',
        'phone',
        'notes',
        'paymentMethod',
        'total_price'
    ];

    public function transactionDetail(){
        return $this->hasMany(TransactionDetail::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
