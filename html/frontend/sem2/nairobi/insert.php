<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="akirachix"; // Mysql password
$db_name="startups"; // Database name
$tbl_name="start"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form
$name=$_POST['companyname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];

// Insert data into mysql
$sql="INSERT INTO $tbl_name(company_name, website)VALUES('$name', '$lastname')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='insert.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?>

<?php
// close connection
mysql_close();
?>