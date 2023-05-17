
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jam Tangan Buluk</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/ico" href="favicon.ico">\
    <link rel="stylesheet" href="<link rel="stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes"
    viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1
     0 8 0a8 8 0 0 0 0 16z"/><path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.
     498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.
     005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.2
     42.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002z
     M4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.86
     4 3.544 1.838-.952 3.434-3.067-
        3.554.19-4.858.952-3.434z"/></svg>



</head>
<body>
    <main></main>
    <section>
        <div class="circle"></div>
        <header>
            <div class="logo"><img src="{{ asset('img/mon.jpg') }}" height="50" ></div>
            <ul>
                <nav class="navigation">
                    <i class="bi bi-brightness-high-fill" id="toogleDark"></i>
                    <a href="/">Home</a></li>
                    <a href="/about">Menu</a></li>
                    <button class="btnLogin-popup">Login</button>
                    </li>
                </nav>
            </ul>
     </header>

     <div class="content">
        <div class="textBox">
            <h2>Have a Watch <br>In <span>WTC</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem I
                psum has been the industry's standard dummy text ever since the  1500s, when an unknown pr
                in the 1960s with the release of Letraset </p>
                <a href="/Learnmore" >Learn More</a>
                </div>

        <div class="wrapper">
            <span class="icon-close"><ion-icon name="close"></ion-icon>
            </span>

            <div class="form-box login">
                <h2>Login</h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock"></ion-icon>
                        </span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">
                            Remember me</label>
                            <a href="#">Forgot Password?</a>
                    </div>
                    <button type="sumbit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account? <a
                        href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Registration</h2>
                <form action="login.php" method="post">

                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon>
                        </span>
                        <input type="text" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock"></ion-icon>
                        </span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">
                           i agree to the terms & conditions</label>
                    </div>
                    <button type="sumbit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Already have account?<a
                        href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>

                <div class="imgBox">
                    <img src="{{ asset('img/k.png') }}" height="250" class="starbucks">
                </div>
        </div>
     </div>
     <ul class="thumb">
         <li><img src="{{ asset('img/k.png') }}" onclick="imgSlider('{{ asset('img/k.png') }}');"changeCircleColor(#017143) width="250" height="100"></li>
         <li><img src="{{ asset('img/z.png') }}" onclick="imgSlider('{{ asset('img/z.png') }}');"changeCircleColor(#eb7495) width="250" height="100"></li>
         <li><img src="{{ asset('img/v.png') }}" onclick="imgSlider('{{ asset('img/v.png') }}');"changeCircleColor(#017143) width="250" height="100"></li>
     </ul>
    </section>
    <script type='module' src="js/script.js"></script>

    <script type="text/javascript">
    function imgSlider(anything){
        document.querySelector('.starbucks').src = anything;
    }

    function changeCircleColor(Color){
        const circle = document.querySelector('.circle');
        circle.style.background = color;
    }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
</body>
    <footer>
        <div class="container1">
            <div class="content__footer1">
                <div class="profil">
                    <div class="logo__area">
                        <img src="{{ asset('img/mon.jpg') }}" height="60" >
                        <span class="logo__name">WatchProject</span>
                        <button id="dark-mode" class="moon"><i class='bx bxs-moon' ></i></button>
                        <button id="light-mode" class="sun hide"><i class='bx bxs-sun' ></i></button>
                    </div>
                    <div class="desc__area">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum h
                            as been the industry's standard dummy text ever since the 1500s, when </p>
                    </div>
                    <div class="social__media">
                        <a href="#"><i class="bx bxl-linkedin-square"></i></a>
                        <a href="#"><i class='bx bxl-facebook-square'></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        <a href="#"><i class='bx bxl-gmail' ></i></a>
                    </div>
                </div>
                <div class="service__area">
                    <ul class="service__header">
                        <li class="service__name">Service</li>
                        <li><a href="#">IT Consulting</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Cloud</a></li>
                        <li><a href="#">DevOps & Support</a></li>
                    </ul>
                    <ul class="service__header">
                        <li class="service__name">industries</li>
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Public Sector</a></li>
                        <li><a href="#">Smart Office</a></li>
                        <li><a href="#">Retail</a></li>
                    </ul>
                    <ul class="service__header">
                        <li class="service__name">Company</li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Join Us</a></li>
                    </ul>
                </div>
            </div>
        <hr>
        <div class="footer__bottom">
            <div class="copy__right">
                <i class="bx bxs_copyright"></i>
                <span>2023 Watch Project</span>
            </div>
            <div class="tou">
                <a href="#">Terms of Use</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Cookie</a>
            </div>
        </div>
    </footer>
</html>

