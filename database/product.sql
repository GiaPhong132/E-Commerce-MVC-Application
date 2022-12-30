use E_commerce;

drop table if exists product;

CREATE TABLE product(
   id       INTEGER  NOT NULL PRIMARY KEY auto_increment
  ,name     VARCHAR(500) NOT NULL
  ,oldPrice INTEGER  NOT NULL
  ,newPrice INTEGER  NOT NULL
  ,sold    VARCHAR(10) NOT NULL
  ,origin   VARCHAR(32) NOT NULL
  ,saleOff  INTEGER  NOT NULL,
  rating INT
);



INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (1, 'USB OTG 3.1 512GB Type C Sandisk SDDDC3 Xanh', 688000, 701000, 1, 'Svalbard & Jan Mayen Islands', 26, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (2, 'USB OTG 3.1 128GB Dual Lighting Type C Sandisk SDIX70N Đen', 854000, 384000, 9, 'Algeria', 22, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (3, 'USB OTG 3.1 128GB Type C Sandisk SDDDC3 Đen', 255000, 165000, 16, 'Lao People''s Democratic Republic', 14, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (4, 'USB 2.0 8GB Sandisk SDCZ33 Đen', 622000, 317000, 14, 'Sudan', 46, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (5, 'USB OTG 3.1 64GB Type C Sandisk SDDDC3 Đen', 701000, 428000, 20, 'Moldova', 1, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (6, 'USB OTG 3.1 32GB Type C Sandisk SDDDC3 Đen', 981000, 251000, 8, 'Liechtenstein', 19, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (7, 'USB Sandisk 3.1 16GB SDCZ430 Đen', 347000, 416000, 6, 'Sri Lanka', 58, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (8, 'USB 3.1 32 GB Transcend JetFlash 760 Đen Tím', 849000, 865000, 6, 'Cyprus', 56, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (9, 'USB 3.1 16 GB Apacer AH356', 368000, 746000, 4, 'Argentina', 90, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (10, 'USB 3.0 16 GB Sandisk CZ600', 474000, 319000, 15, 'Saudi Arabia', 15, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (11, 'USB 3.2 32 GB Apacer AH357', 150000, 673000, 20, 'Gabon', 93, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (12, 'USB 3.0 32 GB Sandisk CZ73', 398000, 882000, 9, 'Norfolk Island', 65, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (13, 'USB 3.0 - 3.1 16 GB Transcend JetFlash 790', 114000, 945000, 1, 'Estonia', 3, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (14, 'Bàn Phím Cơ Có Dây Gaming Corsair K63 Compact Mechanical Đen', 941000, 351000, 17, 'Italy', 93, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (15, 'Bàn phím Magic Keyboard Apple MK2A3 Trắng', 955000, 703000, 16, 'Burundi', 98, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (16, 'Bàn Phím Cơ Có Dây Gaming Silent Razer BlackWidow Lite Đen', 726000, 905000, 14, 'Kiribati', 9, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (17, 'Bộ Bàn Phím Chuột Không Dây Bluetooth Rapoo 8000M Đen', 487000, 920000, 18, 'Tonga', 92, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (18, 'Bộ Bàn Phím Chuột Không Dây Zadez ZMK-530G Xám', 659000, 257000, 14, 'Suriname', 61, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (19, 'Bàn Phím Cơ Có Dây Gaming Razer BlackWidow V3 Đen', 794000, 470000, 1, 'Christmas Island', 38, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (20, 'Bàn Phím Cơ Có Dây Gaming Razer Huntsman Tournament Edition Đen', 380000, 506000, 5, 'New Caledonia', 90, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (21, 'Bàn Phím Cơ Có Dây Gaming Razer BlackWidow Đen', 993000, 579000, 7, 'Saudi Arabia', 7, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (22, 'Bàn phím Có dây Gaming MSI Vigor GK20 US Đen', 913000, 983000, 17, 'Tanzania', 20, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (23, 'Bàn phím Có dây Gaming MSI Vigor GK30 US Đen', 241000, 140000, 7, 'Luxembourg', 29, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (24, 'Bàn Phím Cơ Có Dây Gaming Corsair K68 RGB Mechanical Đen', 868000, 735000, 16, 'Reunion', 56, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (25, 'Bàn phím có dây Gaming Asus TUF K1', 965000, 164000, 5, 'Moldova', 92, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (26, 'Bàn phím Microsoft Surface Pro Type Đen', 519000, 704000, 2, 'Micronesia', 63, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (27, 'Bàn Phím Cơ Có Dây Gaming Rapoo V500Pro Vàng Xanh', 509000, 937000, 13, 'Tajikistan', 37, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (28, 'Bàn phím không dây Microsoft All-in-one Media N9Z-00028 Đen', 603000, 248000, 19, 'Bosnia and Herzegovina', 95, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (29, 'Bộ bàn phím chuột không dây Microsoft 850 Đen', 690000, 204000, 19, 'Greece', 66, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (30, 'Chuột Không dây Silent A4Tech G3-280NS', 996000, 388000, 17, 'Bhutan', 6, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (31, 'Chuột Không dây Bluetooth Silent Rapoo M650 Hà Lan', 470000, 206000, 2, 'Tokelau', 13, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (32, 'Chuột Không dây Bluetooth Silent Rapoo M650 Pháp', 842000, 928000, 8, 'Saint Lucia', 73, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (33, 'Chuột Không dây Bluetooth Silent Rapoo M650 Đức', 870000, 603000, 7, 'Haiti', 47, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (34, 'Chuột Không dây Bluetooth Silent Rapoo M650 Brazil', 775000, 700000, 1, 'Albania', 28, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (35, 'Chuột Không dây Bluetooth Silent Rapoo M650 Argentina', 747000, 898000, 6, 'Tajikistan', 14, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (36, 'Chuột Không dây Bluetooth Silent Rapoo M650 Anh', 382000, 582000, 11, 'Cote d''Ivoire', 44, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (37, 'Chuột Có dây Gaming MSI Clutch GM08', 714000, 842000, 11, 'Sao Tome and Principe', 75, 2);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (38, 'Chuột Có dây Gaming MSI Clutch GM11', 934000, 257000, 7, 'Mauritania', 87, 2);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (39, 'Chuột Không dây Silent Genius NX-8006S', 180000, 840000, 4, 'Ireland', 98, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (40, 'Chuột Không dây Bluetooth Gaming Asus TUF M4 WL', 487000, 177000, 7, 'Tajikistan', 57, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (41, 'Chuột Có dây Gaming Asus Keris', 744000, 891000, 8, 'Togo', 75, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (42, 'Chuột Có dây DareU EM908', 551000, 264000, 20, 'China', 72, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (43, 'Chuột Có dây DareU A960', 323000, 653000, 11, 'Hong Kong', 80, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (44, 'Chuột Có dây DareU EM908', 431000, 184000, 17, 'Guinea', 96, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (45, 'Loa Bluetooth Marshall Emberton   Yêu thích', 763000, 958000, 16, 'Armenia', 91, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (46, 'Loa thanh Soundbar Samsung HW T420', 499000, 506000, 7, 'Niue', 73, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (47, 'Loa JBL Partybox Encore 2 mic', 251000, 578000, 3, 'Monaco', 71, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (48, 'Loa Bluetooth Marshall Acton 2', 956000, 983000, 2, 'Guinea', 58, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (49, 'Loa Bluetooth Marshall Acton 4', 454000, 988000, 10, 'Guinea', 93, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (50, 'Loa bluetooth JBL Charge 5', 723000, 540000, 1, 'Lao People''s Democratic Republic', 38, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (51, 'Loa Bluetooth JBL Flip 5', 929000, 849000, 11, 'Slovakia (Slovak Republic)', 50, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (52, 'Loa Bluetooth JBL Go 3', 145000, 240000, 4, 'Papua New Guinea', 9, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (53, 'Loa Bluetooth JBL Pulse 5', 945000, 926000, 16, 'Italy', 92, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (54, 'Loa Bluetooth LG XBoom Go PL7', 157000, 625000, 14, 'Greenland', 68, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (55, 'Loa bluetooth Marshall Stanmore 2', 950000, 853000, 17, 'United States of America', 35, 2);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (56, 'Loa Edifier MR4', 872000, 226000, 1, 'Macao', 64, 2);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (57, 'Loa Bluetooth JBL Flip 6', 536000, 692000, 12, 'Norfolk Island', 51, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (58, 'Loa Bluetooth JBL Charge 4', 785000, 454000, 19, 'Mozambique', 22, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (59, 'Loa Bluetooth Harman Kardon Onyx Studio 5', 867000, 921000, 6, 'Germany', 15, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (60, 'Loa Bluetooth LG Xboom Go PN1', 404000, 272000, 3, 'Mali', 69, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (61, 'Loa tháp Samsung MX-T70', 902000, 897000, 1, 'Benin', 36, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (62, 'Loa Bluetooth LG Xboom Go PL5', 736000, 465000, 14, 'Austria', 98, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (63, 'Loa Harman Kardon Onyx Studio 5', 264000, 377000, 18, 'Uruguay', 45, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (64, 'Loa Harman Kardon Onyx Studio 7', 531000, 246000, 4, 'Republic of Korea', 29, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (65, 'Chuột Không dây Silent A4Tech G3-280NS', 996000, 388000, 17, 'Bhutan', 6, 2);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (66, 'Chuột Không dây Bluetooth Silent Rapoo M650 Hà Lan', 470000, 206000, 2, 'Tokelau', 13, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (67, 'Chuột Không dây Bluetooth Silent Rapoo M650 Pháp', 842000, 928000, 8, 'Saint Lucia', 73, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (68, 'Chuột Không dây Bluetooth Silent Rapoo M650 Đức', 870000, 603000, 7, 'Haiti', 47, 1);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (69, 'Chuột Không dây Bluetooth Silent Rapoo M650 Brazil', 775000, 700000, 4, 'Albania', 28, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (70, 'Chuột Không dây Bluetooth Silent Rapoo M650 Argentina', 747000, 898000, 6, 'Tajikistan', 14, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (71, 'Chuột Không dây Bluetooth Silent Rapoo M650 Anh', 382000, 582000, 11, 'Cote d''Ivoire', 44, 5);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (72, 'Chuột Có dây Gaming MSI Clutch GM08', 714000, 842000, 11, 'Sao Tome and Principe', 75, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (73, 'Chuột Có dây Gaming MSI Clutch GM11', 934000, 257000, 7, 'Mauritania', 87, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (74, 'Chuột Không dây Silent Genius NX-8006S', 180000, 840000, 4, 'Ireland', 98, 4);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (75, 'Chuột Không dây Bluetooth Gaming Asus TUF M4 WL', 487000, 177000, 7, 'Tajikistan', 57, 2);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (76, 'Chuột Có dây Gaming Asus Keris', 744000, 891000, 8, 'Togo', 75, 2);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (77, 'Chuột Có dây DareU EM908', 551000, 264000, 20, 'China', 72, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (78, 'Chuột Có dây DareU A960', 323000, 653000, 11, 'Hong Kong', 80, 3);
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating) VALUES (79, 'Chuột Có dây DareU EM908', 431000, 184000, 17, 'Guinea', 96, 2);
