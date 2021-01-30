
@if((session()->has('username'))&&(session()->get('acc')=="admin"))

<!DOCTYPE html>
<html>
<head>
	<title>Nagashekar Ananda Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equi="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../storage/css/customize.css">
	<script type="text/javascript" src="../storage/js/customize.js"></script>
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
							
						<li><a href="/experience">EXPERIENCE</a></li>
							
						<li><a href="/blog" onclick="window.open('http://nagashekarananda.uta.cloud');">BLOG</a></li>
							
						<li><a href="/hireme">HIRE ME</a></li>
							
						<li><a href="/contact">CONTACT</a></li>
							
						
						@if (empty(session()->get('acc')))

						<li><a href="#" id="login-button">LOGIN</a></li>
							
						<li><a href="#" id="signup-button">SIGNUP</a></li>

						@endif

						@if((session()->get('acc')=="admin")&&(session()->get('acc')))

						<li><a  class="current" href="/customize" id="customize-button">CUSTOMIZE</a></li>

						<li><a href="{{route('logout')}}" id="logout-button">LOGOUT</a></li>
							
						@endif

						@if((session()->get('acc')!="admin")&&(session()->get('acc')))

						<li><a href="{{route('logout')}}" id="logout-button">LOGOUT</a></li>

						<li>{{session()->get('username')}}</li>

						@endif
							
											

							
					</ul>
				
							

				</nav>
				
				<div class="main-block-customize">
				
				<div class="HTop">
					<h1>CUSTOMIZE</h1>
				</div>

					<div class="home">
						
					<div id="laaabel">	
						<button onclick="myFunctionI()">
								Homepage  
						</button>

					</div>


					<form method="POST" action="{{route('customizehomepageupdate')}}" id="formid_home" class="hide" enctype="multipart/form-data">
                    
                        {{ csrf_field()}}
                        
        			{{session('Hostatus')}}
      				
					<div class="user-name">
						<label>Backgroung Image</label>
						<img src="{{$home_array[0]['home_background']}}" class="Aprofilephoto" alt="My-photo">
						<label>Add New Background Image</label>
						<input type="file" name="home_background_file" class="photo_selection">
						
					</div>
					<div class="user-name">
						<label>Message</label>
						<input type="text" name="home_message" value="{{$home_array[0]['home_message']}}" >
					</div>
					<div class="user-name">
						<label>Full Name</label>
						<input type="text" name="home_name" value="{{$home_array[0]['home_name']}}">
					</div>

					<div class="user-name">
						<label>CV Link</label>
						<input type="text" name="home_download_link" value="{{$home_array[0]['home_download_link']}}">
						<input type="file" name="home_download_file" class="photo_selection">
					</div>


					<input type="text" name="home_id" class="hide" value="{{$home_array[0]['home_id']}}">

					<button type="submit" value="Submit" name="home-update" class="getin">Update</button> 

					

					</form>

					</div>

		

					<div class="aboutme">
						
					<div id="laaabel">	
						<button onclick="myFunctionA()">
								About Me  
						</button>

					</div>


					<form method="POST" action="{{route('customizeaboutmeupdate')}}" id="formid_aboutme" class="hide" enctype="multipart/form-data">
                    
                        {{ csrf_field()}}

        			{{session('Astatus')}}
      				
					<div class="user-name">
						<label>Profile Photo</label>
						<img src="{{$aboutme_array[0]['profile_photo']}}" class="Aprofilephoto" alt="My-photo">
						<label>Add New Profile Photo</label>
						<input type="file" name="profile_photo_file" class="photo_selection">
						
					</div>
					<div class="user-name">
						<label>Title</label>
						<input type="text" name="aboutme_titlepos" value="{{$aboutme_array[0]['titlepos']}}" >
					</div>
					<div class="user-name">
						<label>Full Name</label>
						<input type="text" name="aboutme_full_name" value="{{$aboutme_array[0]['portrait_content']}}">
					</div>

					<div class="user-name">
						<label>Phone Number</label>
						<input type="text" name="aboutme_phone_number" value="{{$aboutme_array[0]['phone_content']}}"  >
					</div>

					<div class="user-name">
						<label>Location</label>
						<input type="text" name="aboutme_location" value="{{$aboutme_array[0]['location_content']}}"  >
					</div>

					<div class="user-name">
						<label>Email</label>
						<input type="text" name="aboutme_email"  value="{{$aboutme_array[0]['email_content']}}">
					</div>

					<div class="user-name">
						<label>Date Of Birth</label>
						<input type="text" name="aboutme_dob" value="{{$aboutme_array[0]['calendar_content']}}">
					</div>

					<div class="user-name">
						<label>Nationality</label>
						<input type="text" name="aboutme_nationality" value="{{$aboutme_array[0]['flag_content']}}"> 
					</div>

					<div class="user-name">
						<label>Social Profile link FB</label>
						<input type="text" name="aboutme_link_fb" value="{{$aboutme_array[0]['socialfb_link']}}" >
					</div>

					<div class="user-name">
						<label>Social Profile link IG</label>
						<input type="text" name="aboutme_link_ig" value="{{$aboutme_array[0]['socialig_link']}}" >
					</div>

					<div class="user-name">
						<label>Social Profile link TW </label>
						<input type="text" name="aboutme_link_tw" value="{{$aboutme_array[0]['socialtw_link']}}">
					</div>

					<div class="user-name">
						<label>Social Profile link IN</label>
						<input type="text" name="aboutme_link_in" value="{{$aboutme_array[0]['socialin_link']}}">
					</div>

					<div class="user-name">
						<label>About Me Content</label>
						<textarea type="text" name="aboutme_content">{{$aboutme_array[0]['description_content']}}</textarea>
					</div>

					<input type="text" name="aboutme_id1" class="hide" value="{{$aboutme_array[0]['aboutme_id']}}">

					<button type="submit" value="Submit" name="aboutme-update" class="getin">Update</button> 

					

					</form>

					</div>


					<div class="skills">

					<div id="laaabel">	
						<button onclick="myFunctionS()">
								Skills 
						</button>

					</div>

					<form method="POST" action="{{route('customizeskillsupdate')}}" id="formid_skills" enctype="multipart/form-data" class="hide">
                    
                        {{ csrf_field()}}

        			{{session('Sstatus')}}

        			@for($i=0;$i<count($skills_array);$i++)
      				
					<div class="user-name">
						<label>Skill {{$i+1}}  Title </label>
						<input type="text" name="{{"skills_name".$i}}" value="{{$skills_array[$i]['skills_name']}}" >
					</div>
					<div class="user-name">
						<label>Skill {{$i+1}} Photo</label>
						<img src="{{$skills_array[$i]['skills_photo']}}" class="Aprofilephoto" alt="My-photo">
						
						<label>Add New Skill Photo</label>
						<input type="file" name="{{"skills_photo_file".$i}}" class="photo_selection">

					</div>
					<div class="user-name">
						<label>Skill {{$i+1}} Percent</label>
						<input type="text" name="{{'skills_percent'.$i}}" value="{{$skills_array[$i]['skills_percent']}}" >
					</div>

					<input type="text" class="hide" name="{{'skills_id'.$i}}" class="" value="{{$skills_array[$i]['skills_id']}}">

					@endfor

					<button type="submit" value="Submit" name="skills-update" class="getin">Update</button> 


					</form>

					</div>

						

					
					<div class="portfolio">
						
					<div id="laaabel">	
						<button onclick="myFunctionP()">
								Portfolio   
						</button>

					</div>

					<div id="formid_portfolio" class="hide">

					<form method="POST" action="{{route('customizeportfoliopageupdate')}}" enctype="multipart/form-data" >
                    
                        {{ csrf_field()}}

        			{{session('Pstatus')}}
      				
        			@for($i=0;$i<count($portfoliopage_array);$i++)

					<div class="user-name">
						<label>Portfolio Image {{$i+1}} </label>
						<label>{{$portfoliopage_array[$i]['portfolio_image']}}</label>
						<img src="{{$portfoliopage_array[$i]['portfolio_image']}}" class="Aprofilephoto" alt="My-photo">
						<label>Update Portfolio Image</label>
						<input type="file" name="{{"portfolio_photo_file".$i}}" class="photo_selection">

						<input type="text" name="{{"portfoliopage_id".$i}}" class="hide" value="{{$portfoliopage_array[$i]['portfoliopage_id']}}" > 

					</div>
			
					@endfor

					<button type="submit" value="Submit" name="portfoliopage-update" class="getin">Update</button> 

					</form>

					<hr>

					<form  method="POST" action="{{route('customizeportfoliopageadd')}}" enctype="multipart/form-data">

                        {{ csrf_field()}}

							<div class="user-name">
								<div class="laaabel">
									<label>
										ADD Portfolio Image
									</label>
								</div>
							</div>
								 <div class="form-status">
        							{{session('PAstatus')}}
      							</div>
								<div class="user-name">
									<input type="file" name="portfolio_photo_file_add" class="photo_selection">
								</div>
								<label>Choose the Image Category</label>
								<select name="portfolio_image_type">
									<option value="a">App</option>
									<option value="d">Design</option>
									<option value="p">Photography</option>
									<option value="w">Website</option>
                                </select>
                                
                                <input type="text" name="portfolio_username" value='nags' class="hide">
								
								<button type="submit" value="Submit" class="getin" name="portfolio_image_add">Add Portfolio Image</button> 
							
					</form>

					<hr>

					<form method="POST" action="{{route('customizeportfoliopagedelete')}}"  enctype="multipart/form-data" >

                        {{ csrf_field()}}

					{{session('PDstatus')}}

					<div class="user-name"><label>Image to Delete </label></div>

					<select  name="portfolio_image_path">

					@for($i=0;$i<count($portfoliopage_array);$i++)
      				
					<option value="{{$portfoliopage_array[$i]['portfolio_image']}}">{{$portfoliopage_array[$i]['portfolio_image']}}</option>	

					@endfor

					</select>

					<button type="submit" value="Submit" name="portfolio_image_del" class="getin">Delete Image</button> 
	
					</form>

				</div>
					

					</div>	
	

					


					<div class="experience">

						<div id="laaabel">	
						<button onclick="myFunctionE()">
								Experience 
						</button>

					</div>

					<div id="formid_experience" class="hide">

					<form method="POST" action="{{route('customizeexperienceupdate')}}" enctype="multipart/form-data" >
                    
                        {{ csrf_field()}}

        			{{session('Estatus')}}

        			@for($i=0;$i<count($experience_array);$i++)
      				
					<div class="user-name">
						<label>Experience {{$i+1}}  Title </label>
						<input type="text" name="{{"experience_title".$i}}" value="{{$experience_array[$i]['title']}}" >
					</div>
					<div class="user-name">
						<label>Experience {{$i+1}} Content</label>
						<input type="text" name="{{'experience_content'.$i}}" value="{{$experience_array[$i]['content']}}" >
					</div>
					<div class="user-name">
						<label>Experience {{$i+1}} Year</label>
						<input type="text" name="{{'experience_year'.$i}}" value="{{$experience_array[$i]['year']}}" >
					</div>

					<input type="text" class="hide" name="{{'experience_id'.$i}}" class="" value="{{$experience_array[$i]['experience_id']}}">

					@endfor

					<button type="submit" value="Submit" name="experience-update" class="getin">Update</button> 


					</form>

					<hr>

					<form  method="POST" action="{{route('customizeexperienceadd')}}" enctype="multipart/form-data">

                        {{ csrf_field()}}

							<div class="user-name">
								<div class="laaabel">
									<label>
										ADD New Experience Block
									</label>
								</div>
							</div>
								 <div class="form-status">
        							{{session('EAstatus')}}
      							</div>

								<div class="user-name">
									<label> Title </label>
									<input type="text" name="experience_title" >
								</div>
								<div class="user-name">
									<label> Content</label>
									<input type="text" name="experience_content" >
								</div>
								<div class="user-name">
									<label>Year</label>
									<input type="text" name="experience_year"  >
								</div>
								
								<button type="submit" value="Submit" class="getin" name="experience_block_add">Add Experience Block</button> 
							
					</form>

					<hr>

					<form method="POST" action="{{route('customizeexperiencedelete')}}"  enctype="multipart/form-data" >

                        {{ csrf_field()}}

					{{session('EDstatus')}}

					<div class="user-name"><label>Experience to Delete </label></div>

					<select  name="experience_title_name">

					@for($i=0;$i<count($experience_array);$i++)
      				
					<option value="{{$experience_array[$i]['title']}}">{{$experience_array[$i]['title']}}</option>	

					@endfor

					</select>

					<button type="submit" value="Submit" name="experience_block_del" class="getin">Delete Experience Block</button> 
	
					</form>


					</div>

					</div>

					<div class="hireme">

					<div id="laaabel">	
						<button onclick="myFunctionH()">
								Hire Me 
						</button>

					</div>

					<div id="formid_hireme"  class="hide">

					<form method="POST" action="{{route('customizehiremeupdate')}}"  enctype="multipart/form-data">
                    
                        {{ csrf_field()}}

        			{{session('Hstatus')}}

        			@for($i=0;$i<count($hireme_array);$i++)

        			<div class="user-name">
						<label>Cart Image {{$i+1}} </label>
						<img src="{{$hireme_array[$i]['cart_photo']}}" class="Aprofilephoto" alt="My-photo">
						<label>Update Cart Image</label>
						<input type="file" name="{{"hire_photo_file".$i}}" class="photo_selection">
					</div>	
      				
					<div class="user-name">
						<label> Job {{$i+1}} Name </label>
						<input type="text" name="{{"hire_title".$i}}" value="{{$hireme_array[$i]['hire_title']}}" >
					</div>
					<div class="user-name">
						<label>Job {{$i+1}} Price</label>
						<input type="text" name="{{'hire_price'.$i}}" value="{{$hireme_array[$i]['hire_price']}}" >
					</div>
					<div class="user-name">
						<label>Job {{$i+1}} Service 1</label>
						<input type="text" name="{{'hire_service1'.$i}}" value="{{$hireme_array[$i]['hire_service1']}}" >
					</div>

					<div class="user-name">
						<label>Job {{$i+1}} Service 2</label>
						<input type="text" name="{{'hire_service2'.$i}}" value="{{$hireme_array[$i]['hire_service2']}}" >
					</div>

					<div class="user-name">
						<label>Job {{$i+1}} Service 3</label>
						<input type="text" name="{{'hire_service3'.$i}}" value="{{$hireme_array[$i]['hire_service3']}}" >
					</div>

					<input type="text" class="hide" name="{{'hireme_id'.$i}}" class="" value="{{$hireme_array[$i]['hireme_id']}}">


					@endfor

					<button type="submit" value="Submit" name="hireme-update" class="getin">Update</button> 


					</form>

					<hr>

					<form  method="POST" action="{{route('customizehiremeadd')}}" enctype="multipart/form-data">

                        {{ csrf_field()}}

							<div class="user-name">
								<div class="laaabel">
									<label>
										ADD New Hire Block
									</label>
								</div>
							</div>
								 <div class="form-status">
        							{{session('HAstatus')}}
      							</div>
								<div class="user-name">
									<label>ADD Cart Photo</label>
									<input type="file" name="hire_photo_file_add" class="photo_selection">
								</div>

								<div class="user-name">
									<label> Job Name </label>
									<input type="text" name="hire_title" >
								</div>
								<div class="user-name">
									<label> Price</label>
									<input type="text" name="hire_price" >
								</div>
								<div class="user-name">
									<label>Service 1</label>
									<input type="text" name="hire_service1"  >
								</div>

								<div class="user-name">
									<label>Service 2</label>
									<input type="text" name="hire_service2"  >
								</div>

								<div class="user-name">
									<label>Service 3</label>
									<input type="text" name="hire_service3" >
								</div>
								
								
								<button type="submit" value="Submit" class="getin" name="hire_image_add">Add Hire Block</button> 
							
					</form>

					<hr>

					<form method="POST" action="{{route('customizehiremedelete')}}" enctype="multipart/form-data" >

                        {{ csrf_field()}}

					{{session('HDstatus')}}

					<div class="user-name"><label>Hire Block to Delete </label></div>

					<select  name="hire_job_name">

					@for($i=0;$i<count($hireme_array);$i++)
      				
					<option value="{{$hireme_array[$i]['hire_title']}}">{{$hireme_array[$i]['hire_title']}}</option>	

					@endfor

					</select>

					<button type="submit" value="Submit" name="hire_block_del" class="getin">Delete Hire Block</button> 
	
					</form>

					</div>

				</div>


					<div class="contact">
						
					<div id="laaabel">	
						<button onclick="myFunctionC()">
								Contact  
						</button>

					</div>


					<form method="POST" action="{{route('customizecontactupdate')}}" id="formid_contact" class="hide">
                    
                        {{ csrf_field()}}

        			{{session('Cstatus')}}

					<div class="user-name">
						<label>Location</label>
						<input type="text" name="location_content" value="{{$contact_array[0]['location_content']}}"  >
					</div>

					<div class="user-name">
						<label>Phone</label>
						<input type="text" name="phone_content"  value="{{$contact_array[0]['phone_content']}}">
					</div>

					<div class="user-name">
						<label>Whatsapp</label>
						<input type="text" name="whatsapp_content" value="{{$contact_array[0]['whatsapp_content']}}">
					</div>

					<div class="user-name">
						<label>Skype</label>
						<input type="text" name="skype_content" value="{{$contact_array[0]['skype_content']}}"> 
					</div>

					<div class="user-name">
						<label>Email</label>
						<input type="text" name="email_content" value="{{$contact_array[0]['email_content']}}" >
					</div>

					<div class="user-name">
						<label>Website</label>
						<input type="text" name="website_content" value="{{$contact_array[0]['website_content']}}" >
					</div>

					<div class="user-name">
						<label>Social Profile link FB</label>
						<input type="text" name="contact_link_fb" value="{{$contact_array[0]['socialfb_link']}}" >
					</div>

					<div class="user-name">
						<label>Social Profile link IG</label>
						<input type="text" name="contact_link_ig" value="{{$contact_array[0]['socialig_link']}}" >
					</div>

					<div class="user-name">
						<label>Social Profile link TW </label>
						<input type="text" name="contact_link_tw" value="{{$contact_array[0]['socialtw_link']}}">
					</div>

					<div class="user-name">
						<label>Social Profile link IN</label>
						<input type="text" name="contact_link_in" value="{{$contact_array[0]['socialin_link']}}">
					</div>

					<input type="text" name="contact_id" class="hide" value="{{$contact_array[0]['contact_id']}}">

					<button type="submit" value="Submit" name="contact-update" class="getin">Update</button> 

				</form>

			</div>

			<div class="user-add">
				<div id="laaabel">	
						<button onclick="myFunctionU()">
								 User Controls
						</button>

				</div>

				<div id="formid_usercontrols" class="hide"> 
				<form  method="POST" action="{{route('customizeuseradd')}}" enctype="multipart/form-data" >

                    {{ csrf_field()}}

                                    {{session('UAstatus')}}
                                    
                                    @if(count($errors) > 0)
                                    @foreach($errors->all() as $error)
                                        <div class="form-status">
                                            {{$error}}
                                        </div>
                                    @endforeach    
                                @endif

        						<div class="user-name"><label>ADD User</label></div>	
      							
								<div class="user-name">
									<label>First Name</label>
									<input type="text" name="first_name"  pattern="[A-Za-z]{1,}" title="Enter Valid Name - Alphabets only" required>
								</div>
								<div class="pass-word"> 
									<label>Last Name</label>
									<input type="text" name="last_name" pattern="[A-Za-z]{1,}" title="Enter Valid Name - Alphabets only" required>
								</div>
								<div class="pass-word"> 
									<label>Email</label>
									<input class="forminput" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter Valid Email - All lowercase & Alphanumeric - something@something.domain"  required>
								</div>
								<div class="pass-word"> 
									<label>Username</label>
									<input type="text" name="username" pattern="[A-Za-z0-9]{3,}" title="Enter Valid Username - Min 3 Alphanumeric characters only " required>
								</div>
								<div class="pass-word"> 
									<label>Password</label>
									<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*]).{6,}" title="Must contain at least one number, one uppercase, lowercase letters, one special character, and at least 6 or more characters" required>
								</div>
								<div class="pass-word"> 
									<label>Repeat Password</label>
									<input type="password" name="re_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*]).{6,}" title="Must contain at least one number, one uppercase, lowercase letters, one special character, and at least 6 or more characters" required>
								</div>
                                
                                <input name="account_type" value="nonadmin" class="hide" >

								<button type="submit" name="user-add" value="Submit" class="getin">Add User</button> 
							
			</form>

			<hr>

			<form method="POST" action="{{route('customizeuserdelete')}}" enctype="multipart/form-data" >

                {{ csrf_field()}}

					{{session('UDstatus')}}

					<div class="user-name"><label>Delet User </label></div>

					<select  name="username">

					@for($i=0;$i<count($signup_array);$i++)
      				
					<option value="{{$signup_array[$i]['username']}}">{{$signup_array[$i]['username']}}</option>	

					@endfor

					</select>

					<button type="submit" value="Submit" name="user-del" class="getin">Delete User</button> 
	
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
