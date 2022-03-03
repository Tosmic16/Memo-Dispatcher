<?php
// connect database
include 'database.php';

// initialize the variables
$to ='';
$thr ='' ;
$subj = '';
$rec = '';
$error ='';


if(isset($_POST["done"])){

// pass the input into variables using POST
    $ref = $_POST["reff"];
    $to = $_POST["to"];
    $thr = $_POST["thr"];
    $subj = $_POST["subj"];
    $rec = $_POST["rec"];
    $dat = date('m/d/y', time());


    //validate form
    if(empty($to) || empty($subj)  || empty($ref)){
    
    //alert if form is invalid
       echo "<script> alert('Incomplete Form') </script>";

}else
{
    //alert if form is valid

    echo "<script> alert('Successful') </script>";

    //insert record into table
    
   
    $Q ="INSERT INTO internal (refer, collector, receiver, through, subjec, dat)
                        VALUES ('$ref', '$rec', '$to', '$thr', '$subj','$dat')";
                        mysqli_query($conn, $Q); 
                        header("location: itest.php?ref=$ref");

}

}

?>
