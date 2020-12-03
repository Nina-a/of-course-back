-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 03 déc. 2020 à 12:41
-- Version du serveur :  8.0.22-0ubuntu0.20.04.3
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ofcourse`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `backgroundcolor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `title`, `backgroundcolor`) VALUES
(1, 'Entrée', '#121d1f\r\n'),
(2, 'Plat', '#f03aad\r\n'),
(3, 'Dessert', '#c00d6c\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20200928130921', '2020-09-28 13:09:30', 152);

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`id`, `name`, `unit`, `picture`) VALUES
(1, 'carotte', '', 'https://assets.afcdn.com/recipe/20170607/67370_w300h300c1.jpg'),
(2, 'navet', '', 'https://assets.afcdn.com/recipe/20170607/67703_w300h300c1.jpg'),
(3, 'farine', ' grammes', 'https://assets.afcdn.com/recipe/20170607/67682_w300h300c1.jpg'),
(4, 'poivron rouge', '', 'https://assets.afcdn.com/recipe/20170607/67754_w60h60c1cx350cy350.webp'),
(5, 'pomme', '', 'https://assets.afcdn.com/recipe/20170607/67365_w300h300c1.jpg'),
(6, 'poire', '', 'https://assets.afcdn.com/recipe/20170607/67498_w300h300c1.jpg'),
(7, 'huile', 'cuillére', 'https://assets.afcdn.com/recipe/20170607/67717_w60h60c1cx1777cy2231.webp'),
(8, 'lait', 'cl', 'https://assets.afcdn.com/recipe/20170607/67388_w300h300c1.jpg'),
(9, 'eau', 'cl', 'https://assets.afcdn.com/recipe/20170607/67528_w300h300c1.jpg'),
(10, 'sucre', 'gr', 'https://assets.afcdn.com/recipe/20170607/67691_w300h300c1.jpg'),
(11, 'sel', 'gr', NULL),
(12, 'poivre', 'gr', NULL),
(13, 'pomme de terre', '', NULL),
(14, 'beurre', 'gr', NULL),
(15, 'vinaigre', 'cl', NULL),
(16, 'maizena', 'cuillère', NULL),
(17, 'ail', 'gousse', 'https://assets.afcdn.com/recipe/20170607/67514_w60h60c1cx350cy350.webp'),
(18, 'amande', 'gr', NULL),
(19, 'olive verte', '', NULL),
(20, 'olive noire', '', NULL),
(21, 'cube bouillon', '', NULL),
(22, 'zestes de citron', '', NULL),
(23, 'citron', '', NULL),
(24, 'mayonnaise', 'cuillère', NULL),
(25, 'ketchup', '', NULL),
(26, 'raisin', 'gr', NULL),
(27, 'riz', 'gr', NULL),
(28, 'chocolat', 'gr', NULL),
(29, 'yaourt nature', '', NULL),
(30, 'fromage blanc', '', NULL),
(31, 'crème fraîche liquide', 'cl', NULL),
(32, 'piment', '', NULL),
(33, 'curcuma', 'gr', NULL),
(34, 'curry', 'gr', NULL),
(35, 'feuille de salade', '', NULL),
(36, 'salade', 'entière', NULL),
(37, 'wasabi', 'gr', NULL),
(38, 'saumon', 'filet', NULL),
(39, 'poulet entier', '', NULL),
(40, 'oignon', '', 'https://assets.afcdn.com/recipe/20170607/67621_w60h60c1cx350cy350.webp'),
(41, 'thym', '', 'https://assets.afcdn.com/recipe/20170607/67735_w60h60c1cx350cy350.webp'),
(42, 'oeuf(s)', '', 'https://assets.afcdn.com/recipe/20170607/67505_w60h60c1cx350cy350.webp'),
(43, 'jambon cru', 'tranche(s)', 'https://assets.afcdn.com/recipe/20170607/67670_w60h60c1cx350cy350.webp'),
(44, 'poivron vert', '', 'https://assets.afcdn.com/recipe/20180404/78364_w60h60c1cx3432cy3432.webp'),
(45, 'tomate', '', 'https://assets.afcdn.com/recipe/20170607/67459_w60h60c1cx350cy350.webp'),
(46, 'courgette', '', 'https://assets.afcdn.com/recipe/20170607/67437_w60h60c1cx350cy262.webp'),
(48, 'gruyère', 'gr', 'https://assets.afcdn.com/recipe/20170607/67500_w60h60c1cx350cy350.webp'),
(49, 'basilic', 'feuille(s)', 'https://assets.afcdn.com/recipe/20170607/67553_w60h60c1cx350cy350.webp'),
(50, 'épaule de veau', 'kg', 'https://assets.afcdn.com/recipe/20200306/108931_w60h60c1cx411cy411.png'),
(51, 'piment vert doux', '', 'https://assets.afcdn.com/recipe/20170607/67575_w60h60c1cx350cy350.webp'),
(52, 'levure chimique', 'g', 'https://assets.afcdn.com/recipe/20200117/106636_w60h60c1cx411cy411.png'),
(53, 'pate brisée', '', 'https://assets.afcdn.com/recipe/20200625/112227_w60h60c1cx1200cy1200.webp'),
(54, 'lardons', 'g', 'https://assets.afcdn.com/recipe/20170607/67383_w60h60c1cx350cy350.webp'),
(55, 'Muscade', '', 'https://assets.afcdn.com/recipe/20170607/67662_w60h60c1cx350cy350.webp'),
(56, 'pâtes Torti', 'g', NULL),
(57, 'Spaghetti', 'g', NULL),
(58, 'boeuf', 'gr', NULL),
(59, 'champignons', 'gr', NULL),
(60, 'vin rouge', 'cl', NULL),
(61, 'bouquet garni', '', NULL),
(62, 'mozarella', '', NULL),
(63, 'courgette', '', NULL),
(64, 'bouillon de volaille', 'tablette', NULL),
(65, 'sauté de porc', 'kg', NULL),
(66, 'vin blanc', 'cl', NULL),
(67, 'moutarde', 'cuillère', NULL),
(68, 'boudoirs', '', NULL),
(69, 'boite de poire au sirop', '', NULL),
(70, 'mais', 'gr', NULL),
(71, 'thon', 'gr', NULL),
(72, 'pain', 'tranches', NULL),
(73, 'laitue', 'feuille', NULL),
(74, 'persil haché', '', NULL),
(75, 'pate feuilletée', '', NULL),
(76, 'amande en poudre', 'gr', NULL),
(77, 'poireau', '', NULL),
(78, 'bouillon de légumes', '', NULL),
(79, 'persil', '', NULL),
(80, 'macédoine', 'gr', NULL),
(81, 'concombre', '', NULL),
(82, 'comté râpé', 'gr', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recipe`
--

CREATE TABLE `recipe` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serving` int DEFAULT NULL,
  `private` tinyint(1) NOT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recipe`
--

INSERT INTO `recipe` (`id`, `title`, `subtitle`, `description`, `picture`, `serving`, `private`, `user_id`) VALUES
(1, 'Piperade Basque', 'Selon nos informations, cette recette est compatible avec les régimes suivants : sans gluten, sans lactose\r\n', 'Laver, épépiner et détailler les tomates en quartiers et les poivrons en lamelles.\r\nHacher ensuite l’oignon et le plonger dans une poêle huilée pour le faire dorer avec les poivrons et les tomates.\r\nSaler, poivrer et laisser mijoter à feu doux.\r\nPendant ce temps, poêler les tranches de jambon de Bayonne, puis l’incorporer avec son jus de cuisson aux légumes.\r\nBattre les œufs en omelette, puis verser les œufs battus dans la poêle sur les légumes et cuire comme une omelette selon que vous l’aimez baveuse ou bien cuite.\r\nVous pouvez remplacer le jambon par du lard et faire cuire l’omelette nature pour la fourrer seulement ensuite avec les légumes.\r\nPréparation : 30 min\r\nCuisson : 25 min', 'https://assets.afcdn.com/recipe/20170404/63510_w1024h768c1cx2045cy2725.webp', 4, 0, NULL),
(2, 'Axoa de veau \r\n', '(Pays Basque)', 'Émincer l\'oignon et l\'ail.\r\nOter les pépins des piments et des poivrons et les trancher en petits dés.\r\nFaire revenir le tout dans l\'huile à la poêle dix bonnes minutes puis rajouter la viande coupée en morceaux, les herbes, le sel et le piment fort.\r\nFaire sauter le tout puis mouiller avec un verre d\'eau ou de bouillon.\r\nLaisser mijoter à couvert 45 ou 60 min.\r\nUne dizaine de minutes avant la fin de la cuisson ôter le couvercle pour que le jus accumulé s\'évapore.\r\nAccompagner ce plat de pommes de terre cuites ou bouillies.', 'https://assets.afcdn.com/recipe/20140814/55561_w1024h768c1cx994cy1731.webp', 6, 0, NULL),
(4, 'Brownie', 'c\'est croquant !', ' Faites fondre le chocolat cassé en morceaux avec le beurre.\r\nPendant ce temps, battez les oeufs avec le sucre jusqu\'à ce que le mélange blanchisse.\r\nAjoutez la farine, le sucre vanillé, et ajoutez le chocolat.\r\nVersez le tout dans un moule, et enfournez à 180°C (thermostat 6)pendant 15 min...\r\nEt voilà !', 'https://assets.afcdn.com/recipe/20161114/26634_w600.jpg', 4, 1, NULL),
(8, 'Madeleines', 'Pour une trentaine de pièces', 'Préchauffer le four à 240°C (thermostat 8).\r\nFaire fondre le beurre dans une casserole à feu doux, réserver.\r\nMélanger les oeufs avec le sucre, jusqu\'à ce que le mélange blanchisse.\r\nAjouter ensuite la fleur d\'oranger et 40 g de lait.\r\nAjouter la farine et la levure chimique.\r\nC\'est ensuite le tour du beurre et le restant du lait; laisser reposer 15 min.\r\nBeurrer les moules à madeleines et verser la préparation dedans (mais pas jusqu\'en haut, les madeleines vont gonfler !).\r\nEnfourner à 240°C (thermostat 8), et baisser au bout de 5 min à 200°C (thermostat 6-7); laisser encore 10 min. Surveiller bien la cuisson !\r\nDémouler dès la sortie du four.\r\nTemps Total : 45 min', 'https://assets.afcdn.com/recipe/20161128/3468_w600.jpg', 4, 1, NULL),
(9, 'quiche Lorraine', 'à partager en famille !', 'Préchauffer le four à 180°C (thermostat 6).\r\n\r\nEtaler la pâte dans un moule,\r\nla piquer à la fourchette. Parsemer de copeaux de beurre.\r\nFaire rissoler les lardons à la poêle.\r\nBattre les oeufs, la crème fraîche et le lait.\r\nAjouter les lardons.\r\nAssaisonner de sel, de poivre et de muscade.\r\nVerser sur la pâte.\r\nCuire 45 à 50 min.\r\nC\'est prêt\r\nDéguster', 'https://assets.afcdn.com/recipe/20180612/79546_w600.jpg', 4, 0, NULL),
(10, 'Pâtes à la \"carbonara\"', 'Miam !', 'Cuire les pâtes dans un grand volume d\'eau bouillante salée.\r\nEmincer les oignons et les faire revenir à la poêle. Dès qu\'ils ont bien dorés, y ajouter les lardons.\r\nPréparer dans un saladier la crème fraîche, les oeufs, le sel, le poivre et mélanger.\r\nRetirer les lardons du feu dès qu\'ils sont dorés et les ajouter à la crème.\r\nUne fois les pâtes cuite al dente, les égoutter et y incorporer la crème. Remettre sur le feu si le plat a refroidi.\r\nServir et bon appétit !\r\nVous pouvez également agrémenter votre plat avec des champignons.\r\nCuisson : 10 min', 'https://assets.afcdn.com/recipe/20120828/10062_w600.jpg', 4, 0, NULL),
(11, 'Boeuf Bourguignon', 'au Thermomix', 'Épluchez l’ail et les oignons. Coupez-les en petits morceaux. Égouttez les champignons.\r\nDans votre robot Thermomix, faites roussir la viande et les lardons avec le morceau de beurre 3 min / 120°C / vit. cuillère / sens inverse.\r\nAjoutez les oignons et les champignons. Saupoudrez de farine et mélangez. Faites dorer 3 min / 120°C / vit. cuillère / sens inverse.\r\nMouillez avec le vin rouge : il doit recouvrir la viande. Salez et poivrez. Ajoutez l’ail et le bouquet garni.\r\nFermez le robot et lancez la cuisson adéquate 45 min / 95°C / vit. cuillère / sens inverse.\r\n', 'https://assets.afcdn.com/recipe/20191031/101655_w1024h768c1cx1781cy1781.webp', 4, 0, NULL),
(12, 'Tomates Mozarella', 'Une bonne petite entrée', 'Découpez les tomates\r\nDécoupez la mozarella, et voilà !!', 'https://assets.afcdn.com/recipe/20160621/35676_w1024h768c1cx1872cy1872.webp', 2, 0, NULL),
(13, 'Velouté de courgette\r\n', 'Pour les longues soirée d\'hiver', 'Epluchez les courgettes, coupez les en morceaux et mettez les avec le beurre ou l\'huile d\'olive dans une casserole\r\nRajoutez le cube de bouillon et un verre d\'eau. Fermez et laissez cuire 10 mn à partie du sifflement.\r\nMixer le tout avec les trois cuillères à soupe de crème fraîche. Servir ce velouté bien chaud.', 'https://assets.afcdn.com/recipe/20140430/33326_w600.jpg', 6, 0, NULL),
(14, 'Gratin de pommes de terre fondant\r\n', 'trop bon !', 'Épluchez et coupez en fines rondelles les pommes de terre.\r\nFrottez le plat à gratin avec la gousse d\'ail.\r\nDisposez successivement les rondelles de pommes de terre, le gruyère râpé et la crème, salez et poivrez. Recommencez jusqu\'en haut du plat pour finir sur une couche de pommes de terre.\r\nAjoutez une noix de beurre.\r\nFaites cuire à 200°C (Thermostat 6) pendant 50 min puis 5 min à 240°C (Thermostat 8).\r\nDégustez aussitôt', 'https://assets.afcdn.com/recipe/20180123/77042_w600.jpg', 4, 0, NULL),
(15, 'Risotto', NULL, 'Émincer l\'oignon et le faire revenir dans 5 cuillères à soupe d\'huile d\'olive dans un fait tout.\r\nÉmincer la dinde et la faire dorer dans les oignons. Ajouter ensuite les champignons et la dosette de bouillon.\r\nAjouter le risotto et laisser le s\'imprégner du mélange pendant 1 à 2 minutes.\r\nNouer dans 50 cl d\'eau, couvrir et laisser réduire en remuant de temps en temps.\r\nUne fois que l\'eau est presque totalement absorbée, ajouter la crème et laisser réduire de nouveau.\r\nUne fois réduite, ajouter 25 cl d\'eau, et laisser réduire. Goûter le risotto, il faut qu\'il soit fondant. Si ce n\'est pas le cas, ajouter encore 25 cl d\'eau. Laisser réduire et renouveler l\'opération jusqu\'à ce qu\'il soit fondant.\r\nLorsque le risotto est fondant et crémeux (non liquide), ajouter la mozzarella en dès (ou le gruyère selon votre choix) et laisser fondre. Saler et poivrer.\r\nC\'est prêt.', 'https://assets.afcdn.com/recipe/20200831/113415_w600.jpg', 4, 0, NULL),
(16, 'Sauté de porc à la crème de moutarde\r\n', 'Servir avec des pommes de terres sautées ou des pâtes fraîches.', 'Dans une poêle, faites revenir les morceaux de sauté de porc avec l\'huile d\'olive.\r\nPendant ce temps, éplucher les carottes et les couper en petites rondelles, émincer les oignons, puis faites les revenir dans la cocotte minute.\r\nUne fois qu\'ils commencent à dorer, ajouter l\'eau et le vin blanc, puis le sauté de porc.\r\nRefermer la cocotte et laisser cuire 25 min a partir du moment où la vapeur s\'échappe.\r\nRetirer le sauté de porc de la cocotte puis ajouter la moutarde et la crème épaisse. Bien mélanger le tout.\r\nAjouter doucement la faine et remuer pour faire épaissir la sauce.\r\nRemettre le sauté de porc et couvrir 5 min pour que la viande s\'imprègne de la sauce.', 'https://assets.afcdn.com/recipe/20180712/80926_w600.jpg', 4, 1, NULL),
(28, 'Charlotte facile poire chocolat', NULL, 'Au moins 3 heures à l\'avance, préparez la mousse au chocolat : Faites fondre le chocolat avec 4 cuillères à soupe d\'eau.\r\nMélangez énergiquement le chocolat fondu et les jaunes d\'oeufs.\r\nBattez les blancs des oeufs en neige avec la pincée de sel. Incorporez les blancs à la préparation.\r\nLaissez la mousse au chocolat pendant 3 h au réfrigérateur.\r\nQuand la mousse au chocolat est prête, trempez les boudoirs dans le sirop des poires et mettez les dans le moule à charlotte.\r\nAlternez une couche de poires, de mousse au chocolat et de biscuits imbibés.\r\nPlacez au réfrigérateur au minimum 3 h.', 'https://assets.afcdn.com/recipe/20131224/5767_w600.jpg', 6, 0, 60),
(29, 'Salade de riz d\'été', NULL, 'Cuire le riz à l\'eau bouillante salée.\r\nUne fois cuit, le rincer à l\'eau froide pour enlever l\'amidon.\r\nQuand le riz est froid, ajouter les oeufs coupés en lamelles, les tomates en dés, les olives, le maïs et le thon en miettes.\r\nRéserver au réfrigérateur puis servir frais.', 'https://assets.afcdn.com/recipe/20190704/94664_w600.jpg', 4, 0, 69),
(30, 'Bruschetta (Italie)', NULL, 'Découper les tomates en petits dés après avoir retiré la partie verte en haut, les mettre dans un petit saladier avec une bonne huile d\'olive et du sel.\r\nFaire griller les tranches de pain de campagne, puis les frotter d\'ail.\r\nDisposer le mélange tomate/huile d\'olive généreusement sur la tartine, à déguster aussitôt (tiède).', 'https://assets.afcdn.com/recipe/20170112/42222_w600.jpg', 4, 0, 8),
(31, 'Cake aux olives', NULL, 'Préchauffer le four à Th 6 (180°C).\r\nEntretemps, mélanger la farine et les oeufs jusqu\'à obtenir un mélange onctueux. Ajouter l\'huile et l\'équivalent d\'1 verre de vin blanc sec.\r\nEgoutter les olives, les fariner légèrement et les incorporer à la pâte.\r\nAjouter le jambon, bien malaxer et verser le gruyère râpé et la levure; bien poivrer, mais ne pas saler à cause du jambon!\r\nBeurrer un moule à cake, y verser la pâte jusqu\'aux 2/3.\r\nEnfourner le cake pendant 50 min à Th 6 (180°C).\r\nSi le dessus du cake prend une teinte dorée trop rapidement, le couvrir d\'une feuille de papier alu et le laisser cuire ainsi.', 'https://assets.afcdn.com/recipe/20150521/6678_w600.jpg', 6, 0, 6),
(32, 'Oeufs mimosa', NULL, 'Faire cuire les oeufs 10 mn dans l\'eau bouillante, puis les mettre dans l\'eau froide pour arrêter la cuisson.\r\nMonter une mayonnaise avec 1 jaune d\'oeuf, 1 cuillère à café de moutarde, 1/4 l d\'huile et du jus de citron (facultatif), ou utiliser une mayonnaise prête vendue dans le commerce. Le jus de citron s\'ajoute au dernier moment.\r\nEcaler les oeufs, les couper dans le sens de la longueur, puis Séparer les blancs des jaunes.\r\nDans une assiette creuse, émietter les jaunes à la fourchette, mélanger la moitié de ces jaunes émiettés avec la mayonnaise et réserver le reste.\r\nRemplir les demi-blancs de cette préparation, puis saupoudrer chaque demi-oeuf du reste de jaunes émiettés (ce qui fait le mimosa !!).\r\nDisposer les oeufs sur des feuilles de laitue, mettre sur chaque oeuf un peu de persil et une olive noire.\r\nServir frais.', 'https://assets.afcdn.com/recipe/20111114/36229_w600.jpg', 4, 0, 16),
(33, 'Tarte pommes, amandes et chocolat', NULL, 'Préchauffer le four à 220° (th 6/7).\r\nDans un saladier, mélanger le beurre ramolli, la poudre d\'amandes et le sucre, jusqu\'à obtenir un mélange lisse.\r\nAjouter les 2 oeufs et mélanger.\r\nFaire fondre 100 g de chocolat, et napper le fond de tarte avec.\r\nRecouvrir le chocolat avec le mélange à base d\'amandes.\r\nEplucher et couper les pommes en petits dés, et les disposer sur la tarte.\r\nPour décorer, avec le reste de chocolat on peut faire des pépites avec l\'aide d\'un couteau et les disposer sur la tarte.\r\nMettre au four et laisser cuire 25 min.', 'https://assets.afcdn.com/recipe/20150315/8671_w600.jpg', 8, 0, 8),
(34, 'cake au thon', NULL, '1- Mélanger tous les ingrédients en intégrant le thon et le gruyère en dernier.\r\n2- Mettre dans un moule à cake beurré et fariné.\r\n3- Faire cuire 40/45 mn au four thermostat 6-7.', 'https://assets.afcdn.com/recipe/20200218/107819_w600.jpg', 4, 1, 6),
(36, 'soupe poireaux et pomme de terre', NULL, 'Bien nettoyer le poireau et le couper en rondelles, mettre aussi les tiges vertes qui ont l\'air tendres, ne pas mettre les plus vieilles.\r\nEplucher les pommes de terre et les couper en 4.\r\nCouper l\'oignon en 4.\r\nMettre le bouillon de légumes dans l\'eau froide et ajouter les légumes.\r\nFaites bouillir, couvrez et laissez cuire 1 bonne heure.\r\nMixez le tout, salez et poivrez.\r\nHachez grossièrement le persil et ajoutez-le. Laissez encore cuire 5 min à feu doux.\r\nBon appétit !!', 'https://assets.afcdn.com/recipe/20200116/106602_w600.jpg', 4, 1, 6),
(37, 'Pâté macédoine', NULL, 'Battre les oeufs et mélanger avec le reste des ingrédients.\r\nBeurrer et fariner un moule à cake. Verser le tout dedans.\r\nCuire au four, 180°C, pendant 30 à 40 mn selon les fours. Surveiller la cuisson.', 'https://assets.afcdn.com/recipe/20100120/53607_w600.jpg', 4, 1, 7),
(38, 'Gâteau au yaourt', NULL, 'Préchauffer le four à 180°C (thermostat 6).\r\n\r\nMélanger tout simplement les ingrédients un à un en suivant l\'ordre suivant : levure,\r\nyaourt\r\nhuile\r\nsucre\r\nfarine\r\noeuf et zeste\r\nBeurrer un moule à manqué et y verser la pâte.\r\nEnfourner pour environ 30 minutes de cuisson.\r\nVérifier la cuisson avec la pointe d\'un couteau (elle doit ressortir sèche).', 'https://assets.afcdn.com/recipe/20200828/113345_w600.jpg', 4, 1, 8),
(39, 'Gâteau au chocolat fondant', NULL, 'Préchauffez votre four à 180°C (thermostat 6).\r\nDans une casserole, faites fondre le chocolat et le beurre coupé en morceaux à feu très doux.\r\nDans un saladier, ajoutez le sucre, les oeufs, la farine. Mélangez.\r\nAjoutez le mélange chocolat/beurre. Mélangez bien.\r\nBeurrez et farinez votre moule puis y versez la pâte à gâteau.\r\nFaites cuire au four environ 20 minutes.\r\nA la sortie du four le gâteau ne paraît pas assez cuit. C\'est normal, laissez-le refroidir puis démoulez- le.', 'https://assets.afcdn.com/recipe/20190529/93106_w600.jpg', 6, 1, 11),
(40, 'Cookies maison', NULL, 'Détailler le chocolat en pépites.\r\nPréchauffer le four à 180°C (thermostat 6).\r\nDans un saladier, mettre 75 g de beurre, le sucre, l\'oeuf entier, la vanille et mélanger le tout.\r\nAjouter petit à petit la farine mélangée à la levure, le sel et le chocolat.\r\nBeurrer une plaque allant au four et former les cookies sur la plaque.\r\nPour former les cookies, utiliser 2 cuillères à soupe et faire des petits tas espacés les uns des autres; ils grandiront à la cuisson.\r\nEnfourner pour 10 minutes de cuisson.', 'https://assets.afcdn.com/recipe/20190529/93153_w600.jpg', 4, 1, 8),
(41, 'Mousse au chocolat', NULL, 'Séparer les blancs des jaunes d\'oeufs.\r\nFaire ramollir le chocolat dans une casserole au bain-marie.\r\nHors du feu, incorporer les jaunes et le sucre.\r\nBattre les blancs en neige ferme.\r\nAjouter délicatement les blancs au mélange à l\'aide d\'une spatule.\r\nVerser dans une terrine ou des verrines.\r\nMettre au frais 2h minimum.\r\nDécorer de cacao ou de chocolat râpé\r\nDéguster', 'https://assets.afcdn.com/recipe/20160624/25620_w600.jpg', 4, 1, 6),
(42, 'Flan de courgettes', NULL, 'Couper les courgettes en très fines rondelles. Les faire revenir dans de l\'huile d\'olive. Saler, poivrer, cuire environ 10 mm à petit feu.\r\nBattre les oeufs et ajouter le fromage + sel + poivre + basilic + lait.\r\nJeter la préparation sur les courgettes. Remuer. NE PAS FAIRE PRENDRE \"L\'OMELETTE\".\r\nMettre au four 180°C pendant 35 mn.\r\nSERVIR FROID OU CHAUD avec une sauce mayonnaise + ketchup hot.', 'https://assets.afcdn.com/recipe/20190529/93196_w600.jpg', 6, 1, 26),
(43, 'Gaspacho', NULL, 'Couper les tomates, 1 poivron vert et un rouge, 1 concombre, l\'oignon et l\'ail, passer le tout au mixer.\r\nAjouter le pain de mie, mixer une nouvelle fois.\r\nAssaisonner avec sel,poivre, 4 cuillères à soupe d\'huile d\'olive, 2 cuillères à soupe de vinaigre de Xérès et de piment (selon les goûts).\r\nLaisser reposer au frais au minimum 2 heures.\r\nDétailler en petits dés poivrons et concombre restants ainsi que les oignons nouveaux. Ecraser les oeufs durs à la fourchette. Parsemer la soupe de basilic ciselé.\r\nDisposer les garnitures dans des ramequins et chacun accommodera son gaspacho selon ses goûts.', 'https://assets.afcdn.com/recipe/20130823/35057_w600.jpg', 6, 1, 31),
(44, 'Soupe à l\'oignon', NULL, 'Pelez et émincez les oignons.\r\nFaites-les revenir dans le mélange beurre et huile jusqu\'à ce qu\'ils soient tendres et légèrement dorés.\r\nSaupoudrez le mélange de farine, mouillez d\'eau chaude et de vin blanc et assaisonnez.\r\nCouvrez et laissez bouillonner doucement pendant 20 minutes.\r\nFaites grillez le pain.\r\nDisposez chaque tranche dans le fond de 4 petits bols individuels supportant le passage au four.\r\nSaupoudrez d\'un peu de fromage râpé. Versez la soupe par-dessus.\r\nSaupoudrez à nouveau de fromage et faites gratiner.', 'https://assets.afcdn.com/recipe/20160401/30155_w600.jpg', 4, 1, 10);

-- --------------------------------------------------------

--
-- Structure de la table `recipe_category`
--

CREATE TABLE `recipe_category` (
  `recipe_id` int NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recipe_category`
--

INSERT INTO `recipe_category` (`recipe_id`, `category_id`) VALUES
(1, 2),
(2, 2),
(4, 3),
(8, 3),
(9, 1),
(10, 2),
(11, 2),
(12, 1),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(28, 3),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 3),
(34, 1),
(36, 1),
(37, 1),
(38, 3),
(39, 3),
(40, 3),
(41, 3),
(42, 1),
(43, 1),
(44, 1);

