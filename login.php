﻿<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    <title>Login Page</title>
<style>
h1{
    font-size : 45px;
    color : white;
    text-shadow: 2px 2px 3px black, 0 0 30px green, 0 0 10px darkgreen;
}
h4 {
  color: white;
}
body {
    background-image: url(eve.jpg); 
    background-repeat: no-repeat;
    background-size: 1600px 780px;
    font-weight: bold;
    transition: width 2s;
    text-align: center;
    background-image-opacity: 0.1 !important;
}
a:link, a:visited {
    background-color:black;
    background-image: url("backgroundgif.gif");
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-align:center;
    transition: width 5s height 5s;
}

a:hover, a:active {
    color:black;
    background-color: white ;
    text-align: center;
    width : 100px;
    height : 50px;
    transition-duration: 0.5s;

}
.table{
    /border: 2px black solid;/
    margin: 5%;
    margin-left:150%; 
}
.section{
    margin: 0% 0%;
}
.designation{
    font-size: 25px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 section">
            <h1 style="text-align:center">Login Page</h1>
            <br><br>
            <p>------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <br><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 section">
    
    <div class="row">
        <div class="col-md-6 section">

            <form action="login.php" method="post">
            <br>
                <table class="table" style="background-color:#FFFFFF;background: linear-gradient(transparent,transparent);text-align:center;" border="0" width="350" height="400" align="center">
                    <tr>
                        <td><h4><b>Username</b></h4></td>
                        <td><input type="text" name="user"></td>
                    </tr>
                    <tr>
                        <td><h4><b>Password</b></h4></td>
                        <td><input type="password" name="pass"></td>
                    </tr>
                    <tr>    
                        <td colspan="4" align="center">
                        <input type="submit" name="submit" value="Login"> 
                </table>    
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php  
$conn = new mysqli('localhost','root','');
if(!$conn)
{
   #echo 'not connected to server';
}

if(!mysqli_select_db($conn,'software'))
{
    #echo ' software database not selected';
}
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    #mysql_select_db('software') or die("cannot select DB");  
    $result = mysqli_query($conn,"SELECT * FROM student WHERE user='".$user."' AND pass='".$pass."'");  
    $numrows=mysqli_num_rows($result);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($result))  
    {  
    $dbusername=$row['user'];  
    $dbpassword=$row['pass'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: second.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   