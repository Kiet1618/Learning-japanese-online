  -- phpMyAdmin SQL Dump
  -- version 5.0.2
  -- https://www.phpmyadmin.net/
  --
  -- Host: 127.0.0.1
  -- Generation Time: Nov 20, 2020 at 02:00 AM
  -- Server version: 10.4.14-MariaDB
  -- PHP Version: 7.2.33

  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  START TRANSACTION;
  SET time_zone = "+00:00";
  --
  -- Database: `music`
  --
CREATE TABLE `users` (
    `id` int(30) NOT NULL,
    `firstname` varchar(200) NOT NULL,
    `lastname` varchar(200) NOT NULL,
    `gender` varchar(50) NOT NULL,
    `contact` varchar(50) NOT NULL,
    `address` text NOT NULL,
    `email` varchar(200) NOT NULL,
    `password` text NOT NULL,
    `date_created` datetime NOT NULL DEFAULT current_timestamp()
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);