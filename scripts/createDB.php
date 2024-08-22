<?php
    $link = mysqli_connect("localhost", "root", "");
    $query = "CREATE DATABASE IF NOT EXISTS fixlab";
    $result = $link->query($query);
    $db = $link->select_db("fixlab");
    $query = "CREATE TABLE IF NOT EXISTS fixlab(
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `name` TEXT NOT NULL,
        `description` TEXT,
        `link` TEXT NOT NULL,
        `root` TEXT NOT NULL,
        `type` TEXT NOT NULL,
        `final` TEXT NOT NULL
    )";
    $link->query($query);
    $query = "INSERT INTO `fixlab`(`name`, `link`, `root`, `type`, `final`)
        VALUES ('phone', 'shop.php?page=phone', 'main', 'main', 'category'),
        ('laptop', 'shop.php?page=laptop', 'main', 'main', 'category'
    )";
    $link->query($query);
?>