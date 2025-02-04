
<?php  
require_once('dash_header.php');

?>

<?php  
require_once('dash_aside.php');

?>
  <section class="card">


    <div class="content">
    <?php                         
                                 if(isset($_POST['submit']) ){
                                    require_once('../config.php');
                                      $name1=($_POST['zname']);
                                      $info1=($_POST['id_user']);
                                      $type1=($_POST['zpass']);
                                      $service1=($_POST['zemail']);
                                      $time1=($_POST['zphone']);
                                    
                                      
                                     
                                    
                                    
                                         
                                           $sql = "INSERT INTO `main_card` (`main_card_id`, `main_card_docyor_name`, `main_card_doctor_info`, `main_card_type`, `main_card_service`, `main_card_time`, `main_card_ty`) VALUES (NULL, '$name1', '$info1', '$type1', '$service1', '$time1', 'clinic');";
                                          
                                           $exe = mysqli_query($conn,$sql); 
                                              
                                            if(!$exe){
                                             echo "Error" . mysqli_error($conn);
                                         }    
                                                  }             
                                       
                                                  echo "   
                                                  <div class='col p-12 d-flex flex-column position-static'>
                                                  <div class='card-body p-12 p-md-6'> 
                                            
                                                  <form class='px-md-8' method='post' enctype='multipart/form-data' action = '#'>
                                                                                     
                                                            <table class='table'>
                                                            <thead>
                                                            <tr>
                                                                
                                                         
                                                              <th scope='col'>the name of doctor</th>
                                                              <th scope='col'>information about doctor</th>
                                                                <th scope='col'>the doctor type</th>
                                                                <th scope='col'>the service</th>
                                                                <th scope='col'>the time</th>
                                                               
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                           
          
                                                                  <tr>
          
                                                                  <td>
                                                                  <div class='form-outline mb-4'>   <label for='name'> name</label><br>
                                                                  <input type='int' name='zname' id='name' style='width: 90%;'> </div>
                                                               
                                                                </td>
          
                                                                  <td>
                                                                  <div class='form-outline mb-4'>   <label for='name'> information:</label><br>
                                                                  <input type='text' name='id_user' id='name' style='width: 90%;'> </div>
                                                               
                                                                </td>
                                                                
                                                                <td>
                                                                <div class='form-outline mb-4'>   <label for='name'> type:</label><br>
                                                                <input type='text' name='zpass' id='name' style='width: 90%;'> </div>
                                                             
                                                              </td>
                                                                
                                                                  <td> <label for='email'> service:</label><br>
                                                                  <input type='text' name='zemail' id='email'  style='width: 90%;'>
                                                               </td>

                                                                  <td>  <label for='phone'>time :</label><br>
                                                                  <input type='text' name='zphone' id='phone'style='width: 90%;' >
                                                            </td>
                                                          
                                                                     </tr>
                                                                                        
                                                                           
                                                                                        
                                                                                       
                                                            </tbody>
                                                          </table>
                                                           <button type='submit' class='btn btn-success btn-lg mb-1' name='submit'>Submit</button>
                                                      <hr>
                                                     </form>
                                                     "   ; 
                                                
                                                ?>

                                               
                                  
                              
                                                                
   

   


      


  </section>

                               
      

 
  <?php  

require_once('../footer.php');
?>