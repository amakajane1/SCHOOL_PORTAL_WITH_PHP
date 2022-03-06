<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>register</title>
	

  

<?php
    /*session_start();
	$username = "";
	$_SESSION['success'] = "";*/
include("connect.php");


 
if(isset($_POST['login1'])) {
    $sql = mysqli_query($conn,
    "SELECT * FROM s1 WHERE mno='"
    . $_POST["matricno"] . "' AND
    pword='" . $_POST["pword"] . "'    ");
   
    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header("location:land.php");
        exit();
    }
    else {
?>
<hr>
<font color="red"><b>
        <h3>Sorry Invalid Username and Password<br>
            Please Enter Correct Credentials</br></h3>
    </b>
</font>
<hr>
 
<?php
      }
}
?>

 

    <style>
        th {
            text-align: left;
        }
 
        td {
            text-align: center;
        }
 
        a {
            text-decoration: none;

        }
    </style>
	<link rel="stylesheet" href="login1.css">
	</head>
 
<body>
<div id="up">
	<img src="headd.png" width="300px" height="100px">
</div>
    <form id="ff" method="post" action="land.php">
        <fieldset border="0">
            <legend align="center">
                <h1 align="center">Login</h1>
            </legend>
            <table id="tab" width="50%" border="0"
                align="center" style="border:none;">
                <tr>
                    <th height="40"><label for="username">
                        Username</label>
                    </th>
                    <td><input type="text" name="username"
                            id="username" required>
                        </td>
                </tr>
                <tr>
                    <th height="40"><label for="pwd">
                        Password
                    </label>
                    </th>
                    <td><input type="password"
                        name="pwd" id="pwd" required></td>
                </tr>
                <tr>
                    <td id="itt" colspan="2" height="40" border="0"><input
                        type="submit" name="login"
                        value="  Login  "></td>
                </tr>
				<tr>
					<td><br></td>
				</tr>
            </table>
        </fieldset>
    </form>
</body>
 
</html>