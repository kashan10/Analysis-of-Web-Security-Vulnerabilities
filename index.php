<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
            .container {
            position: relative;
            max-width: 100%; /* Maximum width */
            margin: 0 auto; /* Center it */
            }

            .container .content {
            position: absolute; /* Position the background text */
            bottom: 0; /* At the bottom. Use top:0 to append it to the top */
            background: rgb(0, 0, 0); /* Fallback color */
            background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
            color: #f1f1f1; /* Grey text */
            width: 100%; /* Full width */
            height: 100%;
            }
            a {
                    text-decoration:none;
                }
    </style>
</head>
<body>
        <div class="container">
            <img src="img/home.jpg" style="width:100%;">
                <div class="content">
                    <h1><p style="color:red;font-weight: bold; text-align: center">SQLi-LABS <span style="color:yellow">FSC Project</span> <i></i></p></h1>
                        <a href="sql_connections/setup-db-challenge.php"><p style="color:#c902b6;font-size:30px;font-weight: bold;">Setup/reset Database for labs</p></a></br>
                        <a href="lab1/lab1.php/?id=1"><p style="color:#F535AA;font-size:30px;"> (Basic Injections) </p></a><br>
                        <a href="lab2/lab2.php/?id=1"><p style="color:#008000;font-size:30px;">  (Blind SQL Injections)</p></a><br>
                        <a href="index-3.html"><p style="color:#FF00FF;font-size:30px;">  (Challenges)</p></a>

                </div>
        </div>
        
</body>
</html>