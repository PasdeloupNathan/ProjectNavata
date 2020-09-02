CREATE TABLE `roles` (
	`id_roles` INT NOT NULL,
	`admin` varchar(255) NOT NULL,
	`candidat` varchar(255) NOT NULL,
	`entreprise` varchar(255) NOT NULL,
	PRIMARY KEY (`id_roles`)
);

CREATE TABLE `admin` (
	`id_admin` INT NOT NULL AUTO_INCREMENT,
	`noms_admin` varchar(255) NOT NULL ,
	`prénoms_admin` varchar(255) NOT NULL ,
	`email_admin` varchar(255) NOT NULL ,
	`mdp_admin` varchar(255) NOT NULL,
	PRIMARY KEY (`id_admin`)
);

CREATE TABLE `users` (
	`id_users` INT NOT NULL AUTO_INCREMENT,
	`noms` varchar(255) NOT NULL ,
	`prénoms` varchar(255) NOT NULL ,
	`email` varchar(255) NOT NULL ,
	`ville` varchar(255) NOT NULL ,
	`adresse` varchar(255) NOT NULL ,
	`codepostal` INT NOT NULL ,
	`mdp` varchar(255) NOT NULL,
	`img` varchar(255) NOT NULL,
	`tel` INT NOT NULL,
	`nation` varchar(255) NOT NULL,
	`naissance` DATE NOT NULL,
	`idcard` INT NOT NULL,
	PRIMARY KEY (`id_users`)
);

CREATE TABLE `entreprise` (
	`id_entreprise` INT NOT NULL AUTO_INCREMENT,
	`nom_societe` varchar(255) NOT NULL ,
	`email_societe` varchar(255) NOT NULL ,
	`ville_societe` varchar(255) NOT NULL ,
	`adresse_societe` varchar(255) NOT NULL ,
	`codepostal_societe` INT NOT NULL ,
	`siret_societe` varchar(255) NOT NULL,
	`mdp_societe` varchar(255) NOT NULL,
	`img_societe` varchar(255) NOT NULL,
	PRIMARY KEY (`id_entreprise`)
);


CREATE TABLE `Candidatures` (
	`id_candidature` INT NOT NULL AUTO_INCREMENT,
	`date_naissance` DATE NOT NULL,
	`nationnalite` varchar(255) NOT NULL,
	`numero_identiter` INT NOT NULL,
	`diplome` varchar(255) NOT NULL,
	`diplome2` varchar(255) NOT NULL,
	`diplome3` varchar(255) NOT NULL,
	PRIMARY KEY (`id_candidature`)
);

CREATE TABLE `Concours` (
	`id_concours` INT NOT NULL AUTO_INCREMENT,
	`noms_concours` varchar(255) NOT NULL,
	`nom_entreprise` varchar(255) NOT NULL,
	`locaConcours` varchar(255) NOT NULL,
	`categorieConcours` varchar(255) NOT NULL,
	`date_concours` date NOT NULL,
	`placeConcoursPrise` INT NOT NULL,
	`placeConcoursMax` INT NOT NULL,
	`placeConcoursRestante` INT NOT NULL,
	`link_entreprise` varchar(255) NOT NULL,
	PRIMARY KEY (`id_concours`)
);

