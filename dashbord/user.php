<?php  
require_once('dash_header.php');

?>

<?php  
require_once('dash_aside.php');

     ?>
  <section class="card" >

    <h1>mange user</h1><br> <a href='add_user.php' style =' color: bule;text-decoration: none;' >NEW USER </a>
                                                            </td>   <hr>
  <div class="content" >
  <?php
                                      
                                      require_once('../config.php');
                                      $sql="select * from sign_up order by sin_up_id desc";
                                      $result=mysqli_query($conn,$sql);
                                      while($row=mysqli_fetch_assoc($result)){
                                     
                                        $name = $row['users_name'];
                                        $pass2 = $row['confirm'];
                                        $email = $row['email'];
                                        $phone = $row['phone'];
                                        $gender = $row['gender'];
                                        $country =$row['country'];
                                        $text = $row['note'];
                                        $id = $row['sin_up_id'];
                                        echo "    <div >
                                        <div class='col p-12 d-flex flex-column position-static'>
                                                                                  
                                                  <table class='table'>
                                                  <thead>
                                                    <tr>
                                                      <th scope='col'>id  </th>
                                                      <th scope='col'>the name</th>
                                                      <th scope='col'>the password</th>
                                                      <th scope='col'>the email</th>
                                                      <th scope='col'>the phon</th>
                                                      <th scope='col'>the gender</th>
                                                      <th scope='col'>the country</th>
                                                      <th scope='col'>the text</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                    
                                                      <td>$id</td>
                                                      <td>$name</td>
                                                      <td>$pass2</td>
                                                      <td>$email</td>
                                                      <td>$phone</td>
                                                      <td>$gender</td>
                                                      <td>$country</td>
                                                      <td>$text</td>
                                                    </tr>
                                                        <tr>
                                                            <td>  <a href='dash_edite_del.php?vl=$id' style =' color: red;' >delite</a>
                                                            </td>  
                                                          <td> <a href='dash_edite_user.php?vl=$id' style =' color: green;' >edit</a>
                                                          </td>
                                                          </tr>
                                                  </tbody>
                                                </table>
                                          
                                        </div>  
                                        </div>  "   ;

                                      
                                      }        mysqli_close($conn);
                               
                                     
                                      
                                      
                                                             
                                     
     ?>

</div>
  
  </section>


  <?php  require_once('../footer.php');
?>