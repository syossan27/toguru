<?php

class Master extends Eloquent {

	use Search;
	use Detail;

	protected $table = 'master';

	protected $fillable = array('id', 'skill', 'description');

}
