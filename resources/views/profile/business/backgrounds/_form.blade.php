
<div class="form-group">
  <label for="background" class="col-md-3 control-label">
    Background
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="background"
           id="background" value="{{ $background }}" placeholder="C/C++, Economics,...">
  </div>
</div>

@if($status != 'NULL')

<div class="form-group">
  <label for="status" class="col-md-3 control-label">
    Actual Status
  </label>
  <div class="col-md-8">
  <h4><span class="label label-info">{{ $status }}</span></h4>
  </div>
</div>
@endif

<div class="form-group">
  <label for="background_name" class="col-md-3 control-label">
    Status
  </label>
<div class="row col-md-8">
	<label class="radio-inline  control-label text">
		<input type="radio" name="status" value="preferred" @if($status == 'preferred')checked="checked"@endif><strong>Preferred</strong>
	</label>
						
	<label class="radio-inline  control-label text">
		<input type="radio" name="status" value="required" @if($status == 'required')checked="checked"@endif><strong>Required</strong>
	</label>
</div>
</div>
