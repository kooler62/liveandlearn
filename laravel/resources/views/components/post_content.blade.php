
<article>


<h3><a href="{{ $post[0]->post_url }}">{{ $post[0]->post_title }}</a></h3>
				<h6><!-- date --></h6>
	 
				<div class="row post">

					<div class="large-12 columns">
					<a class="warning button hollow float-right cat-label" href="">{{ $post[0]->cat_title }}</a>
			  			

						<img class="post_img" src="{{ $post[0]->post_img }}"/>
						<a class="avatar" href="/authors/{{ $post[0]->user_name }}">
  							<img src="{{ $post[0]->user_avatar }}">
						</a>
						<a class="author_name" href="/authors/{{ $post[0]->user_name }}">{{ $post[0]->user_name }}</a>
			  		</div>

			  		<div class="large-12 columns">
						<p>{!! $post[0]->post_text !!}</p>
			  		</div>
				</div>



</article>
<div class="row text-center">
	<!--<a href="https://cldmine.com/?ref=337453" target=_blank><img src="https://cldmine.com/assets/banners/ru/468-60/1.gif"></a>-->
	<a href="https://www.kuna.cloud/a/334781" target=_blank><img src="https://www.kuna.cloud/files/Kuna/728x90/kuna-cloud-affiliate-banner-728x90-ukr2.png" alt=""></a>
</div>
