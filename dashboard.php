<?php
require "scripts.php";

$username = $_SESSION['username'];

if(!isset($username)){
  header('location: login.php');

}

$username_check = "SELECT * FROM earning WHERE user_name='$username'";
$res = mysqli_query($con, $username_check);
if(mysqli_num_rows($res) == 1){
    $fetch = mysqli_fetch_assoc($res);
    $deposit_wallet_balance = $fetch['deposit_wallet_balance'];
    $Interest_wallet_balance = $fetch['Interest_wallet_balance'];
    $total_invest = $fetch['total_invest'];
    $total_deposit = $fetch['total_deposit'];
    $total_withdraw = $fetch['total_withdraw'];
    $referral_earnings = $fetch['referral_earnings'];

    $date = $fetch['date'];
    $transaction_id = $fetch['transaction_id'];
    $amount = $fetch['amount'];
    $wallet = $fetch['wallet'];
    
    $details = $fetch['details'];
    $post_balance = $fetch['post_balance'];
    $user_name = $fetch['user_name'];

}elseif(mysqli_num_rows($res) < 1 ) {
  $fetch = mysqli_fetch_assoc($res);
  $deposit_wallet_balance = 0;
  $Interest_wallet_balance = 0;
  $total_invest = 0;
  $total_deposit = 10;
  $total_withdraw = 0;
  $referral_earnings = 0;

  $date = 'undefine';
  $transaction_id = 'undefine';
  $amount = 0;
  $wallet = 'undefine';
  
  $details = 'undefine';
  $post_balance = 0;
  $user_name = 'undefine';
}
?>


<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="j15rdIW2kC2MzOYV5xV4gQXPs9AbLpIt9rYX4cDI">
    <title>LegalTradeMining - Dashboard</title>
    <meta name="description" content="We are an international financial company engaged in investment activities, which are related to trading on financial markets and cryptocurrency exchanges performed by qualified professional traders.

Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.">
    <meta name="keywords" content="investment">
    <script src="/cdn-cgi/apps/head/O-czAZtJ84YbcDanv2JFyHWse6k.js"></script><link rel="shortcut icon" href="https://legaltrademining.com/assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="https://legaltrademining.com/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="LegalTradeMining - Dashboard">
    
    <meta itemprop="name" content="LegalTradeMining - Dashboard">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="https://legaltrademining.com/assets/images/seo/6352fc87aecb01666382983.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="LegalTradeMining">
    <meta property="og:description" content="We are an international financial company engaged in investment activities, which are related to trading on financial markets and cryptocurrency exchanges performed by qualified professional traders.

Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.">
    <meta property="og:image" content="https://legaltrademining.com/assets/images/seo/6352fc87aecb01666382983.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="https://legaltrademining.com/user/dashboard">
    
    <meta name="twitter:card" content="summary_large_image">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="https://legaltrademining.com/assets/templates/bit_gold//css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="https://legaltrademining.com/assets/templates/bit_gold//css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="https://legaltrademining.com/assets/templates/bit_gold//css/line-awesome.min.css">
  <link rel="stylesheet" href="https://legaltrademining.com/assets/templates/bit_gold//css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="https://legaltrademining.com/assets/templates/bit_gold//css/vendor/slick.css">
  <link rel="stylesheet" href="https://legaltrademining.com/assets/templates/bit_gold//css/vendor/dots.css">
    <!-- dashdoard main css -->
  <link rel="stylesheet" href="https://legaltrademining.com/assets/templates/bit_gold//css/main.css">
  <link rel="stylesheet" href="https://legaltrademining.com/assets/templates/bit_gold//css/custom.css">
  <link rel="stylesheet" href="https://legaltrademining.com/assets/templates/bit_gold/css/color.php?color=0478ea&secondColor=293241">
  <style type="text/css">
  #copyBoard{
    cursor: pointer;
  }
</style>
</head>
  <body>
      
      
      
    
  
   

  <div class="full-wh">
    <!-- STAR ANIMATION -->
    <div class="bg-animation">
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <div id='stars4'></div>
    </div><!-- / STAR ANIMATION -->
  </div>
  <div class="page-wrapper">
      <!-- header-section start  -->
      <?php

require "header1.php";

