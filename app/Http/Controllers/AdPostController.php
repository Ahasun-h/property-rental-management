<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserAdPost;
use App\User;

class AdPostController extends Controller
{
  // manage user
  public function managePost() {
    $allPosts = UserAdPost::where('status',1)->get();


    foreach ($allPosts as $key => $val) {
            $userName = User::where(['id'=>$val->user_id])->first();
            $allPosts[$key]->userName = $userName['name'];
        }

    // return $allPosts;die;

    return view('admin.post.manage_post',compact('allPosts'));
  }



  // public function deletePost($id) {
	// 	$post = UserAdPost::find($id);
	// 	$post->delete();
	// 	return redirect('/post/manage')->with('message', 'Post Deleted Successfully.');
	// }

  public function deletePost($id) {
    $post = UserAdPost::find($id);
    $post->status = 0;
    $post->save();
    return redirect('/post/manage')->with('message', 'Post Deleted Successfully.');
  }

}
