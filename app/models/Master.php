<?php

class Master extends Eloquent {

	use Search;
	use Detail;

	protected $table = 'master';

	protected $fillable = array('user_id', 'skill', 'description');

}
