<?php include 'process.php' ;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INCOMING-memo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="e-memo.css">
    <script src="main.js"></script>
</head>
<?php


$q="SELECT * FROM leaving WHERE pend=1";
$re=mysqli_query($conn, $q);
$z=mysqli_num_rows($re);


?>
<body>

        <div id="hed" style="color:aqua; margin-top: 3%;">

                <h1> INCOMING-MEMO</h1>
                <a href="pending.php" style="text-decoration: none;">
                <div style="margin-left: 70%; background-color: red; font-size: 14px;">
                    <div>
                        <h1 style="font-size: 14px; font-family:none;">pending</h1>
                        <div style=" text-align: center; font-size: 20px; background-color: white; color: black">
                    <p>
                        <b><?php echo $z ?></p>
                </div>
                    </div>
                    
                </div></a>

                </div>
    <div id= 'form' >
          
        <form method="POST" action="">

                <label id="fr"  > REf NO: </label><br>
                <input  name="reff" type="text" id="fo" style="width: 40%;" \> <br>

                <label id="fr" > FROM: </label><br>
                <input  name="from" type="text" id="fo"  \> <br>

                <label id="fr" > TO: </label><br>
                <input  name="to" type="text" id="fo" \><br>

                 <label id="fr" > THROUGH: </label><br>
                <input  name="thr" type="text" id="fo" \><br>

                 <label id="fr" > SUBJECT: </label><br>
                <textarea id="fo" style="height:60px;" name="subj"></textarea><br>
             <!--   <a id="in" href="test.php" style="float: left;">upload image</a>-->

                <input type="submit" name="done" id="btn" value="Done" /><br>

        </form>
 
        
<a href='memo.php'>click here to view all memo </a>

<a href="homepage.php" id="in"><i>Home</i></a>

    </div>
</body>
</html>