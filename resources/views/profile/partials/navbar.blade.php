	
    <ul class="nav navbar-nav">
		@if (Auth::guest())
			<li><a href="/home">Home</a></li>
		@endif
		@if (Auth::check() && Auth::user()->status=="BU")
			<li><a href="/profile/business/profile">Profile</a></li>
			<li><a href="/profile/business/dashboard">Dashboard</a></li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-pencil" ></span> Edit
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" >
					<li><a href="/profile/business/backgrounds"><span class="glyphicon glyphicon-arrow-right" ></span> Backgrounds</a></li>
					<li><a href="/profile/business/skills"><span class="glyphicon glyphicon-arrow-right" ></span> Skills</a></li>
					<li><a href="/profile/business/post"><span class="glyphicon glyphicon-arrow-right" ></span> Annoucements</a></li>
				</ul>
			</li>
		@endif
		
		@if (Auth::check() && Auth::user()->status=="AP")
			
			<li><a href="/profile/applicant/profile">Profile</a></li>
			<li><a href="/profile/applicant/posts">Opportunities</a></li>
			<li><a href="/profile/applicant/list">My Applications</a></li>
		
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-pencil" ></span> Edit
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" >
					<li><a href="/profile/applicant/profile/infos"><span class="glyphicon glyphicon-arrow-right" ></span> Description</a></li>
					<li><a href="/profile/applicant/profile/backgrounds"><span class="glyphicon glyphicon-arrow-right" ></span> Backgrounds</a></li>
					<li><a href="/profile/applicant/profile/experiences"><span class="glyphicon glyphicon-arrow-right" ></span> Experiences</a></li>
					<li><a href="/profile/applicant/profile/skills"><span class="glyphicon glyphicon-arrow-right" ></span> Skills</a></li>
				</ul>
			</li>
		@endif
		
		@if (Auth::check() && Auth::user()->status=="AD")
			
			<li><a href="/profile/admin/stats">Statistics</a></li>
			<li><a href="/profile/admin/business">Business</a></li>
			<li><a href="/profile/admin/applicants">Applicants</a></li>
		
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-pencil" ></span> Edit
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" >
					<li><a href="/profile/admin/users"><span class="glyphicon glyphicon-arrow-right" ></span> Users</a></li>
					
				</ul>
			</li>
		@endif
    </ul>
	
    <ul class="nav navbar-nav navbar-right">

		<li class="dropdown">
		@if (Auth::check() && Auth::user()->status=="AP")
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-user" ></span> {{ Auth::user()->name }}
					<span class="caret"></span>
				</a>
			<ul class="dropdown-menu" >
				<li><a href="/auth/linkedin"><img alt="brand" src="{{URL::asset('/pictures/Linkedin-48.png')}}" style="width:16.5px;height:16px;margin-left:-2px"><span></span> Linkedin</a></li>
				<li><a href="/profile/applicant/profile/settings"><span class="glyphicon glyphicon-cog" ></span> Settings</a></li>
				<li><a href="/auth/logout"><span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>
			</ul>
		@endif
		</li>
		
		<li class="dropdown">
		@if (Auth::check() && Auth::user()->status=="BU")
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-user" ></span> {{ Auth::user()->name }}
					<span class="caret"></span>
				</a>
			<ul class="dropdown-menu" >
				<li><a href="/profile/business/settings"><span class="glyphicon glyphicon-cog" ></span> Settings</a></li>
				<li><a href="/auth/logout"><span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>
			</ul>
		@endif
		</li>
		
		<li class="dropdown">
		@if (Auth::check() && Auth::user()->status=="AD")
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-user" ></span> {{ Auth::user()->name }}
					<span class="caret"></span>
				</a>
			<ul class="dropdown-menu" >
				<li><a href="/profile/admin/settings"><span class="glyphicon glyphicon-cog" ></span> Settings</a></li>
				<li><a href="/auth/logout"><span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>
			</ul>
		@endif
		</li>
		
    </ul>