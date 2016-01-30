-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 29 Janvier 2016 à 14:38
-- Version du serveur :  5.6.25
-- Version de PHP :  5.6.11

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

CREATE TABLE IF NOT EXISTS `competences` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `competence` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `competences`
--

INSERT INTO `competences` (`id`, `id_wuser`, `competence`) VALUES
(1, 1, ''),
(2, 2, 'Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, '),
(3, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida orci at justo dictum, vel ullamcorper mauris condimentum. Maecenas orci aliquam.'),
(4, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida orci at justo dictum, vel ullamcorper mauris condimentum. Maecenas orci aliquam.');

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE IF NOT EXISTS `diplomes` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `annees_obt` year(4) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `ecole` varchar(255) NOT NULL,
  `annees_obt2` year(4) NOT NULL,
  `intitule2` varchar(255) NOT NULL,
  `ecole2` varchar(255) NOT NULL,
  `annees_obt3` year(4) NOT NULL,
  `intitule3` varchar(255) NOT NULL,
  `ecole3` varchar(255) NOT NULL,
  `annees_obt4` year(4) NOT NULL,
  `intitule4` varchar(255) NOT NULL,
  `ecole4` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `id_wuser`, `annees_obt`, `intitule`, `ecole`, `annees_obt2`, `intitule2`, `ecole2`, `annees_obt3`, `intitule3`, `ecole3`, `annees_obt4`, `intitule4`, `ecole4`) VALUES
(1, 1, 0000, '', '', 0000, '', '', 0000, '', '', 0000, '', ''),
(2, 2, 2010, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2011, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2012, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2013, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, '),
(3, 3, 2010, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2011, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2012, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 0000, '', ''),
(4, 4, 2012, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2011, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 0000, '', '', 0000, '', ''),
(6, 6, 0000, '1212', '', 0000, '', '', 0000, '', '', 0000, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `experience_pros`
--

CREATE TABLE IF NOT EXISTS `experience_pros` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `periode_debut` year(4) NOT NULL,
  `periode_fin` year(4) NOT NULL,
  `compagnie` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `periode_debut2` year(4) NOT NULL,
  `periode_fin2` year(4) NOT NULL,
  `compagnie2` varchar(255) NOT NULL,
  `poste2` varchar(255) NOT NULL,
  `periode_debut3` year(4) NOT NULL,
  `periode_fin3` year(4) NOT NULL,
  `compagnie3` varchar(255) NOT NULL,
  `poste3` varchar(255) NOT NULL,
  `periode_debut4` year(4) NOT NULL,
  `periode_fin4` year(4) NOT NULL,
  `compagnie4` varchar(255) NOT NULL,
  `poste4` varchar(255) NOT NULL,
  `periode_debut5` year(4) NOT NULL,
  `periode_fin5` year(4) NOT NULL,
  `compagnie5` varchar(255) NOT NULL,
  `poste5` varchar(255) NOT NULL,
  `periode_debut6` year(4) NOT NULL,
  `periode_fin6` year(4) NOT NULL,
  `compagnie6` varchar(255) NOT NULL,
  `poste6` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experience_pros`
--

INSERT INTO `experience_pros` (`id`, `id_wuser`, `periode_debut`, `periode_fin`, `compagnie`, `poste`, `periode_debut2`, `periode_fin2`, `compagnie2`, `poste2`, `periode_debut3`, `periode_fin3`, `compagnie3`, `poste3`, `periode_debut4`, `periode_fin4`, `compagnie4`, `poste4`, `periode_debut5`, `periode_fin5`, `compagnie5`, `poste5`, `periode_debut6`, `periode_fin6`, `compagnie6`, `poste6`) VALUES
(1, 1, 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', ''),
(2, 2, 2010, 2011, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2012, 2013, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2014, 2015, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2016, 2017, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2018, 2020, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2021, 2022, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, '),
(3, 3, 2010, 2011, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2012, 2012, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2014, 2015, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2016, 2017, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 0000, 0000, '', '', 0000, 0000, '', ''),
(4, 4, 2010, 2012, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 2012, 2012, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, ', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `fil_actus`
--

CREATE TABLE IF NOT EXISTS `fil_actus` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fil_actus`
--

INSERT INTO `fil_actus` (`id`, `id_wuser`, `message`) VALUES
(1, 1, ''),
(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida orci at justo dictum, vel ullamcorper mauris condimentum. Maecenas orci aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida orci at justo dictum, vel ullamcor'),
(3, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida orci at justo dictum, vel ullamcorper mauris condimentum. Maecenas orci aliquam.'),
(4, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida orci at justo dictum, vel ullamcorper mauris condimentum. Maecenas orci aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida orci at justo dictum, vel ullamcorp');

-- --------------------------------------------------------

--
-- Structure de la table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `ad_portfolio` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `portfolios`
--

INSERT INTO `portfolios` (`id`, `id_wuser`, `ad_portfolio`) VALUES
(1, 1, ''),
(2, 2, 'www.portfolio1.fr'),
(3, 3, 'www.portfolio.fr'),
(4, 4, 'www.portfolio.fr');

-- --------------------------------------------------------

--
-- Structure de la table `reseaux_divertissements`
--

CREATE TABLE IF NOT EXISTS `reseaux_divertissements` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `psn` varchar(255) NOT NULL,
  `xboxlive` varchar(255) NOT NULL,
  `steam` varchar(255) NOT NULL,
  `battlenet` varchar(255) NOT NULL,
  `compte_nintendo` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reseaux_divertissements`
--

INSERT INTO `reseaux_divertissements` (`id`, `id_wuser`, `psn`, `xboxlive`, `steam`, `battlenet`, `compte_nintendo`, `origin`) VALUES
(1, 1, '', '', '', '', '', ''),
(2, 2, 'user1_', 'user1_', 'user1_', 'user1_', 'user1_', 'user1_'),
(3, 3, 'user_2', '', 'user_2', '', 'user_2', ''),
(4, 4, 'user_3', '', '', 'user_3', '', 'user_3');

-- --------------------------------------------------------

--
-- Structure de la table `reseaux_pros`
--

CREATE TABLE IF NOT EXISTS `reseaux_pros` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `viadeo` varchar(255) NOT NULL,
  `xing` varchar(255) NOT NULL,
  `muxi` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reseaux_pros`
--

INSERT INTO `reseaux_pros` (`id`, `id_wuser`, `linkedin`, `viadeo`, `xing`, `muxi`, `github`) VALUES
(1, 1, '', '', '', '', ''),
(2, 2, 'user1_', 'user1_', 'user1_', 'user1_', 'user1_'),
(3, 3, 'user_2', 'user_2', '', 'user_2', 'user_2'),
(4, 4, 'user_3', '', '', '', 'user_3');

-- --------------------------------------------------------

--
-- Structure de la table `reseaux_socials`
--

CREATE TABLE IF NOT EXISTS `reseaux_socials` (
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reseaux_socials`
--

INSERT INTO `reseaux_socials` (`id`, `id_wuser`, `facebook`, `twitter`, `youtube`, `google`, `skype`, `instagram`, `whatsapp`, `pinterest`, `deezer`, `spotify`, `viber`) VALUES
(1, 1, '', '', '', '', '', '', '', '', '', '', ''),
(2, 2, 'user1_', 'user1_', 'user1_', 'user1_', 'user1_', 'user1_', 'user1_', 'user1_', 'user1_', 'user1_', 'user1_'),
(3, 3, 'user_2', '', 'user_2', '', '', 'user_2', '', 'user_2', '', 'user_2', 'user_2'),
(4, 4, 'user_3', 'user_3', 'user_3', 'user_3', 'user_3', '', '', '', 'user_3', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `tokens`
--

CREATE TABLE IF NOT EXISTS `tokens` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `wusers`
--

CREATE TABLE IF NOT EXISTS `wusers` (
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
  `citation` varchar(150) NOT NULL,
  `statut` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `wusers`
--

INSERT INTO `wusers` (`id`, `prenom`, `nom`, `mail`, `mot_de_passe`, `role`, `validation_inscription`, `ddn`, `avatar`, `adresse`, `cp`, `ville`, `phone`, `siteWeb`, `citation`, `statut`) VALUES
(1, 'Lord', 'Sauron', 'admin@admin.fr', '$2y$10$CDwQGY7SqmP9Ya0gV1rP3OxL/0gIAiTvzgU44F6m2uLEliMzCx6sK', 'admin', 'true', '0666-06-06', '1453888632_oeil-de-sauron.jpg', '404 error', 6660, 'leWeb', 123456789, 'www.projet_lotl.fr', 'You shall not pass!', NULL),
(2, 'user_1', 'user_1', 'user_1@mail.fr', '$2y$10$zXEZFEgFgmjRFDzCIka5COMyrB4D3xko0QTOiqaOuMNRTK17Usp/.', 'membre', 'true', '1970-01-27', '1453888792_crazy.jpg', 'user_1', 666, 'user_1', 123456789, 'www.mon.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida orci at justo dictum, vel ullamcorper mauris condimentum. Maecenas orci aliquam.', NULL),
(3, 'user_2', 'user_2', 'user_2@mail.fr', '$2y$10$6s7.9qdsGn3GKJQFBuDBxO9pYz6IqY633vqLkgavpcsLQvs68Pz8e', 'membre', 'true', '2016-01-27', '1453888940_leilcat.jpg', 'user_2', 666, 'user_2', 123456789, 'www.mon.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida orci at justo dictum, vel ullamcorper mauris condimentum. Maecenas orci aliquam.', NULL),
(4, 'user_3', 'user_3', 'user_3@mail.fr', '$2y$10$/RK77r/s6TzcF6IP.IP9QetSNMI8PvY3YDjOuNhyuwbSO6gXZ5RB.', 'membre', 'true', '2016-01-27', '1453889091_linuxpingu.jpg', 'user_3', 666, 'user_3', 123456789, 'www.mon.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida orci at justo dictum, vel ullamcorper mauris condimentum. Maecenas orci aliquam.', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `experience_pros`
--
ALTER TABLE `experience_pros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `fil_actus`
--
ALTER TABLE `fil_actus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `reseaux_divertissements`
--
ALTER TABLE `reseaux_divertissements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `reseaux_pros`
--
ALTER TABLE `reseaux_pros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `reseaux_socials`
--
ALTER TABLE `reseaux_socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `wusers`
--
ALTER TABLE `wusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
