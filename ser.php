<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
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

    .left img {
        width: 96px;
        position: static;
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
        position: absolute;
        width: 96px;
        top: 1%;
        left: 5px;
    }

    .center {
        display: block;
        width: 384px;
        margin: -11px 60px;
    }

    h2 , h4 {
        display: block;
        font-size: 1.5em;
        margin-top: 1em;
        margin-bottom: 1em;
        margin-left: 2em;
        margin-right: 2em;
        font-weight: bold;
    }

    h2{
        text-align: center;
        font-size: 1.8em;
    }

    .search{
        margin-left: 40%;
        margin-top: 10px;
    }   
</style>

<body>
    

    <header class="header">
        <div class="htop">STREAMLINE</div>
        <div class="left">
            <img src="LOGO2.png">
        </div>
        <div class="center">
            <ul class="navbar">
                <li><a href="Landing Page.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </header>

    
    <!-- Services
    <div class="mid">
        <div class="lhalf">
            <h1> Select Course</h1>

        </div>
        <div class="rhalf">

        </div>
    </div>

    <div class="scroll"> 
      <main class="slide">
        <article  class="box">
            <h1>12th</h1>
            <span>
                sjhfbsmfbvsbvsmbv
            </span>

        </article>
        <article  class="box">
            <h1>10th</h1>
            <span>
                365656541654
            </span>

        </article>
        <article  class="box">
            <h1>10th</h1>
            <span>
                365656541654
            </span>

        </article>
        <article  class="box">
            <h1>10th</h1>
            <span>
                365656541654
            </span>

        </article>
        <article  class="box">
            <h1>10th</h1>
            <span>
                365656541654
            </span>

        </article>
      </main>  
    </div>
    Services End  -->

    <!-- Search Bar -->
    <div class="search">    
        <form action="ser.php" method="post">
            <input type="text" name="str" size=40 placeholder="Which exam you want to search..."/>
            <input type="submit" name="submit" value="Submit"/>
        </form>
    </div>

    <?php
    $con=mysqli_connect("localhost","root","","s1");

    //For Search bar results
    if(isset($_POST['submit'])){
        
        //Get data from db and display
        $str = $_POST['str'];
        $sql = "select * from data where title like
            '%$str%' or description like '%$str%' ";
        $res=mysqli_query($con,$sql);

        //Data found or failed
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                echo "<h2>{$row['title']}</h2><br><br>";
                echo "<h4>{$row['description']}</h4><br><br>";
                echo "<h4>{$row['patt']}</h4><br><br>";
                echo "<h4>{$row['link']}</h4>";
            }
        }
        else{
            echo "No data found";
        }
    }


    //For navigation links results
    if(isset($_GET['ID'])){
        $ID = $_GET['ID'];
        $sql = "select * from data where id='$ID' ";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        echo $row['title'].'<br><br>'.$row['description'];
    }

    mysqli_close($con);
?>

</body>

</html>
</body>

</html>


