<?php

namespace App\Http\Controllers;

use App\Mail\NewOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function order(Request $request)
    {

        foreach (session('cart') as $id => $item) {
            // echo "<pre>";
            // print_r($item['price']);

            $orders[] =  ([
                'product_id' => $id,
                'item_count' => $item['quantity'],
                'price' => $item['price'],
                'name' => $item['name'],
            ]);
        }

        // echo "<pre>";
        // print_r($order);
        // die;
        // $order = Order::create([
        //     'cake_id' => $request->cakeid,
        //     'customer_name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'address' => $request->address,
        //     'qty' => $request->quantity,
        //     'price' => $request->cakeprice,
        // ]);

        Mail::to('vginthu@gmail.com')->send(new NewOrder($orders));
        return back()->with('order_sent', 'Order made successfully! We will contact you shortly.');
    }
}
