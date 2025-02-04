<?php  
require_once('dash_header.php');

?>
<?php  
require_once('../config.php');

?>
<?php  
require_once('dash_aside.php');

     ?>
  <section class="card" >
    <h1>mange clinc</h1><br> <a href='add_clinc.php' style =' color: bule;text-decoration: none;' >NEW clinc </a><hr>
  <div class="content" >
  <?php
                                      require_once('../config.php');
                                      $sql="select * from main_card order by main_card_id desc";
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
                                        $id=$row['main_card_id'];

                                        echo "    <div class='info2'>
                                        <div class='col p-4 d-flex flex-column position-static'>
                                            <h3 class='mb-0'>$id</h3>
                                            <strong class='d-inline-block mb-2 text-primary'> $type  :  تخصص العياده </strong>
                                            <h3 class='mb-0'>$doctor_name : الطبيب</h3>
                                            <div class='mb-1 text-muted'> $info:  معلومات عن الطبيب</div>
                                            <p class='card-text mb-auto'>:الخمات التي توفرها العياده  </p>
                                            <p class='card-text mb-auto'> $service</p>
                                            <p class='card-text mb-auto'>:اوقات الدوام  </p>
                                            <p class='card-text mb-auto'>$time</p>
                                            <a href='del_clinc.php?vl=$id' style =' color: red;' >delite</a>
                                            <a href='edite_clinc.php?vl=$id' style =' color: green;' >edit</a>
                                            <hr>
                                          
                                        </div>  
                                        </div>  "   ;
                                      
                                      } mysqli_close($conn);
                               
                                     
                                      
                                      
                                      
                                     
     ?>

</div>
  
  </section>


  <?php  require_once('../footer.php');
?>