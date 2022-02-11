<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\RentedList;


class RentedListController extends Controller
{

  public function rentedAd($id){
      $RentedList = RentedList::where('User_id',$id )->get();
      return response()->json([
          'Rented' => $RentedList
          ], 201);
  }



}
