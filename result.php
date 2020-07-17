<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tailoring Shop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    </head>
    <body>
        <div class="container" style="margin-top:40px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  Customer Details
                </div>
            <div class="panel-body">
                <?php
                    $sql = "SELECT * FROM tailor";
                    $result = $mysqli -> query($sql);
                    
                    // Numeric array
                    $row = $result -> fetch_array(MYSQLI_NUM);
                    
                ?>
                <form method="POST">
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
                          <input type="text" class="form-control" name="bill_no">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">Cutomer Address</label>
                          <input type="text" class="form-control" name="cus_address">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="">Customer Mobile Nubmer</label>
                          <input type="text" class="form-control" name="cus_mob">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">Customer Name</label>
                          <input type="text" class="form-control" name="cus_name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="">Meterial</label>
                          <select id="inputState" class="form-control" name="meterial">
                              <option selected>Choose...</option>
                              <option>Saree</option>
                              <option>Chudi</option>
                              <option>Lining Blouse</option>
                              <option>Blouse</option>
                              <option>Sattai Button</option>
                              <option>Pavadai Belt</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Qty</label>
                            <select id="inputState" class="form-control" name="qty">
                                <option selected>Choose...</option>
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
                            </select>
                          </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="">Stiched by</label>
                          <input type="text" class="form-control" name="stiched_by">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">Cutted by</label>
                          <input type="text" class="form-control" name="cutted_by">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="">Price</label>
                          <input type="text" class="form-control" name="price">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="">Total</label>
                          <input type="text" class="form-control" name="total">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Status</label>
                            <select id="inputState" class="form-control" name="status">
                                <option selected>Choose...</option>
                                <option>Paid</option>
                                <option>Un Paid</option>
                                <option>Partial</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="text-align:center;">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        
    </body>

</html>