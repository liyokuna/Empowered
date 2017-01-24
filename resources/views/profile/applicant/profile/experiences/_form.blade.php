<div class="form-group">
  <label for="business_name" class="col-md-3 control-label">
    Business name
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="business_name"
           id="business_name" value="{{ $business_name }}" placeholder="Google">
  </div>
</div>

<div class="form-group">
  <label for="mission_name" class="col-md-3 control-label">
    Mission name
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="mission_name"
           id="mission_name" value="{{ $mission_name }}" placeholder="Maitain Web Sites">
  </div>
</div>

<div class="form-group">
  <label for="field" class="col-md-3 control-label">
    Field
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="field"
           id="field" value="{{ $field }}" placeholder="Web Development or NULL">
  </div>
</div>

<div class="form-group">
  <label for="month_beginning" class="col-md-3 control-label">
    Beginning Month
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="month_beginning"
        id="month_beginning"   value="{{ $month_beginning }}" placeholder="03">
  </div>
</div>

<div class="form-group">
  <label for="year_beginning" class="col-md-3 control-label">
    Beginnig year
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="year_beginning"
        id="year_beginning"  value="{{ $year_beginning }}" placeholder="2015">
  </div>
</div>

<div class="form-group">
  <label for="month_ending" class="col-md-3 control-label">
    Ending Month
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="month_ending"
        id="month_ending"   value="{{ $month_ending }}" placeholder="03">
  </div>
</div>

<div class="form-group">
  <label for="year_ending" class="col-md-3 control-label">
    Ending year
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="year_ending"
        id="year_ending"  value="{{ $year_ending }}" placeholder="2016">
  </div>
</div>

<div class="form-group">
  <label for="description" class="col-md-3 control-label">
    Description
  </label>
  <div class="col-md-8">
    <textarea type="text" class="form-control" name="description"
			id="description"  rows="5" placeholder="Decribe the main and important tasks">{{
      $description
    }}</textarea>
  </div>
</div>

<div class="form-group">
  <label for="additionnal" class="col-md-3 control-label">
    Additional
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="additionnal"
        id="additionnal"   value="{{ $additionnal }}" placeholder="web site link, or NULL">
  </div>
</div>

<div class="form-group">
  <label for="city" class="col-md-3 control-label">
    City
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="city"
        id="city"  value="{{ $city }}" placeholder="Buffalo">
  </div>
</div>
<div class="form-group">
  <label for="country" class="col-md-3 control-label">
    Country
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="country"
        id="country"  value="{{ $country }}" placeholder="USA">
  </div>
</div>