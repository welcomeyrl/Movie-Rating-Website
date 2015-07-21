<?php
session_start();

include 'db.php';


if(isset($_POST['usernamesignup'],$_POST['emailsignup'])){    //$_POST['name']

$username= mysqli_real_escape_string($link, strip_tags($_POST['usernamesignup']));
$email = mysqli_real_escape_string($link,$_POST['emailsignup']);




$sql = "SELECT count(*) FROM users WHERE user_name='$username'OR email='$email' ";

$result = mysqli_query($link, $sql);



if (!$result)
{
        echo 'Error Saving Data. ';
        exit();
}


$row = mysqli_fetch_array($result);

  if ($row[0] > 0 ){
     
    echo 'fail';
    
    
  }
  else{
    
    echo 'success';
  

 }

   
        
}







?>
