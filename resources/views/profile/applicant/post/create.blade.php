@extends('profile.layout')

@section('content')
<br>
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>Internship <small>» {{ $post->title }}</small></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text">Apply Form</h3>
          </div>
          <div class="panel-body">
			
			<div class="row text ">
				<div class="col-md-6 col-md-offset-3 text-center">
				{{$post->description}}<br>
				From: {{$post->beginning}} to {{$post->ending}}<br>
				</div>
			</div>
			<br>
			<div class="row">
				
				@foreach($backgrounds as $background)
				<div class="col-sm-3">
					<div class="well well-sm text">
						<strong>{{$background->background}}</strong> <span class="label label-primary">{{$background->status}}</span>
					</div>
				</div>
				@endforeach
				@foreach($skills as $skill)
				<div class="col-sm-3">
					<div class="well well-sm text">
						<strong>{{$skill->skill}}</strong> <span class="label label-primary">{{$skill->level}}</span>
					</div>
				</div>
				@endforeach
				
			</div>
			
			<br>
			@if(($applicant_count == 0))
            <form class="form-horizontal" role="form" method="POST"
                  action="/profile/applicant/posts">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              @include('profile.applicant.post._form')
              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button type="submit" class="btn btn-primary btn-md">
                    <i class="glyphicon glyphicon-send"></i>
                      Submit
                  </button>
                </div>
              </div>

            </form>
			
			@else
			
			<div class="col-md-7 col-md-offset-3">
				<div class="alert alert-info text-center" role="alert">You already applied for this opportunity !</div>
			</div>
			
			@endif
          </div>
        </div>
      </div>
    </div>
  </div>

@stop