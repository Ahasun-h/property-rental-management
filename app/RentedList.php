<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentedList extends Model
{
  protected $fillable = [
    'User_id','Ad_id','Rental_Data','Rental_amount',

  ];
}
