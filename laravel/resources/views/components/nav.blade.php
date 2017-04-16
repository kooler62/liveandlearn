{{--
<br>
<form>
	<div class="row">
		<div class="large-12 columns">
			<input type="text" placeholder="шукати" />
  		</div>
  	</div>
</form>
--}}

{{--

@widget('nav_ex_day', ['count' => 11])
@widget('first_widget')
{{ Widget::run('recentNews') }}

--}}



@section('banner_widget')
<div class="row text-center">
	<a href="https://www.kuna.cloud/a/334781" target=_blank><img src="https://www.kuna.cloud/files/Kuna/250x250/kuna-cloud-affiliate-banner-250x250-ukr1.png"></a>
</div>
@endsection
@yield('banner_widget')




@section('quote_widget')
{{ Widget::run('nav_ex_day') }}
@endsection
@yield('quote_widget')

@section('social_widget')
<div class="" id="social_buttoms"><h5>Ми в соціальних мережах:</h5>
		<a title="Live & Learn Вконтакті" href="http://vk.com/liveandlearn" rel="nofolow" target="_blank" style="background-image:url(/img/64_soc_sprite.png);"></a>
		<a title="Live & Learn на Facebook" href="https://www.facebook.com/FLLcomua" rel="nofolow" target="_blank" style="background-image:url(/img/64_soc_sprite.png);background-position:-48px;"></a>
		<a title="Live & Learn у Twitter" href="https://twitter.com/LLcomua" rel="nofolow" target="_blank" style="background-image:url(/img/64_soc_sprite.png);background-position:-96px;"></a>
		<a title="Live & Learn на Google+" href="https://google.com/+LiveandlearnUa/about" rel="nofolow" target="_blank" style="background-image:url(/img/64_soc_sprite.png);background-position:96px;"></a>
		<a title="Live & Learn через RSS" href="http://feeds.feedburner.com/liveandlearn_ua?format=xml" rel="nofolow" target="_blank" style="background-image:url(/img/64_soc_sprite.png);background-position:48px;"></a>
	  </div>

@endsection
@yield('social_widget')

	  

{{--
  <form>
  <fieldset>
	<legend>підписатись</legend>
	<label>введіть е-мейл
	  <input type="text" placeholder="Inputs and other form elements go inside...">
	</label>
  </fieldset>
</form>

--}}












@section('facebook_widget')
<br>
<!-- FB Widget -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com//LLcomua" data-width="370" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/LLcomua"><a href="https://www.facebook.com/LLcomua">Live &amp; Learn</a></blockquote></div></div>
<!-- FB Widget END -->
@endsection
@yield('facebook_widget')


<br>

@section('vk_widget')
<br>
	<!-- VK Widget -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "auto", height: "100", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 66129309);
</script>
<!-- VK Widget END -->
@endsection
@yield('vk_widget')


@section('google_widget')
<br>
<!-- G+ Widget -->
<!-- Вставьте этот тег в заголовке страницы или непосредственно перед закрывающим тегом основной части. -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'uk'}
</script>

<!-- Поместите этот тег туда, где должна отображаться виджет. -->
<div class="g-page" data-width="370" data-href="//plus.google.com/u/0/112628853752947959904" data-rel="publisher"></div>
<!-- G+ Widget END-->
<br>
@endsection
@yield('google_widget')


@section('privat_widget')
<br>
<!--Privat-->
<div style="display:inline-block;text-align:center">
<form method="POST" accept-charset="utf-8" action="https://widget.privatbank.ua/payment/" class="injected-form" target="_blank">
<input type="hidden" name="id" value="55993a58f31af" />
<style scoped="scoped"> @import url(http://fonts.googleapis.com/css?family=Open+Sans:700,400&subset=latin,cyrillic); .injected-form{ font-family: 'Open Sans', sans-serif; } </style>
<div class="injected-form" style="display:inline-block">
<div>
<button class="button" type="submit" style="width: 370px; height:60px; font-size:18px; background-color:#7cb330;border-radius:10px;border:none;color:#fff;background-image:none;"> Підтримайте нас </button><div style="font-size:14px;margin:2em 0;color:#747381;"><!--Онлайн-подписка от ПриватБанка--></div></div></div></div> 
<!--Privat END-->
@endsection
@yield('privat_widget')

@section('lider_widget')
{{ Widget::run('most_view') }}
@endsection
@yield('lider_widget')