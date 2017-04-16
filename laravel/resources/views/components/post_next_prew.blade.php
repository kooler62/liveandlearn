<!-- перреключатели поста  < пост > -->
<div class="callout clearfix">
 
	@if(!empty($post_prew_next[0]))
		<a class="button float-left" href="{{ $post_prew_next[0][0]->post_url }}" title="{{ $post_prew_next[0][0]->post_title }}" onclick="yaCounter25400348.reachGoal('Prew'); return true;">Попередній</a>
	@else
	<a class="button secondary disabled float-left">Попередній</a>
	@endif

	@if(!empty($post_prew_next[1]))
		<a class="button float-right" href="{{ $post_prew_next[1][0]->post_url }}" title="{{ $post_prew_next[1][0]->post_title }}" nclick="yaCounter25400348.reachGoal('Next'); return true;">Наступний</a>
	@else

	<a class="button secondary disabled float-right">Наступний</a>
	@endif
</div>