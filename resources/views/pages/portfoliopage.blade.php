@if((session()->has('username')))

<!DOCTYPE html>
<html>
<head>
	<title>Nagashekar Ananda Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equi="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../storage/css/portfoliopage.css">
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
							
						<li><a class="current" href="/portfoliopage">PORTFOLIO</a></li>
							
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
				
				<div class="main-block-portfoliopage">
					<div class="PTop">
								<h1>PORTFOLIO</h1>
					</div>
					<div class="PBottom">		
						<div class="PBottomT"><a href="/portfoliopage"><p>ALL WEBSITES APPS DESIGN PHOTOGRAPHY</p></a></div>
					
						<div class="PBottomB">
						<div class="main-left">

							@for ($i=0; $i <count($portfoliopage_array) ; $i++)

							<div><img src="{{$portfoliopage_array[$i]['portfolio_image'] }}" class="portphoto" alt="icon"></div>

							@endfor 

						</div>
						
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