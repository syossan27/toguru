<?php

class PupilController extends BaseController {

	// 弟子ページ
	public function index()
	{
	}

	// 弟子検索ページ
	public function search()
	{
		$search_text = Input::only(['search_text']);

		$search_result = Pupil::search($search_text)->get();
		
		return View::make('pupil.search')->with('users', $search_result);
	}

	// 弟子情報ページ
	public function detail($id)
	{
		$pupil_detail = Pupil::getUserDetail($id)->first();
		return View::make('pupil.detail')->with('pupil_detail', $pupil_detail);
	}

	// 弟子リクエストページ
	public function request($pupil_id)
	{
		$user_id = Auth::id();
		$master_id = Master::where('user_id', '=', $user_id)->pluck('id');
		Connection::updateOrCreate(['master_id' => $master_id, 'pupil_id' => $pupil_id, 'status' => '2']);
		return;
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
