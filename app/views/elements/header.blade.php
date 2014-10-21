<div class="header">
		<div id="notification">{{ isset($notification_message) ? $notification_message : '' }}</div>
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
				{{ HTML::link('/', 'Toguru', ['class' => 'pure-menu-heading']) }}
        <ul>
@if ( Auth::check() )
            <li class="pure-menu-selected">{{ HTML::link('/', 'Home') }}</li>
            <li class="pure-menu-selected"><span id="notice">Notice</span></li>
            <li class="pure-menu-selected">{{ HTML::link('/logout', 'Logout') }}</li>
@else
            <li class="pure-menu-selected">{{ HTML::link('/', 'Home') }}</li>
@endif
        </ul>
				<div id="noticeBox-arrow"></div>
				<div id="noticeBox">読み込み中...</div>
    </div>
</div>
