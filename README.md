# tech-idea

We have to create two db tables initially

CREATE TABLE IF NOT EXISTS `source` ( `source_id` int(3) NOT NULL AUTO_INCREMENT, `source_value` varchar(25) NOT NULL DEFAULT '', PRIMARY KEY (`source_id`) ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=50

INSERT INTO `source`(`source_id`,  `source_value`) VALUES (1, "9.9");
INSERT INTO `source`(`source_id`,  `source_value`) VALUES (2, "9.10");
INSERT INTO `source`(`source_id`,  `source_value`) VALUES (3, "9.12");
INSERT INTO `source`(`source_id`,  `source_value`) VALUES (4, "10.1");
INSERT INTO `source`(`source_id`,  `source_value`) VALUES (5, "10.3");
INSERT INTO `source`(`source_id`,  `source_value`) VALUES (6, "10.4");
INSERT INTO `source`(`source_id`,  `source_value`) VALUES (7, "10.5");
INSERT INTO `source`(`source_id`,  `source_value`) VALUES (8, "10.7");







CREATE TABLE IF NOT EXISTS `target` ( `target_id` int(3) NOT NULL AUTO_INCREMENT, `source_id` int(2) NOT NULL DEFAULT '0', `target_value` varchar(25) NOT NULL DEFAULT '', UNIQUE KEY `target_id` (`target_id`) ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=100

INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (1, 1, "9.10");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (2, 1, "9.12");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (3, 1, "10.1");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (4, 1, "10.3");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (5, 1, "10.4");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (6, 1, "10.5");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (7 ,1, "10.7");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (8 ,1, "10.11");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (9 ,2, "9.12");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (10 ,2, "10.1");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (11 ,2, "10.3");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (12 ,2, "10.4");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (13, 2 ,"10.5");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (14, 2, "10.7");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (15, 2, "10.11");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (16 ,3, "10.1");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (17, 3, "10.3");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (18 ,3, "10.4");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (19, 3 ,"10.5");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (20 ,3, "10.7");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (21 ,3, "10.11");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (22 ,4, "10.3");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (23, 4, "10.4");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (24, 4 ,"10.5");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (25, 4, "10.7");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (26, 4, "10.11");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (27 ,5 ,"10.4");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (28 ,5, "10.5");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (29 ,5 ,"10.7");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (30 ,5 ,"10.11");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (31 ,6 ,"10.5");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (32, 6 ,"10.7");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (33 ,6, "10.11");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (34 ,7, "10.7");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (35 ,7, "10.11");
INSERT INTO `target`(`target_id`, `source_id`, `target_value`) VALUES (36 ,8, "10.11");




