
DROP DATABASE IF EXISTS navata_db;
CREATE DATABASE navata_db;
USE navata_db;




CREATE TABLE `login` (
	`id_login` varchar(255) NOT NULL,
	`mot de passe` varchar(255) NOT NULL,
	`users` varchar(255) NOT NULL,
	PRIMARY KEY (`id_login`)
);

CREATE TABLE `users` (
	`id_users` BINARY NOT NULL AUTO_INCREMENT,
	`noms` varchar(255) NOT NULL AUTO_INCREMENT,
	`prénoms` varchar(255) NOT NULL AUTO_INCREMENT,
	`adresses` varchar(255) NOT NULL AUTO_INCREMENT,
	`numtel` varchar(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id_users`)
);

CREATE TABLE `Candidatures` (
	`id_candidature` INT NOT NULL AUTO_INCREMENT,
	`diplomes_candidatures` varchar(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id_candidature`)
);

CREATE TABLE `s'inscrire` (
	`#hrefId_users` INT NOT NULL,
	`#hrefId_candidatures` INT NOT NULL
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
	`#hrefId_roles` BINARY NOT NULL,
	`id_concours` BINARY NOT NULL,
	`#hrefId_concours` BINARY NOT NULL
);

CREATE TABLE `accés` (
	`id_accés` BINARY NOT NULL,
	`#hrefId_candidature` INT NOT NULL,
	`#hrefId_concours` INT NOT NULL
);

CREATE TABLE `hérite` (
	`#hrefId_roles` BINARY NOT NULL,
	`#hrefId_users` BINARY NOT NULL
);

CREATE TABLE `consulte` (
	`#hrefId_users` BINARY NOT NULL,
	`#hrefId_Concours` BINARY NOT NULL
);

ALTER TABLE `s'inscrire` ADD CONSTRAINT `s'inscrire_fk0` FOREIGN KEY (`#hrefId_users`) REFERENCES `users`(`id_users`);

ALTER TABLE `s'inscrire` ADD CONSTRAINT `s'inscrire_fk1` FOREIGN KEY (`#hrefId_candidatures`) REFERENCES `Candidatures`(`id_candidature`);

ALTER TABLE `modifie` ADD CONSTRAINT `modifie_fk0` FOREIGN KEY (`#hrefId_roles`) REFERENCES `roles`(`id_roles`);

ALTER TABLE `modifie` ADD CONSTRAINT `modifie_fk1` FOREIGN KEY (`#hrefId_concours`) REFERENCES `Concours`(`id_concours`);

ALTER TABLE `accés` ADD CONSTRAINT `accés_fk0` FOREIGN KEY (`#hrefId_candidature`) REFERENCES `Candidatures`(`id_candidature`);

ALTER TABLE `accés` ADD CONSTRAINT `accés_fk1` FOREIGN KEY (`#hrefId_concours`) REFERENCES `Concours`(`id_concours`);

ALTER TABLE `hérite` ADD CONSTRAINT `hérite_fk0` FOREIGN KEY (`#hrefId_roles`) REFERENCES `roles`(`id_roles`);

ALTER TABLE `hérite` ADD CONSTRAINT `hérite_fk1` FOREIGN KEY (`#hrefId_users`) REFERENCES `users`(`id_users`);

ALTER TABLE `consulte` ADD CONSTRAINT `consulte_fk0` FOREIGN KEY (`#hrefId_users`) REFERENCES `users`(`id_users`);

ALTER TABLE `consulte` ADD CONSTRAINT `consulte_fk1` FOREIGN KEY (`#hrefId_Concours`) REFERENCES `Concours`(`id_concours`);

