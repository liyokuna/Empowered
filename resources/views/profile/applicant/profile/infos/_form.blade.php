<div class="form-group">
  <label for="name" class="col-md-3 control-label">
    About you
  </label>
  <div class="col-md-8">
    <textarea type="text" class="form-control" name="about_you"
			id="about_you"  rows="5" placeholder="Describe your self for potential employers">{{
      $about_you
    }}</textarea>
  </div>
</div>

<div class="form-group">
  <label for="filed" class="col-md-3 control-label">
    Position
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="position"
           id="position" value="{{ $position }}" placeholder="Student or Web designer ...">
  </div>
</div>

<div class="form-group">
  <label for="twitter" class="col-md-3 control-label">
    Personnal Website
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="website"
           id="website" value="{{ $website }}" placeholder="example.com">
  </div>
</div>

<div class="form-group">
  <label for="linkedin" class="col-md-3 control-label">
    Linkedin Username
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="linkedin"
        id="linkedin"   value="{{ $linkedin }}" placeholder="username">
  </div>
</div>

<div class="form-group">
  <label for="website" class="col-md-3 control-label">
    GitHub Username
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="github"
        id="github"  value="{{ $github }}" placeholder="username">
  </div>
</div>

