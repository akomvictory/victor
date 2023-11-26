<?php

require "scripts.php";


if(!isset($_SESSION['username'])){
    header('location: login.php');
  }


  $username = $_SESSION['username'];

    $qry_user = "SELECT * FROM profile WHERE username='$username'";
    $res = mysqli_query($con, $qry_user);
    
    if(mysqli_num_rows($res) > 0){ 
        while ($fetch_data = mysqli_fetch_assoc($res)) {

        $first_name = $fetch_data['first_name'];
        $last_name = $fetch_data['last_name'];
        $username = $fetch_data['username'];
        $email = $fetch_data['email'];
        $country = $fetch_data['country'];
        $address = $fetch_data['address'];
        $mobile = $fetch_data['mobile'];
        $state = $fetch_data['state'];
        $zip = $fetch_data['zip'];
        $city = $fetch_data['city'];
        }

    }

    if(isset($_POST['update_profile'])){


    if(isset($_FILES['image'])){
           
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        
        $targetFilePath_1 = "uploads/". $file_name;
      //  $fileType_1 = pathinfo($targetFilePath_1,PATHINFO_EXTENSION);

     //    $file_ext_1 = strtolower(end(explode('.',$_FILES['id_photo']['name'])));

        
        
        // $extensions_1 = array("jpeg","jpg","png");
        
        //  if(in_array($fileType_1,$extensions_1)=== false){
        //     // $errors['extension-error'] = "extension not allowed, please choose a JPEG or PNG file.";
        //  }
         
        //  if($file_size_1 > 2097152) {
        //      $errors['filesize-error'] = 'File size must be excately 2 MB';
        //  }
        
        //      if(empty($errors)==true) {
                move_uploaded_file($file_tmp,"uploads/".$file_name);
                 
            //  }else{
            //      print_r($errors);
            //  }
     }

     $update_profile ="UPDATE `profile` SET `image` = 'uploads/$file_name', `first_name` = '$first_name', `last_name` = '$last_name', `username` = '$username', `email` = '$email', `mobile` = '$mobile', `country` = '$country', `address` = '$address', `state` = '$state', `zip` = '$zip', `city` = '$city' WHERE `username` = $username";
     $update_check = mysqli_query($con, $update_profile);

     $update_usertable ="UPDATE `usertable` SET  `firstname` = '$first_name', `lastname` = '$last_name', `email` = '$email', `username` = '$username', WHERE `username` = $username";
     $update_usertable_check = mysqli_query($con, $update_profile);

     header('location: logout.php');

    }
?>



<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="6dWmB8omwEnAVpi22RtPy8tmOJTT7TKEzWFTh2UJ">
    <title>LegalTradeMining - Profile Setting</title>
    <meta name="description" content="We are an international financial company engaged in investment activities, which are related to trading on financial markets and cryptocurrency exchanges performed by qualified professional traders.

Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.">
    <meta name="keywords" content="investment">
    <script src="/cdn-cgi/apps/head/O-czAZtJ84YbcDanv2JFyHWse6k.js"></script><link rel="shortcut icon" href="https://legaltrademining.com/assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="https://legaltrademining.com/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="LegalTradeMining - Profile Setting">
    
    <meta itemprop="name" content="LegalTradeMining - Profile Setting">
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
    <meta property="og:url" content="https://legaltrademining.com/user/profile-setting">
    
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
.avatar-upload {
    position: relative;
    max-width: 205px;
    margin: 20px auto;
}
.avatar-upload .avatar-edit {
    position: absolute;
    z-index: 1;
    bottom: 0px;
    right: 31px;
}
.avatar-upload .avatar-edit input {
    display: none;
}
.avatar-upload .avatar-edit label {
    display: inline-block;
    width: 34px;
    height: 34px;
    margin-bottom: 0;
    border-radius: 100%;
    background: #FFFFFF;
    border: 1px solid transparent;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    font-weight: normal;
    transition: all .2s ease-in-out;
}
.avatar-upload .avatar-edit label:hover {
    background: #F1F1F1;
    border-color: #D6D6D6;
}
.avatar-upload .avatar-edit label:after {
    content: "\f044";
    font-family: 'Font Awesome 5 Free';
    color: #757575;
    position: absolute;
    top: 5px;
    left: 1px;
    right: 0;
    text-align: center;
    margin: auto;
}
.avatar-preview {
    width: 192px;
    height: 192px;
    position: relative;
    border-radius: 50%;
    border: 6px solid #e4e4e4;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-preview div {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
.copytextDiv{
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
            <h2 class="page-title">Profile Setting</h2>
            <ul class="page-breadcrumb">
              <li><a href="https://legaltrademining.com">Home</a></li>
              <li>Profile Setting</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end --><section class="cmn-section">
    <div class="container">
            <div class="card">
                <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="6dWmB8omwEnAVpi22RtPy8tmOJTT7TKEzWFTh2UJ">                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' name="image" id="imageUpload" class="upload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload" class="imgUp"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div class="imagePreview" style="background-image: url(https://legaltrademining.com/assets/images/default.png)">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" class="form-control form-control-lg" placeholder="First Name" value="<?=$first_name ?>">        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" class="form-control form-control-lg" placeholder="Last Name" value="<?=$last_name ?>">        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" value="<?=$username ?>" readonly>        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?=$email ?>" class="form-control form-control-lg" placeholder="Email"  readonly>        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" name="mobile" class="form-control form-control-lg" value="<?=$mobile ?>" placeholder="Mobile"  disabled>        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" value="<?=$country ?>" disabled>    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control form-control-lg" placeholder="Address" value="<?=$address ?>">        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" name="state" value="<?=$state ?>" class="form-control form-control-lg" placeholder="State" value="">        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zip</label>
                                        <input type="text" name="zip" class="form-control form-control-lg" placeholder="Zip" value="<?=$zip ?>">        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control form-control-lg" placeholder="City" value="<?=$city ?>">        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="update_profile" class="btn btn-md w-100 cmn-btn">Update</button>
                </div>
                </form>
            </div>
        </div>
</section>

    

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
          </p></p> Email: <font color="lightblue"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2b585e5b5b44595f6b474e4c4a475f594a4f4e46424542454c05484446">[email&#160;protected]</a></font></p></p>
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
    (function ($) {
        "use strict";
        $('.imgUp').click(function(){
            upload();
        });
        function upload(){
            $(".upload").change(function() {
                readURL(this);
            });
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var preview = $(input).parents('.avatar-upload').find('.imagePreview');
                    $(preview).css('background-image', 'url('+e.target.result +')');
                    $(preview).hide();
                    $(preview).fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('select[name=country]').val('United States');
    })(jQuery);
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