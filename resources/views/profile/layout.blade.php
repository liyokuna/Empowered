 <!DOCTYPE html>
 <html lang="en">
 
 <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="icon" href="{{ url('pictures/Connect-Develop-48.png') }}" type="image/png" />
	
	<title>Empowered</title>
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="/assets/css/admin.css" rel="stylesheet">-->
	<!-- Custom CSS -->
    <link href="/css/full-slider.css" rel="stylesheet">
	<link href="/css/profile_applicant.css" rel="stylesheet">
	<!--Latest compiled and minified CSS from PureCSS-->
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	@yield('styles')
	
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<!--<script src="/assets/js/admin.js"></script>-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/pie.js"></script>
	<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
	
	<!--[if lt IE9]>
	<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<style>
#usersStats, #internshipStats, #businessesStats,#applicantsStats {
	width		: 100%;
	height		: 500px;
	font-size	: 11px;
}							
body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8em;
    color: #fffff;
}
.bg-grey
{
	background-color: #666699;
}
.bg-color{
	background-color: #f2f2f2;
}
.bg-item{
	background-color: #e6ffff;
}
.container-fluid {
    margin-right: auto;
    margin-left: auto;
}
.navbar {
    font-size: 13.5px;
    letter-spacing: 2.5px;
    border-radius: 0;
	font-family: Montserrat, sans-serif;
}
.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #666699 !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}


.carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #666699;
}

.carousel-indicators li {
    border-color: #666699;
}

.carousel-indicators li.active {
    background-color: #666699;
}

.item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
}

.item span {
    font-style: normal;
}
.pure-menu-link, .copyright{
	color:#0f0b0c;
}
footer{
	margin-bottom: auto;
	margin-top:auto;
}
/*effects*/
#empowered-logo:hover,#talk:hover,#search:hover, #world-map:hover {
	font-family: Font-1;
	src: url(fonts/sansation_bold.woff);
	font-weight: bold;
}
#you:hover, #internship:hover, #trip:hover, #about:hover{
	font-family: Font-1;
	src: url(fonts/sansation_light.woff);
}

#empowered-logo, #talk, #search, #world-map {
	/*-webkit-transition: width 2s, height 2s; /* Safari */
    transition: width 2s, height 2s;
	-webkit-transition-timing-function: ease;*/
	font-family: Font-1;
}
@font-face {
   font-family: Font-1;
   src: url(/fonts/sansation_light.woff);
}
/*Modal credits*/
 .modal-header {
      background-color: #666699;
      color:0f0b0c !important;
      text-align: center;
	  font-family: Font-1;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #666699;
  }
  .modal-body{
	 font-family: Font-1; 
  }
  
  .logo {
    font-size: 200px;
}
@media screen and (max-width: 768px) {
    .col-sm-4 {
        text-align: center;
        margin: 25px 0;
    }
}
.text{
	font-family: Font-1;
	font-size: 20px;
}

.center{
	font-family: Font-1;
	position: absolute;
    left: 0;
    top: 25%;
    width: 100%;
    text-align: center;
    font-size: 20px;
	color:#4d4d4d;
}
#image_bg{
	/*position:relative;*/
	margin-bottom:auto;
	margin-left:auto;
	margin-right:auto;
}
/*effects*/
#facebook_logo:hover,#twitter_logo:hover, #linkedin_logo:hover, #github_logo:hover,#info_logo:hover {
	/*transition +transormation*/
	-webkit-transform:rotate(360deg); /*Safari*/
	transform: rotate(360deg)
}
#facebook_logo, #twitter_logo, #linkedin_logo, #github_logo, #info_logo {
	-webkit-transition: width 2s, height 2s, -webkit-transform:2s; /* Safari */
    transition: width 2s, height 2s,transform 2s;
	font-family: Font-1;
	
}
.centre{
	
	width:50%;
	top: 40%;
	left: 25%;
	position: absolute;
}
</style>
<body data-spy="scroll" data-target=".navbar">

{{-- Navigation Bar --}}

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" 
				data-toggle="collapse" data-target="#navbar-menu">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/home">
			<img alt="brand" src="{{URL::asset('/pictures/Connect-Develop-48.png')}}" style="width:35px;height:35px;margin-top:-8px">
			</a>
		</div>
		
		<div class="collapse navbar-collapse" id="navbar-menu">
		@include('profile.partials.navbar')
		</div>
	</div>
</nav>
<br>
@yield('content')


@include('profile.partials.footer')
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</body>
</html>