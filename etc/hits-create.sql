CREATE TABLE hits (
  id INT(10) NOT NULL AUTO_INCREMENT,
  sessionid VARCHAR(50) NOT NULL,
  theme VARCHAR(50) NOT NULL,
  created TIMESTAMP,
  PRIMARY KEY (`id`)
);
