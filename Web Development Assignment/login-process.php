<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

<title>Login Process</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>

<body>
<div class="topnav" id="myTopnav">
  <a href='browse-flights.php' class="active">View Flights</a></a>
  <a href='create-flight.php'>Create Flight</a>
  <a href='logout.php'>Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

  <?php
  try{
    
       $conn = new PDO('mysql:host=localhost;dbname=WDFinal', 'root', '');
}
catch (PDOException $exception)
{
    echo "Oh no, there was a problem" . $exception->getMessage();
}


if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    
    if($row = $stmt->fetch()){

       if(password_verify($password, $row["password"])) {
          
          $_SESSION["user"] = $email;
          echo "<p> You are logged in as : {$_SESSION['user']}</p>
         <h1> Queensgate Airlines </h1>";
          
      }else{
         
          echo "<p>That's the wrong username/password</p>";
      }
   }else{
      
      echo "<p>That's the wrong username/password</p>";
   }
}else{
    
    header( "Location: login.php" );
}
  ?>

</body>
</html>
