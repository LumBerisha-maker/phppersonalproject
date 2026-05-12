
CREATE DATABASE IF NOT EXISTS prishtina_sports_shop;

USE prishtina_sports_shop;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100),
email VARCHAR(100),
password VARCHAR(100),
role VARCHAR(50)
);

CREATE TABLE products(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
description TEXT,
price DECIMAL(10,2),
image VARCHAR(255),
category VARCHAR(100)
);

INSERT INTO users(username,email,password,role) VALUES
('admin','admin@gmail.com','admin123','admin'),
('muharrem','muharrem@gmail.com','123456','user'),
('ardit','ardit@gmail.com','123456','user'),
('leon','leon@gmail.com','123456','user');

INSERT INTO products(name,description,price,image,category) VALUES

('Football','Professional football for matches and training.',25,'football.png','Football'),

('Basketball','Official orange basketball with strong grip.',30,'basketball.png','Basketball'),

('Gym Ball','Fitness gym ball for workouts and stretching.',20,'gymball.png','Fitness'),

('10KG Dumbbell','Heavy dumbbell for strength exercises.',45,'10kgdumbell.png','Fitness'),

('Blue Running Shoes','Comfortable blue shoes for running.',60,'blueshoes.jpg','Shoes'),

('White Sport Shoes','Modern white sport shoes.',70,'whiteshoes.png','Shoes'),

('Yellow Sneakers','Stylish yellow sneakers for sports.',65,'yellowshoes.png','Shoes'),

('Pull Up Bar','Strong pull up bar for home gym.',50,'pullupbar.png','Fitness'),

('Volleyball','Professional volleyball for teams.',22,'voley.jpg','Volleyball');
