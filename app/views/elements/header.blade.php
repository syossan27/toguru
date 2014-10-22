<div class="header">
		<div id="notification">{{ isset($notification_message) ? $notification_message : '' }}</div>
		<div id="notification_error">{{ isset($notification_error_message) ? $notification_error_message : '' }}</div>
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
				{{ HTML::link('/', 'Toguru', ['class' => 'pure-menu-heading']) }}
        <ul id="top-menu">
@if ( Auth::check() )
						<li class="pure-menu-selected" style="text-align:center;">
							<a href="/">
								{{ HTML::image('/image/home.png', 'ホーム') }}
								<p style="font-size:8px;">home</p>
					    </a>
						</li>
						<li class="pure-menu-selected" style="text-align:center;">
							<a href="/">
								{{ HTML::image('/image/users.png', '師弟') }}
								<p style="font-size:8px;">exchange</p>
					    </a>
						</li>
						<li class="pure-menu-selected" style="text-align:center;">
							<a href="/">
								{{ HTML::image('/image/bell.png', 'お知らせ',['id' => 'notice']) }}
								<p style="font-size:8px;">notice</p>
					    </a>
						</li>
						<li class="pure-menu-selected" style="text-align:center;">
							<a href="/logout">
								{{ HTML::image('/image/logout.png', 'ログアウト') }}
								<p style="font-size:8px;">logout</p>
					    </a>
						</li>
@else
						<li class="pure-menu-selected" style="text-align:center;">
							<a href="/">
								{{ HTML::image('/image/home.png', 'ホーム') }}
								<p style="font-size:8px;">home</p>
					    </a>
						</li>
@endif
        </ul>
				<div id="noticeBox-arrow"></div>
				<div id="noticeBox">読み込み中...</div>
    </div>
</div>
