<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="IMG/r.ico">

    <title> ITS Verve</title>

    <?php if(basename($_SERVER['PHP_SELF']) == 'login.php'){

            echo "

               <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Lobster' />
               <!-- Bootstrap core CSS -->
              <link href='../Style/css/bootstrap.min.css' rel='stylesheet'>

               <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
               <link href='../Style/css/ie10-viewport-bug-workaround.css' rel='stylesheet'>

               <!-- Custom styles for this template -->
                <link href='../Style/css/main.css' rel='stylesheet'>

               <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
               <!--[if lt IE 9]><script src='../../assets/js/ie8-responsive-file-warning.js'></script><![endif]-->
               <script src='../Style/js/ie-emulation-modes-warning.js'></script>
               <script src='../Style/js/main.js'></script>


                <video playsinline autoplay muted poster='polina.jpg' id='bgvid'>
                    <source src='../IMG/loop1.mp4' type='video/mp4'>
                </video>

            ";



      } ?>

   <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
    <!-- Bootstrap core CSS -->
    <link href="Style/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="Style/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Style/css/main.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="Style/js/ie-emulation-modes-warning.js"></script>
    <script src="Style/js/main.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand" id="brand"></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                </ul>
              </nav>
            </div>
          </div>

            <div id="pannel1" class="inner cover">
               <h1 class="cover-heading" id="brand">Login</h1>
                  <br>
                 <form id="login" method="post" action="Functions/login.php" class="form-signin">

                     <input class="form-control" type="username" name="username" placeholder="Username" required>
                     <br>
                     <button class="btn btn-lg btn-default">Enter</button>

                  </form>
            </div> 

            <?php if(basename($_SERVER['PHP_SELF']) == 'login.php'){ 

                echo "

                      <script> 

                          document.getElementById('login').action='../Functions/login.php';
                          window.alert('Your Username was incorrect please press OK to try again');



                      </script>
                ";

            } 

            ?>

          <div id="pannel2" class="inner cover">
            <h1 class="cover-heading" id="brand">Verve</h1>
            <img src="">
            <p class="brand"></p>
            <p class="lead"></p>
            
            <script type="text/javascript">

              function hideFunction() {
                    document.getElementById('pannel2').style.visibility='hidden';
                    document.getElementById('pannel1').style.display='block';
                    document.getElementById('pannel1').style.visibility='visible';
                 }

            </script>

             <button href="" onclick=" hideFunction() " class="btn btn-lg btn-default">Login</button>     


          </div>

            <?php if(basename($_SERVER['PHP_SELF']) == 'login.php'){ 

                echo "<form action='../Pages/helpr.php'>

                    <button href='Pages/help.php' class='btn btn-lg btn-link'>Help?</button>

                  </form>";}

                  else{

                    echo "<form action='Pages/helpr.php'>

                    <button href='Pages/help.php' class='btn btn-lg btn-link'>Help?</button>

                  </form>";
                  }

              ?>

          <video playsinline autoplay muted poster="polina.jpg" id="bgvid">
              <source src="IMG/loop1.mp4" type="video/mp4">
          </video>
          
          <div class="mastfoot">
            <div class="inner">
              
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="StyleSheets/js/jquery.min.js"><\/script>')</script>
    <script src="StyleSheets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
