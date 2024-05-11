<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $hour = $_POST['hour'];
  
    $sql = "UPDATE matpel SET `subject` = '$subject', `hour` = '$hour' WHERE id = '$id'"; //"UPDATE kelas SET kelas='$kelas', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=matpel&s=view');
    } else {
        include "index.php?m=matpel&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}