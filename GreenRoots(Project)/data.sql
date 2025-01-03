CREATE DATABASE mydb;
USE mydb;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    age INT,
    number VARCHAR(15)
);

INSERT INTO users (name, email, age, number) VALUES
('John Doe', 'john.doe@example.com', 28, '123-456-7890'),
('Jane Smith', 'jane.smith@example.com', 34, '234-567-8901'),
('Robert Brown', 'robert.brown@example.com', 45, '345-678-9012'),
('Emily Davis', 'emily.davis@example.com', 22, '456-789-0123'),
('Michael Wilson', 'michael.wilson@example.com', 38, '567-890-1234');