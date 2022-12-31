use e_commerce;

update product set rating = round(rating + rand(), 1);
update product set rating = rating - 1 where rating = 5
