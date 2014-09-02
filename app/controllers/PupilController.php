<?php

class PupilController extends BaseController {

	// 弟子ページ
	public function index()
	{
	}

	// 弟子検索ページ
	public function search()
	{
	}

	// 弟子情報ページ
	public function detail($id)
	{
	}

	// 弟子リクエストページ
	public function request($id)
	{
	}

	// 弟子情報編集ページ
	public function edit()
	{
		return View::make('pupil.edit');
	}

	// 弟子情報編集実行ページ
	public function update()
	{

		// Get edit data
		$input_all = Input::all();
		$skill = trim($input_all['skill']);
		$description = $input_all['description'];
		$user_id = Auth::id();

		// Update pupil profile
		$pupil = Pupil::updateOrCreate(['user_id' => $user_id], ['user_id' => $user_id, 'skill' => $skill, 'description' => $description]);

		return;
	}

}
