<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'weight',
        'price',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function presentPrice()
    {
        return 'LKR ' . number_format($this->price / 100, 2);
    }
}
