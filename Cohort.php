<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#accordion").accordion({
                collapsible: true,
                heightStyle: "content"
            });
        });

    </script>

</head>

<body>
    <?php include("assets/partials/nav.php");?>

    <ul>


    </ul>

    <div id="accordion">
        <?php
            $d = file_get_contents('assets/data/data.json');
            $d = json_decode($d, true);	
            $ca = [];
            foreach($d as $v => $o){
                if(array_search($o['cohort'], $ca )  === false   ){
                    array_push($ca, $o['cohort'] );  
                };
            };
            sort($ca);
            foreach($ca as $i => $val){
                echo '<h3>Cohort '.$val.'</h3>
                <div>
                ';
                foreach($d as $v => $o){
                    if($val == $o['cohort']){
                        echo '

                            <ul>
                                <li><a href="detail.php?'.$o['id'].'">'.$o['name'].'</a></li>
                            </ul>
                       ';
                    };
                };
                echo ' </div>';
            };
        
        
        
        ?>
        <!--
        <h3>Cohort 1</h3>
        <div>
            <ul>

            </ul>
        </div>
        <h3>Cohort 2</h3>
        <div>
           
        </div>
        <h3>Cohort 3</h3>
        <div>
          
            <ul>

            </ul>
        </div>
        <h3>Cohort 4</h3>
        <div>
         
            <p></p>


        </div>
-->
    </div>
</body>

</html>
