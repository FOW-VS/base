# foodorderingwebsite

requirements:
->php
->xampp server or any

clone this repo to htdocs of xampp directory and start apache and mysql server with xampp server

make ur database in phpmyadmin using the below command

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

or just copy the sql file to xampp server database...

use localhost/base/webite.php to connect to the site
