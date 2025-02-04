<?php  
require_once('header.php');

?>

 <section>
    <div class="ss">
      <aside class="dd">
        <ul class="list-group-item">
          <li class="list-group-item">information & Interests </li>
          <li class="list-group-item ">SKILLS</li>
          <li class="list-group-item">EDUCATION</li>
          <div class = 'serch'><li >  <?php
                                require_once('serch.php');
                                ?> </li></div>
        </ul>


        <iframe
          src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbassemyousseftv%3Flocale%3Dar_AR&tabs=timeline&width=350&height=450&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"
          width="310" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
          allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
        </iframe>

      </aside>
    </div>

  </section>
  <section class="card">


    <div class="content">
    <?php
                                    require_once('config.php');
                                    $sql="select * from main_card order by main_card_id desc";
                                    $exe=mysqli_query($conn,$sql);
                                    if(!$exe){
                                        echo "Error" . mysqli_error($conn);
                                    }
                                    while($row=mysqli_fetch_assoc($exe)){
                                      $type=$row['main_card_type'];
                                      $doctor_name=$row['main_card_docyor_name'];
                                      $info=$row['main_card_doctor_info'];
                                      $service=$row['main_card_service'];
                                      $time=$row['main_card_time'];
                                      echo "    <div class='info2'>
                                      <div class='col p-4 d-flex flex-column position-static'>
                                          <strong class='d-inline-block mb-2 text-primary'> $type</strong>
                                          <h3 class='mb-0'>$doctor_name</h3>
                                          <div class='mb-1 text-muted'>$info</div>
                                          <p class='card-text mb-auto'> $service</p>
                                          <p class='card-text mb-auto'>$time</p>
                                      </div>  
                                      </div>  "   ;
                                    
                                    }
        
                                      
                                      
                                      
                                      
                                      
                                      
                                     
     ?>

   


      


  </section>
  <?php  

require_once('footer.php');
?>