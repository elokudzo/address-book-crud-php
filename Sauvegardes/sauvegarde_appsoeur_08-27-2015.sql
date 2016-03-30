DROP TABLE IF EXISTS soeurs;

CREATE TABLE `soeurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `date_lieu_naissance` varchar(255) NOT NULL,
  `paroisse_dorigine` varchar(255) NOT NULL,
  `date_lieu_bapteme` varchar(255) NOT NULL,
  `date_lieu_communion` varchar(255) NOT NULL,
  `date_lieu_confirmation` varchar(255) NOT NULL,
  `nom_prenoms_pere` varchar(255) NOT NULL,
  `religion_pere` varchar(255) NOT NULL,
  `profession_pere` varchar(255) NOT NULL,
  `ethnie_pere` varchar(255) NOT NULL,
  `nom_prenoms_mere` varchar(255) NOT NULL,
  `religion_mere` varchar(255) NOT NULL,
  `profession_mere` varchar(255) NOT NULL,
  `ethnie_mere` varchar(255) NOT NULL,
  `juvenat` varchar(255) NOT NULL,
  `aspirat` varchar(255) NOT NULL,
  `postulat` varchar(255) NOT NULL,
  `noviciat` varchar(255) NOT NULL,
  `date_lieu_premiere_profession_religieuse` varchar(255) NOT NULL,
  `date_lieu_profession_perpetuelle` varchar(255) NOT NULL,
  `date_lieu_etude_primaire` text NOT NULL,
  `date_lieu_etude_secondaire` text NOT NULL,
  `date_lieu_etude_universitaire` text NOT NULL,
  `date_lieu_diplomes_obtenus` text NOT NULL,
  `communautes_parcourues` text NOT NULL,
  `deleted` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO soeurs VALUES("1","jack","adsfa","adsf","df","sf","sf","sdf","saf","sf","sfd","sf","sf","sf","sf","sf","sf","sf","fs","sf","sf","sf","fs","sfsf","sf","sf","sf","no");
INSERT INTO soeurs VALUES("2","elo","kudzo","adsf","sf","sfd","sdf","sf","sf","sf","sf","sf","sfs","fs","sf","sxf","sf","sf","fs","fs","fs","fs","saf","fsdf","sdf","sdf","sdf","no");
INSERT INTO soeurs VALUES("3","adf","","","","","","","","","","","","","","","","","","","","","","","","","","no");
INSERT INTO soeurs VALUES("4","adsf","","","","","","","","","","","","","","","","","","","","","","","","","","no");
INSERT INTO soeurs VALUES("5","werwer","","","","","","","","","","","","","","","","","","","","","","","","","","no");
INSERT INTO soeurs VALUES("6","sxccvx","","","","","","","","","","","","","","","","","","","","","","","","","","no");
INSERT INTO soeurs VALUES("7","asdfdfgf","","","","","","","","","","","","","","","","","","","","","","","","","","no");
INSERT INTO soeurs VALUES("8","werwe","","","","","","","","","","","","","","","","","","","","","","","","","","no");


