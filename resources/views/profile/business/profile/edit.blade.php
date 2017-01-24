@extends('profile.layout')
@section('content')

</br>
  <div class="container">
    <div class="row page-title-row">
		<div class="col-md-6">
			<h3>Profile <small>» Edit Profile</small></h3>
		</div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Profile Edit About Form</h3>
          </div>
          <div class="panel-body">
		  
            <form class="form-horizontal" role="form" method="POST"
                  action="/profile/business/profile/{{ $id }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="id" value="{{ $id }}">


              @include('profile.business.profile._form')

              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button type="submit" class="btn btn-success btn-md">
                    <i class="fa fa-save"></i>
                      Save Changes
                  </button>
				<a href="/profile/business/profile" style="margin-left:7px;">
					<i class="fa fa-undo"></i> Go Back
				</a>
					
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>


@stop