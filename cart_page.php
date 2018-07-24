<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Mobile Store</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="indexcss.css">
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                    <br><br><br><br>
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id = $row["id"] . ", ";
                                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            ?>
                            <div class="container" style="margin-top: 50px; width: 500px;">
                              <div class="jumbotron">
                                  <h3><strong>No items in your Cart!</strong></h3>  
                                  <br>
                                  <p>Please, add some items to your cart first!</p>
                              </div>
                             </div>
                        <?php
                        }
                        ?>
                       
                    </table>
                </div>
            </div>
        </div>
        

        <div class="container-fluid" id="foot" style="background-color: #282626; color: #ffffff; margin-top: 150px;">
        <center>
            <div class="col-md-2 col-sm-6" style="margin-right:50px; margin-left: 130px;">
                <h3>About Us</h3>
                <h5>We have a large collection of phones over a wide variety which you can choose from!</h5>
            </div>

            <div class="col-md-2 col-sm-6" style="margin-right:50px;">
                <h3>Free Support</h3>
                <h5>Do you need any help with any of our products? <br>Just visit our support forum.<br>
                     If you are interested in how we work visit our blog to get some quality reads.</h5>
            </div>

            <div class="col-md-2 col-sm-6" style="margin-right:50px;">
                <h3>Newsletter</h3>
                <h5>Get the Newsletter. Subscribe Here.</h5>

                <button type="button" class="btn btn-sm btn-info" type="submit" value="FOLLOW" >Subscribe</button>

            </div>

            <div class="col-md-2 col-sm-6" style="margin-right:50px; ">
                <h3>Follow</h3>
                <h5>Follow us on FACEBOOK</h5>
                <button type="button" class="btn btn-sm btn-primary" type="submit" value="FOLLOW" >FOLLOW</button>
            </div>
        </center>       
        </div>

        <div class="footer" style="background-color: #000000; color: #ffffff; height: 30px;">
        <center>
            <p>Copyright @ The Mobile Store. All Rights Reserved | Contact Us: +91 90000 0000</p>
        </center>
            
        </div>


    </body>
</html>