<html>
    <head>
        <title>Mini Project</title>
        <style>
        body{
                background: skyblue;
            }
        .navbar{
            padding: 0%;
            margin: 0%;
            /* box-sizing: border-box; */
            margin-top: -8px;
        }
        .navbar ol{
            list-style: none;
            width: 102%;
            height: 10vh;
            margin-left: -48px;
        }
        .navbar ol li{
            width: 14.2%;
           height: 15vh;
            text-align: center;
            background: black;
            float: left;
        }
        .navbar ol li a{
            text-decoration:none;
            line-height: 76px;
            color: white;
            font-size: 20px;
        }
        .navbar ol li a:hover{
            background: white;
            padding: 6px;
            color: blue;
            border-radius: 6px;
        }
        input{
            width: 65%;
            height: 25%;
            margin-left: -30%;
        }
        .navbar ol li ol{
            display: none;
        }
        .navbar ol li ol li{
            background: white;
            color: red;
            float: none;
            line-height: -76px;
        }
        .navbar ol li ol li a{
            line-height: -76px;
            /* float: left; */
        }
        .navbar ol li ol li a{
            color: blue;
            margin-left: 80%;
        }
        .navbar ol li:hover ol{
            display: block;
            /* width: 250%; */
            /* height: 2vh; */
            /* line-height: 6px; */
        }
        #logo{
            width: 35%;
            height: 12vh;
            border-radius: 50%;
            /* margin-left: -140px; */
            margin: 8px;
            /* position: absolute; */
        }
        .center1{
            text-align: center;
            padding-top: 20px;
            color: white;
        }
        .A img{
            width: 31.333333%;
            height: 60%;
            border-radius: 20px;
            float: left;
            margin: 1%;
        }
        .more ol{
            list-style: none;
        }
        .more ol li{
            /* background: black; */
            width: 33.33%;
            height: 10vh;
            float: left;
            text-align: center;
        }
        .more ol li a{
            text-decoration: none;
            line height: 56px;
            color: white;
            font-size: 20px;
            display: flex;
        }
        .more ol li a:hover{
            background: white;
            color: blue;
            border-radius: 6px;
            padding: 6px;
        }
    </style>
    </head>
    <body>
                                                            <!-- Navbar  -->
    <nav>
            <div class="navbar">
                <ol>
                    <li><img src="Logo image product.png" alt="Logo" id="logo"></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="Product1.php">Product</a></li>
                    <li><a href="#">Catagory</a>
                        <ol>
                            <li><a href="Laptop Image.php">Laptops</a></li>
                            <li><a href="Mobile Image.php">Mobiles</a></li>
                            <li><a href="Headphone Image.php">Headphone</a></li>  
                        </ol>
                    </li>
                    <li><a href="Contact Us.php">Contact us</a></li>
                    <li><input type="search" name="" id=""><a href="Contact Us.php">Search</a></li>
                </ol>
            </div>
        </nav>
                                        <!-- Edit center headings -->
        <div class="center1">
            <h1>Choose your choice</h1>
            <h1>Supper Product Best Quality</h1>
        </div>
        <div class="A">    
            <img src="Front.jpg" alt="Laptops Images">
            <img src="Front1.jpg" alt="Mobiles Images">    
            <img src="Front2.jpg" alt="Headphone Images">    
        </div>
        <div class="more">
            <ol>
                <li><a href="Laptop Image.php">Click here for more products</a></li>
                <li><a href="Mobile Image.php">Click here for more product</a></li>
                <li><a href="Headphone Image.php">Click here for more product</a></li>
            </ol>
        </div>
    </body>
</html>