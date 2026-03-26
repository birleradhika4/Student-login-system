CREATE DATABASE student_db;

USE student_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    father_name VARCHAR(100),
    mother_name VARCHAR(100),
    dob DATE,
    college VARCHAR(150),
    year VARCHAR(20),
    department VARCHAR(100),
    branch VARCHAR(100),
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255)
);