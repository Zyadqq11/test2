<form method="GET">
    <input style="margin-bottom:20px;" name="find" placeholder="Write here to search" class="form-control" type="text">
    <input type="submit" name="sub_find" class="form-control btn btn-success" value="Search">
</form>

<?php
if(isset($_GET['sub_find'])){
    $f=$_GET['find'];
    header("location:found1.php?find=$f");
}

?>