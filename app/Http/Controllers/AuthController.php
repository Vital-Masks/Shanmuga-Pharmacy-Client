<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

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
            'firstName' => 'required',
            'lastName' => 'required',
            'nic' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'address' => 'required',
            'city' => 'required',
            'phoneNumber' => 'required',
        ]);

        $data = $request->all();
        // $check = $this->create($data);
        $user = User::create([
            'name' => $data['firstName'],
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'nic' => $data['nic'],
            'phone' => $data['phoneNumber'],
            'email' => $data['email'],
            'is_admin' => false,
            'password' => Hash::make($data['password'])
        ]);

        Customer::create([
            'user_id' => $user->id,
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'phone_number' => $data['phoneNumber'],
        ]);
        return redirect("/")->withSuccess('You have signed-in');
    }

    // public function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['firstName'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password'])
    //     ]);
    // }

    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/')->withSuccess('Signed in');
        }
        return redirect("/")->withSuccess('Login details are not valid');
    }

    public function signOut()
    {
        FacadesSession::flush();
        Auth::logout();

        return Redirect('/');
    }
}
