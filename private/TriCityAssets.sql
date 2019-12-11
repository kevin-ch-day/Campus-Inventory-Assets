drop database TriCityAssets;
create database TriCityAssets;
use TriCityAssets;

CREATE TABLE building(
    building_id int(4) PRIMARY KEY,
    building_name VARCHAR(50),
    building_address VARCHAR(100),
	building_city VARCHAR(25),
	building_state VARCHAR(3),
	building_zip VARCHAR(6),
    build_create_date date,
    build_update_date date
);

INSERT INTO building VALUES (001, 'TriCityUnited High School', '700 4th St NW', 'Montgomery', 'MN', '56069', NOW(), NULL);
INSERT INTO building VALUES (002, 'Montgomery Middle School', '101 2nd St NE # 2', 'Montgomery', 'MN', '56069', NOW(), NULL);
INSERT INTO building VALUES (003, 'Lonsdale Elementery', '1000 Idaho St SW', 'Lonsdale', 'MN', '55046', NOW(), NULL);
INSERT INTO building VALUES (004, 'Le Center K-8 School', ' 150 W Tyrone St','Le Center', 'MN', '56057', NOW(), NULL);
INSERT INTO building VALUES (005, 'Tri-City United District Office', ' 1000 Idaho St SW', 'Montgomery', 'MN', '55046', NOW(), NULL);
INSERT INTO building VALUES (006, 'LeCenter Primary School', '150 W Tyrone St', 'Le Center', 'MN', '56057', NOW(), NULL);
/* INSERT INTO building VALUES (007, 'Tri-City United Community Ed', 'Montgomery', NOW(), NULL); */


create table advisor(
    advisor_id int(4) Primary Key,
    advisor_fname VARCHAR(10),
    advisor_lname VARCHAR(25),
    building_id int(4),
    advis_create_date date,
    advis_update_date date,
    FOREIGN KEY(building_id) REFERENCES building(building_id)
);

INSERT INTO advisor VALUES (4001,'Jeff','Ballman',004 , NOW(), NULL);
INSERT INTO advisor VALUES (4002,'Andrew','Bastyr',004 , NOW(), NULL);
INSERT INTO advisor VALUES (4003,'Phil','Campbell',004 , NOW(), NULL);
INSERT INTO advisor VALUES (4004,'Jay','Fredrickson',004 , NOW(), NULL);
INSERT INTO advisor VALUES (4005,'Bryce','Jacobson',004 , NOW(), NULL);
INSERT INTO advisor VALUES (4006,'Diane','Tiede',004 , NOW(), NULL);
INSERT INTO advisor VALUES (2001,'Melissa','Bell',002 , NOW(), NULL);
INSERT INTO advisor VALUES (2002,'June','Bianchi',002 , NOW(), NULL);
INSERT INTO advisor VALUES (2003,'Anne','Carstens',002 , NOW(), NULL);
INSERT INTO advisor VALUES (2004,'Mary','Dooley',002 , NOW(), NULL);
INSERT INTO advisor VALUES (2005,'Peter','Feddema',002 , NOW(), NULL);
INSERT INTO advisor VALUES (2006,'Bill','Gregor',002 , NOW(), NULL);
INSERT INTO advisor VALUES (1001,'Bob','Davis',001 , NOW(), NULL);
INSERT INTO advisor VALUES (1002,'Bill','Jenkins',001 , NOW(), NULL);

/* create table student(
    student_id int(6) Primary Key,
    student_fname varchar(25),
    student_lname varchar(25),
    grad_year int(4),
    advisor_id int(4),
    stu_date_created date,
    stu_date_updated date,
    foreign key(advisor_id) references advisor(advisor_id)
);
*/

create table student(
    student_id int(6) Primary Key,
    student_fname varchar(25),
    student_lname varchar(25),
    grad_year int(4),
    advisor_id int(4),
    stu_date_created date,
    stu_date_updated date);

