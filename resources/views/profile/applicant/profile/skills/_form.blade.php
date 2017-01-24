<div class="form-group">
  <label for="skill_name" class="col-md-3 control-label">
    Skill
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="skill_name"
           id="skill_name" value="{{ $skill_name }}" placeholder="C/C++, Economics,...">
  </div>
</div>

@if($level != 'NULL')

<div class="form-group">
  <label for="level" class="col-md-3 control-label">
    Actual Level
  </label>
  <div class="col-md-8">
  <h4><span class="label label-info">{{ $level }}</span></h4>
  </div>
</div>
@endif

<div class="form-group">
  <label for="skill_name" class="col-md-3 control-label">
    Level
  </label>
<div class="row col-md-8">
	<label class="radio-inline  control-label text">
		<input type="radio" name="level" value="beginner" @if($level == 'beginner')checked="checked"@endif><strong>Beginner</strong>
	</label>
						
	<label class="radio-inline  control-label text">
		<input type="radio" name="level" value="intermediate" @if($level == 'intermediate')checked="checked"@endif><strong>Intermediate</strong>
	</label>
	
	<label class="radio-inline  control-label text">
		<input type="radio" name="level" value="advanced" @if($level == 'advanced')checked="checked"@endif><strong>Advanced</strong>
	</label>
</div>
</div>
