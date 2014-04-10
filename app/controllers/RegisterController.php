<?php
 
use WebsiteModel\Storage\User\UserRepository as User;
 
class RegisterController extends BaseController {
 
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
 
  public function index()
  {
    return View::make('register.index');
  }
 
  public function store()
  {
    $s = $this->user->create(Input::all());
 
    if($s->isSaved())
    {
      return Redirect::route('user-created')
        ->with('flash', 'The new user has been created');
    }
 
/* 	var_dump($s); */
 
    return Redirect::route('register.index')
      ->withInput()
      ->withErrors($s->errors());
  }
 
}