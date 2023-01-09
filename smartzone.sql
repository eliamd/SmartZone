-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 10 déc. 2022 à 17:15
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `smartzone`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` decimal(10,0) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `libele` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `descriptionlong` varchar(200) NOT NULL,
  `prixu` decimal(10,0) NOT NULL,
  `repimage` varchar(50) NOT NULL,
  `spce_data` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `5G` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `marque`, `libele`, `description`, `descriptionlong`, `prixu`, `repimage`, `spce_data`, `color`, `5G`) VALUES
('1', 'Apple', 'iPhone 14', 'L\'iphone a  la pointe de la technologie, un système photo pro amélioré avec son objectif principal 48 Mpx et son ultra grand-angle.', '', '999', '../content/img/1.png', '128', 'Bleu', 1),
('2', 'Apple', 'iPhone 10', 'Le nouveau téléphone de la marque apple', '', '499', '../content/img/iphone10.png', '128', 'Noir', 0),
('3', 'RealMe', 'C11 2022', '', '', '199', '../content/img/realmec11.png', '32', 'Gris', 1),
('4', 'Samsung', 'Galaxy S22 Ultra', '', '', '1149', '../content/img/s22u.png', '128', 'Noir', 1),
('5', 'Samsung', 'Galaxy Z Flip4', '', '', '1109', '../content/img/flip4.png', '128', 'Noir', 1),
('6', 'Samsung', 'Galaxy S22+', '', '', '1049', '../content/img/s22plus.png', '128', 'Noir', 1),
('7', 'Razer', 'Phone 1 5G', '', '', '799', '../content/img/razer.png', '256', 'Noir', 1),
('8', 'Oppo', 'Reno8', '', '', '599', '../content/img/reno8.png', '256', 'Noir', 0),
('9', 'Honor', 'Magic 4', '', '', '569', '../content/img/70.png', '128', 'Vert', 0),
('10', 'Apple', 'iPhone SE (3ème génération)', '', '', '559', '../content/img/se3.png', '64', 'Rouge', 0),
('11', 'Samsung', 'Galaxy A53 5G', '', '', '459', '../content/img/a53.png', '128', 'Noir', 1),
('12', 'CROSSACALL', 'Core M5', '', '', '349', '../content/img/cross.png', '32', 'Noir', 0);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `total_price` int(6) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `postal` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `total_price`, `phone`, `address`, `city`, `postal`, `status`) VALUES
(68, 1, '2022-12-07 08:52:11', 2298, '+33666980591', '455 Rue de l\'Industrie\n', 'Paris', '75009', 1),
(69, 1, '2022-12-07 08:53:50', 999, '+33666666666', '23 Rue Berger', 'Paris', '75001', 1),
(70, 1, '2022-12-07 09:16:33', 999, '+33666666666', '455 Rue de l\'Industrie', 'Montpellier', '34000', 1),
(71, 7, '2022-12-07 12:29:48', 999, '+33666666666', '35 Rue Jean-Baptiste-Estelle', 'Marseille', '13001', 1),
(72, 1, '2022-12-07 13:31:05', 999, '+33665356753', '6 Rue aux Moines', 'Le Havre', '76620', 1),
(73, 1, '2022-12-09 08:42:41', 999, '+33666666666', '32 Rue Louis le Grand', 'Paris', '75002', 1),
(74, 1, '2022-12-09 08:48:50', 3394, '+33666666666', '23 Rue Berger', 'Paris', '75001', 1),
(75, 1, '2022-12-09 09:32:29', 1497, '+33666666666', '45 Rue des Saints-Pères', 'Paris', '75006', 1),
(76, 1, '2022-12-09 15:43:30', 1507, '+33666666666', '43 Rue de Turbigo', 'Paris', '75003', 1),
(77, 8, '2022-12-09 15:45:39', 1998, '+33666666666', '43 Rue de la Haie Coq', 'Aubervilliers', '93300', 1);

-- --------------------------------------------------------

--
-- Structure de la table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(10) NOT NULL,
  `product_id` decimal(10,0) NOT NULL,
  `quantity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `order_items`
--

INSERT INTO `order_items` (`order_id`, `product_id`, `quantity`) VALUES
(68, '4', 2),
(69, '1', 1),
(70, '1', 1),
(71, '1', 1),
(72, '1', 1),
(73, '1', 1),
(74, '2', 1),
(74, '3', 3),
(74, '4', 2),
(75, '2', 3),
(76, '3', 2),
(76, '5', 1),
(77, '1', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_register` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nom`, `prenom`, `date_register`) VALUES
(1, 'eliam@zz.fr', '8a798890fe93817163b10b5f7bd2ca4d25d84c52739a645a889c173eee7d9d3d', 'detoh', 'eliam', '2022-11-16 14:28:49'),
(5, 'gabriel.maizieres@laposte.com', '9915149445dd867bac964d09e481f3773f9e1cccb2e77f222eacf49c78449e5d', 'maizieres', 'gabriel', '2022-11-18 08:07:24'),
(6, 'leo@gmail.fr', '8a798890fe93817163b10b5f7bd2ca4d25d84c52739a645a889c173eee7d9d3d', 'la', 'leo', '2022-11-18 08:22:28'),
(7, 'skinoz76yt@gmail.com', '1f0dea80a1af4eefa352c04bdaaa79f79433a7b458aaeaa927cb73ac9f63326a', 'Cauvin', 'Antoine', '2022-12-07 12:26:42'),
(8, 'eliam2@zz.fr', '8a798890fe93817163b10b5f7bd2ca4d25d84c52739a645a889c173eee7d9d3d', 'detoh', 'eliammmm', '2022-12-09 15:44:51');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `userpk` (`user_id`);

--
-- Index pour la table `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `orderpk` (`order_id`),
  ADD KEY `productpk` (`product_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `userpk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `orderpk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `productpk` FOREIGN KEY (`product_id`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
