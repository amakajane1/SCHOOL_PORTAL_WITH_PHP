<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="land.css">
</head>
<body>
    <?php
    session_start();
    $_SESSION['sid']=session_id();
    ?>
<div id="up">
	<img src="headd.png" width="300px" height="100px">
</div>
    <h1>WELCOME</h1>

    <a id="crr" href="cr.php"><img src="r23.jpeg" height="150px" width="250px">click to register courses</a>
    <a id="cr4" href="ress.php"><img src="dres.jpeg" height="150px" width="250px">click to check result</a>
    <a id="lgk" href="logout.php"><img src="lout2.jpeg" height="150px" width="250px">click to log out</a>
    
</body>
</html>