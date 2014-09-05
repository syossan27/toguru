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
	}

	// 師匠リクエストページ
	public function request($id)
	{
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

		return;
	}

}
