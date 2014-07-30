@extends("layouts.default")

@section("content")
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			@include ('statuses.partials.publish-status-form')

			@include ('statuses.partials.statuses')
		</div>
	</div>
@stop
