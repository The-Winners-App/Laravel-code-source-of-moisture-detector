<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('plants/logo.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Green Agri</title>
</head>
<body>
    <div class="container text-center">
        <h1>Bonjour et Bienvenue {{ Auth::user()->name }}</h1><br>
        <h3>Voici les resultat obtenu sur votre plantation</h3>

        <table class="table">
            <tr>
                <th>Etat</th>
                <th>Temperature</th>
                <th>Date</th>
            </tr>
            @foreach ($results as $result) 
                <tr>
                    <td>{{ $result->etat }}</td>
                    <td>{{ $result->temperature }}</td>
                    <td>{{ $result->updated_at }}</td>
                </tr>
            @endforeach
        </table>
        <h2><a href="/produit" class="btn btn-primary">Revenir Sur la page du produit</a></h2>
    </div>
</body>
</html>