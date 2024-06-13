<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'price',
        'name',
        'description',
        'image1',
        'image2',
        'category',
        'quote',
    ];

    // RELATIONSHIP WITH USERS AND PIVOT TABLE
    public function users(){
        return $this->belongsToMany(User::class);
    }

    // RELATIONSHIP WITH CARTS TABLE
    public function carts(){
        return $this->belongsTo(Cart::class);
    }
}
