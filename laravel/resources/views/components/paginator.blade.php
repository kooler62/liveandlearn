@section('pagination')

<!-- PAGINATION -->
		<div class="row">
			<div class="large-12 columns text-center" role="content">
			{!! $posts->render() !!}
			</div>
		</div>
<!-- END PAGINATION -->
@endsection
 @yield('pagination')