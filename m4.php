<?php 
include('config/config.php');
require 'vendor/autoload.php';
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


$id = @$_GET['id'];
$sqli = mysqli_query($mysqli, "DELETE FROM tb_travel2 WHERE idtravel = '$id'")or die(mysql_error());
echo "<script>alert('Data berhasil di hapus!');window.location='crudtravel.php';</script>";


?>