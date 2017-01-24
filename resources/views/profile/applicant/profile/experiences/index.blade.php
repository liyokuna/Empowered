@extends('profile.layout')
@section('content')
<br>
<div class="container">
    <div class="row page-title-row">
		<div class="col-md-6">
			<h3>Profile <small>» Edit or View Experiences</small></h3>
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

<div class="container text">
	<div class="row">
		@if($experiences_count >= 1)
			<h2 class="text-center">Experiences</h2>
		@else
			<h2 class="text-center">Experience</h2>
		@endif
		<div class="panel-group">
		@foreach($experiences as $experience)
			<div class="panel panel-info">
				<div class="panel-heading"><strong>{{$experience->mission_name}}</strong> at {{$experience->business_name}} 
				from {{$experience->month_beginning}}/{{$experience->year_beginning}} to @if($experience->month_ending !=0 && $experience->year_ending !=0){{$experience->month_ending}}/{{$experience->year_ending}} @else Now @endif</div>
					<div class="panel-body bg-item">
					{{$experience->description}}<br>
					@if($experience->additionnal != 'NULL')
						Additional:{{$experience->additionnal}}<br>
					@endif
					<p><span class="glyphicon glyphicon-edit"></span><a class="btn btn-info btn-link" href="/profile/applicant/profile/experiences/{{$experience->id}}/edit" role="button">Edit</a></p>
					</div>
					<div class="panel-footer" style="background-color:#d9edf7;">
					@if($experience->field !='NULL')
						Fields:<strong> {{$experience->field}}</strong> 
					@endif
					 in {{$experience->city}}, {{$experience->country}}
					</div>
			</div>		
		@endforeach
	</div>
	</div>
</div>

<div class="container">
	<div class="row">
	
			<div class="col-lg-4 text-center">
				<p><span class="glyphicon glyphicon-pencil"></span><a class="btn btn-info btn-link" href="/profile/applicant/profile/experiences/create" role="button"> Create</a></p>
				<hr>
			</div>
	
			<div class="col-lg-4 text-center">
				<p><i class="fa fa-undo"></i><a class="btn btn-info btn-link" href="/profile/applicant/profile" role="button"> Go back</a></p>
				<hr>
			</div>

	</div>
</div>
@stop