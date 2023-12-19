
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password);
      
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      // echo "Connected successfully";
      // Create database
$sql = "CREATE DATABASE if not exists DB_CIH";
if ($conn->query($sql) === TRUE) {
  // echo "Database created successfully";
} else { 
  echo "Error creating database: " . $conn->error;
}
$dbname = "DB_CIH";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>
