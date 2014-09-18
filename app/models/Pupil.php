<?php

class Pupil extends Eloquent {

	use Search;
	use Detail;

	protected $table = 'pupil';

	protected $fillable = array('user_id', 'skill', 'description');

}
