<?php  
require_once('dash_header.php');

?>
<?php  
require_once('../config.php');

?>
<?php  
require_once('dash_aside.php');

     ?>
      <section class="card">
    <div > 
    <form action="#" method="post">
    <ul  style='text-decoration: none';>
    <li ><label for="ab">inter about us</label></li>
    <li ><textarea name="about" id="ab" cols="30" rows="10"></textarea><br><hr>
  </li>
    <li > <button type="submit" class="btn btn-success btn-lg mb-1" name='submit'>Submit</button></form>
 </li>
       </ul>
  </div>
 
 
       
   
   <?php
                if(isset($_POST['submit'])){
                    require_once('../config.php');
                      $text = $_POST['about'];
                      $text_new = str_ireplace("'","''",$text);
                      $sql = "insert into 	about_us( 	about_us_info  )values(' $text_new')";
                    $result = mysqli_query($conn,$sql);
                     
        }
        ?>

  </section>


  <?php  require_once('../footer.php');
?>