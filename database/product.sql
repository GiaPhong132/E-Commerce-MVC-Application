use E_commerce;

drop table if exists product;

CREATE TABLE product(
   id       INTEGER  NOT NULL PRIMARY KEY auto_increment
  ,name     VARCHAR(500) NOT NULL
  ,oldPrice INTEGER  NOT NULL
  ,newPrice INTEGER  NOT NULL
  ,sold    VARCHAR(10) NOT NULL
  ,origin   VARCHAR(32) NOT NULL
  ,saleOff  INTEGER  NOT NULL
);
