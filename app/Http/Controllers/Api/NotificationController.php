<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\NotificationForUser;

class NotificationController extends Controller
{

  public function showNotification(){
      $notification = NotificationForUser::where('status', 1)
                                           ->orderBy('id', 'DESC')
                                           ->get();

      return response()->json([
          'Notification' => $notification
      ], 201);
  }

}
