<?php


$pic = $_FILES['biopic'];
$name = $_POST['name'];
$cohort = $_POST['cohort'];
$strengths = $_POST['str'];
$cred = $_POST['credential']; 
$portfolio = $_POST['portfolio'];
$gh = $_POST['github'];
$linked = $_POST['linkedin'];
$resume = $_FILES['resume'];
$employed = $_POST['employ'];

$d = file_get_contents('assets/data/data.json');
$d = json_decode($d, true);

//print_r($d);

$id = count($d);
++$id;
//print_r($id);
mkdir('users/'.$id);

$postmp = $_FILES['biopic']['tmp_name'];
$posname = $_FILES['biopic']['name'];

$img = 'users/'.$id.'/'.$posname;
move_uploaded_file($postmp,$img );

$postres = $_FILES['resume']['tmp_name'];
$posresname = $_FILES['resume']['name'];
   
$ig = 'users/'.$id.'/'.$posresname;

move_uploaded_file($postres,$ig );

$a = array(
    
"id" => $id,
"name" => $name,
"cohort" => $cohort,
"strengths" => $strengths,
"credential" => $cred,
"portfolio" => $portfolio,
"github" => $gh,
"linkedin" => $linked,    
"biopic" => $img,    
"resume" => $ig,    
"employ" =>    $employed);
//print_r($a);
array_push ($d, $a);
$d = json_encode($d);
file_put_contents('assets/data/data.json', $d);

header('location: home.php');

?>