<?php

class Tip extends Eloquent{

	public function user(){

		return $this->belongsTo('User');
	}
	
}