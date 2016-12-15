-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 15 Décembre 2016 à 16:27
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `DATA_EVENT`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id_event` int(5) NOT NULL,
  `type` varchar(100) NOT NULL,
  `titre` varchar(20) DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `prix` int(3) DEFAULT NULL,
  `description` text,
  `resume` text,
  `ouverture` time DEFAULT NULL,
  `date_event` date DEFAULT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`id_event`, `type`, `titre`, `heure`, `prix`, `description`, `resume`, `ouverture`, `date_event`, `photo`) VALUES
(10012, 'spectacle', 'Peter Pan', '21:00:00', 60, 'Spectacle sur glace', 'Dans cette merveilleuse histoire, vous retrouverez Peter Pan, ce petit garçon qui a refusé de grandir, accompagné de la malicieuse fée Clochette mais aussi le terrible capitaine Crochet qui rêve de trésors. Ils vivront une incroyable aventure entourés des enfants perdus, de Lily la tigresse et des indiens...', '20:00:00', '2018-04-18', 'peter.jpg'),

(10013, 'sport', 'psg / om', '21:00:00', 150, 'league 1', "Le championnat de France de football professionnel masculin, dénommé Ligue 1 (L1), est une compétition de football qui est pour la France le premier échelon national. Il se déroule annuellement sous forme d'un championnat opposant vingt clubs professionnels. Une saison du championnat commence en été et se termine au printemps suivant. La première journée de l'édition inaugurale se tient le 11 septembre 1932. Nommé « Division Nationale » lors des premières éditions, le championnat prend ensuite le nom de « Division 1 » (D1) en 1972, avant de prendre son nom actuel à l'été 2002.", '20:00:00', '2018-11-23', 'psgom.jpg'),

(10016, 'spectacle', 'Les ballerines TT', '00:00:00', 150, 'Move to dance', '5 jeunes danseuses classiques russes ont décidé de laisser tomber les ballerines pour s’adonner à leur véritable passion, le twerk. Après avoir ligoté leur chorégraphe, les jeunes ballerines emmenées par la superbe danseuse Polina Dubkova, entament une chorégraphie très sexy en petite tenue. Les twerkeuses ont ainsi troqué leurs tutus pour des micro-shorts affriolants afin de réaliser une danse sur le titre « 7/11 » de Beyoncé.', '23:30:00', '2017-07-12', 'twerk.jpg'),

(10017, 'concert', 'LUMINITE', '21:00:00', 120, 'RAW NATION', "Luminite is one of the only artists who belongs to the avant-garde of Hardstyle music. With every track he guarantees a new inventive and innovative way of getting people moving. Luminite's promise to all his fans is that he will “never make a generic track again. Every single one will be experimental/unique/out of the box” This is a truly inspirational and refreshing promise in a scene so cluttered by generic sounds.
This forward thinking frame of mind has gained him a lot of dedicated fans which include a host of a-list DJ's including widely known artists such as Thera, Luna, Adaro, Prefix & Density, High Voltage, Titan, Thyron, Kyara, X-Pander, Requiem and many more.
With so many tracks that are so instantly recognizable as Luminite's trademark style, hearing a liveset from him is a truly special experience when he drops so many bombs such as 'Destruction', 'Break Ya Ankles' and the incredible 'Be The Baddest'.
Everyone who is passionate about the Hardstyle scene should throw their support behind Luminite, as he is one of those artists who is capable of pushing boundaries and leading the way in order to keep a scene alive.", '20:00:00', '2018-11-23', 'luminite.jpg'),

(10018, 'concert', 'Radical Redemption', '00:00:23', 20, 'The one man army', 'With an incredibly rapid rise to stardom, Radical Redemption is undoubtedly an artist who has made waves within the hard dance scene. Fresh signed to the Minus is More label in 2011 he decided to launch his first artist album, named “Annihilate”, in the beginning of 2012. Hard, pounding kicks, massive atmospheres, experimental sounds and energetic vocals define his style. The result, playing at all the big stages in Europe and overseas! In 2013, Radical Redemption shocked the scene with a new album (The Spell of Sin), a new live-act and a new story. Unseen, unheard and unequalled and a new milestone was achieved: entering the DJ MAG top 100 at spot #64 in 2014!', '00:00:20', '2017-11-04', 'RD.jpg'),

(10024, 'concert', 'NTML', '23:00:00', 40, 'Anthologie du rap français', 'Suprême NTM, ou simplement NTM, est un groupe de hip-hop et de rap français, originaire du département de la Seine-Saint-Denis. Composé principalement de deux rappeurs, JoeyStarr (Didier Morville) et Kool Shen (Bruno Lopes), le groupe marque les débuts du rap des années 1990 en FranceN 1. Formé en 1988 et dissout en 1998, le groupe se reforme en 2008 sans annoncer de nouvel album et pour une tournée nationale.', '22:30:00', '2017-05-17', 'NTM.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_event`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_event` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10025;
