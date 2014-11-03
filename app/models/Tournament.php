<?php

class Tournament extends Eloquent{

	public function getDates(){

		    return array('created_at', 'updated_at', 'register_start', 'register_end', 'tournament_start', 'tournament_end');
		}

}