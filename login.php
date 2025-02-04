<?php  
require_once('header.php');

?>
<?php
  $oemail="";
  $opass="";
  $oer = "";
  $ok = 1;
  $exe ="";
      
  if(isset($_POST['submit'])) {
    if(isset($_POST['password_log'])&&isset($_POST['email_log'])){
      $email=$_POST['email_log'];
      $pass=$_POST['password_log'];
                                    }

         if(empty($email)){
          $oemail = "place enter email";
          $ok = 0;
             }

         if(empty($pass)){
          $opass = "place enter password";
          $ok = 0;
                 }
           if($ok == 1){
          require_once('config.php');
          $pass=$_POST['password_log'];
          $email=$_POST['email_log'];
          $sql = "select * from sign_up where 	email='$email' and confirm='$pass'";
        
          $exe=mysqli_query($conn,$sql);
          if(!$exe){
            echo "Error" .mysqli_error($conn);
        }
        while($row=mysqli_fetch_assoc($exe)){
              if($email == $row['email'] && $pass == $row['confirm']){
                           
                $_SESSION['mainemail']= $row['email'];
               $_SESSION['mainpassword']=$row ['confirm'];
               header('location:index.php');  
                       }     
                      
                       if($email != $row['email'] && $pass != $row['confirm']){
                        $oer = 'error in email or password';   }
                      } 
               
               


        
                                                                                    
                
                                         
           
                }                                         


  }                 
                    
 ?>

<main style=" background-color: rgb(255, 255, 255);  width:80%; ">
    <section class="h-300 h-custom" style=" background-color: rgb(255, 255, 255);">
        <div class="container py-5 h-300 ">
          <div class="row d-flex justify-content-center align-items-center h-300">
            <div class="col-lg-9 col-xl-9">
              <div class="card rounded-5">
                
                <div class="card-body p-12 p-md-6"> 
      
                  <form class="px-md-6"  method="post" action = "#">
                     <h1>login to the site</h1>
                     
                  
                    <div class="form-outline mb-4">
                      <label for="name">the email:</label><br>
                     <input type="text" name="email_log" id="name" style="width: 90%;">
                     <p style='background-color:#f21616'><?php echo $oemail; ?></p>
                    </div>
      
                    
                       

                    <div class="form-outline mb-4">
                          <label for="password1">password:</label><br>
                          <input type="password" name="password_log" id="password1" style="width: 90%";  >
                          <p style='background-color:#f21616'><?php echo $opass; ?></p>
                         
                        </div>
                      
                   
      
                
                     
                         </div>
                         <p style='background-color:#f21616'><?php echo  $oer;  
                       
                          ?></p> 
                        
                    <button   type="submit" class="btn btn-success btn-lg mb-1 " name="submit">login </button><hr>
                    <a href="index.php"  type="submit" class="btn btn-success btn-lg mb-1 ">cancel</a>
      
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
     </main>
    


























<?php  

require_once('footer.php');
?>