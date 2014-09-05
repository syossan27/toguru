<?php

class Pupil extends Eloquent {

	use Search;

	protected $table = 'pupil';

	protected $fillable = array('user_id', 'skill', 'description');

}

