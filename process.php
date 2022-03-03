<?php

// connect database
include 'database.php';

$pnd=0;

// pass the input into variables using POST

if(isset($_POST["done"])){

    $from = $_POST["from"];
    $to = $_POST["to"];
    $thr = $_POST["thr"];
    $subj = $_POST["subj"];
    $ref = $_POST["reff"];
    $dat = date('m/d/y', time());
    
    //validate formz


    if(empty($ref) || empty($from) || empty($to)  || empty($subj)){
    
        //alert if form is invalid

       echo "<script> alert('Incomplete Form') </script>";

}else
{
        //alert if form is valid

    echo "<script> alert('Successful') </script>";
   
    //insert record into table
    if (!empty($thr)) {
        $pend = 1;
    
}

    $Q = "INSERT INTO leaving (refer, sender, receiver, through, subjec, dat,pend)
                        VALUES ('$ref', '$from', '$to', '$thr', '$subj','$dat','$pend')";
                        mysqli_query($conn, $Q); 
                        header("location: test.php?ref=$ref");

}

}
?>




