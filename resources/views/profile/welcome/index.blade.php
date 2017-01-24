@extends('profile.layout')
@section('content')

<div id="image_bg">
	<img src="{{URL::asset('/pictures/praise-dancer2.jpg')}}" alt="building" class="img-responsive" style="width:100%; height:auto;">
		<div class="center" >
			<div class="container text">
				<div class="row">
					<h1>Welcome !</h1>
					<p>Empowered makes everything for you to be possible.</p>
				</div>
			</div>
			
			<div class="container text">
				<div class="row">
					<h2>Here are the team member</h2>
					<div class="col-md-4 col-md-offset-4">
						<div class="row">
							<div class="col-md-4 col-md-offset-4">
								<a href="http://lmukunaciowela.pe.hu" class="thumbnail" title="Lionel Mukuna Ciowela">
									<img src="{{URL::asset('/pictures/15-07-21-VisaUsId.jpg')}}" alt="me" class="img-responsive" onmouseout="this.src='{{URL::asset('/pictures/15-07-21-VisaUsId.jpg')}}';" onmouseover="this.src='{{URL::asset('/pictures/lio123.jpg')}}';">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
@stop