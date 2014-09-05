<?php

trait Search {

	public function scopeSearch($query, $search_text)
	{
		return $query->join('users', 'user_id', '=' ,'users.id')
								 ->where('users.username', '=', $search_text)
								 ->orWhere('skill', '=', $search_text)
								 ->orWhere('description', '=', $search_text);
	}

}


