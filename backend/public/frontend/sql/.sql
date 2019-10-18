CREATE DATABASE IF NOT EXISTS codecafedb

use codecafedb;

CREATE TABLE IF NOT EXISTS tbl_customerfeedback (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(20) NOT NULL,
    RATING INT(5) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL, 
    MESSAGES VARCHAR (1200) NOT NULL,
)AUTO_INCREMENT = 1;

INSERT INTO tbl_customerfeedback (ID, NAME, RATING, EMAIL, MESSAGES) VALUES ('luke', 3, 'foxyflowware@gmail.com', 'burn coffee not happy');
INSERT INTO tbl_customerfeedback (ID, NAME, RATING, EMAIL, MESSAGES) VALUES ('abi', 5, 'parsady@hotmail.com','free wifi good services');
INSERT INTO tbl_customerfeedback (ID, NAME, RATING, EMAIL, MESSAGES) VALUES ('vili', 2, 'fihaki@yahoo.com','still hungry');
INSERT INTO tbl_customerfeedback (ID, NAME, RATING, EMAIL, MESSAGES) VALUES ('ben', 5, 'benny@icloud.com','great service');
INSERT INTO tbl_customerfeedback (ID, NAME, RATING, EMAIL, MESSAGES) VALUES ('john', 5, 'jsnow@gmail.com','great food');
INSERT INTO tbl_customerfeedback (ID, NAME, RATING, EMAIL, MESSAGES) VALUES ('peter', 5, 'pjackson@hotmail.com','great food and coffee');


CREATE TABLE IF NOT EXISTS tbl_contact (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(20) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL, 
    MESSAGES VARCHAR (1200) NOT NULL,
)AUTO_INCREMENT = 1;

INSERT INTO tbl_contact (ID, NAME, EMAIL, MESSAGES) VALUES ('luke', 'foxyflowware@gmail.com', 'burn coffee not happy');
INSERT INTO tbl_contact (ID, NAME, EMAIL, MESSAGES) VALUES ('abi', 'parsady@hotmail.com','free wifi good services');
INSERT INTO tbl_contact (ID, NAME, EMAIL, MESSAGES) VALUES ('vili', 'fihaki@yahoo.com','still hungry');
INSERT INTO tbl_contact (ID, NAME, EMAIL, MESSAGES) VALUES ('ben', 'benny@icloud.com','great service');
INSERT INTO tbl_contact (ID, NAME, EMAIL, MESSAGES) VALUES ('john', 'j.snow@gmail.com','great food');
INSERT INTO tbl_contact (ID, NAME, EMAIL, MESSAGES) VALUES ('peter', 'p.jackson@hotmail.com','great food and coffee');

CREATE TABLE IF NOT EXISTS tbl_users (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    USER VARCHAR(20) NOT NULL,
    PASS VARCHAR(255) NOT NULL, 
)AUTO_INCREMENT = 1;

INSERT INTO tbl_users (ID, USER, PASS) VALUES ('Admin', 'CoDeCaFe101');


CREATE TABLE IF NOT EXISTS tbl_hotdrinks (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    HOTDRINKS VARCHAR(20) NOT NULL,
    QTY INT(20) NOT NULL, 
    SIZE VARCHAR (10) NOT NULL,
    PRICE VARCHAR(20) NOT NULL,
)AUTO_INCREMENT = 1;

INSERT INTO tbl_hotdrinks (ID, HOTDRINKS, QTY, SIZE, PRICE) VALUES ('latte', 1, 'L',  '4.50');



CREATE TABLE IF NOT EXISTS tbl_colddrinks (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    COLDDRINKS VARCHAR(20) NOT NULL,
    QTY INT(20) NOT NULL, 
    SIZE VARCHAR (10) NOT NULL,
    PRICE VARCHAR(20) NOT NULL,
)AUTO_INCREMENT = 1;

INSERT INTO tbl_colddrinks (ID, COLDDRINKS, QTY, SIZE, PRICE) VALUES ('milkshake', 1, 'L',  '5.50');


CREATE TABLE IF NOT EXISTS tbl_food (

    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    FOOD VARCHAR(20) NOT NULL,
    QTY INT(10) NOT NULL, 
    PRICE VARCHAR(20) NOT NULL,
)AUTO_INCREMENT = 1;

INSERT INTO tbl_food (ID,FOOD, QTY, PRICE) VALUES ('Meat Pies', '50','3.50');
INSERT INTO tbl_food (ID,FOOD, QTY, PRICE) VALUES ('Sausage Roll', '50','2.50');
INSERT INTO tbl_food (ID,FOOD, QTY, PRICE) VALUES ('Ham & Cheese Sandwich', '50','4.50');
INSERT INTO tbl_food (ID,FOOD, QTY, PRICE) VALUES ('Meat Pies', '50','3.50');
INSERT INTO tbl_food (ID,FOOD, QTY, PRICE) VALUES ('Smoke Salm', '50','3.50');