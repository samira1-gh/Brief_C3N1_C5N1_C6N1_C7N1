<?php
$servername = "localhost";
$username = "root";
$password = "";
$name ="up";
$db= new PDO("mysql:host=$servername;dbname=$name;",$username,$password);

// if($db){
//     echo"bien";
// }
if(isset($_POST['submit'])){
$name=$_POST['name'];
$password=$_POST['password'];

$samira=$db->prepare("INSERT INTO samira(name,password)VALUES('$name','$password')");
if($samira->execute()){
    echo'true';
}else{
   echo' false';
}

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snippets</title>
</head>
<body>
    <div class="header">
    <img src="" alt="">
    <div>
     work 
    </div>
     <div>
services
    </div>
     <div>
about
    </div>
<div>
    contact
    </div>
  </div>

    <form action="index.php" method="POST">
        <div class="contunu">
            <h1>connexion</h1>
            <div >
                <p>Nom d'utilisateur</p>
                <input class="name" name="name" type="text" placeholder="Entrer le nom d'utilisateur" required>
            </div>
            <div >
                <p>Mot de passe</p>
                <input class="password" name="password" type="password" placeholder="Entrer le mot de passe" required>
            </div>
            <button class="button" type="submit" value="Envoyer" name="submit" >LOGIN</button>
        </div>
        </from>

        </body>
    </html>