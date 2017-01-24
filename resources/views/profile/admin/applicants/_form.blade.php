<div class="form-group">
  <label for="name" class="col-md-3 control-label">
    Name
  </label>
  <div class="col-md-8">
    <span class="label label-info">{{$name}}</span>
	<input type="hidden" class="form-control" name="name"
           id="name" value="{{$name}}">
  </div>
</div>

<div class="form-group">
  <label for="email" class="col-md-3 control-label">
    Email
  </label>
  <div class="col-md-8">
<span class="label label-info">{{$email}}</span>
	<input type="hidden" class="form-control" name="email"
           id="email" value="{{$email}}">
  </div>
</div>

<div class="form-group">
  <label for="email" class="col-md-3 control-label">
    Status
  </label>
  <div class="col-md-8">
<span class="label label-info">@if($bearer =='AP') Applicants @endif</span>
	<input type="hidden" class="form-control" name="bearer"
           id="bearer" value="{{$bearer}}">
  </div>
</div>

<div class="form-group">
  <label for="email" class="col-md-3 control-label">
    Authorization Actual
  </label>
  <div class="col-md-8">
<span class="label label-info">{{$status}}</span>
  </div>
</div>

<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
						
	<label class="radio-inline col-md-4 control-label text">
		<input type="radio" name="status" value="NO" @if($status=='NO') checked="checked"@endif><strong>NO</strong>
	</label>
						
	<label class="radio-inline col-md-3 control-label text">
		<input type="radio" name="status" value="YES" @if($status=='YES') checked="checked"@endif><strong>YES</strong>
	</label>
							
	@if ($errors->has('status'))
        <span class="help-block">
            <strong>{{ $errors->first('status') }}</strong>
        </span>
    @endif		
</div>