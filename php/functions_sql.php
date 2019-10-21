<?php
$servername = "localhost";
$username = "root";
$password = "Lodjur9898Skrillex9898";
$dbname = "portfolio";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<!---Connected successfully--->";

//Functions List
function attempted_login(){
  if(file_exists("php/login.php"))
      {
        echo file_get_contents("php/login.php");
      }
      else
      {
        echo 'Opps! File not found. Please check the path again';
      }
  }
?>

