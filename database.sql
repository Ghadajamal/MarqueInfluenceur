-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 02 juin 2022 à 00:29
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET time_zone
= "+00:00";

--
-- Base de données : marque_influenceur
--

-- --------------------------------------------------------

--
-- Structure de la table Brand
--

CREATE TABLE Brand
(
  id int
(11) NOT NULL,
  brand_name varchar
(255) NOT NULL,
  CA_annuel varchar
(255) NOT NULL,
  email varchar
(255) NOT NULL,
  phone varchar
(255) NOT NULL,
  password varchar
(255) NOT NULL,
  description varchar
(1000) NOT NULL,
  profession varchar
(1000) NOT NULL,
  site_web varchar
(260) NOT NULL,
  image_upload varchar
(255) NOT NULL,
  category varchar
(255) NOT NULL,
  Partners int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table Brand
--

INSERT INTO Brand (
id,
brand_name,
CA_annuel,
email
, phone, password, description, profession, site_web, image_upload, category, Partners) VALUES
(4, 'zara', '23000000', 'ghad@gmail.com', '6543565432', '0000', '                                                                                        bonjour nous somme zara l&#039;entreprise connue par ces vetements haut qualité                                ', 'entreprise de textile', 'https://www.zara.com/ma/', 'zara.png', 'Clothing brand', 0),
(5, 'H&M', '53400000', 'hm@gmail.com', '5343212234', '0000', 'Hello we are new compagnie de textile                                 ', 'clothing brand', 'https://www.hm.com/entrance.ahtml?orguri=%2F', 'h_m.jpg', 'Clothing brand', 0),
(6, 'Pull&Bear', '65400000', 'pull@gmail.com', '543454323', '0000', 'Pull and Bear est une chaîne de magasins appartenant au groupe Inditex. La chaîne naît en 1991, et fait partie des premières « sœurs » de Zara qui jusqu&#039;alors était la seule marque du groupe. C&#039;est à cette époque que le groupe commence la diversification de ses activités.                                             ', 'entreprise de textile', 'https://www.pull&bear.com/', 'téléchargement.png', 'Clothing brand', 0),
(7, 'Dior', '43200000', 'dior@gmail.com', '43234321234', '0000', '                                                            hey we are dior the famous compagny in parfums', 'Parfum enterprise', 'https://www.dior.com', 'Dior.jpg', 'Parfum Brand', 0),
(8, 'Bershka', '56200000', 'bershka@gmail.com', '0896322346', '0000', '                                                            hey we are Bershka looking for new influencers to promote our brand', 'Brand leader in all sorts of clothing', 'https://www.bershka.com/', 'Bershka-Logo.png', 'Clothing brand', 0),
(9, 'SpringField', '14500000', 'spring@gmail.com', '055632345', '0000', '                                                            hey we are Springfield a textil compagny', 'clothing brand and textil', 'https://www.springfield.com/', 'springg.png', 'Clothing brand', 0),
(10, 'Balenciaga', '23400000', 'balenciaga@gmail.com', '074342324', '0000', 'hello, we are Balenciaga leader in market of shoes we are looking for 5 promoters for our brand                                                          ', 'Brand of shoes and all sorts of foot wearing', 'https://www.balenciaga.com/', 'balenciaga.jpeg', 'Foot Wear', 0),
(11, 'Vans of the wall', '53000000', 'vans@gmail.com', '0896322346', '0000', '                                                            ', 'we are professional at shoes making', 'https://www.vans.com/', 'vans.png', 'Foot Wear', 0),
(12, 'Chanel', '24600000', 'chanel@gmail.com', '06434324', '0000', '                                                                                                                                                    Chanel Née à l&#039;aube d&#039;une révolution féminine, la maison fondée par Gabrielle Chanel a libéré les femmes du corset et réinvente sans cesse les contours de la féminité, le tout en prônant l&#039;élégance. Retour sur ses origines.                                 ', 'we are professional at parfum making', 'https://www.chanel.com/', 'chanel.jpg', 'Parfum', 0);

-- --------------------------------------------------------

--
-- Structure de la table influenceur
--

CREATE TABLE influenceur
(
  id int
(255) NOT NULL,
  first_name varchar
(255) NOT NULL,
  last_name varchar
(255) NOT NULL,
  age varchar
(255) NOT NULL,
  email varchar
(255) NOT NULL,
  phone varchar
(255) NOT NULL,
  password varchar
(255) NOT NULL,
  gender varchar
(255) NOT NULL,
  description varchar
(1000) NOT NULL,
  profession varchar
(1000) NOT NULL,
  image_upload varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table influenceur
--

INSERT INTO influenceur (
id,
first_name,
last_name
, age, email, phone, password, gender, description, profession, image_upload) VALUES
(6, 'Tarik', 'Saad', '21', 'tarik@gmail.com', '+432345335353', '0000', 'Male', '                                                                                                                                                                            bonjour je m&#039;appele tarik j&#039;ai 30ans It&#039;s important to remember that \r\n\r\nvoila quoi this function does NOT replace newlines with  tags. Rather, it inserts a tag before each newline, but it still preserves the newlines themselves! This caused problems for me regarding a function                                                                                                                        ', 'Youtubeur , créateur de contenu', 'mamado.jpeg'),
(9, 'said', 'rani', '26', 'said@gmail.com', '0634423223', '0000', 'Male', 'Good afternoon. My name is said Cor and I’m the VP of Administration and Finance at Northern Investing. I’ve always been passionate about finding smart ways to save money. ', 'Entrepreneur, Youtuber, Designer', 'profile-pic.png'),
(11, 'samia', 'hilali', '27', 'samia@gmail.com', '0654345432', '0000', 'Male', '                                                            My name is Samia hilali, and I’m the marketing director at Wise Technology. We’re developing some innovative marketing campaigns designed to engage new customers right in the streets of Bloomington. I’ve been recruiting local businesses ', 'étudiante en université, influenceuse', 'ss.jpeg'),
(12, 'salma', 'jana', '27', 'salma@gmail.com', '06345432345', '0000', 'Male', '                                                            My name is Salma jana. I’m the product development manager at Smart Solutions. I’ve created over a dozen apps designed to streamline sales and marketing activities for busy professionals', 'Marketer, drop shipper , content creator', 'hana.png'),
(13, 'louisa', 'seb', '32', 'louisa@gmail.com', '064243232', '0000', 'Male', '              My name is Louisa seb. I’m a recent elementary education graduate from Ball State University. I’ve been working at a camp for elementary children this summer, and I’m excited to find my first teaching position                                              ', 'Youtubeur , créateur de contenu', 'samira.png');

-- --------------------------------------------------------

--
-- Structure de la table Partnership
--

CREATE TABLE Partnership
(
  id_influencer int
(11) NOT NULL,
  id_brand int
(11) NOT NULL,
  email_brand varchar
(255) NOT NULL,
  content varchar
(2000) NOT NULL,
  statut varchar
(50) NOT NULL,
  email_influencer varchar
(255) NOT NULL,
  sender varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table Partnership
--

INSERT INTO Partnership (
id_influencer,
id_brand
, email_brand, content, statut, email_influencer, sender) VALUES
(6, 6, 'pull@gmail.com', 'Hi Tarik The team Pull&amp;Bear loved your post about your favorite clothes and fashion. At Pull&amp;Bear, we make Clothing brand for women and men. We’d love to send some your way so you can give it a try and share with your audience!\r\nLet me know if you’d be interested - thanks! -Kristen ', 'Signed', 'tarik@gmail.com', 'brand'),
(12, 6, 'pull@gmail.com', 'Hi salma The team Pull&amp;Bear loved your post about your favorite clothes and fashion. At Pull&amp;Bear, we make Clothing brand for women and men. We’d love to send some your way so you can give it a try and share with your audience!\r\nLet me know if you’d be interested - thanks! -Kristen ', 'Signed', 'salma@gmail.com', 'brand'),
(11, 6, 'pull@gmail.com', 'Hey Pull&amp;Bear, My name is samia hilali and I&#039;m étudiante en université, influenceuse. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'Signed', 'samia@gmail.com', 'influencer'),
(6, 4, 'ghad@gmail.com', 'Hey zara, My name is Tarik Saad and I&#039;m Youtubeur , créateur de contenu. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'Signed', 'tarik@gmail.com', 'influencer'),
(6, 6, 'pull@gmail.com', 'Hey Pull&amp;Bear, My name is Tarik Saad and I&#039;m Youtubeur , créateur de contenu. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'pas encore signé', 'tarik@gmail.com', 'influencer'),
(6, 7, 'dior@gmail.com', 'Hey Dior, My name is Tarik Saad and I&#039;m Youtubeur , créateur de contenu. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'refused', 'tarik@gmail.com', 'influencer'),
(6, 12, 'chanel@gmail.com', 'Hey Chanel, My name is Tarik Saad and I&#039;m Youtubeur , créateur de contenu. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'pas encore signé', 'tarik@gmail.com', 'influencer'),
(9, 6, 'pull@gmail.com', 'Hey Pull&amp;Bear, My name is said rani and I&#039;m Entrepreneur, Youtuber, Designer. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'Signed', 'said@gmail.com', 'influencer'),
(9, 4, 'ghad@gmail.com', 'Hey zara, My name is said rani and I&#039;m Entrepreneur, Youtuber, Designer. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'pas encore signé', 'said@gmail.com', 'influencer'),
(9, 5, 'hm@gmail.com', 'Hey H&amp;M, My name is said rani and I&#039;m Entrepreneur, Youtuber, Designer. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'Signed', 'said@gmail.com', 'influencer'),
(6, 9, 'spring@gmail.com', 'Hi Tarik The team SpringField loved your post about your favorite clothes and fashion. At SpringField, we make Clothing brand for women and men. We’d love to send some your way so you can give it a try and share with your audience!\r\nLet me know if you’d be interested - thanks! -Kristen ', 'Signed', 'tarik@gmail.com', 'brand'),
(6, 5, 'hm@gmail.com', 'Hi Tarik The team H&amp;M loved your post about your favorite clothes and fashion. At H&amp;M, we make Clothing brand for women and men. We’d love to send some your way so you can give it a try and share with your audience!\r\nLet me know if you’d be interested - thanks! -Kristen ', 'Signed', 'tarik@gmail.com', 'brand'),
(13, 12, 'chanel@gmail.com', 'Hi louisa The team Chanel loved your post about your favorite clothes and fashion. At Chanel, we make Parfum for women and men. We’d love to send some your way so you can give it a try and share with your audience!\r\nLet me know if you’d be interested - thanks! -Kristen ', 'Signed', 'louisa@gmail.com', 'brand'),
(6, 8, 'bershka@gmail.com', 'Hey Bershka, My name is Tarik Saad and I&#039;m Youtubeur , créateur de contenu. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'Signed', 'tarik@gmail.com', 'influencer'),
(6, 11, 'vans@gmail.com', 'Hey Vans of the wall, My name is Tarik Saad and I&#039;m Youtubeur , créateur de contenu. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'pas encore signé', 'tarik@gmail.com', 'influencer'),
(12, 10, 'balenciaga@gmail.com', 'Hey Balenciaga, My name is salma jana and I&#039;m Marketer, drop shipper , content creator. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'pas encore signé', 'salma@gmail.com', 'influencer'),
(12, 12, 'chanel@gmail.com', 'Hey Chanel, My name is salma jana and I&#039;m Marketer, drop shipper , content creator. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'pas encore signé', 'salma@gmail.com', 'influencer'),
(12, 5, 'hm@gmail.com', 'Hey H&amp;M, My name is salma jana and I&#039;m Marketer, drop shipper , content creator. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'pas encore signé', 'salma@gmail.com', 'influencer'),
(11, 5, 'hm@gmail.com', 'Hi samia The team H&amp;M loved your post about your favorite clothes and fashion. At H&amp;M, we make Clothing brand for women and men. We’d love to send some your way so you can give it a try and share with your audience!\r\nLet me know if you’d be interested - thanks! -Kristen ', 'Signed', 'samia@gmail.com', 'brand'),
(11, 8, 'bershka@gmail.com', 'Hey Bershka, My name is samia hilali and I&#039;m étudiante en université, influenceuse. I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!', 'pas encore signé', 'samia@gmail.com', 'influencer');

-- --------------------------------------------------------

--
-- Structure de la table socialLMedia
--

CREATE TABLE socialLMedia
(
  email varchar
(255) NOT NULL,
  facebook varchar
(400) NOT NULL,
  instagram varchar
(400) NOT NULL,
  tiktok varchar
(400) NOT NULL,
  youtube varchar
(400) NOT NULL,
  snapchat varchar
(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table socialLMedia
--

INSERT INTO socialLMedia (
email,
facebook
, instagram, tiktok, youtube, snapchat) VALUES
('tarik@gmail.com', '', '', 'https://www.tiktok.com/amine', '', 'https://www.snapchat.com/amine'),
('said@gmail.com', '', 'https://www.instagram.com/said', 'https://www.tiktok.com/said', 'https://www.youtube.com/said', ''),
('samia@gmail.com', '', 'https://www.instagram.com/samia', 'https://www.tiktok.com/samia', '', 'https://www.snapchat.com/samia'),
('salma@gmail.com', '', 'https://www.instagram.com/salma', 'https://www.tiktok.com/salma', 'https://www.youtube.com/salma', ''),
('louisa@gmail.com', '', 'https://www.instagram.com/louisa', 'https://www.tiktok.com/louisa', 'https://www.youtube.com/louisa', '');

-- --------------------------------------------------------

--
-- Structure de la table utilisateur
--

CREATE TABLE utilisateur
(
  email varchar
(255) NOT NULL,
  password varchar
(255) NOT NULL,
  statut varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table utilisateur
--

INSERT INTO utilisateur (email,
password
, statut) VALUES
('balenciaga@gmail.com', '0000', 'brand'),
('bershka@gmail.com', '0000', 'brand'),
('chanel@gmail.com', '0000', 'brand'),
('dior@gmail.com', '0000', 'brand'),
('ghad@gmail.com', '0000', 'brand'),
('hm@gmail.com', '0000', 'brand'),
('louisa@gmail.com', '0000', 'influenceur'),
('pull@gmail.com', '0000', 'brand'),
('said@gmail.com', '0000', 'influenceur'),
('salma@gmail.com', '0000', 'influenceur'),
('samia@gmail.com', '0000', 'influenceur'),
('spring@gmail.com', '0000', 'brand'),
('tarik@gmail.com', '0000', 'influenceur'),
('vans@gmail.com', '0000', 'brand');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table Brand
--
ALTER TABLE Brand
ADD PRIMARY KEY
(id),
ADD KEY email
(email);

--
-- Index pour la table influenceur
--
ALTER TABLE influenceur
ADD PRIMARY KEY
(id),
ADD KEY email
(email);

--
-- Index pour la table socialLMedia
--
ALTER TABLE socialLMedia
ADD KEY email
(email);

--
-- Index pour la table utilisateur
--
ALTER TABLE utilisateur
ADD PRIMARY KEY
(email);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table Brand
--
ALTER TABLE Brand
  MODIFY id int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table influenceur
--
ALTER TABLE influenceur
  MODIFY id int
(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table Brand
--
ALTER TABLE Brand
ADD CONSTRAINT brand_ibfk_1 FOREIGN KEY
(email) REFERENCES utilisateur
(email);

--
-- Contraintes pour la table influenceur
--
ALTER TABLE influenceur
ADD CONSTRAINT influenceur_ibfk_1 FOREIGN KEY
(email) REFERENCES utilisateur
(email);

--
-- Contraintes pour la table socialLMedia
--
ALTER TABLE socialLMedia
ADD CONSTRAINT sociallmedia_ibfk_1 FOREIGN KEY
(email) REFERENCES utilisateur
(email);