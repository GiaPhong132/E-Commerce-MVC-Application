use e_commerce;

drop table if exists product;

CREATE TABLE product(
   id       INTEGER  NOT NULL PRIMARY KEY
  ,name     VARCHAR(25) NOT NULL
  ,oldPrice INTEGER  NOT NULL
  ,newPrice INTEGER  NOT NULL
  ,sold    VARCHAR(10) NOT NULL
  ,origin   VARCHAR(32) NOT NULL
  ,saleOff  INTEGER  NOT NULL
);

INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (0,'Cora',232000,428000,'17','Angola',52);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (1,'Romaine',333000,738000,'2','Saint Pierre and Miquelon',42);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (2,'Nels',765000,589000,'18','France',69);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (3,'Evangeline',356000,614000,'7','Spain',30);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (4,'Fleta',430000,914000,'5','Finland',71);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (5,'Marcus',147000,688000,'17','Montserrat',26);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (6,'Keven',365000,482000,'15','Djibouti',83);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (7,'Jaquan',163000,814000,'18','Singapore',23);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (8,'Murl',386000,418000,'13','Madagascar',39);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (9,'Josianne',844000,520000,'0','Czech Republic',93);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (10,'Bernice',215000,329000,'0','Malawi',49);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (11,'Ivy',137000,622000,'20','Cocos (Keeling) Islands',44);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (12,'Johnpaul',323000,337000,'2','Djibouti',37);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (13,'Pansy',842000,454000,'20','Faroe Islands',43);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (14,'Wyman',684000,833000,'8','Guatemala',3);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (15,'Sydney',320000,337000,'7','Haiti',43);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (16,'Melody',300000,278000,'19','Greece',89);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (17,'Lewis',810000,372000,'2','Guinea',93);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (18,'Viviane',151000,681000,'5','Pitcairn Islands',14);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (19,'Janae',909000,231000,'17','Netherlands',8);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (20,'Vivianne',303000,125000,'18','Cyprus',72);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (21,'Whitney',304000,413000,'16','Guinea-Bissau',49);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (22,'Caterina',673000,609000,'9','Norfolk Island',25);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (23,'Amara',393000,329000,'17','Liechtenstein',38);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (24,'Zander',204000,966000,'17','Tanzania',68);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (25,'Monserrate',544000,538000,'19','Anguilla',6);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (26,'Sidney',374000,510000,'7','Cuba',95);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (27,'Ana',394000,168000,'14','Comoros',75);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (28,'Eliezer',315000,143000,'8','Argentina',72);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (29,'Tristin',715000,374000,'19','New Zealand',64);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (30,'Valentina',559000,991000,'12','Benin',14);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (31,'Ryley',263000,154000,'15','Armenia',29);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (32,'Kylee',349000,130000,'10','Turks and Caicos Islands',71);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (33,'Heloise',766000,573000,'9','Norway',77);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (34,'Lavern',962000,437000,'1','Tuvalu',29);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (35,'Lucious',505000,191000,'4','Trinidad and Tobago',97);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (36,'Paula',886000,301000,'20','Australia',11);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (37,'Hipolito',602000,836000,'18','Reunion',15);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (38,'Jared',870000,878000,'19','Turkmenistan',65);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (39,'Walter',541000,875000,'13','Guam',39);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (40,'Werner',398000,149000,'2','Spain',47);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (41,'Josiane',288000,152000,'9','Republic of Korea',0);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (42,'Queen',468000,398000,'2','Papua New Guinea',44);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (43,'Devyn',391000,751000,'19','Seychelles',95);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (44,'Addie',239000,465000,'12','San Marino',55);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (45,'Pink',968000,694000,'20','Liechtenstein',7);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (46,'Burley',710000,293000,'6','Barbados',37);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (47,'Eliseo',666000,310000,'15','Somalia',55);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (48,'Karen',998000,490000,'12','Samoa',54);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (49,'Jermey',939000,993000,'19','Faroe Islands',31);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (50,'Zoey',222000,813000,'6','Mayotte',11);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (51,'Aaron',553000,752000,'20','Central African Republic',75);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (52,'Madie',132000,110000,'18','Portugal',47);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (53,'Coleman',291000,241000,'6','Niger',46);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (54,'Hobart',327000,610000,'18','Burundi',30);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (55,'Caroline',258000,463000,'2','Greece',59);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (56,'Jayce',403000,232000,'5','Macao',63);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (57,'Meagan',944000,793000,'4','Namibia',67);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (58,'Daphne',635000,346000,'18','Fiji',45);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (59,'Marge',263000,514000,'8','Lithuania',29);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (60,'Hassan',223000,503000,'16','Madagascar',33);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (61,'Dorothea',590000,450000,'16','Sierra Leone',85);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (62,'Rudolph',770000,855000,'7','San Marino',71);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (63,'Christina',545000,154000,'0','Macao',49);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (64,'Reinhold',690000,339000,'0','Trinidad and Tobago',53);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (65,'Peter',921000,521000,'1','Iraq',19);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (66,'Lamar',605000,589000,'8','Morocco',96);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (67,'Bridget',585000,169000,'1','Namibia',33);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (68,'Theresa',709000,181000,'9','Algeria',55);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (69,'Ola',415000,973000,'14','Senegal',29);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (70,'Henderson',725000,734000,'4','Papua New Guinea',17);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (71,'Blaze',212000,156000,'16','Niger',38);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (72,'Charles',322000,413000,'11','China',50);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (73,'Trevion',445000,799000,'19','Montenegro',77);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (74,'Ted',890000,758000,'7','Singapore',28);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (75,'Caleigh',252000,403000,'10','Myanmar',54);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (76,'Helga',784000,251000,'0','Brazil',30);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (77,'Ivah',867000,602000,'12','Kiribati',34);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (78,'Evelyn',574000,833000,'10','Saint Vincent and the Grenadines',94);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (79,'Stanley',681000,502000,'3','United States of America',36);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (80,'Bonnie',251000,857000,'18','Costa Rica',32);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (81,'Jude',416000,750000,'2','Micronesia',12);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (82,'Jaunita',328000,194000,'14','Mali',62);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (83,'Alexandra',472000,189000,'11','Nepal',99);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (84,'Adriana',855000,378000,'14','Tuvalu',88);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (85,'Adaline',756000,339000,'8','Uruguay',11);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (86,'Dimitri',255000,330000,'12','Tuvalu',39);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (87,'Reina',651000,351000,'16','Angola',99);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (88,'Brook',615000,883000,'0','South Africa',34);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (89,'Sherwood',826000,285000,'18','Turks and Caicos Islands',76);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (90,'Arely',395000,695000,'13','Saint Martin',26);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (91,'Bret',420000,775000,'13','Pakistan',67);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (92,'Kobe',778000,843000,'6','Vanuatu',45);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (93,'Brigitte',269000,158000,'15','Faroe Islands',6);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (94,'Chloe',446000,315000,'18','Puerto Rico',83);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (95,'Talon',344000,443000,'4','Greenland',36);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (96,'Alvis',792000,570000,'18','Uruguay',36);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (97,'Sherwood',756000,239000,'9','Cambodia',24);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (98,'Effie',980000,927000,'6','Dominican Republic',16);
INSERT INTO product(id,name,oldPrice,newPrice,sold,origin,saleOff) VALUES (99,'Gabe',745000,300000,'8','Spain',76);
