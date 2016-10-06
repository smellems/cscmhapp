-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2016 at 01:52 PM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symptoms`
--

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

DROP TABLE IF EXISTS `symptoms`;
CREATE TABLE `symptoms` (
  `id` int(10) NOT NULL,
  `symptom_types_id` int(10) NOT NULL,
  `name_fr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc_fr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `symptom_types_id`, `name_fr`, `name_en`, `desc_fr`, `desc_en`, `score`, `created`, `modified`) VALUES
(1, 1, 'Maux de tête', 'Headaches', 'Maux de tête', 'Headaches', -1, '2016-10-05 08:15:43', NULL),
(2, 2, 'Consommation abusive du tabac', 'Abusive consumption of tabaco', 'Consommation abusive du tabac', 'Abusive consumption of tabaco', -1, '2016-10-05 08:15:43', NULL),
(3, 1, 'Frissons ou transpiration abondante', 'Frissons ou transpiration abondante', 'Frissons ou transpiration abondante', 'Frissons ou transpiration abondante', -1, '2016-10-05 09:06:06', NULL),
(4, 1, 'Douleur épaules, dos, raideur nuque', 'Douleur épaules, dos, raideur nuque', 'Douleur épaules, dos, raideur nuque', 'Douleur épaules, dos, raideur nuque', -1, '2016-10-05 09:06:45', NULL),
(5, 1, 'Indigestion, constipation diarrhée', 'Indigestion, constipation diarrhée', 'Indigestion, constipation diarrhée', 'Indigestion, constipation diarrhée', -1, '2016-10-05 09:07:46', NULL),
(6, 1, 'Douleur thoracique', 'Douleur thoracique', 'Douleur thoracique', 'Douleur thoracique', -5, '2016-10-05 09:07:46', NULL),
(7, 1, 'Maux d\'estomac', 'Maux d\'estomac', 'Maux d\'estomac', 'Maux d\'estomac', -1, '2016-10-05 09:08:13', NULL),
(8, 1, 'Étourdissement', 'Étourdissement', 'Étourdissement', 'Étourdissement', -1, '2016-10-05 09:09:42', NULL),
(9, 1, 'Palpitations', 'Palpitations', 'Palpitations', 'Palpitations', -1, '2016-10-05 09:09:42', NULL),
(10, 1, 'Respiration difficile', 'Respiration difficile', 'Respiration difficile', 'Respiration difficile', -5, '2016-10-05 09:11:06', NULL),
(11, 1, 'Augmentation de la tension artérielle', 'Augmentation de la tension artérielle', 'Augmentation de la tension artérielle', 'Augmentation de la tension artérielle', -1, '2016-10-05 09:11:06', NULL),
(12, 1, 'Paumes moites', 'Paumes moites', 'Paumes moites', 'Paumes moites', -1, '2016-10-05 09:11:47', NULL),
(13, 1, 'Agitation', 'Agitation', 'Agitation', 'Agitation', -1, '2016-10-05 09:11:47', NULL),
(14, 1, 'Tension musculaire', 'Tension musculaire', 'Tension musculaire', 'Tension musculaire', -1, '2016-10-05 09:12:58', NULL),
(15, 1, 'Fatigue', 'Fatigue', 'Fatigue', 'Fatigue', -1, '2016-10-05 09:12:58', NULL),
(16, 1, 'Acouphène', 'Acouphène', 'Acouphène', 'Acouphène', -1, '2016-10-05 09:13:57', NULL),
(17, 2, 'Grincements de dents la nuit', 'Grincements de dents la nuit', 'Grincements de dents la nuit', 'Grincements de dents la nuit', -1, '2016-10-05 09:13:57', NULL),
(18, 2, 'Consommation abusive de drogue et alcool', 'Utilisation compulsive de gomme à mâcher', 'Utilisation compulsive de gomme à mâcher', 'Utilisation compulsive de gomme à mâcher', -1, '2016-10-05 09:18:14', NULL),
(19, 2, 'Alimentation compulsive', 'Alimentation compulsive', 'Alimentation compulsive', 'Alimentation compulsive', -1, '2016-10-05 09:18:14', NULL),
(20, 2, 'Tendance à blâmer les autres', 'Tendance à blâmer les autres', 'Tendance à blâmer les autres', 'Tendance à blâmer les autres', -1, '2016-10-05 09:20:13', NULL),
(21, 2, 'Incapacité à agir', 'Incapacité à agir', 'Incapacité à agir', 'Incapacité à agir', -1, '2016-10-05 09:20:13', NULL),
(22, 2, 'Pleurs', 'Pleurs', 'Pleurs', 'Pleurs', -1, '2016-10-05 09:21:00', NULL),
(23, 2, 'Tendance à donner des ordres', 'Tendance à donner des ordres', 'Tendance à donner des ordres', 'Tendance à donner des ordres', -1, '2016-10-05 09:21:00', NULL),
(24, 2, 'Troubles de sommeil', 'Troubles de sommeil', 'Troubles de sommeil', 'Troubles de sommeil', -1, '2016-10-05 09:22:15', NULL),
(25, 3, 'Anxiété, peur, craintes', 'Anxiété, peur, craintes', 'Anxiété, peur, craintes', 'Anxiété, peur, craintes', -1, '2016-10-05 09:22:15', NULL),
(26, 3, 'Colère ou rage', 'Colère ou rage', 'Colère ou rage', 'Colère ou rage', -1, '2016-10-05 09:47:40', NULL),
(27, 1, 'Manger régulièrement', 'Manger régulièrement', '3 repas équilibrés par jour', '3 repas équilibrés par jour', 1, '2016-10-06 09:08:12', NULL),
(28, 1, 'Exercice physique', 'Exercice physique', '30 minutes par jour.  On recommande aux adultes de pratiquer, au total, 2.5 heures ou plus d\'activité physique. modérée à intense par semaine', '30 minutes par jour.  On recommande aux adultes de pratiquer, au total, 2.5 heures ou plus d\'activité physique. modérée à intense par semaine', 1, '2016-10-06 09:08:12', NULL),
(29, 1, 'Sommeil', 'Sommeil', '8 heures de sommeil : temps pour  aider le corps à se régénérer', '8 heures de sommeil : temps pour  aider le corps à se régénérer', 1, '2016-10-06 10:52:22', NULL),
(30, 4, 'Prendre un temps d\'arrêt pour vous', 'Prendre un temps d\'arrêt pour vous', '', '', 1, '2016-10-06 10:52:22', NULL),
(31, 4, 'Pratiquer votre passe-temps', 'Pratiquer votre passe-temps', 'Pensez a l\'activité qui vous passionnait quand vous étiez enfant', 'Pensez a l\'activité qui vous passionnait quand vous étiez enfant', 1, '2016-10-06 11:11:31', NULL),
(32, 4, 'Pratiquer votre talent', 'Pratiquer votre talent', 'L\'avez-vous pratiqué aujourd\'hui?', 'L\'avez-vous pratiqué aujourd\'hui?', 1, '2016-10-06 11:11:31', NULL),
(33, 4, 'Chanter à tue-tête dans votre voiture (ou ailleurs)', 'Chanter à tue-tête dans votre voiture (ou ailleurs)', 'Votre chanson préférée', 'Votre chanson préférée', 1, '2016-10-06 11:13:34', NULL),
(34, 6, 'Méditation', 'Méditation', '', '', 1, '2016-10-06 11:13:34', NULL),
(35, 6, 'Lecture', 'Reading', 'Un texte de réflexion positive', 'Un texte de réflexion positive', 1, '2016-10-06 11:15:22', NULL),
(36, 6, 'Pardonner', 'Pardonner', 'En essayant de comprendre sa  position et sa situation', 'En essayant de comprendre sa  position et sa situation', 1, '2016-10-06 11:15:22', NULL),
(37, 3, 'Parler', 'Talk', 'de votre tracas aujourd’hui avec un ami de confiance ou un mentor', 'de votre tracas aujourd’hui avec un ami de confiance ou un mentor', 1, '2016-10-06 11:17:30', NULL),
(38, 3, 'Bonne action', 'Good deed', 'pour l\'autre ou les autres', 'pour l\'autre ou les autres', 1, '2016-10-06 11:17:30', NULL),
(39, 3, 'Rire', 'Rire', 'un bon coup avec les collègues ou la famille', 'un bon coup avec les collègues ou la famille', 1, '2016-10-06 11:18:41', NULL),
(40, 3, 'Jouer', 'Play', 'avec votre famille et/ou  vos enfants : une activité familiale permet de garder \r\ndes  liens et de nous reconnecter avec ce qui nous importe vraiment', 'avec votre famille et/ou  vos enfants : une activité familiale permet de garder \r\ndes  liens et de nous reconnecter avec ce qui nous importe vraiment', 1, '2016-10-06 11:18:41', NULL),
(41, 3, 'Changement d\'humeur', 'Changement d\'humeur', 'Changement d\'humeur', 'Changement d\'humeur', -1, '2016-10-06 12:34:01', NULL),
(42, 3, 'Solitude, tristesse inexpliquée', 'Solitude, tristesse inexpliquée', 'Solitude, tristesse inexpliquée', 'Solitude, tristesse inexpliquée', -1, '2016-10-06 12:34:01', NULL),
(43, 3, 'Sentiment de vide', 'Sentiment de vide', 'Sentiment de vide', 'Sentiment de vide', -1, '2016-10-06 13:20:13', NULL),
(44, 3, 'Facilement contrarié, irritabilité', 'Facilement contrarié, irritabilité', 'Facilement contrarié, irritabilité', 'Facilement contrarié, irritabilité', -1, '2016-10-06 13:20:13', NULL),
(45, 3, 'Rancunier, à cran', 'Rancunier, à cran', 'Rancunier, à cran', 'Rancunier, à cran', -1, '2016-10-06 13:20:58', NULL),
(46, 3, 'Envie de mourir, idée suicidaire', 'Envie de mourir, idée suicidaire', 'Envie de mourir, idée suicidaire', 'Envie de mourir, idée suicidaire', -5, '2016-10-06 13:20:58', NULL),
(47, 3, 'Sentimentde ne pas être apprécié à sa juste valeur', 'Sentimentde ne pas être apprécié à sa juste valeur', 'Sentimentde ne pas être apprécié à sa juste valeur', 'Sentimentde ne pas être apprécié à sa juste valeur', -1, '2016-10-06 13:21:39', NULL),
(48, 4, 'Difficulté à se concentrer', 'Difficulté à se concentrer', 'Difficulté à se concentrer', 'Difficulté à se concentrer', -1, '2016-10-06 13:21:39', NULL),
(49, 4, 'Difficulté à prendre des décisions', 'Difficulté à prendre des décisions', 'Difficulté à prendre des décisions', 'Difficulté à prendre des décisions', -1, '2016-10-06 13:22:39', NULL),
(50, 4, 'Trous de mémoire', 'Trous de mémoire', 'Trous de mémoire', 'Trous de mémoire', -1, '2016-10-06 13:22:39', NULL),
(55, 4, 'Inquiétude constante', 'Inquiétude constante', 'Inquiétude constante', 'Inquiétude constante', -1, '2016-10-06 13:24:01', NULL),
(56, 4, 'Désorientation', 'Désorientation', 'Désorientation', 'Désorientation', -1, '2016-10-06 13:24:38', NULL),
(57, 4, 'Manque de créativité', 'Manque de créativité', 'Manque de créativité', 'Manque de créativité', -1, '2016-10-06 13:24:38', NULL),
(58, 4, 'Perte du sens de l’humour', 'Perte du sens de l’humour', 'Perte du sens de l’humour', 'Perte du sens de l’humour', -1, '2016-10-06 13:26:00', NULL),
(59, 4, 'Doute de soi', 'Doute de soi', 'Doute de soi', 'Doute de soi', -1, '2016-10-06 13:26:00', NULL),
(60, 4, 'Perte de sens', 'Perte de sens', 'Perte de sens', 'Perte de sens', -1, '2016-10-06 13:26:34', NULL),
(61, 3, 'Vision étroite des choses', 'Vision étroite des choses', 'Vision étroite des choses', 'Vision étroite des choses', -1, '2016-10-06 13:26:34', NULL),
(62, 4, 'Manque d’écoute', 'Manque d’écoute', 'Manque d’écoute', 'Manque d’écoute', -1, '2016-10-06 13:27:14', NULL),
(63, 4, 'Images, pensées intrusives et récurrentes', 'Images, pensées intrusives et récurrentes', 'Images, pensées intrusives et récurrentes', 'Images, pensées intrusives et récurrentes', -1, '2016-10-06 13:27:14', NULL),
(64, 5, 'Retrait', 'Retrait', 'Retrait', 'Retrait', -1, '2016-10-06 13:27:54', NULL),
(65, 5, 'Réactions exagérées', 'Réactions exagérées', 'Réactions exagérées', 'Réactions exagérées', -1, '2016-10-06 13:27:54', NULL),
(66, 5, 'Conflits avec ses collègues ou les employeurs', 'Conflits avec ses collègues ou les employeurs', 'Conflits avec ses collègues ou les employeurs', 'Conflits avec ses collègues ou les employeurs', -1, '2016-10-06 13:28:28', NULL),
(67, 5, 'Manipulation', 'Manipulation', 'Manipulation', 'Manipulation', -1, '2016-10-06 13:28:28', NULL),
(68, 5, 'Harcèlement', 'Harcèlement', 'Harcèlement', 'Harcèlement', -1, '2016-10-06 13:30:18', NULL),
(69, 5, 'Méfiance', 'Méfiance', 'Méfiance', 'Méfiance', -1, '2016-10-06 13:30:18', NULL),
(70, 5, 'Intolérance', 'Intolérance', 'Intolérance', 'Intolérance', -1, '2016-10-06 13:31:01', NULL),
(71, 5, 'Disputes plus fréquentes', 'Disputes plus fréquentes', 'Disputes plus fréquentes', 'Disputes plus fréquentes', -1, '2016-10-06 13:31:01', NULL),
(72, 5, 'Mutisme', 'Mutisme', 'Mutisme', 'Mutisme', -1, '2016-10-06 13:31:28', NULL),
(73, 5, 'Baisse de libido', 'Baisse de libido', 'Baisse de libido', 'Baisse de libido', -1, '2016-10-06 13:31:28', NULL),
(74, 5, 'Manque d’intimité', 'Manque d’intimité', 'Manque d’intimité', 'Manque d’intimité', -1, '2016-10-06 13:32:08', NULL),
(75, 5, 'Un collègue ou un membre de votre famille s’inquiète de vos comportements', 'Un collègue ou un membre de votre famille s’inquiète de vos comportements', 'Un collègue ou un membre de votre famille s’inquiète de vos comportements', 'Un collègue ou un membre de votre famille s’inquiète de vos comportements', -2, '2016-10-06 13:32:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `symptom_types`
--

DROP TABLE IF EXISTS `symptom_types`;
CREATE TABLE `symptom_types` (
  `id` int(10) NOT NULL,
  `name_fr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc_fr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `symptom_types`
--

INSERT INTO `symptom_types` (`id`, `name_fr`, `name_en`, `desc_fr`, `desc_en`, `created`, `modified`) VALUES
(1, 'Physiques', 'Physical', 'Physiques', 'Physical', '2016-10-05 08:12:11', NULL),
(2, 'Comportementaux', 'Behavioral', 'Comportementaux', 'Behavioral', '2016-10-05 08:12:11', NULL),
(3, 'Émotionnels', 'Emotionnal', 'Émotionnels', 'Emotionnal', '2016-10-05 08:13:18', NULL),
(4, 'Cognitifs', 'Cognition', 'Cognitifs', 'Cognition', '2016-10-05 08:13:18', NULL),
(5, 'Relations interpersonnelles', 'Interpersonnal relationships', 'Relations interpersonnelles', 'Interpersonnal relationships', '2016-10-05 08:14:03', NULL),
(6, 'Sprituel', 'Spiritual', 'Sprituel', 'Spiritual', '2016-10-06 11:12:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_symptoms`
--

DROP TABLE IF EXISTS `users_symptoms`;
CREATE TABLE `users_symptoms` (
  `id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `symptoms_id` int(10) NOT NULL,
  `symptom_score` int(10) NOT NULL,
  `checked` tinyint(1) NOT NULL,
  `current_score` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `symptom_types`
--
ALTER TABLE `symptom_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_symptoms`
--
ALTER TABLE `users_symptoms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `symptom_types`
--
ALTER TABLE `symptom_types`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users_symptoms`
--
ALTER TABLE `users_symptoms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
