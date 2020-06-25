<?php
    $conn = mysqli_connect("localhost","root","","blogs");
    $query = "select * from projs_names;";
    $res = mysqli_query($conn,$query) or die("Error occured");
    $query1 = "select count(*) as 'cnt' from projs_names;";
    $cnt = mysqli_fetch_assoc(mysqli_query($conn,$query1))['cnt'] or die("Error occured");
    echo '
        <html>
            <head>
                <link rel = "stylesheet" href = "style_blogs.css">
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
                <title>Blogs</title>
            </head>
            <body>
                <div id = "container">
                    <div id = "navbar">
                        <h2 id = "banner">My Blogs</h2>
                        <div id = "navi">
                        <nav>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="https://akashchatterjee1999.github.io/Portfolio">About me</a></li>
                                <li><a href="blogs.php">Blogs</a></li>
                                <li><a href="#">Donate</a></li>
                            </ul>
                        </nav>
                    </div>
                    <p id = "heading">My Blogs</p>
                    <div id = "c_projs">';
                        $no = $cnt+1;
                        $i = 1;
                        while($row=mysqli_fetch_assoc($res)){
                            $name = $row['proj_topic'];
                            $abt = $row['proj_abt'];
                            $lang = $row['proj_lang'];
                            $date_of_pub = $row['proj_date'];
                            $link = $row['details_id'];
                            if($no>1){
                                if($i%2!=0){
                                    echo '<div id = "wrapper_div">';
                                        echo "<div id = 'proj_container_odd'>
                                            <a href = 'display.php?id=$link'><p id = 'p_title'>$name</p></a>
                                            <p id = 'p_lang'>Written in :&nbsp $lang</p>
                                            <p id = 'p_abt'>About: &nbsp $abt</p>
                                            <p id = 'p_date'>Date: $date_of_pub </p><br>
                                        </div>";
                                }
                                else{
                                    echo "<div id = 'proj_container_even'>
                                        <a href = 'display.php?id=$link'><p id = 'p_title'>$name</p></a>
                                        <p id = 'p_lang'>Written in :&nbsp $lang</p>
                                        <p id = 'p_abt'>About: &nbsp $abt</p>
                                        <p id = 'p_date'>Date: $date_of_pub </p><br>
                                    </div>";
                                }
                            }
                            if($i%2==0)
                                echo '</div>'; //wrapper div ends here
                            $i += 1;
                            $no -= 1;
                        }
                        echo "</div>
                        <div id = 'footer'>Designed and Crafted by Akash Chatterjee @2020</div>";
                    echo'</div>
                </div>
            </body>
        </html>
    ';
?>