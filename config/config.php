<?php
date_default_timezone_set('Asia/Jakarta');
ob_start();
 session_start();
// session_regenerate_id();

$mysqli = new mysqli('localhost', 'root', '', 'dbkusumaindah'); //sesuaikan dengan konfigurasi database kamu ya
if (mysqli_connect_error()) { 
	die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

function base_url($url = null){
	$base_url = "http://localhost/kusumaindah";
	if($url != null) {
	return $base_url."/".$url;
}else {
	return $base_url;
}
}

?>