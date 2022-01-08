<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
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
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("admin-login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('admin.auth.registration');
    }


    public function store(Request $request)
    {
        // echo "<pre>"; print_r($request->all()); die;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("/dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'is_admin' => true,
            'password' => Hash::make($data['password'])
        ]);
    }


    public function dashboard()
    {
        if (Auth::check() && auth()->user()->is_admin == 1) {
            return view('admin.dashboard');
        }

        return redirect("admin-login")->with('message', 'You are not allowed to access!');
    }


    public function signOut()
    {
        FacadesSession::flush();
        Auth::logout();

        return Redirect('admin-login');
    }
}
