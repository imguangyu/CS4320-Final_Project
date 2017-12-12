
<!DOCTYPE html>
<head>

  <title>Login</title>

  <link rel="stylesheet" href="http://ec2-54-193-13-150.us-west-1.compute.amazonaws.com/4320-project/css/styles.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://file.myfontastic.com/GrB9xuxQmbqKaaajF4NftS/icons.css" rel="stylesheet">

    <link href="http://ec2-54-193-13-150.us-west-1.compute.amazonaws.com/4320-project/css/style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

       #footer {
   position:absolute;
   bottom:0;
   width:100%;
height: 60px;
   background:#6cf;
  }


  body {
      background-color: #ffffff;
      font-family: 'Comfortaa', cursive;

  }
  </style>
</head>
<body>
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
            <a  href="contact.php" >
              <span>Contact</span>
            </a>
              <a  href="http://ec2-54-193-13-150.us-west-1.compute.amazonaws.com/4320-project/login.php" class ="active">
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

    <br><br><br>
    <form action="http://127.0.0.1:8081/" method="post">

      <div class="login">
          <div class="login-screen">



            <div class="app-title">
              <h1>One account </h1>
              <h1>FOR EVERYTHING</h1>
            </div>
            <div class="login-form">

              <div class="control-group">
              <input type="text" name="userName" placeholder="Username" required="">
              </div>

              <div class="control-group">
              <input type="password" name="logpassword" placeholder="Password" required="">
              </div>


              <input type="submit" class="btn " value="lgoin">
    </div>
  </div>
</div>
    </form>


    <div id="footer">
    <footer class="container-fluid text-center">
  <p>Han Song & Wei Luo</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="input" class="btn btn-danger ">Sign Up</button>
  </form>
</footer>
    </div>

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

<!--
<body>
<form action="login.php" method=POST>

<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<div class="login-form">


				<div class="control-group">

				<input type="text" class="login-field" value="" placeholder="username" name="userName" required="required">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>


				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" name="password" required="required">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>



				<input type="submit" class="btn btn-primary btn-large btn-block" name="submit" value="login">
				<a class="login-link" href="">Don't have an account? Go create one</a>
			</div>
		</div>
	</div>
</form>
</body>
-->

<!--
<form action="" method=POST>
  ID:<br>
  <input type="text" name="ID" required="required"> <br>
  UserName:<br>
  <input type="text" name="userName" required="required"> <br>
  password:<br>
  <input type="text" name="password" required="required">
  <br>
  Role:<br>
  <input type="radio" name="type" value ="Engineer" required="required"> Engineer<br>
  <input type="radio" name="type" value ="Conductor" required="required"> Conductor<br>
  <input type="radio" name="type" value ="Administrator" required="required"> Administrator
  <br>
  <br>
  <input type="submit" value="Login" name="submit">
    <br>
    -->
