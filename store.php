<html>
<body>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
// Variables to be inserted into the table
$name = $_POST["name"];
$email = $_POST["email"];
$phno=$_POST["number"];
$msg=$_POST["message"];

// Sql query to be executed
$sql = "INSERT INTO `data` (`name`,`email`,`phno`,`msg`) VALUES ('$name', '$email','$phno','$msg')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo " submited successfully<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
/*$sql = "SELECT `name`, `email` FROM data";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo " - Name: " . $row["name"]. "-email " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}*/

mysqli_close($conn);


?>




</body>
</html>
