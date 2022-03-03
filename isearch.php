<!DOCTYPE html>
<html>
<head>
	<title>serch</title>
</head>
<body style="background-color: #F0F8FF;">
	<form method="POST">
 <input type="text" name="search" placeholder ="search" style=" margin-bottom: 1%; width:230px; font-size: 19px;">
        <td><input type="submit" name="by" value="search"></td>

  <input type="text" name="searh" placeholder="mm/dd/YY" style=" margin-bottom: 1%; width:230px; font-size: 19px;">
          <td><input type="submit" name="bye" value="search"></td>


    </form>
   <?php
   include 'database.php';
  
   if (isset($_POST["by"])) {
   	$input = $_POST['search'];

   $Q = "SELECT * FROM internal WHERE subjec = '$input' OR refer = '$input' OR collector = '$input' OR receiver = '$input' ";
   $resut =mysqli_query($conn, $Q); 
if (mysqli_num_rows($resut)==0) {
  echo "No Result Found";
  # code...
}
 	while($row = mysqli_fetch_assoc($resut)): 
 	?>
  <div style="background-color:white; font-family:'Times New Roman', Times, serif; border: 2px solid grey; color:black;text-indent: 25px; " > 
  <h3 style="font-size:20px; color:royalblue;"><b> <?php $id = $row['id'] ; echo"<b><i>SENT TO: " .$row['receiver']."</i> <br>" ?></b> </h3>

      <p>  <?php echo"<b>SUBJECT: </b>". $row['subjec'] ; ?> </p><br>
      
            <p>  <?php echo "<p style='color:grey'><i>received by</i> ". "</p>    ".$row['collector']."<i> on </i> ".$row['date'] ; ?> </p><br>

 	
            
  <?php $qr = "SELECT * FROM simage WHERE id = $id "; 
              $result = mysqli_query($conn,$qr);
              while ($ro = mysqli_fetch_assoc($result)): 
            ?>
              <a href="<?php  echo $ro['image'];  ?>" id="e">  <img src="<?php  echo $ro['image'];  ?>" alt="taste" height = 200px; width=200px;></a>

            <?php endwhile; ?>
   <?php endwhile;}
if (isset($_POST["bye"])) {
    $input = $_POST['searh'];

   $Q = "SELECT * FROM internal WHERE  dat = '$input' ";
   $result =mysqli_query($conn, $Q); 
   if (!$result) {
     die(mysqli_error());
   }

  while($row = mysqli_fetch_assoc($result)): 
  ?>
   <h3 style="font-size:20px; color:royalblue;"><b> <?php $id = $row['id'] ; echo"<b><i>SENT TO: " .$row['receiver']."</i> <br>" ?></b> </h3>

      <p>  <?php echo"<b>SUBJECT: </b>". $row['subjec'] ; ?> </p><br>
      
            <p>  <?php echo "<p style='color:grey'><i>received by</i> ". "</p>    ".$row['collector']."<i> on </i> ".$row['date'] ; ?> </p><br>
            
  <?php $qr = "SELECT * FROM simage WHERE id = $id "; 
              $result = mysqli_query($conn,$qr);
              while ($ro = mysqli_fetch_assoc($result)): 
            ?>
              <a href="<?php  echo $ro['image'];  ?>" id="e">  <img src="<?php  echo $ro['image'];  ?>" alt="taste" height = 200px; width=200px;></a>

            <?php endwhile; ?>
   <?php endwhile;}


   ?>
   <style>
#e:hover{
  position: relative;
  display: inline-block;
  transform: scale(3.5);
}
</style>
</body>
</html>