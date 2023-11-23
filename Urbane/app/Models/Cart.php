<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cart extends Model
{
    use HasFactory;

    protected $fillables = [
        'user_id',
        'item_id',
        'qty'
    ];

    //masih bingung relationnya gimana

    // public function user() {
    //     return $this->belongsToMany(User::class);
    // }

    // public function items() {
    //     return $this->hasMany(Item::class);
    // }
}
