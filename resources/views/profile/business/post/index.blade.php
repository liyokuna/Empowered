@extends('profile.layout')

@section('content')
@if( $authorization->status =='NO')
<div id="image_bg">
	<img src="{{URL::asset('/pictures/waiting.jpg')}}" alt="waiting" class="img-responsive" style="width:100%; height:899px";>
		<div class="center" >
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4" style="margin-top:150px;">
						<a href="#">
							<i class="fa fa-search" style="font-size:48px;color:#666699;"></i> <p>Hello ! We are currently checking and viewing your information.</br>You can create opportunities soon.</br>The Team !</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@else
<br>
<div class="container">
@if (Session::has('success'))
    <div class="alert alert-info fade in">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>
            <i class="fa fa-check-circle fa-lg fa-fw"></i> &nbsp;
        </strong>
        {{ Session::get('success') }}
    </div>
@endif
</div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h3>Internship <small>» Listing</small></h3>
      </div>
      <div class="col-md-6 text-right">
        <a href="/profile/business/post/create" class="btn btn-success btn-md">
          <i class="fa fa-plus-circle"></i> New
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 table-responsive">

        <table id="tags-table" class="table table-striped table-hover table-condensed">
          <thead>
          <tr>
            <th>Title</th>
            <th class="hidden-md">Description</th>
            <th class="hidden-md">Beginning</th>
            <th class="hidden-md">Ending</th>
            <th class="hidden-md">Status</th>
            <th class="hidden-md">Date Updated</th>
            <th data-sortable="false">Date Created</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{ $post->title }}</td>
              <td class="hidden-sm">{{ $post->description }}</td>
              <td class="hidden-md">{{ $post->beginning }}</td>
              <td class="hidden-md">{{ $post->ending }}</td>
              <td class="hidden-md"> <span class="label label-info">{{ $post->status }}</span></td>
			  <td class="hidden-md">{{ $post->updated_at }}</td>
			  <td class="hidden-md">{{ $post->created_at }}</td>
              <td class="info">
                <a href="/profile/business/post/{{ $post->id }}/edit"
                   class="btn btn-xs btn-info">
                  <i class="fa fa-edit"></i> Edit
                </a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endif
@stop
