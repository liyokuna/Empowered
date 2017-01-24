@extends('profile.layout')

@section('content')
@if( $experiences_count >= 1 && $backgrounds_count >= 1 && $skills_count >=1 && $infos_count>=1)
@if( $authorization->status =='NO')
<div id="image_bg">
	<img src="{{URL::asset('/pictures/wait.jpg')}}" alt="waiting" class="img-responsive" style="width:100%; height:899px";>
		<div class="center" >
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4" style="margin-top:150px;">
						<a href="#" style="color:white;">
							<i class="fa fa-search" style="font-size:48px;color:#666699;"></i> <p>Hello ! We are currently checking and viewing your information.</br>You will view opportunities soon !</br>The Team !</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@else
<br>
  <div class="container">
    <div class="row ">
      <div class="col-md-4">
	  <br>
        <h3>Internship <small>» Listing</small></h3>
		
      </div>
	  <div class="col-md-4 col-md-offset-4">
	  <br>
		<form class="navbar-form " role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
        <button type="submit" class="btn btn-default">Submit</button>
		
      </form>
	  
	  </div>
    </div>
</div>

<div class="container text ">
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
      <div class="col-sm-12">
					<div class="panel-group" id="group-collapse">
				@foreach($posts as $post)
					    <div class="panel panel-info">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#group-collapes" href="#collapse{{$post->id}}">{{$post->title}} Beginning from : {{$post->beginning}} to {{$post->ending}}</a>
								</h4>
							</div>
						<div id="collapse{{$post->id}}" class="panel-collapse collapse in">
							<div class="panel-body bg-item">
								<dl class="dl-horizontal">
									<dt>Description</dt>
										<dd>{{$post->description}}</dd>
										<br>
									
									<dt>Apply</dt>
										<dd>
										@if($post->status =='taken')
											<a href="#">
											<button class="btn btn-primary  " type="button"  disabled="disabled">
											<span class="glyphicon glyphicon-pencil" > Here</span>
											</button>
										@else
											<a href="/profile/applicant/posts/{{$post->id}}">
											<button class="btn btn-primary  " type="button" >
											<span class="glyphicon glyphicon-pencil" > Here</span>
											</button>
										@endif
										</a>
										</dd>
										<br>
									<dt><span class="glyphicon glyphicon-briefcase" ></span></dt>
										<dd>
										<a href="/profile/empowered/business/{{$post->id_creator}}">
										<button class="btn btn-primary " type="button">
											Business Profile
										</button>
										</a>
										</dd>
								</dl>
							</div>
						</div>
						</div>
				@endforeach
			</div>

      </div>
    </div>
		<div class="text-center text">
		{!! $posts->render() !!}
	</div>
 </div>
@endif
@else
<div id="image_bg">
	<img src="{{URL::asset('/pictures/wooden-pencils.jpg')}}" alt="wooden pencil" class="img-responsive" style="width:100%; height:899px";>
		<div class="center" >
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center text" style="margin-top:150px;">
					
					<div class="row text-center">
					@if(!($infos_count>0))
						<a href="/profile/applicant/profile/infos/create">
							<i class="fa fa-cog" style="font-size:48px;color:#666699;"></i> Create your profile !
						</a>
					@else
						<a href="#">
							<i class="fa fa-check" style="font-size:48px;color:#666699;"></i> You've already create your profile !
						</a>	
					@endif
					</div>
					<div class="row">
					@if((!$backgrounds_count > 0))
						<a href="/profile/applicant/profile/backgrounds/create">
							<i class="fa fa-cog" style="font-size:48px;color:#666699;"></i> Write your education background !
						</a>
					@else
						<a href="#">
							<i class="fa fa-check" style="font-size:48px;color:#666699;"></i> You have at least saved an education background on our database !
						</a>
					@endif
					</div>
					<div class="row">
					@if(!($experiences_count > 0))
						<a href="/profile/applicant/profile/experiences/create">
							<i class="fa fa-cog" style="font-size:48px;color:#666699;"></i> Tell us about your experiences !
						</a>
					@else
						<a href="#">
							<i class="fa fa-check" style="font-size:48px;color:#666699;"></i> You have at least saved an experience on our database !
						</a>
					@endif
					</div>
					<div class="row">
					@if(!($skills_count > 0))
						<a href="/profile/applicant/profile/skills/create">
							<i class="fa fa-cog" style="font-size:48px;color:#666699;"></i> Tell us what your skills are !
						</a>
					@else
						<a href="#">
							<i class="fa fa-check" style="font-size:48px;color:#666699;"></i> You have at least saved a skill on our database !
						</a>
					@endif
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif
@stop
