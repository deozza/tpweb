DROP DATABASE IF EXISTS tpweb;
CREATE DATABASE tpweb;
USE tpweb;

CREATE TABLE User(
  id int(3) AUTO_INCREMENT NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(255) NOT NULL,
  nom varchar(50),
  prenom varchar(50),
  privilege int(1),
  PRIMARY KEY(id)
);

CREATE TABLE Publication(
  id int(3) AUTO_INCREMENT NOT NULL,
  titre varchar(50) NOT NULL,
  image varchar(255) NOT NULL,
  corps text NOT NULL,
  auteur int(3),
  PRIMARY KEY(id),
  FOREIGN KEY (auteur) REFERENCES User(id)
);

INSERT INTO User (email, password, nom, prenom, privilege) VALUES
  ('admin@gmail.com', sha1('motdepasse'), 'admin', 'jesuis', 3),
  ('redacteur@gmail.com', sha1('redacteur'), 'redacteur', 'jesuis', 2);