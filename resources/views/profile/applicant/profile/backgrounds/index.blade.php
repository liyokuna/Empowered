@extends('profile.layout')
@section('content')
<br>
<div class="container">
    <div class="row page-title-row">
		<div class="col-md-6">
			<h3>Profile <small>» Edit or View Backgrounds</small></h3>
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
		<h2 class="text-center">Education Background</h2>
				@foreach($datas as $data)
					    <div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">
									{{$data->university}} {{$data->beginning}} - {{$data->ending}}
								</h3>
							</div>
						
						<div class="panel-body bg-item">
							Major: {{$data->majors}}<br>
							@if($data->minors != 'NULL')
								Minor: {{$data->minors}}<br>
							@endif
							@if($data->additionnal !='NULL')
								{{$data->additionnal}}<br>
							@endif
							<p><span class="glyphicon glyphicon-edit"></span><a class="btn btn-info btn-link" href="/profile/applicant/profile/backgrounds/{{$data->id}}/edit" role="button">Edit</a></p>
						</div>
						</div>
				@endforeach
	</div>
</div>

<div class="container">
	<div class="row">
	
			<div class="col-lg-4 text-center">
				<p><span class="glyphicon glyphicon-pencil"></span><a class="btn btn-info btn-link" href="/profile/applicant/profile/backgrounds/create" role="button"> Create</a></p>
				<hr>
			</div>
			
			<div class="col-lg-4 text-center">
				<p><i class="fa fa-undo"></i><a class="btn btn-info btn-link" href="/profile/applicant/profile" role="button"> Go back</a></p>
				<hr>
			</div>
	</div>
</div>
@stop