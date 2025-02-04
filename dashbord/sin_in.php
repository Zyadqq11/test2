<?php
session_start();

ob_start("ob_gzhandler")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <link rel="stylesheet" href="../css1zyad.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >
    <title>sign up to dashbord</title>
</head>
<body  style="background-color: rgb(255, 255, 255)">
  
<?php
  $oemail="";
  $opass="";
  $oer = "";
  $ok = 1;
  $exe ="";
      
  if(isset($_POST['submit'])) {
    if(isset($_POST['sin_password'])&&isset($_POST['sin_email'])){
      $email=$_POST['sin_email'];
      $pass=$_POST['sin_password'];
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
          require_once('../config.php');
          $pass=$_POST['sin_password'];
          $email=$_POST['sin_email'];
          $sql = "select * from admin where admin_email	 = '$email' and admin_password ='$pass'";
        
          $exe=mysqli_query($conn,$sql);
          if(!$exe){
            echo "Error" .mysqli_error($conn);
        }
          while($row= mysqli_fetch_assoc($exe)){
              if($email == $row['admin_email'] || $pass == $row['admin_password']){
                           
                $_SESSION['adminemail']= $row['admin_email'];
               $_SESSION['adminpassword']=$row ['admin_password'];
               header('location:user.php');  
                       }    
                      
                       if($email != $row['domain_gmail'] && $pass != $row['domain_pass']){
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
                     <h1>login to the dashbord</h1>
                    <div class="form-outline mb-4">
                      <label for="name">the email:</label><br>
                     <input type="text" name="sin_email" id="name" style="width: 90%;">
                     <p style='background-color:#f21616'><?php echo $oemail; ?></p>
                    </div>
      
                    
                       

                    <div class="form-outline mb-4">
                          <label for="password1">password:</label><br>
                          <input type="password" name="sin_password" id="password1" style="width: 90%";  placeholder="احرف كبيره و صغيره و رمز مميز"  >
                          <p style='background-color:#f21616'><?php echo $opass; ?></p>
                        </div>
                      
                   
      
                
                     
                         </div>
                         <p style='background-color:#f21616'><?php echo  $oer; ?></p>
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
    
     <footer class="footer">
        
<p class="follow">
    follow me one:
    <a href="https://mail.google.com/mail/u/0/" style="color: white;"><i class="fa-solid fa-envelope"></i></a>gmail
    <a  style="color:white;" href="https://www.facebook.com/profile.php?id=100020909523866&sk=about_overview" target="_blank"><i class="fa-brands fa-facebook"></i></a>

Page.
</p>
<p class="design">Designed and developed by <samp style="color: #bd83d8;"><b>ZYAD alqata</b></samp> &copy; 2024</p>
</footer>



</body>
</html>


<?php
ob_end_flush()
?>






















