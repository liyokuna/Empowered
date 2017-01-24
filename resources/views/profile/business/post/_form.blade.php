<div class="form-group">
  <label for="title" class="col-md-3 control-label">
    Title
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="title"
           id="title" value="{{ $title }}">
  </div>
</div>

<div class="form-group">
  <label for="description" class="col-md-3 control-label">
    Description
  </label>
  <div class="col-md-8">
    <textarea class="form-control" id="description"
              name="description" rows="5">{{
      $description
    }}</textarea>
  </div>
</div>

<div class="form-group">
  <label for="beginning" class="col-md-3 control-label">
    Beginning Date
  </label>
  <div class="col-md-8">
    <input type="date" class="form-control" name="beginning"
           id="beginning" value="{{ $beginning }}">
  </div>
</div>

<div class="form-group">
  <label for="ending" class="col-md-3 control-label">
    Ending Date
  </label>
  <div class="col-md-8">
    <input type="date" class="form-control" name="ending"
           id="ending" value="{{ $ending }}">
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
  <label for="status" class="col-md-3 control-label">
    Status
  </label>
<div class="row col-md-8">
	<label class="radio-inline control-label text">
		<input type="radio" name="status" value="pending" @if($status == 'pending')checked="checked"@endif><strong>Pending</strong>
	</label>
						
	<label class="radio-inline  control-label text">
		<input type="radio" name="status" value="taken" @if($status == 'taken')checked="checked"@endif><strong>Taken</strong>
	</label>
</div>
</div>