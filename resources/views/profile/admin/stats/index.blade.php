@extends('profile.layout')
@section('content')
<br>

  <script>
 var chart = AmCharts.makeChart( "usersStats", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "Applicants",
    "value": {{$applicants_count}}
  }, {
    "title": "Admin",
    "value": {{$admin_count}}
  },
   {
    "title": "Businesses",
    "value": {{$business_count}}
  }
  ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "40%",
  "innerRadius": "60%",
  "labelText": "[[title]]",
  "export": {
  "enabled": true
  }
} );

var chart = AmCharts.makeChart( "internshipStats", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "Open",
    "value": {{$open_position}}
  }, {
    "title": "Close",
    "value": {{$close_position}}
  }
  ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "40%",
  "innerRadius": "60%",
  "labelText": "[[title]]",
  "export": {
  "enabled": true
  }
} );
  </script>


<div class="container">
    <div class="row page-title-row">
		<div class="col-lg-12">
			<h3>Users Statistics </h3>
			<div id="usersStats">
			</div>	
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


<div class="container ">
	<div class="row">
			<div class="col-lg-12">
			<h3>Users</h3>
			<div>
				<div class="panel panel-info">
					  <div class="panel-heading">The most recent regsitered users</div>
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
									</tr>
								</thead>
								<tbody>
									@foreach ($users as $user)
										<tr>
											<td>{{ $user->id }}</td>
											<td>{{ $user->name }}</td>
											<td >{{ $user->email }}</td>
											<td >{{ $user->status }}</td>
											<td >{{ $user->updated_at }}</td>
											<td >{{ $user->created_at }}</td>
											
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
				</div>
			</div>
		</div>
	
	</div>
	<div class="text-center text">
		{!! $users->render() !!}
	</div>
</div>



<div class="container ">
	<div class="row">
		<h2 class="text-center">Internships</h2>
		<div class="col-lg-12">
			<div id="internshipStats">
			
			</div>	
		</div>
	</div>
</div>

<div class="container ">
	<div class="row">
		<div class="col-lg-12">
			<h3>Opportunities</h3>
			<div>
				<div class="panel panel-info">
					  <div class="panel-heading">The most recent opportunities</div>
						<div class="panel-body">	
						<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Title</th>
										<th>Description</th> 
										<th>Status</th>
										<th>Creator</th>
										<th>Updated</th>
										<th>Registered</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($posts as $post)
										<tr>
											<td>{{ $post->id }}</td>
											<td>{{ $post->title }}</td>
											<td> {{ $post->description }}</td>
											<td>{{ $post->status }}</td>
											<td>{{ $post->id_creator }}</td>
											<td>{{ $user->updated_at }}</td>
											<td>{{ $user->created_at }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						
						</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="text-center text">
		{!! $posts->render() !!}
	</div>
</div>



@stop

