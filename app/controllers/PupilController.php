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
		$user_id = Auth::id();

		$search_result = Pupil::join('users', 'pupil.id', '=' ,'users.id')->search($search_text, $user_id)->get();

		Log::debug($search_result);
		
		return View::make('pupil.search')->with('users', $search_result);
	}

	// 弟子情報ページ
	public function detail($id)
	{
		$pupil_detail = Pupil::join('users', 'pupil.id', '=' ,'users.id')->getUserDetail($id)->first();
		return View::make('pupil.detail')->with('pupil_detail', $pupil_detail);
	}

	// 弟子リクエストページ
	public function request($pupil_id)
	{
		$user_id = Auth::id();
		$master_id = Master::where('id', '=', $user_id)->pluck('id');
		Connection::updateOrCreate(['master_id' => $master_id, 'pupil_id' => $pupil_id, 'status' => '2'])->pluck('id');
		return $pupil_id;
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
		$pupil = Pupil::updateOrCreate(['id' => $user_id], ['id' => $user_id, 'skill' => $skill, 'description' => $description]);

		return;
	}

}
