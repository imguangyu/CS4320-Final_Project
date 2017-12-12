<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wei's Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://file.myfontastic.com/GrB9xuxQmbqKaaajF4NftS/icons.css" rel="stylesheet">
     <link href="http://ec2-54-193-13-150.us-west-1.compute.amazonaws.com/4320-project/css/style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>

			function displayHome()
			{
				var xmlHttp = new XMLHttpRequest();
					var rs = xmlHttp.readyState;
				content="Manager";
					xmlHttp.onreadystatechange = function()
				{
					if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
					{
						elemObj = document.getElementById("getoutput");

							elemObj.innerHTML = xmlHttp.responseText;

					}
				}
					var thereqURL = content+".php";
					document.getElementById("getoutput").innerHTML = "Loading...";
						xmlHttp.open("GET", thereqURL, true);
						xmlHttp.send();

			}


        function displayArtist(){
                var xmlHttp = new XMLHttpRequest;
                var rs = xmlHttp.readyState;
                content="Artist";
                xmlHttp.onreadystatechange=function(){
                    if(xmlHttp.readyState==4 && xmlHttp.status==200){
                        elemObj= document.getElementById("getoutput");
                        elemObj.innerHTML=xmlHttp.responseText;
                    }
                }

                var thereqURL = content+".php";
					document.getElementById("getoutput").innerHTML = "Loading...";
						xmlHttp.open("GET", thereqURL, true);
						xmlHttp.send();
            }


        function initMap() {
        var uluru = {lat: 38.940264, lng: -92.327782};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }



    </script>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjo1STfGane9DOq6VIcJ2YvID8KFSFA-E&callback=initMap">
    </script>

  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 0px;
      border-radius: 0;
    }

      p.Desc{
          text-align: center;
          font-family: 'Comfortaa', cursive;
      }

    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
        text-align: center;

        font-family: 'Comfortaa', cursive;
      padding: 25px;
    }
      div.contactimg{



            margin-top: 23px;
            width: 100%;

      }
      div.Info{
          margin-top:20px;
           font-family: 'Comfortaa', cursive;
          text-align: center;
      }

      div.output{
          margin-top:20px;
           font-family: 'Comfortaa', cursive;
          text-align-last: center;
      }

       #map {
           width: 100%;
           height: 400px;
           background-color: grey;
      }

  </style>
</head>
<body>
    <!--
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="#">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
-->
    <!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
        <div class="col-md-2 col-xs-6 logo">
          <a href="index.html"><img alt="logo" class="logo-nav" src="images/ow.jpg"></a>
        </div>
        <!--/.LOGO END-->

      </div>

      <div class="menu-wrap">
        <nav class="menu">
          <div class="menu-list">
            <a  href="index.html" >
              <span>Home</span>
            </a>

           <a  href="store.php" >
              <span>Online Store</span>
              </a>
            <a  href="contact.php" class="active">
              <span>Contact</span>
            </a>
            <a  href="login.php" >
            <span>Log in</span>
          </a>
          </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
      </div>
      <button class="menu-button" id="open-button">
        <span></span>
        <span></span>
        <span></span>
      </button><!--/.for-sticky-->
    </div>
    <!--/.HEADER END-->

 <br>
      <div class="contactimg">
        <img src="contactus.jpg" class="contactimg" style="width:100%" alt="Image">


        </div>


    <div class="Info">
        <button type="button" class="btn btn-success" style="margin-right: 16px" onclick="displayHome()"><span class="icon-paper-plane-o"></span> Contact WebSite Manager</button>
        <button type="button" class="btn btn-success" style="margin-right: 16px" onclick="displayArtist()" ><span class="icon-mail"></span> Contact the Artist</button>




    </div>
    <br>

   <div class="output" id="getoutput">



        </div>
    <br><br><br><br><br><br>
    <div id="map">

    </div>





    <footer class="container-fluid text-center">
  <p>Han Song & Wei Luo</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
      <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/masonry.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>

</body>
</html>
