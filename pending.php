<?php
include 'database.php';

$q="SELECT * FROM leaving WHERE pend=1";
$res = mysqli_query($conn,$q);
while ($row = mysqli_fetch_assoc($res)): ?> 
 <div style="background-color:white; font-family:'Times New Roman', Times, serif; border: 2px solid grey; color:black;text-indent: 25px; " > 
 	  <h3 style="font-size:20px; color:royalblue;"><b> <?php $id = $row['id'] ; echo"<b><i>FROM: " .$row['sender']."</i> <br>" ?></b> </h3>

  <p>  <?php echo "<p style='color:grey'><i>TO: </i> ". "</p>    ".$row['receiver']."  <i> on </i> ".$row['date'] ; ?> </p><br>

      <p>  <?php echo"<b>SUBJECT: </b>". $row['subjec'] ; ?> </p><br>
      <form method="POST">

      <input type="hidden" name="del" value="<?php echo $row['id'] ?> " >
      <input type="submit" name="fow" value="foward">

</form>
       <?php endwhile;


   if(isset($_POST['fow'])){
        $del = $_POST['del'];
       $pend=0;

$w = "UPDATE leaving SET pend='$pend' WHERE id=$del";
     
                mysqli_query($conn, $w);

        header('location: pending.php');
    }

?>