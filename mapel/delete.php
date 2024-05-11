<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "DELETE from matpel WHERE id = '$id'";
$result = mysqli_query($con, $sql) ;
if ($result) {
     header('location: ?m=matpel&s=view');
} else{
    var_dump($result);
    include "index.php";
    echo"<script>";
    echo"alert('Data Gagal Dihapus')";
    echo"</script>";
}