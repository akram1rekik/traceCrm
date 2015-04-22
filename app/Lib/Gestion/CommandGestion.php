<?php namespace Lib\Gestion;

use Command;
use Input;
use Auth;

class CommandGestion {

    public function liste($n)
	{
		$commands = command::with('user')
		->orderBy('id', 'asc')
		->paginate(10);
		return compact('commands');
	}

	public function save()
	{
		Command::create(array(
			'titre' => Input::get('titre'),
			'contenu' => Input::get('contenu'),
			'user_id' => Auth::user()->id
		));
	}

	public function del($id)
	{
		Post::find($id)->delete();
	}

}