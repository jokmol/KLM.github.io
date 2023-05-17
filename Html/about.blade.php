<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Menu</title>

</head>
<body>
    <section>
        <header>
            <div class="logo"><img src="{{ asset('img/mon.jpg') }}" height="50" ></div>
            <div class="container">
                </form>
                <div class="box">
                    <input type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            </div>
            <ul>
                <nav class="navigation">
                    <a href="/about">Menu</a></li>
                    </li>
                </nav>
        </ul>
    </header>
    <section class="shop" id="shop">
       <span class="heading">
           <h1>Shop Watch <br>Shop Now</h1>
       </span>
       <div class="shop-container">

            <div class="box1">
                <div class="box-img1">
                    <img src="{{ asset('img/k.png') }}" height="350">
                </div>
                <h2 style=" color: #050505;font-size: 1.2rem;" >Rolex</h2>
                <span style="color: #050505;font-size: 1.4rem;font-weight: 500;margin: 0.2rem 0 0.5rem;">Rp.xxx</span>
                <a href="#" class="btn1">Order Now</a>
                <h1 class="D">Description About The Watch</h1>
                <p>.....</p>
            </div>
            <div class="box1">
                <div class="box-img1">
                    <img src="{{ asset('img/z.png') }}" height="350">
                </div>
                <h2 style=" color: #050505;font-size: 1.2rem;">Rolex</h2>
                <span style="color: #050505;font-size: 1.4rem;font-weight: 500;margin: 0.2rem 0 0.5rem;">Rp.xxx</span>
                <a href="#" class="btn1">Order Now</a>
                <h1 class="D">Description About The Watch</h1>
                <p>.....</p>

            </div>
            <div class="box1">
                <div class="box-img1">
                    <img src="{{ asset('img/v.png') }}" height="350">
                </div>
                <h2 style=" color: #050505;font-size: 1.2rem;">Rolex</h2>
                <span style="color: #050505;font-size: 1.4rem;font-weight: 500;margin: 0.2rem 0 0.5rem;">Rp.xxx</span>
                <a href="#" class="btn1">Order Now</a>
                <h1 class="D">Description About The Watch</h1>
                <p>.....</p>

            </div>
       </div>
    </section>
    <footer class="footer_2">
        <div class="container2">
            <div class="content__footer2">
        <h2 class="HW">History  Watch</h2>
        <hr>
        <p
        class="teks">Watches evolved from portable spring-driven clocks, which first appeared in 15th-century Europe. The first timepieces to be worn, made in the 16th century beginning in the German cities of Nuremberg andAugsburg, were transitional in size between clocks and watches.
            </p>
    </footer>
     <script src="app.js"></script>
</body>
</html>
