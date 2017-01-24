@extends('profile.layout')
@section('content')
@if( $exist_infos == 1 && $exist_links == 1)
@if( $authorization->status =='NO')
<div id="image_bg">
	<img src="{{URL::asset('/pictures/waiting.jpg')}}" alt="waiting" class="img-responsive" style="width:100%; height:899px";>
		<div class="center" >
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4" style="margin-top:150px;">
						<a href="#">
							<i class="fa fa-search" style="font-size:48px;color:#666699;"></i> <p>Hello ! We are currently checking and viewing your information.</br>You can create opportunities soon !</br>The Team !</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@else
<br>
<div class="container">
    <div class="row page-title-row">
		<div class="col-md-6">
			<h3>Internships </h3>
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
		<h2 class="text-center">Internships List</h2>
			<div class="panel-group" id="group-collapse">
				@foreach($posts as $post)
					    <div class="panel panel-info">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#group-collapes" href="#collapse{{$post->id}}">{{$post->title}} {{$post->beginning}} - {{$post->ending}}</a>
								</h4>
							</div>
						<div id="collapse{{$post->id}}" class="panel-collapse collapse in">
							<div class="panel-body bg-item">
								<dl class="dl-horizontal">
									<dt>Description</dt>
										<dd>{{ $post->description }}</dd>
									<dt>Applicants</dt>
										<dd>
										<a href="/profile/business/dashboard/{{$post->id}}">
										<button class="btn btn-info" type="button">
											<span class="badge">View</span>
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

@endif
@else
<div id="image_bg">
	<img src="{{URL::asset('/pictures/wooden-pencils.jpg')}}" alt="wooden pencil" class="img-responsive" style="width:100%; height:899px";>
		<div class="center" >
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4" style="margin-top:150px;">
						<a href="/profile/business/profile/create">
							<i class="fa fa-cog" style="font-size:48px;color:#666699;"></i> Create your profile !
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif
@stop