@if((session()->has('username')))

<!DOCTYPE html>
<html>
<head>
	<title>Nagashekar Ananda Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equi="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../storage/css/contact.css">
	<script type="text/javascript" src="../storage/js/validation.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<!--Header Showcase -->
	<div id="wrapper">
		<div class="header"></div>	
			<div class="main-block">	
				<nav class="main-nav">
								
					<ul>
					
						<li><a href="/"><img src="../storage/images/logo.png" class="logo" alt="logo"></a></li> 	
						
						<li><p id="myname">Nagashekar Ananda</p></li> 
					
							
					
						<li><a href="/">HOME</a></li>
							
						<li><a href="/aboutme">ABOUT ME</a></li>
							
						<li><a href="/skills">SKILLS</a></li>
							
						<li><a href="/portfoliopage">PORTFOLIO</a></li>
							
						<li><a href="/experience">EXPERIENCE</a></li>
							
						<li><a href="/blog" onclick="window.open('http://nagashekarananda.uta.cloud');">BLOG</a></li>
							
						<li><a href="/hireme">HIRE ME</a></li>
							
						<li><a class="current" href="/contact">CONTACT</a></li>
							
						
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
				
				<div class="main-block-contactme">
					<div class="CTop">
						<h1>CONTACT ME</h1>
					</div>

					<div class="CBottom">
						<div class="CBottomL">
							<h3>CONTACT ADDRESS</h3>
							<ul>
								<li><img src="{{$contact_array[0]['location_photo']}}" class="Cicon" alt="icon"> Address :{{$contact_array[0]['location_content']}}</li>
								<li><img src="{{$contact_array[0]['phone_photo']}}" class="Cicon" alt="icon"> Phone :{{$contact_array[0]['phone_content']}}</li>
								<li><img src="{{$contact_array[0]['whatsapp_photo']}}" class="Cicon" alt="icon">	Whatsapp :{{$contact_array[0]['whatsapp_content']}}</li>
								<li><img src="{{$contact_array[0]['skype_photo']}}" class="Cicon" alt="icon"> Skype :{{$contact_array[0]['skype_content']}}</li>
								<li><img src="{{$contact_array[0]['email_photo']}}" class="Cicon" alt="icon">Email :{{$contact_array[0]['email_content']}}</li>
								<li><img src="{{$contact_array[0]['website_photo']}}" class="Cicon" alt="icon"> Website :{{$contact_array[0]['website_content']}}</li>
								<li><div class="socialmedia1">
								<label> Social Profile : </label>
								<span>	<a href="{{$contact_array[0]['socialfb_link']}}" target="_blank"> <img src="{{$contact_array[0]['socialfb_photo']}}" class="socialprofiles1" alt="icon"> </a></span>
								<span>	<a href="{{$contact_array[0]['socialig_link']}}" target="_blank"> <img src="{{$contact_array[0]['socialig_photo']}}" class="socialprofiles1" alt="icon"> </a></span>
								<span>	<a href="{{$contact_array[0]['socialtw_link']}}" target="_blank"> <img src="{{$contact_array[0]['socialtw_photo']}}" class="socialprofiles1" alt="icon"> </a></span>
								<span>	<a href="{{$contact_array[0]['socialin_link']}}" target="_blank"> <img src="{{$contact_array[0]['socialin_photo']}}" class="socialprofiles1" alt="icon"> </a></span>
							</div></li>	
							</ul>
							
							
							
						</div>
					<div class="CBottomR">
						<h3>HIT ME UP !!</h3>
						
					<form action="{{route('hitmeup')}}" method="POST" class="hitmeup-content" id="hitmeup-content" name="hitmeupcontent">

						{{ csrf_field()}}

						@if(session('Cstatus'))
							<div class="form-status">
								{{session('Cstatus')}}
							</div>
                		@endif
						  
						  @if(count($errors) > 0)
						  @foreach($errors->all() as $error)
							  <div class="form-status">
								  {{$error}}
							  </div>
						  @endforeach    
					  @endif

						<div><input  class="forminput" type="text" name="your_name" placeholder="First Name " pattern="[A-Za-z]{1,}" title="Enter Valid Name - Alphabets only" oninput="cfirstnamecheck()" required >
						<div id="err_cfirst_name"></div>
						</div>

						<div>
						<input class="forminput" type="text" name="email" placeholder= "Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter Valid Email - something@something.domain" oninput="cemailcheck()" required>
						<div id="err_cemail"></div>
						</div>


						<div>
						<input class="forminput" type="type" name="phone_no" placeholder=" Phone No. "  pattern="[0-9]{10}" title="Enter Valid Phone number - 10 digits" oninput="phonenumbercheck()" required=>
						<div id="err_phone"></div>
						</div>

						<div>
						<textarea class="forminput" type="" name="your_message" placeholder=" Your Message " required></textarea>
						</div>
						<input class="Cbutton" type="submit" name="SUBMIT" value="Submit">
					</form>
					</div>

				</div>
			<div class="tothetop">
									<a href="#"><img src="../storage/images/arrowG.png" class="arrowhead" alt="arrow"></a>
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