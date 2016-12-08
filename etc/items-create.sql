CREATE TABLE `items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `rank` int(10) NOT NULL,
  `trivia` text NOT NULL,
  `filename` varchar(50) NOT NULL,
  `image` blob,
  `created` datetime(6) DEFAULT NULL,
  `modified` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

