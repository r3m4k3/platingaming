-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: mysql51.local.opcom.pl
-- Czas generowania: 22 Lip 2016, 20:27
-- Wersja serwera: 5.6.28-log
-- Wersja PHP: 5.5.34-pl0-gentoo

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `platingaming`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `task_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `message`, `created_at`, `task_id`) VALUES
(2, 1, 'Test', '2016-07-21 13:00:15', 1),
(3, 1, 'Test', '2016-07-21 13:00:18', 1),
(5, 7, 'Test', '2016-07-21 13:00:20', 1),
(10, 1, 'testwowwwww', '2016-07-22 20:16:46', 12),
(11, 1, 'testwowwwww', '2016-07-22 20:19:19', 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`id`, `name`, `key`, `description`, `parent_id`, `is_active`) VALUES
(1, 'manager', 'manager', 'Manager account', NULL, 1),
(2, 'developer', 'developer', 'Developer account', NULL, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `is_active`) VALUES
(1, 'NEW', 1),
(2, 'IN PROGRESS', 1),
(3, 'REVIEW', 1),
(4, 'DONE', 1),
(9, 'Not Active', 0),
(12, 'wow2', 1),
(13, 'nowy', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `assignee_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `title` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `tasks`
--

INSERT INTO `tasks` (`id`, `assignee_id`, `status_id`, `title`, `created_at`, `author_id`, `content`) VALUES
(1, NULL, 3, 'Testowe', '2016-07-19 00:00:00', 1, 'Treść'),
(3, 1, 2, 'test', '2016-07-20 18:55:50', 1, 'www'),
(5, NULL, 2, 'test', '2016-07-20 19:22:57', 1, 'www'),
(10, 1, 1, 'wow', '2016-07-22 16:29:35', 1, 'dfssdsff'),
(11, 7, 1, 'sdasdadsa', '2016-07-22 17:33:18', 1, 'sdadsasda'),
(12, 1, 1, 'sdasdadsa', '2016-07-22 17:36:38', 1, 'sdadsasda'),
(13, 1, 1, 'sdasdadsa', '2016-07-22 17:36:41', 1, 'sdadsasda'),
(14, 1, 1, 'sdasdadsa', '2016-07-22 17:39:41', 1, 'sdadsasda'),
(15, NULL, 1, 'sdasdadsa', '2016-07-22 17:39:56', 1, 'sdadsasda'),
(19, 1, 1, 'testowy', '2016-07-22 19:06:36', 1, 'ffdsdsffds'),
(20, 1, 2, 'testowyd1223', '2016-07-22 19:07:14', 1, 'ffdsdsffdse'),
(21, NULL, 1, 'asaw', '2016-07-22 19:47:49', 1, 'sad');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_non_expired` tinyint(1) NOT NULL,
  `account_non_locked` tinyint(1) NOT NULL,
  `credentials_non_expired` tinyint(1) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `registration_date` datetime DEFAULT NULL,
  `action_token` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `account_non_expired`, `account_non_locked`, `credentials_non_expired`, `enabled`, `registration_date`, `action_token`) VALUES
(1, 'admin', 'admin@platingaming.com', '$2y$13$4qAvOIXyTKgR8ri/e1muAeWnKFdEKgR.buT5pi/kljEAihaYUMjwG', 1, 1, 1, 1, '2016-07-19 00:00:00', NULL),
(7, 'dev', 'dev@o2.pl', '$2y$13$g.8cNfPDWT/y3HnNJvWct.cuKGvPyWvkMJBqk8RYcaEt36uOuz9sO', 1, 1, 1, 1, '2016-07-21 15:02:01', NULL),
(9, 'test', 'wow@o2.pl', '$2y$13$L4CWf59FCIw7.zf6KvZItOUJ1P2U5TZFlUqsZym5.PriyG7/Sbkry', 1, 1, 1, 0, '2016-07-22 18:50:47', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(7, 2),
(9, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5F9E962AA76ED395` (`user_id`),
  ADD KEY `IDX_5F9E962A8DB60186` (`task_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B63E2EC74E645A7E` (`key`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_505865976BF700BD` (`status_id`),
  ADD KEY `IDX_5058659759EC7D60` (`assignee_id`),
  ADD KEY `IDX_50586597F675F31B` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `IDX_54FCD59FA76ED395` (`user_id`),
  ADD KEY `IDX_54FCD59FD60322AC` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT dla tabeli `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT dla tabeli `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962A8DB60186` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`),
  ADD CONSTRAINT `FK_5F9E962AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `FK_5058659759EC7D60` FOREIGN KEY (`assignee_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_505865976BF700BD` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `FK_50586597F675F31B` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `FK_54FCD59FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_54FCD59FD60322AC` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
