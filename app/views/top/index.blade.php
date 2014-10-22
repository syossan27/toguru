@extends('layouts.master')

@section('title')
Toguru | トップ
@stop

@section('css')
{{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
@stop

@section('js')
{{ HTML::script('js/top.js') }}
@stop

@section('body')

		@include('elements.header')	

<div class="splash-container">
		<div id="background"></div>
    <div class="splash">
			<h1 class="splash-head">Toguru</h1>
			<p class="splash-subhead">
				 Toguruはエンジニアの師匠と弟子を繋ぐサービスです。 
			</p>
			<!-- Sign Up -->
			<div class='pure-form pure-g pure-u-11-24'> 
				<div id="signup-form" class="pure-u">
					<input id="signup-email" type="email" name="email" placeholder="Email" value="wisdom1027@gmail.com">
					<input type="submit" id="signup-submit" class="pure-button button-success">
				</div>
				<div id="signup">
					<button type="button" class="pure-button">Sign up</button>
				</div>
			</div>
			<!-- Sign In -->
			{{ Form::open(array('action' => 'AccountController@login', 'class' => 'pure-form pure-g pure-u-11-24', 'method' => 'post')) }}
				<div id="signin-form" class="pure-u">
					<input id="signin-username" type="text" name="username" placeholder="ユーザ名">
					<input id="signin-password" type="password" name="password" placeholder="パスワード">
					<input type="submit" id="signin-submit" class="pure-button button-success">
					<a href="/fb_login" class="btn btn-block btn-social btn-facebook">
						<i class="fa fa-facebook"></i>
						 Sign in with Facebook
					</a>
					<a href="/tw_login" class="btn btn-block btn-social btn-twitter">
						<i class="fa fa-twitter"></i>
						 Sign in with Twitter 
					</a>
				</div>
				<div id="signin">
					<button type="button" class="pure-button">Sign In</button>
				</div>
			{{ Form::close() }}
    </div>
</div>

<div class="content-wrapper">
    <div class="content">
				<div class="pure-g">
					<div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
							<!-- サービス概念図 -->
							<img class="pure-img-responsive" alt="File Icons" width="300" src="">
					</div>
					<div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
							<!-- サービス概念図 -->
							<img class="pure-img-responsive" alt="File Icons" width="300" src="">
					</div>
					<div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
							<!-- サービス概念図 -->
							<img class="pure-img-responsive" alt="File Icons" width="300" src="">
					</div>
				</div>

        <div id="sales-points" class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
                <h3 class="content-subhead">
                    <i class="fa fa-male"></i>
										師匠や弟子との出会い
                </h3>
                <p>
									Toguruではあなたにピッタリの師匠や弟子を見つけることが出来ます。
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
                <h3 class="content-subhead">
                    <i class="fa fa-question"></i>
										師匠からの課題・弟子からの質問
                </h3>
                <p>
									師弟になれば師匠から弟子へ課題を与えたり、弟子から師匠へ質問を投げることが出来ます。
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
                <h3 class="content-subhead">
                    <i class="fa fa-money"></i>
										感謝の気持ちをお金で	
                </h3>
                <p>
									お世話になった師匠へはお金を送ることも出来ます。
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">お知らせ</h2>

            <p>
							test
            </p>
        </div>
    </div>

    <div class="content top-content">
        <h2 class="content-head is-center">あなたのご意見お聞かせ下さい！</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>

                        <input id="name" type="text" name="name" placeholder="お名前">

                        <input id="email" type="email" name="email" placeholder="メールアドレス">

                        <textarea id="opinion" class="pure-u-1" name="opinion" placeholder="ご意見"></textarea>

                        <button type="submit" class="pure-button">意見を送る</button>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>是非ご意見を！</h4>
                <p>
									ユーザ様のご意見は開発する上で貴重な情報になります。
                </p>
                <p>
									些細なことでも宜しいですので、ご意見がありましたら左のフォームよりご意見をお送り下さい。
                </p>

                <h4>運営について</h4>
                <p>
									運営元：<a href="https://twitter.com/syossan27">@syossan27</a>
                </p>
								<h4>よろしければ皆様の手でToguruを広めて下さい！</h4>
								<a href="http://www.facebook.com/sharer.php?u=`http://toguru.net`&amp;
												 t=`エンジニアの師匠 or 弟子を見つけるサービス！「Toguru」`"
									 onClick="window.open(encodeURI(decodeURI(this.href)),
									 	'sharewindow',
									 	'width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!'
									 ); return false;">{{ HTML::image('image/facebook.png')}}</a>
								<a href="http://twitter.com/intent/tweet?text=`エンジニアの師匠 or 弟子を見つけるサービス！`&amp;
												 url=`http://toguru.net`&amp;
												 via=`syossan27`"
									 onClick="window.open(encodeURI(decodeURI(this.href)),
										 'tweetwindow',
										 'width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=1'
									 ); return false;">{{ HTML::image('image/twitter.png')}}</a>
            </div>
        </div>
    </div>
		
		@include('elements.footer')	

</div>

@stop
