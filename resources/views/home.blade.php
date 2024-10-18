<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plant.css">
    <link rel="shortcut icon" href="{{ asset('plants/logo.jpg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>GreenAgri</title>
</head>
<body>
    <header>
        <div class="bg">
            <div class="head">
                <div class="logo">
                    <a href="/"><img src="{{ asset('plants/logo.jpg') }}" alt=""></a>
                </div>
                <ul class="navlist">
                    <li><a href="/">Acceuil</a></li>
                    <li><a href="produit">Produit</a></li>
                    @auth
                        <li><a href="/resultat">Resultat</a></li>
                    @endauth
                    <li>            
                        @if (Route::has('login'))

                            @auth
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}">Log in</a>
                            <li>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            </li>
                            @endauth
                        @endif
                    </li>
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
                        <h1>Arrosage Automatique</h1>
                        <p>Un system qui detecte la secheresse du sol et active automatique un arrosage automatique dans vos champs</p>
                    </div>
                    <div class="btn">
                        <a href="#">En savoir plus</a>
                    </div>
                </div>
                <div class="plant-container">
                    <img src="{{ asset('plants/plant2.jpg') }}" alt="plants">
                    <div class="spraying-type">
                        <h1>Gestion de temps</h1>
                        <p>Permet de gerer le temps des agriculteur en fournissant des fonctionnalites adequats</p>
                    </div>
                    <div class="btn">
                        <a href="#">En savoir plus</a>
                    </div>
                </div>
                <div class="plant-container">
                    <img src="{{ asset('plants/plant3.jpg') }}" alt="plants">
                    <div class="spraying-type">
                        <h1>Type Arrosage</h1>
                        <p>Permet de choisit plusieurs types d'arrosage en fonction des choix de l'agriculteur</p>
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
                                   <a href="produit">{{ $produits->title }}</a>
                                </div>
                                <div class="prix">
                                    Prix: 150000FCFA
                                </div>
                            </div>
                        </div>
                        <div class="about">
                            {{ $produits->mini_description }}
                        </div>
                        <div class="btn">
                            <a href="produit">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="copyright">
                Copyright &copy; 2024 <a href="#">the winners app</a>. All Rights Reserved.
            </div>
            <div class="social">        
                <a href=""><i class="fa-brands fa-facebook" style="color: #1ed23c;"></i></a>
                <a href=""><i class="fa-brands fa-whatsapp" style="color: #1ed23c;"></i></a>
                <a href=""><i class="fa-brands fa-tiktok" style="color: #1ed23c;"></i></a>
            </div>
        </div>
        <hr>
        <div class="privacy">
            <a href="">Politique de confidentialité</a>
            <a href="">Gestion des cookies</a>
        </div>
    </footer>
</body>
</html>