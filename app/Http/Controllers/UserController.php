<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function __construct()
    {   
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.auth');
    }

    public function registerForm()
    {
        return view('layouts.register');
    }

    /**
     * Register user.
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|min:4|max:255',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($user->save()) {
            Auth::login($user);
            return redirect('/')->with('success', 'User created successfully.');
        }else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function loginForm()
    {
        return view('layouts.auth');
    }

    /**
     * Login user.
     */

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/')->with('success', 'User logged in successfully.');
        }else {
            return redirect()->back()->with('error', 'Invalid credentials.');
        }
    }

    /**
     * Logout user.
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        auth()->logout();
        return redirect('/');
    }
}
