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

<div class="form-group">
  <label for="email" class="col-md-3 control-label">
    Password
  </label>
  <div class="col-md-8 ">
    <a href="/profile/business/settings/password/{{$id}}/edit"
	class="btn btn-xs btn-danger">
	<i class="fa fa-edit"></i> Password
	</a>
  </div>
</div>