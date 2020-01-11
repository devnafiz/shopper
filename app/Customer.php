<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Model
{
   protected $guard = "customers";
	
	protected $table = 'customers';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
	
	//use user id of admin
	protected $primaryKey = 'customers_id';
	
	//public $table = true;
}
