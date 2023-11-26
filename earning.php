<?php

require "scripts.php";


if(!isset($_SESSION['username'])){
  header('location: login.php');
}

if($_SESSION['username'] != 'admin$uyt'){
  header('location: login.php');
}

?>

<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="UhC8v8YlB6AcWrQD3TqfoVFNc4uQzISRlTbb1p8c">
    <title>LegalTradeMining - Sign Up</title>
    <meta name="description" content="We are an international financial company engaged in investment activities, which are related to trading on financial markets and cryptocurrency exchanges performed by qualified professional traders.

Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.">
    <meta name="keywords" content="investment">
    <script src="cdn-cgi/apps/head/O-czAZtJ84YbcDanv2JFyHWse6k.js"></script><link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="LegalTradeMining - Sign Up">
    
    <meta itemprop="name" content="LegalTradeMining - Sign Up">
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
    <meta property="og:url" content="https://legaltrademining.com/register">
    
    <meta name="twitter:card" content="summary_large_image">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/all.min.css">
  	<link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/slick.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/dots.css">
      <!-- dashdoard main css -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/main.css">
  <link rel="stylesheet" href="../www.bitrademining.com/alert/css/animate.min.css">
  
  <link rel="stylesheet" href="../www.bitrademining.com/alert/css/fake-notification-min.css">
  
  <link rel="stylesheet" href="assets/templates/bit_gold/css/custom.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/colorcdc5.css?color=0478ea&amp;secondColor=293241">
  <style>
  .input-group-text{
    color: #fff;
  }
</style>
  
  <style type="text/css">
		.logo{
			height: 50px;
			float: left;
		}
		.__tL{
			padding: 0px 10px;
			border-radius: 5px;
			background: #34bef5;
			float: right;
			height: 35px;
			font-size: 14px;
			font-weight: 700;
			line-height: 35px;
			text-decoration: none;
			color: #232733;
			margin-left: 3px;
			margin-top: 7px;
		}
		.__tL:hover{
			text-decoration: none;
			color: #82f1f7;
		}
	</style>
</head>
  <body>
     <div id="notification-1" class="notification">			
		<div class="notification-block">
			<div class="notification-img">
				<!-- Your image or icon -->
				<i class="fa fa-btc" aria-hidden="true"></i>
				<!-- / Your image or icon -->
			</div>
			<div class="notification-text-block">
				<div class="notification-title">
					<!-- Notification Title -->
					Earning
					<!-- / Notification Title -->
				</div>
				<div class="notification-text"></div>
			</div>
		</div>
	</div>
	
	
    
      
    
  
   

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

require "header2.php";

