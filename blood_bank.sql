CREATE DATABASE IF NOT EXISTS blood_bank;
USE blood_bank;

CREATE TABLE donors (
    donor_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    gender VARCHAR(10),
    blood_type VARCHAR(5),
    contact VARCHAR(15),
    last_donation_date DATE
);

CREATE TABLE blood_stock (
    blood_type VARCHAR(5) PRIMARY KEY,
    units_available INT
);

CREATE TABLE blood_requests (
    request_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    blood_type VARCHAR(5),
    units_needed INT,
    contact VARCHAR(15),
    status VARCHAR(20) DEFAULT 'Pending'
);

CREATE TABLE urgent_requests (
    urgent_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    blood_type VARCHAR(5),
    units_needed INT,
    contact VARCHAR(15),
    location TEXT,
    date_requested DATETIME DEFAULT CURRENT_TIMESTAMP
);