<?php
	session_start();
?>

<?php
	include('dbconnection4.php');
?>
<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
          /**
          * Reinstate scrolling for non-JS clients
          */
          .simplebar-content-wrapper {
            overflow: auto;
          }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>Car Library - Buy Securely</title>
    
</head>
<body class="">

   
    <!-- Main Section-->
    <section class="mt-5 container ">
        <!-- Page Content Goes Here -->

        <h1 class="mb-4 display-5 fw-bold text-center">Buy Securely</h1>
        <p class="text-center mx-auto">Please fill in the details below to complete your order.</p>
            <!-- <a href="#">Login here.</a></p> -->
            <p>
                <?php if(isset($_SESSION['sess_user'])){

                    // echo $_SESSION['sess_user'];
                    $p=$_SESSION['sess_id'];
                    // $ret2=mysqli_query($con,"select * from registration where id = $p");
                    // $row2 =mysqli_fetch_array($ret2);
                    $ret3=mysqli_query($con,"select * from booking where user_id = $p");
                    $row3 =mysqli_fetch_array($ret3);

                } 
                ?>
            </p>



            <div class="row g-md-8 mt-4">
                <!-- Checkout Panel Left -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <!-- Checkout Panel Contact -->
                    <div class="checkout-panel">
                      <h5 class="title-checkout">Contact Information</h5>
                      <div class="row">
                      
                        <!-- Email-->
                        <form method="post" action="booking.php">
                        <div class="col-12">
                          <div class="form-group" >
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?php echo $row3['email']; ?>">
                          </div>
                      
                          <!-- Mailing List Signup-->
                          <!-- <div class="form-group form-check m-0">
                            <input type="checkbox" class="form-check-input" id="add-mailinglist" checked>
                            <label class="form-check-label" for="add-mailinglist">Keep me updated with your latest news and offers</label>
                          </div> -->
                        </div>
                      </div>
                    </div>
                    <!-- /Checkout Panel Contact -->                    <!-- Checkout Shipping Address -->
                    <div class="checkout-panel">
                      <h5 class="title-checkout">Shipping Address</h5>
                      <div class="row">
                        <!-- First Name-->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="firstName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="" required="" value="<?php echo $row3['name'];?>">
                          </div>
                        </div>
                    
                        
                    
                        <!-- Address-->
                        <div class="col-12">
                          <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="123 Some Street Somewhere" required="" name="address" value="<?php echo $row3['address']; ?>">
                          </div>
                        </div>

                        <!-- Contact Number -->
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="phoneno" class="form-label">Phone No.</label>
                            <input type="text" class="form-control" id="phoneno" placeholder="+91" required="" name="phoneno" value="<?php echo $row3['phoneno']; ?>">
                          </div>
                        </div>
                    
                        <!-- Country-->
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                           <input type="text" class="form-control" name="country" placeholder="+91" required="" value="<?php $row3['country']; ?>">
                          </div>
                        </div>
                    
                        <!-- State-->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="state" class="form-label">State</label>
                           <input type="text" class="form-control" name="state" placeholder="" required="" value="<?php echo $row3['state']; ?>">
                          </div>
                        </div>
                    
                        <!-- Post Code-->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="zip" class="form-label">Zip/Post Code</label>
                            <input type="text" class="form-control" name="zip" placeholder="" required="" value="<?php  echo $row3['zipcode'];?>">
                          </div>
                        </div>
                      </div>
                    
                      <!-- <div class="pt-4 mt-4 border-top d-flex justify-content-between align-items-center"> -->
                        <!-- Shipping Same Checkbox-->
                        <!-- <div class="form-group form-check m-0">
                          <input type="checkbox" class="form-check-input" id="same-address" checked>
                          <label class="form-check-label" for="same-address">Use for billing address</label>
                        </div>
                      </div> -->
                    </div>
                    <!-- /Checkout Shipping Address -->                    <!-- Checkout Billing Address-->
                   
                    <!-- / Checkout Billing Address-->                    <!-- Checkout Shipping Method-->
                    <div class="checkout-panel">
                      <!-- <h5 class="title-checkout">Shipping Method</h5> -->
                    
                      <!-- Shipping Option-->
                     <!--  <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod" id="checkoutShippingMethodOne" checked>
                        <label class="form-check-label" for="checkoutShippingMethodOne">
                          <span class="d-flex justify-content-between align-items-start w-100">
                            <span>
                              <span class="mb-0 fw-bolder d-block">Click & Collect Shipping</span>
                              <small class="fw-bolder">Collect from our London store</small>
                            </span>
                            <span class="small fw-bolder text-uppercase">Free</span>
                          </span>
                        </label>
                      </div> -->
                    
                      <!-- Shipping Option-->
                     <!--  <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod" id="checkoutShippingMethodTwo">
                        <label class="form-check-label" for="checkoutShippingMethodTwo">
                          <span class="d-flex justify-content-between align-items-start">
                            <span>
                              <span class="mb-0 fw-bolder d-block">UPS Next Day</span>
                              <small class="fw-bolder">For all orders placed before 1pm Monday to Thursday</small>
                            </span>
                            <span class="small fw-bolder text-uppercase">$19.99</span>
                          </span>
                        </label>
                      </div> -->
                    
                      <!-- Shipping Option-->
                     <!--  <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod" id="checkoutShippingMethodThree">
                        <label class="form-check-label" for="checkoutShippingMethodThree">
                          <span class="d-flex justify-content-between align-items-start">
                            <span>
                              <span class="mb-0 fw-bolder d-block">DHL Priority Service</span>
                              <small class="fw-bolder">24 - 36 hour delivery</small>
                            </span>
                            <span class="small fw-bolder text-uppercase">$9.99</span>
                          </span>
                        </label>
                      </div> -->
                    </div>
                    <!-- /Checkout Shipping Method -->                    <!-- Checkout Payment Method-->
                    <div class="checkout-panel">
                      <!-- <h5 class="title-checkout">Payment Information</h5> -->
                    
                      <div class="row">
                        <!-- Payment Option-->
                         <!-- div class="col-12">
                          <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                            <input class="form-check-input" type="radio" name="checkoutPaymentMethod" id="checkoutPaymentStripe" checked>
                            <label class="form-check-label" for="checkoutPaymentStripe">
                              <span class="d-flex justify-content-between align-items-start">
                                <span>
                                  <span class="mb-0 fw-bolder d-block">Credit Card (Stripe)</span>
                                </span>
                                <i class="ri-bank-card-line"></i>
                              </span>
                            </label>
                          </div>
                        </div>  -->
                      
                        <!-- Payment Option-->
                         <!-- <div class="col-12">
                          <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                            <input class="form-check-input" type="radio" name="checkoutPaymentMethod" id="checkoutPaymentPaypal">
                            <label class="form-check-label" for="checkoutPaymentPaypal">
                              <span class="d-flex justify-content-between align-items-start">
                                <span>
                                  <span class="mb-0 fw-bolder d-block">PayPal</span>
                                </span>
                                <i class="ri-paypal-line"></i>
                              </span>
                            </label>
                          </div>
                        </div> -->
                      
                      </div> 
                      
                      <!-- Payment Details-->
                       <!-- <div class="card-details">
                        <div class="row pt-3">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="cc-name" class="form-label">Name on card</label>
                              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                              <small class="text-muted">Full name as displayed on card</small>
                            </div>
                          </div>
                      
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="cc-number" class="form-label">Credit card number</label>
                              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            </div>
                          </div>
                      
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="cc-expiration" class="form-label">Expiration</label>
                              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                            </div>
                          </div>
                      
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="d-flex">
                                <label for="cc-cvv" class="form-label d-flex w-100 justify-content-between align-items-center">Security Code</label>
                                <button type="button" class="btn btn-link p-0 fw-bolder fs-xs text-nowrap" data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="A CVV is a number on your credit card or debit card that's in addition to your credit card number and expiration date">
                                  What's this?
                                </button>
                              </div>
                              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                            </div>
                          </div>
                        </div>
                      </div>  -->

                      <!-- / Payment Details-->
                      
                      <!-- Paypal Info-->
                      <div class="paypal-details bg-light p-4 d-none mt-3 fw-bolder">
                        Please click on complete order. You will then be transferred to Paypal to enter your payment details.
                      </div>
                      <!-- /Paypal Info-->
                    </div>
                    <!-- /Checkout Payment Method-->                </div>
                <!-- / Checkout Panel Left -->

                <!-- Checkout Panel Summary -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="bg-light p-4 sticky-md-top top-5">
                        <div class="border-bottom pb-3">
                            <!-- Cart Item-->
                            <!-- <?php
                                $oid=$_SESSION['sess_id'];
                                $ret4=mysqli_query($con,"select * from booking where ID='$oid'");
                                $row4=mysqli_fetch_array($ret4);
                            ?> -->
                            <div class="d-none d-md-flex justify-content-between align-items-start py-2">
                                <div class="d-flex flex-grow-1 justify-content-start align-items-start">
                                    <div class="position-relative f-w-20 border p-2 me-4">
                                        <!-- <span class="checkout-item-qty">1</span> -->
                                        <!-- <img src="./assets/images/products/product-1.jpg" alt="" class="rounded img-fluid"> -->
                                        <!-- <?php
                                          if($row3['target']==0){
                                        ?> -->
                                        <img src="../admin/photos/<?php  echo $row3['photo'];?>" class="rounded img-fluid">
                                        <input type="hidden" name="photo" value="<?php echo $row3['photo']; ?>">
                                      <!--   <?php
                                          }else{
                                        ?>
                                        <img src="../seller/photos_s/<?php  echo $row3['photo'];?>" class="rounded img-fluid">
                                         <input type="hidden" name="photo" value="<?php echo $row3['photo']; ?>">
                                        <?php
                                          }
                                        ?> -->
                                    </div>
                                    <div>
                                        <p class="mb-1 fs-6 fw-bolder" ><?php echo "Owner :".$row3['name']; ?></p>
                                        <input type="hidden" name="owner" value="<?php echo $row3['name']; ?>">
                                        <p class="mb-1 fs-6 fw-bolder" name="model"><?php echo "Model : ".$row3['model']; ?></p>
                                        <input type="hidden" name="model" value="<?php echo $row3['model']; ?>">
                                       
                                    </div>
                                </div>
                                <div class="flex-shrink-0 fw-bolder">
                                    <span name="vehicleno"><b><?php echo $row3['car_no']; ?></b></span>
                                    <input type="hidden" name="vehicleno" value="<?php echo $row3['car_no']; ?>">
                                </div>
                            </div>
                           <!--  <div class="d-none d-md-flex justify-content-between align-items-start py-2">
                                <div class="d-flex flex-grow-1 justify-content-start align-items-start">
                                    <div class="position-relative f-w-20 border p-2 me-4">
                                        <span class="checkout-item-qty">2</span>
                                        <img src="./assets/images/products/product-2.jpg" alt="" class="rounded img-fluid">
                                    </div>
                                    <div>
                                        <p class="mb-1 fs-6 fw-bolder">North Face Jacket</p>
                                        <span class="fs-xs text-uppercase fw-bolder text-muted">Mens / Blue / Large</span>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 fw-bolder">
                                    <span>$999.98</span>
                                </div>
                            </div> -->
                            <!-- <div class="d-none d-md-flex justify-content-between align-items-start py-2">
                                <div class="d-flex flex-grow-1 justify-content-start align-items-start">
                                    <div class="position-relative f-w-20 border p-2 me-4">
                                        <span class="checkout-item-qty">1</span>
                                        <img src="./assets/images/products/product-4.jpg" alt="" class="rounded img-fluid">
                                    </div>
                                    <div>
                                        <p class="mb-1 fs-6 fw-bolder">Womens Adidas Hoodie</p>
                                        <span class="fs-xs text-uppercase fw-bolder text-muted">Womens / Red / Medium</span>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 fw-bolder">
                                    <span>$59.99</span>
                                </div>
                            </div> -->
                            <!-- / Cart Item-->
                        </div>
                        <!-- <div class="py-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="m-0 fw-bolder fs-6">Subtotal</p>
                                <p class="m-0 fs-6 fw-bolder">$422.99</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <p class="m-0 fw-bolder fs-6">Shipping</p>
                                <p class="m-0 fs-6 fw-bolder">$8.95</p>
                            </div>
                        </div> -->
                        <div class="py-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="m-0 fw-bold fs-5">Grand Total</p>
                                    <span class="text-muted small">Inc $45.89 sales tax</span>
                                </div>
                                <p class="m-0 fs-5 fw-bold" name="price"><?php echo "Rs.".$row3['price'];?></p>
                                <input type="hidden" name="price" value="<?php echo $row3['price']; ?>">
                            </div>
                        </div>
                        <!-- <div class="py-3 border-bottom">
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" placeholder="Enter your coupon code">
                                <button class="btn btn-dark btn-sm px-4">Apply</button>
                            </div>-->
                        </div>  
                    <!-- Accept Terms Checkbox-->
                   <!--  <div class="form-group form-check my-4">
                        <input type="checkbox" class="form-check-input" id="accept-terms" checked>
                        <label class="form-check-label fw-bolder" for="accept-terms">I agree to Alpine's <a href="#">terms & conditions</a></label>
                    </div> -->
                    <!-- <a href="#" class="btn btn-dark w-100" role="button">Complete Order</a>       -->
                    <!-- <button class="btn btn-dark w-100" name="submit10">Complete Order</button> -->
                    </form>
                    </div>                </div>
                <!-- /Checkout Panel Summary -->
            </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    <!-- Footer-->
    <footer class="bg-dark mt-10  ">
    
        <!-- Footer socials-->
        <div class="bg-light py-4">
            <div class="container d-flex justify-content-center align-items-center py-2">
                <p class="lead fw-bolder mb-0 lh-1">Find us online</p>
                <ul class="list-unstyled d-flex justify-content-start align-items-center mb-0 ms-3 lh-1">
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-instagram-fill ri-xl lh-1"></i></a></li>
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-facebook-fill ri-xl lh-1"></i></a></li>
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-twitter-fill ri-xl lh-1"></i></a></li>
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-snapchat-fill ri-xl lh-1"></i></a></li>
                </ul>
            </div>
        </div>    
        <!-- / Footer socials-->
     
            
            </div>    </div>
        <!-- / Info Bar-->     
    

    
    </footer>
    
     
          
    
        </div>
      </div>
    </div>
   
      </div>
    </div>
   
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            
                        </div>
                    </div>
                </div>
    
              
            </div>
        </div>
    </section>
    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>
