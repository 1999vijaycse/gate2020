<?php

include 'dbconnection.php';
if (isset($_POST['con_msg_submit'])) {
    $contact_name = $_POST['contact_name'];
    $contact_roll_no = $_POST['contact_roll_no'];
    $con_whatsApp_no = $_POST['con_whatsApp_no'];
    $con_msg = $_POST['con_msg'];
    date_default_timezone_set("Asia/Kolkata");
    $con_date = date("d/m/y");
    $con_time = date("h:i a");
    $con_sql = "INSERT INTO contact (name,roll,whatsapp,msg,time,date) VALUES ('$contact_name','$contact_roll_no','$con_whatsApp_no','$con_msg','$con_time','$con_date')";

        if (mysqli_query($conn, $con_sql)) {
            echo "Hey! You have sent message successfully.";
        } else {
            echo "Try Again : " . $con_sql . "<br>" . mysqli_error($conn);
        }
    

    unset($_POST);
    mysqli_close($conn);
    
}
    
?>