<?php
require_once($_SERVER['DOCUMENT_ROOT']."/bank/brief-8/app/models/ClasseTransaction.php");
require_once($_SERVER['DOCUMENT_ROOT']."/bank/DataService.php");   
    if(isset($_GET['id'])){
        $transactionIdToDelete = $_GET['id'];
        $transaction = new Transactions();
        $transaction->setId($transactionIdToDelete);
        $transaction->deleteTransactions();
        header("Location:transaction.php");
        exit();
    }else{
        echo "invalid request";
        exit();
    }

 ?>