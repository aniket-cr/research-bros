<?php

include('config.php');

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$num_rec_per_page=3;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }
$start_from = ($page-1) * $num_rec_per_page; 

$qu = $_REQUEST['name'];

$sql = "SELECT *,MATCH(tags) AGAINST ('$qu') AS tag_match FROM equipment WHERE MATCH (tags) AGAINST ('$qu')
ORDER BY (tag_match) DESC LIMIT $start_from, $num_rec_per_page;";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<style type="text/css">
  
</style>
    <head>
      <title>Search Page</title>
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
        <script src="js/modernizr.custom.js"></script>
    </head>
    <body>

        <div class="nav" style="background-color: #1ea78d;padding-top:6px;">
            <div class="container">
                <ul class="pull-left" style="margin-top: 12px;">
                  <li >
                      <a href="#"><img src="img/logo1.png" height="20px"></a>


                  </li>
                </ul>
                <form action="search_results.php" method="post" class="container-1">
           
                      <input style="width:300px;margin-left:20px;margin-top:0px;" type="search" name="name" placeholder="Search..." id="search" autocomplete="off" onkeyup="livevalue(this.value)" />
                     
                      <input style="margin-top:10px;margin-left:-40px;" type="image" value="submit" src="img/search.png" alt="" id="searchbutton">
                     
                </form>
                


                <ul  class="pull-right"  style="margin-top: 12px;">
                  <li><a href="#">Home</a></li>                    
                  <li><a href="#">Partners</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Sign Up</a></li>
                  <li><a href="#">Log In</a></li>
                </ul>
             </div>  
        </div>
        <div id="content"></div>






      <div  class="main">
        <nav  id="cbp-hrmenu" class="cbp-hrmenu">
          <ul>
            <li >
              <a style="color:#1ea78d;" href="#">Products</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>Learning &amp; Games</h4>
                    <ul>
                      <li><a href="#">Catch the Bullet</a></li>
                      <li><a href="#">Snoopydoo</a></li>
                      <li><a href="#">Fallen Angel</a></li>
                      <li><a href="#">Sui Maker</a></li>
                      <li><a href="#">Wave Master</a></li>
                      <li><a href="#">Golf Pro</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Utilities</h4>
                    <ul>
                      <li><a href="#">Gadget Finder</a></li>
                      <li><a href="#">Green Tree Express</a></li>
                      <li><a href="#">Green Tree Pro</a></li>
                      <li><a href="#">Wobbler 3.0</a></li>
                      <li><a href="#">Coolkid</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Education</h4>
                    <ul>
                      <li><a href="#">Learn Thai</a></li>
                      <li><a href="#">Math Genius</a></li>
                      <li><a href="#">Chemokid</a></li>
                    </ul>
                    <h4>Professionals</h4>
                    <ul>
                      <li><a href="#">Success 1.0</a></li>
                      <li><a href="#">Moneymaker</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a style="color:#1ea78d;" href="#">Downloads</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner">
                  <div>
                    <h4>Education &amp; Learning</h4>
                    <ul>
                      <li><a href="#">Learn Thai</a></li>
                      <li><a href="#">Math Genius</a></li>
                      <li><a href="#">Chemokid</a></li>
                    </ul>
                    <h4>Professionals</h4>
                    <ul>
                      <li><a href="#">Success 1.0</a></li>
                      <li><a href="#">Moneymaker</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Entertainment</h4>
                    <ul>
                      <li><a href="#">Gadget Finder</a></li>
                      <li><a href="#">Green Tree Express</a></li>
                      <li><a href="#">Green Tree Pro</a></li>
                      <li><a href="#">Holy Cannoli</a></li>
                      <li><a href="#">Wobbler 3.0</a></li>
                      <li><a href="#">Coolkid</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Games</h4>
                    <ul>
                      <li><a href="#">Catch the Bullet</a></li>
                      <li><a href="#">Snoopydoo</a></li>
                      <li><a href="#">Fallen Angel</a></li>
                      <li><a href="#">Sui Maker</a></li>
                      <li><a href="#">Wave Master</a></li>
                      <li><a href="#">Golf Pro</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a style="color:#1ea78d;" href="#">Applications</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>Learning &amp; Games</h4>
                    <ul>
                      <li><a href="#">Catch the Bullet</a></li>
                      <li><a href="#">Snoopydoo</a></li>
                    </ul>
                    <h4>Utilities</h4>
                    <ul>
                      <li><a href="#">Gadget Finder</a></li>
                      <li><a href="#">Green Tree Express</a></li>
                      <li><a href="#">Green Tree Pro</a></li>
                      <li><a href="#">Wobbler 3.0</a></li>
                      <li><a href="#">Coolkid</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Education</h4>
                    <ul>
                      <li><a href="#">Learn Thai</a></li>
                      <li><a href="#">Math Genius</a></li>
                      <li><a href="#">Chemokid</a></li>
                    </ul>
                    <h4>Professionals</h4>
                    <ul>
                      <li><a href="#">Success 1.0</a></li>
                      <li><a href="#">Moneymaker</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a style="color:#1ea78d;"href="#">Projects</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>Learning &amp; Games</h4>
                    <ul>
                      <li><a href="#">Catch the Bullet</a></li>
                      <li><a href="#">Snoopydoo</a></li>
                      <li><a href="#">Fallen Angel</a></li>
                      <li><a href="#">Sui Maker</a></li>
                      <li><a href="#">Wave Master</a></li>
                      <li><a href="#">Golf Pro</a></li>
                    </ul>
                    <h4>Utilities</h4>
                    <ul>
                      <li><a href="#">Gadget Finder</a></li>
                      <li><a href="#">Green Tree Express</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Entertainment</h4>
                    <ul>
                      <li><a href="#">Gadget Finder</a></li>
                      <li><a href="#">Green Tree Express</a></li>
                      <li><a href="#">Green Tree Pro</a></li>
                      <li><a href="#">Holy Cannoli</a></li>
                      <li><a href="#">Wobbler 3.0</a></li>
                      <li><a href="#">Coolkid</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            
          </ul>
        </nav>
      </div>



   



    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/cbpHorizontalMenu.min.js"></script>
    <script>
      $(function() {
        cbpHorizontalMenu.init();
      });
    </script>
    <style type="text/css">





            .cbp-hrmenu {
  width: 100%;
  margin-top: 0em;
  border-bottom: 4px solid #1ea78d;
}

