CREATE DATABASE IF NOT EXISTS codecafedb

use codecafedb;

CREATE TABLE IF NOT EXISTS tbl_feedback (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    NAMES VARCHAR(20) NULL,
    RATING INT(5) NULL,
    MESSAGES VARCHAR (1200) NULL
)AUTO_INCREMENT = 1;

INSERT INTO tbl_customerfeedback (NAMES, RATING, MESSAGES) VALUES ('luke', 3, 'burn coffee not happy');
INSERT INTO tbl_customerfeedback (NAMES, RATING, MESSAGES) VALUES ('abi', 5, 'free wifi good services');
INSERT INTO tbl_customerfeedback (NAMES, RATING, MESSAGES) VALUES ('vili', 2, 'still hungry');
INSERT INTO tbl_customerfeedback (NAMES, RATING, MESSAGES) VALUES ('ben', 5, 'great service');
INSERT INTO tbl_customerfeedback (NAMES, RATING, MESSAGES) VALUES ('john', 5, 'great food');
INSERT INTO tbl_customerfeedback (NAMES, RATING, MESSAGES) VALUES ('peter', 5,'great food and coffee');


CREATE TABLE IF NOT EXISTS tbl_contact (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    NAMES VARCHAR(20) NULL,
    EMAIL VARCHAR(255) NULL, 
    MESSAGES VARCHAR (1200) NULL
)AUTO_INCREMENT = 1;

INSERT INTO tbl_contact (NAMES, EMAIL, MESSAGES) VALUES ('luke', 'foxyflowware@gmail.com', 'burn coffee not happy');
INSERT INTO tbl_contact (NAMES, EMAIL, MESSAGES) VALUES ('abi', 'parsady@hotmail.com','free wifi good services');
INSERT INTO tbl_contact (NAMES, EMAIL, MESSAGES) VALUES ('vili', 'fihaki@yahoo.com','still hungry');
INSERT INTO tbl_contact (NAMES, EMAIL, MESSAGES) VALUES ('ben', 'benny@icloud.com','great service');
INSERT INTO tbl_contact (NAMES, EMAIL, MESSAGES) VALUES ('john', 'j.snow@gmail.com','great food');
INSERT INTO tbl_contact (NAMES, EMAIL, MESSAGES) VALUES ('peter', 'p.jackson@hotmail.com','great food and coffee');

CREATE TABLE IF NOT EXISTS tbl_users (

    ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    USER VARCHAR(20) NOT NULL,
    PASS VARCHAR(255) NOT NULL,
    CREATED timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)AUTO_INCREMENT = 1;


CREATE TABLE IF NOT EXISTS tbl_hotdrinks (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    HOTDRINKS VARCHAR(20) NULL,
    QTY INT(20) NULL, 
    SIZE VARCHAR (10) NULL,
    PRICE VARCHAR(20) NULL
)AUTO_INCREMENT = 1;

INSERT INTO tbl_hotdrinks (HOTDRINKS, QTY, SIZE, PRICE) VALUES ('latte', 1, 'L',  '4.50');



CREATE TABLE IF NOT EXISTS tbl_colddrinks (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    COLDDRINKS VARCHAR(20) NOT NULL,
    QTY INT(20) NOT NULL, 
    SIZE VARCHAR (10) NOT NULL,
    PRICE VARCHAR(20) NOT NULL
)AUTO_INCREMENT = 1;

INSERT INTO tbl_colddrinks (COLDDRINKS, QTY, SIZE, PRICE) VALUES ('milkshake', 1, 'L',  '5.50');


CREATE TABLE IF NOT EXISTS tbl_food (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    FOOD VARCHAR(20) NOT NULL,
    QTY INT(10) NOT NULL, 
    PRICE VARCHAR(20) NOT NULL
)AUTO_INCREMENT = 1;

INSERT INTO tbl_food (FOOD, QTY, PRICE) VALUES ('Meat Pies', '50','3.50');
INSERT INTO tbl_food (FOOD, QTY, PRICE) VALUES ('Sausage Roll', '50','2.50');
INSERT INTO tbl_food (FOOD, QTY, PRICE) VALUES ('Ham & Cheese Sandwich', '50','4.50');
INSERT INTO tbl_food (FOOD, QTY, PRICE) VALUES ('Meat Pies', '50','3.50');
INSERT INTO tbl_food (FOOD, QTY, PRICE) VALUES ('Smoke Salm', '50','3.50');

CREATE TABLE IF NOT EXISTS tbl_specials (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    HOTDRINKS VARCHAR(20) NOT NULL,
    SIZE VARCHAR (10) NOT NULL,
    PRICE VARCHAR(20) NOT NULL
)AUTO_INCREMENT = 1;

INSERT INTO tbl_hotdrinks (HOTDRINKS, SIZE, PRICE) VALUES ('latte','L',  '2.50');