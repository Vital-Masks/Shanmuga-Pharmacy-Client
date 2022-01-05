<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    public function medicineImages(){
        return $this->hasMany(MedicineImage::class);
    }
   

    public function medicineDetails(){
        return $this->hasMany(MedicineDetail::class);
    }


}