?>
  <!-- header-section end  -->

        <!-- account section start -->
    <div class="account-section bg_img" data-background="https://legaltrademining.com/assets/images/frontend/register/5fce3a4f0b6131607350863.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-7">
            <div class="account-card">
              <div class="account-card__header bg_img overlay--one" data-background="https://legaltrademining.com/assets/images/frontend/register/5fce3a4f5d06e1607350863.jpg">
                <h2 class="section-title">Welcome To <span class="base--color">LegalTradeMining</span></h2>
                <p>Create Payment</p>
              </div>
              <div class="account-card__body">
                <form action="scripts.php" class="mt-4"  method="post">
                  <input type="hidden" name="_token" value="UhC8v8YlB6AcWrQD3TqfoVFNc4uQzISRlTbb1p8c">                                      <div class="form-group">
                    <label>Deposit Wallet Balance</label>
                    <input type="text" class="form-control" name="deposit_wallet_balance" value="" placeholder="Deposit Wallet Balance" required>
                  </div>
                  <div class="form-group">
                    <label>Interest Wallet Balance</label>
                    <input type="text" class="form-control" name="Interest_wallet_balance" value="" placeholder="Interest Wallet Balance" required>
                  </div>
             
                  <div class="form-group">
                    <label>Total Invest</label>
                    <input type="text" name="total_invest" class="form-control" value="" placeholder="Total Invest" required>
                  </div>
                  <div class="form-group">
                    <label>Total Deposit</label>
                    <input type="text" name="total_deposit" class="form-control" value="" placeholder="Total Deposit" required>
                  </div>
                  <div class="form-group">
                    <label>Total Withdraw</label>
                    <input type="text" name="total_withdraw" class="form-control" value="" placeholder="Total Withdraw" required>
                  </div>
                  <div class="form-group">
                    <label>Referral Earnings</label>
                    <input type="text" name="referral_earnings" class="form-control" placeholder="Referral Earnings" required>
                  </div>
                  <div class="form-group">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control" placeholder="date" required>
                  </div>

                  <div class="form-group">
                    <label>Transaction ID</label>
                    <input type="text" name="transaction_id" class="form-control" placeholder="Transaction ID" required>
                  </div>
                  <div class="form-group">
                    <label>Amount</label>
                    <input type="text" name="amount" class="form-control" placeholder="Amount" required>
                  </div>
                  <div class="form-group">
                    <label>Wallet</label>
                    <input type="text" name="wallet" class="form-control" placeholder="Wallet" required>
                  </div>

                  <div class="form-group">
                    <label>Details</label>
                    <input type="text" name="details" class="form-control" placeholder="Details" required>
                  </div>

                  <div class="form-group">
                    <label>Post Balance</label>
                    <input type="text" name="post_balance" class="form-control" placeholder="Post Balance" required>
                  </div>

               

                  <div class="form-group">
                    <label>User Name</label>

                          <select name="user_name" id="">

                          <?php
                           $qry_user = "SELECT * FROM earning";
                           $res = mysqli_query($con, $qry_user);
                           
                           if(mysqli_num_rows($res) > 0){ 
                              while ($fetch_data = mysqli_fetch_assoc($res)) {
          
                              $username = $fetch_data['user_name']
                          ?>

                            <option value="<?=$username ?>"><?=$username ?></option>


                          <?php 
                          
                              }
                            }
                              ?>

                          </select>

                    <input type="text" name="user_name" class="form-control" placeholder="User Name" required>
                  </div>

                  <div class="form-group d-flex justify-content-center">
                                      </div>
                  <div class="form-group">
      


                  <div class="mt-3">
                    <button type="submit" name="signup_two" class="cmn-btn">Create</button>
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- account section end -->
    
    
   
	               </center>
    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.561298552872!2d-0.10364508431731415!3d51.5029175796343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604a5bdc3957d%3A0xbbde149c43327d39!2s66+Great+Suffolk+St%2C+London+SE1+0BL%2C+UK!5e0!3m2!1sen!2sin!4v1531478364104" width="100%" height="545px" frameborder="0" style="border:0" allowfullscreen=""></iframe>


                    </div>

    

    <!-- footer section start -->
            <footer class="footer bg_img" data-background="assets/images/frontend/footer/5fce39681ce6b1607350632.jpg">
  <div class="footer__top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <a href="index.php"><img src="assets/images/logoIcon/logo.png" alt="image"></a>
          <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                        <li><a href="links/privacy-amp-policy/180.php">Privacy &amp; Policy</a></li>
                        <li><a href="links/terms-amp-condition/181.php">Terms &amp; Condition</a></li>
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
          </p></p> Email: <font color="lightblue"><a href="cdn-cgi/l/email-protection.php" class="__cf_email__" data-cfemail="85f6f0f5f5eaf7f1c5e9e0e2e4e9f1f7e4e1e0e8ecebecebe2abe6eae8">[email&#160;protected]</a></font></p></p>
          </p></p>Whatsapp: <font color="lightblue">‪+44 (740)560-8178‬</font></p></p>
           </p></p>© 2013 - 2023 <a href="index.php" class="base--color">LegalTradeMining</a>. All rights reserved</p></p>
        </div>
        <div class="col-md-6">
          <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                        <li><a href="https://facebook.com/"><i class="lab la-facebook-f"></i></a></li>
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
  <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/templates/bit_gold/js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/templates/bit_gold/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
  <script src="assets/templates/bit_gold/js/vendor/slick.min.js"></script>
  <script src="assets/templates/bit_gold/js/vendor/wow.min.js"></script>
  <!-- dashboard custom js -->
  <script src="assets/templates/bit_gold/js/app.js"></script>


  <link rel="stylesheet" href="assets/templates/bit_gold/css/iziToast.min.css">
<script src="assets/templates/bit_gold/js/iziToast.min.js"></script>


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
      "use strict";
                    $(`option[data-code=NG]`).attr('selected','');
          
          $('select[name=country]').change(function(){
              $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
              $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
          });
          $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
          $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">Captcha field is required.</span>';
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>

<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "https://legaltrademining.com/change/" + $(this).val();
        });

        $('.policy').on('click',function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.get('cookie/accept.json', function(response){
                iziToast.success({message: response, position: "topRight"});
                $('.cookie__wrapper').addClass('d-none');
            });
        });
    })();
    
