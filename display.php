<?php
    header("Access-Control-Allow-Origin: *");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","blogs");
        $query = "select * from projs_names where details_id=$id limit 1";
        $query1 = "select * from proj_details where id=$id limit 1";
        $res = mysqli_fetch_assoc(mysqli_query($conn,$query)) or die("Error occurred");
        $res1 = mysqli_fetch_assoc(mysqli_query($conn,$query1)) or die("Error occurred");
        $topic = $res['proj_topic'];
        $lang = $res['proj_lang'];
        $explain = $res1['explanation'];
        $link1 = $res1['car_img_1'];
        $link2 = $res1['car_img_2'];
        $link3 = $res1['car_img_3'];
        $link4 = $res1['car_img_4'];
        $link5 = $res1['car_img_5'];
        echo '
            <html>
            <head>
                <meta charset = "UTF-8">
                <title>Display_doc</title>
                <link rel = "stylesheet" href = "style_disp.css">
                <meta name="viewport" content="width=device-width, initial-scale = 1.0">
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            
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
                    </div>';
                    echo "<p id = 'heading'>$topic</p>
                    <p id = 'langs'>Written in: &nbsp$lang</p>";
                    echo '<div id = "carousel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src='.$link1.' class="d-block w-100" alt="..." >
                                </div>
                                <div class="carousel-item">
                                    <img src='.$link2.' class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src='.$link3.' class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src='.$link4.' class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src='.$link5.' class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>';//carousel div ends here
                echo '<div id = "explanation">
                        <h3>About project and Source Code Explanation</h3>
                        <p>'.$explain.'<p>
                    </div>';
                    echo "<div id = 'Link'>
                        <p id = 'Link_to_src'>Link to source code:&nbsp&nbsp&nbsp&nbsp</p>
                        <a href = '#'><p id ='git_lnk'>Link</p></a>
                    </div>
                </div>
                <div id = 'footer'>
                        <div id = 'slinks'>
                            <div id = 'fb'><img id = 'fb_ico' src = 'fb.png'></div>
                            <div id = 'lin'><img id = 'lin_ico' src = 'lin.png'></div>
                            <div id = 'github'><img id = 'git_ico' src = 'gith.png'></div>
                            <div id = 'gle'><img id = 'gle_ico' src = 'google.png'></div>
                            <p id = 'foot_note'>This blogging website is just a personal website of the developer where he wants to showcase all his works or projects in a structured way
                            with explanations and source code links.You can contact with the developer via those social media links.All rights are reserved @2020</p>
                        <div id = 'fnote'>@Crafted&nbspby&nbspAkash&nbspChatterjee,2020</div>
                    </div>
                </div>
            </body>
        </html>
        ";
    }
?>