/* Fichier qui sert a créer les tables (CREATE)*/

-- Table: classement

CREATE TABLE classement (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    age INT NOT NULL
);