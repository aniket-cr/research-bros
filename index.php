<?php

?>

<!DOCTYPE html>
<html>

  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""> 
    
    <link rel="stylesheet" href="content/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="customsearch.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>         
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
     
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
     
    <!-- Include js plugin -->
    <script src="owl-carousel/owl.carousel.js"></script>
    <script src="particlejs/particles.js"></script>
  </head>

  <body>
      <div class="sback">
      <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li ><a href="#"><img src="img/logo1.png" height="20px"></a></li>
        </ul>


        <ul  class="pull-right main-nav">
          <li><a href="#">Home</a></li>                    
          <li><a href="#">Partners</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Contact</a></li>
          <li><a class="cd-signup" href="#0">Sign Up</a></li>
          <li><a class="cd-signin" href="#0">Log In</a></li>
        </ul>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1>FIND RESEARCH FACILITIES AND VENDORS</h1>

        <div class="row">
         <div class="col-md-2"></div>
         
        <div class="col-md-8">
			<form action="search_results.php" method="post" class="container-1">
           
            <input type="search" name="name" placeholder="Search..." id="search" autocomplete="off" onkeyup="livevalue(this.value)" />
           
            <input type="image" value="submit" src="img/search.png" alt="" id="searchbutton">
           
            </form>
             	<div id="content"></div>
		 </div>
                
        
        <div class="col-md-2"></div>
        </div>

        <div class="supportline">
        <img src="img/headerli.png">
        <p> Transforming Global Research and Development</p>
        <img src="img/headerli.png">
        </div>

        <div class="comingsoon">
        <p>COMING SOON </p>
        </div>

      </div>
    </div> 
   </div>




   <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
      <ul style="list-style-type:none;" class="cd-switcher">
        <li><a style="text-decoration:none;" href="#0">Sign in</a></li>
        <li><a style="text-decoration:none;" href="#0">New account</a></li>
      </ul>

      <div id="cd-login"> <!-- log in form -->
        <form action="login.php" method="post" class="cd-form">
          <p class="fieldset">
            <label class="image-replace cd-email" for="signin-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail" name="email">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signin-password">Password</label>
            <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password" name="password">
            <a href="#0" class="hide-password">Hide</a>
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <input type="checkbox" id="remember-me" checked>
            <label for="remember-me">Remember me</label>
          </p>

          <p class="fieldset">
            <input class="full-width" type="submit" value="Login">
          </p>
        </form>
        
        <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-login -->

      <div id="cd-signup"> <!-- sign up form -->
        <form action="signup.php" method="post" class="cd-form">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">Username</label>
            <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username" name="name">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="email">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">Password</label>
            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password" name="password">
            <a style="text-decoration:none;" href="#0" class="hide-password">Hide</a>
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">Contact</label>
            <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Contact" name="contact">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <input type="checkbox" id="accept-terms">
            <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
          </p>

          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="Create account">
          </p>
        </form>

        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-signup -->

      <div id="cd-reset-password"> <!-- reset password form -->
        <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

        <form class="cd-form">
          <p class="fieldset">
            <label class="image-replace cd-email" for="reset-email">E-mail</label>
            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="Reset password">
          </p>
        </form>

        <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
      </div> <!-- cd-reset-password -->
      <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
  </div> <!-- cd-user-m-->




<div id="particles-js">
</div>



 <div class="features">
	  <div class="container">
      <h2>What We Do</h2>	
          <img src="img/headerline.png" class="headerlineimg">

      	<div class="row">
	      <div class="col-md-4">
			<ul>
             <li>
                <img src="img/featureimg1.png" class="featureimg">         
            </li>
            <li>
             <h3>Equipment Search</h3>
			 <p>Search for the equipment you need</p>
            </li>
           </ul>
	      </div>

	      <div class="col-md-4">
			<ul>
             <li>
                <img src="img/featureimg1.png" class="featureimg">         
            </li>
            <li>
             <h3>Find Vendors</h3>
			 <p>Search for the equipment you need</p>
            </li>
           </ul>
	      </div>
		  
          <div class="col-md-4">
			<ul>
             <li>
                <img src="img/featureimg1.png" class="featureimg">         
            </li>
            <li>
             <h3>Lab Management</h3>
			 <p>Book equipment online or contact equipment owner.</p>
            </li>
           </ul>
	      </div>
	    </div>
	  </div>
	</div>



  <div class="stat">
	  <div class="container">

	</div>
   </div>

  <div class="partner1">
	  <div class="container">

      	<div class="row">
          
          <div class="col-md-1">Trusted By</div>
	      
          <div class="col-md-2">

	       <ul>
               <li><a href="#" class="bottomlogo"></a></li>
            </ul>
	      </div>

           
           <div class="col-md-3">
	    </div>
	  </div>
	</div>
   </div>


