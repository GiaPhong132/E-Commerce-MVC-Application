use e_commerce;

drop table if exists shop;
create table shop (
	code INT,
	name VARCHAR(8),
	response_rating INT,
	followers INT,
	found DATE,
	reviews INT
);

insert into shop (code, name, response_rating, followers, found, reviews) values (1, 'Kingston', 94, 6954, '2022-09-24 18:13:59', 2503);
insert into shop (code, name, response_rating, followers, found, reviews) values (2, 'Keychorn', 84, 9630, '2022-03-01 15:10:06', 1654);
insert into shop (code, name, response_rating, followers, found, reviews) values (3, 'Dareu', 95, 5986, '2022-08-16 10:58:04', 4324);
insert into shop (code, name, response_rating, followers, found, reviews) values (4, 'Sony', 87, 8061, '2022-10-24 10:45:44', 1756);