<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class);
    }

    public function presentPrice(){
        return 'LKR '.number_format($this->price / 100, 2);
    }
}
