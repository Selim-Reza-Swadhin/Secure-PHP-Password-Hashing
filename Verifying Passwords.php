<?php
// echo password_hash('password', PASSWORD_BCRYPT, array(
// 	'cost' => 12
// 	));

$stored_password = '$2y$12$.0aGjFM9pEOPoT8f5Bl1wuyGjkr93adiW/Geat8/RX0NW7.GQbhOO';

if(password_verify('password', $stored_password)){
	echo 'You\'re in';
}else{
	echo 'Try again!';
}
?>