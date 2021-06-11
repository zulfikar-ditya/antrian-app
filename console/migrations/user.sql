-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 04:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role_id`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'superuser', '0vMqX5qhszCkyLQuh89zyPl8UYG5PmZ7', '$2y$13$eFPKcD6pCoMaa9cBKw0pZ.A.FMk4oSUjlsCSTOJ7VAgOKx.fg9LU.', NULL, 'superuser@mail.com', 1, 10, 1623378579, 1623378625, 'hmM8UVnHeuOtx6F4PnwNzpP51xedDSwE_1623378579'),
(2, 'admin', 'Kzq2ibhUVzGhjs67Qzz4BMfdqbUW68bu', '$2y$13$ctjPcz6WQa261D4JM9y2J.IYWZS2ZRcHvcUg2DUkTJRYLOfNdS2cu', NULL, 'admin@admin.com', 2, 10, 1623378656, 1623378697, 'Ulq1K3GOFgfR1jgtg-L-aDk9myRKY2Zf_1623378656'),
(3, 'operator', 'LTzOuGzSRqdxoCpdjTcVxwgMe9frUEDi', '$2y$13$iSMY9ZVphM9nW32YViXBzetV/C.B1KOQcCe37RqsmKr6bu/N30nBW', NULL, 'operator@mail.com', 3, 10, 1623378736, 1623378764, 'sOmDSuYPRPs2gmFXgZqJgJ9q8lOH7wEp_1623378736'),
(4, 'dokter', 'EtGmoseDo3KOXsa9XSIvwTwg5BJ-7_y8', '$2y$13$tM7KFG1Z3ijTPRkVdlKAqOdEZGwBASaEuhR2Lcarq8N6sZjssgwDi', NULL, 'dokter@mail.com', 4, 10, 1623378821, 1623378842, 'kt5SosuN8lXswNCn5Fur1EW5iZ_-8ixJ_1623378821');