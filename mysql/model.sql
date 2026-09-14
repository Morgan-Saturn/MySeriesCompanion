CREATE TABLE series
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (255) NOT NULL,
    resume TEXT,
    vignette VARCHAR (255),
    date_sortie DATE NOT NULL
);

CREATE TABLE saisons
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (255) NOT NULL,
    resume TEXT,
    vignette VARCHAR (255),
    date_sortie DATE NOT NULL,
    serie_id INT NOT NULL, 

    FOREIGN KEY (serie_id) REFERENCES series(id)
);

CREATE TABLE episode
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (255) NOT NULL,
    resume TEXT,
    vignette VARCHAR (255),
    date_sortie DATE NOT NULL,
    duree INT,
    saison_id INT NOT NULL,

    FOREIGN KEY (saison_id) REFERENCES saisons(id)
);

CREATE TABLE personne
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR (255) NOT NULL, 
    nom VARCHAR (255) NOT NULL,
    prenom VARCHAR (255) NOT NULL
);

CREATE TABLE regarder
(
    personne_id INT NOT NULL,
    episode_id INT NOT NULL,

    PRIMARY KEY (personne_id, episode_id),

    FOREIGN KEY (personne_id) REFERENCES personne(id),
    FOREIGN KEY (episode_id) REFERENCES episode(id)
);