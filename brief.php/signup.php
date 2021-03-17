<?php
$servername = "localhost";
$username = "root";
$password = "";
$name ="siign";
$db= new PDO("mysql:host=$servername;dbname=$name;",$username,$password);

//  if($db){
//      echo"bien";
//  }
if(isset($_POST['submit'])){
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$email=$_POST['email'];
$password=$_POST['password'];

$up=$db->prepare("INSERT INTO samira(Firstname,Lastname,email,password)VALUES('$Firstname','$Lastname','$email','$password')");
if($up->execute()){
    echo'true';
}else{
   echo' false';
}

}
// ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <form action="signup.php" method="POST">
       <div class="contunu">
    <h1>signe up</h1>
  <label for="fname">First name:</label><br>
  <input class="input" type="text" id="fname" name="Firstname"><br>
  <label for="lname">Last name:</label><br>
  <input  class="input" type="text" id="lname" name="Lastname"><br>
    <label for="lname">email</label><br>
  <input class="input" type="email" id="lname" name="email"><br>
    <label for="lname">password</label><br>
  <input  class="input "type="password" id="lname" name="password"><br>
  <input  class="submit "type="submit" value="Submit"name="submit" >
</div>
</form>
    
    
    

</body>
</html>