-- Suppression de la base de données peanut si elle existe déjà
DROP DATABASE IF EXISTS voyage;

-- Création de la base de données peanut si elle n'existe pas
CREATE DATABASE IF NOT EXISTS voyage;

-- On donne l'instruction sql d'utiliser la base de données du nom de peanut
USE voyage;

-- Création de la table user.
-- C'est cette table qui reprendra les informations récuperer dans le formulaire d'inscription de l'utilisateur
CREATE TABLE IF NOT EXISTS user_voyage (

    id INT AUTO_INCREMENT
    , nom VARCHAR(100) 
    , prenom VARCHAR(100)
    , email VARCHAR(200) NOT NULL
    , password VARCHAR(256)

-- La PRIMARY KEY servira lorsque l'on liera 2 tables ensemble
    , CONSTRAINT PK_user PRIMARY KEY (id)
    , CONSTRAINT UK_email UNIQUE (email)

)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS  user_reserveé(
    id INT AUTO_INCREMENT
    ,destination VARCHAR(50)
    ,genre VARCHAR(10)
    , nom VARCHAR(100) 
    , prenom VARCHAR(100)
    , date_naissance DATE
    , email VARCHAR(200) NOT NULL
    , tel   int(10)
    ,adress_postal VARCHAR(50)
    ,mode_paiement VARCHAR(20)
    , CONSTRAINT PK_user_reserveé PRIMARY KEY (id)
    , CONSTRAINT UK_email UNIQUE (email)
    , CONSTRAINT UK_tel UNIQUE (email)

)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS user_contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
);

DROP TABLE contact
DROP TABLE user_contact

CREATE TABLE IF NOT EXISTS  user_contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
);