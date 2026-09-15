<?php
/**
 * Lumetech Database Creation & Automated Seeding Script
 */

require_once __DIR__ . '/../includes/config.php';

try {
    // 1. Connect to MySQL server
    $pdo = new PDO("mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // 2. Create Database if not exists
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `" . DB_NAME . "` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $pdo->exec("USE `" . DB_NAME . "`;");

    echo "✔ Database [" . DB_NAME . "] created or verified." . PHP_EOL;

    // 3. Create Tables
    $queries = [
        "CREATE TABLE IF NOT EXISTS `users` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `username` VARCHAR(50) NOT NULL UNIQUE,
            `email` VARCHAR(100) NOT NULL UNIQUE,
            `password_hash` VARCHAR(255) NOT NULL,
            `role` VARCHAR(20) DEFAULT 'admin',
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;",

        "CREATE TABLE IF NOT EXISTS `leads` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `form_type` VARCHAR(50) DEFAULT 'contact',
            `full_name` VARCHAR(100) NOT NULL,
            `email` VARCHAR(100) NOT NULL,
            `phone` VARCHAR(30) DEFAULT NULL,
            `company` VARCHAR(100) DEFAULT NULL,
            `service` VARCHAR(100) DEFAULT NULL,
            `budget` VARCHAR(50) DEFAULT NULL,
            `message` TEXT DEFAULT NULL,
            `ip_address` VARCHAR(45) DEFAULT NULL,
            `status` VARCHAR(20) DEFAULT 'new',
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;",

        "CREATE TABLE IF NOT EXISTS `services` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `slug` VARCHAR(100) NOT NULL UNIQUE,
            `title` VARCHAR(150) NOT NULL,
            `icon` VARCHAR(50) DEFAULT 'bi-code-slash',
            `short_desc` TEXT NOT NULL,
            `full_desc` TEXT NOT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;",

        "CREATE TABLE IF NOT EXISTS `products` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `slug` VARCHAR(100) NOT NULL UNIQUE,
            `name` VARCHAR(150) NOT NULL,
            `category` VARCHAR(100) NOT NULL,
            `badge` VARCHAR(100) DEFAULT NULL,
            `short_desc` TEXT NOT NULL,
            `full_desc` TEXT NOT NULL,
            `tagline` VARCHAR(255) DEFAULT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;",

        "CREATE TABLE IF NOT EXISTS `blogs` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `slug` VARCHAR(100) NOT NULL UNIQUE,
            `title` VARCHAR(200) NOT NULL,
            `author` VARCHAR(100) NOT NULL,
            `role` VARCHAR(100) DEFAULT NULL,
            `date` VARCHAR(50) DEFAULT NULL,
            `read_time` VARCHAR(30) DEFAULT NULL,
            `category` VARCHAR(100) NOT NULL,
            `excerpt` TEXT NOT NULL,
            `content` LONGTEXT NOT NULL,
            `image` VARCHAR(255) DEFAULT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;",

        "CREATE TABLE IF NOT EXISTS `locations` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `slug` VARCHAR(50) NOT NULL UNIQUE,
            `city_name` VARCHAR(100) NOT NULL,
            `state_name` VARCHAR(100) NOT NULL,
            `meta_title` VARCHAR(255) NOT NULL,
            `meta_desc` TEXT NOT NULL,
            `h1_title` VARCHAR(255) NOT NULL,
            `local_intro` TEXT NOT NULL,
            `address` VARCHAR(255) DEFAULT NULL,
            `phone` VARCHAR(50) DEFAULT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;"
    ];

    foreach ($queries as $sql) {
        $pdo->exec($sql);
    }
    echo "✔ All database tables initialized." . PHP_EOL;

    // 4. Seed Default Admin User
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM `users` WHERE `username` = 'admin'");
    $stmt->execute();
    if ($stmt->fetchColumn() == 0) {
        $admin_pass = password_hash('admin123', PASSWORD_BCRYPT);
        $insert_admin = $pdo->prepare("INSERT INTO `users` (`username`, `email`, `password_hash`, `role`) VALUES ('admin', 'admin@lumetech.info', ?, 'superadmin')");
        $insert_admin->execute([$admin_pass]);
        echo "✔ Default admin created: [username: admin | pass: admin123]" . PHP_EOL;
    }

    echo PHP_EOL . "Database setup completed successfully!" . PHP_EOL;

} catch (PDOException $e) {
    echo "Database Setup Error: " . $e->getMessage() . PHP_EOL;
}
