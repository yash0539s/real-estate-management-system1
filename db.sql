

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;







CREATE DATABASE IF NOT EXISTS project_d1;
USE project_d1;



CREATE TABLE admins(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20) NOT NULL,
  password VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO admins  VALUES
(1,'yash', 'yash0529s');



CREATE TABLE `messages` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `number` VARCHAR(10) NOT NULL,
  `message` VARCHAR(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `property` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `property_name` VARCHAR(50) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `type` VARCHAR(10) NOT NULL,
  `offer` VARCHAR(10) NOT NULL,
  `status` VARCHAR(50) NOT NULL,
  `furnished` VARCHAR(50) NOT NULL,
  `bhk` INT NOT NULL,
  `deposite` DECIMAL(10,2) NOT NULL,
  `bedroom` INT NOT NULL,
  `bathroom` INT NOT NULL,
  `balcony` INT NOT NULL,
  `carpet` DECIMAL(10,2) NOT NULL,
  `age` INT NOT NULL,
  `total_floors` INT NOT NULL,
  `room_floor` INT NOT NULL,
  `loan` VARCHAR(50) NOT NULL,
  `lift` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `security_guard` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `play_ground` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `garden` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `water_supply` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `power_backup` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `parking_area` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `gym` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `shopping_mall` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `hospital` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `school` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `market_area` ENUM('yes', 'no') NOT NULL DEFAULT 'no',
  `image_01` VARCHAR(50) NOT NULL,
  `image_02` VARCHAR(50) NOT NULL,
  `image_03` VARCHAR(50) NOT NULL,
  `image_04` VARCHAR(50) NOT NULL,
  `image_05` VARCHAR(50) NOT NULL,
  `description` VARCHAR(1000) NOT NULL,
  `date` DATE NOT NULL DEFAULT current_timestamp(),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `requests` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `property_id` INT NOT NULL,
  `sender` VARCHAR(20) NOT NULL,
  `receiver` VARCHAR(20) NOT NULL,
  `date` DATE NOT NULL DEFAULT current_timestamp(),
  FOREIGN KEY (`property_id`) REFERENCES `property`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `saved` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `property_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  FOREIGN KEY (`property_id`) REFERENCES `property`(`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(50) NOT NULL,
  `number` VARCHAR(10) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;


