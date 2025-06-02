<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Állatorvosi Nyilvántartás</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1000px;
            margin-top: 30px;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        table th {
            background-color: #e3f2fd;
        }
        h2 {
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    include_once "Animals.php";
    $todo = $_GET['todo'] ?? 'list';
    $animalsModel = new Animals("localhost", "root", "", "vet_clinic_1");

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
            exit;
        case 'setVaccinated':
            $id = intval($_GET['id']);
            $animalsModel->setVaccinated($id);
            header("Location: index.php");
            exit;
        case 'checkup':
            $id = intval($_GET['nev']);
            echo "<div class='alert alert-info'>Állat ID $id kivizsgálásra küldve (itt lehetne időpontot módosítani).</div>";
            echo "<a href='index.php' class='btn btn-secondary mt-3'>Vissza a listához</a>";
            exit;
            
        }

    ?>
</div>
</body>
</html>
