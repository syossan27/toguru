<?php

class Pupil extends Eloquent {

	use Search;
	use Detail;

	protected $table = 'pupil';

	protected $fillable = array('id', 'skill', 'description');

}
