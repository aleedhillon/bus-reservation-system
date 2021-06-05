<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Transfers - Private Transport and Car Hire HTML Template" />
	<meta name="description" content="Transfers - Private Transport and Car Hire HTML Template">
	<meta name="author" content="themeenergy.com">
	
	<title>Faisal Mover</title>
	
	<link rel="stylesheet" href="{{URL('css/styler.css')}}" />
	<link rel="stylesheet" href="{{URL('css/theme-pink.css')}}" id="template-color" />
	<link rel="stylesheet" href="{{URL('ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{URL('css/jquery-ui.theme.css')}}" />
	<link rel="stylesheet" href="{{URL('css/style.css')}}" />
	<link rel="stylesheet" href="{{URL('css/animate.css')}}" />
	<link rel="stylesheet" href="{{URL('css/icons.css')}}" />
	<link href='{{URL('http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700')}}' rel='stylesheet' type='text/css'>
</head>
<body>

<header class="header" role="banner">
			<div class="wrap">
				<!-- Logo -->
				<div class="logo">
					<a href="index-2.html" title="Transfers"><h1 style="color: black; font-weight: bold;">Faisal Movers</h1></a>
				</div>
				<!-- //Logo -->
				<!-- Main Nav -->
				<nav role="navigation" class="main-nav">
					<ul>
						<li class="active"><a href="{{URL('userhome')}}" title="">Home</a></li>
						<li><a href="{{URL('about')}}" title="About Us">About Us</a></li>
						<li><a href="{{URL('service')}}" title="Services">Services</a></li>
						<li><a href="{{URL('contact')}}" title="Contact">Contact</a></li>
						<li><a href="{{URL('blog')}}" title="Blog">Blog</a>
						</li>
						<li><a href="#" title="My Account">My Account</a>
							<ul>
								<li><a href="{{'loginuser'}}" title="Login">Login</a></li>
								<li><a href="{{URL('registeruser')}}" title="Register">Register</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- //Main Nav -->
			</div>
		</header>
<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Register</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="index-2.html" title="Home">Home</a></li>
							<li>Register</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		    <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
                @endif

                
            </div>
		<!-- //Page info -->
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="content one-half modal">
					<!--Login-->
				<div class="box">
	         {{ Form::open(['route'=>['registeruser.register',$passenger->id],'methode'=>'POST'])}}
	              <div class="full-width">
	              {{ Form::label('name','Your name and surname')}}
	               {{ Form::text('name',null,['class'=>'form-control'])}}
	          </div>
	         
	           <div class="full-width">
	              {{ Form::label('email','Your email address')}}
	               {{ Form::email('email',null,['class'=>'form-control'])}}
	          </div>
	           <div class="full-width">
	              {{ Form::label('password','Your password')}}
	               {{ Form::password('password',null,['class'=>'form-control'])}}
	          </div>
                {{Form::hidden('p_data',$passenger->id,array('id' => 'p_data'))}}
	           <div class="full-width">
	              {{ Form::label('password_confirmation','Repeat password')}}
	               {{ Form::password('password_confirmation',null,['class'=>'form-control'])}}
	          </div>

                 <p>Already have an account? <a href="">Login</a>.</p>
             {{ Form::submit('register',['class'=>'btn color medium full'])}}
             {{ Form::close()}}
					</div>
					<!--//Login-->
				</div>
				<!--- //Content -->
			</div>
		</div>
	</main>
		<footer class="footer black" role="contentinfo">
		<div class="wrap">
			<div class="row">
				<!-- Column -->
				<article class="one-half">
					<h6>About us</h6>
					<p>Welcome to Faisal Movers; a company with an incredible track record of Quality & Excellence in services across the country. Having an excellent history of quarter a century. From its establishment, the company has making continuous progress to ensure comfort, luxury, safety, time management and best customer support.</p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Need help?</h6>
					<p>Contact us via phone or email:</p>
					<p class="contact-data"><span class="icon icon-themeenergy_call"></span>03 111 22 44 88</p>
					<p class="contact-data"><span class="icon icon-themeenergy_mail-2"></span> <a href="#"></a>www.faisal mover.com</p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Follow us</h6>
					<ul class="social">
						<li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
						<li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
						<li><a href="#" title="gplus"><i class="fa fa-fw fa-google-plus"></i></a></li>
						<li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
						<li><a href="#" title="pinterest"><i class="fa fa-fw fa-pinterest-p"></i></a></li>
						<li><a href="#" title="vimeo"><i class="fa fa-fw fa-vimeo"></i></a></li>
					</ul>
				</article>
				<!-- //Column -->
			</div>
			
			<div class="copy">
				<p>Copyright 2021, Faisal Movers. All rights reserved. </p>
				
				<nav role="navigation" class="foot-nav">
					<ul>
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#" title="Blog">Blog</a></li>
						<li><a href="#" title="About us">About us</a></li>
						<li><a href="#" title="Contact us">Contact us</a></li>
						<li><a href="#" title="Terms of use">Terms of use</a></li>
						<li><a href="#" title="Help">Help</a></li>
						<li><a href="#" title="For partners">For partners</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>
</body>
</html>
