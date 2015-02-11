<?php

 $smbconf =  fopen("smb.conf","a+"); 

	if( $smbconf == false )
		die("sth is wrong\n");

	$teststring = "[another temp]\n";

	$return = fwrite( $smbconf, $teststring  );
	echo $return;
?>
