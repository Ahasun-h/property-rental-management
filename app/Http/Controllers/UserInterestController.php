<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserInterestedPost;

class UserInterestController extends Controller
{
  public function manageInterest() {
    $userInterest = UserInterestedPost::where('status',1)->get();
    // return $userInterest;die;
    return view('admin.interest.manage_interest',compact('userInterest'));
  }


  public function deleteInterest($id) {
    $interest = UserInterestedPost::find($id);
    $interest->status = 0;
    $interest->save();
    return redirect('/interest/manage')->with('message', 'User Interest Deleted Successfully.');
  }

}
