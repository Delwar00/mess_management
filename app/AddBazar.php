<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddBazar extends Model
{
    /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'user_id','product_name','bazar_date','add_bazar_cost',
      ];
}
