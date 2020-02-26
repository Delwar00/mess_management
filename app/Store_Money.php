<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store_Money extends Model
{

      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'user_id','added_by','add_amount',
      ];

}
