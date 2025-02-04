<?php  

require_once('valdate.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <link rel="stylesheet" href="dash.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >
    <title>DASHBORD</title>
</head>
<body  >

  <header>
    <h1 class="zyad">بلقيس كاش-(admin)</h1>
  
      <a href="sin_out.php">sign out</a>
      <?php
  if($_SESSION['adminemail']){
    $clint=$_SESSION['adminemail'];
    echo " <a href='contact.php'>hello : $clint</a>";
  }

  ?>
     

  </header>