<?php

trait Search {

	// cf. http://laravel.com/docs/eloquent#query-scopes
	//
	public function scopeSearch($query, $search_text, $user_id)
	{
		return $query->where('users.id', '<>', $user_id)
								 ->where( function ( $q ) use( $search_text ) 
								 {	
									 $q->where('users.username', '=', $search_text)
										 ->orWhere('skill', '=', $search_text)
										 ->orWhere('description', '=', $search_text);
								 });
	}

}


