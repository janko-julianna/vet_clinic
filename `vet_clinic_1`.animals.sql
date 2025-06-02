CREATE TABLE `vet_clinic_1`.animals (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  species VARCHAR(50) NOT NULL,
  birthdate DATE NOT NULL,
  vaccinated BOOLEAN DEFAULT FALSE,
  next_checkup DATETIME,
  notes TEXT
)
ENGINE = INNODB,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_general_ci;