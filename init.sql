-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 13 mars 2020 à 16:14
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boutique_ilot4`
--
CREATE DATABASE IF NOT EXISTS `boutique_jeremy`; 
USE `boutique_jeremy`;

-- --------------------------------------------------------

--
-- Structure de la table `chaussure`
--

DROP TABLE IF EXISTS `chaussure`;
CREATE TABLE IF NOT EXISTS `chaussure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `pointure` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chaussure`
--

INSERT INTO `chaussure` (`id`, `id_article`, `pointure`) VALUES
(1, 1, 44),
(2, 3, 42),
(3, 12, 32);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `pseudo`, `password`, `name`, `adress`, `postal_code`, `city`, `email`) VALUES
(1, '2020-02-18 16:28:03', '2020-02-18 16:28:03', 'Chuck Norris', 'derrière toi', 74200, 'Thonon les Bains', 'chucknono@bogoss.com'),
(2, '2020-02-18 16:28:03', '2020-02-18 16:28:03', 'Charlize Theron', 'Los Angeles, bitch', 54666, 'Los Angeles', 'Ronron@petitpatapon.fr'),
(4, 'hbrtgg', '$2y$10$2CcR.WMng0egvOoGceETRODnR0lN7J3KZYj6BwNRtjDRRG7JfnEcW', 'ezfzf zefzef', 'zefze', 200, 'ezfezf', 'ezf@erfergf.fr'),
(5, 'Jeremlebg', '$2y$10$J2kC5Q2TX/N/HHu3YIYIOuBGHdEb/SYMZIUbKzUyxkinTepkckmFG', 'Carruba Jérémy', 'Chez moi', 74200, 'Thonon zoo', 'tuconnais@hotmail.fr'),
(6, 'Jeremlegrosbg', '$2y$10$ss88n6ncSxn10IBzRZ8Xq.yWgN87vMi/Re01RR756jU7WbmCwTl4O', 'zefezf zefzef', 'zefze', 200, 'ezfezf', 'ezf@erfergf.fr');

-- --------------------------------------------------------

--
-- Structure de la table `format`
--

DROP TABLE IF EXISTS `format`;
CREATE TABLE IF NOT EXISTS `format` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `format`
--

INSERT INTO `format` (`id`, `type`) VALUES
(1, 'Long Play'),
(2, 'Extended Play'),
(3, 'Compact Disc'),
(4, 'MP3');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'House'),
(2, 'Techno'),
(4, 'Jazz');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_order` varchar(10) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `shipping_costs` int(11) DEFAULT NULL,
  `clients_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `fk_orders_clients1_idx` (`clients_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `num_order`, `total`, `date`, `shipping_costs`, `clients_id`) VALUES
