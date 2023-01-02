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
        $signal = "noFilter";
        session_start();
        $conn = mysqli_connect('localhost', 'root', '123');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'E_commerce');
        }

        if (!isset($_SESSION['num_rows'])) {
            $getQuery = "SELECT * FROM product";
            $req = mysqli_query($conn, $getQuery);
            $_SESSION['num_rows'] = $req->num_rows;
            $currPage  = 1;
        }
        if (!isset($_GET['currPage'])) $currPage = 1;
        else $currPage = (int) ($_GET['currPage']);

        $offset = $currPage > 1 ? (($currPage - 1) * 20 - 1) : 0;


        $getQuery = "SELECT * FROM product limit 20 offset $offset";
        $result = mysqli_query($conn, $getQuery);
        if (isset($_GET['msg']))
            $message = "Đặt hàng thành công";
        $data = array('result' => $result, 'currPage' => $currPage, 'signal' => $signal, 'message' => @$message);
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

        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();

        if (!isset($_SESSION['guest'])) {
            // session_start();
            $_SESSION['oldHeader'] = "index.php?page=main&controller=product&action=getDetail&productKey=$key";
            header('Location: index.php?page=main&controller=login&action=index');
        }


        $email = $_SESSION['guest'];
        $key = $_GET['productKey'];

        $query = "SELECT * FROM cart where email ='$email' and product_id = $key ";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
            $query = "UPDATE  cart set amount= amount + 1 where email ='$email' and product_id = $key ";
            $result = mysqli_query($conn, $query);
        } else {
            $getQuery = "INSERT INTO cart values('$email', $key, 1)";
            $result = mysqli_query($conn, $getQuery);
        }

        $product = Product::get($key);
        $message = "Sản phẩm đã được thêm vào Giỏ hàng";
        $key = $_GET['productKey'];
        $product = Product::get($key);
        $shop  = Shop::get($product->shop_id);
        $data = array('product' => $product, 'message' => $message, 'shop' => $shop);
        $this->render('detail', $data);
    }

    public function getPay()
    {
        $totalPrice = 0;
        $conn = mysqli_connect('localhost', 'root', '123');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'E_commerce');
        }
        if (!isset($_POST['key']))
            header('Location: index.php?page=main&controller=cart&action=index&msg=check');

        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        $email = $_SESSION['guest'];
        $productCheck = "select * from cart join product p on p.id = cart.product_id and email ='$email' and (id=";

        foreach (explode('&', file_get_contents('php://input')) as $keyValuePair) {
            list($key, $value) = explode('=', $keyValuePair);
            $productCheck .= $value . ' or id=';
            $query = "select * from cart join product p on p.id = cart.product_id and email ='$email' and id=$value";
            $req = mysqli_query($conn, $query);
            $result = $req->fetch_assoc();
            $totalPrice += $result['amount'] * $result['newPrice'];
        }
        $productCheck = substr($productCheck, 0, strlen($productCheck) - 7);
        $productCheck .= ');';
        $result = mysqli_query($conn, $productCheck);


        $data = array('productCheck' => $result, 'totalPrice' => $totalPrice);
        $this->render('payment', $data);
    }

    public function buyNow()
    {
        $conn = mysqli_connect('localhost', 'root', '123');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'E_commerce');
        }

        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        $email = $_SESSION['guest'];
        $product_id = $_GET['productKey'];
        $query = "select * from product where id=$product_id ;";
        $result = mysqli_query($conn, $query);
        $req = $result->fetch_assoc();
        $totalPrice =  $req['newPrice'];

        $signal = "buyNow";
        $data = array('productCheck' => $result, 'totalPrice' => $totalPrice, 'signal' => $signal);
        $this->render('payment', $data);
    }

    public function pay()
    {
        $conn = mysqli_connect('localhost', 'root', '123');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'E_commerce');
        }

        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        $email = $_SESSION['guest'];
        if (!isset($_SESSION['buyNow']))
            foreach (explode('&', file_get_contents('php://input')) as $keyValuePair) {
                list($key, $value) = explode('=', $keyValuePair);
                $query = "select amount from cart join product p on p.id = cart.product_id and email ='$email' and id=$value";
                $req = mysqli_query($conn, $query);
                $result = $req->fetch_assoc();
                $amount = $result['amount'];
                $currentDate  = date('Y-m-d h:i:s');
                $query = "insert into corder (email, product_id, amount, state, time) values ('$email', $value, $amount, 'Đang vận chuyển', '$currentDate');";
                mysqli_query($conn, $query);

                $query = "delete from cart where email='$email' and product_id=$value;";
                mysqli_query($conn, $query);
            }
        else {
            $currentDate  = date('Y-m-d h:i:s');
            $pid = $_SESSION['idBuyNow'];
            $query = "insert into corder (email, product_id, amount, state, time) values ('$email', $pid, 1, 'Đang vận chuyển', '$currentDate');";
            mysqli_query($conn, $query);
        }

        header('Location: index.php?page=main&controller=product&action=index&msg=successful');
    }

    public function getFilter()
    {
        $currPage = 1;
        $conn = mysqli_connect('localhost', 'root', '123');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'E_commerce');
        }
        if (isset($_POST['getLatest'])) {
            $getQuery = "SELECT * FROM product order by dateAdd limit 20";
            $result = mysqli_query($conn, $getQuery);
            $signal = "getLatest";
            $data = array('result' => $result, 'currPage' => $currPage, 'signal' => $signal);
            $this->render('index', $data);
        } elseif (isset($_POST['getPopular'])) {
            $getQuery = "SELECT * FROM product order by reviews limit 20";
            $result = mysqli_query($conn, $getQuery);
            $signal = "getPopular";
            $data = array('result' => $result, 'currPage' => $currPage, 'signal' => $signal);
            $this->render('index', $data);
        } elseif (isset($_POST['getMost'])) {
            $getQuery = "SELECT * FROM product order by sold, reviews limit 20";
            $result = mysqli_query($conn, $getQuery);
            $signal = "getMost";
            $data = array('result' => $result, 'currPage' => $currPage, 'signal' => $signal);
            $this->render('index', $data);
        } elseif (isset($_POST['descending'])) {
            $getQuery = "SELECT * FROM product order by newPrice desc limit 20";
            $result = mysqli_query($conn, $getQuery);
            $signal = "descending";
            $data = array('result' => $result, 'currPage' => $currPage, 'signal' => $signal);
            $this->render('index', $data);
        } elseif (isset($_POST['ascending'])) {
            $getQuery = "SELECT * FROM product order by newPrice asc limit 20";
            $result = mysqli_query($conn, $getQuery);
            $signal = "ascending";
            $data = array('result' => $result, 'currPage' => $currPage, 'signal' => $signal);
            $this->render('index', $data);
        }
    }
}
