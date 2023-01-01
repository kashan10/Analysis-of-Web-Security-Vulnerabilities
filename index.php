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

            /* The Modal (background) */
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content/Box */
            .modal-content {
            background-color: burlywood;
            color: red;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button */
            .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            }

            .close:hover,
            .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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
                    margin-left: 80px;
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
                        <!-- Trigger/Open The Modal -->
                        <button id="myBtn1" class="btn" >Description</button>

                            <!-- The Modal -->
                            <div id="myModal1" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <pre >
                                    $(window).on('hashchange', function(){
                                        var post = $('div.card h5:contains(' + decodeURIComponent(window.location.hash.slice(1)) + ')');
                                        if (post) post.get(0).scrollIntoView();
                                    });
                                    </pre>
                                    <p style="color: #c902b6;">it doesn't sanitize well, what happens in roughly the code is the following:</p> 
                                            <pre >
                                            
                                            $('section.blog-list h2:contains(' + Hello+ ')');
                                            </pre>
                                    <p style="color: #c902b6;">Therefore, if we put a payload like the following:</p> 
                                            <pre>
                                            &lt;img src=/ onerror=print()&gt;
                                            </pre>   
                                    <p style="color: #c902b6;">More or less, something like this would happen:</p> 
                                            <pre>
                                            $('section.blog-list h2:contains(' + &lt;img src=/ onerror=print()&gt; + ')');
                                            </pre>
                                    
                                </div>

                            </div>
                        <a href="lab2/lab2.php/?id=1"><p style="color:#008000;font-size:30px;">  (Blind SQL Injections)</p></a><br>
                        <!-- Trigger/Open The Modal -->
                        <button id="myBtn2" class="btn" >Description</button>

                            <!-- The Modal -->
                            <div id="myModal2" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <pre >
                                    $(window).on('hashchange', function(){
                                        var post = $('div.card h5:contains(' + decodeURIComponent(window.location.hash.slice(1)) + ')');
                                        if (post) post.get(0).scrollIntoView();
                                    });
                                    </pre>
                                    <p style="color: #c902b6;">it doesn't sanitize well, what happens in roughly the code is the following:</p> 
                                            <pre >
                                            
                                            $('section.blog-list h2:contains(' + Hello+ ')');
                                            </pre>
                                    <p style="color: #c902b6;">Therefore, if we put a payload like the following:</p> 
                                            <pre>
                                            &lt;img src=/ onerror=print()&gt;
                                            </pre>   
                                    <p style="color: #c902b6;">More or less, something like this would happen:</p> 
                                            <pre>
                                            $('section.blog-list h2:contains(' + &lt;img src=/ onerror=print()&gt; + ')');
                                            </pre>
                                    
                                </div>

                            </div>
                        <a href="lab3/index.php"><p style="color:#FF00FF;font-size:30px;">  (DOM XSS in jQuery selector)</p></a>
                            <!-- Trigger/Open The Modal -->
                            <button id="myBtn3" class="btn" >Description</button>

                            <!-- The Modal -->
                            <div id="myModal3" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <pre >
                                    $(window).on('hashchange', function(){
                                        var post = $('div.card h5:contains(' + decodeURIComponent(window.location.hash.slice(1)) + ')');
                                        if (post) post.get(0).scrollIntoView();
                                    });
                                    </pre>
                                    <p style="color: #c902b6;">it doesn't sanitize well, what happens in roughly the code is the following:</p> 
                                            <pre >
                                            
                                            $('section.blog-list h2:contains(' + Hello+ ')');
                                            </pre>
                                    <p style="color: #c902b6;">Therefore, if we put a payload like the following:</p> 
                                            <pre>
                                            &lt;img src=/ onerror=print()&gt;
                                            </pre>   
                                    <p style="color: #c902b6;">More or less, something like this would happen:</p> 
                                            <pre>
                                            $('section.blog-list h2:contains(' + &lt;img src=/ onerror=print()&gt; + ')');
                                            </pre>
                                    
                                </div>

                            </div>
                            <a href="CSRF/index.php"><p style="color:#FF00FF;font-size:30px;">  (Cross Site Request Forgery (CSRF))</p></a>
                            <button id="ntn" class="btn" onclick="window.location.href='CSRF/attackers server/funny.html'" >Exploit</button>
                            <!-- Trigger/Open The Modal -->
                            <button id="myBtn4" class="btn" >Description</button>

                            <!-- The Modal -->
                            <div id="myModal4" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <pre >
                                    $(window).on('hashchange', function(){
                                        var post = $('div.card h5:contains(' + decodeURIComponent(window.location.hash.slice(1)) + ')');
                                        if (post) post.get(0).scrollIntoView();
                                    });
                                    </pre>
                                    <p style="color: #c902b6;">it doesn't sanitize well, what happens in roughly the code is the following:</p> 
                                            <pre >
                                            
                                            $('section.blog-list h2:contains(' + Hello+ ')');
                                            </pre>
                                    <p style="color: #c902b6;">Therefore, if we put a payload like the following:</p> 
                                            <pre>
                                            &lt;img src=/ onerror=print()&gt;
                                            </pre>   
                                    <p style="color: #c902b6;">More or less, something like this would happen:</p> 
                                            <pre>
                                            $('section.blog-list h2:contains(' + &lt;img src=/ onerror=print()&gt; + ')');
                                            </pre>
                                    
                                </div>

                            </div>


                </div>
        </div>
        <script>
            document.getElementById("myBtn1").addEventListener("click", modelShow1);
            document.getElementById("myBtn2").addEventListener("click", modelShow2);
            document.getElementById("myBtn3").addEventListener("click", modelShow3);
            document.getElementById("myBtn4").addEventListener("click", modelShow4);
            function modelShow1() {
                // Get the modal
                var modal = document.getElementById("myModal1");
                // When the user clicks on the button, open the modal
                modal.style.display = "block";
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                modal.style.display = "none";
                }   
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            }

            function modelShow2() {
             // Get the modal
                var modal = document.getElementById("myModal2");
                // When the user clicks on the button, open the modal
                modal.style.display = "block";
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[1];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                modal.style.display = "none";
                }   
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            }
            function modelShow3() {
             // Get the modal
                var modal = document.getElementById("myModal3");
                // When the user clicks on the button, open the modal
                modal.style.display = "block";
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[2];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                modal.style.display = "none";
                }   
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            }
            function modelShow4() {
                
             // Get the modal
                var modal = document.getElementById("myModal4");
                // When the user clicks on the button, open the modal
                modal.style.display = "block";
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[2];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                modal.style.display = "none";
                }   
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            }

           
            
        </script>
</body>
</html>