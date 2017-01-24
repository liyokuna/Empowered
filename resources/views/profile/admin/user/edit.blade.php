@extends('profile.layout')
@section('content')
<br>

  <div class="container">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>Credentials <small>» Edit Credentials</small></h3>
      </div>
    </div>
</div>
<br>
<div class="container" style="margin-bottom:3px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Credentials Edit Form</h3>
          </div>
          <div class="panel-body">


            <form class="form-horizontal" method="POST"
                  action="/profile/admin/users/{{$id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="id" value="{{ $id }}">

              @include('profile.admin.user._form')

              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button type="submit" class="btn btn-primary btn-md">
                    <i class="fa fa-save"></i>
                      Save Changes
                  </button>

				<button type="button" class="btn btn-danger btn-md"
                          data-toggle="modal" data-target="#modal-delete">
						<i class="fa fa-times-circle"></i>
						Delete
                </button>
				
				<i class="fa fa-undo" style="margin-left:7px;"></i><a href="/profile/admin/users" >
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
 
 {{-- Confirm Delete --}}
  <div class="modal fade" id="modal-delete" tabIndex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            ×
          </button>
          <h4 class="modal-title">Please Confirm</h4>
        </div>
        <div class="modal-body">
          <p class="lead">
            <i class="fa fa-question-circle fa-lg"></i>  
            Are you sure you want to delete this skill?
          </p>
        </div>
        <div class="modal-footer">
          <form method="POST" action="/profile/admin/users/{{ $id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="DELETE">
            <button type="button" class="btn btn-default"
                    data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">
              <i class="fa fa-times-circle"></i> Yes
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

 <br>
@stop