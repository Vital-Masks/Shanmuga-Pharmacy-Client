<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'genericName',
        'brand',
        'dossageWeight',
        'category',
        'disease',
        'description',
        'ageCategory',
    ];

    public function medicineImages()
    {
        return $this->hasMany(MedicineImage::class);
    }
}
