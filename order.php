<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="order.css">
    <link rel="shortcut icon" href="image/shortcut.jpg">
    <script src="https://kit.fontawesome.com/6d50d63ce1.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="menu">
            <div class="menu-left">
                <a href="index.php"> <img src="image/logo.png" alt=""></a>

            </div>
            <div class="menu-right">
                <ul>
                    <li><a class="menu-home" href="index.php">Home</a> </li>
                    <li><a class="menu-home" href="categories.php">Categories</a></li>
                    <li><a class="menu-home" href="index.php">Foods</a> </li>
                    <li><a class="menu-home" href="">Contact</a> </li>
                </ul>
            </div>
        </div>

    </header>
    <main>
        <div class="order-bg" style="width: 100%;height:600px;">

            <h1>Fill this form to confirm your order.</h1>

            <div class="select-food" style="width: 350px;height:120px">
                <img class="img-food" src="image/menu-pizza.jpg" alt="" width="100px" height="100px">


            </div>

            <div class="key-1" style="width: 110px; height:25px">Selected food</div>
            <div class="p-1">
                <b>Food Title<br>$2.3<br></b>
                <div>
                    <input class="p-1-num" type="number" value="1">
                </div>
            </div>
            <div class="input-info" style="width: 360px; height:330px">
                <div class="input-info-v">
                    <b>Full name</b>
                    <input class="input-info-b" type="text" style="width: 300px;" placeholder="E.g Vijay Thapa">
                </div>
                <div class="input-info-v">
                    <b>Phone Number</b>
                    <input class="input-info-b"type="tel" style="width: 300px;" placeholder="E.g. 9843xxxxxx">
                </div>
                <div class="input-info-v">
                    <b>Email</b>
                    <input class="input-info-b"type="email" style="width: 300px;" placeholder="E.g. hi@vijathpa.com">
                </div>
                <div class="input-info-v">
                    <b>Address</b>
                    <input class="input-info-b add"type="text" style="width: 300px;" placeholder="E.g. Street, City, Country">
                </div>
                <div class="confirm-btn a">
                    <button class="confirm-btn btn" style="color: white; background-color:palevioletred;width:100px;height:30px"><b>Confirm order</b>  </button>
                </div>


            </div>
            <div class="key-2" style="width: 110px; height:25px">Delivery Details </div>



        </div>
        <div class="socials" style="background-color: white; width:100%;height:200px">
            <div><a class="btn-with-img" href="https://www.facebook.com/duy.deiu/" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="btn-with-img" href="http://www.google.com" target="_blank">
                    <i class="fab fa-google"></i>
                </a>
                <a class="btn-with-img" href="https://twitter.com/?lang=vi" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <div class="policy-text">
                All rights reserved. Designed by
                <a class="policy-link" href="http://www.tlu.edu.vn/">CSE.TLU</a>
            </div>
        </div>

    </main>
</body>

</html>