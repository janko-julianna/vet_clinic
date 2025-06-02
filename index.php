<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Állatorvosi Nyilvántartás</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <?php
    include_once "Animals.php";
    $animalsModel = new Animals("localhost", "root", "", "vet_clinic_1");
    $todo = $_GET['todo'] ?? 'list';

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
            $birthdate = $_POST['birthdate'];
            $vaccinated = isset($_POST['vaccinated']) ? 1 : 0;
            $next = $_POST['next_checkup'];
            $notes = htmlspecialchars($_POST['notes']);
            $animalsModel->addAnimal($name, $species, $birthdate, $vaccinated, $next, $notes);
            header("Location: index.php");
            break;

        case 'setVaccinated':
            $name = htmlspecialchars($_GET['name']);
            $animalsModel->setVaccinatedByName($name);
            header("Location: index.php");
            break;

        case 'delete':
            $name = htmlspecialchars($_GET['name']);
            $animalsModel->deleteAnimalByName($name);
            header("Location: index.php");
            break;

        case 'checkup':
            $animal = $animalsModel->getAnimalByName(htmlspecialchars($_GET['name']));
            include "checkupform.php";
            break;

        case 'saveCheckup':
            $name = htmlspecialchars($_POST['name']);
            $note = htmlspecialchars($_POST['checkup_note']);
            $next = $_POST['next_checkup'];
            $animalsModel->addCheckupNote($name, $note, $next);
            header("Location: index.php");
            break;
    }
    ?>
</div>
</body>
</html>
