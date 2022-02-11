<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\User;

class HomeController extends Controller
{
    public function dashboard(){
        $totalAdmins = Admin::count();
        $totalUsers = User::count();

    	if (Auth::guard("admin")->check()) {
    		return view('admin.dashboard.dashboard_content', [
                'totalAdmins' => $totalAdmins,
                'totalUsers' => $totalUsers
            ]);
        }
        return view('admin.login.login');
    }

    public function showAdminProfile() {
        $adminDetails = \Auth::guard('admin')->user();
        return view('admin.admin-profile.admin_profile', ['adminDetails' => $adminDetails]);
    }



}
