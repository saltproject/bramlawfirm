<?php

$connect = mysqli_connect("localhost", "bramlawf_bramnco","saltproject123", "bramlawf_bramlawfirm");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}
	
?>