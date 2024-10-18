<?php

    // Ouvrir le port série
    $port = "CON"; // Remplacez par le port correct (ex: COM3 sur Windows)
    $baudrate = 9600;
    $serial = fopen($port, "r+");

    // Configuration de la base de données Laravel
    require 'vendor/autoload.php'; // Assurez-vous d'avoir installé Laravel
    use App\Models\ResultCircuit; // Remplacez par votre modèle

    while (true) {
        if ($line = fgets($serial)) {
            // Traitez la ligne lue et insérez-la dans la base de données
            ResultCircuit::create(['data' => trim($line)]);
            echo "Données insérées : " . trim($line) . "\n";
        }
        usleep(100000); // Pause de 0,1 seconde pour éviter de surcharger le CPU
    }

    fclose($serial);
?>