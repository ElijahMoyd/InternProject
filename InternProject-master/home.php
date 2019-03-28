<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width,initial scale=1"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>


        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>

<body>
    <?php include("assets/partials/nav.php");?>
    <h1>Home</h1>
    <div class="tainer">
        <div class="topnav">
        </div>



        <table>
            <tr>
                <th>Name</th>
                <th>Cohort</th>
            </tr>
                  
                        
 
           echo '<tr>
					<td><a href="">'.$o['name'].'</a></td>
					<td>'.$o['cohort'].'</td>
                 </tr>';
					}
                    
				?>
        </table>
    </div>
</body>

</html>
