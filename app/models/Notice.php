<?php

class Notice extends Eloquent {

	protected $table = 'notice';

	protected $fillable = ['sender_id', 'receiver_id', 'type'];

}
