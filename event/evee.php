

<html>

<head>

<title>Event Online</title>

<link href="Tour/style.css" rel="stylesheet" type="text/css" />

<script src="jquery-3.1.1.js"></script>


<style>



input{

    border-radius: 2px;

    border:solid;

    border-width: thin;

    border-color: #cccccc;

    height:30px;

    width:450px;

    font-size: 15px;



  }



input[type=submit]{

    font-size: 15px;

    word-spacing: 3px;

    width:100px;

    height:50px;

}

  

  #abc{

    width:500px;

    padding-left: 100px;
    margin-left:27%;
    align:center;

  }



  h4{

    margin-top: 10px;

    margin-bottom: 10px;

    font-weight: 400;

    font-size: 28px;

    line-height: 1.2;

  }

  

  label{

    margin-top: 10px;

    margin-bottom: 10px;

    font-weight: 370;

    font-size: 20px;

    line-height: 1.2;

    align:left;

  }

  #divbutton

{

height:100px;

width:350px;

color:white;

background-color:grey;

display:inline-block;

border-radius:8px;

padding:10px;

margin:20 75 50 180;

vertical-align:middle;

text-align:center;

line-height: 50px;

font-family:lato;

font-weight:bold;

font-size:20px;

border: 2px solid black;

align:center;

}





</style>



</head>



<body>

<div id="wrapper">

  <div id="inner">

    <div id="header">




<div id="imageSlider">

<img class="mySlides" src="riv.jpg" style="width:100%">

 </div>

    <div id="abc">

    <h4><center>Enter the event Details<center></h4>

    <form action="evee.php" method="post" align="center">

    



      <span>

        <label align="left">Event Name:<br><br></label>

        <input type="text" name="bname" required maxlength="30"/><br><br>

      </span>



       <span>

        <label align="left">First Name:<br><br></label>

        <input type="text" name="aname" required maxlength="30"/><br><br>

      </span>



      <span>

        <label align="left">Last Name:<br><br></label>

        <input type="text" name="pname" required maxlength="30"/><br><br>

      </span>

       <span>

        <input type="submit" name="submit" value="NEXT>"/><br><br>

      </span>



    </form>

   

  </div>

  </div>

  </div>

  </div>

  </body>

  </html>

<?php



$servername = "localhost";

$username = "root";

$password = "";

$dbname = "software";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

if(isset($_POST['submit']))

{

  $bid = mt_rand(60,200);

$bname = $_POST['bname'];

$aname = $_POST['aname'] ;

$pname = $_POST['pname'];

$sql="INSERT INTO sellbooks(bname,aname,pname) VALUES('$bname','$aname','$pname')";



if($conn->query($sql)==TRUE)

{

  echo "<div id='wrapper'><div id='inner'><div id='eader'><div id='divbutton' style='align:center margin:left'>You have entered these details succesfully<br>Event Name".$bname."<br>First Name".$aname."<br>Last Name".$bname."</div></div></div></div>";


}



else

{

  echo "Error:";

}

}

?>