<div class="joinus">
	  <div class="container">
      <h2>SUBSCRIBE</h2>	
          <img src="img/headerline.png" class="joinusimg">
      <p>Stay up to date on our new services and funding opportunities</p>
      


      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
         <form method="POST" action="enter the URL to your PHP page here" class="joinbox">
          <input type="text" name="name" placeholder="Name"   id="join_name" autocomplete="off" required />
          <input type="email" name="name" placeholder="Email"  id="join_email" autocomplete="off" required />
          <br>
          <input type="text" name="name" placeholder="Organisation"   id="join_org" autocomplete="off" required />
          <button type="submit" value="submit" id="join_button">
           <img src="img/mail1.png" class="join_img" />
          </button>
         </form>
        </div>
        <div class="col-md-2"></div>
      </div>


      </div>
</div>













<div class="bottom">
	  <div class="container">

      	<div class="row">
          
          <div class="col-md-1"></div>
	      
          <div class="col-md-2">

	       <ul>
               <li><a href="#" class="bottomlogo">Logo Team</a></li>
               <li><a href="#" class="bottomlogo">FAQs</a></li>
               <li><a href="#" class="bottomlogo">Partners</a></li>
            </ul>
	      </div>

           
           <div class="col-md-3">
	       <ul>
               <li><a href="#" class="bottomlogo">Privacy Policy</a></li>
               <li><a href="#" class="bottomlogo">Terms & Conditions</a></li>
               <li><a href="#" class="bottomlogo">Contact Us</a></li>
            </ul>
	      </div>

		  

          <div class="col-md-3">
			<p>Subscribe</p>
            <form method="POST" action="enter the URL to your PHP page here" class="subscribebox">
               <input type="email" name="Email" id="subscribe">
               <input type="image" value="submit" src="img/arrow.png" alt="submit Button" id="subscribebutton">
            </form>
		  </div>

		  <div class="col-md-3">
			<p><img src="img/logo1.png" height="20px"></p>
		  </div>
	    </div>
	  </div>
	</div>







<script>
!function ($) { //ensure $ always references jQuery
    $(function () { //when dom has finished loading
        //make top text appear aligned to bottom: http://stackoverflow.com/questions/13841387/how-do-i-bottom-align-grid-elements-in-bootstrap-fluid-layout
        function fixHeader() {
            //for each element that is classed as 'pull-down'
            //reset margin-top for all pull down items
            $('.pull-down').each(function () {
                $(this).css('margin-top', 0);
            });

            //set its margin-top to the difference between its own height and the height of its parent
            $('.pull-down').each(function () {
                if ($(window).innerWidth() >= 768) {
                    $(this).css('margin-top', $(this).parent().height() - $(this).height()/2);
                }
            });
        }

        $(window).resize(function () {
            fixHeader();
        });

        fixHeader();
    });
}(window.jQuery);

    

    

   

    $(document).ready(function() {
     
    $("#owl-demo").owlCarousel({
     
    autoPlay: false, //Set AutoPlay to 3 seconds
     
    items : 6,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3],
    stopOnHover : false,
    navigation : false,
     
    });
     
    });



	   function livevalue(value){
            $.post(
                    "livesearch.php",
                    {keyword:value},
                    function(data){
                        $("#content").html(data);
                    });
        };
        


</script>
<script type="text/javascript">
  
function changetext1(){
  
  var spans = $( "#option1" );

  console.log($( "a" ).find( spans ).text());
  $('#search').val($( "a" ).find( spans ).text());

}

function changetext2(){
  
  var spans2 = $( "#option2" );

  console.log($( "a" ).find( spans2 ).text());
  $('#search').val($( "a" ).find( spans2 ).text());

}

function changetext3(){
  
  var spans3 = $( "#option3" );

  console.log($( "a" ).find( spans3 ).text());
  $('#search').val($( "a" ).find( spans3 ).text());

}

</script>
    
    <script src="particlejs/app.js"></script>
    <script src="js/main.js"></script>
   
  </body>
</html>