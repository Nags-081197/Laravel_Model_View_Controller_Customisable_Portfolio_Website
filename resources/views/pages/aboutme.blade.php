@if((session()->has('username')))

<!DOCTYPE html>
<html>
<head>
	<title>Nagashekar Ananda Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equi="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../storage/css/aboutme.css">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<!--Header Showcase -->
	<div id="wrapper">
		<div class="header">
						</div>	
			<div class="main-block">	
				<nav class="main-nav">
								
						
					<ul>
					
						<li><a href="/"><img src="../storage/images/logo.png" class="logo" alt="logo"></a></li> 	
						
						<li><p id="myname">Nagashekar Ananda</p></li> 
					
							
					
						<li><a href="/">HOME</a></li>
							
						<li><a class="current" href="/aboutme">ABOUT ME</a></li>
							
						<li><a href="/skills">SKILLS</a></li>
							
						<li><a href="/portfoliopage">PORTFOLIO</a></li>
							
						<li><a href="/experience">EXPERIENCE</a></li>
							
						<li><a href="/blog" onclick="window.open('http://nagashekarananda.uta.cloud');">BLOG</a></li>
							
						<li><a href="/hireme">HIRE ME</a></li>
							
						<li><a href="/contact">CONTACT</a></li>
							
						
						@if (empty(session()->get('acc')))

						<li><a href="#" id="login-button">LOGIN</a></li>
							
						<li><a href="#" id="signup-button">SIGNUP</a></li>

						@endif

						@if((session()->get('acc')=="admin")&&(session()->get('acc')))

						<li><a href="/customize" id="customize-button">CUSTOMIZE</a></li>

						<li><a href="{{route('logout')}}" id="logout-button">LOGOUT</a></li>
							
						@endif

						@if((session()->get('acc')!="admin")&&(session()->get('acc')))

						<li><a href="{{route('logout')}}" id="logout-button">LOGOUT</a></li>

						<li>{{session()->get('username')}}</li>

						@endif
							
											

							
					</ul>
				


				</nav>
				
				<div class="main-block-aboutme">

					<div class="top-above">
						<h1>ABOUT ME</h1>
					</div>

					<div class="top-below">	
						<div class="TBleft">
							<img src="{{ $aboutme_array[0]['profile_photo']}}" class="photo" alt="My-photo">
							<p class="titlepos">{{$aboutme_array[0]['titlepos'] }}</p>
						</div>

						<div class="TBright">
							<div class="rightA">
								<div class="rightA1">
									<div class="rightA11">
									<ul>
										<li><img src="{{$aboutme_array[0]['portrait_photo'] }}" class="icon" alt="icon"></li>
										<li><img src="{{$aboutme_array[0]['phone_photo'] }}" class="icon" alt="icon"></li>
										<li><img src="{{ $aboutme_array[0]['location_photo'] }}"  class="icon" alt="icon"></li>
									</ul>	
									</div>
									<div class="rightA12">
									<ul>
										<li>Name</li>
										<li>{{$aboutme_array[0]['portrait_content'] }}</li>
										<br>
										<br>
										<li>Phone</li>
										<li>{{ $aboutme_array[0]['phone_content'] }}</li>
										<br>
										<br>
										<li>Location</li>
										<li>{{$aboutme_array[0]['location_content'] }}</li>
									</ul>
									</div>
								
								</div>
								<div class="rightA2">
									<div class="rightA21">
									<ul>
										<li><img src="{{$aboutme_array[0]['email_photo']}}"  class="emailicon" class="emailicon" alt="icon"></li>
										<li><img src="{{$aboutme_array[0]['calendar_photo']}}"  class="icon" alt="icon"></li>
										<li><img src="{{$aboutme_array[0]['flag_photo']}}" class="icon" alt="icon"></li>
									</ul>	
									</div>
									<div class="rightA22">
									<ul>
										<li>Email</li>
										<li>{{$aboutme_array[0]['email_content']}}</li>
										<br>
										<br>
										<li>Date of Birth</li>
										<li>{{$aboutme_array[0]['calendar_content']}}</li>
										<br>
										<br>
										<li>Nationality</li>
										<li>{{$aboutme_array[0]['flag_content']}}</li>
									</ul>
									</div>
								</div>
							</div>
						<div class="rightB">
							
							<div class="socialmedia">
								<label> Social Profile : </label>
								<span>	<a href="{{$aboutme_array[0]['socialfb_link']}}" target="_blank"> <img src="{{$aboutme_array[0]['socialfb_photo']}}" class="socialprofiles" alt="icon"> </a></span>
								<span>	<a href="{{$aboutme_array[0]['socialig_link']}}" target="_blank"> <img src="{{$aboutme_array[0]['socialig_photo']}}" class="socialprofiles" alt="icon"> </a></span>
								<span>	<a href="{{$aboutme_array[0]['socialtw_link']}}" target="_blank"> <img src="{{$aboutme_array[0]['socialtw_photo']}}" class="socialprofiles" alt="icon"> </a></span>
								<span>	<a href="{{$aboutme_array[0]['socialin_link']}}" target="_blank"> <img src="{{$aboutme_array[0]['socialin_photo']}}" class="socialprofiles" alt="icon"> </a></span>
							</div>
							<!-- <br> -->
							<p> {{$aboutme_array[0]['description_content']}} 

							</p>
							
							<div class="tothetop">
									<a href="#"><img src="../storage/images/arrowG.png" class="arrowhead" alt="arrow"></a>
							</div>
						</div>

				</div>
			</div>	
					</div>		
		</div>		
	<footer>
		<p>Copyright &copy; Registered &reg; Nagashekar Ananda</p>
	</footer>	
</div>

</body> 
</html>

@else 

<script>window.location.href = "{{url('/')}}";</script>

@endif


