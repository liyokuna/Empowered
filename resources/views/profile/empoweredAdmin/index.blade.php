@extends('profile.layout')
@section('content')
<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-thumbnail img-responsive" src='{{$avatar["avatar"]}}' alt="user" width="85" height="85">
                    <div class="intro-text">
                        <span class="name" >{{$applicant->name}}</span>
                        <hr class="star-light">
                        <span class="skills">{{$infos->position}}</span>
                    </div>
                </div>
            </div>
        </div>
 </header>

<div class="container text">
  <div class="row">
    <div class="col-sm-8 text-center">
      <h2>About Me </h2>
	  
      <p>{{$infos->about_you}}</p>
	  
    </div>
	
    <div class="col-sm-4 text-center">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
	
  </div>
  <hr>
</div>

<div class="container text">
	<div class="row">
		<h2 class="text-center">Education Background</h2>
			<div class="panel-group" id="group-collapse">
				@foreach($backgrounds as $background)
					    <div class="panel panel-info">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#group-collapes" href="#collapse{{$background->id}}">{{$background->university}} {{$background->beginning}} - {{$background->ending}}</a>
								</h4>
							</div>
						<div id="collapse{{$background->id}}" class="panel-collapse collapse in">
							<div class="panel-body bg-item">
							Major: {{$background->majors}}<br>
							@if($background->minors != 'NULL')
								Minor: {{$background->minors}}<br>
							@endif
							@if($background->additionnal !='NULL')
								{{$background->additionnal}}<br>
							@endif
							</div>
							</div>
						</div>
				@endforeach
			</div>
			
		<hr>
	</div>
	
</div>

<div class="container text">
	<div class="row">
	
	@if($experiences_count >= 1)
		<h2 class="text-center">Experiences</h2>
	@else
		<h2 class="text-center">Experience</h2>
	@endif
	<div class="panel-group">
		@foreach($experiences as $experience)
			<div class="panel panel-info">
				<div class="panel-heading"><strong>{{$experience->mission_name}}</strong> at {{$experience->business_name}} 
				from {{$experience->month_beginning}}/{{$experience->year_beginning}} to @if($experience->month_ending !=0 && $experience->year_ending !=0){{$experience->month_ending}}/{{$experience->year_ending}} @else Now @endif</div>
					<div class="panel-body bg-item">
					{{$experience->description}}<br>
					@if($experience->additionnal != 'NULL')
						Additional:{{$experience->additionnal}}<br>
					@endif
					</div>
					<div class="panel-footer" style="background-color:#d9edf7;">
					@if($experience->field !='NULL' )
						Fields:<strong> {{$experience->field}}</strong> 
					@endif
					 in {{$experience->city}}, {{$experience->country}}
					</div>
			</div>		
		@endforeach
	</div>
	
</div>
</div>

<div class="container text">
	<div class="row">
	<h2 class="text-center">Skills</h2>
	@foreach($skills as $skill)
		<a href="#" title="Level" data-toggle="popover" data-trigger="hover" data-content="{{$skill->level}}" style="margin-left:4px;margin-right:4px;">{{$skill->skill_name}}</a>
	@endforeach
	
	<hr>
	</div>
</div>

<div class="container text">
		<div class="row">
		<h2 class="text-center">Links and Contact</h2>
			
			@if($infos->website !='NULL')
			<div class="col-lg-4">
				<div class="row">
					<a href="http://{{$infos->website}}">
						<p><img src="{{URL::asset('/pictures/Info-96.png')}}" alt="facebook" id="info_logo" ></p>
					</a>
				</div>
			</div>
			@endif

			@if($infos->github !='NULL')
			<div class="col-lg-4 ">
				<div class="row" style="margin-left:110px;">
				<a href="https://github.com/{{$infos->github}}">
					<p><img src="{{URL::asset('/pictures/GitHub-96.png')}}" alt="github" id="github_logo"></span></p>
				</a>
				</div>
			</div>
			@endif
			
			@if($infos->github !='NULL')
			<div class="col-lg-4 ">
				<div class="row" style="margin-left:110px;">
				<a href="https://fr.linkedin.com/in/{{$infos->linkedin}}">
					<p><img src="{{URL::asset('/pictures/Linkedin-96.png')}}" alt="linkedin" id="linkedin_logo"></span></p>
				</a>
				</div>
			</div>
			@endif
		</div>
</div>

@stop