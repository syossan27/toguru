<?php

trait Detail {

	public function scopeGetUserDetail($query, $id)
	{
		return $query->where('users.id', '=', $id);
	}

}


