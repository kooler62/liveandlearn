<?$man=[
'01'=>'Січень',
'02'=>'Лютий',
'03'=>'Березень',
'04'=>'Квітень',
'05'=>'Травень',
'06'=>'Червень',
'07'=>'Липень',
'08'=>'Серпень',
'09'=>'Вересень',
'10'=>'Жовтень',
'11'=>'Листопад',
'12'=>'Грудень'
];
?>




@foreach($posts as $post)
<?
$date=$post->date;
$year=substr( $date, 0,4);
$month=substr( $post->date, 5,2);
$day=substr( $post->date, 8,2);
$word_month=$man[$month];
?>




<article>
	<h2><a href="{{ $post->post_url }}">{{ $post->post_title }}</a></h2>
	
<span class="large float-left post-date text-center">
<a href="/{{$year}}/{{$month}}">{{$word_month}}</a><br>
	<a href="/{{$year}}/{{$month}}/{{$day}}"><h5>{{$day}}</h5></a>
	<!--  	<br><a href="/post/{{$year}}">{{$year}}</a>-->
</span>
<a class="warning button hollow float-right cat-label" title="{{ $post->cat_title }}" href="{{ URL::route('categories') }}/{{ $post->cat_altname }}">{{ $post->cat_title }}</a>





	
	<div class="row post">
		<div class="large-12 columns">
		
			<a href="{{ $post->post_url }}">
				<img  class="float-left post_img" src="{{ $post->post_img }}"/>
			</a>

			
			<a class="avatar" href="{{ URL::route('authors') }}/{{ $post->user_name }}">
				<img src="{{ $post->user_avatar }}"/>
			</a>
			
			<a class="author_name" href="{{ URL::route('authors') }}/{{ $post->user_name }}">{{ $post->user_name }}</a>
			
			<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> {{ $post->post_views }}

			<span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <span class="smcoment" href="http://liveandlearn.com.ua{{ $post->post_url }}"></span>
			
			
		</div>
		<div class="large-12 columns">
			<p>{!! $post->post_description !!}</p>
		</div>

		<a href="{{ $post->post_url }}" class="button small float-right">Читати далі</a>
		
	</div>
<hr>
</article>
	
@endforeach




<script type="text/javascript">
_hcwp = window._hcwp || [];
_hcwp.push({widget:"Stream", widget_id: 64677});
_hcwp.push({widget:"Bloggerstream", widget_id: 64677,selector:".smcoment", label: "{%COUNT%}" });
(function() {
if("HC_LOAD_INIT" in window)return;
HC_LOAD_INIT = true;
var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage ||  "en").substr(0, 2).toLowerCase();
var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/64677/"+lang+"/widget.js";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
</script>
