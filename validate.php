<?php
    $username = $_POST['Abhi_user'];
    $firstname = $_POST['Abhi_fname'];
    $lastname = $_POST['Abhi_lname'];
    $email = $_POST['Abhi_email'];
    $gender = $_POST['Abhi_gender'];
    $extnum = $_POST['Abhi_extension_numb'];
    $phno = $_POST['Abhi_phno'];
    if(empty($username) || empty($firstname) || empty($lastname) || empty($email) || empty($gender) || empty($extnum) || empty($extnum) ){
        echo "PLEASE ENTER ALL FIELDS";
    }
    else{
        $user_pattern="/^[a-zA-Z0-9_.]/";
        $fname_pattern="/^[a-zA-Z]{1,50}$/";
        $lname_pattern="/^[a-zA-Z]{1,50}$/";
        $email_pattern="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        $gender_pattern="/^[m|f]$/";
        $extnum_pattern="/^[0-9+]{2,4}$/";
        $phno_pattern="/^[0-9]{7,10}$/";
        if(preg_match($user_pattern,$username) && preg_match($fname_pattern,$firstname) && preg_match($lname_pattern,$lastname) && preg_match($email_pattern, $email) && preg_match($phno_pattern, $phno) && preg_match($extnum_pattern, $extnum)){
            require 'insert.php';
        }
        else{
            echo "Error please check the format of data you've provided";
        }
    }
?>