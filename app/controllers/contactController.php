<?php

class contactController extends BaseController{ 
public function showsendcontact()
{
	return View::make('contact');
}




public function dosendcontact(){
	
		$user = new User;
		//$user->name = Input::get('username');
		//$user->email = Input::get('emaill');
		$user->msg = Input::get('mess');
		
		Mail::send('conn', array('key' => $user->msg), function($message)
{
    $message->to('mohamed_elkashif@windowslive.com')->subject('New message!');
});
		return View::make('contact')->with('message',$user->msg);
		
		
	

}

public function finish()
{
	return View::make('main')->with('message','Message sent');
}


}