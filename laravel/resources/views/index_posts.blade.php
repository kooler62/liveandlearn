
@extends('layouts.grid')


@section('facebook_widget')@endsection
@section('vk_widget')@endsection
@section('google_widget')@endsection
@section('privat_widget')@endsection





@section('handler')@endsection




@section('content')
	@include('components.posts_content')

	@include('components.paginator')

@endsection