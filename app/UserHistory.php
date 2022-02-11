<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
  protected $fillable = [
      'post_id','owner_id','owner_name','customer_id',
      'customer_name','deal_amount','price_amount','deal_date',
      'status',
  ];
}
