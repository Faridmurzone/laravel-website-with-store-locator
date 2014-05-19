<?php
 
use WebsiteModel\Storage\User\UserRepository as User;
 
class SessionController extends BaseController {
 
	/**
	 * User Repository
	 */
	protected $user;
	
	/**
	 * Inject the User Repository
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}
	
	/**
	* Show the form for creating a new Session
	*/
	public function create()
	{
		return View::make('session.create');
	}
 
	public function store()
	{
		if (
			Auth::attempt(
				array(
					'email' => Input::get('email'),
					'password' => Input::get('password')
				)
			)
		)
		{
			return Redirect::intended('logged-in')
				->with('message', 'You have been logged in');
		}
		
		return Redirect::route('session.create')
			->withInput()
			->with('login_errors', true);
	}

	public function destroy()
	{
		Auth::logout();
		
		return View::make('session.destroy');
	} 
}