?>
  <!-- header-section end  -->

    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="https://legaltrademining.com/assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Dashboard</h2>
            <ul class="page-breadcrumb">
              <li><a href="https://legaltrademining.com">Home</a></li>
              <li>Dashboard</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end --><div class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 pl-lg-5 mt-lg-0 mt-5">
            <div class="row mb-none-30">
              <div class="col-md-12 mb-4">
                <label>Referral Link</label>
                <div class="input-group" style="background-color:#DBA621 !important;" >
                  <input type="text" name="text" class="form-control" id="referralURL"
                  value="https://legaltrademining.com/register/studmuffin" readonly>
                  <div class="input-group-append">
                    <span class="input-group-text copytext copyBoard" id="copyBoard"> <i class="fa fa-copy"></i> </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Deposit Wallet Balance</span>
                    <h4 class="currency-amount">$<?=$deposit_wallet_balance ?> </h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-dollar-sign"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Interest Wallet Balance</span>
                    <h4 class="currency-amount">$<?=$Interest_wallet_balance ?></h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-wallet"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Invest</span>
                    <h4 class="currency-amount">$<?=$total_invest ?></h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cubes "></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Deposit</span>
                    <h4 class="currency-amount">$<?=$total_deposit ?></h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-credit-card"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget  d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Withdraw</span>
                    <h4 class="currency-amount">$<?=$total_withdraw ?></h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget  d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Referral Earnings</span>
                    <h4 class="currency-amount">$<?=$referral_earnings ?></h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
            </div><!-- row end -->
            <div class="row mt-50">
              <div class="col-lg-12">
                <div class="table-responsive--md">
                  <table class="table style--two">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Transaction ID</th>
                        <th>Amount</th>
                        <th>Wallet</th>
                        <th>Details</th>
                        <th>Post Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                                            <tr>
                        <td data-label="Date"><?=$date ?></td>
                        <td data-label="Transaction ID"><span class="text-primary"><?=$transaction_id ?></span></td>

                        <td data-label="Amount">
                                                    <span class="text-success">+ $<?=$amount ?></span>
                                                  </td>
                        <td data-label="Wallet">
                                                    <span class="badge badge-info"><?=$wallet ?></span>
                                                  </td>
                        <td data-label="Details"><?=$details ?></td>
                        <td data-label="Post Balance"><span> $<?=$post_balance?></span></td>
                      </tr>
                                          </tbody>
                  </table>
                </div>
              </div>
            </div><!-- row end -->
          </div>
        </div>
      </div>
    </div>

    

    <!-- footer section start -->
            <footer class="footer bg_img" data-background="https://legaltrademining.com/assets/images/frontend/footer/5fce39681ce6b1607350632.jpg">
  <div class="footer__top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <a href="https://legaltrademining.com"><img src="https://legaltrademining.com/assets/images/logoIcon/logo.png" alt="image"></a>
          <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                        <li><a href="https://legaltrademining.com/links/privacy-amp-policy/180">Privacy &amp; Policy</a></li>
                        <li><a href="https://legaltrademining.com/links/terms-amp-condition/181">Terms &amp; Condition</a></li>
                      </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-md-left text-center">
          
          </p></p>Address: <font color="lightblue">66 Great suffolk st, London SE1 0BL,UK</font></p></p>
          </p></p> Email: <font color="lightblue"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="33404643435c4147735f5654525f47415257565e5a5d5a5d541d505c5e">[email&#160;protected]</a></font></p></p>
          </p></p>Whatsapp: <font color="lightblue">‪+44 (740)560-8178‬</font></p></p>
          <p>© 2013 - 2023 <a href="https://legaltrademining.com" class="base--color">LegalTradeMining</a>. All rights reserved</p>
        </div>
        <div class="col-lg-6">
          <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                        <li><a href="https://facebook.com"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="https://www.twitter.com/"><i class="lab la-twitter"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="lab la-pinterest-p"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="lab la-linkedin-in"></i></a></li>
                      </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer section end -->
  </div> <!-- page-wrapper end -->
    <!-- jQuery library -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://legaltrademining.com/assets/templates/bit_gold//js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="https://legaltrademining.com/assets/templates/bit_gold//js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
  <script src="https://legaltrademining.com/assets/templates/bit_gold//js/vendor/slick.min.js"></script>
  <script src="https://legaltrademining.com/assets/templates/bit_gold//js/vendor/wow.min.js"></script>
  <!-- dashboard custom js -->
  <script src="https://legaltrademining.com/assets/templates/bit_gold//js/app.js"></script>


  <link rel="stylesheet" href="https://legaltrademining.com/assets/templates/bit_gold/css/iziToast.min.css">
<script src="https://legaltrademining.com/assets/templates/bit_gold/js/iziToast.min.js"></script>


<script>
"use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>

  
  
    <script>
      $('.copyBoard').click(function(){
        "use strict";
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
      });
    </script>

<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "https://legaltrademining.com/change/" + $(this).val();
        });
    })();
</script>
<!-- GetButton.io widget -->
	<script type="text/javascript">
	    (function () {
	        var options = {
	            whatsapp: "‪+447405608178‬", // WhatsApp number
	            call_to_action: "Message us on Whatsapp", // Call to action
	            position: "left", // Position may be 'right' or 'left'
	        };
	        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
	        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
	        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
	        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
	    })();
	</script>
	<!-- /GetButton.io widget -->
<script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>

</body>
</html>

  </body>
</html> 