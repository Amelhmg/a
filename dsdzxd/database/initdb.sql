CREATE TABLE Hotels (
 	id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
 	Nom VARCHAR(25) NOT NULL,
    Prenom VARCHAR(25) NOT NULL,
    Email VARCHAR(25) NOT NULL,
    Hotel VARCHAR(25) NOT NULL,
    Adresse VARCHAR(25) NOT NULL,
    Pays VARCHAR(25) NOT NULL,
    n_chambre VARCHAR(10) NOT NULL,
    Csimple VARCHAR(10) NOT NULL,
    Cdouble VARCHAR(10) NOT NULL,
    Ctriple VARCHAR(10) NOT NULL
);