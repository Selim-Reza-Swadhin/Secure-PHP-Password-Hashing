<?php
$options = array('cost' => 12);

$stored_password = '5f4dcc3b5aa765d61d8327deb882cf99';
$supplied_password = 'password';

if(password_needs_rehash($stored_password, PASSWORD_BCRYPT, $options) && md5($supplied_password) === $stored_password){
	//store new password
	$stored_password = password_hash($supplied_password, PASSWORD_BCRYPT, $options);

	//...then sign the user in
	echo 'You are in, and with a changed password hash.';
}else{
	if(password_verify($supplied_password, $stored_password)){
		//then sign the user in
		echo 'You\'re in';
	}else{
		echo 'Try again!';
	}
}
?>