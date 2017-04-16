@extends('layouts.grid')


{{-- временно не отображаем --}}
@section('facebook_widget')@endsection
@section('vk_widget')@endsection
@section('google_widget')@endsection
@section('privat_widget')@endsection




@section('handler')
{{--<div class="callout success">
  <h5>{{ $handler or '' }}:</h5>
</div>--}}
@endsection



@section('content')
	@include('components.cats_content')

	@include('components.paginator')

@endsection