<?php
session_start();

include 'db.php';



if(isset($_POST["username"],$_POST["password"])){

$username= mysqli_real_escape_string($link, $_POST['username']);
$pass_word = mysqli_real_escape_string($link,$_POST['password']);



if($_POST["username"] == "admin" && $_POST["password"] == "admin!"){


	  setcookie('username', $_POST['username'], time()+ 60*60*24*10);
      setcookie('password',$_POST['password'], time()+60*60*24*10);

      echo 'Admin';



}

else{





$sql = "SELECT count(*) FROM users WHERE user_name='$username' AND pass_word='$pass_word'";





$result = mysqli_query($link, $sql);


if (!$result)
{
        echo 'Error Saving Data. ';
        exit();
}
$row = mysqli_fetch_array($result);
    if ($row[0] > 0){
      
      
      setcookie('username', $_POST['username'], time()+ 60*60*24*10);
      setcookie('password',$_POST['password'], time()+60*60*24*10);

      echo 'Successful';

    }    
    else
      echo 'Failed';
        
}
}

?>
