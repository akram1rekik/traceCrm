<?php

use Lib\Validation\UserCreateValidator as UserCreateValidator;
/*use Lib\Validation\UserUpdateValidator as UserUpdateValidator;*/
use Lib\Gestion\UserGestion as UserGestion;



class UserController extends BaseController {

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
		$this->beforeFilter('auth');
		$this->create_validation = $create_validation;
		/*$this->update_validation = $update_validation;*/
		$this->user_gestion = $user_gestion;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		/*return View::make('index');*/
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		/*return View::make('create');*/
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/*if ($this->create_validation->fails()) {
          return Redirect::route('user.create')
          ->withInput()
          ->withErrors($this->create_validation->errors());
        } else {
            $this->user_gestion->store();
            return Redirect::route('user.index')
            ->with('ok','L\'utilisateur a bien été créé.');
        }    */   
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		/*return View::make('show', $this->user_gestion->show($id));*/
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		/*return View::make('edit',  $this->user_gestion->edit($id));*/
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		/*if ($this->update_validation->fails($id)) {
          return Redirect::route('user.edit', array($id))
          ->withInput()
          ->withErrors($this->update_validation->errors());
        } else {
            $this->user_gestion->update($id);
            return Redirect::route('user.index')
            ->with('ok','L\'utilisateur a bien été modifié.');
        }   */
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		/*$this->user_gestion->destroy($id);
        return Redirect::back();*/
	}


}
