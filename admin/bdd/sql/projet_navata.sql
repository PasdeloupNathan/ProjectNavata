CREATE TABLE `roles` (
	`id_roles` INT NOT NULL AUTO_INCREMENT,
	`admin` varchar(255) NOT NULL,
	`candidat` varchar(255) NOT NULL,
	`entreprise` varchar(255) NOT NULL,
	PRIMARY KEY (`id_roles`)
);

CREATE TABLE `login` (
	`id_login` varchar(255) NOT NULL,
	`mot de passe` varchar(255) NOT NULL,
	`users` varchar(255) NOT NULL,
	PRIMARY KEY (`id_login`)
);

CREATE TABLE `users` (
	`id_users` INT NOT NULL AUTO_INCREMENT,
	`noms` varchar(255) NOT NULL ,
	`prénoms` varchar(255) NOT NULL ,
	`adresses` varchar(255) NOT NULL ,
	`numtel` varchar(255) NOT NULL ,
	PRIMARY KEY (`id_users`)
);

CREATE TABLE `Candidatures` (
	`id_candidature` INT NOT NULL AUTO_INCREMENT,
	`diplomes_candidatures` varchar(255) NOT NULL ,
	PRIMARY KEY (`id_candidature`)
);

CREATE TABLE `inscrire` (
	`id_inscrire` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`prénoms` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`ville` varchar(255) NOT NULL,
	`adresses` varchar(255) NOT NULL,
	`postal` varchar(255) NOT NULL,
	`mdp` varchar(255) NOT NULL,
	`mdpconfirme` varchar(255) NOT NULL,
	PRIMARY KEY (`id_inscrire`)
);

CREATE TABLE `Concours` (
	`id_concours` INT NOT NULL AUTO_INCREMENT,
	`nomsConcours` varchar(255) NOT NULL,
	`prénomsConcours` varchar(255) NOT NULL,
	`locaConcours` varchar(255) NOT NULL,
	`categorieConcours` varchar(255) NOT NULL,
	`débutConcours` varchar(255) NOT NULL,
	`finConcours` varchar(255) NOT NULL,
	`placeConcoursPrise` varchar(255) NOT NULL,
	`placeConcoursMax` varchar(255) NOT NULL,
	`placeConcoursRestante` varchar(255) NOT NULL,
	`addConcours` varchar(255) NOT NULL,
	`deleteConcours` varchar(255) NOT NULL,
	PRIMARY KEY (`id_concours`)
);

CREATE TABLE `modifie` (
	`#hrefId_roles` INT NOT NULL,
	`id_concours` INT NOT NULL,
	`#hrefId_concours` INT NOT NULL
);

CREATE TABLE `accés` (
	`id_accés` INT NOT NULL,
	`#hrefId_candidature` INT NOT NULL,
	`#hrefId_concours` INT NOT NULL
);

CREATE TABLE `hérite` (
	`#hrefId_roles` INT NOT NULL,
	`#hrefId_users` INT  NOT NULL
);

CREATE TABLE `consulte` (
	`#hrefId_users` INT NOT NULL,
	`#hrefId_Concours` INT NOT NULL
);

