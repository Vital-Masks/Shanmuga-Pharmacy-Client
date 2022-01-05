<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'genericName',
        'brand',
        'dossageWeight',
        'category',
        'disease',
        'description',
        'ageCategory'
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}
