
{{-- @if(count($home_array)>0)
    @foreach ($home_array as $home_arrays) --}}
                                                                                                                                                                                                                 
    
<!DOCTYPE html>
<html>
<head>
	<title>Nagashekar Ananda Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equi="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../storage/css/index.css">
	<script type="text/javascript" src="../storage/js/login.js"></script>
	<script type="text/javascript" src="../storage/js/validation.js"></script>
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
					
							
					
						<li><a class="current" href="/">HOME</a></li>
							
						<li><a href="/aboutme">ABOUT ME</a></li>
							
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
				
				<div class="main-block-home" style="background-image:url({{$home_array[0]['home_background']}});" >

					<div class="hello">
                        {{-- <h1>{{$home_arrays->home_message}}</h1> --}}
                        <h1>{{$home_array[0]['home_message']}}</h1>
                        
					</div>
					<div class=nags>
					    <h1>	{{$home_array[0]['home_name']}}</h1>
					</div>
					<div> 
						<a class="downloadcv" href="{{$home_array[0]['home_download_link']}}" target="_blank" download="{{$home_array[0]['home_download_link']}}" ><button class="button">Download My CV</button></a>
					</div> 
					<div class="dummy"></div>
					<div class="tothetop">

						<a href="#"><img src="/storage/images/arrow_white.png" class="arrowhead" alt="arrow"></a> 
					</div>					
				</div>
		</div>		
			
		<div class="bg-modal-login">

				<form action="{{route('customlogin')}}" method="POST" class="login-content" name="logincontent">
                    {{ csrf_field()}}
					<div class="close">+</div>
					<div class="login-label">
						<label>
							Log in 
						</label>
					</div>

                    @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="form-status">
                            {{$error}}
                        </div>
                    @endforeach    
                @endif
                
                @if(session('Lstatus'))
                    <div class="form-status">
                        {{session('Lstatus')}}
                    </div>
                @endif

					<div class="user-name">
						<label>User</label>
						<input type="text" name="Lusername" pattern="[A-Za-z0-9]{1,}" title="Enter Valid Username - Min 3 Alphanumeric characters only " oninput="Lusernamecheck()" required>
						<div id="err_Lusername"></div>
					</div>
					
					<div class="pass-word"> 
						<label>Password</label>
						<input type="password" name="Lpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*]).{6,}" title="Must contain at least one number, one uppercase, lowercase letters, one special character, and at least 6 or more characters" oninput="Lpasswordcheck()" required>
						<div id="err_Lpassword"></div>
                    </div>
                    

					
					
					<div class="DButtons">
					<a href="#" class="Fclose"><button type="button">Close</button></a>
					
					<button type="submit" value="Submit" name="getin" class="getin">Get in</button> 

				</div>
				</form>	
		</div>

		<div class="bg-modal-signup">
        <form action="{{route('customregister')}}" method="POST" class="signup-content" name="signupcontent" >
                {{ csrf_field()}}
							<div class="close-cross">+</div>

								<div class="signup-label">
									<label>
										Check in 
									</label>
								</div>
                                
                                @if(count($errors) > 0)
                                    @foreach($errors->all() as $error)
                                        <div class="form-status">
                                            {{$error}}
                                        </div>
                                    @endforeach    
                                @endif
                                
                                @if(session('Sstatus'))
                                    <div class="form-status">
                                        {{session('Sstatus')}}
                                    </div>
                                @endif
                                
								<div class="user-name">
									<label>First Name</label>
                                <input type="text" name="first_name" value="{{old('first_name')}}"  pattern="[A-Za-z]{1,}" title="Enter Valid Name - Alphabets only"  oninput="firstnamecheck()" required>
									<div id="err_first_name"></div>
								</div>
								

								<div class="pass-word"> 
									<label>Last Name</label>
									<input type="text" name="last_name" value="{{old('last_name')}}"  pattern="[A-Za-z]{1,}" title="Enter Valid Name - Alphabets only"  oninput="lastnamecheck()" required>
									<div id="err_last_name"></div>
								</div>
								

								<div class="pass-word"> 
									<label>Email</label>
									<input class="forminput" type="text" name="email" value="{{old('email')}}"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter Valid Email - All lowercase & Alphanumeric - something@something.domain"  oninput="emailcheck()" required>
									<div id="err_email"></div>
								</div>
								

								<div class="pass-word"> 
									<label>Username</label>
									<input type="text" name="username" pattern="[A-Za-z0-9]{3,}" title="Enter Valid Username - Min 3 Alphanumeric characters only "  oninput="Usernamecheck1()" required>
									<div id="err_username"></div>
								</div>
								

								<div class="pass-word"> 
									<label>Password</label>
									<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*]).{6,}" title="Must contain at least one number, one uppercase, lowercase letters, one special character, and at least 6 or more characters"  oninput="passwordcheck()" required>
									<div id="err_password"></div>
								</div>
								

								<div class="pass-word"> 
									<label>Repeat Password</label>
									<input type="password" name="re_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*]).{6,}" title="Must contain at least one number, one uppercase, lowercase letters, one special character, and at least 6 or more characters"  oninput="repasswordcheck()" required>
									<div id="err_re_password"></div>
								</div>
                                
                                <input name="account_type" value="nonadmin" class="hide" >

								<div class="DButtons">
								<a href="#" class="Fclose-signup"><button type="button">Close</button></a>
								
								<button type="submit" value="Submit" class="getin" name="save">Save</button> 
							</div>
			</form>

			
		</div>


			<footer>
				<p>Copyright &copy; Registered &reg; Nagashekar Ananda</p>
			</footer>


		</div>


<!-- </div> -->
</body> 
</html>


    {{-- @endforeach --}}
{{-- @endif --}}