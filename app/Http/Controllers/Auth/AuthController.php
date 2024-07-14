<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{

    // login Controller
  // Show the registration form
  public function indexer(){
    return view('backend.auth.register');
}

// Handle user registration
public function doRegister(Request $request){
    $request->validate([
        'name' => 'required|unique:users',
        'email' => 'required|unique:users|email',
        'password' => 'required|min:3|max:12',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('login');
}

// Handle user logout
public function logout(){
    Auth::logout();
    return redirect()->route('login');
}

// Show the login form
public function index()
{
    return view('backend.auth.login');
}

// Handle user login
public function postLogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('admin.home'); // or any route you want to redirect to
    }

    return redirect()->route('login')->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

// Show the registration form
public function registration()
{
    return view('backend.auth.register');
}

// Handle user registration
public function postRegistration(Request $request)
{
    $request->validate([
        'name' => 'required|unique:users',
        'email' => 'required|unique:users|email',
        'password' => 'required|min:3|max:12',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('login');
}

   
}