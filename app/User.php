<?php

namespace App;

//use Illuminate\Foundation\Auth\User as Authenticatable;

/** 
 * User table model
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package User
 * @version 1.0
 * Based on the structure of the user table  (database/migrations/2018_05_17_184441_create_user_table.php)
 * @note the foreign keys:
 *  @note role_id -> referenced the role table ->id
 *  @note uctool_id -> referenced the uctool table ->id
*/

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
	protected $table = 'user';
	protected $primaryKey = 'id';
	protected $hidden = ['password', 'role_id', 'uctool_id', 'remember_token', 'status'];
	protected $fillable = ['id','role_id','uctool_id','username','password','name','email','address','country_id','city_id','phone_home','phone_mobile','phone_business','picture','position','','remember_token','status'];

	public function admin(){
		return $this->role_id === 1;
	}

}
