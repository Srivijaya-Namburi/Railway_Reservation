CREATE DATABASE IF NOT EXISTS railway;
USE railway;

CREATE TABLE trains (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    source VARCHAR(100),
    destination VARCHAR(100),
    departure TIME
);

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    train_id INT,
    seat VARCHAR(50)
);

CREATE TABLE food_orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    train VARCHAR(50),
    food VARCHAR(50)
);

CREATE TABLE sos_reports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    message TEXT
);

-- Sample train data
INSERT INTO trains (name, source, destination, departure) VALUES
('Express 101', 'Hyderabad', 'Chennai', '06:00:00'),
('InterCity 202', 'Mumbai', 'Pune', '08:30:00'),
('Duronto 303', 'Delhi', 'Kolkata', '17:45:00');
