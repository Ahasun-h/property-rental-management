<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationForUser extends Model
{
  protected $fillable = [
    'notification_title','notification_body','image','status',
  ];
}
