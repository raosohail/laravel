<?php namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
class userController extends Controller {
   
	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function signUp()
	{
		$user= new User();
	    $ruels=$user->rules;
		$validator=Validator::make(Input::all(),$ruels,array("first_name.required"=>"hi"));
		if($validator->fails())
		{
		 print_r($validator->errors()->first());
		}
		else
		{
			session_start();
			$_SESSION['message']='Sign up successfully';
			$ar=Input::except("_token","password2");
			$ar['password']=Hash::make('password');
			User::insert($ar);
			return Redirect::to('/');
		}
		
	}

}
