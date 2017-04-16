
@extends('layouts.grid')


@section('facebook_widget')@endsection
@section('vk_widget')@endsection
@section('google_widget')@endsection
@section('privat_widget')@endsection





@section('handler')
<div class="callout success">
  <h5>{{$handler}}</h5>
</div>
@endsection




@section('content')
@foreach($posts as $post)
<article>
<a href="{{URL::route('authors')}}/{{$post->user_name}}">
	<img width="100px" src="{{$post->user_avatar}}">
</a>

<a href="{{URL::route('authors')}}/{{$post->user_name}}">
{{$post->user_name}}
</a>

{{$post->user_description}}

</article>
	@endforeach

	@include('components.paginator')

@endsection