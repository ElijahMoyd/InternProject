<!DOCTYPE>
<html>

<head>
    <title>Home</title>
    <nav>
    <?php include("assets/partials/nav.php");?>
    </nav>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  
</head>

<body>
  
    <div class="container">
        <h1>Detail</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="https://static1.squarespace.com/static/549dd0cee4b029881efa814b/5b101ad2758d46ee70365c19/5b101b0588251bbe83b3ee2b/1543878073891/dc-headshot-photographer-68.JPG" class="img-fluid">
            </div>
            <div class="col-md-8">
                <p>Name: Jose Rivera</p>
                <p>Cohort: 16</p>
            </div>
        </div>
    
        <h2>Strengths</h2>
        <ul>
            <li>strength</li><br>
            <li>strength</li><br>
            <li>strength</li>
        </ul>
        
        <h2>Credentials</h2>
<form action="/action_page.php">
  <input type="radio" name="Javascript" value="Credential"> Javascript<br>
  <input type="radio" name="Photoshop" value="Credential"> Photoshop<br>
        
        <p>
            <a href="https://www.linkedin.com/" target="_blank">linkedin</a><br>
            <a href="https://github.com/" target="_blank">Github</a><br>
            <a href="https://www.resume.com/" target="_blank">Resume</a><br>
            <a href="https://portfolio.adobe.com/" target="_blank">Portfolio</a>
        </p>
        <form action="/action_page.php">
            <input type="checkbox" name="Employ" value="Yes"> Employed<br>
            <input type="submit" value="Update">
        </form>
        </form>
    </div>
</body>
</html>
