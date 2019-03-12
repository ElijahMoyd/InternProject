<?php
$e = $_POST['email'];
$p = $_POST['pw'];
$d = file_get_contents('assets/data/user.json');
$d = json_decode($d, true);
$idx = end(array_keys($d));

switch( $u['type'] ) {
	case 'image/jpeg':
		$x = '.jpg';
		break;
	
};
$t = $u['tmp_name'];
if( $x != '' ){
	$i = 'users/'.count($d).$x;
	move_uploaded_file($t, $i);
};
$a = [
	"email" => $e,
	"pw" => $p,
	"img" => $i
];
$d[$idx] = $a;
//print_r($d);
$d = json_encode($d);
file_put_contents('assets/data/user.json', $d);
header('applogin.php');
?>