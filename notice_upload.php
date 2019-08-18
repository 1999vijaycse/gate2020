


<?php
session_start();
$target_dir = "notice/";  
$target_path = $target_dir.basename( $_FILES['fileToUpload']['name']);   
  if(isset($_POST["upload_now"])) {
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!";  
    include 'dbconnection.php';
    $notice_name = $_POST['notice_discription'].$_FILES["fileToUpload"]["name"];
    $notice_size = $_FILES["fileToUpload"]["size"];
    $notice_path = $target_path;
    $uploader_name = $_SESSION['name'];
    $mobile = $_SESSION['mobile'];
    $email = $_SESSION['email'];
    $branch = $_SESSION['branch'];
    
    date_default_timezone_set("Asia/Kolkata");
    $date = date("d/m/y");
    $time = date("h:i a");
    $sql = "INSERT INTO notice (notice_name,notice_size,notice_path,uploader_name,mobile,email,branch,date,time)
            VALUES ('$notice_name','$notice_size','$notice_path','$uploader_name','$mobile','$email','$branch','$date','$time')";

        if (mysqli_query($conn, $sql)) {
            echo "Hey! Data inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        unset($_POST);
        unset($_FILES);
    mysqli_close($conn);
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}
  } else {
      echo "Sorry, Error, please try again!";
}
/*$target_dir = "../notice/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

if(isset($_POST["upload_now"])) {
    
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/
// Check file size
/*if ($_FILES["fileToUpload"]["size"] > 1048576) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    
    include 'dbconnection.php';
    $notice_name = $_FILES["fileToUpload"]["name"];
    $notice_size = $_FILES["fileToUpload"]["size"];
    $notice_path = $target_file;
    $uploader_name = $_SESSION['name'];
    $mobile = $_SESSION['mobile'];
    $email = $_SESSION['email'];
    $branch = $_SESSION['branch'];
    
    date_default_timezone_set("Asia/Kolkata");
    $date = date("d/m/y");
    $time = date("h:i a");
    $sql = "INSERT INTO notice (notice_name,notice_size,notice_path,uploader_name,mobile,email,branch,date,time)
            VALUES ('$notice_name','$notice_size','$notice_path','$uploader_name','$mobile','$email','$branch','$date','$time')";

        if (mysqli_query($conn, $sql)) {
            echo "Hey! Data inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        unset($_POST);
        unset($_FILES);
    mysqli_close($conn);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}*/
?>

