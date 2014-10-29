<?php

class Club extends Eloquent{

	public function user(){

		return $this->belongsTo('User');
	}
}