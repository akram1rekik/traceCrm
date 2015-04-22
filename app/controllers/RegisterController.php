<?php

use Lib\Validation\UserCreateValidator as UserCreateValidator;
/*use Lib\Validation\UserUpdateValidator as UserUpdateValidator;*/
use Lib\Gestion\UserGestion as UserGestion;

class RegisterController extends BaseController {

	protected $create_validation;
	/*protected $update_validation;*/
	protected $user_gestion;

	public function __construct(
		UserCreateValidator $create_validation,
		/*UserUpdateValidator $update_validation,*/
		UserGestion $user_gestion
		)
	{
		parent::__construct();
		$this->create_validation = $create_validation;
		/*$this->update_validation = $update_validation;*/
		$this->user_gestion = $user_gestion;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getForm()
	{
		return View::make('register');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postForm()
	{
		if ($this->create_validation->fails()) {
          return Redirect::to('register/form')
          ->withInput()
          ->withErrors($this->create_validation->errors());
        } else {
            $this->user_gestion->store();
            return Redirect::to('auth/login')
            ->with('ok','L\'utilisateur a bien été créé.');
        }       
	}
}	