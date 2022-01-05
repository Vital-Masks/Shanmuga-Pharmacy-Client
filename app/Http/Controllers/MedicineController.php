<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Medicine;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $pagination = 8;     
     
        $medicines = Medicine::with('medicineImages')->orderByDesc('id')->paginate($pagination);
        
        return view('medicine/medicineView', compact('medicines'));
    }

    public function showMedicine($id)
    {
        $medicine = Medicine::find($id);
        return view('medicine/singleMedicineView', compact('medicine'));
    }
}