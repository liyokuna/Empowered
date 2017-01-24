@extends('business.layout')
@section('content')

<div id="div_donut">

</div>

<div class="container text-center">
	<div class="row">
		<div class="col-lg-4">
			<div class="row text">
				<h2>You put your announcement! </h2>
					<p>And only fifty percent of the price will be charge!</p>
			</div>
			<div class="row">
				<div class="image_voice">
					
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="row text">
				<h2>You will discuss with valuable applicants!</h2>
					<p>Each applicant will be check by our care!</p>
			</div>
			<div class="row">
				<div class="image_discuss">
					
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="row text">
				<h2>You hire him !</h2>
					<p>The rest of the price will be charge to disable your announcement and change the applicant status.</p>
			</div>
			<div class="row">
				<div class="image_job">
					
				</div>
			</div>
		</div>
	</div>
	<hr>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 text-center text">
			<h2>Fill the pool of opportunities!</h2>
			<div class="row">
				<button type="button" class="btn btn-success btn-lg btn-block"  onclick="window.location.href = '/register'">Go !</button>
			</div>
		</div>
		
	</div>
</div>

  <div class="modal fade" id="Modal-contact" role="dialog">
    <div class="modal-dialog modal-lg">
    

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