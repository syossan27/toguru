<?php

trait Detail {

	public function scopeGetUserDetail($query, $id)
	{
		return $query->join('users', 'user_id', '=' ,'users.id')
								 ->where('users.id', '=', $id);
	}

}


