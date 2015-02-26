<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
    protected $primaryKey='uid';
	public $rules=array(
	"first_name" => "required",
	"last_name"  => "required",
	"email" => "required|email|unique:users",
	"password"=>"min:8",
	"confirm_password"=>"required|same:password"
	);

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	//protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 
	 */
	 	public function getAuthIdentifier()
        {
            return $this->getKey();
         }
/**
* Get the password for the user.
*
* @return string
*/
         public function getAuthPassword()
         {
            return $this->password;
         }
          protected $hidden = ['password', 'remember_token'];

}
