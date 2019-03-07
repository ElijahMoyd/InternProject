<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Horror Hackathon</title>
    <style>
        /*custom page css here*/

    </style>
</head>

<body>
    <!-- HTML here. -->
    <?php require('assets/partials/nav.php'); ?>
    <div class="container">
        <img src="">
        <!--cohort-->
        <h3 class="name"></h3>
        <!-- name-->
        <h3></h3>
        <!-- strengths -->
        <ul class="strength">
            <li></li>
        </ul>

        <!- profile -->
        <a href="" class="gh"></a>
        <a href="" class="li"></a>
        <!-- credentials -->
        <ul class="dentials">
            <li></li>
        </ul>
        <!-- employed -->
        <h3></h3>
    </div>

    
    <?php
            $d = file_get_contents('assets/data/data.json');
            $d = json_decode($d, true);
			
        
        
        foreach($d as $v => $o) {
            
            echo '<p>'.$o['name'].'</p>
                 <p>'.$o['cohort'].'</p>
                 <p>'.$o['strengths'].'</p>
                 <p>'.$o['credential'].'</p>
                 <p>'.$o['portfolio'].'</p>
                 <p>'.$o['github'].'</p>
                 <p>'.$o['linkedin'].'</p>
                 <p>'.$o['biopic'].'</p>
                 <p>'.$o['resume'].'</p>
                 <p>'.$o['employ'].'</p>';
                }
    ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
