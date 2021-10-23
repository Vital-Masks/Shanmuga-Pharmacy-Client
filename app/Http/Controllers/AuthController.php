<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function customerRegister(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'address' => 'required',
            'city' => 'required',
            'phone_number' => 'required',
        ]); 

        $data = $request->all();
        $check = $this->create($data);
        $cutomer = new Customer();

        $customerData = ([
            'user_id' => $check->id,
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'phone_number' => $data['phoneNumber'],
        ]);
        $cutomer->create($customerData);
        return redirect("/")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {

        return User::create([
            'name' => $data['firstName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        // $user->customer()->create

        // return Customer::create([
        //     'user_id' => $user->id,
        //     'first_name' => $data['firstName'],
        //     'last_name' => $data['lastName'],
        //     'address' => $data['address'],
        //     'city' => $data['city'],
        //     'state' => $data['state'],
        //     'zip' => $data['zip'],
        //     'phone_number' => $data['phoneNumber'],
        // ]);
    }

    public function customLogin(Request $request)
    {
        // echo "<pre>"; print_r($request->all()); die;
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/')->withSuccess('Signed in');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
}
