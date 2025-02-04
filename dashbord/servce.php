
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
                                      $name1=($_POST['id_user']);
                                     
                                     
                                    
                                    
                                         
                                           $sql = "INSERT INTO `main_service` (`main_service_id`, `main_service_info`, `main_service_ty`) VALUES (NULL, '$name1', 'service')";
                                          
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
                                                                
                                                              <th scope='col'>the new servce</th>
                                                         
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                           
          
                                                                  <tr>
          
                                                                  <td>
                                                                  <div class='form-outline mb-4'>   <label for='name'>the new servce:</label><br>
                                                                  <input type='int' name='id_user' id='name' style='width: 90%;'> </div>
                                                               
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