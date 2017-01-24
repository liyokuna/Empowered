@extends('profile.layout')
@section('content')

<div class="jumbotron text-center text">
  <h1>{{ $business_infos->name }} </h1>
  <p>Main fields of work :{{ $business_links->fields }}</p>
  <p><a class="btn btn-primary btn-lg" href="http://www.{{$business_links->website}}" role="button">Learn more</a></p>
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

<div class="container  text">
  <div class="row">
    <div class="col-sm-8 text-center">
      <h2>About Company </h2>
      <p>{{ $business_infos->description }}</p>
    </div>
    <div class="col-sm-4 text-center">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
	
  </div>
  <hr>
</div>

<div class="container text ">
		<div class="row">
		<h2 class="text-center">Links and Contact</h2>
		
			<div class="col-lg-6">
			<div class="row ">
				<p><span class="glyphicon glyphicon-map-marker"></span> {{ $business_infos->number }} {{ $business_infos->street }}, {{ $business_infos->city }}, {{ $business_infos->country }}</p>
			</div>
			@if($business_links->phone !='NULL')
				<div class="row">
					<p><span class="glyphicon glyphicon-phone"></span> {{ $business_links->phone }}</p>
				</div>
			@endif
			</div>
			
			<div class="col-lg-6 ">
			@if($business_links->facebook != 'NULL')
				<div class="row " style="margin-left:110px;">
					<a href="https://www.facebook.com/{{$business_links->facebook}}">
						<p><img src="{{URL::asset('/pictures/Facebook-48.png')}}" alt="facebook" id="facebook"></p>
					</a>
				</div>
			
			@endif
			@if($business_links->twitter !='NULL')
				<div class="row" style="margin-left:110px;">
					<a href="https://twitter.com/{{$business_links->twitter}}">
						<p><img src="{{URL::asset('/pictures/Twitter-48.png')}}" alt="tiwtter" id="twitter" ></p>
					</a>
				</div>
			@endif
			
			@if($business_links->linkedin !='NULL')
			<div class="row" style="margin-left:110px;">
				<a href="https://fr.linkedin.com/in/{{$business_links->linkedin}}">
					<p><img src="{{URL::asset('/pictures/Linkedin-48.png')}}" alt="linkedin" id="linkedin"></p> 
				</a>
			</div>
			@endif
			
			</div>
		</div>
</div>
	
@stop