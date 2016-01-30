-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 30 Janvier 2016 à 16:39
-- Version du serveur :  10.0.17-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_lotl`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `competence` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `competences`
--

INSERT INTO `competences` (`id`, `id_wuser`, `competence`) VALUES
(1, 1, ''),
(2, 2, 'HTML5, CSS3, BOOTSTRAP, PHP, MYSQL'),
(3, 3, 'compétences avancés avec les logiciels :\r\n- 3ds max	-Z-brush\r\n-photoshop	-végas\r\ncompétences avancés en modélisation 3d, texturing, rendering, éclairage.\r\n\r\nCompétences font :\r\n- html	-css\r\n-Jquery	-bootstrap\r\n\r\ncompétences back\r\n-mysql	-php'),
(4, 4, '- Développement web HTML5, CSS3, Javascript, PHP, MySQL, Bootstrap\r\n- Utilisation courante des logiciels de CAO: AutoCAD, Solidworks, Inventor. \r\n- Projection sur pellicule 35mm de 2006 à 2011. Montage et démontage des films, maintenance technique des pro'),
(5, 5, 'HTML5 CSS3 PHP Javascript Jquery bootstrap wordpress');

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `annees_obt` year(4) DEFAULT NULL,
  `intitule` varchar(255) NOT NULL,
  `ecole` varchar(255) NOT NULL,
  `annees_obt2` year(4) DEFAULT NULL,
  `intitule2` varchar(255) NOT NULL,
  `ecole2` varchar(255) NOT NULL,
  `annees_obt3` year(4) DEFAULT NULL,
  `intitule3` varchar(255) NOT NULL,
  `ecole3` varchar(255) NOT NULL,
  `annees_obt4` year(4) DEFAULT NULL,
  `intitule4` varchar(255) NOT NULL,
  `ecole4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `id_wuser`, `annees_obt`, `intitule`, `ecole`, `annees_obt2`, `intitule2`, `ecole2`, `annees_obt3`, `intitule3`, `ecole3`, `annees_obt4`, `intitule4`, `ecole4`) VALUES
