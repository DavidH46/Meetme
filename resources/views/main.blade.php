<!DOCTYPE html>
<html>
    <head>
        <title>Meetme</title>

        <!-- Bootstrap -->
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="fullpage.js/jquery.fullPage.css" />
        <script src="jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="fullpage.js/jquery.fullPage.js"></script>
        <style>
        #section0{
          background-image: url(images/main_first.jpg);
          background-size:cover;
        }
        #section1{
          background-image: url(images/main_second.jpg);
          background-size:cover;
        }
        #section2{
          background-image: url(images/main_third.jpg);
          background-size:cover;
        }
        #brand{
          color: grey;
          font-weight: bold;
          font-size: 22px;
        }
        #right{
          padding-top: 5px;
          padding-right: 50px;
        }
        #login{
          color: white;
          font-weight: bold;
        }
        </style>


    </head>

    <body>
      <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" id="brand" href="#">Meetme</a>
          </div>
          <ul class="nav navbar-nav navbar-right" id="right">
            <li><a href="#" id="login">Login</a></li>
          </ul>
        </div>
      </nav>

      <div id="fullpage">
        <div class="section" id="section0"></div>
        <div class="section" id="section1"></div>
        <div class="section" id="section2"></div>
      </div>

      <script type="text/javascript">
        $(document).ready(function() {
          $('#fullpage').fullpage({
            navigation: true,
          });
        });
    	</script>

    </body>
</html>
