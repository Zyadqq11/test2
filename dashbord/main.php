
<?php  
require_once('dash_header.php');

?>
<?php  
require_once('../config.php');

?>
<?php  
require_once('dash_aside.php');

?>
  <section class="card">


    <div class="content">
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
                                      echo "    <div class='info2'>
                                      <div class='col p-4 d-flex flex-column position-static'>
                                          <strong class='d-inline-block mb-2 text-primary'> $type</strong>
                                          <h3 class='mb-0'>$doctor_name : الطبيب</h3>
                                          <div class='mb-1 text-muted'> $info  </div>
                                          <p class='card-text mb-auto'>:الخمات التي توفرها العياده  </p>
                                          <p class='card-text mb-auto'> $service</p>
                                          <p class='card-text mb-auto'>:اوقات الدوام  </p>
                                          <p class='card-text mb-auto'>$time</p>
                                      </div>  
                                      </div>  "   ;
                                    
                                    }
                                         
                               
                                      
                                    
                                      
                                      
                                     
     ?>

   


      


  </section>

                               <div class="card">
                                      <div class="col-2"></div>
                                      <div class="col-8">
                                      <center><h1>: الخدمات  </h1>
</center>

                               <?php
                                             
                              
                                require_once('../config.php');
                                $sql="select * from main_service order by main_service_id desc  ";
                                $exe=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($exe);
                                $ss=$row['main_service_info'];
                            
                              
                              echo "<p>$ss</p>";
                            
                          
                               
                              ?>
                              </div> </div>
        


                              <div class="card">
                                      <div class="col-2"></div>
                                      <div class="col-8">
                                      <center><h1>: العنوان  </h1>
</center>


                               <?php
                                             
                              
                                require_once('../config.php');
                                $sql="select * from main_adrees order by main_adress_id desc  ";
                                $exe=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($exe);
                                $xx=$row['main_adress_info'];
                            
                              
                              echo "<p>$xx</p>";
                            
                          
                              mysqli_close($conn);     
                              ?>
                              </div> </div>
                             

   



      

 
  <?php  

require_once('../footer.php');
?>