<?php

session_start();
$msg = array();


$con = mysqli_connect('localhost', 'root', 'root', 'legaltrading');



    //if user click login button
    if(isset($_POST['login'])){
        
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_username = "SELECT * FROM usertable WHERE username='$username'";
        $res = mysqli_query($con, $check_username);
        if(mysqli_num_rows($res) == 1){

            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
           
            if(password_verify($password, $fetch_pass)){

                $_SESSION['username'] = $username;
                header('location: dashboard.php');

            }else{
                $msg['email'] = "Incorrect email or password!";
                header('location: login.php');
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
            header('location: login.php');
        }
    }
    


//if user signup button
if(isset($_POST['signup_one'])){



    
    
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password_confirmation = mysqli_real_escape_string($con, $_POST['password_confirmation']);
    // $phone = mysqli_real_escape_string($con, $_POST['phone']);
    // $country = mysqli_real_escape_string($con, $_POST['country']);
    // $date_of_birth = mysqli_real_escape_string($con, $_POST['date_birth']);
    // $withdrawal_password = mysqli_real_escape_string($con, $_POST['withdrawal_password']);
    // $withdrawal_pin = mysqli_real_escape_string($con, $_POST['withdrawal_pin']); 
    // $package = mysqli_real_escape_string($con, $_POST['package']);
    // $user_wallet_id = mysqli_real_escape_string($con, $_POST['user_wallet_id']);
    // $referal_id = mysqli_real_escape_string($con, $_POST['referal_id']);
    // $date = date("F d, Y h:i:s A");

    // if(!empty($referal_id)){
        
    //     $referal_id_check = "SELECT * FROM usertable WHERE own_ref='$referal_id'";
    //     $res = mysqli_query($con, $referal_id_check);
    //     if(mysqli_num_rows($res) < 1){
    //         $errors['referal'] = "Invalid referal ID: " . $referal_id;
            
    //     }
    
    //     $random = rand(0,1);
        
    //     if($random == 0){
    //         $placing = "left";
    //     }elseif($random == 1){
    //         $placing = "right";
    //     }
    // }else{
    //     $placing = '';
    //     $referal_id = '';
    // }

    if($password !== $password_confirmation){
        $msg['password'] = "Confirm password not matched!";
    }

    $email_check = "SELECT * FROM usertable WHERE email='$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        header('location: login.php');
    }

 
 

        // $own_ref = mysqli_real_escape_string($con, $_POST['username'])."".rand(103, 943);
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        // $code = rand(999999, 111111);
        
        // $status = "notverified";


        $insert_data = "INSERT INTO `usertable` (`id`, `firstname`, `lastname`, `country`, `mobile`, `email`, `username`, `password`)
        VALUES (NULL, '$firstname', '$lastname', '$country', '$mobile', '$email', '$username', '$encpass')";
        $data_check = mysqli_query($con, $insert_data);

        
        $insert_profile_data = "INSERT INTO `profile` (`id`, `first_name`, `last_name`, `username`, `email`, `mobile`, `country`, `address`, `state`, `zip`, `city`) VALUES (NULL, '$firstname', '$lastname', '$username', '$email', '$mobile', '', '', '', '', '')";
        $data_profile_check = mysqli_query($con, $insert_profile_data);

        // $daily_profit = "INSERT INTO `daily_profit` (`id`, `email`, `username`, `package`, `percentage`, `amount_invested`, `roi`, `date`) VALUES (NULL, '$email', '$username', '', '', '', 0, '$date')";
        // $daily_profit_query = mysqli_query($con, $daily_profit);

        header('location: dashboard.php');



}
// code block ends here


