@extends('abroad.layout')
@section('content')
<div class="image_map">
	<div class="row" style="margin: 0;background-color: rgba(80,80,80,1);margin-top:24px;">
		<div id="map" style="width: 100%; height: 667px;" class="container-fluid">
		</div>
	</div>
</div>

<div class="container-fluid bg-grey slideanim text">
	<div class="row">
		<div class="col-lg-3 ">
			<img alt="brand" src="{{URL::asset('/pictures/Globe-104.png')}}" class="img-responsive"style="margin-left: auto;
    margin-right: auto;margin-top:90px;">
		</div>
		
		<div class="col-lg-9 text-center">
			<div class="row">
				<div id="T_visions"><h2>Our visions</h2></div>
				<div id="visions"><p>We want to connect two different worlds on this platform. Do not forget that more than one year abroad disconnect your from home,
				plus view the number of business growing in Congo, you don't want to miss some opportunity that can be offer to you.
				</p></div>
			</div>
			<hr>
			<div class="row">
				<div id ="T_values"><h2>Our values</h2></div>
				<div id="values"><p>The connection of two different world involve your participation.
				We make sure to avoid faking by matching your knowledges and skills with your Linkedin.
				For IT applicant will be asked to link their GitHub to analyze.
				This is made to help businesses to have better choice and flexibility. 
				</p></div>
			</div>
		</div>
	</div>
</div>
</br>

<div class="container-fluid slideanim text">	
	<div class="container">
	<div class="row">
		<div class="col-lg-9 ">
			<div id="business"><p>
				Businesses base in The Democratic Republic of Congo can easily connect with Congolese abroad.
				This platform lets you to set some opportunities for Congolese abroad and by this way you increase your visibility.
			</p></div>
		</div>
		<div class="col-lg-3">
			<img alt="brand" src="{{URL::asset('/pictures/CEO.png')}}" class="img-responsive">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-3 text-center">
			<img alt="brand" src="{{URL::asset('/pictures/Student.png')}}" class="img-responsive">
		</div>
		
		<div class="col-lg-9">
			<div id="student"><p>
			
				If your project is to find opportunities in Congo-Kinshasa, creating your profile will make you visible
				for the Congolese job market.
			</p></div>
		</div>
	</div>
	</div>
</div>

<!-- Modal -->
  <div class="modal fade text" id="Modal-contact" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-envelope"></span> Contact </h4>
        </div>
		
        <div class="modal-body" style="padding:40px 50px;">
		
		<div class="row">
		
          <form role="form" action="send_mail.php" method="post">
		  
            <div class="col-lg-5 text-center">
					<div class="row">
						<div class=" col-lg-12 form-group">
							<input class="form-control" type="text" name="Name" onchange="checkName()" placeholder="Name" ><br>
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