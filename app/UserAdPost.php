<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAdPost extends Model
{
    protected $fillable = [
        'address','apartment_no','rent_date','tenant','description','space_size',
        'renters','utility','category','floor','bedroom',
        'bathroom','balconi','kitchen','dining_room',
        'drawing_room','garage','closing_time','opening_time','nearest_famous_place_one',
        'nearest_famous_place_two','featured_image','more_image','more_image_two',
        'more_image_three','more_image_four','more_image_five','more_image_six','user_id','mobile',
        'status', 
    ];
    
}
