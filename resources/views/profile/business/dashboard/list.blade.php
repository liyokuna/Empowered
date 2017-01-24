@extends('profile.layout')
@section('content')
<br>
<div class="container">
    <div class="row page-title-row">
		<div class="col-md-6">
			<h3>Applicant List <small>» for {{$post_title->title}}</small> </h3>
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
		<h2 class="text-center"><span class="badge text">{{$count_applicants}}</span> Applicants</h2>
			<div class="panel-group" id="group-collapse">
				@foreach($applicants as $applicant)
					    <div class="panel panel-info">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#group-collapes" href="#collapse{{$applicant->id}}">{{$applicant->name_applicant}}</a>
								</h4>
							</div>
						<div id="collapse{{$applicant->id}}" class="panel-collapse collapse in">
							<div class="panel-body bg-item">
								<dl class="dl-horizontal">
									<dt>Application Letter</dt>
										<dd>{{$applicant->body}}</dd>
									<dt>Email Address</dt>
										<dd>{{$applicant->email}}</dd>
									<dt><span class="glyphicon glyphicon-user" ></span></dt>
										<dd>
										<a href="/profile/empowered/{{$applicant->id_applicant}}">
										<button class="btn btn-info btn-lg" type="button">
											Profile
										</button>
										</a>
										</dd>
								</dl>
							</div>
						</div>
						</div>
				@endforeach
			</div>
			
		<hr>
	</div>
	
</div>



@stop