/* general ul style */
.cbp-hrmenu ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

/* first level ul style */
.cbp-hrmenu > ul,
.cbp-hrmenu .cbp-hrsub-inner {
  width: 100%;
}

.cbp-hrmenu > ul > li {
  display: inline-block;
  width:24.77%;
}



.cbp-hrmenu > ul > li > a {
  font-weight: 700;
  width:100%;

  font-variant: small-caps;
  padding: 1em 9em;
  color: #999;
  display: inline-block;
  text-decoration: none;
}

.cbp-hrmenu > ul > li > a:hover {
  color: #fff!important;
  background-color: #357FFF;

}

.cbp-hrmenu > ul > li.cbp-hropen a,
.cbp-hrmenu > ul > li.cbp-hropen > a:hover {
  color: #fff!important;
  background:#357FFF;
  text-decoration: none;
}

/* sub-menu */
.cbp-hrmenu .cbp-hrsub {
  display: none;
  position: absolute;
  background: #357FFF;
  width: 100%;
  left: 0;
}

.cbp-hropen .cbp-hrsub {
  display: block;
  padding-bottom: 3em;
}

.cbp-hrmenu .cbp-hrsub-inner > div {
  width: 33%;
  float: left;
  padding: 0 2em 0;
}

.cbp-hrmenu .cbp-hrsub-inner:before,
.cbp-hrmenu .cbp-hrsub-inner:after {
  content: " ";
  display: table;
}

.cbp-hrmenu .cbp-hrsub-inner:after {
  clear: both;
}

.cbp-hrmenu .cbp-hrsub-inner > div a {
  line-height: 2em;
}

.cbp-hrsub h4 {
  color: #afdefa;
  padding: 2em 0 0.6em;
  margin: 0;
  font-size: 160%;
  font-weight: 300;
}

/* Examples for media queries */

@media screen and (max-width: 52.75em) { 

  .cbp-hrmenu {
    font-size: 80%;
  }

}

@media screen and (max-width: 43em) { 

  .cbp-hrmenu {
    font-size: 120%;
    border: none;
  }

  .cbp-hrmenu > ul,
  .cbp-hrmenu .cbp-hrsub-inner {
    width: 100%;
    padding: 0;
  }

  .cbp-hrmenu .cbp-hrsub-inner {
    padding: 0 2em;
    font-size: 75%;
  }

  .cbp-hrmenu > ul > li {
    display: block;
    border-bottom: 4px solid #1ea78d;
  }

  .cbp-hrmenu > ul > li > a { 
    display: block;
    padding: 1em 3em;
  }

  .cbp-hrmenu .cbp-hrsub { 
    position: relative;
  }

  .cbp-hrsub h4 {
    padding-top: 0.6em;
  }

}

@media screen and (max-width: 36em) { 
  .cbp-hrmenu .cbp-hrsub-inner > div {
    width: 100%;
    float: none;
    padding: 0 2em;
  }
}




    </style>

    
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
   <style type="text/css">

   .searchresults{
    height:150px;
    width:60%;
    margin-left: 25px;
    margin-top: 25px;
    padding-left: 5px;
    padding-bottom: 5px;
    background-color: #86B3FF;
   }

   .machine-image{
    width: 140px;
    height: 140px;
    border-radius: 50% 50% 50% 50%;
    padding: 5px 5px 5px 5px;

   }
   .machine-name{
    color: black;
    margin-top: 3px;
    margin-bottom: 2px;
   }
   .machine-owner{
    color:#606060;
    margin-top: 2px;
   }
   .img-div{
    padding-top: 5px;
    padding-right: 5px;
    
    float: left;
    width:25%;
   }
   .content-div{
    width:100%;
   }
   .short-icon{
    width: 32px;
    height:32px;
   }
   .machine-desc{
      }

    .avail-div{
      float:right;
      width:140px;
      color:white;
      font-variant: small-caps;
      font-size: 24px;
      text-align: center;
      height:50px;
      background-color: #1ea78d;
      padding-top: 0px !important;
    }
    .content-div{
      padding-top: 5px;
    padding-right: 5px;
    
    }
    .contain{
      min-height: 700px;
      margin-top: 100px;
    }

    .searchcontainer{
    width:600px;
    margin-top: 25px;
    
}

