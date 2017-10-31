<?php
session_start();
require 'DB/dbconnect.php';
$message = "";

try {
    if (isset($_POST["Submit"]))
    {
        if (empty($_POST["username"]) && empty($_POST["password"])) 
        {
            $message = 'Sheno Username dhe Paswordin';
        }
        elseif (empty($_POST["username"])) 
        {
            $message = 'Sheno Username';
        } 
        elseif (empty($_POST["password"])) 
        {
            $message = 'Sheno Passwordin';
        }
        
      else 
      {
          $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $statement = $connect->prepare($query);
        $statement->execute(array(
            'username' => $_POST["username"],
            'password' => $_POST["password"]
          ));
        $count = $statement->rowCount();
          if ($count > 0) 
          {
            $_SESSION["username"] = $_POST["username"];
            header('location:index.php');

          } 
          else 
          {
               $message = 'Gabim';
          }
      }
    }
}
catch (PDOException $error) {
    $message = $error->getMessage();
}
?>  
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
  </head>
  <body>
    <div id="container">
      <div id="login">
        <?php if(!empty($message)): ?>
        <h3 class="message">
          <?php echo $message ?>
        </h3>
        <?php endif; ?>
        <p class="foto">
          <img src="img/logoo.png">
        </img>  
      </p>  
    <form action="loggin.php" method="POST">
      <input type="text" id="username" placeholder="Enter Username" name="username" />
      <input type="password" id="password" placeholder="Enter Password" name="password" />
      <input type="Submit" class="deko"  value="Submit" name="Submit" />
    </form>
    </div>
  </div>
</body>
</html>
