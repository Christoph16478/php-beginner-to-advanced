CREATE TABLE `pflanzen` (
  `pfl_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `beschreibung` varchar(250) DEFAULT NULL,
  `preis` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`pfl_id`)
) ENGINE=InnoDB;
