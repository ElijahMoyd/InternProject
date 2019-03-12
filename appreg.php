<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>OBT Cohort Database</title>
    <style>
        /*custom page css here*/

    </style>
</head>

<body>
    <?php require_once('assets/partials/nav.php')?>
    <!-- HTML here. -->
    <center>
        <h1>OBT Cohort Database</h1>
    </center>
    <center>
      
    </center>
    
    <div class="tainer">
        <h2>Registration</h2>
        <form action="regprocess.php" method="post" enctype="multipart/form-data">
            <label>Email <br>
                <input type="text" name="email">
            </label>
            <br>
            <label>Password <br>
                <input type="password" name="pw">
            </label>
            <br>
            <br>
            <input type="submit" value="Register">
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        /* custom script here */

    </script>
</body>

</html>
