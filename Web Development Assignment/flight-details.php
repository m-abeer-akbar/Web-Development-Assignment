<?php
try{
    $conn = new PDO('mysql:host=localhost;charset=utf8;dbname=wdfinal', 'root', '');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
//get the id from the query string e.g. for details.php?id=4, $_GET['id'] has a value of 4
$flightsId=$_GET['id'];

$stmt = $conn->prepare("SELECT flights.id, flights.departure_date, flights.departure_time,flights.arrival_date,flights.arrival_time,
 origin.name AS origin, destination.name AS destination FROM airports,flights
JOIN airports AS origin ON flights.origin_id = origin.id
JOIN airports AS destination ON flights.destination_id = destination.id
WHERE flights.id = :id;" );
$stmt->bindValue(':id',$flightsId);
$stmt->execute();
$flights = $stmt->fetch(); 


$conn=NULL;

?>


<!DOCTYPE HTML>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

<title>Display the details for a flight</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</style>
</head>
<body>

<table>
<?php

if($flights){
	
	echo  "<tr> <th> Flight </th> <th> {$flights['id']} </th> </tr>" ;
	echo "<tr> <th> Origin </th> <th> {$flights["origin"]} </th> </tr>";
	echo "<tr> <th> Destination </th> <th> {$flights["destination"]} </th> </tr>";
	echo "<tr> <th>  Departure Date </th> <th> {$flights['departure_date']} </th> </tr>";
	echo "<tr> <th>  Departure Time </th> <th> {$flights['departure_time']} </th> </tr>";
	echo  "<tr> <th> Arrival Date </th> <th> {$flights['arrival_date']} </th> </tr>" ;
	echo  "<tr> <th> Arrival Time </th> <th> {$flights['arrival_time']} </th> </tr>" ;
	
}
else {
	echo "<p> Can't find a flight </p>";
}
?>
</table>
</body>
</html>