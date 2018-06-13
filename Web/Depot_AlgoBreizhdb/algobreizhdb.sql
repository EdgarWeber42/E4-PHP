-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 22 mars 2018 à 16:05
-- Version du serveur :  10.2.13-MariaDB
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `algoBreizhdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_email` char(99) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `admin_pass` char(24) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_email`, `admin_pass`) VALUES
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_name` char(255) NOT NULL,
  `stock_available` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_category`
--

INSERT INTO `tbl_category` (`category_name`, `stock_available`, `category_id`) VALUES
('Conserves', 999999999, 1),
('laitue', 999999999, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_pass` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_sex` char(11) NOT NULL,
  `customer_phone` int(10) NOT NULL,
  `customer_address` char(100) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_pass`, `customer_email`, `customer_sex`, `customer_phone`, `customer_address`, `admin_id`) VALUES
(4, 'YALIN Can', 'projet', 'canyalin13@gmail.com', 'male', 677668013, '3 Rue Paul Bert', 1),
(5, 'michel', '1234', 'michel@algobreizh.bzh', 'male', 739562874, '3 rue des algues', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `status` char(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date_of_order` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tbl_order`
--

INSERT INTO `tbl_order` (`status`, `customer_id`, `date_of_order`, `quantity`, `product_id`, `order_id`) VALUES
('0', 4, '2018-02-27', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` char(255) NOT NULL,
  `payment_date` date NOT NULL,
  `order_id` int(11) NOT NULL,
  `bkash_transaction_No` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `reference` varchar(25) DEFAULT NULL,
  `stock_available` int(11) NOT NULL,
  `description` char(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `price`, `reference`, `stock_available`, `description`, `product_image`, `features`, `category_id`) VALUES
(1, 'chrondus crispus', 10, 'P1', 298578, '', 'chrondus-crispus.jpg', '', 0),
(2, 'Conserves', 8, 'P2', 248729, '', 'conserves.jpg', '', 1),
(3, 'Court bouillon', 12, 'P3', 1998, '', 'Court-bouillon.jpg', '', 1),
(4, 'Émietté de thon Wakamé', 10, 'P4', 40000, '', 'emiette-de-thon-wakame.jpg', '', 1),
(5, 'Épices marines', 9, 'P5', 100000, '', 'epices-marines.jpg', '', 1),
(6, 'Haricots de mer en saumure (500g)', 19, 'P6', 12000, '', 'haricot-de-mer-en-saumure-500-g.jpg', '', 0),
(7, 'Haricots marins', 12.5, 'P7', 2999, '', 'haricots-marins.jpg', '', 1),
(8, 'Laitue de mer en feuilles', 11.9, 'P8', 6480, '', 'laitue-de-mer-feuilles.jpeg', '', 2),
(9, 'Laitue de mer paillete', 18.5, 'P9', 9000, '', 'laitue-de-mer-paillete.jpeg', '', 2),
(10, 'Moutarde à la salicorne', 15.5, 'P10', 7830, '', 'moutarde-salicorne.jpg', '', 1),
(11, 'Nori en feuilles', 15.1, 'P11', 12994, '', 'nori-en-feuilles.jpg', '', 0),
(12, 'Nori paillette', 7.5, 'P12', 48924, '', 'nori-paillette.jpeg', '', 0),
(13, 'Nori saupoudreur aromate (10g)', 5, 'P13', 38476, '', 'nori-saupoudreur-aromate-10g.jpg', '', 0),
(14, 'Pates aux algues', 8, 'P14', 288344, '', 'pates-aux-algues.jpg', '', 0),
(15, 'Salicornes au naturel', 9.5, 'P15', 94734, '', 'salicornes_au_naturel.jpg', '', 0),
(16, 'Salicornes au vinaigre', 13.8, 'P16', 23474, '', 'salicornes_au_vinaigre.jpg', '', 1),
(17, 'Sels aux algues', 17, 'P17', 27482, '', 'sels-aux-algues.jpg', '', 0),
(18, 'Tisane aux algues', 7, 'P18', 28472, '', 'tisane-aux-algues.jpg', '', 0),
(19, 'Wakamé en feuilles', 5, 'P19', 24832, '', 'wakame_feuille.jpg', '', 0),
(20, 'Wakamé en paillettes', 8, 'P20', 347835, '', 'wakame-paillette.jpg', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_shopping_cart`
--

CREATE TABLE `tbl_shopping_cart` (
  `product_name` char(255) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tbl_shopping_cart`
--

INSERT INTO `tbl_shopping_cart` (`product_name`, `customer_id`, `quantity`, `product_id`, `img`) VALUES
(NULL, 4, 1, 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_transaction_numbers`
--

CREATE TABLE `tbl_transaction_numbers` (
  `status` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `transaction_number` int(11) NOT NULL,
  `date_added` date NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_transaction_numbers`
--

INSERT INTO `tbl_transaction_numbers` (`status`, `id`, `transaction_number`, `date_added`, `admin_id`) VALUES
(0, 1, 3333, '2018-03-06', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Index pour la table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Index pour la table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Index pour la table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `tbl_shopping_cart`
--
ALTER TABLE `tbl_shopping_cart`
  ADD PRIMARY KEY (`customer_id`);

--
-- Index pour la table `tbl_transaction_numbers`
--
ALTER TABLE `tbl_transaction_numbers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `tbl_shopping_cart`
--
ALTER TABLE `tbl_shopping_cart`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tbl_transaction_numbers`
--
ALTER TABLE `tbl_transaction_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
