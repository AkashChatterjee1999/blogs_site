<?php
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
        echo '
            <html>
            <head>
                <title>Display_doc</title>
                <link rel = "stylesheet" href = "style_disp.css">
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
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="back.jpg" class="d-block w-100" alt="..." >
                                </div>
                                <div class="carousel-item">
                                    <img src="back.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="back.jpg" class="d-block w-100" alt="...">
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
                echo "<div id = 'explanation'>
                        <h2>About project and Source Code Explanation</h2>
                        <p id = 'exp_content'>$explain<p>
                    </div>
                    <div id = 'Link'>
                        <p id = 'Link_to_src'>Link to source code:&nbsp&nbsp&nbsp&nbsp</p>
                        <a id ='git_lnk' href = '#'>Link</a>
                    </div>
                </div>
            </body>
        </html>
        ";
    }
?>