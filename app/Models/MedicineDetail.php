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
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}
