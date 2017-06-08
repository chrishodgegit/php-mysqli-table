<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>test-table-001</title>
</head>
<body><center>

<?php
// using require so that if attempted credentials are not found the script will immediately exit
// in the below file define variables for "$servername","$uname","$pass","$dbname","$port"
// outside of example practice have apache restrict access to this credentials file
//  see http://www.htaccess-guide.com/
require '.credentials.php';

// create a connection to your mysql db
$con=mysqli_connect("$servername","$uname","$pass","$dbname","$port");

// Check connection, fail on connection error
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape special chars
$name = mysqli_real_escape_string($con, $_POST['name']);

// create your mysql query, for a small table we are selecting all items
$result0 = mysqli_query($con,"select * from book;");

// Build the table headers
echo '
<table border="1">
 <tr>
  <th>name</th>
  <th>category</th>
  <th>description</th>
 </tr>';
// while your mysqli_query result0 returns a row, populate a new table row with it's data
while($row = mysqli_fetch_array($result0)) {
  echo "<tr>";
// here are the row names that match your table header names
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['category'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
  echo "</tr>";
}
// close the table outside of the while loop
echo "</table>";
// close your mysqli connection
mysqli_close($con);
?>

</center></body>
</html>
