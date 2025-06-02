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
        $sql = "SELECT * FROM animals";
        $result = $this->conn->query($sql);
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

    function addAnimal($name, $species, $birthdate, $vaccinated, $next_checkup, $notes) {
        $stmt = $this->conn->prepare("INSERT INTO animals (name, species, birthdate, vaccinated, next_checkup, notes) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiss", $name, $species, $birthdate, $vaccinated, $next_checkup, $notes);
        $stmt->execute();
    }

    function setVaccinated($id) {
        $sql = "UPDATE animals SET vaccinated = 1 WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
?>

