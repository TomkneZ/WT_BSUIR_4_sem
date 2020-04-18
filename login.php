    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-   fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap&subset=cyrillic" rel="stylesheet"> </head>

    <body>
        <div class="top-bar">
            <div class="logo"> <img src="glamour-logo-5229BB24EC-seeklogo.com.png"> </div>
            <div class="menu-bar">
                <ul>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="galery.php">Gallery</a></li>
                    <li><a href="entertainment.php">Entertainment</a></li>
                    <li class="active">Authorization</li>
                    <li></li>
                </ul>
            </div>
            <div class="burger" type="button" id="navToggle"> <i class="fas fa-bars burger_icon"></i> </div>
        </div>       
        <div class="login">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="social_icons">
                    <div class="fa"><i class="fab fa-facebook-f"></i></div>
                    <div class="fa"><i class="fab fa-twitter"></i></div>
                    <div class="fa"><i class="fab fa-instagram"></i></div>
                </div>
                <form id="login" class="input-group">
                    <input type="text" class="input-field" placeholder="User Id" required>
                    <input type="text" class="input-field" placeholder="Enter password" required>
                    <input type="checkbox" class="check-box"><span>Remember password</span>
                    <button type="submit" class="submit-btn">Log in</button>
                </form>
                <form id="register" class="input-group">
                    <input type="text" class="input-field" placeholder="User Id" required>
                    <input type="email" class="input-field" placeholder="Email Id" required>
                    <input type="checkbox" class="check-box"><span>I agree to the terms conditions</span>
                    <button type="submit" class="submit-btn">Register</button>
                </form>
            </div>
        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register() {
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function login() {
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }
        </script>
    </body>

    </html>
