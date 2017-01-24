@extends('profile.layout')
@section('content')
<br>

<div class="container">
    <div class="row page-title-row">
		<div class="col-md-6">
			<h3>Profile <small>» Edit or View Credentials</small></h3>
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
			<div class="panel-heading">User Credentials</div>
			<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Email</th> 
										<th>Status</th>
										<th>Updated</th>
										<th>Registered</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($credentials as $credential)
										<tr>
											<td>{{ $credential->id }}</td>
											<td>{{ $credential->name }}</td>
											<td >{{ $credential->email }}</td>
											<td >{{ $credential->status }}</td>
											<td >{{ $credential->updated_at }}</td>
											<td >{{ $credential->created_at }}</td>
											<td>
												<a href="/profile/admin/users/{{$credential->id}}/edit"
													class="btn btn-xs btn-info">
													<i class="fa fa-edit"></i> Edit
												</a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
			</div>
		</div>
	</div>
		<div class="text-center text">
		{!! $credentials->render() !!}
	</div>
</div>

<div class="container">
	<div class="row">
			
			<div class="col-lg-4 text-center">
				<p><span class="glyphicon glyphicon-pencil"></span><a class="btn btn-info btn-link" href="/profile/admin/users/create" role="button">Create</a></p>
				<hr>
			</div>
			
			<div class="col-lg-4 text-center">
				<p><i class="fa fa-undo"></i><a class="btn btn-info btn-link" href="/profile/admin/stats" role="button"> Go back</a></p>
				<hr>
			</div>

	</div>
</div>
@stop