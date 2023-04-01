CREATE TABLE `pflanzen` (
  `pfl_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `beschreibung` varchar(250) DEFAULT NULL,
  `preis` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`pfl_id`)
) ENGINE=InnoDB  AUTO_INCREMENT=1;



INSERT INTO `pflanzen` (`pfl_id`, `name`, `beschreibung`, `preis`) VALUES
(1, 'Feldahorn', 'strauchartig, unter günstigen Bedingungen als Baum mit Höhen zwischen 10 und 15 Metern', '7.00'),
(2, 'Warzenbirke', 'sommergrüne Laubbaum-Art aus der Gattung der Birken', '8.50'),
(3, 'Pfeifenwinde', 'große, dachziegelartig übereinander liegenden Blätter', '11.00'),
(4, 'Filigranfarn', 'feine mehrfachgefiederte Wedel', '4.00'),
(5, 'Kahle Apfelbeere', 'Wildobst für viele Standorte', '5.50'),
(6, 'Essigrose', NULL, '11.00'),
(7, 'Büffelbeere', 'Gattung der Ölweidengewächse', '2.00'),
(8, 'Hopfenbuche', 'Pflanzengattung aus der Familie der Birkengewächse', '6.00'),
(9, 'Baumwürger', 'schöne Früchte', '5.00');

