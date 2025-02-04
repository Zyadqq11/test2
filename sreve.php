<?php  
require_once('header.php');

?>
<?php  
require_once('aside.php');

?>




 
     

                                      
                                   
                                  
                                      <div class="row">
                                      <div class="col-2"></div>
                                      <div class="col-8">
                                      <h1>the service</h1>

                                      <?php
                                             
                                $value=$_GET['type'];
                                require_once('config.php');
                                $sql="select * from main_service where main_service_ty like '$value'  "; 
                                $exe=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($exe);
                                $text=$row['main_service_info'];
                                echo "<p>$text</p>";
                                 mysqli_close($conn);
                          
                                     
                              
                              
                              ?></div> </div>
                      
                      
                                


   



  <?php  

require_once('footer.php');
?>