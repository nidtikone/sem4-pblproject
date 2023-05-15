<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streamline</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">

</head>
<style>
    body {
        margin: 0px;
        padding: 0px;
        background: url("study.jpg");
        background-size: cover;
        color: white;
    }

    header {
        height: 100px;
        border: 3px solid black;
        background-color: rgb(77, 50, 50);
        display: block;
    }

    .htop {
        font-family: 'Roboto Slab', serif;
        font-size: 40px;
        display: inline-block;
        width: 50px;
        margin-left: 40%;
    }

    .image {
        position: fixed;
        width: 96px;
        top: 1%;
        left: 5px;
    }

    .navbar li a {
        text-decoration: none;
        text-decoration: dashed;
        color: white;
        padding: 34px 23px;
    }

    .navbar li a:hover {
        /* text-decoration: underline; */
        color: brown;
    }

    .navbar {
        display: inline-block;
        width: 1000px;
    }

    .navbar li {
        display: inline-block;
        margin: 5px;
        font-size: 23px;
    }

    .left {
        display: inline-block;
        position: fixed;
        top: 20px;
        text-align: center;
    }

    .right {
        position: absolute;
        top: 31px;
        right: 10px;
    }

    .center {
        display: block;
        width: 384px;
        margin: -11px 60px;
    }

    .bt {
        margin: 43px 9px;
        font-size: 8px;
        color: white;
        border: 1px solid brown;
        border-radius: 6px;
        background-color: rgb(170, 138, 138);
        padding: 4px 4px;
        font-size: 13px;
        cursor: pointer;

    }

    .bt a {
        color: white;
        text-decoration: none;
    }

    .main p{
        /* border: 2px solid black; */
        font-size: 25px;
        width: 1000px;
        margin:50px auto;
        /* background-color: rgb(189, 166, 138); */
    }

    .search{
        margin-left: 40%;
        margin-top: 10px;
    }
</style>

<body>
    <header class="header">
        <div class="htop">
            STREAMLINE
        </div>
        <div class="center">
            <ul class="navbar">
                <li><a href="Landing Page.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="left">
            <img class="image" src="LOGO2.png">
        </div>
        <div class="right">
            <button class="bt"><a href="login.html">LOGIN</a></button>
            <button class="bt"><a href="register.html">REGISTER</a></button>
        </div>
    </header>

    <!-- Search Bar -->
    <div class="search">    
        <form action="ser.php" method="post">
            <input type="text" name="str" size=40 placeholder="Which exam you want to search..."/>
            <input type="submit" name="submit" value="Submit"/>
        </form>
    </div>


    <div class="main">
        <p>Choosing the right career path is as difficult as climbing a steep mountain. Especially in today’s times when the choices are endless, selecting from the best career options becomes a huge hassle. Today, with the advanced use of technology and growing industrial and educational sectors, the demand for skills has no limits. You have gallons of things to do.

            Teaching, medicine, mechanics, interior designing, web development, entrepreneurship, hospitality, and journalism are some of the good career options to choose.
            
            If you’re struggling to decide which field to pursue, this article is here to help. We’ll explore various strategies for identifying the best career opportunities in India that leverage your unique skill set. By pursuing these job options in 2023, you can set yourself up for a more prosperous future, with greater financial stability and overall well-being.</p>
    </div>
    <hr>
</body>

</html>