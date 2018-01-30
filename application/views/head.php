<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Condensed:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,100i,300,300i,400,400i,600,600i,700,700i|Roboto+Condensed:300,300i,400,400i,700,700i|Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext,vietnamese" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.jpg" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Overpass:100,100i,200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Pacifico" rel="stylesheet">
    <style>
      
        .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay1 {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;

  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}

.hovereffect:hover .overlay1 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}
        
        
        video { 
  
   top: 0px;
   left: 0px;
   min-width: 100%;
   min-height: 100%;
   width: auto;
   height: auto;
   
   overflow: hidden;
    -webkit-filter: blur(50px);
  -moz-filter: blur(10px);
  -o-filter: blur(10px);
  -ms-filter: blur(10px);
  filter: blur(10px);
}

.sc {
  opacity: 1;
  transition: opacity .7s ease-in, margin-top .7s ease-out;
}

.sc--hidden {
  opacity: 0;
  margin-top: 3em;
}
        

        .overlay {
    position:absolute;
            margin:40px;
    top:0;
    left:0;
    z-index:10;
}

        body {
      font-family: 'Overpass', sans-serif;
        }
        hr {
            padding: 0;
            border: none;

            border-top: solid 5px;
            color: #fe2700;

            text-align: center;
            max-width: 250px;
            margin: 25px auto 30px;
        }
        nav{
            box-shadow: 0 0px 0px 0;
        }


        nav ul li a:hover {
            background-color: white;
           color: #fe2700 !important;
            font-size: 92% !important;
        }

        .sidenav > li > a:hover {
            color: #ffffff !important;
            font-size: 92% !important;

        }
        nav ul li a.active {
            background-color: white !important;
            color: #fe2700 !important;
            font-size: 110% !important;
           
        }
        .sidenav > li > a.active {
            color: #ffffff !important;
            font-size: 92% !important;
        }

        img.logo {
            position: absolute;
            top: 20%;
            left: 50%;
            width: 250px;
            height: 70px;
            margin-top: -40px;
            margin-left: -150px;
        }

        .effect {
            background: #fff;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
            height: 300px;
            box-shadow: none;
            margin: 20px;
        }
        .card {
            background: #fff;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;

            box-shadow: none;
            margin: 20px;


        }




        hr {


            border-top:solid 2px ;
            color: #fe2700;



        }


        img.main {

          

        }
        
        .brand-logo {
            display: inline-block;
            height: 100%;
        }

        .brand-logo>img {
            vertical-align: middle
        }
      
       
        .card-content{
            margin-top: 15px;
        }
        
          .carousel .carousel-item{
                
                width:300px !important;}

    </style>


</head>


				<?php
				if(isset($dob_pick))
				{
					?>
				  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
				  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
				  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
				  <script>
				  $(function() {
				    $( "#datepicker" ).datepicker({
				      changeYear: true,
				      changeMonth: true,
				      yearRange: "-50:+0",
					  dateFormat: "dd-mm-yy"
					});
				  });
				  </script>

				<?php 
				}
				?>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=264308723755640";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    
 
 <ul style="font-family: 'Roboto Condensed', sans-serif;" class="side-nav " id="mobile-demo">

    <li class="waves-effect waves-light"><a style="font-weight: bold;" href="<?php echo base_url(); ?>"><i  class="material-icons left ">home</i>HOME</a></li>
    <li class="waves-effect waves-light"><a style="font-weight: bold;" href="<?php echo base_url(); ?>about"><i  class="material-icons left ">people</i>ABOUT US</a></li>
     <li class="waves-effect waves-light"><a style="font-weight: bold;" href="<?php echo base_url(); ?>register"><i class="material-icons left ">payment</i>TICKETS</a></li>
      <li class="waves-effect waves-light"><a style="font-weight: bold;" href="<?php echo base_url(); ?>partners"><i class="material-icons left ">wc</i>PARTNERS</a></li>
      <li class="waves-effect waves-light"><a style="font-weight: bold;" href="<?php echo base_url(); ?>youth"><i  class="material-icons left ">record_voice_over</i>YOUTH SPEAKER HUNT</a></li>
       <li class="waves-effect waves-light"><a style="font-weight: bold;" href="<?php echo base_url(); ?>#speakers"><i class="material-icons left ">volume_up</i>SPEAKER</a></li>
       <li class="waves-effect waves-light"><a style="font-weight: bold;" href="<?php echo base_url(); ?>team"><i class="material-icons left ">recent_actors</i>TEAM</a></li>
      </ul>



<div   class="navbar-fixed">
    <nav >
        <div    class="nav-wrapper  " style="background-color:white;font-family: 'Roboto Condensed', sans-serif; padding-left: 0px">


            <a     href="#" data-activates="mobile-demo" class="button-collapse"><i style="color:black;" class="material-icons">menu</i></a>
            <a href="<?php echo base_url(); ?>" class="brand-logo"><img style="margin-left:20px;" src="images/logo.png"  height="35px" width="200px"   ></a>
            <ul  class="right hide-on-med-and-down  ">
                <li class="waves-effect waves-light  "><a style="color:black;font-weight: bold; font-size:90%;" href="<?php echo base_url(); ?>"><i style="font-size:140%;" class="material-icons left">home</i>HOME</a></li>
                 <li class="waves-effect waves-light "><a style="color:black;font-weight: bold;font-size:90%;" href="<?php echo base_url(); ?>about"><i style="font-size:140%;" class="material-icons left">people</i>ABOUT US</a></li>

                <li class="waves-effect pulse waves-black "><a style="color:black;font-weight: bold;font-size:90%;" href="<?php echo base_url(); ?>register"><i style="font-size:140%;"class="material-icons left">payment</i>TICKETS</a></li>
                <li class="waves-effect waves-light"><a style="color:black;font-weight: bold;font-size:90%;" href="<?php echo base_url(); ?>partners"><i style="font-size:140%;" class="material-icons left">wc</i>PARTNERS</a></li>
                 <li class="waves-effect waves-light"><a style="color:black;font-weight: bold;font-size:90%;" href="<?php echo base_url(); ?>youth"><i style="font-size:140%;" class="material-icons left">record_voice_over</i>YOUTH SPEAKER HUNT</a></li>
                <li class="waves-effect waves-light"><a id="speaker" style="color:black;font-weight: bold;font-size:90%;" href="<?php echo base_url(); ?>#speakers"><i style="font-size:140%;" class="material-icons left">volume_up</i>SPEAKERS</a></li>
                 <li class="waves-effect waves-light"><a style="color:black;font-weight: bold;font-size:90%;" href="<?php echo base_url(); ?>team"><i style="font-size:140%;" class="material-icons left">recent_actors</i>TEAM</a></li>
            
        
          
            </ul>

        </div>
    </nav>
</div>


    <div class="fixed-action-btn toolbar   ">
    <a style="background-color: #fe2700;" class="btn-large btn-floating pulse ">
        <i class="large material-icons">add</i>
    </a>
    <ul  class="white" >
        <li class="waves-effect waves-light white"><input id="email_subs_ajax" placeholder="Email" type="email" class="validate white "></li>
        <li class="waves-effect waves-light white"><button id="btn_subs_ajax" style="margin-top: 10px;background-color: #fe2700;" class="waves-effect waves-light btn  ">Subscribe</button></li>

    </ul>
</div>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>

