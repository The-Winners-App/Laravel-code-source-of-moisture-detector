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
                    <li><a href="#">Acceuil</a></li>
                    <li><a href="produit">Produit</a></li>
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
    <section id="presenting">
        <div class="contenu">
            <div class="bordure">
                <div class="elements">
                    <div class="image">
                        <img src="{{ asset('plants/arrosage.jpg') }}" alt="plants">
                    </div>
                    <div class="des-cont">Détecteur humidite dans un champ notifiable</div>
                </div>
            </div>
        </div>
    
        <div class="border">
            <div class="inner">
                <div class="align">
                    <div class="sub-align">
                        <div class="sub-sub-align">
                            <div class="out">
                                <div class="prototype_container">
                                    <a href="produit"><img src="{{ asset('plants/realarduino.jpg') }}" alt="photo arduino"></a>
                                </div>
                                <div class="prototype_name">
                                   <a href="produit">Carte arduino G3 system detector</a>
                                </div>
                                <div class="prix">
                                    Prix: 1,500,000FCFA
                                </div>
                            </div>
                        </div>
                        <div class="about">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At deleniti in vel nihil voluptates temporibus odit ad. Ullam voluptates quas, nihil facilis natus iste reiciendis soluta, provident et fugit maiores!
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione amet provident eveniet, fugit voluptatibus possimus perspiciatis eius est voluptate tenetur, deserunt distinctio blanditiis eos accusamus porro, nemo omnis aspernatur reiciendis.
                        </div>
                        <div class="btn">
                            <a href="produit">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>