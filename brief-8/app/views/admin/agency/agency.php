<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../../../public/style.css">
    

    <title>Document</title>
</head>
<body>
    <?php
require_once($_SERVER['DOCUMENT_ROOT']."/bank/brief-8/app/models/ClassAgency.php");



require_once($_SERVER['DOCUMENT_ROOT']."/bank/DataService.php");

    $sql = "CREATE TABLE if not exists agency(
     id INT(10)   AUTO_INCREMENT PRIMARY KEY,
     longtitude VARCHAR(255) NOT NULL,
     latitude VARCHAR(255) NOT NULL,    
     adresse VARCHAR(255) NOT NULL,
     bankId INT  UNSIGNED,
     FOREIGN KEY (bankId) REFERENCES bank(id)
        ON DELETE CASCADE ON UPDATE CASCADE 
    )";

    ?>
    <?php
   require_once "../../../../public/navbar.php"
   ?>
    <div class="absolute flex flex-col justify-center top-0 ml-96 ">
    <button class="absolute top-9 bg-sky-950 px-5 py-2 rounded-lg text-white drop-shadow-lg	" id="button" type="submit">Ajouter un compte</button>

    <table class="w-[800px]" >
           <thead>
            <tr>
                    <td>ID</td>  
                    <td>LONGTITUDE</td>
                    <td>LATITUDE</td>
                    <td>ADRESSE</td>
                    <td>BANK ID</td>
                    <td>ACTION</td>
                    

                </tr>
            </thead> 
            <tbody>
                <?php
         if(!$conn){
            die("connection is not connected : " .mysqli_connection_error());
          }
              $sql = "SELECT * FROM agency";
              $result = mysqli_query($conn, $sql);
          
              if($result) {
                while($row = mysqli_fetch_array($result)){
                  echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['longtitude']}</td>
                                <td>{$row['latitude']}</td>
                                <td>{$row['adresse']}</td>
                                <td>{$row['bankId']}</td>
                                
                               
                                <td>
                                    <a href='{$row["id"]}' class='font-bold text-white h-8 rounded cursor-pointer px-3 bg-gray-700 shadow-md transition ease-out duration-500 border-gray-700 '>EDIT</a>
                                    <a href='agencyDel.php?id={$row["id"]}' class='font-bold text-white h-8 rounded  cursor-pointer px-2 bg-red-700 shadow-md transition ease-out duration-500 border-red-700 '>DELET</a>
                                </td>
          
                        </tr>";
                  
                  
                }
                echo "</tbody></table>";
                    } else {
                        echo "Erreur lors de l'exécution de la requête : " . mysqli_error($cnx);
                    }
              
          ?>
        
        <div id="ajouter" class="w-84 h-96 items-center flex gap-[20px] rounded-lg ml-72 mt-10 flex-col justify-center text-center bg-black transform scale-0 duration-500 ease-in-out ">
             <form action="agency.php" method="POST" class="flex flex-col gap-2 ">

           
                <img class="absolute top-3 right-9" src="icons8-effacer-30.png" id="hide">
                
                
                <label for="devis"></label>
                <input class="px-5 py-2 rounded text-gray-300 bg-gray-700 " type="text" name="longtitude" placeholder="LONGTITUDE">
                
                <label for="nom"></label>
                <input class="px-5 py-2 rounded text-gray-300 bg-gray-700" type="text" name="latitude" placeholder="LATITUDE">
                
                <label for="nom"></label>
                <input class="px-5 py-2 rounded text-gray-300 bg-gray-700" type="text" name="adresse" placeholder="ADRESSE">

                <select id="accountID" name="accountID" class="w-[304px] block py-2.5 px-0 text-lg text-gray-900 bg-gray-800 p-2 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                  <option disabled selected value="" class="bg-dark-gray-800">Select bank</option>
                  <?php
                  $accountQuery = "SELECT id, nom FROM bank";
                  $accountResult = $conn->query($accountQuery);

                  if ($accountResult->num_rows > 0) {
                      while ($row = $accountResult->fetch_assoc()) {
                        echo "<option value='{$row['id']}'>{$row['nom']}</option>";
                    }
                  }
                  
                  ?>
                  
              </select>
                <div>
                 <button class="px-8 py-2 rounded text-white bg-orange-700 " type="submit" name="submit" >Ajouter</button>
                 </div>
            </form>
    </div>

    </div>
    <script src="../../../../public/script.js"></script>
</body>
</html>