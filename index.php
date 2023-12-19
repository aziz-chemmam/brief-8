<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<?php

include("index.php");

// Create table
$sql = "CREATE TABLE IF NOT EXISTS MyUser (
    id int AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyUser created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["nom"]) && isset($_POST["password"])) {
    $nom = $_POST["nom"];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    // Requête pour insérer les données dans la table
    $stmt = $conn->prepare("INSERT INTO MyUser(nom, password, ) VALUES (?,?");
    $stmt->bind_param('sss', $nom, $password,);

    if ($stmt->execute()) {
        echo "Les données ont été ajoutées avec succès.";
    } else {
        echo "Erreur : " . $stmt->error;
    }
    $stmt->close();
  }  
}

$conn->close();
?>

    <div class="items-center justify-center	 bg-gray-200 p-6 rounded-lg shadow-lg w-fit  ">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <label for="nom">Nom :</label><br>
            <input type="text" id="nom" name="nom"><br><br>
            
            <label for="password">Password :</label><br>
            <input type="password" id="password" name="password>" <br><br><br>

            
            <input type="submit" value="Ajouter">
        </form>

    </div>



</body>
</html>