(1, '11dc25rt33', 120, '2020-02-13', 5, 1),
(2, '16ra55jhtr', 1050, '2020-02-03', 5, 1),
(3, '56sh57yu22', 150, '2019-12-08', 5, 2),
(4, '81vd69rb22', 520, '2020-02-04', 5, 2),
(5, '94fs55hk22', 600, '2020-02-13', 5, 2),
(6, '11gt22gg22', 1000, '2020-02-13', NULL, 2),
(7, '15gd12et11', NULL, '2020-02-17', NULL, 1),
(25, 'bCnKsfTNlA', 178, '2020-02-18', 0, 2),
(26, '1G4hynfiBl', 178, '2020-02-18', 0, 2),
(27, '8urICUFlMH', 144, '2020-02-18', 0, 2),
(28, 'AW5rdQYhU7', 61, '2020-02-19', 6, 2),
(29, '3671aUevgq', 61, '2020-02-19', 6, 2),
(30, 'c81xGuspyO', 22, '2020-02-19', 2, 5),
(31, 'Fi8WRgzZuG', 211, '2020-02-19', 0, 5),
(32, 'yBnjfUFA6t', 211, '2020-02-19', 0, 5),
(33, 'cw3oksp7qv', 211, '2020-02-19', 0, 5),
(34, '3g4fA6EYdl', 211, '2020-02-19', 0, 5),
(35, 'H0yxXEaA6t', 111, '2020-02-19', 11, 5),
(36, 'kox9Lcts1a', 33, '2020-02-19', 3, 5),
(37, 'CLnyVMvUfE', 25, '2020-02-19', 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity_available` int(11) DEFAULT NULL,
  `in_sale` tinyint(4) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  `format_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `fk_products_categories1_idx` (`genre_id`),
  KEY `fk_products_format1_idx` (`format_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `artist`, `description`, `weight`, `price`, `image`, `quantity_available`, `in_sale`, `genre_id`, `format_id`) VALUES
(1, 'Peace Of Mind EP', 'Claro Intelecto', 'Electro sa mère', 1000, 100, '/tests/site_ilot4/media/covers/peaceofmind.jpg', 200, 1, 2, 2),
(2, 'Mercato', 'Imperial Tiger Orchestra', 'Jazz ethiopien chelou', 1000, 100, '/tests/site_ilot4/media/covers/mercato.jpg', 10, 1, 4, 1),
(3, 'New For U', 'Andrès', 'Sweet House my bruuh', 500, 11, '/tests/site_ilot4/media/covers/newforu.jpg', 1, 1, 1, 2),
(4, 'Overcome', 'Soul Capsule', 'Deep house t\'as vu', 500, 11, '/tests/site_ilot4/media/covers/overcome.jpg', 1, 1, 1, 2),
(5, 'Raw Cuts #5', 'MCDE', 'House cuts muy bueno', 500, 11, '/tests/site_ilot4/media/covers/rawcuts5.jpg', 1, 1, 1, 2),
(6, 'Vacuum EP', 'Floating Points', 'House de scientifique t\'as vu gars', 500, 11, '/tests/site_ilot4/media/covers/vacuum.jpg', 1, 1, 1, 2),
(7, 'Thirstin\'', 'Jack J', 'Summer deep house pour les ptites playa', 500, 14, '/tests/site_ilot4/media/covers/thirstin.jpg', 0, 1, 1, 2),
(8, 'Looking Forward To You', 'Jack J', 'Pareil ça c\'est vancouver playa', 500, 14, '/tests/site_ilot4/media/covers/lookingforward.jpg', 0, 1, 1, 2),
(9, 'Kind Of Blue', 'Miles Davis', 'Classics of the classics mamene', 1200, 50, '/tests/site_ilot4/media/covers/kindofblue.jpg', 2, 1, 4, 1),
(10, 'A Love Supreme', 'John Coltrane', 'Olala ça part en couille', 1200, 50, '/tests/site_ilot4/media/covers/lovesupreme.jpg', 2, 1, 4, 1),
(11, 'Round About Midnight', 'Miles Davis', NULL, 1200, 500, '/tests/site_ilot4/media/covers/aboutmidnight.jpg', 5, 1, 4, 3),
(12, 'Speak No Evil', 'Wayne Shorter', NULL, 1200, 500, '/tests/site_ilot4/media/covers/shorter.jpg', 5, 0, 4, 4),
(13, 'Quaristice', 'Autechre', NULL, 1200, 500, '/tests/site_ilot4/media/covers/quaristice.jpg', 5, 0, 2, 1),
(14, 'Brothers Yard EP', 'Kali', NULL, NULL, NULL, '/tests/site_ilot4/media/covers/kali.jpg', 50, 0, 2, NULL),
(26, 'Revolver', 'The Beatles', 'Meilleur album des Beatles', 200, 25, '/tests/site_ilot4/media/uploads/5e4a9c06202860.59167520.jpg', NULL, NULL, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `products_ordered`
--

DROP TABLE IF EXISTS `products_ordered`;
CREATE TABLE IF NOT EXISTS `products_ordered` (
  `id_orders` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  KEY `fk_commandes_has_produits_produits1_idx` (`id_products`),
  KEY `fk_commandes_has_produits_commandes1_idx` (`id_orders`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products_ordered`
--

INSERT INTO `products_ordered` (`id_orders`, `id_products`, `quantity`) VALUES
(1, 1, 1),
(1, 3, 2),
(2, 9, 1),
(2, 11, 2),
(3, 2, 1),
(3, 10, 1),
(5, 1, 1),
(5, 11, 1),
(4, 5, 3),
(4, 2, 3),
(4, 9, 3),
(7, 2, 3),
(7, 1, 5),
(7, 2, 2),
(25, 1, 1),
(25, 7, 1),
(25, 8, 1),
(25, 9, 1),
(26, 1, 1),
(26, 7, 1),
(26, 8, 1),
(26, 9, 1),
(27, 3, 4),
(27, 26, 4),
(28, 5, 1),
(28, 6, 1),
(28, 7, 1),
(28, 26, 1),
(29, 5, 1),
(29, 6, 1),
(29, 7, 1),
(29, 26, 1),
(30, 3, 1),
(30, 4, 1),
(31, 1, 1),
(31, 2, 1),
(31, 3, 1),
(32, 1, 1),
(32, 2, 1),
(32, 3, 1),
(33, 1, 1),
(33, 2, 1),
(33, 3, 1),
(34, 1, 1),
(34, 2, 1),
(34, 3, 1),
(35, 1, 1),
(35, 5, 1),
(36, 4, 1),
(36, 5, 1),
(36, 6, 1),
(37, 26, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vetement`
--

DROP TABLE IF EXISTS `vetement`;
CREATE TABLE IF NOT EXISTS `vetement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `taille` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vetement`
--

INSERT INTO `vetement` (`id`, `id_article`, `taille`) VALUES
(1, 10, 38),
(2, 6, 42),
(3, 26, 87),
(4, 11, 54);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chaussure`
--
ALTER TABLE `chaussure`
  ADD CONSTRAINT `chaussure_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_clients1` FOREIGN KEY (`clients_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categories1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`format_id`) REFERENCES `format` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `products_ordered`
--
ALTER TABLE `products_ordered`
  ADD CONSTRAINT `fk_commandes_has_produits_commandes1` FOREIGN KEY (`id_orders`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commandes_has_produits_produits1` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vetement`
--
ALTER TABLE `vetement`
  ADD CONSTRAINT `vetement_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
