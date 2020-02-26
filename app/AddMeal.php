<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddMeal extends Model
{
    /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'user_id','added_by','meal_date','meal_number',
      ];
}
