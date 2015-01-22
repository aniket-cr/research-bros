
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
    <link rel="stylesheet" href="searchresult.css">
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
  </head>

  <body>
      <div class="sback">
      <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li ><a href="#">LOGO</a></li>
        </ul>


        <ul  class="pull-right">
          <li><a href="#">Home</a></li>                    
          <li><a href="#">Partners</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Sign Up</a></li>
          <li><a href="#">Log In</a></li>
        </ul>
      </div>
    </div>
   </div>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$qu=$_POST["name"];
$sql = "SELECT Image, Equipment, Availability,  Contact, Institute FROM equip WHERE Institute like'%$qu%' ";
$result = $conn->query($sql);
?>

  <div class="resultcount">
    <p>
     <?php 
        if($result->num_rows == 1){
            echo $result->num_rows," ","facility found";
        }
        else {
            echo $result->num_rows," ","facilities found";
        }
     ?> 
    </p>
  </div>



<div class="container">
  <div class="container1">       
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
      
  <div class="resultblock">
    <img class="resultimage" src=<?php echo $row['Image']; ?> />
    <p class="availability">Availabilty : <?php echo $row['Availability']; ?></p>
    <p class="equipment"><?php echo $row['Equipment']; ?></p>
    <p class="institute"><?php echo $row['Institute']; ?></p>
    <p class="contact">Contact : <?php echo $row['Contact']; ?></p>
  </div>
    
<?php
    }
} else {
?>
  <div class="noresult">
    <div class="noresult1">
     <p>Your search - <b>'<?php  echo $qu;?>'</b> - did not match any facility.</p>
     <p>Please make sure that spelling is correct or try different keywords.</p>
    </div>
  </div>

<?php
}
$conn->close();
?>
    
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
			<p>LOGO</p>
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

    

	   function livevalue(value){
            $.post(
                    "livesearch.php",
                    {keyword:value},
                    function(data){
                        $("#content").html(data);
                    });
        };



</script>
    
   
  </body>
</html>








