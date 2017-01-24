@extends('profile.layout')
@section('content')
<br>
<div class="container">
    <div class="row page-title-row">
		<div class="col-md-6">
			<h3>Internship <small>» Edit or View Backgrounds</small></h3>
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
		<h2 class="text-center">Internships Backgrounds </h2>
		<div class="panel-group" id="group-collapse">
				@foreach($backgrounds as $background)
					    <div class="panel panel-info">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#group-collapes" href="#collapse{{$background->id}}">{{$background->title}} {{$background->beginning}} - {{$background->ending}}</a>
								</h4>
							</div>
						
						<div id="collapse{{$background->id}}" class="panel-collapse collapse in">
							<div class="panel-body bg-item">
								Background: {{$background->background}}<br>
								Status: {{$background->status}}<br>
								<p><span class="glyphicon glyphicon-edit"></span><a class="btn btn-info btn-link" href="/profile/business/backgrounds/{{$background->id}}/edit" role="button">Edit</a></p>
							</div>
						</div>
						</div>
				@endforeach
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
	
			<div class="col-lg-4 text-center">
				<p><span class="glyphicon glyphicon-pencil"></span><a class="btn btn-info btn-link" href="/profile/business/backgrounds/create" role="button"> Create</a></p>
				<hr>
			</div>
			
			<div class="col-lg-4 text-center">
				<p><i class="fa fa-undo"></i><a class="btn btn-info btn-link" href="/profile/business/post" role="button"> Go back</a></p>
				<hr>
			</div>

	</div>
</div>
@stop