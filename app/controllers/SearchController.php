<?php

class SearchController extends BaseController {

	// 検索ページ
	public function index()
	{
		return View::make('search.index');
	}
}

