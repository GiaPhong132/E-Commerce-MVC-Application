use e_commerce;

drop table if exists cOrder;
create table cOrder (
	id INT,
	email VARCHAR(50),
	product_id INT,
	amount INT,
	state VARCHAR(50),
	time DATE,
	foreign key (product_id) references product(id)
);