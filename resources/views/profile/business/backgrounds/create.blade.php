@extends('profile.layout')
@section('content')
</br>
<div class="container">
    <div class="row page-title-row">
		<div class="col-md-6">
			<h3>Internship <small>» Add a new Background</small></h3>
		</div>
    </div>
</div>
<br>
<div class="container" style="margin-bottom:3px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">New Background Form</h3>
          </div>
          <div class="panel-body">

			
            <form class="form-horizontal" role="form" method="POST"
                  action="/profile/business/backgrounds">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<div class="form-group">
				<label for="id_post" class="col-md-3 control-label">Internship List</label>
				<div class="col-md-8">
					<select class="form-control" id="id_post" name="id_post">
					@foreach( $infos_post as $info_post )
						<option value="{{ $info_post->id }}">{{ $info_post->title }}</option>
					@endforeach
					</select>
				</div>
			</div>
			
            @include('profile.business.backgrounds._formcustom')
			
			
              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button type="submit" class="btn btn-primary btn-md">
                    <i class="fa fa-plus-circle"></i>
						Create
                  </button>
				  <i class="fa fa-undo" style="margin-left:7px;"></i><a href="/profile/business/backgrounds" >
					 Go Back
				</a>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
<br>
@stop