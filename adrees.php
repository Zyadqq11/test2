<?php  
require_once('header.php');

?>
<?php  
require_once('aside.php');

?>




 
     

                                      
                                   
                                  
                                      <div class="row">
                                      <div class="col-2"></div>
                                      <div class="col-8">
                                      <h1>: العنوان  </h1>

                                      <?php
                                 
                                 require_once('config.php');
                                $value=$_GET['type'];
                               
                                $sql="select * from main_adrees where main_adress_ty like '$value'  "; 
                                $exe=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($exe);
                                $dd=$row['main_adress_info'];
                                echo "<p>$dd</p>";
                                mysqli_close($conn);
                            
                      
                                     
                              
                              
                              ?></div> </div>
                      
                      
                                


   



  <?php  

require_once('footer.php');
?>