(1, 1, 0000, '', '', 0000, '', '', 0000, '', '', 0000, '', ''),
(2, 2, 2012, 'Agencement de l''Environnement Architectural', 'Ecole BOULLE', 2009, 'Bac pro Menuisier Agenceur', 'Lycée Augustin Boismard (Brionne 27)', 0000, '', '', 0000, '', ''),
(3, 3, 2001, 'bacalaureat', 'Val de Reuil', NULL, '', '', 0000, '', '', 0000, '', ''),
(4, 4, 2007, 'CAP Opérateur Projectionniste', '', 2015, 'BAC pro EDPI (Etude et Définition de Produit Industriel) ', 'GRETA Rouen', 0000, '', '', 0000, '', ''),
(5, 5, 2003, 'BAC sti géni électrotechnique', 'lycée Jean Perrin', 2009, 'BTS Assistant technique d''ingénieur', 'AFORP', 2014, 'Licence informatique administrateur système et réseau', 'CNAM', 0000, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `experience_pros`
--

CREATE TABLE `experience_pros` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `periode_debut` year(4) DEFAULT NULL,
  `periode_fin` year(4) DEFAULT NULL,
  `compagnie` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `periode_debut2` year(4) DEFAULT NULL,
  `periode_fin2` year(4) DEFAULT NULL,
  `compagnie2` varchar(255) NOT NULL,
  `poste2` varchar(255) NOT NULL,
  `periode_debut3` year(4) DEFAULT NULL,
  `periode_fin3` year(4) DEFAULT NULL,
  `compagnie3` varchar(255) NOT NULL,
  `poste3` varchar(255) NOT NULL,
  `periode_debut4` year(4) DEFAULT NULL,
  `periode_fin4` year(4) DEFAULT NULL,
  `compagnie4` varchar(255) NOT NULL,
  `poste4` varchar(255) NOT NULL,
  `periode_debut5` year(4) DEFAULT NULL,
  `periode_fin5` year(4) DEFAULT NULL,
  `compagnie5` varchar(255) NOT NULL,
  `poste5` varchar(255) NOT NULL,
  `periode_debut6` year(4) DEFAULT NULL,
  `periode_fin6` year(4) DEFAULT NULL,
  `compagnie6` varchar(255) NOT NULL,
  `poste6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experience_pros`
--

INSERT INTO `experience_pros` (`id`, `id_wuser`, `periode_debut`, `periode_fin`, `compagnie`, `poste`, `periode_debut2`, `periode_fin2`, `compagnie2`, `poste2`, `periode_debut3`, `periode_fin3`, `compagnie3`, `poste3`, `periode_debut4`, `periode_fin4`, `compagnie4`, `poste4`, `periode_debut5`, `periode_fin5`, `compagnie5`, `poste5`, `periode_debut6`, `periode_fin6`, `compagnie6`, `poste6`) VALUES
(1, 1, 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', ''),
(2, 2, 2014, 2015, 'BESSIERE', 'Technicien bureau d''études', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', ''),
(3, 3, 2009, 2010, '', 'Responsable décors pour film d’animation', 2004, 2006, '', 'Chauffeur livreur VL, pour la société Pro Médical Service', 2006, 2007, '', 'Educateur au sein d’un internat pour collégiens (Barentin)', 2002, 2003, 'Télescope', 'Cadreur/monteur pour la télévision associative « Télescope » (Rouen)', 2001, 2002, '', 'Organisation, mise en scène et comédien d’une troupe de théâtre(association "Itij")', 2000, 2001, '', 'Aide éducateur spécialisé - institut médico pédagogique du moulin vert'),
(4, 4, 2015, 2015, 'Visionic', 'Stagiaire dessinateur industriel ', 2014, 2014, 'EREM', 'stagiaire dessinateur industriel', 2007, 2007, 'UGC', 'Projectionniste', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', ''),
(5, 5, 2014, 2015, 'Marionnaud France', 'technicien suport aplication web', 2013, 2014, 'Delsey France', 'responsable SAV', 2007, 2013, 'Catalina Marketin France', 'technicien support application', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `fil_actus`
--

CREATE TABLE `fil_actus` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fil_actus`
--

INSERT INTO `fil_actus` (`id`, `id_wuser`, `message`, `date`) VALUES
(1, 1, '', '2016-01-30 12:40:23'),
(2, 2, 'hello world update final', '2016-01-30 16:36:16'),
(3, 3, 'Les mecs, ont se fait un FabLab ?!', '2016-01-29 10:35:31'),
(4, 4, 'rien à dire', '2016-01-30 12:35:37'),
(5, 5, 'hello world', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `ad_portfolio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `portfolios`
--

INSERT INTO `portfolios` (`id`, `id_wuser`, `ad_portfolio`) VALUES
(1, 1, ''),
(2, 2, 'projet_lotl/'),
(3, 3, ''),
(4, 4, ''),
(5, 5, '');

-- --------------------------------------------------------

--
-- Structure de la table `reseaux_divertissements`
--

CREATE TABLE `reseaux_divertissements` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) DEFAULT NULL,
  `psn` varchar(255) DEFAULT NULL,
  `xboxlive` varchar(255) DEFAULT NULL,
  `steam` varchar(255) DEFAULT NULL,
  `battlenet` varchar(255) DEFAULT NULL,
  `compte_nintendo` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reseaux_divertissements`
--

INSERT INTO `reseaux_divertissements` (`id`, `id_wuser`, `psn`, `xboxlive`, `steam`, `battlenet`, `compte_nintendo`, `origin`) VALUES
(1, 1, '', '', '', '', '', ''),
(2, 2, '', 'antibyotik', 'skaanka', '#anti', '', ''),
(3, 3, '', 'lemuth360', 'slade', '', '', ''),
(4, 4, 'Xx_Luciole_xX', '', 'http://steamcommunity.com/profiles/76561197970901737', 'Luciole#1515', '2492-4879-9544', 'Luciehole'),
(5, 5, 'bsx95', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `reseaux_pros`
--

CREATE TABLE `reseaux_pros` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `viadeo` varchar(255) NOT NULL,
  `xing` varchar(255) NOT NULL,
  `muxi` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reseaux_pros`
--

INSERT INTO `reseaux_pros` (`id`, `id_wuser`, `linkedin`, `viadeo`, `xing`, `muxi`, `github`) VALUES
(1, 1, '', '', '', '', ''),
(2, 2, 'https://fr.linkedin.com/in/grégoire-gripon-3455b6a7', '', '', '', 'https://github.com/Skaanka'),
(3, 3, 'gilles saley', '', '', '', 'lemuth'),
(4, 4, 'https://fr.linkedin.com/in/françois-guillerme-410a65112', '', '', '', 'https://github.com/Legordon'),
(5, 5, 'kangni Devis', 'kangni Devis', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `reseaux_socials`
--

CREATE TABLE `reseaux_socials` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `deezer` varchar(255) NOT NULL,
  `spotify` varchar(255) NOT NULL,
  `viber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reseaux_socials`
--

INSERT INTO `reseaux_socials` (`id`, `id_wuser`, `facebook`, `twitter`, `youtube`, `google`, `skype`, `instagram`, `whatsapp`, `pinterest`, `deezer`, `spotify`, `viber`) VALUES
(1, 1, '', '', '', '', '', '', '', '', '', '', ''),
(2, 2, '', 'https://twitter.com/GregoireGripon', '', '', 'skaanka', '', '', '', 'http://www.deezer.com/profile/3024658', '', ''),
(3, 3, '', '', '', '', 'lemuth', '', '', '', '', '', ''),
(4, 4, '', 'https://twitter.com/gordonlaluciole', '', '', 'the-gordon', '', '', '', '', '', ''),
(5, 5, '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `wusers`
--

CREATE TABLE `wusers` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `validation_inscription` varchar(50) NOT NULL,
  `ddn` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `siteWeb` varchar(255) NOT NULL,
  `citation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `wusers`
--

INSERT INTO `wusers` (`id`, `prenom`, `nom`, `mail`, `mot_de_passe`, `role`, `validation_inscription`, `ddn`, `avatar`, `adresse`, `cp`, `ville`, `phone`, `siteWeb`, `citation`) VALUES
(1, 'Lord', 'Sauron', 'saurondumordorlouviers@gmail.com   ', '$2y$10$clEALeqdXszu1ZPritG7COS.oWXzQBVn.U6TW2jWK1n57Sy5UDoH2', 'admin', 'true', '0006-06-06', '1454159907_admin.jpg', 'projet_lotl', 6660, 'mysql', 600000000, 'www.projet_lotl', 'essai lord'),
(2, 'Grégoire', 'Gripon', 'g.gripon@jesuistondev.fr', '$2y$10$CS0G5Q8Ttr87OnmhT3jyrO986705wxXh4rlCF/nZcXqsm3h8BsFOy', 'membre', 'true', '1988-09-08', '1454100514_me.jpg', '00 mon adresse update', 27400, 'Louviers', 600000000, 'www.projet_lotl.fr', 'Lorem ipsum dolor sit amet.'),
(3, 'Gilles', 'Saley', 'gilles.saley@gmail.com', '$2y$10$cxPikIxfeoU3Xc8Irzv3l.2mdXdUgHZnjWEJ/VyLNP2V3I.uVhz..', 'membre', 'true', '1977-07-14', '1454104124_avatar-gilles.jpg', '72 rue de l''helianthe', 27100, 'Val de Reuil', 0, 'www.jesuistondev.fr', 'Quelqu''un veux un café ?'),
(4, 'François', 'Guillerme', 'francois.guillerme27@orange.fr', '$2y$10$san.PDmQidLmfl1x25/s2.ifrTpYaWzXIFsMt3AJRkTilQ0V5YFra', 'membre', 'true', '1983-12-19', '1454104856_Ami.jpg', '10 rue de Lyons', 27460, 'Igoville', 0, '', ''),
(5, 'Devis', 'Kangi', 'kangni.devis@yahoo.fr', '$2y$10$OvisLYvjP5oJQUDNZ21Ahe/ItnpWIavLa8Zb.DOxpGYZEoazaAfnq', 'membre', 'true', '1983-01-02', '1454110025_crazy.jpg', '34 rue du faubourd de neaufles', 27140, 'gisors', 630448270, 'jesuistondev.fr', 'Si mes calculs sont exacts, lorsque ce petit bolide atteindr');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experience_pros`
--
ALTER TABLE `experience_pros`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fil_actus`
--
ALTER TABLE `fil_actus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reseaux_divertissements`
--
ALTER TABLE `reseaux_divertissements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reseaux_pros`
--
ALTER TABLE `reseaux_pros`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reseaux_socials`
--
ALTER TABLE `reseaux_socials`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wusers`
--
ALTER TABLE `wusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `experience_pros`
--
ALTER TABLE `experience_pros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `fil_actus`
--
ALTER TABLE `fil_actus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `reseaux_divertissements`
--
ALTER TABLE `reseaux_divertissements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `reseaux_pros`
--
ALTER TABLE `reseaux_pros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `reseaux_socials`
--
ALTER TABLE `reseaux_socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `wusers`
--
ALTER TABLE `wusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
