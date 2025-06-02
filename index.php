<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Állatorvosi Nyilvántartás</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php
    include_once "Animals.php";
    $todo = $_GET['todo'] ?? 'list';
    $animalsModel = new Animals("localhost", "root", "", "vet_clinic");

    switch ($todo) {
        case 'list':
            include "animallist.php";
            break;
        case 'new':
            include "newanimal.php";
            break;
        case 'add':
            $name = htmlspecialchars($_POST['name']);
            $species = htmlspecialchars($_POST['species']);
            $birthdate = htmlspecialchars($_POST['birthdate']);
            $vaccinated = isset($_POST['vaccinated']) ? 1 : 0;
            $next_checkup = $_POST['next_checkup'] ?? null;
            $notes = htmlspecialchars($_POST['notes']);
            $animalsModel->addAnimal($name, $species, $birthdate, $vaccinated, $next_checkup, $notes);
            header("Location: index.php");
            break;
        case 'setVaccinated':
        }