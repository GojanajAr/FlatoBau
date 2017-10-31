<!DOCTYPE html>
<html>
<?php 
  include 'function.php';
  check_user()
  ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">

  
   <link rel="stylesheet" type="text/css" href="CSS/styleMenu.css">
   <script type="text/javascript" src="JS/script.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script type="text/javascript" src="JS/bootstrap.js"></script>	<link rel="stylesheet" type="text/css" href="CSS/style.css">

    
  
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="img/logoo.png" class="img-responsive" alt="Cinque Terre" width="213" height="52"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        
       <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Sorto <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      <form class="navbar-form navbar-left">
        
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><?php 
              // session_start();
                  ?>
               
                  <?php if(isset($_SESSION['username'])): ?>
                  <p><span class="glyphicon glyphicon-user"></span> <link href="index.php"><?php echo $_SESSION['username']; ?></link>
                  </p>
                  <?php endif; ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menü <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">Home</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Angebot</a></li>
            <li><a href="#">Rechnung</a></li>
            <li><a href="#">Abschlagsrechnung</a></li>
            <li><a href="#">Schlussrechnung</a></li>
            <li><a href="#">Alles</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="LogOut.php">LogOut</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
       <div class="jumbotron"> 
       <div class="container center">
       
	        <div class="button">
    	    		<input type="button" class="btn-block" class="deko" id="login-button" value="Angebot" onclick="window.location='MenuAngebot.php';"  /> 
    	    		<input type="button" class="btn-block" class="deko" id="login-button" value="Rechnung" onclick="window.location='MenuRechnung.php';"/>
    	    		<input type="button" class="btn-block" class="deko" id="login-button" value="Abschlagsrechnung" onclick="window.location='MenuAbschlagsrechnung.php';"/>
    	    		<input type="button" class="btn-block" class="deko" id="login-button" value="Schlussrechnung" onclick="window.location='MenuSchlussrechnung.php';"/>
    	    		<input type="button" class="btn-block" class="deko" id="login-button" value="Alles" onclick="window.location='Alles.php';"/>
    	</div>
    </div>
    
  </div>
</body>
</html>
