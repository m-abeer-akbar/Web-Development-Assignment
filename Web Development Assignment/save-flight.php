<?php
try{
    $conn = new PDO('mysql:host=localhost;charset=utf8;dbname=wdfinal', 'root', '');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
    echo "Oh no, there was a problem" . $exception->getMessage();
}


//This is a simple example we would normally do some form validation here

//basic form processing
//look at the name values of form controls in create.php to see where these values ($_POST['title'], $_POST['year'] etc.) come from
$origin_id = $_POST['origin_id'];
$destination_id = $_POST['destination_id'];
$departure_date = $_POST['departure_date'];
$departure_time = $_POST['departure_time'];
$arrival_date = $_POST['arrival_date'];
$arrival_time = $_POST['arrival_time'];


//SQL INSERT for adding a new row
//Use a prepared statement to bind the values from the form
$query = "INSERT INTO flights (id, origin_id , destination_id, departure_date, departure_time, arrival_date, arrival_time ) VALUES (NULL, :origin_id, :destination_id, :departure_date, :departure_time, :arrival_date, :arrival_time)";
$stmt = $conn->prepare($query);
$stmt->bindValue(':origin_id', $origin_id);
$stmt->bindValue(':destination_id', $destination_id);
$stmt->bindValue(':departure_date', $departure_date);
$stmt->bindValue(':departure_time', $departure_time);
$stmt->bindValue(':arrival_date', $arrival_date);
$stmt->bindValue(':arrival_time', $arrival_time);
$stmt->execute();
$conn = NULL;
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Save flight</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
echo "<p>Added the details for {$origin_id}.</p>"
?>
</body>
</html>