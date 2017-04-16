<!-- FOOTER -->
		<footer class="row">
			<div class="large-3 medium-3 small-12 columns">
				<a class="footer_logo"  title="Live &amp; Learn" href="/"></a>
				<p class="text-center small-centered">© 2014-2017</p>
			</div>
			
			<div class="large-6 medium-6 small-12 columns text-center">
				Все для саморизвитку. Подивіться на речі з іншого боку. Змініть свій світогляд! І ваше життя зміниться на краще.
				<ul class="menu">
@foreach ($pages as $page )
<li><a href="{{URL::route('page')}}/{{ $page->slug }}">{{ $page->title }}</a></li>
@endforeach		
				</ul>
			</div>

			<div class="large-3 medium-3 small-12 columns">
	<div class="row">
	<!-- Yandex.Metrika informer ya_metric.js-->
<a href="https://metrika.yandex.ru/stat/?id=25400348&amp;from=informer"
target="_blank" rel="nofollow"><img src="//informer.yandex.ru/informer/25400348/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:25400348,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->


<!--LiveInternet counter-->
<script type="text/javascript">
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t25.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,80))+";"+Math.random()+
"' alt='' title='LiveInternet: показано число посетителей за"+
" сегодня' "+
"border='0' width='88' height='15'><\/a>")
</script>



	</div>
		<div id="footer_social_buttoms">
					<a title="Live & Learn у Вконтакте" href="http://vk.com/public66129309" rel="nofolow" target="_blank" style="background-image:url(/img/32_soc_sprite.png);"></a>
					<a title="Live & Learn на Facebook" href="https://www.facebook.com/LLcomua" rel="nofolow" target="_blank" style="background-image:url(/img/32_soc_sprite.png);background-position:-32px;"></a>
					<a title="Live & Learn у Twitter" href="https://twitter.com/LLcomua" rel="nofolow" target="_blank" style="background-image:url(/img/32_soc_sprite.png);background-position:-64px;"></a>
					<a title="Live & Learn на Google+" href="https://google.com/+LiveandlearnUa/about" rel="nofolow" target="_blank" style="background-image:url(/img/32_soc_sprite.png);background-position:64px;"></a>
					<a title="Live & Learn через RSS" href="http://feeds.feedburner.com/liveandlearn_ua" rel="nofolow" target="_blank" style="background-image:url(/img/32_soc_sprite.png);background-position:32px;"></a>
				</div>
			</div>
			{{--  
			<img style="position: relative;left: 90px;" src="http://web-meteor.hol.es/img/logos/logo.png" width="140px" title="Develop by Web-Meteor Studio" alt="Develop by Web-Meteor">--}}
		</footer>
	


		<script src="/js/vendor/jquery.js"></script>
		<script src="/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>