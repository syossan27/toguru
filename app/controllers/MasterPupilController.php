<?php

class MasterPupilController extends BaseController {

	// 師弟ページ
	public function index()
	{
		return View::make('master_pupil.index');
	}

}
