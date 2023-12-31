<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'item_id',
        'qty',
        'size',
        'color'
    ];
    public function transactionHeader(){
        return $this->belongsTo(TransactionHeader::class);
    }
    public function item(){
        return $this->belongsTo(Item::class, 'item_id');
    }
}
