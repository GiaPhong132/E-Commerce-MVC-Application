<?php
require_once('/xampp/htdocs/E_commerce/controllers/main/base_controller.php');
require_once('/xampp/htdocs/E_commerce/models/user.php');


class ProfileController extends BaseController
{
    function __construct()
    {
        $this->folder = 'profile';
    }

    public function index()
    {
        $this->render('index');
    }


    public function editInfo()
    {
        session_start();
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        // $age = $_POST['age'];
        $birthday = $_POST['birthday'];

        $data = User::get($email);


        // Photo
        $target_dir = "public/images/user/";
        $path = $_FILES['fileToUpload']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $id = (string)date("Y_m_d_h_i_sa");
        $fileuploadname = (string)$id;
        $fileuploadname .= ".";
        $fileuploadname .= $ext;
        $target_file = $target_dir . basename($fileuploadname);
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
        }
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Allow certain file formats
        if (
            $fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
            && $fileType != "gif"
        ) {
            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            // echo "Sorry, your file is too large.";
        }

        $user = User::get($email);
        $file_pointer = $user->profile_photo;

        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        // echo "Hello";
        if (file_exists($target_file)) {
            User::update($email, $target_file, $fname, $lname, $gender, $phone, $birthday);
            unlink($file_pointer);
            $message = "Update Successfully!";
            $data = array('message' => $message);
            $this->render('index', $data);
            // header('Location: index.php?page=main&controller=profile&action=index');
        }
        // Update
        else {
            User::update($email, $data->profile_photo, $fname, $lname, $gender, $phone, $birthday);
            $message = "Update Successfully!";
            $data = array('message' => $message);
            $this->render('index', $data);
        }
    }

    public function getAddress()
    {
        $this->render('address');
    }

    public function updateAddress()
    {
        session_start();
        $email = $_SESSION['guest'];
        $conn = mysqli_connect('localhost', 'root', '123');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'E_commerce');
        }

        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $query = "Update user set address='$address', phone='$phone' where email='$email';";
        $req = mysqli_query($conn, $query);

        $message = "Update Successfully!";
        $data = array('message' => $message);
        $this->render('address', $data);
    }
}
