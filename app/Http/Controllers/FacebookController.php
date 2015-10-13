<?php
 
namespace App\Http\Controllers;
 
class FacebookController extends Controller
{
 
    public function login()
    {
        return \Socialite::with('facebook')->redirect();
    }
 
    public function pageFacebook()
    {
      	$socialize_user = \Socialite::with($provider)->user();
	    $facebook_user_id = $socialize_user->getId(); // unique facebook user id

	    $user = Contributors::where('facebook_user_id', $facebook_user_id)->first();

	    // register (if no user)
	    if (!$user) {
	        $user = new Contributors;
	        $user->facebook_id = $facebook_user_id;
	        $user->save();
	    }

	    // login
	    Auth::loginUsingId($user->id);

	    return redirect('/');
    }

    
 
}