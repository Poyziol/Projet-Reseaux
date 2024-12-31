DROP TABLE IF EXISTS gift_choice;
DROP TABLE IF EXISTS gift_gift;
DROP TABLE IF EXISTS gift_depot;
DROP TABLE IF EXISTS gift_categorie;
DROP TABLE IF EXISTS gift_user;

CREATE TABLE gift_user (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(20),
    password varchar(20),
    is_admin int
);

CREATE TABLE gift_categorie (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(20)
);

CREATE TABLE gift_depot (
    id_depot INT AUTO_INCREMENT PRIMARY KEY,
    id_user int,
    value decimal(10,2),
    foreign key(id_user) references gift_user(id_user)
);

CREATE TABLE gift_gift (
    id_gift INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(20),
    id_categorie int,
    montant int,
    foreign key(id_categorie) references gift_categorie(id_categorie)
);

CREATE TABLE gift_choice (
    id_choice INT AUTO_INCREMENT PRIMARY KEY,
    id_user int,
    id_gift int,
    foreign key(id_user) references gift_user(id_user),
    foreign key(id_gift) references gift_gift(id_gift)
);

-- Insérer des utilisateurs
INSERT INTO gift_user (name, password, is_admin) VALUES 
('Alice', 'password123', 0),
('Bob', 'securePass', 1),
('Charlie', 'mypassword', 0);

-- Insérer des catégories
INSERT INTO gift_categorie (name) VALUES 
('Electronics'),
('Books'),
('Clothing'),
('Home Appliances');

-- Insérer des dépôts
INSERT INTO gift_depot (id_user, value) VALUES 
(1, 100.00),
(2, 250.50),
(3, 75.00);

-- Insérer des cadeaux
INSERT INTO gift_gift (name, id_categorie, montant) VALUES
('Smartphone', 1, 500),
('Laptop', 1, 1200),
('Tablet', 1, 300),
('Headphones', 1, 150),
('Smartwatch', 1, 200),
('Camera', 1, 450),
('Bluetooth Speaker', 1, 100),
('Drone', 1, 600),
('E-reader', 1, 120),
('Power Bank', 1, 50),

('Fiction Book', 2, 20),
('Non-fiction Book', 2, 25),
('Cookbook', 2, 30),
('Photography Book', 2, 35),
('Self-help Book', 2, 40),
('Sci-fi Novel', 2, 15),
('History Book', 2, 22),
('Comic Book', 2, 18),
('Poetry Book', 2, 12),
('Art Book', 2, 50),

('T-shirt', 3, 20),
('Sweater', 3, 40),
('Jeans', 3, 50),
('Jacket', 3, 100),
('Sneakers', 3, 60),
('Hat', 3, 25),
('Scarf', 3, 15),
('Gloves', 3, 30),
('Socks', 3, 5),
('Dress', 3, 70),

('Microwave', 4, 150),
('Blender', 4, 80),
('Coffee Machine', 4, 120),
('Washing Machine', 4, 300),
('Refrigerator', 4, 500),
('Dishwasher', 4, 400),
('Vacuum Cleaner', 4, 150),
('Iron', 4, 40),
('Toaster', 4, 35),
('Rice Cooker', 4, 60),

('Electric Kettle', 4, 25),
('Mixer', 4, 45),
('Air Purifier', 4, 100),
('Hair Dryer', 4, 40),
('Electric Grill', 4, 80),
('Sewing Machine', 4, 150),
('Food Processor', 4, 130),
('Coffee Grinder', 4, 30),
('Air Fryer', 4, 120),
('Induction Cooker', 4, 180);

-- Insérer des choix
INSERT INTO gift_choice (id_user, id_gift) VALUES 
(1, 1),
(1, 3),
(2, 2),
(3, 4),
(3, 5);
