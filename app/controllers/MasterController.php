<?php

class MasterController extends BaseController {

	// 師匠ページ
	public function index()
	{
	}

	// 師匠検索ページ
	public function search()
	{
		$search_text = Input::only(['search_text']);

		$search_result = Master::search($search_text)->get();
		
		return View::make('master.search')->with('users', $search_result);
	}

	// 師匠情報ページ
	public function detail($id)
	{
		$master_detail = Master::getUserDetail($id)->first();
		return View::make('master.detail')->with('master_detail', $master_detail);
	}

	// 師匠リクエストページ
	public function request($master_id)
	{
		$user_id = Auth::id();
		$pupil_id = Pupil::where('user_id', '=', $user_id)->pluck('id');
		Connection::updateOrCreate(['master_id' => $master_id, 'pupil_id' => $pupil_id, 'status' => '3']);
		return;
	}

	// 師匠情報編集ページ
	public function edit()
	{
		return View::make('master.edit');
	}

	// 師匠情報編集実行ページ
	public function update()
	{
		// Get edit data
		$input_all = Input::all();
		$skill = trim($input_all['skill']);
		$description = $input_all['description'];
		$user_id = Auth::id();

		// Update master profile
		Master::updateOrCreate(['user_id' => $user_id], ['user_id' => $user_id, 'skill' => $skill, 'description' => $description]);

	}

}
