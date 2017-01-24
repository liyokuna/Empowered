<div class="form-group">
  <label for="name" class="col-md-3 control-label">
    Business name
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="name"
           id="name" value="{{ $name }}">
  </div>
</div>

<div class="form-group">
  <label for="filed" class="col-md-3 control-label">
    Fields
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="fields"
           id="fields" value="{{ $fields }}">
  </div>
</div>

<div class="form-group">
  <label for="description" class="col-md-3 control-label">
    Description
  </label>
  <div class="col-md-8">
    <textarea type="text" class="form-control" name="description"
			id="description"  rows="5">{{
      $description
    }}</textarea>
  </div>
</div>

<div class="form-group">
  <label for="number" class="col-md-3 control-label">
    Street Number
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="number"
           id="number" value="{{ $number }}">
  </div>
</div>

<div class="form-group">
  <label for="street" class="col-md-3 control-label">
    Street
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="street"
           id="street" value="{{ $street }}">
  </div>
</div>

<div class="form-group">
  <label for="city" class="col-md-3 control-label">
    City
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="city"
           id="city" value="{{ $city }}">
  </div>
</div>

<div class="form-group">
  <label for="country" class="col-md-3 control-label">
    Country
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="country"
           id="country" value="{{ $country }}">
  </div>
</div>

<div class="form-group">
  <label for="facebook" class="col-md-3 control-label">
    Facebook
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="facebook"
           id="facebook" value="{{ $facebook }}" placeholder="username">
  </div>
</div>

<div class="form-group">
  <label for="twitter" class="col-md-3 control-label">
    Twitter
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="twitter"
           id="twitter" value="{{ $twitter }}" placeholder="username">
  </div>
</div>

<div class="form-group">
  <label for="linkedin" class="col-md-3 control-label">
    Linkedin
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="linkedin"
           id="linkedin" value="{{ $linkedin }}" placeholder="username">
  </div>
</div>

<div class="form-group">
  <label for="website" class="col-md-3 control-label">
    WebSite
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="website"
           id="website" value="{{ $website }}" placeholder="example.org">
  </div>
</div>

<div class="form-group">
  <label for="phone" class="col-md-3 control-label">
    Phone Number
  </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="phone"
           id="phone" value="{{ $phone }}" placeholder="+243 xxx-xxx-xx">
  </div>
</div>
