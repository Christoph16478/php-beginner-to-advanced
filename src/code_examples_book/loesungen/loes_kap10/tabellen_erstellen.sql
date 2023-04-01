CREATE TABLE kunde (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(70) DEFAULT NULL,
  vorname varchar(70) DEFAULT NULL,
  strasse varchar(70) DEFAULT NULL,
  plz int(5) unsigned zerofill DEFAULT NULL,
  ort varchar(70) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE pizza (
  id int(11) NOT NULL AUTO_INCREMENT,
  pizzasorte varchar(70) DEFAULT NULL,
  preis decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
