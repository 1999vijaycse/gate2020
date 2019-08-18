
<?php
session_start();
include 'dbconnection.php';
if(isset($_POST["feed_msg_submit"])) {

    $feedback_name = $_SESSION['name'];
    $feedback_roll = $_SESSION['roll_no'];
    $feedback_msg = $_POST['feedback_msg'];
    
    
    date_default_timezone_set("Asia/Kolkata");
    $feed_date = date("d/m/y");
    $feed_time = date("h:i a");
    $feed_sql = "INSERT INTO feedback (name,roll,msg,date,time) VALUES ('$feedback_name','$feedback_roll','$feedback_msg','$feed_date','$feed_time')";

        if (mysqli_query($conn, $feed_sql)) {
            echo "Thank you for giving your valuable feedback.";
        } else {
            echo "Try Again : " . $feed_sql . "<br>" . mysqli_error($conn);
        }
    

    unset($_POST);
    mysqli_close($conn);
    
}
?>