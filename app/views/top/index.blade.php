@extends('layouts.master')

@section('title')
Toguru | トップ
@stop

@section('css')
{{ HTML::style('css/toguru.css') }}
{{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
@stop

@section('body')

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">Toguru</h1>
        <p class="splash-subhead">
           Toguruはエンジニアの師匠 or 弟子を繋ぐサービスです。 
        </p>
        <p>
            <a href="http://purecss.io" class="pure-button pure-button-primary">Get Started</a>
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Toguruはこんなサービス</h2>

        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
						<!-- サービス概念図 -->
            <img class="pure-img-responsive" alt="File Icons" width="300" src="img/common/file-icons.png">
        </div>
        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
										ウリ一つ目
                </h3>
                <p>
										ウリの説明
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
										ウリ２つ目
                </h3>
                <p>
										ウリの説明
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
										ウリ３つ目
                </h3>
                <p>
										ウリの説明
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
										ウリ４つ目
                </h3>
                <p>
										ウリの説明
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">Laboris nisi ut aliquip.</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor.
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Dolore magna aliqua. Uis aute irure.</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>

                        <label for="name">Your Name</label>
                        <input id="name" type="text" placeholder="Your Name">


                        <label for="email">Your Email</label>
                        <input id="email" type="email" placeholder="Your Email">

                        <label for="password">Your Password</label>
                        <input id="password" type="password" placeholder="Your Password">

                        <button type="submit" class="pure-button">Sign Up</button>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Contact Us</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>

                <h4>More Information</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
    </div>
		
		@include('elements.footer')	

</div>

@stop
