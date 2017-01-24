@extends('home.layout')
@section('content')

<!-- Full Page Image Background Carousel Header -->
	<header id="myCarousel" class="carousel slide" >
		<!-- Wrapper for Slides -->
			<div class="carousel-inner">
				<div class="item active">
					<!-- Set the first background image using inline CSS below. -->
						<img src="{{URL::asset('/pictures/globe-world-1.jpg')}}" alt="globe" class="img-responsive">					
							<div class="carousel-caption">
								<h2>Empower yourself</h2>
								<p>Be visible for businesses even if you are abroad.</p>
							</div>
					</div>
				</div>	
	</header>

	<div class="container-fluid marketing bg-grey slideanim text">
		<div class="row">
			
		<div class="col-lg-4 text-center" >
		<div >
          <img class="img-rounded" src="{{URL::asset('pictures/Talk-96.png')}}" alt="talk"  class="img-responsive" >
          <div id="you"><h2>Tell us who you are</h2></div>
          <div id="talk"><p>Describe yourself by sharing your skills, knowledges and your accomplishements.<p></div>
		 </div>
        </div><!-- /.col-lg-4 -->
		
        <div class="col-lg-4 text-center" >
		<div >
          <img class="img-rounded" src="{{URL::asset('pictures/Search-96.png')}}" alt="search"  class="img-responsive">
          <div id="internship"><h2>Find your perfect internship</h2></div>
          <div  id="search"><p>View your skills and knowledges you can find what you made for and you want to work with.</p></div>
          </div>
        </div><!-- /.col-lg-4 -->
		
        <div class="col-lg-4 text-center" >
		<div >
          <img class="img-rounded" src="{{URL::asset('pictures/World-Map-96.png')}}" alt="world map" class="img-responsive" >
          <div id="trip"><h2>Make the trip</h2></div>
          <div id="world-map"><p>Pack your suitcases and take a ride to your new work place.</p></div>
         </div>
        </div><!-- /.col-lg-4 -->

		</div>
	</div>

<div class="container-fluid text-center slideanim text">
	<div class="row">
		<h2>They talk about us<hr></h2>
	</div>
	<div class="row">
<div id="myCarousel2" class="carousel slide text-center" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel2" data-slide-to="1"></li>
			<li data-target="#myCarousel2" data-slide-to="2"></li>
		</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
			<div class="item active">
				<h4>"An awesome application designed and built by a congolese native from Kinshasa"<br><span style="font-style:normal;">Evan Noynaert, Vice President, Comment Box</span></h4>
			</div>
		<div class="item">
			<h4>"One word... WOW!!"<br><span style="font-style:normal;">Fabien Forestier, Salesman, Rep Inc</span></h4>
		</div>
		<div class="item">
			<h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Cassio Hubner, Actor, FriendsAlot</span></h4>
		</div>
	</div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

<div class="container-fluid text-center slideanim text">
	<div class="row">
		<div id="about"><h2>About us <hr></h2></div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<img alt="empowered" src="{{URL::asset('/pictures/Connect-Develop-96.png')}}" >
		</div>
		<div class="col-lg-9">
			<div id="empowered-logo"><p>
			This web site was built to let Congolese student abroad to find an opportunity back home.
			As you know more than one year out of the country make you disconnect at the same you are invisible for the Congolese job market.
			Thus this was built to erase that invisibility by joining businesses based in Congo and Congolese student abroad on the same platform.
			</p></div>
		</div>
	</div>
</div>

<!-- Modal -->
  <div class="modal fade text" id="Modal-contact" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal" style="color:black;">&times;</button>
          <h4><span class="glyphicon glyphicon-envelope"></span> Contact </h4>
        </div>
		
        <div class="modal-body" style="padding:40px 50px;">
		
		<div class="row">
			
          <form role="form" action="/home" method="post">
		  
            <div class="col-lg-5 text-center">
					<div class="row">
						<div class=" col-lg-12 form-group">
							<input class="form-control" type="text" name="Name" onchange="checkName()" placeholder="Name" ><br>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 form-group">
							<input class="form-control" type="email" name="mail" onchange="checkMail()" placeholder="Email"><br>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 form-group">
							<input class="form-control" type="text" name="subject" placeholder="Subject" ><br>
						</div>
					</div>
					
				</div>
	
				<div class="col-lg-7">
					<div class="row">
						<textarea class="form-control" rows="9" name="message" placeholder="Message"></textarea><br>		
					</div>
				</div>
			  
          
		</div>
        </div>
        <div class="modal-footer">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-8 form-group">
					<button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
					
					<button class="btn btn-success pull-right" type="submit" value="Send" style="margin-right:10px;"><span class="glyphicon glyphicon-send"></span> Send</button>
				</div>
			</div>
        </div>
		</form>
      </div>
      
    </div>
  </div> 
  

@stop