.searchbox{
    position:absolute;
    min-width:350px;
    width:0%;
    height:50px;
    margin-left: 25px;
    float:right;
    overflow:hidden;
    
    -webkit-transition: width 0.3s;
    -moz-transition: width 0.3s;
    -ms-transition: width 0.3s;
    -o-transition: width 0.3s;
    transition: width 0.3s;
}

.searchbox-input{
    top:0;
    right:0;
    border:0;
    outline:0;
    background:#C6DCFF;
    border 1px solid #000;
    width:100%;
    height:50px;
    margin:0;
    padding:0px 55px 0px 20px;
    font-size:20px;
    color:#000;
}
.searchbox-input::-webkit-input-placeholder {
    color: #428bca;
}
.searchbox-input:-moz-placeholder {
    color: #428bca;
}
.searchbox-input::-moz-placeholder {
    color: #428bca;
}
.searchbox-input:-ms-input-placeholder {
    color: #428bca;
}

.searchbox-icon,
.searchbox-submit{
    width:350px;
    height:50px;
    display:block;
    position:absolute;
    top:0;
    font-family:verdana;
    font-size:18px;
    right:0;
    font-variant: small-caps;
    padding:0;
    margin:0;
    border:0;
    outline:0;
    line-height:50px;
    text-align:center;
    cursor:pointer;
    color:#fff;
    background:#428bca;
}



.searchbox-open{
    width:95%;
}

.location
{
	width:32%;
}

::selection {
  background:#222;
  color:yellow;
}
@import url(http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise);
.wrapper {
  font-family: 'Waiting for the Sunrise', cursive;
  float: right;
  width:35%;
  height:500px;
  margin-right: 25px;
  
}
.paper {
 
  line-height:1.5em;
  background-image: -webkit-linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px);
  background-image: -moz-linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px);
  background-image: -ms-linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px);
  background-size:100% 1.5em;
  background-position:0 1.2em;
  background-origin:content-box;
  background-color:#FFFF43; 
  font-size:140%;
  padding:1.3em;
  box-shadow:0px 0px 10px rgba(black,.3);
}




   </style>

<div class="searchcontainer">
    <form class="searchbox">
        <input type="search" placeholder="Search.." name="search" class="searchbox-input" onkeyup="buttonUp();" required>
        <input type="submit" class="searchbox-submit" value="Search By Location?">
        <span class="searchbox-icon">Search By Location?</span>
    </form>
</div>

<div class="contain">

<div class="wrapper">
     <div class="paper">
          <p>The amazing thing about this <b>paper note</b> is, that the background is created with linear-gradient and always fits on the content and it's padding/font-size. You can also use as much text as you want.<br /> 
          <br />
          No images have been harmed. Based on Lea Verou's code presented at W3Conf (<a href="http://youtu.be/3ikye7Qc7Ak?t=17m26s">Video</a>).</p>
     </div>
</div>

<?php



$count=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo '<div class="searchresults" id="result'. $count . '"><div class="avail-div"><p style="margin-top:5px;">'.$row['availability'].'</p></div><div class="img-div"><img class="machine-image" src="'.$row['photo'].'"/></div><div class="content-div"><h2 class="machine-name">' . $row['name'] . '</h2><h5 class="machine-owner">- owned by '.$row['owner_name'].' </h5><div style="height:40px;margin-bottom:5px;"><p class="machine-desc">'.$row['description'].'</p></div><img class="short-icon" src="img/call.png"/>&nbsp;'.$row['contact'].'&nbsp;&nbsp;&nbsp;&nbsp;<img class="short-icon" src="img/location.png"/>&nbsp;'.$row['location'].'</div></div>';
         $count=$count+1;
    }
} else {
    echo "No results found";
}
$sql = "SELECT *,MATCH(tags) AGAINST ('$qu') AS tag_match FROM equipment WHERE MATCH (tags) AGAINST ('$qu');"; 
$rs_result = mysqli_query($conn,$sql); //run the query
$total_records = mysqli_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

echo "<a style='margin-left:25px;float:left;text-decoration:none;' href='search_results.php?name=$qu&page=1'>".'|<'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a style='margin-left:25px;float:left;text-decoration:none;' href='search_results.php?name=$qu&page=".$i."'><div class='page-number'>".$i."</div></a> "; 
}
echo "<a style='margin-left:25px;float:left;text-decoration:none;' href='search_results.php?name=$qu&page=$total_pages'>".'>|'."</a> "; // Goto last page

$conn->close();
?>
</div>

      <div style="margin-top:25px;" class="bottom">
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
  <script type="text/javascript">

            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }


  </script>

  </body>

  </html>
