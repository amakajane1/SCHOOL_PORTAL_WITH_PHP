<!DOCTYPE html>
<html>
  
<head>
    <title>reg 2</title>
    <link rel="stylesheet" href="insert.css">
</head>
  
<body>
<div id="up">
	<img src="headd.png" width="300px" height="100px">
</div>
    <div id="mm">
    <center>
        
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "webapp1");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $gender =  $_REQUEST['gender'];
        $matricno = $_REQUEST['matricno'];
        $email = $_REQUEST['email'];
        $level = $_REQUEST['level'];
        $prog = $_REQUEST['programme'];
        $pword =$_REQUEST['pword'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO s1  VALUES ('$first_name', 
            '$last_name','$gender','$matricno','$email','$level','$prog','$pword')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h1>REGISTRATION SUCCESSFUL</h1>"; 
  
            echo nl2br("<h2>\n$first_name\n $last_name\n "
                . "$matricno\n $prog</h2>");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
      <a id="butt" href="login1.php" height="200px">click to login</a>
    </center>
    </div>
</body>
  
</html>