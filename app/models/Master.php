<?php

class Master extends Eloquent {

	use Search;

	protected $table = 'master';

	protected $fillable = array('user_id', 'skill', 'description');

}

