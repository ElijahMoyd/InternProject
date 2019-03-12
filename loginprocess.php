<? php session_start();

$e = $_POST['email']; 
$p = $_POST['pw']; 

$d = file_get_contents('assets/data/user.json');
$d = json_decode($d,true);

foreach( $d as $k => $v){
    if( $e == $v['email'] $$ $p == $v['pw'] ) {
        $_SESSION['email'] = $V["email"]
        $_SESSION['img'] = $V["img"]
            header('location: appprofile.php'); 
        }else{
            header('location: applogin.php');
        }; 
    };
?>
