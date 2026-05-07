CREATE DATABASE prishtina_sports_shop;

USE prishtina_sports_shop;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO products (name, description, price, image) VALUES

('Football',
 'Professional football for matches and training.',
 25.00,
 'football.png'),

('Basketball',
 'High quality basketball for indoor and outdoor games.',
 30.00,
 'basketball.png'),

('10KG Dumbbell',
 'Heavy dumbbell for gym and strength workouts.',
 40.00,
 '10kgdumbell.png'),

('Blue Shoes',
 'Comfortable blue sports shoes.',
 55.00,
 'blueshoes.jpg'),

('Gym Ball',
 'Fitness gym ball for workouts and stretching.',
 20.00,
 'gymball.png'),

('Pull Up Bar',
 'Strong pull up bar for home workouts.',
 35.00,
 'pullupbar.png'),

('White Shoes',
 'Stylish white running shoes.',
 60.00,
 'whiteshoes.png'),

('Yellow Shoes',
 'Sporty yellow shoes with modern design.',
 58.00,
 'yellowshoes.png');