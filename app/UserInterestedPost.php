<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInterestedPost extends Model
{
  protected $fillable = [
      'post_id','post_title','post_division','post_city','post_address','post_category',
      'renters','rent_date','user_id','user_name','user_mobile'
  ];
}
