<?php
	$x = $_SERVER['QUERY_STRING'];
	if( $x == '' ){
		header('location:detail.php');
	};
?>

<!DOCTYPE>
<html>

<head>
    <title>Home</title>
    <nav>
        <?php include("assets/partials/nav.php");?>
    </nav>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<body>
    <?php
        $d = file_get_contents('assets/data/data.json');
        $d = json_decode($d, true);
        
        foreach($d as $v => $o) {
            if($o['id']== $x){
                $w = $d[$v];
                
            };
        //print_r($w);
        };
    
    ?>
    <div class="container">
            <h1><?php echo $w['name']?></h1><br>
            <h3><?php echo $w['cohort']?></h3><br>
            <img src="<?php echo $w['biopic']?>" class="img-fluid"><br>
    
       
        <h2>Strengths</h2>
        <ul>
            <?php 
            foreach($w['strengths'] as $a => $b){
                
                echo'<li>'.$b.'</li> ';
            };    
            ?>
        </ul>
        <h2>Credentials</h2>
        <ul>
            <?php 
            foreach($w['credentials'] as $a => $b){
                
                echo'<li>'.$b.'</li> ';
            };
            
            ?>
        </ul>
        <h2>Profiles</h2>

        <a href="<?php echo $w['github']?>">Github</a><br>
        <a href="<?php echo $w['portfolio']?>">Portfolio</a><br>
        <a href="<?php echo $w['linkedin']?>">LinkdIn</a><br>

    </div>

</body>

</html>
