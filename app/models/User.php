<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'contacts';
	public $timestamps="false";


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('name','email', 'message');


	public static $rules = array(
		'name' => 'required|unique:users|alpha_dash|min:4',
		'email' => 'required|email',
		'message' => 'required|message',
		
		
		);
	public static function validate($data)
	{
		return Validator::make($data,static::$rules);
	}


}
