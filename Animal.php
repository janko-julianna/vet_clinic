<?php
class Animal {
    function __construct(
        public $id,
        public $name,
        public $species,
        public $birthdate,
        public $vaccinated,
        public $next_checkup,
        public $notes
    ) {}
}
?>

