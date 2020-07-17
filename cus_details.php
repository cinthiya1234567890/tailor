<?php
 include("connection.php");

 $cus_mobno = $_POST['cus_mobno'];
            
 $qryy = "SELECT * FROM tailor WHERE cus_mob='" . $cus_mobno . "'";
 //print_r($qryy);
 $result = mysqli_query($mysqli,$qryy);
 



 while( $data = mysqli_fetch_array($result) ){

  $cus_name = $data['cus_name'];
  $cus_address = $data['cus_address'];
  //echo "<div class='form-group col-md-6'>";
  //echo  "<label>";
  //echo "Customer Name";
  //echo "</label>";
  //echo $cus_name;
  //echo $cus_address;
    //echo "</div>";
    $cus_details[] = array("cus_name" => $cus_name, "cus_address" => $cus_address);
    //echo json_encode(['cus_name'=>$cus_name,'cus_address'=>$cus_address]);
}
 
echo json_encode($cus_details);
?>