INSERT INTO student VALUES (1001, 'BENSON', 'CAMRYN', 2023, 2001, NOW(), NULL);
INSERT INTO student VALUES (1002,'BLOHM','THOMAS',2023, 4001, NOW(), NULL);
INSERT INTO student VALUES (1003,'BURNS','OLIVIA',2023, 4001, NOW(), NULL);
INSERT INTO student VALUES (1004,'HANSON','PARKER',2023, 4002, NOW(), NULL);
INSERT INTO student VALUES (1005,'KUBALL','BLAKE',2024, 4002, NOW(), NULL);
INSERT INTO student VALUES (1006,'MALECHA','KADEN',2024, 2002, NOW(), NULL);
INSERT INTO student VALUES (1007,'PRIGGE','AMANDA',2024, 2002, NOW(), NULL);
INSERT INTO student VALUES (1008,'SCHROEDER','RYAN',2024, 2003, NOW(), NULL);
INSERT INTO student VALUES (1009,'TOURTT','HAYDEN',2022, 2003, NOW(), NULL);
INSERT INTO student VALUES (1010,'VISKOCIL','ELI',2022, 2003, NOW(), NULL);
INSERT INTO student VALUES (1011,'WEISS','KATELYN',2022, 2004, NOW(), NULL);
INSERT INTO student VALUES (1012,'HOEFS','ALEXIS',2021, 2004, NOW(), NULL);
INSERT INTO student VALUES (1013,'MACEDO','MADILYN',2021, 2004, NOW(), NULL);
INSERT INTO student VALUES (1014,'NIGHTINGALE','MECCA',2021, 1001, NOW(), NULL);
INSERT INTO student VALUES (1015,'PEXA','JOSHUA',2022, 1001, NOW(), NULL);
INSERT INTO student VALUES (1016,'SAEMROW','JACY',2022, 1002, NOW(), NULL);
INSERT INTO student VALUES (1017,'SCOFIELD','LEVI',2022, 1002, NOW(), NULL);

Create TABLE vendor(
   vendor_id int(3) PRIMARY KEY,
   vendor_name varchar(50),
   vendor_contact varchar(50),
   vendor_street varchar(50),
   vendor_city varchar(25),
   vendor_phone varchar(20),
   vend_create_date date,
   vend_update_date date
);

INSERT INTO vendor VALUES(001,'Tiereny Brothers','Bob Dole', '1771 Energy Park Dr #100','Saint Paul','612-331-5500',NOW(), NULL);
INSERT INTO vendor VALUES(002,'FireFly','Dick MCcain', '1271 Red Fox Rd','Arden Hills','612-564-4088',NOW(), NULL);
INSERT INTO vendor VALUES(003,'VIG Computers','Neville Country', '1680 Bishop St N','Ontario','519-620-9119',NOW(), NULL);
INSERT INTO vendor VALUES(004,'ASUS Corporation','Representative', '1925 Grassland Pkwy','Alpharetta','678-935-2270',NOW(), NULL);
INSERT INTO vendor VALUES(005,'Apple Computers','Steve Jobs', '1 Apple Way','Cupertino','800-myA-pple',NOW(), NULL);

CREATE TABLE warranty(
   warranty_id int(4) PRIMARY KEY,
   war_originalDate date,
   war_endDate date, 
   war_type varchar(250),
   war_available_uses int(3),
   war_create_date date,
   war_update_date date
);

INSERT INTO warranty VALUES(0001, '2015-06-12', '2018-6-12', 'Accidental Drop 3 Year', 3, NOW(), NULL);
INSERT INTO warranty VALUES(0002, '2016-06-12', '2020-6-12', 'Accidental Drop 4 Year', 2, NOW(), NULL);
INSERT INTO warranty VALUES(0003, '2017-06-12', '2020-6-12', 'Accidental Drop 3 Year', 3, NOW(), NULL);
INSERT INTO warranty VALUES(0004, '2018-07-01', '2019-7-01', 'Manfacturer Defect 1 year', 3, NOW(), NULL);

/*
CREATE TABLE purchase(
  purchase_num int(10) PRIMARY KEY,
  vendor_id int(3),
  warranty_id int(4),  
  purchase_date date,
  purch_create_date date,
  purch_update_date date,
  FOREIGN KEY(vendor_id) REFERENCES vendor(vendor_id),
  FOREIGN KEY(warranty_id) REFERENCES warranty(warranty_id));
*/

CREATE TABLE purchase(
  purchase_num int(10) PRIMARY KEY,
  vendor_id int(3),
  warranty_id int(4),  
  purchase_date date,
  purch_create_date date,
  purch_update_date date
);

INSERT INTO purchase values(1,001,0001, '2015-05-12', NOW(), NULL);
INSERT INTO purchase values(2,001,0003, '2017-05-12', NOW(), NULL);
INSERT INTO purchase values(3,001,0002, '2016-05-12', NOW(), NULL);
INSERT INTO purchase values(4,003,0003, '2017-05-12', NOW(), NULL);
INSERT INTO purchase values(5,004,0004, '2018-06-12', NOW(), NULL);

