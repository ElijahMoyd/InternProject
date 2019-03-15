<!DOCTYPE>
<html>

<head>
    <title>Create/Update</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>

    <?php require("assets/partials/nav.php");?>

    <div class="tainer">
        <h1>Create and Update</h1>
        <form action="process.php" enctype="multipart/form-data" method="post">
            <label>Image<br>
                <input type="file" id="myFile" name="biopic">
            </label>
            <br>
            <label> Name:<br>
                <input type="text" name="name" required>
            </label>
            <br>
            <label>Cohort:<br>
                <input type="text" name="cohort" required>
            </label>
            <br>
            <label> List Strengths<br>
                <input type="text" name="str[]">
                <br>
            </label>
            <br>
            <span id="response"></span>
            <input type="button" onclick="addInput()" value="addmore" />

            <script>
                var countBox = 1;

                function addInput() {
                    document.getElementById('response').innerHTML += '<br/><input type="text" id="' + '" value="' + '" " + name="str[]" /><br/>';
                    countBox += 1;
                }

            </script>
            <br><br>
            <br><br>

            <h4>Credentials</h4>
            <label>
                <input type="checkbox" name="credential[]" value="Photoshop"> Photoshop
            </label>
            <br>
            <label>
                <input type="checkbox" name="credential[]" value="Javascript"> JavaScript
            </label>
            <br>            
            <label>Portfolio<br>
                <input type="text" name="portfolio" value="link">
            </label>
            <br>
            <label>Github<br>
                <input type="text" name="github" value="link">
            </label>
            <br>
            <label>Linkedin<br>
                <input type="text" name="linkedin" value="link">
            </label>
            <br>
            <label>Resume<br>
                <input type="file" name="resume">
            </label>
            <br>

            <h4>Employed</h4>
            <label>Yes <br>
                <input type="radio" name="employ" value="true">
            </label>
            <br>
            <input type="submit" name="sub" value="submit">


        </form>

    </div>
</body>

</html>
