<?php
$host = 'serverwebtest.database.windows.net';
$username = 'testadmin';
$password = 'Admintest18';

//Establishes the connection
$conn = mysqli_init();
mysqli_connect($conn, $host, $username, $password);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
echo 'Conectat cu succes';
//Close the connection
mysqli_close($conn);
?>
