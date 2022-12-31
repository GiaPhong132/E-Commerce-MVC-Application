<?php
require_once('/xampp/htdocs/E_commerce/controllers/main/base_controller.php');
require_once('/xampp/htdocs/E_commerce/models/product.php');
require_once('/xampp/htdocs/E_commerce/models/shop.php');

class ProductController  extends BaseController
{
    function __construct()
    {
        $this->folder = 'services';
    }

    public function index()
    {

        $conn = mysqli_connect('localhost', 'root', '123');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'E_commerce');
        }
        $getQuery = "SELECT * FROM product limit 20";
        $result = mysqli_query($conn, $getQuery);
        $data = array('result' => $result);
        $this->render('index', $data);
    }

    public function search()
    {
        $conn = mysqli_connect('localhost', 'root', '123');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'E_commerce');
        }
        $key = $_POST['searchKey'];
        $getQuery = "SELECT * FROM product where locate('$key', name) > 0";
        $result = mysqli_query($conn, $getQuery);
        $data = array('result' => $result);
        $this->render('index', $data);
    }

    public function getDetail()
    {
        $conn = mysqli_connect('localhost', 'root', '123');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'E_commerce');
        }
        $key = $_GET['productKey'];
        $product = Product::get($key);
        $shop  = Shop::get($product->shop_id);

        $data = array('product' => $product, 'shop' => $shop);
        $this->render('detail', $data);
    }

    public function addToCart()
    {
        $key = $_GET['productKey'];
        $conn = mysqli_connect('localhost', 'root', '123');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'E_commerce');
        }

        if (!isset($_SESSION['guest'])) {
            session_start();
            $_SESSION['oldHeader'] = "index.php?page=main&controller=product&action=getDetail&productKey=$key";
            header('Location: index.php?page=main&controller=login&action=index');
        }

        $email = $_SESSION['guest'];
        $key = $_GET['productKey'];

        $query = "SELECT * FROM cart where email ='$email' and product_id = $key ";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
            echo "Hello";
        } else {
            $getQuery = "INSERT INTO cart values('$email', $key, 1)";
            $result = mysqli_query($conn, $getQuery);
        }

        // $product = Product::get($key);
        // $data = array('product' => $product);
        // $this->render('detail', $data);
    }
}
