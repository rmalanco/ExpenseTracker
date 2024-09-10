-- Active: 1725067968575@@127.0.0.1@3306
CREATE DATABASE ExpenseTrackerDB DEFAULT CHARACTER SET = 'utf8mb4';

USE ExpenseTrackerDB;

CREATE TABLE Roles (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
    Description VARCHAR(255) NOT NULL
);

CREATE TABLE Users (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName VARCHAR(50) NULL,
    LastName VARCHAR(50) NULL,
    Email VARCHAR(50) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    RoleID INT NOT NULL,
    FOREIGN KEY (RoleID) REFERENCES Roles (ID)
);

SELECT
    `ID`,
    `FirstName`,
    `LastName`,
    `Email`,
    `Password`,
    `RoleID`
FROM Users;

UPDATE Users SET RoleID = 1 WHERE ID = 1;

SELECT * FROM Users;

-- Borrar la tabla Users
DROP TABLE Users;

-- Creamos 2 roles
INSERT INTO
    Roles (Name, Description)
VALUES ('Admin', 'Administrador'),
    ('User', 'Usuario');

SELECT * FROM Roles;

-- categories table

CREATE TABLE Categories (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
    Description VARCHAR(255) NOT NULL
);

CREATE TABLE Expenses (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT NOT NULL,
    CategoryID INT NOT NULL,
    Amount DECIMAL(10, 2) NOT NULL,
    Description TEXT,
    Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users (ID),
    FOREIGN KEY (CategoryID) REFERENCES Categories (ID)
);

CREATE TABLE Income (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT NOT NULL,
    Amount DECIMAL(10, 2) NOT NULL,
    Source TEXT,
    Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users (ID)
);

CREATE TABLE Budgets (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT NOT NULL,
    CategoryID INT NOT NULL,
    Amount DECIMAL(10, 2) NOT NULL,
    StartDate DATE NOT NULL,
    EndDate DATE NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users (ID),
    FOREIGN KEY (CategoryID) REFERENCES Categories (ID)
);

CREATE TABLE PaymentMethods (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT NOT NULL,
    Name TEXT NOT NULL,
    Details TEXT,
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users (ID)
);