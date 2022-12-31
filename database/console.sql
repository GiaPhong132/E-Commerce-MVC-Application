use e_commerce;

select *
from cart join product p on cart.product_id = p.id and email='giaphong132@gmail.com'
