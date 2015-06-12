<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProfilesController extends Controller {

	// this will accept a username becasue in our routes file we fetched that as a wild card.. it is similiar to edit
	// the $username param is the profile username being passed through via public/{profile}
	// the profile username is in the users table so we need to use the User model to access info
	public function show($name)
	{
		try
		{
			// made a scopewhereName method in User model
			$user = \App\User::with('profile')->whereName($name)->firstOrFail();  // firstOrFail : Execute the query and get the first result or throw an exception
			// dd($user->toArray());
		}
		catch(ModelNotFoundException $e)
		{
			return redirect('/');
		}
		
		return view('profiles.show');
	}
	
	public function edit($name)
	{	
		try
		{
			//$user = \App\User::with('profile')->whereName($name)->firstOrFail();  // firstOrFail : Execute the query and get the first result or throw an exception
			// made a scopewhereName method in User model
			$user = \App\User::whereName($name)->firstOrFail();  // firstOrFail : Execute the query and get the first result or throw an exception
			$id = $user->id; // this variable helps to find the user profile
			//dd($userID);
			
			$profile = \App\Profile::whereUserId($id)->firstOrFail();
            //dd($profile->toArray());
			
		}
		catch(ModelNotFoundException $e)
		{
			return redirect('/');
		}
		
		return view('profiles.edit', compact('profile', 'user'));
		
	}
			

}
