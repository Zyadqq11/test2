
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
                                      $name2=($_POST['pass_user']);
                                     
                                    
                                    
                                         
                                           $sql = "INSERT INTO `admin` (`admin_email`, `admin_password`, `admin_id`) VALUES ('$name1', '$name2', NULL)";
                                          
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
                                                                
                                                              <th scope='col'>the email</th>
                                                              <th scope='col'>the password</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                           
          
                                                                  <tr>
          
                                                                  <td>
                                                                  <div class='form-outline mb-4'>   <label for='name'>the email:</label><br>
                                                                  <input type='int' name='id_user' id='name' style='width: 90%;'> </div>
                                                               
                                                                </td>
          
                                                                <td>
                                                                <div class='form-outline mb-4'>   <label for='name'>the password:</label><br>
                                                                <input type='int' name='pass_user' id='name' style='width: 90%;'> </div>
                                                             
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