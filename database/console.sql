use e_commerce;

create view tmp as
select * from product p join shop s on p.shop_id = s.shop_code