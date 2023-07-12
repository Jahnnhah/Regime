CREATE DATABASE regime;

USE regime;

CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `user_name` varchar(255),
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'manavotra', '123', 'manavotra'),
(2, 'mia', '1234', 'mia');

/*profil*/
CREATE TABLE user_info (
  id_user INT(11),
  taille FLOAT NOT NULL,
  poids FLOAT NOT NULL,
  genre ENUM('Homme', 'Femme') NOT NULL,
  age INT NOT NULL,
  FOREIGN KEY (id_user) REFERENCES users(id)
)ENGINE=InnoDB;

CREATE TABLE objectifs (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  utilisateur_id INT(11) NOT NULL,
  objectif ENUM('Augmenter le poids', 'Diminuer le poids', 'Suggestion'),
  FOREIGN KEY (utilisateur_id) REFERENCES users(id)
);


CREATE TABLE utilisateur_objectif (
  id_user_goal INT AUTO_INCREMENT PRIMARY KEY,
  utilisateur_id INT NOT NULL,
  objectif_id INT NOT NULL,
  FOREIGN KEY (utilisateur_id) REFERENCES users(id),
  FOREIGN KEY (objectif_id) REFERENCES objectifs(id)
);

CREATE TABLE transactions (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  utilisateur_id INT(11) NOT NULL,
  montant DECIMAL(10, 2) NOT NULL,
  date_transaction DATE,
  FOREIGN KEY (utilisateur_id) REFERENCES users(id)
);

CREATE TABLE codes_recharge (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  code VARCHAR(50) NOT NULL,
  montant DECIMAL(10, 2) NOT NULL,
  est_utilise TINYINT(1) DEFAULT 0
);

CREATE TABLE activites (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  type ENUM('Augmenter', 'Diminuer', 'Suggérer') NOT NULL,
  nom VARCHAR(50) NOT NULL,
  description TEXT
);

-- tohiany

CREATE TABLE regimes (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  type ENUM('Augmenter', 'Diminuer', 'Suggérer') NOT NULL,
  nom VARCHAR(50) NOT NULL,
  description TEXT
)ENGINE=InnoDB;


/*novaina ito*/
CREATE TABLE wallet(
  id_olona int(11),
  vola_ao DECIMAL(10, 2),
  FOREIGN KEY (id_olona) REFERENCES users(id)
)ENGINE=InnoDB;

/*novaina ito*/
CREATE TABLE composition(
  id_regime INT(11),
  p_viande FLOAT,
  p_poisson FLOAT,
  p_volaille FLOAT,
  FOREIGN KEY (id_regime) REFERENCES regimes(id)
)ENGINE=InnoDB;


INSERT INTO regimes (type, nom, description) VALUES
  ('Augmenter', 'Régime hypercalorique', 'Régime riche en calories pour favoriser la prise de poids.'),
  ('Augmenter', 'Régime riche en glucides', 'Régime favorisant apport élevé en glucides pour augmenter énergie.'),
  ('Diminuer', 'Régime cétogène', 'Régime très faible en glucides pour induire un état de cétose et favoriser la perte de poids.'),
  ('Diminuer', 'Régime végétarien', 'Régime excluant la viande et le poisson pour une alimentation basée sur les végétaux.'),
  ('Suggérer', 'Régime méditerranéen', 'Régime axé sur les aliments sains de la cuisine méditerranéenne pour une meilleure santé.'),
  ('Suggérer', 'Régime flexitarien', 'Régime principalement végétarien avec une certaine flexibilité pour la consommation de viande.'),
  ('Augmenter', 'Régime riche en fibres', 'Régime contenant une quantité élevée de fibres alimentaires pour favoriser la digestion.'),
  ('Augmenter', 'Régime à base de fruits et légumes', 'Régime centré sur la consommation abondante de fruits et légumes frais.'),
  ('Diminuer', 'Régime sans gluten', 'Régime excluant le gluten, principalement suivi par les personnes atteintes de la maladie cœliaque.'),
  ('Diminuer', 'Régime faible en gras', 'Régime limitant la consommation de graisses pour favoriser la perte de poids.'),
  ('Suggérer', 'Régime DASH', 'Régime conçu pour réduire hypertension artérielle en mettant accent sur les aliments sains.'),
  ('Suggérer', 'Régime paléo', 'Régime basé sur les aliments consommés par nos ancêtres du Paléolithique, tels que viandes maigres et légumes. ');

  INSERT INTO activites (type, nom, description) VALUES
  ('Augmenter', 'Entraînement en musculation', 'Séances entraînement avec des poids pour développer la masse musculaire.'),
  ('Augmenter', 'Natation', 'Activité aquatique qui sollicite tous les muscles du corps pour renforcer la condition physique.'),
  ('Diminuer', 'Marche rapide', 'Marche soutenue pour améliorer endurance cardiovasculaire et brûler des calories.'),
  ('Diminuer', 'Cyclisme', 'Pratique du vélo pour renforcer les jambes et améliorer la condition physique.'),
  ('Suggérer', 'Pilates', 'Méthode exercice physique visant à renforcer les muscles profonds et améliorer la posture.'),
  ('Suggérer', 'Danse', 'Activité ludique qui permet de se dépenser tout en améliorant la coordination et la souplesse.'),
  ('Augmenter', 'Entraînement en circuit', 'Séance entraînement composée exercices variés pour renforcement ensemble du corps.'),
  ('Augmenter', 'Entraînement en HIIT', 'Entraînement par intervalles à haute intensité pour brûler des calories et améliorer endurance.'),
  ('Diminuer', 'Yoga', 'Pratique combinant mouvements, respiration et méditation pour favoriser la relaxation et la souplesse.'),
  ('Diminuer', 'Aérobic', 'Activité cardiovasculaire combinant des mouvements dynamiques sur de la musique rythmée.'),
  ('Suggérer', 'Tai-chi', 'Art martial chinois caractérisé par des mouvements lents et fluides pour améliorer la santé et la relaxation.'),
  ('Suggérer', 'Zumba', 'Programme entraînement basé sur la danse et la musique latino-américaine pour une activité dynamique et amusante.');