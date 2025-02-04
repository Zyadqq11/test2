<?php  
require_once('dash_header.php');

?>

<?php  
require_once('dash_aside.php');

     ?>

 
   <?php
                   $id = $_GET['vl'];
                    require_once('../config.php');
                    $sql = "DELETE FROM `main_card` WHERE `main_card`.`main_card_id` = $id";
                    $result = mysqli_query($conn,$sql);
                    if($result) {
                    header('location:clinc.php');
                   echo "$id";
                    mysqli_close($conn);
                    }else{echo "error" .mysqli_error($conn);}
       
        ?>

  </section>


  <?php  require_once('../footer.php');
?>