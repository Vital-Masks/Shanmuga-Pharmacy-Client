<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Facade\FlareClient\Http\Response;
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
            'nic' => 'required|regex:/^[0-9]{9}[vVxX]$/',
            'email' => 'required|email|max:255|regex:/(.*)@gmail\.com/i|unique:users',
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

        $customer = Customer::create([
            'user_id' => $user->id,
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'phone_number' => $data['phoneNumber'],
        ]);

        if ($user->wasRecentlyCreated === true && $customer->wasRecentlyCreated === true) {
            $sen['success'] = true;
            return response()->json($sen);
        }
        $sen['success'] = false;
        return response()->json($sen);

        // return redirect("/")->withSuccess('You have signed-in');
    }



    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required|email|max:255|regex:/(.*)@gmail\.com/i',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $sen['success'] = true;
            return response()->json($sen);
        }
        $sen['success'] = false;
        return response()->json($sen);
    }

    public function signOut()
    {
        FacadesSession::flush();
        Auth::logout();

        return Redirect('/');
    }
}
