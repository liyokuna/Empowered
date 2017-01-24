@extends('profile.layout')
@section('content')
<br>
<div class="container">
    <div class="row page-title-row">
		<div class="col-md-6">
			<h3>Internships <small>» My Applications List</small></h3>
		</div>
    </div>
</div>

<div class="container">
@if (Session::has('success'))
    <div class="alert alert-info fade in">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>
            <i class="fa fa-check-circle fa-lg fa-fw"></i> &nbsp;
        </strong>
        {{ Session::get('success') }}
    </div>
@endif
</div>

<div class="container text" style="margin-bottom: 0px;">

	
	@foreach($applications as $application)
	
		<div class="well well-lg">
		<div class="row">
		<div class="col-md-4">
			<strong>{{$application->title}}</strong>
			@if($application->status =='pending')
				<span class="badge">Open</span>
			@else
				<span class="badge">Closed</span>
			@endif
		</div>
		<div class="col-md-offset-4 pull-right">
			<a href="/profile/applicant/posts/{{$application->id}}">
				<button class="btn btn-primary " type="button">
				View
				</button>
			</a>
		</div>
		</div>
		</div>
	
	@endforeach
</div>

@stop