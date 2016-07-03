<!DOCTYPE html>
<html lang="en">
<head>
  <title>SEBOLOKELO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="SecondScreen.php">Home</a></li>
        <li><a href="forthScreen.php">upload image</a></li>

        <li><a href="demo11212.php">my images</a></li>
        <li><a href="#">share images</a></li>
		<li><a href="audioupload.php">upload audio</a></li>
        <li><a href="myaudio.php">my audio</a></li>
        <li><a href="#">share audio</a></li>
		<li><a href="videoupload.php">upload video</a></li>
        <li><a href="myvideos.php">my video</a></li>
        <li><a href="#">share video</a></li>
		 <li><a href="#">shared media</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> log out</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">contacts</a></p>
      <p><a href="#">contacts</a></p>
      <p><a href="#">contacts</a></p>
	  <p><a href="#">contacts</a></p>
      <p><a href="#">contacts</a></p>
      <p><a href="#">contacts</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1 style="color:red"></h1>
     
	 <table border="0" style="padding:50"/>
		
<form name="registration" action="" method="post">
	<tr><td>
<input type="text" name="firstname" placeholder="firstname" required="required"width="10"/></td></tr>
<tr><td>
<input type="text" name="lastname" placeholder="lastname" required /></td></tr>
<tr><td>
<input type="email" name="email" placeholder="email" required /></td></tr>
<tr><td>
<input type="submit" name="submit" value="Register" /></td><td></td>
</table>

<?php
 require('db.php');
 // If form submitted, insert values into the database.
 if (isset($_POST['submit'])){

 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $firstname = stripslashes($firstname);
 $firstname = mysql_real_escape_string($firstname);
 $lastname = stripslashes($lastname);
 $lastname = mysql_real_escape_string($lastname);
 $email = stripslashes($email);
 $email = mysql_real_escape_string($email);

 $query = "INSERT into `register` (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
 $result = mysql_query($query);
 if($result){
 echo "CONTACT ADDED SUCCESFULLY";
 }
 }else{
?>

<?php } ?>

		
	  
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>RECENT FILES</p>
      </div>
      <div class="well">
        <p>ADD CONTACTS</p>
      </div>
    </div>
  </div>
</div>

 <div class="jumbotron">
    <h1>.............................................................................</h1>
   
  </div>

</body>
</html>