-- --------------------------------------------------------

--
-- Structure de la table `recipe_ingredient`
--

CREATE TABLE `recipe_ingredient` (
  `id` int NOT NULL,
  `recipe_id` int DEFAULT NULL,
  `ingredient_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recipe_ingredient`
--

INSERT INTO `recipe_ingredient` (`id`, `recipe_id`, `ingredient_id`, `quantity`) VALUES
(1, 4, 31, 1),
(2, 4, 14, 100),
(3, 8, 42, 3),
(4, 8, 10, 150),
(5, 8, 3, 200),
(6, 8, 52, 8),
(7, 8, 14, 100),
(8, 8, 8, 100),
(9, NULL, NULL, NULL),
(10, 9, 12, NULL),
(11, 9, 53, 1),
(12, 9, 54, 200),
(13, 9, 14, 30),
(14, 9, 42, 3),
(15, 9, 31, 20),
(16, 9, 55, NULL),
(17, 9, 11, NULL),
(18, 10, 57, 500),
(19, 10, 31, 50),
(20, 10, 42, 3),
(21, 10, 11, NULL),
(22, 10, 12, NULL),
(23, 10, 54, 250),
(24, 10, 40, 1),
(25, 11, 58, 800),
(26, 11, 54, 100),
(27, 2, 17, 1),
(28, 11, 40, 2),
(29, 11, 59, 250),
(30, 11, 60, 25),
(31, 11, 61, 1),
(32, 11, 3, 10),
(33, 11, 14, 50),
(34, 2, 11, NULL),
(35, 2, 12, NULL),
(36, 12, 45, NULL),
(37, 12, 62, NULL),
(57, 15, 31, 30),
(58, 15, 27, 1),
(59, 16, 65, 1),
(60, 16, 40, 2),
(61, 16, 1, 3),
(62, 16, 14, 30),
(63, 16, 7, 2),
(64, 16, 66, 25),
(65, 16, 9, 25),
(66, 16, 31, 20),
(67, 16, 67, 2),
(68, 16, 3, 2),
(69, 28, 28, 200),
(70, 28, 42, 6),
(71, 28, 11, NULL),
(72, 28, 68, 30),
(73, 28, 69, 1),
(74, 29, 27, 500),
(75, 29, 45, 2),
(76, 29, 7, 2),
(77, 29, 42, 2),
(78, 29, 70, 300),
(79, 29, 12, NULL),
(80, 29, 11, NULL),
(81, 29, 71, 200),
(87, 31, 3, 250),
(88, 31, 42, 4),
(89, 31, 19, 200),
(90, 31, 43, 200),
(91, 31, 48, 150),
(92, 31, 12, NULL),
(93, 31, 14, NULL),
(94, 32, 42, 4),
(95, 32, 24, NULL),
(96, 32, 73, NULL),
(97, 32, 74, NULL),
(98, 32, 20, NULL),
(99, 32, 67, NULL),
(100, 32, 7, NULL),
(101, 32, 12, NULL),
(102, 32, 11, NULL),
(103, 33, 75, NULL),
(104, 33, 5, 3),
(105, 33, 28, 120),
(106, 33, 42, 2),
(107, 33, 14, 100),
(108, 33, 76, 100),
(109, 33, 10, 100),
(110, 34, 48, 100),
(111, 34, 71, 200),
(112, 34, 3, 100),
(113, 34, 52, 1),
(114, 34, 42, 3),
(115, 34, 8, 8),
(116, 34, 7, 10),
(117, 34, 12, NULL),
(118, 36, 77, 1),
(119, 36, 13, 2),
(120, 36, 40, 1),
(121, 36, 78, 1),
(122, 36, 12, NULL),
(123, 36, 11, NULL),
(124, 36, 9, 150),
(125, 36, 79, NULL),
(126, 37, 42, 4),
(127, 37, 31, 20),
(128, 37, 71, 200),
(129, 37, 80, 400),
(130, 37, 48, 90),
(131, 37, 12, NULL),
(132, 37, 11, NULL),
(133, 37, 79, NULL),
(134, 38, 52, 1),
(135, 38, 29, 1),
(136, 38, 10, 100),
(137, 38, 7, 5),
(138, 38, 3, 100),
(139, 38, 42, 2),
(140, 39, 28, 200),
(141, 39, 14, 100),
(142, 39, 42, 3),
(143, 39, 3, 50),
(144, 39, 10, 100),
(145, 40, 14, 85),
(146, 40, 42, 1),
(147, 40, 10, 85),
(148, 40, 3, 150),
(149, 40, 28, 100),
(150, 40, 52, 1),
(151, 41, 42, 3),
(152, 41, 28, 100),
(153, 41, 10, 25),
(154, 42, 46, 3),
(155, 42, 48, 200),
(156, 42, 8, 20),
(157, 42, 42, 6),
(158, 42, 49, 20),
(159, 43, 45, 9),
(160, 43, 4, 2),
(161, 43, 44, 2),
(162, 43, 81, 2),
(163, 43, 40, 1),
(164, 43, 42, 2),
(165, 43, 49, NULL),
(166, 43, 7, NULL),
(167, 43, 12, NULL),
(168, 43, 32, NULL),
(169, 43, 11, NULL),
(170, 44, 40, 4),
(171, 44, 14, 50),
(172, 44, 7, NULL),
(173, 44, 3, 20),
(174, 44, 66, 25),
(175, 44, 9, 100),
(176, 44, 82, 100),
(177, 44, 11, NULL),
(178, 44, 12, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `avatar`, `pseudo`, `role`) VALUES
(1, 'Michel', 'maurice@free.com', 'maurice', 'https://lorempixel.com/200/200/?69748', 'mauricedu14', 'user'),
(2, 'Michel', 'maurice@free.com', 'maurice', 'https://lorempixel.com/200/200/?69748', 'mauricedu14', 'user'),
(3, 'Michel', 'maurice@free.com', 'maurice', 'https://lorempixel.com/200/200/?69748', 'mauricedu14', 'user'),
(4, 'Michel', 'maurice@free.com', 'maurice', 'https://lorempixel.com/200/200/?69748', 'mauricedu14', 'user'),
(5, 'poulet à la crème', 'poulet@poulet', 'poulet', 'https://lorempixel.com/200/200/?69748', 'moi', 'user'),
(6, 'Nina', 'nina@free.fr', '$2y$13$UB2XLkCozxuqY42ACHyp3.HU9S9O98v4k/1kbwkX91QxGgRblGBwK', NULL, 'Nina', NULL),
(7, 'laura', 'laura@freee.fr', '$argon2id$v=19$m=65536,t=4,p=1$qQKOMo5iXm/L5ixsgKiR1Q$+WSaL9GAomYjQwRgDbqtUGTVlYyQtX7m4dSY0pdIcSA', NULL, 'laura', 'user'),
(8, 'laura', 'laura@freee.fr', '$argon2id$v=19$m=65536,t=4,p=1$h43UoxBlljs6XV/cZcdsdQ$IvW34PDBR/4a62Uh4qumMmlDUQXYOgcX7+j2ERke67c', NULL, '', 'user'),
(9, 'laura', 'laura@freee.fr', '$argon2id$v=19$m=65536,t=4,p=1$NOHP3ggLLbekPigO56QPZg$/Aszzp7TL2qK/U7Asen0ilqqMJc+yltmFvMpX9vwxws', NULL, '', 'user'),
(10, 'tretert', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$JANXubKVHN9k9Tg92harBQ$psi1mhSzVMw21NuWKuXQv4+7pJdJeCcNnfeKN96ZHWo', NULL, '', 'user'),
(11, 'tretert', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$yx1bmYk6YZyNnoqHo7YJKA$BmmLHdJuBSFlVCGWt98b8UjOUFoBGKDJW5Ai54VKClw', NULL, '', 'user'),
(12, 'tretert', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$L8UQdXJfynBIJk68mq6RkA$SsvJPPQZ8VuTsPnS3TgxSLpXUXtxdNauNZdLvwEKO4w', NULL, 'dzaddzazad', 'user'),
(13, 'tretert', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$UcZdKJa3r11OptYG602GQw$j9641v77esiO3pocoqdG8pGpoLYP+LwAn6VA1OOv1iY', NULL, '', 'user'),
(14, 'tretert', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$dkNI6ZTZYDtAF7nFlSpblw$6j7UUd7xjbFeemoUWAYm7doKIkZlay8+SoYZs6gClfg', NULL, 'eazeazeae', 'user'),
(15, 'tretert', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$vYVrvGpldYu71fiEBV+I3w$k9F3iUUwpAfli3CCjcazZHE7DEw4MJ2PEoebWS23MuE', NULL, '', 'user'),
(16, 'tretert', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$rlF+IDi6sA2zRhg82QfScw$ybyN0abN85naWd6814mdvPJdMWMAwPbouxuOFace53Y', NULL, 'aaaaaaaaaa', 'user'),
(17, 'aurore', 'aurore@email.fr', '$argon2id$v=19$m=65536,t=4,p=1$SNawUH0uE2RJK/oPcrEc7Q$49gETKlIyYxePbRUETbz6Vof3SMYrbxej2KuFfOGHEA', NULL, 'dqdsd', 'user'),
(18, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$HBks9msoVDMaY4E88O6Iuw$w9U6f5cuf7Bq2mR4t9htJtbXCNQPCdpcLXVJM8W4ZgU', NULL, 'adda', 'user'),
(19, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$3WnWA0wNM/g6I7/1WeH+bQ$xHsn0scrP6IcY1CNh2gg7M3rvSUYzP86V4y5cAXokA8', NULL, 'adda', 'user'),
(20, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$RWyHUnwG+r8iayYzvjd7aw$64vLyangDvoU+7dk0YIPYngFLRuEqoFG9jbx8Gcy72M', NULL, 'adda', 'user'),
(21, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$7RpQCOTQNIetO84ol9pGEg$Lw1aI41wmh7RI7+0hgzZkYiwc/DEUJlawd4j/TzbSKc', NULL, 'adda', 'user'),
(22, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$oyrNx4cHX9L9yHNJR3yaqw$LJhUmyHWYm3IqMLlmDCzFXJgn9QNOobs3j47noCKYbg', NULL, 'adda', 'user'),
(23, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$aVd5R9QL347jetL7+30o0g$JpV+bqctLPnLwZ9qKrX3qX/T4EcJh/EMDuCZ70/1Nxs', NULL, 'adda', 'user'),
(24, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$DNP4H5WR3qgZ17hQNYm7xw$QzBnI+Nu57jKpCyqYv2DIyKkYDYmEpSUo0fQmilgTq8', NULL, 'adda', 'user'),
(25, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$Y3+qZb1ZQDBUmUdMFvb68A$QFdOnD92cacg4Ob8t0/GIbuYjRUxX10A8Ua/B54u8G8', NULL, 'adda', 'user'),
(26, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$/M6mFxe7ggnQ9TbCVZlGmQ$6st1EQ25hL+46IJ9gXiQR+me8WM8FJaLrG7Wk2GfC6I', NULL, 'adda', 'user'),
(27, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$eZQACYQqMl9MqbVSJtsCAQ$AF75tbP5YS3cq005CqBJILNW4blGydXvM6BZY8m8Czo', NULL, 'adda', 'user'),
(28, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$Hhvw4g8TjSc2q4DnwiBVKg$r0UjYhy5YDwLH/dA5NOP0M0aMN8Pg4gf2QFcYhYuFPQ', NULL, 'adda', 'user'),
(29, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$ng8G1Bw1NVZ16YdvetAStg$+Pqvtbo2PBKG6TxA/O17548igyZ14C95xm1gHu/sZxA', NULL, 'adda', 'user'),
(30, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$Smzj32HrjueHcOfnP/Zu8Q$L5UlsN9Vx1bgpwfjrmMYdeVBw9UqTM+pV5QEZRCtmBA', NULL, 'adda', 'user'),
(31, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$awBm2njdkB8hkt8WNTItqA$6hE5PIvq9gk+PIidUXce3PdKafVbvhD6R1L48ecpL2s', NULL, 'adda', 'user'),
(32, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$AnwT0mDow0ZgfPF06WI7rw$37PonXDAzE3kzXsKeLk0TFm2kNkE5qoZQ+2ZuaG9B5Y', NULL, 'adda', 'user'),
(33, 'adaas', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$bUV4SHMKEEyq4jrKRhPWSA$QpJu4+zw0AtmGdnqfLtMppqd1Gf7EYjMR6OUGHogOCU', NULL, 'adda', 'user'),
(34, 'afafa', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$0xi4UDGZB+5z/P1Cry0/2w$QRClsHgEYmQ6GB14GIRnrOZ01rFBBf9ZLAly8KSRAuc', 'C:\\fakepath\\home-bg.jpg', 'fafafa', 'user'),
(35, 'cdcdcd', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$aVWLE6cFif4PEx7vze1TNA$wDwavFJEM/Pn7DPMXsh0DBn1U9H/jiNhYwVA4OUONzE', '5f7f0ce9c454f.', 'cdcdcd', 'user'),
(36, 'sdsdzsd', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$laTEmkhGxVmMYPAQ5dTdYQ$P+Q3Yx8wzIOHtkHG/WAz9/Rwja506E7BYZUpSTbmHEs', '5f7f0ea11f1db.', 'sdsdsdzs', 'user'),
(37, 'sdsdzsd', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$DTu66Yh4GaCd9SkcrVE2/g$JtIPwAh/n7MVlvHugtWbLO+Q6Og06r49jERhoDuSrow', '5f7f0eb744607.', 'sdsdsdzs', 'user'),
(38, 'sdsdzsd', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$f2U/jJZbN79PaUUY1043Dw$gfFzCbJVVk7pIkXJF1peNhXt4EgEwmCpesf0j1K01jo', '5f7f0ec133537.', 'sdsdsdzs', 'user'),
(39, 'cxdcdcd', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$fm4n/RPb4oPvJIenDdPFqg$TucDmx06I3Fmf3ulsHDxNKVxSg4u1zwuSU6fcajO31Q', '5f7f1259782df.', 'cdcdcdc', 'user'),
(40, 'fayet', 'aurore@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$FWXsYf608JSpQQb5qBTB8g$6OZqbZ/XsJQUA6e1t7TCACHk4VCLxrwuceAP76gS9/Y', '5f800f2ae0528.', 'afayet', 'user'),
(41, 'fayet', 'aurore@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$sg4brmgoN84QMJg14LFr4w$I/KSzzBcKm7DuLlBUgPI2mn5jpFyEx5R+OUF4VKNsiI', '5f800f2d059fc.', 'afayet', 'user'),
(42, 'acideman', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$u6WE6+nzE7tltxdp/CwWLA$eoRMyfEkSkztmivTrdVjSb/mI61N0dBqxewakf0QktY', '5f803dc4bcebb.', 'acideman', 'user'),
(43, 'acideman', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$zHp19mQvipC6YAbAMCc/2Q$TNOlxnw38Psqdwt5Zw2Ft0f8gPMcFuI6VRMKmsBkRHQ', '5f803e427ff4a.', 'acideman', 'user'),
(44, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$bmDBub8zAIix1eL0sIPohw$dQzpZS01j5bXVDX6I9VsCiY4NbWO/cBvf4fMNgMEfFI', '5f803ed727e66.', 'Nina', 'user'),
(45, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$v27PDMEb5EdveKg9FerFvg$mM0r/xn/ny/okvFI5osFQ1RhItEixs9Mu3WvPfPnUN4', '5f803eec2d466.', 'Nina', 'user'),
(46, 'acidman', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$f5WimhtPEGiFiCD9HADorg$pbJMTON9JFMa3ieS07ovZxep3N0/PoUUjKm4fJ4Ljsc', '5f804b75b05d0.', 'acidman', 'user'),
(47, 'acidman', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$HBgKR+o3/OKTm6WH2CT7QQ$d6bIUjFCyRKmv4mofjNcqDFPaz+OdVPsUKoTAZRF2Ag', '5f804b78d2167.', 'acidman', 'user'),
(48, 'acidman', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$yOVXL345BKpzHDs3G6hUxw$DW7vuCTpwMQUSuEaTe8nug8Qreg/2UtGOn2OHW/SSq4', '5f804b9caabdb.', 'acidman', 'user'),
(49, 'acidman', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$gEzYSHR8SdUttEl0h/1bZg$K7s/qZ0AkO8ZDaUaKAhjet3jGtFEom5t/3gmz5Xidy8', '5f804bf6a972c.', 'acidman', 'user'),
(50, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$kaENFpyxWPxJF+dtEzkVUQ$Sd7WugTFd2OWj41vdGY2peZ6xoasbvKwuAvNC72j/kU', '5f804d7fc4525.', 'Nina', 'user'),
(51, 'nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$BHVvf0+gIo29yKrSoJgRrA$1FZ52jN2W2AtNKJ9Jl2Fh76MnMHZZh26yZ1cZLpJ0qY', '5f804e46c0c43.', 'Nina', 'user'),
(52, 'nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$B6IORim+CULl7x9TKOosFw$RHLOzTAhomb3z+zsisyMZbSmwfrvAAWTIBuV5nRh1E8', '5f804e5472df0.', 'Nina', 'user'),
(53, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$dvXIJzvUtBtgDcaz2KmJuA$Pwbx19+kLX6HOUstVN2Q17rxBnSt5KdrJE/jRwflZm4', '5f804eaf10f02.', 'Nina', 'user'),
(54, 'nina', 'Nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$vMnRp0ACwGUb1HIOpeixmQ$e52wRmAsDPPfCefL1LOxO7UGGzQR+BawIPGgOUh6Dho', '5f805defb8f24.jpg', 'Moi', 'user'),
(55, 'nina', 'Nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$SM/aatiT46oNjjGHHd56LA$S8LUhWNPx2UIZoF6/tiXn+Y3OuMKImgUMW/mBLiKC68', '5f805df3a5279.jpg', 'Moi', 'user'),
(56, 'nina', 'Nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$veSk0iKmvLic76kZrfvdMg$OSoLj7I6rTUkAlL7z2EViOPV8eJ+/3HmaKfW0TFZ65s', '5f805e173fac3.jpg', 'Moi', 'user'),
(57, 'Nina', 'Nina@plop.fr', '$argon2id$v=19$m=65536,t=4,p=1$izmAMLXo7iGMUq/CRybZHw$PSrvaKNuXge3Ech7FWn5OW4bp5XYWnD8Pyj5YTyNDAs', '5f805e34acf1c.jpg', 'Moi', 'user'),
(58, 'Of\'course', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$HCjurR6t6MExkR5DyzK0Tg$c6hxjyodV7Ci0DDa1VLAvb92Hjho0MbQHOOTTlB9R6w', '5f805ff51b89b.', '', 'user'),
(59, 'Nina', 'nina@free.fr', '$argon2id$v=19$m=65536,t=4,p=1$l/Qbx4PyMrYg1joam3Sl2Q$Of5KR5sae5PwgvMeZ3KFZ6gLWBm6wKXCivyg1X1k3oA', '5f806b8ed615e.', 'Moi', 'user'),
(60, 'nina', 'nina@free.fr', '$argon2id$v=19$m=65536,t=4,p=1$cqCjma7vD2FEFvxEBmMWRg$rKMwSwdTp4A6oCIMqlof3W9Hly1eyWiAh/vD3XAiCUM', '5f806e64ecb9d.jpg', 'Moi', 'user'),
(61, 'acideman', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$7lmfGQECOC+KYBGnvZT3hg$Pm6vnJF7VrBeRTdUEk6+jqYd0rToIzOavJ8ElfOOxkA', '5f8080a76c3b2.', 'acideman', NULL),
(62, 'acideman', 'acidman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$vzTIUTKqqIJIoQjXa/3JAQ$JWti87PijXY5Fh6YdV14RsjEZSuYO4s6WVJoQF9XYKM', '5f80816702be2.', 'acideman', NULL),
(63, 'courserun', 'courserun@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$RWwlaClKbZvuTcDfuufAaA$k9RTLkToPKQ/cLMMkR3g1ZW5OYgwxj8q+oTYr+xnPzw', '5f808217b8e4c.', 'courserun', NULL),
(64, 'auroreman', 'auroreman@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$BfAraVPUdWATYZ8o5TMWwQ$JGp9PiUy6QYDuOg0cshp3ec7zngduxUTVAujZMp4xeE', '5f8082e6701cf.', 'auroreman', NULL),
(65, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$+ynI7Cc5AIudHpsyA6ldeg$Ypt5kAeKVVczx0SqIMb61kqrOTsPEJZxTAY77DVCMYo', '5f855440d9113.', 'Nina', 'user'),
(66, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$ilweWJ1yhzpkQTQLiAEMGQ$VYWiIpM3/jtjC72a+OYAIIVSVobBf0U04fsifBqlDII', '5f85544b61046.', 'Nina', 'user'),
(67, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$W9D/4G3wFW5n51+7K12RQw$LxX7TSgdjW8yTpwRAUBljNOhhDJX//RtbKpMoepGiBw', '5f855e2dc63c7.', 'Nina', 'user'),
(68, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$kgGTJpHpGNu6xgqNhmTsOA$00xN7p+BAxelnf01Jh6gmAbY9+BNJ3b+A3HxQq9NVFk', '5f8561a2eb39c.', 'Nina', 'user'),
(69, 'plopl', 'plop@herocorp.io', '$argon2id$v=19$m=65536,t=4,p=1$4ust1HekbqVZBCx6OPJ2uw$Km4TyPVDDwXhjxIh7UuXZ3xNHp3OlWOxoXJtgkryZ3w', '5f8571db1bcdd.', 'Yop', 'user'),
(70, 'Nina', 'nina@free.dg', '$argon2id$v=19$m=65536,t=4,p=1$NQg9eC57Pmh4X3Der7vjMg$khXv3Q83D9fcjhu88ZNYzVQ3SpG6GX0tLVj4adHUeX0', '5f8572386228d.', 'Nina', 'user'),
(71, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$8y+NMTzB0/XpC3UzMF5Qdw$AriwFpzibji1iAC6U70ij5J1fdO15QCtCjmKlL1UueM', '5f8576726122f.', 'Nina', 'user'),
(72, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$BONK5TzyIiBt4sk6xiyZ4A$+JVQitpsfZnp21OYS0SFwetoE3JflItIXItcvB9Bk/Q', '5f857dbd6edf0.', 'Nina', 'user'),
(73, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$meDxRzn776NOCSLD2IZtHg$BI4fa4EvnDjOMSFCo6H+LNaJ9bWszIWgNS5twMHuvnY', NULL, 'Nina', 'user'),
(74, 'Alexandre', 'alexandre@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$2ICvyFD+0Nx08HPMk+cbMg$4xfHctEqhpfA6ebIS+AzpmpzGIDhiWua+8t5Zxrx5GQ', NULL, 'Alexandre', 'user'),
(75, 'alexandre', 'alexandre@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$OOawokCxffVCkm0YjnnPgw$x4BYPoLZMZE8RTgiqQ/i2N315c1nFDUPl2NgbIfk78E', NULL, 'Alexandre', 'user'),
(76, 'Nina', 'nina@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$L5YA4y07/9yZ3k5jYvbQbA$IPn5aOhTR73h6tksZ3qy4F7y3zwUkkRpDVOx7QsE+QA', NULL, 'Nina', 'user'),
(77, 'Vincent', 'vincent@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$0LrnjIz9yqP/yUhjsaR6Qw$HdT4g2JNw4GCLPXdd2pqGgiky0JOVTBXcSlIeyABJxo', NULL, 'Vince', 'user'),
(78, 'Thibalut', 'thibault@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$DB15oxG60SnGTbXsN0U7mw$XltQJkg+4mzLYvZDHbgyCuZCSTDv9VxVPb3BrMuhIsM', NULL, 'Thibault', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DA88B137A76ED395` (`user_id`);

--
-- Index pour la table `recipe_category`
--
ALTER TABLE `recipe_category`
  ADD PRIMARY KEY (`recipe_id`,`category_id`),
  ADD KEY `IDX_70DCBC5F59D8A214` (`recipe_id`),
  ADD KEY `IDX_70DCBC5F12469DE2` (`category_id`);

--
-- Index pour la table `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_22D1FE1359D8A214` (`recipe_id`),
  ADD KEY `IDX_22D1FE13933FE08C` (`ingredient_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `FK_DA88B137A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `recipe_category`
--
ALTER TABLE `recipe_category`
  ADD CONSTRAINT `FK_70DCBC5F12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_70DCBC5F59D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  ADD CONSTRAINT `FK_22D1FE1359D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`),
  ADD CONSTRAINT `FK_22D1FE13933FE08C` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
