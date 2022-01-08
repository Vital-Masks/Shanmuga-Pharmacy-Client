<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\MedicineImage;

use Illuminate\Support\Facades\URL;


class AdminMedicineController extends Controller
{
    /**
     * Display a listing of the resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = 10;
        $medicines = Medicine::latest()->paginate($pagination);
        return view('admin.medicine.medicinesView', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicine = new Medicine();
        $images[] = new MedicineImage();
        $action = URL::route('medicines.store');
        return view('admin.medicine/medicineFormView', compact('medicine', 'action', 'images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'genericName' => 'required',
            'brand' => 'required',
            'dossageWeight' => 'required',
            'category' => 'required',
            'disease' => 'required',
            'description' => 'required',
            'ageCategory' => 'required',
        ]);
        $medicine = Medicine::create($request->all());
        // // upload multi image
        if ($request->hasfile('image_url')) {
            $images = new MedicineImage();
            $images = $request->file('image_url');
            foreach ($images as $image) {
                $image_ext = $image->getClientOriginalExtension();
                $filename = rand(111, 99999) . "." . $image_ext;
                $folder = '/img/medicines/';
                $filePath = $folder . $filename;
                $array[] = ['image_url' => $filePath];
                $image->move(public_path($folder), $filename);
            }
            $medicine->medicineImages()->createMany($array);
        }



        return redirect()->route('medicines.index')->with('flash_message_success', 'Medicine added successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        return view('admin.medicine/medicineDetailsView', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        $action = URL::route('medicines.update', $medicine->id);

        return view('admin.medicine/medicineFormView', compact('medicine', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
            'genericName' => 'required',
            'brand' => 'required',
            'dossageWeight' => 'required',
            'category' => 'required',
            'disease' => 'required',
            'description' => 'required',
            'ageCategory' => 'required',
        ]);

        $medicine->update($request->all());
        return redirect()->route('medicines.index')->with('flash_message_success', 'Medicine updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return redirect()->route('medicines.index')
            ->with('flash_message_success', 'Medicine deleted successfully');
    }
}