/*
 CREATE TABLE asset(
   asset_id int(4)  PRIMARY KEY,
   serialNumber varchar(15),
   brand varchar(20),
   model varchar(20),
   purchase_num int(10),
   EOL_date date,
   asset_create_date date,
   asset_update_date date,
   FOREIGN KEY(purchase_num) REFERENCES purchase(purchase_num));
*/

 CREATE TABLE asset(
   asset_id int(4)  PRIMARY KEY,
   serialNumber varchar(15),
   brand varchar(20),
   model varchar(20),
   purchase_num int(10),
   EOL_date date,
   asset_create_date date,
   asset_update_date date
);

INSERT INTO asset VALUES(0052,'5CD61551TG','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(0894,'5CD7105DFD','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(0892,'5CD7106HB3','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(0977,'5CD7106JKG','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(0925,'5CD7106HTM','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(0987,'5CD7106J9T','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(0981,'5CD7106J9R','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(0967,'5CD7105DJX','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(0985,'5CD7105D1V','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(0986,'5CD7105D34','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(1062,'5CD7105DLM','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(1061,'5CD7105DLG','HP','G4 11 EE',1,'2020-07-11', '2016-07-11', NULL);
INSERT INTO asset VALUES(0979,'5CD7105DHJ','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(1052,'5CD7105DLK','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(1053,'5CD7110FKH','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(1023,'5CD7110FC4','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(1024,'5CD7110FKD','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(1034,'5CD7110F9S','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(1035,'5CD7110FKN','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(1000,'5CD7105DKY','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(0294,'5CD61421LQ','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(270,'5CD6142YDK','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(336,'5CD6142YMH','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(344,'5CD6142YMN','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(301,'5CD615257Y','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(276,'5CD6154LNL','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(340,'5CD6154P6K','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(333,'5CD6154P6Y','HP','G4 11 EE',2,'2021-08-15', '2017-08-15', NULL);
INSERT INTO asset VALUES(0541,'H4NXCX02V215179','Asus','C202SA',3,'2019-06-12', '2015-06-12', NULL);
INSERT INTO asset VALUES(0522,'H4NXCX02V256173','Asus','C202SA',3,'2019-06-12', '2015-06-12', NULL);
INSERT INTO asset VALUES(0586,'H4NXCX02V293170','Asus','C202SA',3,'2019-06-12', '2015-06-12', NULL);
INSERT INTO asset VALUES(0661,'H4NXCX02V30317C','Asus','C202SA',3,'2019-06-12', '2015-06-12', NULL);
INSERT INTO asset VALUES(0704,'H4NXCX02V30617F','Asus','C202SA',3,'2019-06-12', '2015-06-12', NULL);
INSERT INTO asset VALUES(0546,'H4NXCX02W036179','Asus','C202SA',3,'2019-06-12', '2015-06-12', NULL);
INSERT INTO asset VALUES(0517,'H4NXCX02X32517D','Asus','C202SA',3,'2019-06-12', '2015-06-12', NULL);
INSERT INTO asset VALUES(0615,'H4NXCX02Z51817C','Asus','C202SA',3,'2019-06-12', '2015-06-12', NULL);
INSERT INTO asset VALUES(0591,'H4NXCX02Z725179','Asus','C202SA',3,'2019-06-12', '2015-06-12', NULL);
INSERT INTO asset VALUES(0582,'H4NXCX02Z75817F','Asus','C202SA',3,'2019-06-12', '2015-06-12', NULL);
INSERT INTO asset VALUES(0113,'LR05N6FO','Lenovo','Yoga 11E',4,'2023-07-01', '2018-07-01', NULL);
INSERT INTO asset VALUES(0186,'LR05N6JJ','Lenovo','Yoga 11E',3,'2023-07-01', '2018-07-01', NULL);
INSERT INTO asset VALUES(0125,'LROSN6NV','Lenovo','Yoga 11E',4,'2023-07-01', '2018-07-01', NULL);
INSERT INTO asset VALUES(0188,'LR05N6P6','Lenovo','Yoga 11E',4,'2023-07-01', '2018-07-01', NULL);
INSERT INTO asset VALUES(0169,'LR05N6PP','Lenovo','Yoga 11E',4,'2023-07-01', '2018-07-01', NULL);
INSERT INTO asset VALUES(0133,'LROSN6QG','Lenovo','Yoga 11E',4,'2023-07-01', '2018-07-01', NULL);

/*
create TABLE repair (
   repair_id int(6) PRIMARY KEY,
   student_id int(6),
   asset_id int(4),        
   repair_description VARCHAR(250),
   repair_start_date date,
   repair_complete_date date,
   FOREIGN KEY(student_id) REFERENCES student(student_id),
   FOREIGN KEY(asset_id) REFERENCES asset(asset_id));
*/
create TABLE repair (
   repair_id int(6) PRIMARY KEY,
   student_id int(6),
   asset_id int(4),        
   repair_description VARCHAR(250),
   repair_start_date date,
   repair_complete_date date
);

INSERT INTO repair VALUES(1,1001,301,'Display backlight is out.  Screen is black.','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(2,1002,276,'Display backlight is out.  Screen is black.','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(3,1005,340,'screen broken','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(4,1004,333,'Broken Screen','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(5,1006,0541,'screen broken','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(6,1011,0522,'Screen broken','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(7,1012,0586,'Trackpad Tap,  sticks and/or is not responsive','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(8,1013,0661,'display backlight is out.  Screen is black.','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(9,1014,0704,'Display backlight is out.  Screen is black.','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(10,1017,0546,'Display backlight is out.  Screen is black.','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(11,1015,0517,'Charging issue - wont hold one?','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(12,1016,0615,'Keyboard sticks all left side','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(13,1010,0591,'Bottom Case broken at right corner','2018-11-02','2018-11-18');
INSERT INTO repair VALUES(14,1009,0582,'Screen Broken','2018-11-02','2018-11-18');

/* CREATE TABLE deployment(
    student_id int(6),
    asset_id int(4),
    deploy_date date,
    return_date date,
    deploy_id int(6) PRIMARY KEY,
    dep_update_date date,
    FOREIGN KEY(student_id) REFERENCES student(student_id),
    FOREIGN KEY(asset_id) REFERENCES asset(asset_id));
*/

CREATE TABLE deployment(
    student_id int(6),
    asset_id int(4),
    deploy_date date,
    return_date date,
    deploy_id int(6) PRIMARY KEY,
    dep_update_date date);

INSERT INTO deployment VALUES(1001,301,'2018-08-25','2018-09-30',000001,NULL);
INSERT INTO deployment VALUES(1002,276,'2018-08-25','2018-10-30',000002,NULL);
INSERT INTO deployment VALUES(1005,340,'2018-08-25',NULL,000003,NULL);
INSERT INTO deployment VALUES(1004,333,'2018-08-25',NULL,000004,NULL);
INSERT INTO deployment VALUES(1006,0541,'2018-08-25',NULL,000005,NULL);
INSERT INTO deployment VALUES(1011,0522,'2018-08-25',NULL,000006,NULL);
INSERT INTO deployment VALUES(1012,0586,'2018-08-25',NULL,000007,NULL);
INSERT INTO deployment VALUES(1013,0661,'2017-08-21',NULL,000008,NULL);
INSERT INTO deployment VALUES(1014,0704,'2017-08-21','2018-01-01',000009,NULL);
INSERT INTO deployment VALUES(1017,0546,'2017-08-21','2018-01-01',000010,NULL);
INSERT INTO deployment VALUES(1015,0517,'2017-08-21',NULL,000011,NULL);
INSERT INTO deployment VALUES(1016,0615,'2018-10-31',NULL,000012,NULL);
INSERT INTO deployment VALUES(1010,0591,'2018-11-18',NULL,000013,NULL);
INSERT INTO deployment VALUES(1009,0582,'2016-01-01','2017-01-01',000014,NULL);
INSERT INTO deployment VALUES(1003,301,'2018-11-20',NULL,000015,NULL);
INSERT INTO deployment VALUES(1004,276,'2018-11-20',NULL,000016,NULL);
INSERT INTO deployment VALUES(1007,704,'2018-11-20',NULL,000017,NULL);
INSERT INTO deployment VALUES(1008,0546,'2018-11-20',NULL,000018,NULL);
INSERT INTO deployment VALUES(1001,0582,'2018-11-20',NULL,000019,NULL);

CREATE TABLE application_users(
    userid int(4) PRIMARY KEY,
    username varchar(25),
    passwd varchar(30)
    admin int(2));