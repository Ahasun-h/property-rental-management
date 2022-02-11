<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\UserInterestedPost;

class UserInterestedController extends Controller
{
    
    public function showMyInterest($user_id){
        $myInterest = UserInterestedPost::where('user_id', $user_id)
                     ->where('status', 1)
                     ->orderBy('id', 'DESC')
                     ->get();
        return response()->json([
            'MyInterest' => $myInterest
            ], 201);
    }





  public function userInterest(Request $request){

          $this -> validadeUserAddPost($request);
          //$this -> addPostImageUpload($request);

          $userInterest = new UserInterestedPost();

           $userInterest->post_id = $request->get('post_id');
           $userInterest->post_title = $request->get('post_title');
           $userInterest->post_division = $request->get('post_division');
           $userInterest->post_city = $request->get('post_city');
           $userInterest->post_address = $request->get('post_address');
           $userInterest->post_category = $request->get('post_category');
           $userInterest->renters = $request->get('renters');
           $userInterest->rent_date = $request->get('rent_date');
           $userInterest->user_id = $request->get('user_id');
           $userInterest->user_name = $request->get('user_name');
           $userInterest->user_mobile = $request->get('user_mobile');

          $userInterest->save();

          if ($userInterest) {
              return response()->json([
                  'success' => 'Post Successfully added.',
                  'status' => 1,
                  'UserInterest' => $userInterest
              ]);
          }else {
              return response()->json([
                  'success' => 'Post Not added.',
                  'status' => 0,
              ]);
          }
  }


  protected function validadeUserAddPost(Request $request){

       $request->validate([
          'post_id' => 'required',
          'post_title' => 'required',
          'post_division' => 'required',
          'post_city' => 'required',
          'post_address' => 'required',
          'post_category' => 'required',
          'renters' => 'required',
          'rent_date' => 'required',
          'user_id' => 'required',
          'user_name' => 'required',
          'user_mobile' => 'required',

      ]);
  }
  
  
 





}
