<html>
    <head>
        <title>Mini Project</title>
    <style>
        body{
                background: grey;
            }
        .navbar{
            padding: 0%;
            margin: 0%;
            /* box-sizing: border-box; */
            margin-top: -8px;
        }
        .navbar ol{
            list-style: none;
            width: 105%;
            height: 10vh;
            margin-left: -46px;
        }
        .navbar ol li{
            width: 20%;
            height: 15vh;
            text-align: center;
            background: skyblue;
            float: left;
        }
        .navbar ol li a{
            text-decoration:none;
            line-height: 76px;
            color: white;
        }
        .navbar ol li a:hover{
            background: white;
            padding: 6px;
            color: blue;
            border-radius: 6px;
        }
        .navbar ol li ol{
            display: none;
        }
        .navbar ol li ol li{
            background: grey;
            color: red;
            float: none;
        }
        .navbar ol li ol li a{
            color: red;
        }
        .navbar ol li ol li a span{
            margin-left: 160px;
            /* margin-top: -40px; */
            display: inline-block;
            /* line-height: -140px; */
        }
        .navbar ol li:hover ol{
            display: block;
        }
        #logo{
            width: 35%;
            height: 15vh;
            border-radius: 50%;
            margin-left: -160px;
            /* position: absolute; */
        }
        .center{
            padding-left: 420px;
            padding-top: 50px;
            color: white;
        }
        .center li{
            display: block;
            padding-left: 100px;
        }
        .center li a{
            text-decoration: none;
            color: white;
        }
        .center li a:hover{
            color: blue;
            background: white;
            border-radius: 4px;
        }
        .center1{
            text-align: center;
            padding-top: 20px;
            color: white;
        }
        .A img{
            width: 412px;
            height: 350px;
            border-radius: 20px;
        }
    </style>
    </head>
                                            <!-- Start Here Html Body  -->
    <body>
        <nav>
            <div class="navbar">
                <ol>
                    <li><a href="logo image"><img src="Logo image product.png" alt="Logo" id="logo"></a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Product</a>
                <ol>
                    <li><a href="#"><span>Login First.....!</span></a></li>
                </ol>
                    </li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Contact us</a></li>
                </ol>
            </div>
        </nav>
        <form>
            <table>
                <div class="Center">
                    Email:<input type="email"><br><br>
                    Password:<input type="password"><br><br>
                            <li>
                                 <a href="Welcome1.php">SignIn</a><br>
                            </li>
                            <li>
                                 <a href="Registration Form.php">SignUp</a>
                            </li>
                </div>
            </table>
        </form>
        <!-- center  -->
        <div class="center1">
            <h1>Choose your choice</h1>
            <h1>Supper Product Best Quality</h1>
        </div>
        <div class="A">
            <tr>
                <td>
                    <img src="Front.jpg">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="Front2.jpg">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="Front1.jpg">
                </td>
            </tr>
        </dive>
    </body>
</html>