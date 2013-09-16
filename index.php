<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 

<?php include("config.php"); ?>
<?php
// Create connection
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$res = mysql_query("SHOW DATABASES");

while ($row = mysql_fetch_assoc($res)) {
  echo $row['Database'] . "\n";
}

?>


 </body>
</html>
