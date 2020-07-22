
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
           #content {
           display:none;
          }
          #content1 {
           display:none;
          }
          #content2 {
           display:none;
          }
        </style>

<script>
$(document).ready(function() {
  $("#toggle").click(function() {
    $("#content").toggle();
    return false;
  });
  $("#toggle1").click(function() {
    $("#content1").toggle();
    return false;
  });
  $("#toggle2").click(function() {
    $("#content2").toggle();
    return false;
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
                <form id="tailor">
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
                          
                            <div class="form-group col-md-2">
                            <label for="">Total</label>
                            <input type="text" class="form-control" name="total" id="total">
                            </div>
                            <div class="form-group col-md-1" style="text-align:center;">
                            <label for=""></label>
                            
                            <button style="border: none;background-color: #fff;" id="toggle">
                            <i class="fa fa-plus-circle fa-2x style" aria-hidden="true"></i>
                            </button> 
                             
                            </div>
                            <!-- meterial test1 -->
                            <div class="form-row" id="content">
                              <div class="form-group col-md-6">
                                <label for="">Test</label>
                                <input type="text" class="form-control" name="" autocomplete="off">
                              </div>
                              <div class="form-group col-md-5">
                                <label for="">Test</label>
                                <input type="text" class="form-control" name="" autocomplete="off">
                              </div>
                              <div class="form-group col-md-1" style="text-align:center;">
                               <label for=""></label>
                               <button style="border: none;background-color: #fff;" id="toggle1">
                               <i class="fa fa-plus-circle fa-2x style" aria-hidden="true"></i>
                               </button> 
                              </div>
                            </div>
                          <!---end-->
                          <!-- meterial test2 -->
                          <div class="form-row" id="content1">
                              <div class="form-group col-md-6">
                                <label for="">Test</label>
                                <input type="text" class="form-control" name="" autocomplete="off">
                              </div>
                              <div class="form-group col-md-5">
                                <label for="">Test</label>
                                <input type="text" class="form-control" name="" autocomplete="off">
                              </div>
                              <div class="form-group col-md-1" style="text-align:center;">
                               <label for=""></label>
                               <button style="border: none;background-color: #fff;" id="toggle2">
                               <i class="fa fa-plus-circle fa-2x style" aria-hidden="true"></i>
                               </button> 
                              </div>
                            </div>
                          <!---end-->
                          <!-- meterial test3 -->
                          <div class="form-row" id="content2">
                              <div class="form-group col-md-6">
                                <label for="">Test</label>
                                <input type="text" class="form-control" name="" autocomplete="off">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="">Test</label>
                                <input type="text" class="form-control" name="" autocomplete="off">
                              </div>
                              
                            </div>
                          <!---end-->
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
            
               
        </div>    
    </body>

</html>