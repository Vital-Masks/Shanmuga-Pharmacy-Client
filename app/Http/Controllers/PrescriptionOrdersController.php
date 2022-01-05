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
        $request->validate([
            'userName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'nic' => 'required',
            'prescription' => 'required',
        ]);

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
            $image->move(public_path($folder), $filename);
        }

        $order->prescription = $filename;
        $order->save();

        return back()->with('flash_message_success', 'Prescription created successfully!');
    }
}
