<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
    
    <link href="css/bootstrap.css" rel="stylesheet" />
 <link href="style1.css" rel="stylesheet" />
<link href="css/bootstrap-theme.css" rel="stylesheet" />
<script src="qwerty.js"></script>
</head>

    
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
<ul class="nav navbar-nav centered-navbar">
  <li><img src="college.png" height="75px"></li>
  <ul style="list-style: none;" >
    <br>
    <li style="color: white; font-size: 20px;">ST.THOMAS' COLLEGE OF ENGINNERING AND TECHNOLOGY</li>
    <li style="color: white; text-align: left;">4 D.H ROAD, KOLKATA-700023</li>
  </ul>
</ul>

<ul style="list-style: none" class="navbar-nav ml-auto">
    <li style="color: white;">ONLINE EXAMINATION SYSTEM</li>
</ul>
</nav>

    <main role="main" class="container">

<div class="admin2-page" >
    <h1 style="text-align: center">ADMIN</h1>
  <div class="form">
      <div class="error" style=<?php
        if(isset($_GET["login"])){
            echo "\"display:block;\"";
        }
        else{
            echo "\"display:none;\"";
        }
        ?>>
        <p>Invalid Username or password</p>    
    </div>
        
    <form action="includes/admin_login.inc.php" method="POST" class="admin2-form">
      <input type="text" name="admin_id" placeholder="user id"/>
      <input type="password" name="admin_pwd" placeholder="password"/>
      <input type="submit" value="Login" name="submit" />
    </form>
  </div>
</div>
      
    
          
  
    
    </main><!-- /.container -->


   <footer class="page-footer font-small  navbar-dark bg-dark" style="bottom: 0;margin-bottom: 0; position: fixed;width: 100%;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: white">© 2018 Copyright:
    <a>CSE DEPARTMENT</a>
  </div>
  <!-- Copyright -->

    </footer>
   
   
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>