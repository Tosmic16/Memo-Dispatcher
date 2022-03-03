<?php
include 'database.php';

$ref=$_GET['ref'];



?><!DOCTYPE html>
<html>
<body>

<form action="upload.php?ref=<?php echo $ref ?>" method="POST" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <input type="submit" value="Upload Image" name="submit">

 </form>
 <a href="e-memo.php">DONE</a>
 <style type="text/css">
 	a{ color: white; background-color: red; padding: 18px 28px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
    border: 2px solid red;
     border-radius: 2px;
         


}
 </style>
</body>
</html> 
