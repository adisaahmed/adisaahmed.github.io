<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>NK & N STORES | QUOTE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="CamPro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<script src="js/jquery-1.11.0.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
	<script type="text/javascript">
      function validate()
      {
      
         if( document.myForm.firstname.value == "" )
         {
            alert( "Please provide your First Name!" );
            document.myForm.firstname.focus() ;
            return false;
         }


         if( document.myForm.lastname.value == "" )
         {
            alert( "Please provide your Last Name!" );
            document.myForm.lastname.focus() ;
            return false;
         }
         
         if( document.myForm.Email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.Email.focus() ;
            return false;
         }

         if( document.myForm.describe.value == "" )
         {
            alert( "Kindly provide short note" );
            document.myForm.describe.focus() ;
            return false;
         }

         if( document.myForm.telephone.value == "" )
         {
            alert( "Kindly provide phone number" );
            document.myForm.telephone.focus() ;
            return false;
         }
         return( true );
      }
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	</head>
<body>
	<!-- banner -->
	<div id="home" class="banner_three">
		<nav class="navbar navbar-default navbar-fixed-top main_header">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand second_navbar_brand" href="index.html">
		      	<div class="logo"></div>
		      </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right" style="margin-top: 50px;">
		        <li><a href="index.html" style="color: blue !important; text-transform: uppercase;">Homepage</a></li>
		        <li><a href="services.html" style="color: blue !important; text-transform: uppercase;">Services</a></li>
		        <li><a href="quote.php" style="color: blue !important; text-transform: uppercase;">Get A Quote</a></li>
		        <li><a href="portfolio.html" style="color: blue !important; text-transform: uppercase;">Portfolio</a></li>
		        <li><a href="contact.php" style="color: blue !important; text-transform: uppercase;">Contact Us</a></li>
		       <!--  <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li> -->
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
<!--/header-banner-->
<div class="container">
		<form style="margin-top: 20px;" action="quote_script.php" name="myForm" onsubmit="return(validate());" method="POST">
			<div class="form-group">
			  	<div class="col-md-4">
				    <label for="Firstname">Firstname:</label>
				    <input type="frstname"  name="firstname" class="form-control" id="frstname">
			  	</div>
			  	<div class="col-md-4">
				    <label for="Lastname">Lastname:</label>
				    <input type="lastname" name="lastname" class="form-control" id="lastname">
			  	</div>
			  	<div class="col-md-4">
			    	<label for="E-mail">E-mail:</label>
			    	<input type="E-mail" name="Email" class="form-control" id="emal">
			    </div>
			</div>

		   	<div class="form-group"  style="margin-top: 20px;" >
			    <div class="col-md-6" style="margin-top: 20px;">
			    	<label>Select Product:</label>
			    	<select style="width: 100%; height: 34px; border-radius: 5px;" name="dropdown">
				    	<option>CCTV</option>
				    	<option>INTRUDER ALARM</option>
				    	<option>SOLAR STREET LIGHT</option>
				    </select>
			    </div>
			    <div class="col-md-6" style="margin-top: 20px;">
				 	 <label for="what">Telephone:</label>
				 	 <input type="text" name="telephone" class="form-control" id="telephone">
				</div>
		  	</div>

			<div class="form-group"  style="margin-top: 20px; margin-bottom: 30px;">
			  <div class="col-md-12" style="margin-top: 20px;">
			  	<label for="comment">Descripton:</label>
			  	<textarea class="form-control" name="describe" rows="5" id="describe"></textarea>
			  </div>
			</div>

			<div class="col-md-12">
				<input type="submit" value="Submit" style="margin: 20px 0px; padding: 10px 50px; font-size: 13px; background: #1b2e39; color: #fff; border-radius: 2.3em; border: none;">
			</div>
		</form>
	</div>
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-main">
				<div class="col-md-6 footer-left">
					<a href="index.html" style="margin-bottom: 20px;"><h3>NK&N</h3></a>
					<ul>
						<li style="height: 20px;">
							<a href="index.html" class="a">
								Homepage
							</a>
						</li>
						<li style="height: 20px;">
							<a href="services.html" class="a">
								Services
							</a>
						</li>
						<li style="height: 20px;">
							<a href="quote.php" class="a">
								Get A Quote
							</a>
						</li>
						<li style="height: 20px;">
							<a href="portfolio.html" class="a">
								Portfolio
							</a>
						</li>
						<li style="height: 20px;">
							<a href="contact.php" class="a">
								Contact Us
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-6 footer-right">
					<ul>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
					</ul>
					<table width="100%">
						<tbody>
							<tr>
								<td class="td"><b>Address:</b> 81B, Federal Housing Kado Bimko,Abuja, Nigeria</td>
							</tr>
							<tr>
								<td class="td"><b>Email:</b> nkiru.nnamdi@gmail.com</td>
							</tr>
							<tr>
								<td class="td"><b>Telephone:</b> +2347030235799</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer-text">
				<p>Powered By <a href="http://greymatteragency.com/"> Greymatter</a></p>
			</div>
		</div>
		 <script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--footer-ends-->
</body>
</html>