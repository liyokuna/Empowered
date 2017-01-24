@extends('profile.layout')
@section('content')
<br>

<div class="container">
    <div class="row page-title-row">
		<div class="col-md-6">
			<h3>Profile <small>» Edit or View Your Credentials</small></h3>
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

<div class="container text ">
	<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading">Your Credentials</div>
			<div class="panel-body">
				<dl >
					<dt>Name</dt>
					<dd>{{$credentials->name}}</dd>
					<dt>Email</dt>
					<dd>{{$credentials->email}}</dd>
					
				</dl>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
	
			<div class="col-lg-4 text-center">
				<p><span class="glyphicon glyphicon-edit"></span><a class="btn btn-info btn-link" href="/profile/admin/settings/{{$credentials->id}}/edit" role="button">Edit</a></p>
				<hr>
			</div>
			
			<div class="col-lg-4 text-center">
				<p><i class="fa fa-undo"></i><a class="btn btn-info btn-link" href="/profile/admin/profile" role="button"> Go back</a></p>
				<hr>
			</div>

	</div>
</div>
@stop