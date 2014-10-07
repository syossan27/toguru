<div>
	@if ( count($users) == 0 ) 
		<h1>検索結果が0件でした。</h1>
	@else
		@foreach($users as $user) 
			ユーザ名：{{ $user['username']}}
			<br>
			スキル：{{ $user['skill']}}
			<br>
			紹介文：{{ $user['description']}}
			<br>
			<button class="pure-button button-secondary request-master-button" value="{{ $user['id'] }}">申込</button>
		@endforeach
	@endif
</div>
