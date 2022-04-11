<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $id =  Auth::user()->id;
        $orders = Order::where('user_id', $id)->paginate(5);
        return view('profileView', compact('orders'));
    }

    public function update(Request $request)
    {
        $id =  Auth::user()->id;
        $user = User::find($id);

        $user->update([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'nic' => $request->input('nic'),
            'phone' => $request->input('phone'),
        ]);

        return back()->with('flash_message_success', 'Product updated successfully!');
    }
}
