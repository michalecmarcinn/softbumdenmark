<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Top quality, affordable diapers for babies with an unique value proposition" name="description">
    <meta content="Marcin Michalec" name="author">
    <meta content="noindex" name="robots">
    <title>SoftBum China</title><!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script>
    <script src=
    "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
    </script>
    <script src="js/jquery-1.11.1.min.js" type="text/javascript">
    </script>
</head>
<body>



 <!-- HEADER END -->

 <!-- NAVIGATION -->


<!-- NAVIGATION ENDS -->

<!-- MAIN PART -->

 <div class="row">
                <h1>Last orders</h1>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Qty</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Customer</th>
                            <th>Contact</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php
                            require_once("./db.inc.php");
                            $orders = $db->getConnection()->query("SELECT * FROM " . $db->table);

                            foreach ($orders as $order) { ?>
                            <tr>
                                <td><?=$order['id'] ?></td>
                                <td><?=$order['name'] ?></td>
                                <td><?=$order['quantity'] ?></td>
                                <td><?=$order['color'] ?></td>
                                <td><?=$order['size'] ?></td>
                                <td><?=$order['fullname']?>, <?=$order['address']?></td>
                                <td><?=$order['email']?>, tel: <?=$order['phone']?></td>
                            </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
            </div>
        </div> 

 <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



<!-- MAIN PART ENDS -->





<!-- WRAPPER ENDS -->




    </div>


</body>
</html>