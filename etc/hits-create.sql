CREATE TABLE hits (
  id INT(10) NOT NULL AUTO_INCREMENT,
  sessionid VARCHAR(50) NULL,
  theme VARCHAR(50) NULL,
  clientip VARCHAR(50) NULL,
  created TIMESTAMP,
  PRIMARY KEY (`id`)
);
