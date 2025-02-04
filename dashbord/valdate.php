<?php
session_start();

if($_SESSION['adminemail'] == null && $_SESSION['adminpassword'] == null )
{ if((time() - $_SESSION['last_login_time_tamp']) > 15     ){

    header('location:sin_out.php');
}

 
}else{
    header('location:sin_in.php');

}



?>