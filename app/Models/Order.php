<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'customer_name',
        'email',
        'phone',
        'address',
        'qty',
        'price',
        'name',
    ];

    public function cakes()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
