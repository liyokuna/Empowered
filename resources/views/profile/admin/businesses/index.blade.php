@extends('profile.layout')
@section('content')
<br>

  <script>
 var chart = AmCharts.makeChart( "businessesStats", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "No Authorized Businesses",
    "value": {{$businesses_no}}
  }, {
    "title": "Authorized Businesses",
    "value": {{$businesses_yes}}
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
			<h3>Businesses Statistics </h3>
			<div id="businessesStats">
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
			<h3>Businesses List</h3>
			<div>
				<div class="panel panel-info">
					  <div class="panel-heading">The most recent regsitered businesses</div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Email</th> 
										<th>Bearer</th>
										<th>Status</th>
										<th>Updated</th>
										<th>Registered</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($businesses as $businesse)
										<tr>
											<td>{{ $businesse->id }}</td>
											<td>{{ $businesse->name }}</td>
											<td >{{ $businesse->email }}</td>
											<td >{{ $businesse->bearer }}</td>
											<td >{{ $businesse->status }}</td>
											<td >{{ $businesse->updated_at }}</td>
											<td >{{ $businesse->created_at }}</td>
											<td>
											<a href="/profile/admin/business/{{ $businesse->id }}/edit"
														class="btn btn-xs btn-warning">
													<i class="fa fa-edit"></i> Edit
											</a>
											</td>
											<td>
											<a href="/profile/empoweredAdmin/business/{{ $businesse->id }}"
											class="btn btn-xs btn-info">
											<i class="fa fa-user"></i> View
											</a>
											</td>
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
		{!! $businesses->render() !!}
	</div>
</div>

@stop

