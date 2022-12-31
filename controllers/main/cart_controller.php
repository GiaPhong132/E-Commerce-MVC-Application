<?php
require_once('/xampp/htdocs/E_commerce/controllers/main/base_controller.php');
// require_once('/xampp/htdocs/E_commerce/models/paginate.php');

class CartController  extends BaseController
{
    function __construct()
    {
        $this->folder = 'cart';
    }

    public function index()
    {
        session_start();
        $conn = mysqli_connect('localhost', 'root', '123');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'E_commerce');
        }
        $email = $_SESSION['guest'];

        $getQuery = "select * from cart join product p on cart.product_id = p.id and email = '$email'";
        $result = mysqli_query($conn, $getQuery);

        $data = array('result' => $result);
        $this->render('index', $data);
    }
}
