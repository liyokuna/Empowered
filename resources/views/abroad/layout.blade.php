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
}
.pure-menu-link,.copyright{
	color: #0f0b0c;
}

.text{
	font-family: Font-1;
	font-size:20px;
}
@font-face {
   font-family: Font-1;
   src: url(fonts/sansation_light.woff);
}
.image_map{
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
  
    .slideanim {visibility:hidden;}
.slide {
    /* The name of the animation */
    animation-name: slide;
    -webkit-animation-name: slide; 
    /* The duration of the animation */
    animation-duration: 1s; 
    -webkit-animation-duration: 1s;
    /* Make the element visible */
    visibility: visible; 
}


@keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    } 
}
@-webkit-keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    }
}
</style>

<script type="text/javascript">
			AmCharts.makeChart("map",{
					"type": "map",
					"addClassNames": true,
					"fontSize": 15,
					"color": "#FFFFFF",
					"projection": "equirectangular",
					"backgroundAlpha": 1,
					"backgroundColor": "rgba(80,80,80,1)",
					"dataProvider": {
						"map": "worldLow",
						"getAreasFromMap": true,

						"areas": [
							{
								"id": "AO",
								"title": "Angola",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "CA",
								"title": "Canada",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "CD",
								"title": "Democratic Republic of Congo",
								"color": "rgba(60,26,144,0.8)"
							},
							{
								"id": "CN",
								"title": "China",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "FR",
								"title": "France",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "GB",
								"title": "United Kingdom",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "IN",
								"title": "India",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "MA",
								"title": "Morocco",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "MZ",
								"title": "Mozambique",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "RW",
								"title": "Rwanda",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "SN",
								"title": "Senegal",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "US",
								"title": "United States",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "ZA",
								"title": "South Africa",
								"color": "rgba(75,216,181,0.8)"
							}
						],
						"lines": [
							{
								"arc": 0,
								"selectable": true,
								"color": "rgba(206,180,215,0.8)",
								"thickness": 3.5,
								"dashLength": 5.8,
								"longitudes": [
									22.4411,
									-83.9859
								],
								"latitudes": [
									-5.8378,
									37.2389
								],
								"arrow": "none",
								"arrowSize": 21
							},
							{
								"arc": 0,
								"selectable": true,
								"color": "rgba(206,180,215,0.8)",
								"thickness": 3.5,
								"dashLength": 5.8,
								"longitudes": [
									22.4411,
									-73.712
								],
								"latitudes": [
									-5.8378,
									50.7169
								],
								"arrow": "none",
								"arrowSize": 23.4
							},
							{
								"arc": 0,
								"selectable": true,
								"color": "rgba(206,180,215,0.8)",
								"thickness": 3.5,
								"dashLength": 5.8,
								"longitudes": [
									22.4411,
									2.6836
								],
								"latitudes": [
									-6.102,
									45.96
								],
								"arrow": "none",
								"arrowSize": 23.4
							},
							{
								"arc": 0,
								"selectable": true,
								"color": "rgba(206,180,215,0.8)",
								"thickness": 3.5,
								"dashLength": 5.8,
								"longitudes": [
									22.4411,
									78.0256
								],
								"latitudes": [
									-6.3663,
									23.4967
								],
								"arrow": "none",
								"arrowSize": 23.4
							},
							{
								"arc": 0,
								"selectable": true,
								"color": "rgba(206,180,215,0.8)",
								"thickness": 3.5,
								"dashLength": 5.8,
								"longitudes": [
									22.4411,
									22.968
								],
								"latitudes": [
									-6.3663,
									-29.6224
								],
								"arrow": "none",
								"arrowSize": 22.799999999999997
							}
						]
					},
					"balloon": {
						"horizontalPadding": 15,
						"borderAlpha": 0,
						"borderThickness": 1,
						"verticalPadding": 15
					},
					"areasSettings": {
						"color": "rgba(129,129,129,1)",
						"outlineColor": "rgba(80,80,80,1)",
						"rollOverOutlineColor": "rgba(80,80,80,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true,
						"unlistedAreasAlpha": 0,
						"unlistedAreasOutlineAlpha": 0
					},
					"imagesSettings": {
						"alpha": 1,
						"color": "rgba(129,129,129,1)",
						"outlineAlpha": 0,
						"rollOverOutlineAlpha": 0,
						"outlineColor": "rgba(80,80,80,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true
					},
					"linesSettings": {
						"color": "rgba(129,129,129,1)",
						"selectable": true,
						"rollOverBrightness": 20,
						"selectedBrightness": 20
					}
				});
</script>
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
		@include('abroad.partials.navbar')
		</div>
	</div>
</nav>
</br>
@yield('content')



@include('abroad.partials.footer')
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
</body>
</html>