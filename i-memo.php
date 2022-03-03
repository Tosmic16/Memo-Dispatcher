<?php
// include process.php it contains action to perform when form is submitted
 include 'iprocess.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Outgoing-memo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="e-memo.css">
    <script src="main.js"></script>
</head>

<body>

     <iframe style="float:left; size: auto;"src="mimo.php" width="440" height="600"></iframe>

        <div id="hed" " >
                <h1> OUTGOING-MEMO</h1>
                </div>
    <div id= 'form' >
          
        <form method="POST" action="">
                 <label id="fr"  > REf NO: </label><br>
                <input  name="reff" type="text" id="fo" style="width: 40%;" placeholder="SC/DEA" \> <br>
                
                <label id="fr" > TO: </label><br>
                <input  name="to" type="text" id="fo" \><br>
                 <label id="fr" > THROUGH: </label><br>
                <input  name="thr" type="text" id="fo" \><br>
                 <label id="fr" > SUBJECT: </label><br>
                <textarea id="fo" style="height:30px;" name="subj"></textarea><br>
                 <label id="fr" > RECEIVED BY: </label><br>
                <input  name="rec" type="text" id="fo"  \> <br>
                <input type="submit" name="done" id="btn" value="Done" /><br>
              

        </form> 
        <!-- link to view all memo -->
<a href='mimo.php'>click here to view all memo </a>

        <!-- link to view all memo -->

<a href="homepage.php" id="in"><i>Home</i></a>

    </div>

</body>
</html>