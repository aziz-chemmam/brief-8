<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../../public/style.css">

    <title>Document</title>
</head>
<body>
    <?php
    require_once("../../../../DataService.php");

    $sql ="CREATE TABLE if not exists transactions(
            id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            montant VARCHAR(255) NOT NULL,
            devis VARCHAR(255) NOT NULL,
            typpe VARCHAR(255) NOT NULL,
            IdCompte INT UNSIGNED,
            FOREIGN KEY (IdCompte) REFERENCES account(id)   
                ON DELETE CASCADE ON UPDATE CASCADE 
        )";

       if ($conn->query($sql) === TRUE) {  
        //   echo "Table account created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }  
   
    ?>
    <?php
   require_once "../../../public/navbar.php"
   ?>
    <div class="absolute flex flex-col justify-center top-0 ml-96 ">
    <button class="absolute top-9 bg-sky-950 px-5 py-2 rounded-lg text-white drop-shadow-lg	" id="button" type="submit">Ajouter un compte</button>

    <table class="w-[800px]" >
            <thead>

                <tr>
                    <td>ID</td> 
                    <td>ID DE COMPTE</td>  
                    <td>MONTANT</td>
                    <td>DEVIS</td>
                    <td>TYPE</td>
                    <td>ACTION</td>
                </tr>
            </thead>
            <tbody>
                <?php
         if(!$conn){
            die("connection is not connected : " .mysqli_connection_error());
          }
              $sql = "SELECT * FROM transactions";
              $result = mysqli_query($conn, $sql);
          
              if($result) {
                while($row = mysqli_fetch_array($result)){
                  echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['IdCompte']}</td>
                                <td>{$row['montant']}</td>
                                <td>{$row['devis']}</td>
                                <td>{$row['typpe']}</td>
                               
                                <td>
                                    <a href='{$row["id"]}' class='font-bold text-white h-8 rounded cursor-pointer px-3 bg-gray-700 shadow-md transition ease-out duration-500 border-gray-700 '>EDIT</a>
                                    <a href='transDel.php?id={$row["id"]}' class='font-bold text-white h-8 rounded  cursor-pointer px-2 bg-red-700 shadow-md transition ease-out duration-500 border-red-700 '>DELET</a>
                                </td>
          
                        </tr>";
                  
                  
                }
                echo "</tbody></table>";
                    } else {
                        echo "Erreur lors de l'exécution de la requête : " . mysqli_error($cnx);
                    }
              
          ?>
        <div id="ajouter" class="w-84 h-96 items-center flex gap-[20px] rounded-lg ml-72 mt-10 flex-col justify-center text-center bg-black transform scale-0 duration-700 ease-in-out	">
                <form action="transaction.php" method="POST" class="flex flex-col gap-2 ">

                    <img class="absolute top-3 right-9" src="icons8-effacer-30.png" id="hide">
                    
                    <label for="balance"></label>
                    <input class="px-5 py-2 rounded text-gray-300 bg-gray-700" type="text" name="montant" placeholder="MONTANT">
                    
                    <label for="devis"></label>
                    <input class="px-5 py-2 rounded text-gray-300 bg-gray-700 " type="text" name="devis" placeholder="DEVIS">
                    
                    <label for="nom"></label>
                    <input class="px-5 py-2 rounded text-gray-300 bg-gray-700" type="text" name="typpe" placeholder="type">
                    
                    <label for="nom"></label>
                    <input class="px-5 py-2 rounded text-gray-300 bg-gray-700" type="text" name="IdCompte" placeholder="ID DE compte">
                    <div>
                    <button class="px-8 py-2 rounded text-white bg-orange-700 " type="submit" name="submit">Ajouter</button>
                    </div>
                </form>
    </div>
    </div>
    <script src="../../../public/script.js"></script>

</body>
</html>