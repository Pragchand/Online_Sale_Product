<html>
    <head>
        <title>Registration Form</title>
    </head>
    <style>
        body{
            color: white;
            background: grey;
        }
        form{
            border: 1px solid;
            width: 380px;
            background: skyblue;
        }
        .Register li{
            display: block;
        }
        .Register li a{
            text-decoration: none;
            color: white;
        }
        .Register li a:hover{
            color: blue;
            background: white;
            border-radius: 4px;
        }
    </style>
    <body>
        <center>
             <h1>Registration Form</h1>
                    <form>
                            <div>
                                Name:<input type="text"><br><br>
                            </div>
                                DOB:<input type="text"><br><br>
                            <div>
                                CNIC:<input type="text"><br><br>
                            </div>
                            <div>
                                Address:<textarea type="text"></textarea><br><br>
                            </div>
                            <div>
                                Email:<input type="text"><br><br>
                            </div>
                            <div>
                                Password:<input type="text"><br><br>
                            </div>
                            <div>
                                Conf Password:<input type="text"><br><br>
                            </div>
                        <div class="Register">
                        <li>
                            <a href="Welcome.php">Register</a>
                        </li>
                </div>
        </form>
    </body>
</html>