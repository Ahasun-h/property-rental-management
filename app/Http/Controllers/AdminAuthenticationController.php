<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Validator;
use App\Admin;
use Auth;
use Session;

class AdminAuthenticationController extends Controller
{
    public function showLoginForm() {

        if (Auth::guard('admin')->check()) {
            return Redirect::to('/');
        } 
        return view('admin.login.login');
        
    }

    public function checkAdminLogin(Request $request) {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/');
        }
        return Redirect::to("admin-login")->with('message', 'Invalid Email or Password !');
    }

    // logout
    public function adminLogout(){
        Session::flush();
        Auth::guard("admin")->logout();
        return redirect('/admin-login');
    }

}
