<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	/*protected $validation;*/
	
	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post','put','patch','delete'));
	}

}
