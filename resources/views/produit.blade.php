<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plant.css">
    <link rel="shortcut icon" href="{{ asset('plants/logo.jpg') }}">
    <title>GreenAgri</title>
</head>
<body>
    <header>
        <div class="bg">
            <div class="head">
                <div class="logo">
                    <img src="{{ asset('plants/logo.jpg') }}" alt="">
                </div>
                <ul class="navlist">
                    <li><a href="/">Acceuil</a></li>
                    <li><a href="#">Produit</a></li>
                    <li><a href="">A propos</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Sign-in</a></li>

                </ul>
                <div class="searchbar">
                    <form action="" method="post">
                        <input type="text" class="search"><span>Search</span>
                    </form>
                </div>
            </div>
            <div class="container">
                <div class="plant-container">
                    <img src="{{ asset('plants/plant1.jpg') }}" alt="plants">
                    <div class="spraying-type">
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, temporibus suscipi</p>
                    </div>
                    <div class="btn">
                        <a href="#">En savoir plus</a>
                    </div>
                </div>
                <div class="plant-container">
                    <img src="{{ asset('plants/plant2.jpg') }}" alt="plants">
                    <div class="spraying-type">
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, temporibus suscipi</p>
                    </div>
                    <div class="btn">
                        <a href="#">En savoir plus</a>
                    </div>
                </div>
                <div class="plant-container">
                    <img src="{{ asset('plants/plant3.jpg') }}" alt="plants">
                    <div class="spraying-type">
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, temporibus suscipi</p>
                    </div>
                    <div class="btn">
                        <a href="#">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>