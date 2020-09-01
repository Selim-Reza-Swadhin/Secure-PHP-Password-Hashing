<?php
$password_hash = password_hash('rasmuslerdorf', PASSWORD_DEFAULT);
echo 'Password Hash Function Value is = '.$password_hash;
echo '<br/>';
echo 'Password Hash Function Value Length is = '.strlen($password_hash);
echo '<hr/>';

$options = [
    'cost' => 12
];
$password_hash = password_hash('rasmuslerdorf', PASSWORD_BCRYPT, $options);
echo 'Password Hash Function Value is = '.$password_hash;
echo '<br/>';
echo 'Password Hash Function Value Length is = '.strlen($password_hash);
echo '<hr/>';

$timeTarget = 0.05;//50 milliseconds
$cost = 8;
do{
    $cost++;
    $start = microtime(true);
    password_hash('test', PASSWORD_BCRYPT, ['cost' => $cost]);
    $end = microtime(true);
}while(($end - $start) < $timeTarget);
echo 'Appropriate Cost Found : '.$cost;
echo '<br/>';
echo 'Password Hash Function Value Length is = '.strlen($cost);
echo '<hr/>';

$password_argon2 = password_hash('rasmuslerdorf', PASSWORD_ARGON2I);
echo 'Password Argon2 hash Function Value is = '.$password_argon2;
echo '<br/>';
echo 'Password Hash Function Value Length is = '.strlen($password_argon2);
echo '<hr/>';


$password_verify = password_verify('rasmuslerdorf', $password_hash);
echo 'Password Verify Function Value is = '.$password_verify;
echo '<br/>';
echo 'Password Verify Function Value Length is = '.strlen($password_verify);
?>
