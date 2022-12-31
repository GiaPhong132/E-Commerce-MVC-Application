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
  rating INT,
  reviews INT,
  inStock INT,
  type TEXT
);


INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (1, 'USB OTG 3.1 512GB Type C Sandisk SDDDC3 Xanh', 688000, 701000, 2, 'Svalbard & Jan Mayen', 26, 4, 359, 728, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (2, 'USB OTG 3.1 128GB Dual Lighting Type C Sandisk SDIX70N Đen', 854000, 384000, 2, 'Algeria', 22, 1, 554, 529, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (3, 'USB OTG 3.1 128GB Type C Sandisk SDDDC3 Đen', 255000, 165000, 3, 'Lao', 14, 5, 329, 970, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (4, 'USB 2.0 8GB Sandisk SDCZ33 Đen', 622000, 317000, 3, 'Sudan', 46, 4, 305, 913, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (5, 'USB OTG 3.1 64GB Type C Sandisk SDDDC3 Đen', 701000, 428000, 3, 'Moldova', 1, 1, 410, 238, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (6, 'USB OTG 3.1 32GB Type C Sandisk SDDDC3 Đen', 981000, 251000, 2, 'Liechtenstein', 19, 4, 530, 406, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (7, 'USB Sandisk 3.1 16GB SDCZ430 Đen', 347000, 416000, 1, 'Sri Lanka', 58, 5, 351, 257, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (8, 'USB 3.1 32 GB Transcend JetFlash 760 Đen Tím', 849000, 865000, 3, 'Cyprus', 56, 4, 504, 236, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (9, 'USB 3.1 16 GB Apacer AH356', 368000, 746000, 3, 'Argentina', 90, 4, 297, 508, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (10, 'USB 3.0 16 GB Sandisk CZ600', 474000, 319000, 3, 'Saudi Arabia', 15, 2, 553, 834, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (11, 'USB 3.2 32 GB Apacer AH357', 150000, 673000, 1, 'Gabon', 93, 4, 440, 504, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (12, 'USB 3.0 32 GB Sandisk CZ73', 398000, 882000, 1, 'Norfolk Island', 65, 1, 261, 703, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (13, 'USB 3.0 - 3.1 16 GB Transcend JetFlash 790', 114000, 945000, 1, 'Estonia', 3, 5, 241, 385, 'USB');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (14, 'Bàn Phím Cơ Có Dây Gaming Corsair K63 Compact Mechanical Đen', 941000, 351000, 2, 'Italy', 93, 4, 441, 673, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (15, 'Bàn phím Magic Keyboard Apple MK2A3 Trắng', 955000, 703000, 2, 'Burundi', 98, 5, 401, 782, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (16, 'Bàn Phím Cơ Có Dây Gaming Silent Razer BlackWidow Lite Đen', 726000, 905000, 3, 'Kiribati', 9, 4, 505, 563, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (17, 'Bộ Bàn Phím Chuột Không Dây Bluetooth Rapoo 8000M Đen', 487000, 920000, 1, 'Tonga', 92, 3, 467, 847, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (18, 'Bộ Bàn Phím Chuột Không Dây Zadez ZMK-530G Xám', 659000, 257000, 1, 'Suriname', 61, 4, 369, 308, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (19, 'Bàn Phím Cơ Có Dây Gaming Razer BlackWidow V3 Đen', 794000, 470000, 1, 'Christmas Island', 38, 4, 166, 375, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (20, 'Bàn Phím Cơ Có Dây Gaming Razer Huntsman Tournament Edition Đen', 380000, 506000, 3, 'New Caledonia', 90, 5, 142, 339, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (21, 'Bàn Phím Cơ Có Dây Gaming Razer BlackWidow Đen', 993000, 579000, 3, 'Saudi Arabia', 7, 4, 355, 366, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (22, 'Bàn phím Có dây Gaming MSI Vigor GK20 US Đen', 913000, 983000, 2, 'Tanzania', 20, 4, 146, 703, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (23, 'Bàn phím Có dây Gaming MSI Vigor GK30 US Đen', 241000, 140000, 1, 'Luxembourg', 29, 4, 235, 817, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (24, 'Bàn Phím Cơ Có Dây Gaming Corsair K68 RGB Mechanical Đen', 868000, 735000, 3, 'Reunion', 56, 4, 107, 889, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (25, 'Bàn phím có dây Gaming Asus TUF K1', 965000, 164000, 3, 'Moldova', 92, 3, 541, 887, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (26, 'Bàn phím Microsoft Surface Pro Type Đen', 519000, 704000, 3, 'Micronesia', 63, 2, 167, 351, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (27, 'Bàn Phím Cơ Có Dây Gaming Rapoo V500Pro Vàng Xanh', 509000, 937000, 1, 'Tajikistan', 37, 4, 335, 875, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (28, 'Bàn phím không dây Microsoft All-in-one Media N9Z-00028 Đen', 603000, 248000, 2, 'Bosnia and Herzegovina', 95, 5, 144, 599, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (29, 'Bộ bàn phím chuột không dây Microsoft 850 Đen', 690000, 204000, 3, 'Greece', 66, 4, 426, 634, 'keyboard');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (30, 'Chuột Không dây Silent A4Tech G3-280NS', 996000, 388000, 2, 'Bhutan', 6, 4, 198, 757, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (31, 'Chuột Không dây Bluetooth Silent Rapoo M650 Hà Lan', 470000, 206000, 2, 'Tokelau', 13, 4, 226, 950, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (32, 'Chuột Không dây Bluetooth Silent Rapoo M650 Pháp', 842000, 928000, 2, 'Saint Lucia', 73, 5, 226, 765, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (33, 'Chuột Không dây Bluetooth Silent Rapoo M650 Đức', 870000, 603000, 2, 'Haiti', 47, 5, 386, 667, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (34, 'Chuột Không dây Bluetooth Silent Rapoo M650 Brazil', 775000, 700000, 3, 'Albania', 28, 3, 371, 522, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (35, 'Chuột Không dây Bluetooth Silent Rapoo M650 Argentina', 747000, 898000, 3, 'Tajikistan', 14, 1, 228, 721, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (36, 'Chuột Không dây Bluetooth Silent Rapoo M650 Anh', 382000, 582000, 3, 'Cote d''Ivoire', 44, 1, 229, 571, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (37, 'Chuột Có dây Gaming MSI Clutch GM08', 714000, 842000, 2, 'Sao Tome and Principe', 75, 3, 258, 880, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (38, 'Chuột Có dây Gaming MSI Clutch GM11', 934000, 257000, 1, 'Mauritania', 87, 3, 440, 498, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (39, 'Chuột Không dây Silent Genius NX-8006S', 180000, 840000, 2, 'Ireland', 98, 2, 302, 369, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (40, 'Chuột Không dây Bluetooth Gaming Asus TUF M4 WL', 487000, 177000, 1, 'Tajikistan', 57, 4, 163, 920, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (41, 'Chuột Có dây Gaming Asus Keris', 744000, 891000, 3, 'Togo', 75, 4, 544, 239, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (42, 'Chuột Có dây DareU EM908', 551000, 264000, 2, 'China', 72, 1, 557, 972, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (43, 'Chuột Có dây DareU A960', 323000, 653000, 3, 'Hong Kong', 80, 5, 293, 214, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (44, 'Chuột Có dây DareU EM908', 431000, 184000, 2, 'Guinea', 96, 2, 500, 311, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (45, 'Loa Bluetooth Marshall Emberton   Yêu thích', 763000, 958000, 1, 'Armenia', 91, 4, 177, 236, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (46, 'Loa thanh Soundbar Samsung HW T420', 499000, 506000, 1, 'Niue', 73, 4, 530, 216, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (47, 'Loa JBL Partybox Encore 2 mic', 251000, 578000, 3, 'Monaco', 71, 4, 428, 953, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (48, 'Loa Bluetooth Marshall Acton 2', 956000, 983000, 3, 'Guinea', 58, 4, 237, 882, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (49, 'Loa Bluetooth Marshall Acton 4', 454000, 988000, 3, 'Guinea', 93, 5, 242, 652, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (50, 'Loa bluetooth JBL Charge 5', 723000, 540000, 1, 'Lao', 38, 2, 328, 924, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (51, 'Loa Bluetooth JBL Flip 5', 929000, 849000, 2, 'Slovakia', 50, 1, 470, 410, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (52, 'Loa Bluetooth JBL Go 3', 145000, 240000, 1, 'Papua New Guinea', 9, 4, 442, 713, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (53, 'Loa Bluetooth JBL Pulse 5', 945000, 926000, 1, 'Italy', 92, 5, 170, 238, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (54, 'Loa Bluetooth LG XBoom Go PL7', 157000, 625000, 2, 'Greenland', 68, 4, 573, 914, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (55, 'Loa bluetooth Marshall Stanmore 2', 950000, 853000, 3, 'USA', 35, 2, 447, 390, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (56, 'Loa Edifier MR4', 872000, 226000, 2, 'Macao', 64, 2, 153, 741, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (57, 'Loa Bluetooth JBL Flip 6', 536000, 692000, 1, 'Norfolk Island', 51, 2, 298, 234, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (58, 'Loa Bluetooth JBL Charge 4', 785000, 454000, 3, 'Mozambique', 22, 2, 201, 900, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (59, 'Loa Bluetooth Harman Kardon Onyx Studio 5', 867000, 921000, 1, 'Germany', 15, 5, 427, 307, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (60, 'Loa Bluetooth LG Xboom Go PN1', 404000, 272000, 1, 'Mali', 69, 5, 556, 202, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (61, 'Loa tháp Samsung MX-T70', 902000, 897000, 3, 'Benin', 36, 2, 212, 450, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (62, 'Loa Bluetooth LG Xboom Go PL5', 736000, 465000, 2, 'Austria', 98, 2, 272, 239, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (63, 'Loa Harman Kardon Onyx Studio 5', 264000, 377000, 2, 'Uruguay', 45, 2, 257, 252, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (64, 'Loa Harman Kardon Onyx Studio 7', 531000, 246000, 3, 'Republic of Korea', 29, 4, 246, 402, 'speaker');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (65, 'Chuột Không dây Silent A4Tech G3-280NS', 996000, 388000, 1, 'Bhutan', 6, 2, 173, 379, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (66, 'Chuột Không dây Bluetooth Silent Rapoo M650 Hà Lan', 470000, 206000, 2, 'Tokelau', 13, 4, 567, 204, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (67, 'Chuột Không dây Bluetooth Silent Rapoo M650 Pháp', 842000, 928000, 2, 'Saint Lucia', 73, 2, 598, 905, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (68, 'Chuột Không dây Bluetooth Silent Rapoo M650 Đức', 870000, 603000, 2, 'Haiti', 47, 1, 137, 770, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (69, 'Chuột Không dây Bluetooth Silent Rapoo M650 Brazil', 775000, 700000, 3, 'Albania', 28, 3, 283, 911, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (70, 'Chuột Không dây Bluetooth Silent Rapoo M650 Argentina', 747000, 898000, 3, 'Tajikistan', 14, 4, 446, 805, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (71, 'Chuột Không dây Bluetooth Silent Rapoo M650 Anh', 382000, 582000, 2, 'Cote d''Ivoire', 44, 5, 335, 573, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (72, 'Chuột Có dây Gaming MSI Clutch GM08', 714000, 842000, 3, 'Sao Tome and Principe', 75, 5, 277, 680, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (73, 'Chuột Có dây Gaming MSI Clutch GM11', 934000, 257000, 1, 'Mauritania', 87, 4, 151, 299, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (74, 'Chuột Không dây Silent Genius NX-8006S', 180000, 840000, 2, 'Ireland', 98, 4, 481, 365, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (75, 'Chuột Không dây Bluetooth Gaming Asus TUF M4 WL', 487000, 177000, 2, 'Tajikistan', 57, 2, 390, 579, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (76, 'Chuột Có dây Gaming Asus Keris', 744000, 891000, 3, 'Togo', 75, 3, 492, 376, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (77, 'Chuột Có dây DareU EM908', 551000, 264000, 3, 'China', 72, 4, 353, 377, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (78, 'Chuột Có dây DareU A960', 323000, 653000, 2, 'Hong Kong', 80, 4, 156, 669, 'mouse');
INSERT INTO e_commerce.product (id, name, oldPrice, newPrice, sold, origin, saleOff, rating, reviews, inStock, type) VALUES (79, 'Chuột Có dây DareU EM908', 431000, 184000, 2, 'Guinea', 96, 2, 418, 832, 'mouse');
