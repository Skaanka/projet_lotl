-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 23 Janvier 2016 à 19:03
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
(27, 22, 'user 1 competence bla bla'),
(28, 23, 'competence user 2 bla bla bla'),
(29, 24, 'competence user_3 bla bla bla'),
(30, 25, 'competences user_4 bla bla bla'),
(31, 26, 'competence user_5 bla'),
(32, 27, 'competence user_6 blabla bla');

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `id_wuser`, `annees_obt`, `intitule`, `ecole`, `annees_obt2`, `intitule2`, `ecole2`, `annees_obt3`, `intitule3`, `ecole3`, `annees_obt4`, `intitule4`, `ecole4`) VALUES
(84, 22, 2014, 'dfghjklfghjk', 'gvhjklfghjkl', 2012, 'ghjklm', 'dfghjgfvbh', 2013, 'ghjhghjhb', 'fghjkfvghj', 2012, 'dfghjdfgh', 'dfghjfgh'),
(85, 23, 2012, 'sdfghjk', 'dfghjk', 2011, 'sdfghjk', 'dfghjkl', 0000, '', '', 0000, '', ''),
(86, 24, 2012, 'user_3', 'user_3', 2011, 'user_3', 'user_3', 0000, '', '', 0000, '', ''),
(87, 25, 2011, 'user_4', 'user_4', 0000, '', '', 0000, '', '', 0000, '', ''),
(88, 26, 2014, 'user_5', 'user_5', 0000, '', '', 0000, '', '', 0000, '', ''),
(89, 27, 2011, 'user_6', 'user_6', 2023, 'user_6', 'user_6', 2000, 'user_6', 'user_6', 0000, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `experience_pros`
--

CREATE TABLE `experience_pros` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experience_pros`
--

INSERT INTO `experience_pros` (`id`, `id_wuser`, `periode_debut`, `periode_fin`, `compagnie`, `poste`, `periode_debut2`, `periode_fin2`, `compagnie2`, `poste2`, `periode_debut3`, `periode_fin3`, `compagnie3`, `poste3`, `periode_debut4`, `periode_fin4`, `compagnie4`, `poste4`, `periode_debut5`, `periode_fin5`, `compagnie5`, `poste5`, `periode_debut6`, `periode_fin6`, `compagnie6`, `poste6`) VALUES
(122, 22, 2012, 2012, 'sdfghjkl', 'dfghjdfgh', 2011, 2011, 'sdfghj', 'sdfghj', 2013, 2013, 'sdfghj', 'sdfghj', 2015, 2015, 'dfghjk', 'fghjk', 2013, 2013, 'sdfghj', 'dfghj', 0000, 0000, '', ''),
(123, 23, 0000, 0000, '', '', 2011, 2011, 'sdfvghjklfghjk', 'fvghjklcfvghjkl', 2012, 2012, 'dfghjkdfghjk', 'cgvnhjklcdfghjk', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', ''),
(124, 24, 2011, 2011, 'user_3', 'user_3', 2025, 2025, 'user_3', 'user_3', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', ''),
(125, 25, 2011, 2011, 'user_4', 'user_4', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', ''),
(126, 26, 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', ''),
(127, 27, 2010, 2030, 'user_6', 'user_6', 2009, 2009, 'user_6', 'user_6', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '', 0000, 0000, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `fil_actus`
--

CREATE TABLE `fil_actus` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fil_actus`
--

INSERT INTO `fil_actus` (`id`, `id_wuser`, `message`) VALUES
(26, 22, 'lorem ipsum user 1'),
(27, 23, 'lorem ipsum user 2'),
(28, 24, 'lorem ipsum user_3'),
(29, 25, 'lorem ipsum user_4 bla'),
(30, 26, 'lorem ipsum user_5 bla'),
(31, 27, 'lorem ipsum user_6 bla bla');

-- --------------------------------------------------------

--
-- Structure de la table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `ad_portfolio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `portfolios`
--

INSERT INTO `portfolios` (`id`, `id_wuser`, `ad_portfolio`) VALUES
(27, 22, 'www.mportfoliouser1.fr'),
(28, 23, 'www.mportfoliouser2.fr'),
(29, 24, 'www.mportfoliouser2.fr'),
(30, 25, 'www.mportfoliouser1.fr'),
(31, 26, 'www.mportfoliouser1.fr'),
(32, 27, 'www.mportfoliouser1.fr');

-- --------------------------------------------------------

--
-- Structure de la table `reseaux_divertissements`
--

CREATE TABLE `reseaux_divertissements` (
  `id` int(11) NOT NULL,
  `id_wuser` int(11) NOT NULL,
  `psn` varchar(255) NOT NULL,
  `xboxlive` varchar(255) NOT NULL,
  `steam` varchar(255) NOT NULL,
  `battlenet` varchar(255) NOT NULL,
  `compte_nintendo` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reseaux_divertissements`
--

INSERT INTO `reseaux_divertissements` (`id`, `id_wuser`, `psn`, `xboxlive`, `steam`, `battlenet`, `compte_nintendo`, `origin`) VALUES
(27, 22, 'user_1', 'user_1', 'user_1', 'user_1', 'user_1', 'user_1'),
(28, 23, 'user_2', 'user_2', 'user_2', 'user_2', 'user_2', 'user_2'),
(29, 24, 'user_3', '', 'user_3', '', 'user_3', ''),
(30, 25, '', 'user_4', 'user_4', '', 'user_4', 'user_4'),
(31, 26, '', 'user_5', 'user_5', '', 'user_5', ''),
(32, 27, '', 'user_6', 'user_6', '', '', 'user_6');

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
(27, 22, 'user_1', 'user_1', 'user_1', 'user_1', 'user_1'),
(28, 23, 'user_2', 'user_2', '', '', 'user_2'),
(29, 24, 'user_3', '', '', 'user_3', ''),
(30, 25, 'user_4', 'user_4', '', 'user_4', ''),
(31, 26, 'user_5', 'user_5', '', 'user_5', 'user_5'),
(32, 27, 'user_6', '', 'user_6', '', 'user_6');

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
(27, 22, 'user_1', 'user_1', 'user_1', 'user_1', 'user_1', 'user_1', 'user_1', 'user_1', 'user_1', 'user_1', 'user_1'),
(28, 23, 'user_2', '', 'user_2', '', 'user_2', '', 'user_2', '', 'user_2', '', 'user_2'),
(29, 24, '', 'user_3', '', 'user_3', '', 'user_3', '', 'user_3', '', 'user_3', ''),
(30, 25, '', '', 'user_4', 'user_4', '', 'user_4', '', 'user_4', '', 'user_4', 'user_4'),
(31, 26, '', 'user_5', 'user_5', '', '', '', 'user_5', 'user_5', '', 'user_5', ''),
(32, 27, 'user_6', 'user_6', '', 'user_6', 'user_6', '', '', '', '', '', 'user_6');

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
  `citation` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `wusers`
--

INSERT INTO `wusers` (`id`, `prenom`, `nom`, `mail`, `mot_de_passe`, `role`, `validation_inscription`, `ddn`, `avatar`, `adresse`, `cp`, `ville`, `phone`, `siteWeb`, `citation`) VALUES
(22, 'user_1', 'user_1', 'user_1@mail.fr', '123', 'membre', 'false', '2016-01-23', '', '83 route finale', 66666, 'finalCity', 1234567890, 'www.monsite.fr', 'ma citation bla bla bla user_1'),
(23, 'user_2', 'user_2', 'user2@mail.fr', '123', 'membre', 'false', '2016-01-23', '', '83 route finale', 66666, 'finalCity', 1234567890, 'www.monsite.fr', 'ma citation bla bla bla user_2'),
(24, 'user_3', 'user_3', 'user3@mail.fr', '123', 'membre', 'false', '2016-01-16', '', '83 route finale', 66666, 'finalCity', 1234567890, 'www.monsite.fr', 'ma citation bla bla bla user_3'),
(25, 'user_4', 'user_4', 'user4@mail.fr', '123', 'membre', 'false', '2016-01-21', '', '83 route finale', 66666, 'finalCity', 1234567890, 'www.monsite.fr', 'ma citation bla bla bla user_4'),
(26, 'user_5', 'user_5', 'user5@mail.fr', '123', 'membre', 'false', '2016-01-17', '', '83 route finale', 66666, 'finalCity', 666666666, 'www.monsite.fr', 'ma citation bla bla bla user_5'),
(27, 'user_6', 'user_6', 'user6@mail.fr', '123', 'membre', 'false', '2016-01-24', '', '83 route finale', 66666, 'finalCity', 666666666, 'www.monsite.fr', 'ma citation bla bla bla user_6');

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
-- Index pour la table `wusers`
--
ALTER TABLE `wusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT pour la table `experience_pros`
--
ALTER TABLE `experience_pros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT pour la table `fil_actus`
--
ALTER TABLE `fil_actus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `reseaux_divertissements`
--
ALTER TABLE `reseaux_divertissements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `reseaux_pros`
--
ALTER TABLE `reseaux_pros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `reseaux_socials`
--
ALTER TABLE `reseaux_socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `wusers`
--
ALTER TABLE `wusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
