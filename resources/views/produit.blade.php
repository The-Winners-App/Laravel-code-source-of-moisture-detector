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
                    <li><a href="#">Produit</a></li>

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
                    <li><a href="/produit/modifier la page produit">Modifier la page produit</a></li>
                </ul>
                <div class="searchbar">
                    <form action="" method="post">
                        <input type="text" class="search"><span>Search</span>
                    </form>
                </div>
            </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        <h1>{{ session('status') }}</h1>
                    </div>
                @endif
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
    <section class="product">
        <div class="product_container">
            <div class="product_galery">
                <img src="{{ asset('plants/arduino.webp')  }}" alt="arduino">
            </div>
            <div class="align_border">
                <div class="product_border">
                    <div class="product_align">
                        <div class="product_name">
                            {{ $articles->title }}
                        </div>
                        <div class="product_price">
                            150000fcfa
                        </div>
                        <div class="brief_description">
                            {{ $articles->mini_description }}
                        </div>
                        <div class="div">
                            <table>
                                <tr>
                                    <th>Search System</th>
                                    <td>2 search system</td>
                                </tr>
                                <tr>
                                    <th>Device weight</th>
                                    <td>5kg</td>
                                </tr>
                                <tr>
                                    <th>Warranty</th>
                                    <td>Two (2) years</td>
                                </tr>
                                <tr>
                                    <th>Dimension</th>
                                    <td>(228mm x 400mm x 530mm) 2 box</td>
                                </tr>
                                <tr>
                                    <th>Made in</th>
                                    <td>Cameroon</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="horizontal">

    <section class="product_description">
        <div class="align_border">
            <div class="my_container">
                <div class="product_title">
                    {{ $articles->title }}
                </div>
                <div class="titre">
                    Description
                </div>
                <div class="details">
                    {{ $articles->description }}
                </div>
                <div class="titre">
                    Caracteristique et advantages de l'appareil
                </div>
                <div class="detail">
                    {{ $articles->adv_and_carac }}
                </div>
                <div class="titre">
                    Manuel d'utilisation de l'appareil
                </div>
                <div class="detai">
                    {{ $articles->manual }}
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
    <script src="{{ asset('plant.js') }}"></script>
</body>
</html>