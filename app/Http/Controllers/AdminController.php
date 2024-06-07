<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    public function index() 
    {
        return view("admin.index");
    }
    public function login ()
    {
        return view("admin.login");
    }
    public function checklogin ()
    {  
        request()->validate([   
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required'],
        ]);
        
        $data = request()->only('email', 'password');
        
        if(auth()->attempt($data)){

            return redirect()->route("admin.index");
            
        }
        
        return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng.');
    }
    public function register ()
    {
        return view("admin.register");
    }
    public function checkrgister ()
    {
        
        request()->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required",
            "confirm_password" => "required|same:password",
        ]);
    
        $data = request()->only('name', 'email', 'password');
        $data['password'] = bcrypt($data['password']); // Sử dụng mật khẩu thực tế, không phải "password"
        User::create($data);
        return redirect()->route("admin.login");
    }
    public function logout()
{
    Auth::logout();
    return redirect()->route("admin.login");
}
}
