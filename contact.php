<?php  
require_once('header.php');

?>
 <main style="background-color: rgb(255, 255, 255);  width:80%; ">
    <section class="h-300 h-custom" style="background-color: rgb(255, 255, 255);">
        <div class="container py-5 h-300">
          <div class="row d-flex justify-content-center align-items-center h-300">
            <div class="col-lg-9 col-xl-9">
              <div class="card rounded-5">
                
                <div class="card-body p-12 p-md-6"> 
      
                  <form class="px-md-6" method="post">
      
                    <div class="form-outline mb-4">
                      <label for="name">the name:</label><br>
                     <input type="text" name="zname" id="name" style="width: 90%;">
                    </div>
      
                    
                      <div class="form-outline mb-4">
                        <label for="email"> the email:</label><br>
                        <input type="email" name="zemail" id="email"  style="width: 90%;">
                      </div>
                      
          
                    <div class="form-outline mb-4">
                      <label for="note"></label><br>
                      <textarea name="znot" id="note" cols="6" rows="5" style="width: 90%;"></textarea></div>
                     
                     
                         </div>
                    <button type="submit" class="btn btn-success btn-lg mb-1" name='submit'>send</button>
                    
      
                  </form>
                  <?php
                if(isset($_POST['submit'])){
                    require_once('config.php');
                      $name = $_POST['zname'];
                      $email = $_POST['zemail'];
                      $text = $_POST['znot'];
                      $text_new = str_ireplace("'","''",$text);
                     
                   
                      
                      $sql = "insert into  contact (  contact_name ,   contact_email ,  contact_not )values('$name',' $email','$text_new')";
                      $exe = mysqli_query($conn,$sql);
                      if(!$exe){
                        echo "eroor".$sql;
                      }else{echo "ok";}
                      mysqli_close($conn);}
                ?>
      
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