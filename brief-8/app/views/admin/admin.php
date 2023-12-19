<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>

    <?php
            require_once ("../../../../DataService.php");

            $sql= "CREATE TABLE IF NOT EXISTS rolle(
                admimName VARCHAR (250) NOT NULL ,
                rolle VARCHAR (250) NOT NULL 
             )";
    ?>
    
    <div class="flex gap-[350px] bg-[url('../../../public/sliders-desktop-6_10.jpg')] bg-cover  h-screen ">
            <div class=" w-[20%] h-[100vh] bg-cyan-950 flex flex-col items-center justify-center gap-24 ">
            <img class="w-[48%] h-auto rounded-[50%] " src="../../../public/logo.png" >
            
            
                <aside>
                <a href="admin.php"><p class="flex justify-center justify-items-center items-center	w-[306px] text-white cursor-pointer">home</p></a><br>
                    <a href="bank.php"><p class="flex justify-center justify-items-center items-center	w-[306px] text-white cursor-pointer">Bank</p></a><br>
                    <a href="client.php"><p class="flex justify-center justify-items-center items-center	w-[306px] text-white cursor-pointer"> Client</p></a> <br>
                    <a href="account.php"><p class="flex justify-center justify-items-center items-center	w-[306px] text-white cursor-pointer"> Account</p></a> <br>
                    <a href="transaction.php"><p class="flex justify-center justify-items-center items-center	w-[306px] text-white cursor-pointer"> Transaction</p></a> <br>
                    <a href="agency.php"><p class="flex justify-center justify-items-center items-center	w-[306px] text-white cursor-pointer"> Agency</p></a> <br>
                    <a href="Distributeurs.php"><p class="flex justify-center justify-items-center items-center	w-[306px] text-white cursor-pointer"> Distibuteurs</p></a> <br>
                    <a href="home.php"><p class="flex justify-center justify-items-center items-center	w-[306px] text-white cursor-pointer"> Log Out</p></a> <br>c


                    
                </aside>  
                
            </div>
            <div class=" flex flex-col gap-[100px]   ">
                
                <img class=" w-[25%] h-fit rounded-3xl ml-32  " src="../../../public/WhatsApp Image 2023-10-03 à 11.50.20_25e81930.jpg" alt="">
                
               <div class="flex flex flex-col 	gap-16  ">
                    <div class="text-9xl gap-24 text-orange-600 ">
                        <h1 class="">WELCOM</h1>
                    </div>
                     <div class="text-white ml-3 text-2xl">
                        <h2>NOM: CHEMMAM</h2><br>
                        <h2>PRENOM: ABDELAZIZ</h2><br>
                        <h2>ROLL: ADMIN</h2><br>
                
                     </div>
              </div>
        </div>
    </div>

</body>
</html>