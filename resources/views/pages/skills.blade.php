@if((session()->has('username')))

<!DOCTYPE html>
<html>
<head>
	<title>Nagashekar Ananda Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equi="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../storage/css/skills.css">
	<script src="../storage/js/CircleChart.js" type="application/javascript"></script>
	<link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
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
							
						<li><a class="current" href="/skills">SKILLS</a></li>
							
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
				
				<div class="main-block-skills">
					<div class="STop">
								<h1>SKILLS</h1>
							</div>

							<div class="SMiddle">
								<div class="SMiddleL">
									<h3>Marketable skills</h3>
									<div class="skillcontainer">
										<p><img src="{{$skills_array[0]['skills_photo']}}" class="Sicon" alt="icon">{{$skills_array[0]['skills_name']}}</p>
										<p>{{$skills_array[0]['skills_percent']}}%</p>
											<div class="skill">
												<div class="skill_level11"></div>
											</div>
									
									</div>	
									
									<div class="skillcontainer">
										<p><img src="{{$skills_array[1]['skills_photo']}}" class="Sicon" alt="icon">{{$skills_array[1]['skills_name']}}</p>
										<p>{{$skills_array[1]['skills_percent']}}%</p>
											<div class="skill">
												<div class="skill_level12"></div>
											</div>
									
									</div>
									
									<div class="skillcontainer">
										<p><img src="{{$skills_array[2]['skills_photo']}}" class="Sicon" alt="icon">{{$skills_array[2]['skills_name']}}</p>
										<p>{{$skills_array[2]['skills_percent']}}%</p>
											<div class="skill">
												<div class="skill_level13"></div>
											</div>
									
									</div>
								
									<div class="skillcontainer">
										<p><img src="{{$skills_array[3]['skills_photo']}}" class="Sicon" alt="icon">{{$skills_array[3]['skills_name']}}</p>
										<p>{{$skills_array[3]['skills_percent']}}%</p>
											<div class="skill">
												<div class="skill_level14"></div>
											</div>
									
									</div>
								</div>

								<div class="SMiddleR">
									<h3>Transferable skills</h3>
									<div class="skillcontainer">
										<p><img src="{{$skills_array[4]['skills_photo']}}" class="Sicon" alt="icon">{{$skills_array[4]['skills_name']}}</p>
										<p>{{$skills_array[4]['skills_percent']}}%</p>
											<div class="skill">
												<div class="skill_level21"></div>
											</div>
									
									</div>	
									
									<div class="skillcontainer">
										<p><img src="{{$skills_array[5]['skills_photo']}}" class="Sicon" alt="icon">{{$skills_array[5]['skills_name']}}</p>
										<p>{{$skills_array[5]['skills_percent']}}%</p>
											<div class="skill">
												<div class="skill_level22"></div>
											</div>
									
									</div>
									
									<div class="skillcontainer">
										<p><img src="{{$skills_array[6]['skills_photo']}}" class="Sicon" alt="icon">{{$skills_array[6]['skills_name']}}</p>
										<p>{{$skills_array[6]['skills_percent']}}%</p>
											<div class="skill">
												<div class="skill_level23"></div>
											</div>
									
									</div>
								
									<div class="skillcontainer">
										<p><img src="{{$skills_array[7]['skills_photo']}}" class="Sicon" alt="icon">{{$skills_array[7]['skills_name']}}</p>
										<p>{{$skills_array[7]['skills_percent']}}%</p>
											<div class="skill">
												<div class="skill_level24"></div>
											</div>
									
									</div>

							</div>
							
							</div>
							<div class="SBottom">
								<h3>LANGUAGES SKILLS & KNOWLEDGE</h3>
								<div class="gaugecontainer">
									<div class="leftB"><canvas id="CircleChart_1"></canvas>
										<p>{{$skills_array[8]['skills_name']}}</p>
									</div>

									<div class="middleB"><canvas id="CircleChart_2"></canvas>
										<p>{{$skills_array[9]['skills_name']}}</p>
									</div>
									
									<div class="rightB"><canvas id="CircleChart_3"></canvas>
										<p>{{$skills_array[10]['skills_name']}}</p>
									</div>
								</div>

								<div class="tothetop">
								<a href="#"><img src="../storage/images/arrowG.png" class="arrowhead" alt="arrow"></a>
								</div>
							</div>	

					
				</div>
		</div>		
			<footer>
				<p>Copyright &copy; Registered &reg; Nagashekar Ananda</p>
			</footer>	
	</div>

<script type="text/javascript">

         var chart1 = new CircleChart();
        chart1.init("CircleChart_1", {{$skills_array[8]['skills_percent']}});

        var chart2 = new CircleChart();
        // chart2.setColors('#e5eaf1', '#4c709d');
        chart2.init("CircleChart_2", {{$skills_array[9]['skills_percent']}});

        var chart3 = new CircleChart();
        chart3.init("CircleChart_3", {{$skills_array[10]['skills_percent']}});

        document.querySelector('.skill_level11').style.width = ('{{$skills_array[0]['skills_percent']}}'+'%');

        document.querySelector('.skill_level12').style.width = ('{{$skills_array[1]['skills_percent']}}'+'%');

        document.querySelector('.skill_level13').style.width = ('{{$skills_array[2]['skills_percent']}}'+'%');

        document.querySelector('.skill_level14').style.width = ('{{$skills_array[3]['skills_percent']}}'+'%');

        document.querySelector('.skill_level21').style.width = ('{{$skills_array[4]['skills_percent']}}'+'%');

        document.querySelector('.skill_level22').style.width = ('{{$skills_array[5]['skills_percent']}}'+'%');

        document.querySelector('.skill_level23').style.width = ('{{$skills_array[6]['skills_percent']}}'+'%');

        document.querySelector('.skill_level24').style.width = ('{{$skills_array[7]['skills_percent']}}'+'%');


</script>

</body> 
</html>

@else 

<script>window.location.href = "{{url('/')}}";</script>

@endif
