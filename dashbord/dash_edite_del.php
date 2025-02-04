<?php  
require_once('dash_header.php');

?>

<?php  
require_once('dash_aside.php');

     ?>

 
   <?php
                   $id1 = $_GET['vl'];
                    require_once('../config.php');
                    $sql = "DELETE FROM `sign_up` WHERE `sign_up`.`sin_up_id` =$id1";
                    $exe = mysqli_query($conn,$sql);
                    if( $exe) {
                    header('location:dash_user.php');
                   echo "$id";
                   
                    }else{echo "error" .mysqli_error($conn);}
                    mysqli_close($conn);
        ?>

  </section>


  <?php  require_once('../footer.php');
?>