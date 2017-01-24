@extends('profile.layout')
@section('content')

<div id="image_bg">
	<img src="{{URL::asset('/pictures/having-the-power.jpg')}}" alt="building" class="img-responsive" style="width:100%; height:auto;">
		<div class="center" >
			<div class="container text">
				<div class="row">
					<h1>Hello !</h1>
					<p>Here is where we check your informations. We only access to your public information provide by the service where you will log in. Your public picture will be display on your profile.</br>
					<strong>WE DO NOT WRITE OR PUBLISH ON YOUR BEHALF ON THIS SOCIAL WEBSITE!</strong></p>
				</div>
			</div>
			
			<div class="container text">
				<div class="row">
					<h2>Click on one of those. If you are a programmer, show us your Code !</h2>
					<div class="col-md-4 col-md-offset-4">
						<div class="row">
							<div class="col-md-4 col-md-offset-3">
								<a href="/auth/github" class="thumbnail" title="GitHub">
									<img src="{{URL::asset('/pictures/GitHub-96.png')}}" alt="GitHub" class="img-responsive">
								</a>
							</div>
							<div class="col-md-4">
								<a href="/auth/linkedin" class="thumbnail" title="GitHub">
									<img src="{{URL::asset('/pictures/Linkedin-96.png')}}" alt="GitHub" class="img-responsive">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
@stop