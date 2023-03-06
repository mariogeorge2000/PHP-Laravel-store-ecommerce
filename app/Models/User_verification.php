<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class User_verification extends Model
{


    public $table="users_verificationCodes";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'code','created_at','updated_at'];


}
