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
$companyname=$_POST['companyname'];
$website=$_POST['companywebsite'];
$url=$_POST['hiringurl'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$logo=$_POST['companylogo'];

// Insert data into mysql
$sql="INSERT INTO $tbl_name(company_name, website, hiring_url, firstname, lastname, email, company_logo)VALUES('$companyname', '$website', '$url','$fname', '$lname', '$email', '$logo')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='form.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?>

<?php
// close connection
mysql_close();
?>