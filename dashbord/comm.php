<?php  
require_once('dash_header.php');

?>

<?php  
require_once('dash_aside.php');

     ?>
  <section class="card" >

    <h1>THE COMMENS :</h1><br> 
                                                            </td>   <hr>
  <div class="content" >
  <?php
                                      
                                      require_once('../config.php');
                                      $sql="SELECT * FROM `comm` ORDER BY `com_id` ASC";
                                      $result=mysqli_query($conn,$sql);
                                      if(!$result){
                                        echo "Error" . mysqli_error($conn);
                                    }    
                                    while($row=mysqli_fetch_assoc($result)){
                                        $name = $row['com_name'];
                                        $email = $row['com_email'];
                                        $info = $row['com_info'];
                                    
                                        echo "    <div >
                                        <div class='col p-12 d-flex flex-column position-static'>
                                                                                  
                                                  <table class='table'>
                                                  <thead>
                                                    <tr>
                                                      <th scope='col'>name  </th>
                                                      <th scope='col'>emaile</th>
                                                      <th scope='col'>the text</th>
                                           
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                  <tr>
          
                                                  <td>
                                                  <div class='form-outline mb-4'>   <label for='name'> name:</label><br>
                                                 <p  id='name'>$name </p>  </div>
                                               
                                                </td>

                                                  <td>
                                                  <div class='form-outline mb-4'>   <label for='name'> name:</label><br>
                                                  <p  id='name'> $email </p>        </div>
                                               
                                                </td>
                                                
                                                <td>
                                                <div class='form-outline mb-4'>   <label for='name'> the text:</label><br>
                                                <p  id='name'>  $info  </p>   </div>
                                             
                                              </td>
                                                  </tbody>
                                                </table>
                                          
                                        </div>  
                                        </div>  "   ;

                                    }
                                   mysqli_close($conn);
                               
                                     
                                      
                                      
                                                             
                                     
     ?>

</div>
  
  </section>


  <?php  require_once('../footer.php');
?>