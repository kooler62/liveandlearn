<div class="large-12 columns" role="content">

@if (isset ($content_layout))
	@if ($content_layout=='ex_content')
		@include('components.ex_content')
	@elseif ($content_layout=='posts_content')
		@include('components.posts_content')
		@elseif ($content_layout=='post_content')
		@include('components.post_content')
	@endif
@endif
</div>