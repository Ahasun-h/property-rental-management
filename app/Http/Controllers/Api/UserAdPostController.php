<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AdPostCollection;

use App\UserAdPost;
use App\User;

class UserAdPostController extends Controller
{
    /* New code start here */
    public function showPost(){
        $activePosts = UserAdPost::where('status', 1)->orderBy('id', 'DESC')->paginate(10);
        
        return new AdPostCollection($activePosts);
    }
    /* New code end here */
    
    
    
    // public function showPost(){
    //     $activePosts = UserAdPost::where('status', 1)->paginate(10);

    //     return response()->json([
    //         'activePosts' => $activePosts
    //         //$activePosts

    //     ], 201);
    // }
    
    
    /* Old code */
    
    //  public function showPost(){
    //     $activePosts = UserAdPost::where('status', 1)->get();

    //     return response()->json([
    //         'activePosts' => $activePosts
    //         //$activePosts

    //     ], 201);
    // }



    //     public function showMyPost($id){
    //     $data = User::find($id)
    //               ->posts;
    //     return response()->json([
    //         'MyPosts' => $data

    //     ], 201);
    // }
    
    public function showMyPost($id){
        $data = UserAdPost::where('user_id',$id)
                           ->orderBy('id', 'DESC')
                           ->get();
        return response()->json([
            'MyPosts' => $data

        ], 201);
    }
    
    



    public function showAdCategory($category){
        $activePosts = UserAdPost::where('category', $category)
                     ->where('status', 1)
                     ->orderBy('id', 'DESC')
                     ->get();
        return response()->json([
            'CategoryActivePosts' => $activePosts
            ], 201);
    }

    public function showMyPostView($ad_id){
        $ShowMyPostView = UserAdPost::where('id',$ad_id)->get();
        return response()->json(
              $ShowMyPostView
            );
    }



    public function savePost(Request $request){
        
             $imageName = 'cpp_'.time().'.'.'png';
            file_put_contents('uploads/user-profile-image/'.$imageName,base64_decode($request->get('featured_image')));

            // $imageNameOne      = 'cpp_'.time().'.'.'png';
            // file_put_contents('uploads/user-profile-image/'.$imageNameOne,base64_decode($request->get('more_image')));

            // $imageNameTwo      = 'cpp_'.time().'.'.'png';
            // file_put_contents('uploads/user-profile-image/'.$imageNameTwo,base64_decode($request->get('more_image_two')));

            // $imageNameThree      = 'cpp_'.time().'.'.'png';
            // file_put_contents('uploads/user-profile-image/'.$imageNameThree,base64_decode($request->get('more_image_three')));

            // $imageNameFour      = 'cpp_'.time().'.'.'png';
            // file_put_contents('uploads/user-profile-image/'.$imageNameFour,base64_decode($request->get('more_image_four')));

            // $imageNameFive      = 'cpp_'.time().'.'.'png';
            // file_put_contents('uploads/user-profile-image/'.$imageNameFive,base64_decode($request->get('more_image_five')));

            // $imageNameSix      = 'cpp_'.time().'.'.'png';
            // file_put_contents('uploads/user-profile-image/'.$imageNameSix,base64_decode($request->get('more_image_six')));

            $this -> validadeUserAddPost($request);
            //$this -> addPostImageUpload($request);

             $userAdPost = new UserAdPost();

             $userAdPost->post_title = $request->get('post_title');
             $userAdPost->division = $request->get('division');
             $userAdPost->city = $request->get('city');
             $userAdPost->authority_types = $request->get('authority_types');




             $userAdPost->address = $request->get('address');
             $userAdPost->apartment_no = $request->get('apartment_no');
             $userAdPost->rent_date = $request->get('rent_date');
             $userAdPost->tenant = $request->get('tenant');

             $userAdPost->description = $request->get('description');
             $userAdPost->space_size = $request->get('space_size');
             $userAdPost->renters = $request->get('renters');
             $userAdPost->utility = $request->get('utility');
             $userAdPost->category = $request->get('category');
             $userAdPost->floor = $request->get('floor');

            $userAdPost->bedroom = $request->get('bedroom');
            $userAdPost->bathroom = $request->get('bathroom');
            $userAdPost->balconi = $request->get('balconi');
            $userAdPost->kitchen = $request->get('kitchen');
            $userAdPost->dining_room = $request->get('dining_room');
            $userAdPost->drawing_room = $request->get('drawing_room');
            $userAdPost->garage = $request->get('garage');

            $userAdPost->closing_time = $request->get('closing_time');
            $userAdPost->opening_time = $request->get('opening_time');

            $userAdPost->nearest_famous_place_one = $request->get('nearest_famous_place_one');
            $userAdPost->nearest_famous_place_two = $request->get('nearest_famous_place_two');
            
            
            $userAdPost->featured_image = 'uploads/user-profile-image/'.$imageName;
            //  $userAdPost->more_image = 'uploads/user-profile-image/'.$imageNameOne;

            //  $userAdPost->more_image_two = 'uploads/user-profile-image/'.$imageNameTwo;
            //  $userAdPost->more_image_three = 'uploads/user-profile-image/'.$imageNameThree;
            //  $userAdPost->more_image_four = 'uploads/user-profile-image/'.$imageNameFour;
            //  $userAdPost->more_image_five = 'uploads/user-profile-image/'.$imageNameFive;
            //  $userAdPost->more_image_six = 'uploads/user-profile-image/'.$imageNameSix;
            

            $userAdPost->user_id = $request->get('user_id');
            $userAdPost->mobile = $request->get('mobile');
            $userAdPost->save();

            if ($userAdPost) {
                return response()->json([
                    'success' => 'Post Successfully added.',
                    'status' => 1,
                    'data' => $userAdPost
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


            'post_title' => 'required',
            'division' => 'required',
            'city' => 'required',
            'authority_types' => 'required',


            'address' => 'required',
            'apartment_no' => 'required',
            'rent_date'=>'required',
            'tenant'=>'required',

            'description'=>'required',
            'space_size'=>'required',
            'renters'=>'required',
            'utility'=>'required',
            'category'=>'required',
            'floor'=>'required',


            'bedroom'=>'required',
            'bathroom'=>'required',
            'balconi'=>'required',
            'kitchen'=>'required',
            'dining_room'=>'required',
            'drawing_room'=>'required',
            'garage'=>'required',

            'closing_time'=>'required',
            'opening_time'=>'required',


            'nearest_famous_place_one'=>'required',
            'nearest_famous_place_two'=>'required',

            'user_id'=>'required',
            'mobile'=>'required',


        ]);
    }

        public function changeMyAddStatus(Request $request, $id) {

      // $this->validate($request, [
      //     'status' => 'required',
      // ]);

          $userAdPostStatus = UserAdPost::findOrFail($id);

          $userAdPostStatus->status = $request->get('status');
          $userAdPostStatus->save();

          if ($userAdPostStatus) {
              return response()->json([
                  'ChangeStatus' => 1,
                  'message' => 'Post Status Updated Successfull',
                  // 'userAdPostStatus' => $userAdPostStatus,
              ], 201);

          } else {
              return response()->json([
                  'ChangeStatus' => 0,
                  'message' => 'Post Status not updated'
              ], 201);
          }
        }


}
