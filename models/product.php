<?php
require_once('connection.php');
class Product
{
    public $id;
    public $name;
    public $oldPrice;
    public $newPrice;
    public $sold;
    public $origin;
    public $saleOff;
    public $rating;
    public $reviews;
    public $inStock;
    public $type;
    public $shop_id;
    public $dateAdd;

    // name,oldPrice,newPrice,sold,origin,saleOff

    public function __construct($id, $name, $oldPrice, $newPrice, $sold, $origin, $saleOff, $rating, $reviews, $inStock, $type, $shop_id, $dateAdd)
    {
        $this->id = $id;
        $this->name = $name;
        $this->oldPrice = $oldPrice;
        $this->newPrice = $newPrice;
        $this->sold = $sold;
        $this->origin = $origin;
        $this->saleOff = $saleOff;
        $this->rating = $rating;
        $this->reviews = $reviews;
        $this->inStock = $inStock;
        $this->type = $type;
        $this->shop_id = $shop_id;
        $this->dateAdd = $dateAdd;
    }


    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM product");
        $products = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $product) {
            $products[] = new Product(
                @$product['id'],
                @$product['name'],
                @$product['oldPrice'],
                @$product['newPrice'],
                @$product['sold'],
                @$product['origin'],
                @$product['saleOff'],
                @$product['rating'],
                @$product['reviews'],
                @$product['inStock'],
                @$product['type'],
                @$product['shop_id'],
                @$product['dateAdd']


            );
        }
        return $products;
    }

    static function get($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM product WHERE id = $id");
        $result = $req->fetch_assoc();
        $product = new Product(
            $result['id'],
            $result['name'],
            $result['oldPrice'],
            $result['newPrice'],
            $result['sold'],
            $result['origin'],
            $result['saleOff'],
            $result['rating'],
            $result['reviews'],
            $result['inStock'],
            $result['type'],
            $result['shop_id'],
            $result['dateAdd']


        );
        return $product;
    }

    static function insert($name, $price, $description, $content, $img)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "INSERT INTO product (name, price, description, content, img)
            VALUES ('$name', $price, '$description', '$content', '$img');"
        );
        return $req;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM product WHERE id = $id");
        return $req;
    }

    static function update($id, $name, $price, $description, $content, $img)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "  UPDATE product
                SET name = '$name', price = $price, description = '$description', content = '$content', img = '$img'
                WHERE id = $id;"
        );
    }
}
