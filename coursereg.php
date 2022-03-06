<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT FORM</title>
    <link rel="stylesheet" href="coursereg.css">
</head>
<!--if(array_key_exists('a1', $_POST)) {-->
<body>
<div id="up">
	<img src="headd.png" width="300px" height="100px">
</div>
<h1>COURSE REGISTRATION FORM</h1>
    <section class="maindiv" id="nnn">
       
       <?php
       session_start();
        if(isset($_POST['a1'])) {
            a1();
        }
        else if(isset($_POST['a2'])) {
            a2();
        }
        else if(isset($_POST['a3'])) {
            a3();
        }
        else if(isset($_POST['a4'])) {
            a4();
        }
        else if(isset($_POST['a5'])) {
            a5();
        }
        else if(isset($_POST['a6'])) {
            a6();
        }
        else if(isset($_POST['a7'])) {
            a7();
        }
        else if(isset($_POST['a8'])) {
            a8();
        }
        else if(isset($_POST['a9'])) {
            a9();
        }
        else if(isset($_POST['a10'])) {
            a10();
        }
        else if(isset($_POST['a11'])) {
            a11();
        }
        function a1() {
            $_SESSION['c1'] = "CSC 310-INTERNET PROGRAMMING - 3 UNITS";
        }
        function a2() {
            $_SESSION['c2'] = "CSC 311-DATA STRUCTURES - 3 UNITS";
        }
        function a3() {
            $_SESSION['c3'] = "CSC 312-MICROSOFT EXCEL - 2 UNITS";
        }
        function a4() {
            $_SESSION['c4'] = "CSC 313-MICROSOFT WORD - 3 UNITS";
        }
        function a5() {
            $_SESSION['c5'] = "CSC 314-CYBERSECURITY- 3 UNITS";
        }
        function a6() {
            $_SESSION['c6'] = "CSC 315-DATABASE PROGRAMMING - 2 UNITS";
        }
        function a7() {
            $_SESSION['c7'] = "CSC 316-JAVA PROGRAMMING - 3 UNITS";
        }
        function a8() {
            $_SESSION['c8'] = "CSC 317-R PROGRAMMING - 2 UNITS";
        }
        function a9() {
            $_SESSION['c9'] = "CSC 318-LINEAR ALGEBRA - 2 UNITS";
        }
        function a10() {
            $_SESSION['c10'] = "CSC 319-OPERATION RESEARCH - 2 UNITS";
        }
        function a11() {
            $_SESSION['c11'] = "GST 311-PHILOSOPHY - 2 UNITS";
        }

    ?>
       
       <h2>PLEASE SELECT AND REGISTER YOUR COURSES FROM THE LIST BELOW</h2>
       <br>
       <div><p>CSC 310-INTERNET PROGRAMMING - 3 UNITS</p><input class="bh" id="a" type="button" value="REGISTER" name="a1"></div>
       <br>
       <div><p>CSC 311-DATA STRUCTURES - 3 UNITS</p><input class="bh" id="b" type="button" value="REGISTER" name="a2"></div>
       <br>
       <div><p>CSC 312-MICROSOFT EXCEL - 3 UNITS</p><input class="bh" id="c" type="button" value="REGISTER" name="a3"></div>
       <br>
       <div><p>CSC 313-MICROSOFT WORD - 3 UNITS</p><input class="bh" id="d" type="button" value="REGISTER" name="a4"></div>
       <br>
       <div><p>CSC 314-CYBERSECURITY- 3 UNITS</p><input class="bh" id="e" type="button" value="REGISTER" name="a5"></div>
       <br>
       <div><p>CSC 315-DATABASE PROGRAMMING - 2 UNITS</p><input class="bh" id="f" type="button" value="REGISTER" name="a6"></div>
       <br>
       <div><p>CSC 316-JAVA PROGRAMMING - 2 UNITS</p><input class="bh" id="g" type="button" value="REGISTER" name="a7"></div>
       <br>
       <div><p>CSC 317-R PROGRAMMING - 2 UNITS</p><input class="bh" id="h" type="button" value="REGISTER" name="a8"></div>
       <br>
       <div><p>CSC 318-LINEAR ALGEBRA - 2 UNITS</p><input class="bh" id="i" type="button" value="REGISTER" name="a9"></div>
       <br>
       <div><p>CSC 319-OPERATION RESEARCH - 2 UNITS</p><input class="bh" id="j" type="button" value="REGISTER" name="a10"></div>
       <br>
       <div><p>GST 311-PHILOSOPHY - 1 UNITS</p><input class="bh" id="k" type="button" value="REGISTER" name="a11"></div>
       <br>
       <hr>
       <hr>
       
       <?php
       echo '<br /><a id="rc" href="ress.php?' . SID . '">CLICK TO RESULT PAGE</a>';
       echo '<br /><a id="rc1" href="land.php?' . SID . '">CLICK TO HOME PAGE</a>';
       ?>
       <!--<input id="chec" type="button" value="send info">-->
    </section>
<div class="clear"></div>
        <section class="maindiv" id="mmm">
       <h2>YOUR REGISTERED COURSES</h2>
       
       <h2>YOUR SELECTED COURSES ARE LISTED BELOW:</h2>
       <br>
       <p id="aa">.</p>
       <br>
       <p id="bb">.</p>
       <br>
       <p id="cc">.</p>
       <br>
       <p id="dd">.</p>
       <br>
       <p id="ee">.</p>
       <br>
       <p id="ff">.</p>
       <br>
       <p id="gg">.</p>
       <br>
       <p id="hh">.</p>
       <br>
       <p id="ii">.</p>
       <br>
       <p id="jj">.</p>
       <br>
       <p id="kk">.</p>
       <br>
       <hr>
       <hr>

        </section>
        <script src="action.js"></script>
</body>
</html>