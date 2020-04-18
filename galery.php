<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-   fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap&subset=cyrillic" rel="stylesheet">
</head>

<body>
    <div class="top-bar">
        <div class="logo">
            <img src="glamour-logo-5229BB24EC-seeklogo.com.png">
        </div>
        <div class="menu-bar">
            <ul>
                <li><a href="aboutus.php">About us</a></li>
                <li class="active">Gallery</li>
                <li><a href="entertainment.php">Entertainment</a></li>
                <li><a href="login.php">Authorization</a></li>
            </ul>
        </div>
        <div class="search-box">
            <div class="input-search">
                <input type="text" placeholder="Search">
                <div class="search-icon">

                </div>
            </div>
        </div>
        <div class="burger" type="button" id="navToggle">
            <i class="fas fa-bars burger_icon"></i>
        </div>
    </div>
    <div class="gallery">
        <div class="image-box image-box-active">
            <img src="img1.jpg">
        </div>
        <div class="image-box">
            <img src="img2.jpg">
        </div>
        <div class="image-box">
            <img src="img3.jpg">
        </div>
        <div class="image-box">
            <img src="img4.jpg">
        </div>
        <div class="image-box">
            <img src="img5.jpg">
        </div>
    </div>
</body>

</html>
