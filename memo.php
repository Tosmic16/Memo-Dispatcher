<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Memo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body style="size:auto; background: grey" >

    <a href="homepage.php" id="in"><i>Home</i></a>

    <h1 style="text-align:center; background:linear-gradient(to right, red , yellow); "> MEMO </h1>
    <FORM method="POST">
          <input type="submit" name="search" value="search">

    </FORM>
   


    <?php
 if(isset($_POST['search'])){

        header('location: search.php');

    }
    include 'process.php';

    $q= "SELECT * FROM leaving";
    $resut = mysqli_query($conn, $q);

   while($row = mysqli_fetch_assoc($resut)): ?>

   <div style="background-color:white; font-family:'Times New Roman', Times, serif; border: 2px solid royalblue; color:black; text-indent:3px; padding-left: 5px;" > 
  <h3 style="font-size:20px; color:royalblue;"><b> <?php $id = $row['id'] ; echo"<b><i>FROM: " .$row['sender']."</i> <br>" ?></b> </h3>

  <p>  <?php echo "<p style='color:grey'><i>TO: </i> ". "</p>    ".$row['receiver']."  <i> on </i> ".$row['date'] ; ?> </p><br>

    <p>  <?php echo"<b>SUBJECT: </b>". $row['subjec'] ; ?> </p><br>
            <?php $qr = "SELECT * FROM image WHERE id = $id "; 
              $result = mysqli_query($conn,$qr);
              while ($ro = mysqli_fetch_assoc($result)): 
            ?>
          <a href="<?php  echo $ro['image'];  ?>" id="e">  <img src="<?php  echo $ro['image'];  ?>" alt="taste" height = 200px; width=200px;></a>

            <?php endwhile; ?>

 <form method="POST">

      <input type="hidden" name="del" value="<?php echo $row['id'] ?> " >
      <input type="submit" name="delete" value="delete">

</form>
    </div>
    <?php endwhile;
    

   

    if(isset($_POST['delete'])){
        $del = $_POST['del'];
       
        $w = "DELETE FROM image WHERE id = '$del' ";
                mysqli_query($conn, $w);

        $q = "DELETE FROM leaving WHERE id = '$del' ";
        mysqli_query($conn, $q);

        header('location: memo.php');
    }
    ?>
    
    <a href="e-memo.php">click here to add memo</a>
  
<style>
#in { color: white; background-color: red; padding: 18px 28px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
    border: 2px solid red;
     border-radius: 2px;
          float: right;


}
#in:hover{
  background-color:white;
    color:red;
    border: 2px solid red;
}
#e:hover{
  position: relative;
  display: inline-block;
  transform: scale(3.5);
}
</style>

</body>
</html>