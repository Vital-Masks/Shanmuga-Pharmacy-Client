<?php

namespace App\Http\Controllers;

use App\Models\PrescriptionOrders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrescriptionOrdersController extends Controller
{
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $request->validate(
            [
                'userName' => 'required',
                'email' => 'required|email|max:255|regex:/(.*)@gmail\.com/i',
                'phone' => 'required',
                'nic' => 'required|regex:/^[0-9]{9}[vVxX]$/',
                'prescription' => 'required',
            ],
            [
                'userName.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.regex:' => 'Email format is wrong!',
                'phone.required' => 'Phone is required',
                'nic.required' => 'NIC is required',
                'nic.regex' => 'NIC format is wrong!',
                'prescription.required' => 'Prescription is required',
            ]
        );

        $order = new PrescriptionOrders();

        $data = $request->all();

        $order->name = $data['userName'];
        $order->email = $data['email'];
        $order->phone = $data['phone'];
        $order->nic = $data['nic'];

        if ($request->hasfile('prescription')) {
            $image = $request->file('prescription');
            $image_ext = $image->getClientOriginalExtension();
            $filename = rand(111, 99999) . "." . $image_ext;
            $folder = '/img/prescriptions/';
            $path = $folder . $filename;
            $image->move(public_path($folder), $filename);
        }

        $order->prescription = $path;
        $order->save();

        if ($order->wasRecentlyCreated === true) {
            $sen['success'] = true;
            return response()->json($sen);
        }
        $sen['success'] = false;
        return response()->json($sen);
    }
}
