<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../../../public/style.css">


    <title>Document</title>
</head>
<body class="oferflow-y-hidden">
    <?php
require_once($_SERVER['DOCUMENT_ROOT']."/bank/DataService.php");    
   
    $sql= "CREATE TABLE if not exists  client(
  clientId INT(10) AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(30) NOT NULL,
  prenom VARCHAR(255) NOT NULL,
  adresse VARCHAR(255) NOT NULL,
  dateDeNaissance VARCHAR(255) NOT NULL,
  nationalite VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  pw VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  genre VARCHAR(255) NOT NULL
  )";
  if ($conn->query($sql) === TRUE) {
    //   echo "Table client created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
          //insert

     
?>
    
    <?php
   require_once "../../../../public/navbar.php"
   ?>
    <div class="absolute flex flex-col justify-center top-0 ml-[9%] ">
    <button class="absolute ml-48 top-9 bg-sky-950 px-5 py-2 rounded-lg text-white drop-shadow-lg	" id="button" type="submit">Ajouter un compte</button>

    <table class="w-[1200px]" >
         <thead>
                <tr>
                    <td>ID</td>  
                    <td>nom</td>
                    <td>prenom</td>
                    <td> DATE DE NAISSANCE </td>
                    <td>NATIONALITE</td>
                    <td>EMAIL</td>
                    <td>USERNAME</td>
                    <td>ADRESSE</td>
                    <td>GENRE</td>
                    <td>ACTION</td>

                </tr>
            </thead>
            <tbody>
            <?php

if(!$conn){
  die("connection is not connected : " .mysqli_connection_error());
}
    $sql = "SELECT * FROM client";
    $result = mysqli_query($conn, $sql);

    if($result) {
      while($row = mysqli_fetch_array($result)){
        echo "<tr>
                      <td>{$row['id']}</td>
                      <td>{$row['nom']}</td>
                      <td>{$row['prenom']}</td>
                      <td>{$row['dateDeNaissance']}</td>
                      <td>{$row['nationalite']}</td>
                      <td>{$row['email']}</td>
                      <td>{$row['username']}</td>
                      <td>{$row['adresse']}</td>
                      <td>{$row['genre']}</td>
                      
                    
                      <td>
                          <a href='{$row["id"]}' class='font-bold text-white h-8 rounded cursor-pointer px-3 bg-gray-700 shadow-md transition ease-out duration-500 border-gray-700 '>EDIT</a>
                          <a href='clientDel.php?id={$row["id"]}' class='font-bold text-white h-8 rounded  cursor-pointer px-2 bg-red-700 shadow-md transition ease-out duration-500 border-red-700 '>DELET</a>
                      </td>

              </tr>";
        
        
      }
      echo "</tbody></table>";
          } else {
              echo "Erreur lors de l'exécution de la requête : " . mysqli_error($cnx);
          }
    
?>
        
        
        
        
        <div id="ajouter" class="w-[40%] h-fit items-center flex gap-[20px] fixed rounded-lg ml-72 mt-[600px] flex-col justify-center text-center bg-black transform scale-0 duration-700 ease-in-out	">
            <form action="client.php" method="POST" class="flex flex-col gap-2 ">
                    <img class="absolute top-3 right-9" src="icons8-effacer-30.png" id="hide">
                    
                    <label for="balance"></label>
                    <input class="px-20 py-2 rounded text-gray-300 bg-gray-700" type="text" name="nom" placeholder="nom">
                    
                    <label for="devis"></label>
                    <input class="px-20 py-2 rounded text-gray-300 bg-gray-700 " type="text" name="prenom" placeholder="prenom">
                    
                    <label for="nom"></label>
                    <input class="px-20 py-2 rounded text-gray-300 bg-gray-700" type="text" name="adresse" placeholder="adresse">
                    
                    <label for="nom"></label>
                    <input class="px-20 py-2 rounded text-gray-300 bg-gray-700" type="text" name="dateDeNaissance" placeholder="date de naissance">
                    
                    <label for="nom"></label>
                    <input class="px-20 py-2 rounded text-gray-300 bg-gray-700" type="text" name="nationalite" placeholder="NATIONALITE">

                    <label for="nom"></label>
                    <input class="px-20 py-2 rounded text-gray-300 bg-gray-700" type="text" name="email" placeholder="email">
                   
                    <label for="nom"></label>
                    <input class="px-20 py-2 rounded text-gray-300 bg-gray-700" type="text" name="pw" placeholder="password">

                    <label for="nom"></label>
                    <input class="px-20 py-2 rounded text-gray-300 bg-gray-700" type="text" name="username" placeholder="username">

                    <label for="nom"></label>
                    <input class="px-20 py-2 rounded text-gray-300 bg-gray-700" type="text" name="genre" placeholder="genre">
                    <div>
                    <button class="px-8 py-2 rounded text-white bg-orange-700 " name="submit" type="submit">Ajouter</button>
                </div>
            </form>
    </div>

    </div>
    <script src="../../../public/script.js"></script>

</body>
</html>