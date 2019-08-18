<?php
include 'dbconnection.php';
$check = "SELECT * FROM notice ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $check);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
<div class="row">
    <div class="col">
        <table class="table">
            <tr class="text-center text-white col">
                <td><label><?php echo $row['date'];?></label></td>
                <td><a href="<?php echo $row['notice_path']; ?>" style="text-decoration: none; color: wheat"><?php echo $row['notice_name']; ?></a></td>
            </tr>
        </table>
    </div>
        </div>
    
    <?php
    }
}
unset($result);
unset($row);
mysqli_close($conn);
?>

