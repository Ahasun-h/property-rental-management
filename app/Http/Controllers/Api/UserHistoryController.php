<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\UserHistory;
use App\UserAdPost;

class UserHistoryController extends Controller
{
//   public function showHistory(){
    
//       $History = UserHistory::where('status', 1)->get();
//       return response()->json([
//           'History' => $History
//           //$activePosts
//       ], 201);
//   }
  
  
  public function showHistory($customer_id){
        $History = UserHistory::where('customer_id', $customer_id)
                             ->where('status', 1)
                             ->orderBy('id', 'DESC')
                             ->get();
        return response()->json([
            'History' => $History

        ], 201);
        
  }

      
  
  
}
