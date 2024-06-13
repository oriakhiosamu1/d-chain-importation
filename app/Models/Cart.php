<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product',
        'price',
        'quantity',
        'subtotal',
        'total',
        'product_id'
    ];

    // RELATIONSHIP WITH USERS TABLE
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    // RELATIONSHIP WITH PRODUCTS TABLE
    public function products(){
        return $this->hasOne(Product::class);
    }
}
