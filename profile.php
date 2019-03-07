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
        <script>
        function addData(data) {
 data.forEach(function(row) {
   var str = '<tr>';
   str += '<td>' + row.id + '</td>';
   str += '<td>' + row.name + '</td>';
   str += '<td>' + row.cohort + '</td>';
   str += '<td>' + row.strengths + '</td>';
   str += '<td>' + row.credential + '</td>';
   str += '<td>' + row.portfolio + '</td>';
   str += '<td>' + row.github + '</td>';
   str += '<td>' + row.linkedin + '</td>';
   str += '<td>' + row.biopic + '</td>';
   str += '<td>' + row.resume + '</td>';
   str += '<td>' + row.employ + '</td>';
   str += '</tr>';
   $('#data_tbl').append(str);
 });
        }
        </script>
        <!-- credentials -->
        <ul class="dentials">
            <li></li>
        </ul>
        <!-- employed -->
        <h3></h3>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <?php
		$d = file_get_contents('data.json');
		//$d = json_decode($d, true);
	?>
    <script>
        /* custom script here */
       /* var pf = 
        var id = window.location.hash.substr(1);
        for (i in pf) {
            if (pf[i]['id'] == id) {
                console.log(pf[i]['name']);
                $(".container name").html(pf[i]['name']);
            };

        };
*/
    </script>
</body>

</html>
