<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
				{{ HTML::link('/', 'Toguru', ['class' => 'pure-menu-heading']) }}
        <ul>
@if ( Auth::check() )
            <li class="pure-menu-selected">{{ HTML::link('/', 'Home') }}</li>
            <li class="pure-menu-selected">{{ HTML::link('/notice', 'Notice') }}</li>
            <li class="pure-menu-selected">{{ HTML::link('/logout', 'Logout') }}</li>
@else
            <li class="pure-menu-selected">{{ HTML::link('/', 'Home') }}</li>
@endif
        </ul>
    </div>
</div>
