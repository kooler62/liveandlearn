@foreach($posts as $post)
<article>
	<h2><a href="{{ $post->cat_url }}">{{ $post->cat_title }}</a></h2>


	<div class="row post">
		<div class="large-12 columns">
			<a href="{{ $post->cat_url }}">
				<img  class="float-left post_img" src="{{ $post->cat_img }}"/>
			</a>			
		</div>
	</div>
<hr>


</article>


@endforeach

