<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class ApiAuthController extends Controller
{

    // user login
    public function login(Request $request) {

        $credentials = array("email"=>$request->email, "password"=>md5($request->password));

        if (!$token = auth()->attempt($credentials)) {

            return response()->json([
                'status' => 0,
                'message' => 'Unauthorized Users.'
            ]);

        } else{
            $user_information = Auth::user();
            $user_id = Auth::id();
            return response()->json([
                'user_id' => $user_id,
                'user_information' => $user_information,
                'status' => 1,
                'message' => 'Successfully login.',
                'token' => $this->respondWithToken($token)
            ], 200);
        }

    }



    // user register
    public function userRegister(Request $request) {


        $this->validateRegister($request);
        $imageUrl = $this->userProfilePhotoUpload($request);
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->mobile = $request->get('mobile');
        $user->user_profile_photo = $imageUrl;
        $user->address = $request->get('address');
        $user->password = md5($request->get('password'));
        $user->save();

        if ($token = auth()->login($user)) {

            $user_id = Auth::id();
            $user_information = Auth::user();

            return response()->json([
                'user_id' => $user_id,
                'user_information' => $user_information,
                'status' => 1,
                'message' => 'Registration Successfull.',
                'token' => $this->respondWithToken($token)
            ], 201);
        } else {
            return response()->json([
                'status' => 0,
                'error' => 'Registration Not Successfull.'
            ]);
        }

    }

    protected function validateRegister(Request $request){
        $request->validate([
            'name' => 'required | max:25',
            'email' => 'required | string | email | unique:users',
            'mobile' => 'required | min:11',
            // 'user_profile_photo' => 'image | mimes:jpeg,jpg,png | max:5000',
            'password' => 'required | string | min:8'
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

    public function userProfile() {
        return response()->json(auth()->user());
    }


    public function logout() {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


    public function refresh() {
        return $this->respondWithToken(auth()->refresh());
    }


    protected function respondWithToken($token) {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }


      public function profileUpdate(Request $request) {

        $user_id = auth()->id();

        $this->validate($request, [
            'name' => 'required | string | max:25',
            'email' => 'required | email | unique:users,email,'.$user_id,
            'address' => 'required | min:1',
        ]);
        
            $imageName      = 'cpp_'.time().'.'.'png';
            
            file_put_contents('uploads/user-profile-image/'.$imageName,base64_decode($request->get('user_profile_photo')));

            $user = User::findOrFail($user_id);
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->user_profile_photo = 'uploads/user-profile-image/'.$imageName;
            $user->address = $request->get('address');
            $user->save();

            if ($user) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Profile Update Successfull.',
                    'user' => $user,
                ], 201);

            } else {
                return response()->json([
                    'status' => 0,
                    'message' => 'Profile not updated.'
                ], 201);
            }
          }

}
