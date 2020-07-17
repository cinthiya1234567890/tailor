<?php
    include('connection.php');
    $id = 0;

   if(isset($_POST['id'])){
       
       $id = mysqli_real_escape_string($mysqli,$_POST['id']);
   }
    if ($id>0){
    $dqry = "delete from tailor where id=".$id;
    //print_r($dqry);
    mysqli_query($mysqli,$dqry);
    
        echo 1;
        exit;
    
    }
    else
    {
        echo 0;
        exit;
    }

    echo 0;
    exit;
?>