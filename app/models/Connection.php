<?php

class Connection extends Eloquent {

	protected $table = 'connection';

	protected $fillable = array('id', 'master_id', 'pupil_id', 'status');

}
