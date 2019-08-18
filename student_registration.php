<?php

include 'dbconnection.php';
if (isset($_POST['reg_submit'])) {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $reg_no = $_POST['reg_no'];
    $branch = $_POST['branch'];
    $role = $_POST['role'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile_no'];
    $pass = $_POST['psd'];
    date_default_timezone_set("Asia/Kolkata");
    $date = date("d/m/y");
    $time = date("h:i a");
    $check = "SELECT * FROM student";
    $result = mysqli_query($conn, $check);
    $flag = 0;
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            if ($roll_no === $row["roll_no"]) {
                echo "Your roll no : $roll_no is already registered."."<br>";
                $flag++;
            }
            if ($reg_no === $row["reg_no"]) {
                echo "Your reg no : $reg_no is already registered."."<br>";
                $flag++;
            }
            if ($email === $row["email"]) {
                echo "Your email id : $email is already registered."."<br>";
                $flag++;
            }
            if ($mobile === $row["mob"]) {
                echo "Your mobile no : $mobile is already registered."."<br>";
                $flag++;
            }
           // echo $row["name"]. " " . $row["roll_no"]. " " . $row["reg_no"]. " ". $row["branch"]. " " . $row["dob"]. " " . $row["email"]. " ". $row["mob"]. " " . $row["password"]. " " . $row["date"]. " " . $row["time"]."<br>";
        }
    } else {
        $flag = 0;
    }
    if ($flag === 0) {
        $sql = "INSERT INTO student VALUES ('$name','$roll_no','$reg_no','$branch','$role','$dob','$email','$mobile','$pass','$date','$time')";

        if (mysqli_query($conn, $sql)) {
            echo "Hey! You are registered successfully."."<br>"."Please login...."."<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "You are already registered.";
    }
    unset($_POST);
    unset($flag);
    unset($result);
    unset($row);
    mysqli_close($conn);
    
} else {
    echo 'error';
   // header('Location: ../index.php');
}
    
?>