
<?php  
require_once('dash_header.php');

?>

<?php  
require_once('dash_aside.php');

?>
  <section class="card">


    <div class="content">
    <?php                           
                                    $id = $_GET['vl'];
                                    require_once('../config.php');
                                    $sql = "SELECT * FROM `main_card` WHERE `main_card`.`main_card_id` = $id";
                                    $exe=mysqli_query($conn,$sql);
                                
                                    while($row=mysqli_fetch_assoc($exe)){
                                      $type=$row['main_card_type'];
                                      $doctor_name=$row['main_card_docyor_name'];
                                      $info=$row['main_card_doctor_info'];
                                      $service=$row['main_card_service'];
                                      $time=$row['main_card_time'];
                                      echo "        <div class='container py-12 h-300 w-500' style=' background-color: rgb(255, 255, 255);  width:100%; '>
                                      <div class='row d-flex justify-content-center align-items-center h-300'>
                                        <div class='col-lg-9 col-xl-9'>
                                          <div class='card rounded-5'>
                                            
                                            <div class='card-body p-12 p-md-6'> 
                                  
                                              <form class='px-md-8' method='post' enctype='multipart/form-data' action = '#'>

                                              <div class='form-outline mb-4'>
                                              <label for='type'>type:</label><br>
                                             <input type='text'  placeholder='$type' name='ztype' id='type' pl style='width: 90%;'>
                                            </div>    

                                                <div class='form-outline mb-4'>
                                                  <label for='name'>the name:</label><br>
                                                 <input type='text' placeholder='$doctor_name' name='zname' id='name' style='width: 90%;'>
                                                </div>
                                                <div class='form-outline mb-4'>
                                                  <label for='info'>information:</label><br>
                                                 <input type='text' placeholder='$info' name='zinfo' id='info' style='width: 90%;'>
                                                </div>
                                                <div class='form-outline mb-4'>
                                                <label for='info'>service:</label><br>
                                               <input type='text' placeholder='$service' name='zservice' id='service' style='width: 90%;'>
                                              </div>

                                              <div class='form-outline mb-4'>
                                              <label for='info'>the time:</label><br>
                                             <input type='text' placeholder='$time'  name='ztime' id='time' style='width: 90%;'>
                                            </div>
                                           
                                  
                            
                                                
                                               
                                                <button type='submit' class='btn btn-success btn-lg mb-1' name='submit'>edite</button>
                                                </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                              </form> " ;
                                         
                                             
                             
                                                  
                                    }
                                         
                                    if(isset($_POST['submit'])){
                                        $doctor_name = $_POST['zname'];
                                        $info = ($_POST['zinfo']);
                                        $tpye = ($_POST['ztype']);
                                        $service = $_POST['zservice'];
                                        $time = $_POST['ztime'];
                                                 
                                         $sql = "UPDATE `main_card` SET  `main_card_docyor_name` = '$doctor_name ',  `main_card_doctor_info` ='$info' , `main_card_type`='$tpye' , `main_card_service`=' $service', `main_card_time`='$time' WHERE `main_card`.`main_card_id` = $id ";
                                        $result = mysqli_query($conn,$sql);    
                                                    }
                                  
                                      
                                                    mysqli_close($conn);                       
     ?>

   


      


  </section>

                               
      

 
  <?php  

require_once('../footer.php');
?>