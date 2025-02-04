<?php  
require_once('header.php');

?>
<?php  
require_once('aside.php');

?>

  <section class="card">


    <div class="content">
    <?php
                                $value=$_GET['type'];
                                    require_once('config.php');
                                    $sql="select * from main_card where main_card_ty like '$value%'  "; 
                                    $exe=mysqli_query($conn,$sql);
                                    if(!$exe){
                                        echo "Error" . mysqli_error($conn);
                                    }
                                  
                                      while($row=mysqli_fetch_assoc($exe)){
                                        $type=$row['main_card_type'];
                                        $doctor_name=$row['main_card_docyor_name'];
                                        $info=$row['main_card_doctor_info'];
                                        $service=$row['main_card_service'];
                                        $time=$row['main_card_time'];
                                        echo "    <div class='info2'>
                                        <div class='col p-4 d-flex flex-column position-static'>
                                            <strong class='d-inline-block mb-2 text-primary'> $type</strong>
                                            <h3 class='mb-0'>$doctor_name</h3>
                                            <div class='mb-1 text-muted'>$info</div>
                                            <p class='card-text mb-auto'> $service</p>
                                            <p class='card-text mb-auto'>$time</p>
                                        </div>  
                                        </div>  "   ;
                                        
                                      }
                                  
                                      mysqli_close($conn);
                                    ?>



   


      


  </section>
  <?php  

require_once('footer.php');
?>