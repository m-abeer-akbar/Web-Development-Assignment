<?php

try{
    $conn = new PDO('mysql:host=localhost;charset=utf8;dbname=wdfinal', 'root', '');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

$query = "SELECT * FROM flights"; //SQL to select all the airports
$resultset = $conn->query($query);
$flights = $resultset->fetchAll(); //use fetchAll(), we need multiple airports
$conn=NULL;

session_start();
if(!isset($_SESSION["user"]))
{
	
	header( "Location: login.php" );
};

?>
<!DOCTYPE HTML>
<html>
<head>
<title>List of the flights</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<style>
        table {
        border-collapse: collapse;
        width: 50%;
      }
      tr {
        background-color: #f5f5f5;
      }
      th,
      td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ccc;
      }
      tr:hover {
        background-color: #cdcdcd;
      }
    </style>
<ul>
<?php

//loop over the array of airports
echo "<h1>View Flights</h1>";
foreach ($flights as $flights) {
    echo "<table>
    <tr> 
    <th>Flight ID</th>
    <th>Departure Date</th>
    <th>Arrival Date</th>
    <th>More Info</th>
    </tr>";
    // for each airports create a hyperlink that features the airport's id in the query string

    echo "<tr>";
    echo "<td>" . $flights["id"] . "</td>";
    echo "<td>" . $flights["departure_date"] . "</td>";
    echo "<td>" . $flights["arrival_date"] . "</td>";
    echo "<td>" . "<a href='flight-details.php?id={$flights["id"]}'> View </a></td>";
    echo "</tr>";
}
echo "</table>";
?>
</ul>
</body>
</html>