<div>
	<h1>ほげー！</h1>
	@foreach($users as $user)
		ユーザ名：{{ $user['username']}}
		スキル：{{ $user['skill']}}
		紹介文：{{ $user['description']}}
	@endforeach
</div>
