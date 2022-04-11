<?php

namespace App\Http\Controllers;

use App\Mail\NewOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function order(Request $request)
    {
        if (Auth::user()) {
            foreach (session('cart') as $id => $item) {
                $order = Order::create([
                    'user_id' => Auth::user()->id,
                    'product_id' => $id,
                    'grand_total' => $item['price'],
                    'item_count' => $item['quantity'],
                    'first_name' => Auth::user()->first_name,
                    'last_name' => Auth::user()->last_name,
                    'phone_number' => Auth::user()->phone,
                ]);
            }
            $myEmail = 'ginthozanv@gmail.com';
            $details = [
                'title' => 'Orders from www.sanmukamedicals.com',
                'body' =>  "An order has been made just now!",
            ];

            Mail::to($myEmail)->send(new NewOrder($details));
            return back()->with('success', 'Order made successfully! We will contact you shortly.');
        }
        // Mail::to('vginthu@gmail.com')->send(new NewOrder($orders));
        return redirect()->back()->with('failed', 'You need to login before make an order.');
    }
}
