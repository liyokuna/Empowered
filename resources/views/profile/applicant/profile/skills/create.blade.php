@extends('profile.layout')
@section('content')
</br>
<div class="container">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>Tell us about your skill </h3>
      </div>
    </div>
<br>
<div class="container" style="margin-bottom:3px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">New Skill Form</h3>
          </div>
          <div class="panel-body">

			
            <form class="form-horizontal" role="form" method="POST"
                  action="/profile/applicant/profile/skills">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

            @include('profile.applicant.profile.skills._form')

              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button type="submit" class="btn btn-primary btn-md">
                    <i class="fa fa-plus-circle"></i>
						Create
                  </button>
				  <i class="fa fa-undo" style="margin-left:7px;"></i><a href="/profile/applicant/profile/skills" >
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