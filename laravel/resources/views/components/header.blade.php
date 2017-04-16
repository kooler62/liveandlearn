<a href="/"><img class="center ll_logo" title="Live & Learn" alt="Live & Learn" src="/img/1.png"/></a>
<!--<h5 class="text-center">Джерело вашого саморизвитку</h5>-->


<nav class="top-bar center data-topbar">
	<section class="top-bar-section">
		<ul class="center-buttons vertical medium-horizontal menu">
@foreach ($categories as $key )
<li><a href="{{ $key->cat_url }}">{{ $key->cat_title }}</a></li>
@endforeach	
<li></li>
@if (Auth::guest())
	<!--	<li><a class="button small"  data-open="loginModal">вхід</a></li>-->
@else
<li> {{ Auth::user()->name }}</li>
<li><a href="{{ url('/logout') }}">Вихід</a></li>
@endif



		</ul>	

	</section>
</nav>

				<style type="text/css">
					@media only screen and (min-width: 40em) {
 						.top-bar {text-align: center;}
						ul.center-buttons {display: inline-block;}
  						.logo {
    						left: 5px;
							top: -2px;
							position: absolute; }
					}
					.logo {
						max-width: 2rem;
						margin-top: -3px;
						margin-left: 5px;}
					.menu-icon {padding-top: 1.2rem;}
					.top-bar.expanded {background: #333333;}
					.logo {margin-top: .5rem;}
				</style>
				<hr/>







						<!-- This is the first modal -->
		<div class="reveal" id="loginModal" data-reveal>
			<h1>Вхід</h1>
			<form method="post" action="/auth/login">
      {!! csrf_field() !!}
  <div class="row">

    <div class="small-3 columns">
      <label for="email" class="text-right">Email</label>
    </div>
    <div class="small-9 columns">
    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder=" e-mail">
    </div>
  </div>
    <div class="row">
    <div class="small-3 columns">
      <label for="password" class="text-right">Пароль</label>
    </div>
    <div class="small-9 columns">
      <input type="password"  name="password" id="password" placeholder="пароль">
    </div>
  </div>
   <div class="row">
    <div class="small-3 columns">
      <label for="remember" class="text-right">Запам'ятати мене</label>
    </div>
    <div class="small-9 columns">
     <input type="checkbox" name="remember" id="remember"> 
    </div>
  </div>



  <a class="button small" type="submit" href="">увійти</a>
  <a class="button small"   data-open="regModal">реєстрація</a>
 
</form>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
		    	<span aria-hidden="true">&times;</span>
			</button>
		</div>



						<!-- This is the first modal -->
		<div class="reveal" id="regModal" data-reveal>
			<h1>Реєстрація</h1>
      <form method="post" action="/auth/register">
			 {!! csrf_field() !!}
  <div class="row">
    <div class="small-3 columns">
      <label for="name" class="text-right">ім'я</label>
    </div>
    <div class="small-9 columns">
      <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="ім'я">
    </div>
  </div>

   <div class="row">
    <div class="small-3 columns">
      <label for="email" class="text-right">e-mail</label>
    </div>
    <div class="small-9 columns">
      <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder=" e-mail">
    </div>
  </div>

    <div class="row">
    <div class="small-3 columns">
      <label for="password" class="text-right">пароль</label>
    </div>
    <div class="small-9 columns">
      <input type="password"  name="password" id="password" placeholder="пароль">
    </div>
  </div>

  <div class="row">
    <div class="small-3 columns">
      <label for="password_confirmation" class="text-right">повторити пароль</label>
    </div>
    <div class="small-9 columns">
      <input type="password" id="password_confirmation" name="password_confirmation" placeholder="повторити пароль">
    </div>
  </div>
  <button type="submit" class="button small">Зареєструватися</button>
</form>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
		    	<span aria-hidden="true">&times;</span>
			</button>
		</div>