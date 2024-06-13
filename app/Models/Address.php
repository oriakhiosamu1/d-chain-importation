<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'surname',
        'mobile_number',
        'postal_code',
        'state',
        'city',
        'street_address',
        'email',
        'country'
    ];

    // RELATIONSHIP WITH USER
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
