
<div class="form-group">
  <label for="name" class="col-md-3 control-label">
    Name
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="name"
           id="name" value="{{ $name }}">
  </div>
</div>

<div class="form-group">
  <label for="email" class="col-md-3 control-label">
    Email
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="email"
           id="email" value="{{ $email }}">
  </div>
</div>

<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
						
	<label class="radio-inline col-md-5 control-label text">
		<input type="radio" name="status" value="AP" @if($status=='AP') checked="checked"@endif><strong>Individual</strong>
	</label>
						
	<label class="radio-inline col-md-3 control-label text">
		<input type="radio" name="status" value="BU" @if($status=='BU') checked="checked"@endif><strong>Business</strong>
	</label>
	
	<label class="radio-inline col-md-3 control-label text">
		<input type="radio" name="status" value="AD" @if($status=='AD') checked="checked"@endif><strong>Administrator</strong>
	</label>	
</div>