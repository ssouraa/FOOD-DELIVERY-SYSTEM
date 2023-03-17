<html>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
 
</head>
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

$sql = "SELECT `name`, `email`, `phno`, `msg` FROM data";
$result = mysqli_query($conn, $sql);

/*if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo " - Name: \t " . $row["name"]. "  -email \t " . $row["email"]. "   -phone number: \t" . $row["phno"]. "  message from customer: \t " . $row["msg"]. "<br>";
  }
} else {
  echo "0 results";
}*/

//mysqli_close($conn);


?>

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>phone number</th>
                <th>message</th>
            </tr>
        </thead>
      <?php  
      if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
         ?>
        <tbody>
            <tr>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["phno"];?></td>
                <td><?php echo $row["msg"];?></td>
            </tr>
            <?php }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
            
    </table>
    <script>
    $(document).ready(function () {
    $('#example').DataTable();
});
  </script>

</body>
</html>
