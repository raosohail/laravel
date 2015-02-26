<?php namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Db;
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
		$validator=Validator::make(Input::all(),$ruels);
		if($validator->fails())
		{
		 $_SESSION['error_message']=$validator->errors()->first();
		 return Redirect::to('/signup');
		}
		else
		{
			
			$_SESSION['message']='Sign up successfully';
			$ar=Input::except("_token","confirm_password");
			$ar['password']=Hash::make('password');
			User::insert($ar);
			return Redirect::to('/');
		}
		
	}
	public function login()
	{
		
		
	}

}
