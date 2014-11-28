<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="akirachix"; // Mysql password
$db_name="startups"; // Database name
$tbl_name="start"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

if(isset($_POST['emailaddress'])){
	header('location form.php');
}

// Get values from form
$companyname=$_POST['companyname'];
$website=$_POST['companywebsite'];
$url=$_POST['hiringurl'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$logo=$_POST['companylogo'];
$tagline=$_POST['tagline'];

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("upload/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
    }
  }
} 
// Insert data into mysql
$sql="INSERT INTO $tbl_name(company_name, website, hiring_url, firstname, lastname, email, company_logo,tagline)VALUES('$companyname', '$website', '$url','$fname', '$lname', '$email', '$logo')";
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