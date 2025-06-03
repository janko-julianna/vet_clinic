<?php
include_once "Animal.php";

class Animals {
    private $conn;

    function __construct($server, $user, $password, $database) {
        $this->conn = new mysqli($server, $user, $password, $database);
        if ($this->conn->connect_error) {
            die("Kapcsolódási hiba: " . $this->conn->connect_error);
        }
    }

    function getAnimals() {
        $result = $this->conn->query("SELECT * FROM animals");
        $animals = [];
        while ($row = $result->fetch_object()) {
            $animals[] = new Animal(
                $row->id,
                $row->name,
                $row->species,
                $row->birthdate,
                $row->vaccinated,
                $row->next_checkup,
                $row->notes
            );
        }
        return $animals;
    }

    function addAnimal($name, $species, $birthdate, $vaccinated, $next, $notes) {
        $stmt = $this->conn->prepare("INSERT INTO animals (name, species, birthdate, vaccinated, next_checkup, notes) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiss", $name, $species, $birthdate, $vaccinated, $next, $notes);
        $stmt->execute();
    }

    function getAnimalByName($name) {
        $stmt = $this->conn->prepare("SELECT * FROM animals WHERE name = ? LIMIT 1");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        return $stmt->get_result()->fetch_object();
    }

    function setVaccinatedByName($name) {
        $stmt = $this->conn->prepare("UPDATE animals SET vaccinated = 1 WHERE name = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
    }

    function deleteAnimalByName($name) {
        $stmt = $this->conn->prepare("DELETE FROM animals WHERE name = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
    }

    function addCheckupNote($name, $note, $nextCheckup) {
        $today = date("Y-m-d");
        $fullNote = "Kivizsgálás ($today): $note";
        $stmt = $this->conn->prepare("UPDATE animals SET notes = CONCAT(notes, '\n', ?), next_checkup = ? WHERE name = ?");
        $stmt->bind_param("sss", $fullNote, $nextCheckup, $name);
        $stmt->execute();
    }
    function addVaccinationNote($name, $note) {
        $stmt = $this->conn->prepare("UPDATE animals SET vaccinated = 1, notes = CONCAT(notes, '\n', ?) WHERE name = ?");
        $stmt->bind_param("ss", $note, $name);
        $stmt->execute();
    }   
    
}
?>