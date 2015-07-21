<?php
session_start();

include 'db.php';


if(isset($_POST['usernamesignup'],$_POST['emailsignup'],$_POST['passwordsignup'],$_POST['select_gender'],$_POST['select_year'],$_POST['select_month'],$_POST['select_day'])){


    $user_name = mysqli_real_escape_string($link,strip_tags($_POST['usernamesignup']));
    $email = mysqli_real_escape_string($link, strip_tags($_POST['emailsignup']));
    $pass_word = mysqli_real_escape_string($link,$_POST['passwordsignup']);
    $gender = mysqli_real_escape_string($link,$_POST['select_gender']);
    $year = mysqli_real_escape_string($link,$_POST['select_year']);
    $month = mysqli_real_escape_string($link,$_POST['select_month']);
    $day = mysqli_real_escape_string($link,$_POST['select_day']);
    $birthday = $month.'/'.$day.'/'.$year;
    $birthday = date('Y-m-d',strtotime($birthday));


    $sql = "INSERT INTO users set
            user_name = '$user_name',
            pass_word ='$pass_word',
            email ='$email',
            gender= '$gender',
            birthday = '$birthday'";

    if(!mysqli_query($link,$sql)){
      echo 'Error Saving Data.';
      exit();
    } 

    
   /* $post_id = mysqli_insert_id($link);
    $_SESSION['signup_id'] = $post_id;
    
    header('Location: record.php');
    exit();*/
    echo "fetch";

}
?>