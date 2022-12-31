<?php
require_once('/xampp/htdocs/E_commerce/controllers/main/base_controller.php');
// require_once('/xampp/htdocs/E_commerce/models/paginate.php');

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
}
