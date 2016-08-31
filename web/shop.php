<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Top quality, affordable diapers for babies with an unique value proposition" name="description">
    <meta content="Marcin Michalec" name="author">
    <meta content="noindex" name="robots">
    <title>SoftBum Denmark</title><!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">


</head>
<body>

<div class="content">
<section class="header">

<a href="index.html"> <img src="logo1.png" class="img-responsive center-block"> </a> </section>

<div class="div1">
<nav>
				<ul>
				
					<li><a href="index.html">Home</a></li>
					<li><a href="service.html">Service</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
	
	</div>
    
            
        </div>

    </div>
<div class="container-fluid" id="wrapper">

<div class="container-fluid moreinfo">
        <div class="message babydollfont"><br>
            Shopping
        </div>
        <div class="container-fluid servicesdesc">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img alt="More leg space" class=
                    "img-responsive servicesimg" src="img/diaperred.png">
                    <p class="diaperinfo babydollfont">Red</p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img alt="More leg space" class=
                    "img-responsive servicesimg" src="img/diaperblue.png">
                    <p class="diaperinfo">Blue</p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img alt="More leg space" class=
                    "img-responsive servicesimg" src="img/diapergreen.png">
                    <p class="diaperinfo">Green</p>
                </div>

            </div>
            
            <div class="row">

                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img alt="More leg space" class=
                    "img-responsive servicesimg" src="img/diaperblack.png">
                    <p class="diaperinfo">Black</p>
                </div>
                
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img alt="More leg space" class=
                    "img-responsive servicesimg" src="img/diaperpink.png">
                    <p class="diaperinfo">Pink</p>
                </div>

                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img alt="More leg space" class=
                    "img-responsive servicesimg" src="img/diaperwhite.png">
                    <p class="diaperinfo">White</p>
                </div>

            </div>
        </div>
    </div>


<br><br><br><br><hr>
 
  <div class="container mingfont">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>New order</h1>
                    <p class="lead">Please give us the information required for placing an order.</p>

                    
                    <form id="order-form" method="post" action="add.php" role="form">
                        <div class="messages">
                            <?php
                            if (isset($_GET['completed'])) { ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
                                    </button>
                                    Your order has been placed.
                                </div>
                            <?php } ?>
                        </div>
                        <div class="controls">
                            <h3>Product information</h3><hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Product name *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="What do you want to buy?" required="required" data-error="Product name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_quantity">Quantity *</label>
                                        <input id="form_quantity" type="number" name="quantity" class="form-control" placeholder="How many products do you need?" required="required" data-error="Quantity is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_color">Color *</label>
                                        <select id="form_color" name="color" class="form-control" required="required" data-error="Color is required.">
                                            <option selected disabled>Pick a color...</option>
                                            <option value="red">Red</option>
                                            <option value="blue">Blue</option>
                                            <option value="green">Green</option>
                                            <option value="white">White</option>
                                            <option value="black">Black</option>
                                            <option value="pink">Pink</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_size">Size *</label>
                                        <select id="form_size" name="size" class="form-control" required="required" data-error="Size is required.">
                                            <option selected disabled>Select a size</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <h3>Personal information</h3><hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_fullname">Full name *</label>
                                        <input id="form_fullname" type="text" name="fullname" class="form-control" placeholder="Please enter your full name" required="required" data-error="Your full name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_address">Address *</label>
                                        <input id="form_address" type="text" name="address" class="form-control" required="required" placeholder="Please enter your address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone *</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" required="required" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_comments">Comments</label>
                                        <textarea id="form_comments" name="message" class="form-control" placeholder="You can provide additional information and comments here" rows="4"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Make order">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                </div>
                            </div>
                        </div>
                    </form>

                </div><!-- /.8 -->
            </div> <!-- /.row-->
          
        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


	<section class="footer">
	 
	</section>
	</div>
</body>
</html>