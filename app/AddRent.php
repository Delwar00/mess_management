<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddRent extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'added_by', 'status','rent_home','rent_electricity','rent_gas','rent_cooker','rent_extra',
    ];
}
