DROP DATABASE IF EXISTS Fournil;
CREATE DATABASE Fournil CHARACTER SET utf8;
USE Fournil;

CREATE TABLE IF NOT EXISTS CATEGORIE
(
    codeCat INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nomCat VARCHAR(20),
    nomEmploye VARCHAR(30)
);

CREATE TABLE IF NOT EXISTS PRODUIT(
   refP VARCHAR(4) PRIMARY KEY,
   photoP VARCHAR(200),
   designationP VARCHAR(50),
   prixP VARCHAR(10),
   poidsP VARCHAR(10),
   descriptifP VARCHAR(150),
   codeCat INT
);

CREATE TABLE IF NOT EXISTS ALLERGENE(
   idA INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   denominationA VARCHAR(25)
);

CREATE TABLE IF NOT EXISTS EXISTER(
   refP VARCHAR(4), 
   idA INT,
   presence TINYINT,
   trace TINYINT
);

CREATE TABLE IF NOT EXISTS COMPTE(
   idCompte VARCHAR(20),
   mdpCompte VARCHAR(255)
);

CREATE TABLE COMMANDE(
    codeCom INT PRIMARY KEY AUTO_INCREMENT,
    prixTotal DECIMAL(5,2),
    idCompte VARCHAR(20) REFERENCES COMPTE(idCompte)
);

CREATE TABLE QUANTITE_COMMANDE(
    codeCom INT REFERENCES COMMANDE(codeCom),
    refProduit VARCHAR(4) REFERENCES PRODUITS(refProduit),
    quantite INT,
    PRIMARY KEY(codeCom, refProduit)
);



ALTER TABLE PRODUIT
ADD CONSTRAINT fk_categorie_produit_codeCat
FOREIGN KEY (codeCat) 
REFERENCES CATEGORIE(codeCat);

ALTER TABLE EXISTER
ADD CONSTRAINT fk_produit_exister_refP
FOREIGN KEY (refP) 
REFERENCES PRODUIT(refP);
 
ALTER TABLE EXISTER
ADD CONSTRAINT fk_allergene_exister_idA
FOREIGN KEY (idA) 
REFERENCES ALLERGENE(idA);



INSERT INTO CATEGORIE 
(nomCat, nomEmploye)
VALUES 
("Pains", "M. PAIN"), ("Viennoiseries", "M. VIENNE"), ("Spécialités", "Mme SPECIAL");


INSERT INTO PRODUIT 
(photoP, refP, designationP, prixP, poidsP, descriptifP, codeCat)
VALUES 
-- PAINS
("img/pains/baguette250gr.png", "P001", "Baguette traditionnelle", "1,30€", "250gr.", "Une baguette croustillante à la croûte dorée pour accompagner vos repas ou pour réaliser des sandwichs.", 1), 
("img/pains/painCampagne400gr.png", "P002", "Pain de campagne", "3,80€", "400gr.", "Un pain rustique au levain, avec une mie généreuse et un goût légèrement acidulé.", 1),
("img/pains/painCereales350gr.png", "P003", "Pain aux céréales", "4,00€", "350gr.", "Un pain moelleux aux graines de lin, tournesol et sésame, pour une texture légèrement croquante.", 1), 

-- VIENNOISERIES
("img/viennoiseries/croissantBeurre50gr.png", "V001", "Croissant pur beurre", "1,30€", "50gr.", "Un classique de la boulangerie, un croissant feuilleté, croustillant à l'extérieur, tendre et fondant à l'intérieur.", 2), 
("img/viennoiseries/painChocolat50gr.png", "V002", "Pain au chocolat", "2,60€", "50gr.", "Une viennoiserie gourmande, avec une généreuse barre chocolatée enveloppée dans une pâte feuilletée et croustillante.", 2), 
("img/viennoiseries/chaussonPommes90gr.png", "V003", "Chausson aux pommes", "2,90€", "90gr.", "Un chausson croustillant garni de compote de pommes maison, saupoudré de sucre et de cannelle.", 2), 

-- SPECIALITES
("img/specialites/fougasseOlives400gr.jpg", "S001", "Fougasse aux olives", "2,00€", "400gr.", "Une spécialité provençale, une focaccia moelleuse aux olives noires. Une portion.", 3), 
("img/specialites/painEpicesMaison500gr.jpg", "S002", "Pain d'épices", "5,50€", "500gr.", "Un pain d'épices traditionnel, moelleux et parfumé, aux arômes de miel, de cannelle.", 3), 
("img/specialites/galetteFrangipane660gr.png", "S003", "Galette frangipane", "18,00€", "660gr.", "Une galette pour 4 personnes à base de pâte d’amandes. Prix au kg.", 3);


INSERT INTO ALLERGENE 
(denominationA)
VALUES
("gluten"), 
("levain"), 
("lin"), 
("tournesol"), 
("sésame"), 
("chocolat"), 
("pommes"), 
("olives"), 
("miel"), 
("cannelle"), 
("épices"), 
("amandes"), 
("fruits à coques"); 


INSERT INTO EXISTER
(refP, idA, presence, trace)
VALUES
-- PAINS
("P001", 1, 1, 0),

("P002", 1, 1, 0),
("P002", 2, 1, 0),

("P003", 1, 1, 0),
("P003", 3, 1, 0),
("P003", 4, 1, 0),
("P003", 5, 1, 0),

-- VIENNOISERIES
("V001", 1, 1, 0),

("V002", 1, 1, 0),
("V002", 6, 1, 0),

("V003", 1, 1, 0),
("V003", 7, 1, 0),

-- SPECIALITES
("S001", 1, 1, 0),
("S001", 8, 1, 0),

("S002", 1, 1, 0),
("S002", 9, 1, 0),
("S002", 10, 1, 0),
("S002", 11, 1, 0),

("S003", 1, 1, 0),
("S003", 12, 1, 0),
("S003", 13, 0, 1);
