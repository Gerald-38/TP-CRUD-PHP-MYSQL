create database magasin

use magasin;

CREATE TABLE `clients` (
  `id` int(11) NOT NULL auto_increment,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);