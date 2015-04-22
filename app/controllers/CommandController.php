<?php

use Lib\Validation\CommandValidator as CommandValidator;
use Lib\Gestion\CommandGestion as CommandGestion;

class CommandController extends BaseController {

    protected $validation;
	protected $gestion;

	public function __construct(CommandValidator $validation, CommandGestion $gestion)
	{
		parent::__construct();
		$this->beforeFilter('auth');
		$this->beforeFilter('admin', array('only' => 'getDel'));
		$this->validation = $validation;
		$this->gestion = $gestion;
	}

	public function getListe()
	{	
		return View::make('liste', $this->gestion->liste(10));
	}

	public function getAdd()
	{
		return View::make('add');
	}

	public function getShowcom()
	{
		return View::make('showcom',$this->gestion->liste(10));
	}

	public function postAdd()
	{
		if ($this->validation->fails()) {
		  return Redirect::to('command/add')
		  ->withErrors($this->validation->errors())
		  ->withInput();
		} else {
 			$this->gestion->save();
			return Redirect::to('command/liste');
		}
	}

	public function getDel($id)
	{
		$this->gestion->del($id);
		return Redirect::back();
	}

}