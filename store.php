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

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
  </script>
     <script>
              $( function() {
                $( "#sortable1" ).sortable();
                $( "#sortable1" ).disableSelection();
              } );
  </script>

   <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/masonry.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>

    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>


  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
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
      body, html {
    height: 100%;
   background-color: whitesmoke;
}


  </style>
</head>
<body>

    <!--
<div class="jumbotron">
  <div class="container text-center">
    <h1>Way TO Wei</h1>
    <p>Wei’s work is about nature and humanity using multi-medias such as ink on paper, oil on canvas and watercolor. She often applies complimentary colors to create contrast and relationship between light and shadow.</p>
  </div>
</div>
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
            
           <a  href="store.php" class="active">
              <span>Online Store</span>
              </a>
            <a  href="contact.php">
              <span>Contact</span>
            </a>
              <a  href="login.php">
              <span class="icon-sign-in">Log in</span>
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
<br><br><br>
    <form action="" method="post">
<div class="container">
  <div class="row" id="sortable">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Sakura Peacock</div>
        <div class="panel-body"><img src="artworks/kongque.jpeg" class="img-responsive" style="width:304px;height:400px;" alt="Image"></div>
        <div class="panel-footer"><p class="Desc">Wei Luo<br> <i>Sakura Peacock</i><br>Digital painting<br> 18 X 22 (300 dpi)</p>
            <div style="text-align: center;">
            <button type="button" class="btn btn-primary" ><span class="icon-thumbs-up"></span> Like</button>
            <button type="button" class="btn btn-danger" ><span class="icon-basket"></span> order</button>
            </div>
          </div>

      </div>

    </div>

    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">Meow 🐱</div>
        <div class="panel-body"><img src="artworks/Meow.jpg" class="img-responsive" style="width:304px;height:400px;" alt="Image"></div>
        <div class="panel-footer"><p class="Desc">Wei Luo<br> <i>Meow</i><br>Digital painting<br> 18 X 22 (72 dpi)
          </p>
            <div style="text-align: center;">
            <button type="button" class="btn btn-primary" ><span class="icon-thumbs-up"></span> Like</button>
            <button type="button" class="btn btn-danger" ><span class="icon-basket"></span> order</button>
            </div>
          </div>
      </div>

    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">Portrait</div>
        <div class="panel-body"><img src="artworks/Portrait.jpg" class="img-responsive" style="width:304px;height:400px;" alt="Image"></div>
        <div class="panel-footer"><p class="Desc">Wei Luo<br> <i>Portrait</i><br>Charcoal<br> 18 X 22
          </p>
            <div style="text-align: center;">
            <button type="button" class="btn btn-primary" ><span class="icon-thumbs-up"></span> Like</button>
            <button type="button" class="btn btn-danger" ><span class="icon-basket"></span> order</button>
            </div>

          </div>

      </div>

    </div>
  </div>
</div><br>

<div class="container">
  <div class="row" id="sortable1">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Moon Blade</div>
        <div class="panel-body"><img src="artworks/Metalgear.jpg" class="img-responsive" style="width:400px;height:287.916px;" alt="Image"></div>
        <div class="panel-footer"><p class="Desc">Wei Luo<br> <i>Portrait</i><br>Charcoal<br> 18 X 22
          </p>
            <div style="text-align: center;">
            <button type="button" class="btn btn-primary" ><span class="icon-thumbs-up"></span> Like</button>
            <button type="button" class="btn btn-danger" ><span class="icon-basket"></span> order</button>
            </div>
          </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Invicible City</div>
        <div class="panel-body"><img src="artworks/InvicibleCity.jpg" class="img-responsive" style="width:400px;height:287.916px;" alt="Image"></div>
        <div class="panel-footer"><p class="Desc">Wei Luo<br> <i>Invicible City</i><br>Drawing<br> 18 X 22
          </p>
            <div style="text-align: center;">
            <button type="button" class="btn btn-primary" ><span class="icon-thumbs-up"></span> Like</button>
            <button type="button" class="btn btn-danger" ><span class="icon-basket"></span> order</button>
            </div>

          </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Still Life</div>
        <div class="panel-body"><img src="artworks/StillLife.jpg" class="img-responsive" style="width:400px;height:287.916px;" alt="Image"></div>
        <div class="panel-footer"><p class="Desc">Wei Luo<br> <i>Still Life</i><br>Water Color on paper<br> 16 X 20
          </p>
            <div style="text-align: center;">
            <button type="button" class="btn btn-primary" ><span class="icon-thumbs-up"></span> Like</button>
            <button type="button" class="btn btn-danger" ><span class="icon-basket"></span> order</button>
            </div>
          </div>
      </div>
    </div>
  </div>
</div><br><br>
        </form>

<footer class="container-fluid text-center">
  <p>Han Song & Wei Luo</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>





</body>
</html>
