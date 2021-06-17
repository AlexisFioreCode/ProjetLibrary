


CREATE TABLE `books` (
  `id` int(11) UNSIGNED NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `resume` text DEFAULT NULL,
  `created_date` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `borrowed` tinyint(1) NOT NULL,
  `people_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `books` (`id`, `book_name`, `writer`, `resume`, `created_date`, `category`, `borrowed`, `people_id`) VALUES
(1, 'Le dernier jour d\'un condamné', 'Victor Hugo', 'Ce roman se présente comme le journal d\'un condamné à mort écrit durant les vingt-quatre dernières heures de son existence dans lequel il raconte ce qu\'il a vécu depuis le début de son procès jusqu\'au moment de son exécution, soit environ cinq semaines de sa vie.', '1829 (en anonyme) puis 1832 ', 'Fiction , Roman', 0, NULL),
(2, 'Harry potier à l\'école des sourciers', 'Jiké Rouling', 'Harry va à une école pour devenir le plus grand sourcier de sa génération , il devra affronter de nombreux défis pour parvenir à  en devenir un.', '26 juin 1997', 'Fiction, Magie', 0, NULL);



CREATE TABLE `people` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `card_number` int(11) NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `people` (`id`, `firstname`, `lastname`, `card_number`, `adress`) VALUES
(1, 'Jean', 'Paul', 123, '2 route des ptischiens'),
(2, 'Richard', 'Dupond', 456, '9 avenue des maracas');



ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `people_id` (`people_id`);


ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `books`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`);
COMMIT;