//if user signup button
if(isset($_POST['signup_two'])){



    
    
    $deposit_wallet_balance = mysqli_real_escape_string($con, $_POST['deposit_wallet_balance']);
    $Interest_wallet_balance = mysqli_real_escape_string($con, $_POST['Interest_wallet_balance']);
    $total_invest = mysqli_real_escape_string($con, $_POST['total_invest']);
    $total_deposit = mysqli_real_escape_string($con, $_POST['total_deposit']);
    $total_withdraw = mysqli_real_escape_string($con, $_POST['total_withdraw']);
    $referral_earnings = mysqli_real_escape_string($con, $_POST['referral_earnings']);
    $date = date("F d, Y h:i:s A");
    $transaction_id = mysqli_real_escape_string($con, $_POST['transaction_id']);

    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    $wallet = mysqli_real_escape_string($con, $_POST['wallet']);
    $details = mysqli_real_escape_string($con, $_POST['details']);
    $post_balance = mysqli_real_escape_string($con, $_POST['post_balance']); 
    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);

    // $phone = mysqli_real_escape_string($con, $_POST['phone']);
    // $country = mysqli_real_escape_string($con, $_POST['country']);
    // $date_of_birth = mysqli_real_escape_string($con, $_POST['date_birth']);
    // $withdrawal_password = mysqli_real_escape_string($con, $_POST['withdrawal_password']);
    // $withdrawal_pin = mysqli_real_escape_string($con, $_POST['withdrawal_pin']); 
    // $package = mysqli_real_escape_string($con, $_POST['package']);
    // $user_wallet_id = mysqli_real_escape_string($con, $_POST['user_wallet_id']);
    // $referal_id = mysqli_real_escape_string($con, $_POST['referal_id']);
    // $date = date("F d, Y h:i:s A");

    // if(!empty($referal_id)){
        
    //     $referal_id_check = "SELECT * FROM usertable WHERE own_ref='$referal_id'";
    //     $res = mysqli_query($con, $referal_id_check);
    //     if(mysqli_num_rows($res) < 1){
    //         $errors['referal'] = "Invalid referal ID: " . $referal_id;
            
    //     }
    
    //     $random = rand(0,1);
        
    //     if($random == 0){
    //         $placing = "left";
    //     }elseif($random == 1){
    //         $placing = "right";
    //     }
    // }else{
    //     $placing = '';
    //     $referal_id = '';
    // }

  

    $user_name_check = "SELECT * FROM earning WHERE user_name='$user_name'";
    $res = mysqli_query($con, $user_name_check);
    if(mysqli_num_rows($res) > 0){
        $update_earning = "UPDATE `earning` SET `deposit_wallet_balance` = '$deposit_wallet_balance', `Interest_wallet_balance`='$Interest_wallet_balance', `total_invest`='$total_invest', `total_deposit`='$total_deposit', `total_withdraw`='$total_withdraw', `referral_earnings`='$referral_earnings', `date`='$date', `transaction_id`='$transaction_id', `amount`='$amount' , `wallet`='$wallet', `details`='$details', `post_balance`='$post_balance', `user_name`='$user_name' WHERE `user_name` = '$user_name'";
        $update_earning_check = mysqli_query($con, $update_earning);
        $msg['update_earning'] = "Earning updated successfully";  
    } elseif(mysqli_num_rows($res) < 1){


     
        
        $insert_data = "INSERT INTO `earning` (`id`, `deposit_wallet_balance`, `Interest_wallet_balance`, `total_invest`, `total_deposit`, `total_withdraw`, `referral_earnings`, `date`, `transaction_id`, `amount`, `wallet`, `details`, `post_balance`, `user_name`)
        VALUES (NULL, '$deposit_wallet_balance', '$Interest_wallet_balance', '$total_invest', '$total_deposit', '$total_withdraw', '$referral_earnings', '$date', '$transaction_id', '$amount', '$wallet', '$details', '$post_balance', '$user_name')";
        $data_check = mysqli_query($con, $insert_data);

        // $daily_profit = "INSERT INTO `daily_profit` (`id`, `email`, `username`, `package`, `percentage`, `amount_invested`, `roi`, `date`) VALUES (NULL, '$email', '$username', '', '', '', 0, '$date')";
        // $daily_profit_query = mysqli_query($con, $daily_profit);

        header('location: earning.php');
        $msg['update_earning'] = "Earning created successfully";  


    }

}
// code block ends here


?>
