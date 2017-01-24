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
    <link href="css/full-slider.css" rel="stylesheet">
	<!--Latest compiled and minified CSS from PureCSS-->
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	@yield('styles')
	
	<!--<script src="/assets/js/admin.js"></script>-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- amCharts javascript sources -->
	<script type="text/javascript" src="https://www.amcharts.com/lib/3/ammap.js"></script>
	<script type="text/javascript" src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
	
	<!--[if lt IE9]>
	<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<style>
body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8em;
    color: #fffff;
}
.bg-grey
{
	background-color: #666699;
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

footer{
	margin-bottom: auto;
	margin-top:auto;
}
.pure-menu-link,.copyright{
	color: #0f0b0c;
}

/*effects*/
#individual:hover,#business:hover {
	/*transition +transormation*/
	-webkit-transform:rotate(360deg); /*Safari*/
	transform: rotate(360deg)
}
#T_individual:hover,#T_business:hover {
	font-family: Font-1;
	src: url(fonts/sansation_bold.woff);
	font-weight: bold;
	font-size:25px;
	/*transition +transormation*/
	-webkit-transform:rotate(360deg); /*Safari*/
	/*transform: rotate(360deg)*/
}
#individual, #business {
	-webkit-transition: width 2s, height 2s, -webkit-transform:2s; /* Safari */
    transition: width 2s, height 2s,transform 2s;
	font-family: Font-1;
	
}
@font-face {
   font-family: Font-1;
   src: url(fonts/sansation_light.woff);
}

/*centering*/

.center{
	font-family: Font-1;
	position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    font-size: 18px;
	color:#808080;
}

/*Images*/
#kin_night{
	width: 100%;
    height: auto;
}
#image_bg{
	/*position:relative;*/
	margin-bottom:auto;
	margin-left:auto;
	margin-right:auto;
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
  </style>
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
		@include('home.partials.navbar')
		</div>
	</div>
</nav>
</br>
@yield('content')



@include('home.partials.footer')
</body>
</html>