<?php
// echo phpinfo();
//PHP password hashing API from version 5.5 onwards

echo password_hash('password', PASSWORD_DEFAULT);

echo '<br/>';

echo password_hash('password', PASSWORD_BCRYPT);

echo '<br/>';
echo '<br/>';

//PROVIDING OWN SALT - NOT RECOMMENDED
echo password_hash('password', PASSWORD_DEFAULT, array(
	'salt' => 'abcdefddfskjkdsjfkdfkjdjirjtivkkd'
	));



echo '<br/>';
echo '<br/>';

//PROVIDING COST - THE BIGGER THE VALUE, THE MORE PROCESSING RESOURCES REQUIRED = slower
echo password_hash('password', PASSWORD_DEFAULT, array(
	'salt' => 'abcdefddfskjkdsjfkdfkjdjirjtivkkd',
	'cost' => 14
	));
?>