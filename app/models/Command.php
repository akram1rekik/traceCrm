<?php
class Command extends Eloquent {    

	protected $fillable = array('titre','contenu','user_id');    
	public $timestamps = true;    

	public function user()     
	{        
		return $this->belongsTo('User');    
	}

	

}