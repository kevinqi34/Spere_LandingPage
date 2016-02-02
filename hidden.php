<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$pass = md5($pass);

if($user == "Spere_Landing"
&& $pass == md5("SpereTeam6$"))
{
        include("./assets/secure.php");
}
else
{
    if(isset($_POST))
    {

          echo  '<form method="POST" action="/hidden.php">';
          echo  'User <input type="text" name="user"></input><br/>';
          echo  'Pass <input type="password" name="pass"></input><br/>';
          echo  '<input type="submit" name="submit" value="Go"></input>';
          echo  '</form>';
    }
}



?>
