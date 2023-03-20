<!DOCTYPE html>
<html lang="en">
<head>
<title>QueensGate Airlines | Login</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>

<body>
<style>

.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}

.container {
  position: left;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
  input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

</style>
<div class="header">
<h1>Welcome to Queensgate Airlines.</h1>
</div>

<form action="login-process.php" method="post" class="container">
    <label for="username"><b>Email address:</b></label>
    <input type="email" placeholder="Enter Email" id="email" name="email">
    <label for="password" ><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password">
    <input type="submit" class="btn" name="login" value="Login">
</form>
</div>
<p> email: k.l.hutton@assign3.ac.uk | password: password <br>
    email: y.miandad@assign3.ac.uk  | password: letmein </br>
    email: s.laxman@assign3.ac.uk  | password: password2 </p>

</body>
</html>
