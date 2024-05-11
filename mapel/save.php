<?php
if (isset($_POST['simpan'])) {
    include_once('config.php');
    $subject = $_POST['subject'];
    $hour = $_POST['hour'];
    
    $sql = "INSERT INTO matpel SET subject='$subject', hour='$hour'";
    $result = mysqli_query($con, $sql) ;
    if ($result) {
        header('location: ?m=matpel&s=view');
    } else{
       var_dump($result);
       include "index.php";
       echo"<script>";
       echo"alert('Data Gagal Disimpan')";
       echo"</script>";
    }
}