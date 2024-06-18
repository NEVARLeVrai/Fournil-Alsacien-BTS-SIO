USE Fournil;

DROP TABLE IF EXISTS COMMANDE;
DROP TABLE IF EXISTS QUANTITE_COMMANDE;

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

INSERT INTO COMMANDE (prixTotal) VALUES
(16.8),
(2.6),
(27.2);

INSERT INTO QUANTITE_COMMANDE(codeCom, refProduit, quantite) VALUES
(1, "P001", 2),
(1, "P002", 1),
(1, "V002", 4),
(2, "P001", 2),
(3, "V001", 4),
(3, "V002", 4),
(3, "V003", 4);