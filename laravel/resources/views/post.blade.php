@extends('layouts.grid')
@section('facebook_widget')@endsection
@section('vk_widget')@endsection
@section('google_widget')@endsection
@section('privat_widget')@endsection


@section('handler')@endsection






@section('content')
	@include('components.post_content')

	@include('components.hypercoment')
	@include('components.randompost')
	@include('components.post_next_prew')

@endsection