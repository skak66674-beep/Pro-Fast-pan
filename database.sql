CREATE DATABASE IF NOT EXISTS pan_portal;
USE pan_portal;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    is_paid INT DEFAULT 0
);

INSERT INTO users (username, password, is_paid) VALUES ('retailer01', '123456', 0);
