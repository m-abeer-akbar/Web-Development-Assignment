<!DOCTYPE HTML>
<html>
<head>
<title> Add a new flight </title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
    <style> 
    input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Style the submit button */
input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Add a background color to the submit button on mouse-over */
input[type=submit]:hover {
  background-color: #45a049;
}
</style>

<h1>Add a new flight</h1>
<form action="save-flight.php" method="post">
<div>
<label for= "origin_id">Origin ID:</label>
<input type="text" id="title" name="origin_id">
</div>
<br>
<label for="destination_id">Destination ID:</label>
<input type="text" id="destination_id" name="destination_id">
</br>
<br>
<label for="departure_date">Departure Date:</label>
<input type="date" id="departure_date" name="departure_date">
</br>
<br>
    <label for="departure_time">Departure Time:</label>
    <input type="time" id="departure_time" name="departure_time">
</br>
 <br>
        <label for="arrival_date">Arrival Date:</label>
        <input type="date" id="arrival_date" name="arrival_date">
</br>
 <br>
    <label for="arrival_time">Arrival Time:</label>
    <input type="time" id="arrival_time" name="arrival_time">
</br>

<br>
<input type="submit" name="submitBtn" value="     Add Flight     ">
</br>
</form>
</body>
</html>