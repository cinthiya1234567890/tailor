<?php
 include("connection.php");

 $meteriallist = $_POST['meterials'];
            
 $qryy = "SELECT * FROM tailor WHERE meterial='" . $meteriallist . "'";
 
 $result = mysqli_query($mysqli,$qryy);
 $tailor_arr = array();
 while( $row = mysqli_fetch_array($result) ){
    
    $price = $row['price'];
    $qty = $row['qty'];

    $qtyc = $qty/$qty ;
    $pricec = $price/$qty ;
    $tailor_arr[] = array("price" => $pricec, "qty" => $qtyc);
}
 echo json_encode($tailor_arr);;

?>