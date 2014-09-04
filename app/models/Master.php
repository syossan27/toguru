<?php

class Master extends Eloquent {

	protected $table = 'master';

	protected $fillable = array('user_id', 'skill', 'description');

}

