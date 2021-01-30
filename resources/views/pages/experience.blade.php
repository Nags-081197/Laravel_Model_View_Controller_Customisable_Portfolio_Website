@if((session()->has('username')))

<!DOCTYPE html>
<html>
<head>
	<title>Nagashekar Ananda Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equi="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../storage/css/experience.css">
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
							
						<li><a href="/aboutme">ABOUT ME</a></li>
							
						<li><a href="/skills">SKILLS</a></li>
							
						<li><a href="/portfoliopage">PORTFOLIO</a></li>
							
						<li><a class="current" href="/experience">EXPERIENCE</a></li>
							
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
				
				<div class="main-block-experience">

					<div class="top-above">
						<h1>EXPERIENCE</h1>
					</div>
					<div class="top-below">

					<div class="timeline">

					@for ($i=count($experience_array)-1; $i >-1; $i--)
					

					

                    @if($i%2!=0)
					  	  <div class="container1 left" valuee="{{$experience_array[$i]['year']}}">
					    <div class="content" >
					      <h2>{{$experience_array[$i]['title'] }}</h2>
					      <p>{{$experience_array[$i]['content'] }}</p>
					    </div>
					  </div> 

					 
                      @endif


                      
                      @if($i%2===0)

						<div class="container2 right" valuee="{{$experience_array[$i]['year']}}">
					    <div class="content" >
					      <h2>{{$experience_array[$i]['title']}}</h2>
					      <p>
					      	{{$experience_array[$i]['content'] }}  
					      </p>
					    </div>
					  </div>

					 
					 
					@endif  

				@endfor

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