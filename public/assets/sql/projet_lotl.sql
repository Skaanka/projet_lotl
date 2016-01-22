-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 22 Janvier 2016 à 09:46
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
  `id_membre` int(11) NOT NULL,
  `competence` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `competences`
--

INSERT INTO `competences` (`id`, `id_membre`, `competence`) VALUES
(2, 2, 'competence bla bla competence bla bla competence bla bla competence bla bla competence bla bla competence bla bla competence bla bla competence bla bla competence bla bla competence bla bla ');

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE IF NOT EXISTS `diplomes` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `annees_obt` year(4) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `ecole` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `id_membre`, `annees_obt`, `intitule`, `ecole`) VALUES
(5, 2, 2012, 'dfdzfd', 'fzefezf'),
(6, 2, 2012, 'ezfzfzf', 'zfezfzfzfz'),
(7, 2, 0000, '', ''),
(8, 2, 0000, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `experience_pros`
--

CREATE TABLE IF NOT EXISTS `experience_pros` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `periode_debut` date NOT NULL,
  `periode_fin` date NOT NULL,
  `compagnie` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experience_pros`
--

INSERT INTO `experience_pros` (`id`, `id_membre`, `periode_debut`, `periode_fin`, `compagnie`, `poste`) VALUES
(7, 2, '0000-00-00', '0000-00-00', 'zaeaezaeae', 'aezazaezaez'),
(8, 2, '0000-00-00', '0000-00-00', '', ''),
(9, 2, '0000-00-00', '0000-00-00', '', ''),
(10, 2, '0000-00-00', '0000-00-00', '', ''),
(11, 2, '0000-00-00', '0000-00-00', '', ''),
(12, 2, '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `fil_actus`
--

CREATE TABLE IF NOT EXISTS `fil_actus` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fil_actus`
--

INSERT INTO `fil_actus` (`id`, `id_membre`, `message`) VALUES
(1, 2, 'fil actu fil actu fil actu fil actu');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `ddn` date NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(150) NOT NULL,
  `phone` int(11) NOT NULL,
  `siteWeb` varchar(150) NOT NULL,
  `citation` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `id_membre`, `prenom`, `ddn`, `avatar`, `adresse`, `cp`, `ville`, `phone`, `siteWeb`, `citation`) VALUES
(3, 2, 'Chpé', '2016-01-22', '', 'isset', 404, 'Mysql', 123456789, 'www.portfolio.fr', 'ma citation blabla');

-- --------------------------------------------------------

--
-- Structure de la table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `ad_portfolio` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `portfolios`
--

INSERT INTO `portfolios` (`id`, `id_membre`, `ad_portfolio`) VALUES
(2, 2, 'www.portfolio.fr');

-- --------------------------------------------------------

--
-- Structure de la table `reseaux_divertissements`
--

CREATE TABLE IF NOT EXISTS `reseaux_divertissements` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `psn` varchar(255) NOT NULL,
  `xboxlive` varchar(255) NOT NULL,
  `steam` varchar(255) NOT NULL,
  `battlenet` varchar(255) NOT NULL,
  `compte_nintendo` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reseaux_divertissements`
--

INSERT INTO `reseaux_divertissements` (`id`, `id_membre`, `psn`, `xboxlive`, `steam`, `battlenet`, `compte_nintendo`, `origin`) VALUES
(2, 2, 'test', 'fil actu', 'fil actu', 'fil actu', 'fil actu', 'fil actu');

-- --------------------------------------------------------

--
-- Structure de la table `reseaux_pros`
--

CREATE TABLE IF NOT EXISTS `reseaux_pros` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `viadeo` varchar(255) NOT NULL,
  `xing` varchar(255) NOT NULL,
  `muxi` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reseaux_pros`
--

INSERT INTO `reseaux_pros` (`id`, `id_membre`, `linkedin`, `viadeo`, `xing`, `muxi`, `github`) VALUES
(2, 2, 'fil actu', 'fil actu', 'fil actu', 'fil actu', 'fil actu');

-- --------------------------------------------------------

--
-- Structure de la table `reseaux_socials`
--

CREATE TABLE IF NOT EXISTS `reseaux_socials` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reseaux_socials`
--

INSERT INTO `reseaux_socials` (`id`, `id_membre`, `facebook`, `twitter`, `youtube`, `google`, `skype`, `instagram`, `whatsapp`, `pinterest`, `deezer`, `spotify`, `viber`) VALUES
(2, 2, 'fil actu', 'fil actu', 'fil actu', 'fil actu', 'fil actu', 'fil actu', 'fil actu', 'fil actu', 'fil actu', 'fil actu', 'fil actu');

-- --------------------------------------------------------

--
-- Structure de la table `wusers`
--

CREATE TABLE IF NOT EXISTS `wusers` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `wusers`
--

INSERT INTO `wusers` (`id`, `nom`, `mail`, `mot_de_passe`, `role`) VALUES
(2, 'Péha', 'inscr@mail.com', '123', 'membre');

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
-- Index pour la table `membres`
--
ALTER TABLE `membres`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `experience_pros`
--
ALTER TABLE `experience_pros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `fil_actus`
--
ALTER TABLE `fil_actus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `reseaux_divertissements`
--
ALTER TABLE `reseaux_divertissements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `reseaux_pros`
--
ALTER TABLE `reseaux_pros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `reseaux_socials`
--
ALTER TABLE `reseaux_socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `wusers`
--
ALTER TABLE `wusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
