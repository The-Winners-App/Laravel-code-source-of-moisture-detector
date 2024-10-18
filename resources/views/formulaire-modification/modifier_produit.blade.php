<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('plant.css') }}">
    <link rel="shortcut icon" href="{{ asset('plants/logo.jpg') }}">
    <title>Green Agri</title>
</head>
<body>
    <div class="info">Veillez entrez les information pour modifier les elements de la page d'acceuil
        <span>NB: finisez toujours chaque phrase par un point(.)</span>
    </div>

    <form action="/produit/traitement_du_produit" method="POST">
        @csrf
        <div class="fielset">   
            <label for="photo">Selectioner une photo</label>
            <input type="file" name="photo" id="" value="{{ $produits->photo }}" required>

            <label for="title">Donner le titre de la carte</label>
            <input type="text" name="title" id="" value="{{ $produits->title }}" required>

            <label for="mini_description">Mini description</label>
            <input type="text" name="mini_description" id="" value="{{ $produits->mini_description }}" required>

            <label for="description">Description</label>
            <textarea name="description" id="" cols="10" rows="20" required>{{ $produits->description }}</textarea>

            <label for="caracteristics">Caracteristics et advantages</label>
            <textarea name="adv_and_carac" id="" cols="10" rows="20" required>{{ $produits->adv_and_carac }}</textarea>

            <label for="manuel">Manuel d'utilisation</label>
            <textarea name="manual" id="" cols="10" rows="20" required>{{ $produits->manual }}</textarea>

            <div class="divise">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </div>
    </form>
</body>
</html>