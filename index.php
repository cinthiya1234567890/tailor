<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tailoring Shop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

        
        <script src="https://use.fontawesome.com/40165bf2d7.js"></script>
        <style>
            .style{
            display:block;
            width: 100%;
            height: 34px;
            padding: 0px 12px;
            line-height: 1.42857143;
        }
        .style1{
            display:block;
            width: 100%;
            height: 34px;
            padding: 0px 12px;
            line-height: 1.42857143;
            font-size: 25px;
           
        }
        
            .result{
              padding-top:10px;
            }
            .error{
              color:red;
            }
        </style>

        <script>
          $(document).ready(function() {
          $("#tailor").validate({
            rules: {
              cus_mob : {
                required: true,
                minlength: 10,
                number:true
              },
              meterial: {
                required: true
              }
            },
            messages : {
              cus_mob: {
              minlength: "Mobile number should be 10 digit"
            }
            
          }
          });
          });
    
          
           $(document).ready(function(){
            
            $('.delete').click(function(){
            var el = this;
            var deleteid = $(this).data('id') /* this is your db id */
            
            var confirmalert = confirm("Are you sure ?");
            if(confirmalert == true){
              // Ajax request

            $.ajax({
              url : 'delete.php',
              type : 'POST',
              data : { id:deleteid },
              success : function(response)
              {
               if(response == 1){
                 $(el).closest('.panel').css('background','#b6dbfb');
                 $(el).closest('.panel').fadeOut('800',function(){
                  $(this).remove();
                 });
               }
               else{
                 alert('invaild id');
               }
              }
            })
            }
            });
          });

           
          $(document).on('change','#cus_mob', function() {
             
             var cus_mob = $(this).val();
             
              $.ajax({
              url: 'cus_details.php',
              type: 'post',
              data: {cus_mobno:cus_mob},
              dataType: 'json',
              
              success:function(response){
                
                var len = response.length;
                for( var i = 0; i<len; i++){
                var cus_name = response[i]['cus_name'];
                var cus_address = response[i]['cus_address'];
                $('#cus_name').val(cus_name);
                $('#cus_address').val(cus_address);
                }}
             });
            });


            $(document).on('change','#qty', function() {
          // Does some stuff and logs the event to the console
          var qty = parseFloat($('#qty').val());
          var pri = parseFloat($('#price').val());
          var total = qty * pri;
         
          $('#total').val(total);
          });

          
          $(document).on('change','#price', function() {
          // Does some stuff and logs the event to the console
          var qty1 = parseFloat($('#qty').val());
          var pri1 = parseFloat($('#price').val());
          var total = qty1 * pri1;
         
          $('#total').val(total);
          });

          // meterial list 

          $(document).on('change','#meterial', function() {
              var meterial = $(this).val();
              $.ajax({
              url: 'getmeterial.php',
              type: 'post',
              data: {meterials:meterial},
              dataType: 'json',
              success:function(response){
                var len = response.length;
                for( var i = 0; i<len; i++){
                    var price = response[i]['price'];
                    var qty = response[i]['qty'];
                    var total = price * qty;
                    $('#price').val(price);
                    $('#qty').val(qty);
                    $('#total').val(total);
              }}
             });
            });



          </script>   
    </head>
    <body>
        <div class="container" style="margin-top:40px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  Registration Details
                </div>
            
            <div class="panel-body">
                <form method="POST" id="tailor">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for=""> Entry Date</label>
                          <input type="date" class="form-control" name="entry_date">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">Due Date</label>
                          <input type="date" class="form-control" name="due_date">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="">Bill No</label>
                          <input type="text" class="form-control" name="bill_no" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">Customer Mobile Nubmer</label>
                          <input type="text" class="form-control" id="cus_mob" name="cus_mob" autocomplete="off" >
                        </div>


                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6" >
                          <label for="">Cutomer Address</label>
                          <input type="text" class="form-control" id="cus_address" name="cus_address" autocomplete="off">
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label for="">Customer Name</label>
                          <input type="text" class="form-control" id="cus_name" name="cus_name" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="">Stiched by</label>
                          <input type="text" class="form-control" name="stiched_by" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">Cutted by</label>
                          <input type="text" class="form-control" name="cutted_by" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="">Meterial</label>
                          <select class="form-control" name="meterial" id="meterial" style="">
                              <option selected value="">Choose...</option>
                              <option>Saree</option>
                              <option>Chudi</option>
                              <option>Lining Blouse</option>
                              <option>Blouse</option>
                              <option>Sattai Button</option>
                              <option>Pavadai Belt</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Qty</label>
                            <select class="form-control" name="qty" id="qty" style="">
                              <option selected value="">Choose...</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                              <option>10</option>
                              <option>11</option>
                              <option>12</option>
                              <option>13</option>
                              <option>14</option>
                              <option>15</option>
                              <option>16</option>
                              <option>17</option>
                              <option>18</option>
                              <option>19</option>
                              <option>20</option>

                          </select>
                            
                        </div>
                          
                            <div class="form-group col-md-3">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price" id="price" >
                            </div>
                          
                            <div class="form-group col-md-2" data-role="page">
                            <label for="">Total</label>
                            <input type="text" class="form-control" name="total" id="total">
                            </div>
                            <div class="form-group col-md-1" style="text-align:center;">
                            <label for=""></label>
                            <button name="submit" style="border: none;background-color: #fff;"><i class="fa fa-plus-circle fa-2x style" aria-hidden="true"></i></button> 
                            </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6" style="display:none;">
                            <label for="">Status</label>
                            <select id="inputState" class="form-control" type="hidden" name="status">
                                <option selected>Choose...</option>
                                <option>Paid</option>
                                <option>Un Paid</option>
                                <option>Partial</option>
                            </select>
                        </div>
                    </div>
                    
                </form>
                </div>
                </div>
            
                <?php
                if(isset($_POST['submit'])){
                    extract($_POST);
                    $cus_mob = $_POST['cus_mob'];
                    $query1 = "SELECT cus_mob FROM tailor WHERE cus_mob=".$cus_mob;
                   
                    $q = mysqli_query($mysqli,$query1);
                    if (mysqli_num_rows($q) >= 1) {
                      echo '<script language="javascript">';
                      echo 'alert("Mobile_No is Already Exist....")';
                      echo '</script>';
                    }
                    else {
                    $sql = "INSERT INTO tailor (user,entry_date,due_date,bill_no,cus_address,cus_mob,cus_name,meterial,qty,stiched_by,cutted_by,price,total,statuss)
                    VALUES ('me','$entry_date','$due_date','$bill_no','$cus_address','$cus_mob','$cus_name','$meterial','$qty','$stiched_by','$cutted_by','$price','$total','$status')";
                    $last_id = mysqli_insert_id($mysqli);
                   
                    if ($mysqli->query($sql) === TRUE) {
                      //echo "New record created successfully";
                    } else {
                      echo "Error: " . $sql . "<br>" . $mysqli->error;
                    }
                  }
                
                //$qryy = "SELECT * FROM tailor WHERE id = (SELECT MAX(id) FROM tailor WHERE user='me')";
                $qryy = "SELECT * FROM tailor";
                $row = mysqli_query($mysqli,$qryy);
                if (mysqli_num_rows($row) > 0) {
                while($result = mysqli_fetch_array($row)) {
                ?>
                <div class="panel" style="background-color: aliceblue;padding: 8px 0 49px 0;">
                <div class="panel-heading">
                        <div class=" col-md-3">
                          <label for="">Meterial</label>
                          <p class="result"><?php echo $result['meterial'];?></p>
                        </div>
                        <div class=" col-md-3">
                            <label for="">Qty</label>
                            <p class="result"><?php echo $result['qty'];?></p>
                         </div>
                        <div class="col-md-2">
                            <label for="">Price</label>
                            <p class="result"><?php echo $result['price'];?></p>
                        </div>
                        <div class="col-md-2">
                            <label for="">Total</label>
                            <p class="result"><?php echo $result['total'];?></p>
                        </div>
                        <div class="col-md-2">
                            <label for=""></label>
                            <?php $id = $result['id']; ?>
                            <button name="submit" class="delete" style="border: none;background-color:aliceblue;" 
                             data-id='<?= $id ?>'>
                           
                            <i class="fa fa-trash fa-2x style1" aria-hidden="true"></i></button>
                        </div>
                        
                </div>
            </div>
        <?php  }} }?>
        </div>    
    </body>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>