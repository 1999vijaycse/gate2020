
<?php
include 'dbconnection.php';
if (isset($_POST['login'])) {
    $login_roll_no = $_POST['login_roll_no'];
    $login_pass = $_POST['login_psd'];
    $login_sql = "SELECT * FROM student WHERE roll_no='$login_roll_no' ";
    $login_result = mysqli_query($conn, $login_sql);
    if (mysqli_num_rows($login_result) > 0) {
        $login_row = mysqli_fetch_assoc($login_result);
        if ($login_pass === $login_row['password']) {
            session_start();
            $_SESSION['name']=$login_row['name'];
            $_SESSION['roll_no']=$login_row['roll_no'];
            $_SESSION['reg_no']=$login_row['reg_no'];
            $_SESSION['branch']=$login_row['branch'];
            $_SESSION['role']=$login_row['role'];
            $_SESSION['dob']=$login_row['dob'];
            $_SESSION['email']=$login_row['email'];
            $_SESSION['mobile']=$login_row['mob'];
            header('Location: index.php');
            
        } else {
             echo "Login Failed..."."<br>"."Incorrect Password Enterd";
        }
    } else {
        echo "Login Failed..."."<br>"."Incorrect Roll No Enterd";
    }
    unset($_POST);
    unset($login_result);
    unset($login_row);
    mysqli_close($conn);
}else {
    header('Location: index.php');
}

?>