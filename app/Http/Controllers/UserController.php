<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
	// add user
    public function addUser() {
    	return view('admin.user.add_user');
    }

    // user save
    public function saveUser(Request $request) {

        $this->validateUser($request);
        $imageUrl = $this->userProfilePhotoUpload($request);
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->mobile = $request->get('mobile');
        $user->user_profile_photo = $imageUrl;
        $user->address = $request->get('address');
        $user->password = Hash::make($request->get('password'));
        $user->remember_token = $request->get('_token');
        $user->save();

        if ($user) {
        	return redirect('/')->with('message', 'User added Successfully.');
        } else {
        	return redirect('/add')->with('message', 'User Not Saved.');
        }

    }

    protected function validateUser(Request $request){
        $request->validate([
            'name' => 'required | max:25',
            'email' => 'required | string | email | unique:users',
            'mobile' => 'required | min:11',
            'user_profile_photo' => 'image | mimes:jpeg,jpg,png | max:5000',
            'address' => 'string',
            'password' => 'required | confirmed | string | min:8'
        ]);
    }

    // user profile photo upload
    protected function userProfilePhotoUpload($request) {

        if ($request->hasFile('user_profile_photo')) {
            $profileImage   = $request->file('user_profile_photo');
            $imageExtension = $profileImage->getClientOriginalExtension();
            $imageName      = 'app_'.time().'.'.$imageExtension;
            $directory      = 'uploads/user-profile-image/';
            $profileImage->move($directory, $imageName);
            return $imageUrl  = url($directory.$imageName);
        }
    }

    // manage user
    public function manageUser() {
		$users = User::all();
		return view('admin.user.manage_user', ['users' => $users]);
	}

	// ban a user
	public function banUser($id) {
		$user = User::find($id);
		$user->status = 0;
		$user->save();
		return redirect('/user/manage')->with('message', 'User Banned.');
	}

	// active a user
	public function activeUser($id) {
		$user = User::find($id);
		$user->status = 1;
		$user->save();
		return redirect('/user/manage')->with('message', 'User Activated.');
	}

	//edit a user
	public function editUser($id) {
		$user = User::find($id);
		return view('admin.user.edit_user', ['user' => $user]);
	}


	// delete a user
	public function deleteUser($id) {
		$user = User::find($id);
		$user->delete();
		return redirect('/user/manage')->with('message', 'User Deleted Successfully.');
	}
}