<!-- scripts -->
	<script data-cfasync="false" src="../www.bitrademining.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../www.bitrademining.com/particles.js-master/particles.js"></script>
	<script src="../www.bitrademining.com/particles.js-master/demo/js/app.js"></script>
	<script type="text/javascript" src="../www.bitrademining.com/alert/js/jquery.fake-notification.min.js"></script>
	<!-- stats.js -->
	<!-- <script src="./particles.js-master/demo/js/lib/stats.js"></script> -->
	<script>
	  var count_particles, stats, update;
	  stats = new Stats;
	  stats.setMode(0);
	  stats.domElement.style.position = 'absolute';
	  stats.domElement.style.left = '0px';
	  stats.domElement.style.top = '0px';
	  document.body.appendChild(stats.domElement);
	  count_particles = document.querySelector('.js-count-particles');
	  update = function() {
	    stats.begin();
	    stats.end();
	    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
	      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
	    }
	    requestAnimationFrame(update);
	  };
	  requestAnimationFrame(update);
	</script>
	<script>
		$(document).ready(function() {
            $('#notification-1').Notification({
                // Notification varibles
                Varible1: ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
                "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"],
                Varible2: ["USA","UAE","ITALY", "FLORIDA",  "MEXICO",  "INDIA",  "CHINA",  "CAMBODIA",  "UNITED KINGDOM",  "GERMANY", "AUSTRALIA",  "BANGLADESH", "SWEDEN", "PAKISTAN", "MALDIVES", "SEYCHELLES", 
                "BOLIVIA",
                 "SOUTH AFRICA", "ZAMBIA", "ZIMBABWE", "LEBANESE", "SAUDI ARABIA", "CHILE", "PEUTO RICO"],
                
                Amount: [1000,2500,5550,6660,4454,3833,6969],                    
                Content: '[Varible1] from [Varible2] has just Earned <b>$[Amount]</b>.',
                // Timer
                Show: ['stable', 5, 10],
                Close: 5,
                Time: [0, 23],
                // Notification style 
                LocationTop: [true, '30%'],
                LocationBottom:[false, '10%'],
                LocationRight: [false, '10%'],                      
                LocationLeft:[true, '10px'],
                Background: '#000000',
                BorderRadius: 5,
                BorderWidth: 1,
                BorderColor: '#ffc552',
                TextColor: 'white',
                IconColor: '#ffffff',
                // Notification Animated   
                AnimationEffectOpen: 'slideInUp',
                AnimationEffectClose: 'slideOutDown',
                // Number of notifications
                Number: 40,
                // Notification link
                Link: [false, 'index.php', '_blank']
                
            });         
        }); 				
	</script>
</script>
<!-- GetButton.io widget -->
	<script type="text/javascript">
	    (function () {
	        var options = {
	            whatsapp: "+447405608178‬", // WhatsApp number
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
<script src="../widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>


</body>

</html>

  </body>
</html> 