@extends('profile.layout')
@section('content')

@if($count_data>=1)

<br>
			
<div class="container">
    <div class="row page-title-row">
		<div class="col-md-6">
			<h3>Profile <small>» Edit or View Profile</small></h3>
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
	<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading">About you</div>
			<div class="panel-body">
				<dl >
					<dt>Description</dt>
					<dd>{{$data->about_you}}</dd>
					<dt>Actual Position</dt>
					<dd>{{$data->position}}</dd>
					<dt>Linkedin Username</dt>
					<dd>{{$data->linkedin}}</dd>
					<dt>GitHub Username</dt>
					<dd>{{$data->github}}</dd>
					<dt>Website</dt>
					<dd>{{$data->website}}</dd>
				</dl>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">

			<div class="col-lg-4 text-center">
				<p><span class="glyphicon glyphicon-edit"></span><a class="btn btn-info btn-link" href="/profile/applicant/profile/infos/{{$data->id_applicant}}/edit" role="button">Edit</a></p>
				<hr>
			</div>
			<div class="col-lg-4 text-center">
				<p><i class="fa fa-undo"></i><a class="btn btn-info btn-link" href="/profile/applicant/profile" role="button"> Go back</a></p>
				<hr>
			</div>
			@if($count_data==0)
			<div class="col-lg-4 text-center">
				<p><span class="glyphicon glyphicon-pencil"></span><a class="btn btn-info btn-link" href="/profile/applicant/profile" role="button"> Create</a></p>
				<hr>
			</div>
			@endif
	</div>
</div>
@else
	<div id="image_bg">
	<img src="{{URL::asset('/pictures/wooden-pencils.jpg')}}" alt="wooden pencil" class="img-responsive" style="width:100%; height:899px";>
		<div class="center" >
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center text" style="margin-top:150px;">
					
					<div class="row text-center">
						<a href="/profile/applicant/profile/infos/create">
							<i class="fa fa-cog" style="font-size:48px;color:#666699;"></i> Create your profile !
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
@endif
@stop