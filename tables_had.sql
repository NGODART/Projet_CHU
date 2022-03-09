CREATE TABLE `had_resultats` (
  `id_patient` int(11) NOT NULL,
  `no_consultation` datetime DEFAULT NULL,
  `question1` int(1) DEFAULT NULL,
  `question2` int(1) DEFAULT NULL,
  `question3` int(1) DEFAULT NULL,
  `question4` int(1) DEFAULT NULL,
  `question5` int(1) DEFAULT NULL,
  `question6` int(1) DEFAULT NULL,
  `question7` int(1) DEFAULT NULL,
  `question8` int(1) DEFAULT NULL,
  `question9` int(1) DEFAULT NULL,
  `question10` int(1) DEFAULT NULL,
  `question11` int(1) DEFAULT NULL,
  `question12` int(1) DEFAULT NULL,
  `question13` int(1) DEFAULT NULL,
  `question14` int(1) DEFAULT NULL,
  `totalA` int(10) DEFAULT NULL,
  `totalD` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `had_reponses` (
  `no_consultation` int(11) NOT NULL,
  `id_had` datetime DEFAULT NULL,
  `question1` int(1) DEFAULT NULL,
  `question2` int(1) DEFAULT NULL,
  `question3` int(1) DEFAULT NULL,
  `question4` int(1) DEFAULT NULL,
  `question5` int(1) DEFAULT NULL,
  `question6` int(1) DEFAULT NULL,
  `question7` int(1) DEFAULT NULL,
  `question8` int(1) DEFAULT NULL,
  `question9` int(1) DEFAULT NULL,
  `question10` int(1) DEFAULT NULL,
  `question11` int(1) DEFAULT NULL,
  `question12` int(1) DEFAULT NULL,
  `question13` int(1) DEFAULT NULL,
  `question14` int(1) DEFAULT NULL,
  `totalA` int(10) DEFAULT NULL,
  `totalD` int(10) DEFAULT NULL,
  `com_had`varchar(500)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

