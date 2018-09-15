<?php
include("Model.php");
class controller extends Model
{
    public function __construct()
    {
        parent::__construct();
        //print_r($_SERVER['PATH_INFO']);
        //here we  add .htacess
        if ($_SERVER['PATH_INFO'] == '/logout') {
            session_start();
            session_destroy();
            header("Location:login");
        }
        if ($_SERVER['PATH_INFO'] == '/profile') {
            session_start();
            if (!isset($_SESSION['userdata'])) {
                header("Location:login");
            } else {
                include("profile.php");
            }
        }
        if ($_SERVER['PATH_INFO'] == '/login') {
            include('login.php');
            if (isset($_REQUEST['login'])) {
                $email = $_REQUEST['email'];
                $pass  = $_REQUEST['password'];
                $where = array(
                    "reg_email" => $email,
                    "reg_pass" => $pass
                );
                $login = $this->select_where("reg", $where);
                //print_r($login);
                if (count($login) == 1) {
                    session_start();
                    $_SESSION['userdata'] = $login[0];
                    echo "login oke";
                    header("Location:profile");
                    //echo $_SESSION['userdata']->reg_email;
                } else {
                    echo "Error in login";
                }
            }
        }
        if ($_SERVER['PATH_INFO'] == '/registration') {
            //print_r($_SERVER['PATH_INFO']);
            $city = $this->select_all("city");
            //print_r($city);
            include('index.php');
            if (isset($_REQUEST['registration'])) {
                //Count # of uploaded files in array
                $img   = $_FILES['upload']['name'];
                $total = count($_FILES['upload']['name']);
                //echo $total;
                for ($i = 0; $i < $total; $i++) {
                    $img         = implode(',', $_FILES['upload']['name']);
                    $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
                    $newFilePath = "./uploadFiles/" . $_FILES['upload']['name'][$i];
                    // if(file_exists($newFilePath))
                    // {
                    //     echo "file is already exist"; exit(); 
                    // }
                    move_uploaded_file($tmpFilePath, $newFilePath);
                }
                $fname      = $_REQUEST['first_name'];
                $last_name  = $_REQUEST['last_name'];
                $email      = $_REQUEST['email'];
                $password   = $_REQUEST['password'];
                $city       = $_REQUEST['city'];
                $data       = array(
                    "reg_fname" => $fname,
                    "reg_lname" => $last_name,
                    "reg_email" => $email,
                    "reg_pass" => $password,
                    "city_id" => $city,
                    "image" => $img
                );
                $json_data  = json_encode($data);
                //print_r($json_data); exit();
                //print_r($data); 
                $insertdata = $this->insert('reg', $json_data);
                if ($insertdata) {
                    echo "submitted";
                } else {
                    echo "Error";
                }
            }
        }
        if ($_SERVER['PATH_INFO'] == '/showdata') {
            //$all_data = $this->select_all('reg');
            $all_data = $this->join_two("reg", "city", "reg.city_id = city.city_id");
            //print_r($all_data); exit();
            include('showdata.php');
            if (isset($_REQUEST['delete_all'])) {
                $chk   = $_REQUEST['chk'];
                //print_r($chk);
                $count = count($chk);
                //echo $count;
                for ($i = 0; $i < $count; $i++) {
                    $where = array(
                        "reg_id" => $chk[$i]
                    );
                    $d     = $this->delete('reg', $where);
                    header("location:showdata");
                }
            }
        }
        if ($_SERVER['PATH_INFO'] == '/delete_data') {
            $id     = base64_decode($_REQUEST['id']);
            //echo $id;
            $where  = array(
                "reg_id" => $id
            );
            $delete = $this->delete('reg', $where);
            if ($delete) {
                header('location:showdata');
            } else {
                echo "Error";
            }
        }
        if ($_SERVER['PATH_INFO'] == '/edit_data') {
            $id         = $_REQUEST['id'];
            $where      = array(
                "reg_id" => $id
            );
            $fetch_data = $this->select_where('reg', $where);
            include('edit.php');
            if (isset($_REQUEST['update'])) {
                $reg_id    = $_REQUEST['reg_id'];
                $reg_fname = $_REQUEST['first_name'];
                $reg_lname = $_REQUEST['last_name'];
                $reg_email = $_REQUEST['email'];
                $where     = array(
                    "reg_id" => $reg_id
                );
                $data      = array(
                    "reg_fname" => $reg_fname,
                    "reg_lname" => $reg_lname,
                    "reg_email" => $reg_email
                );
                $update    = $this->update_record("reg", $data, $where);
                if ($update) {
                    header("Location:showdata");
                } else {
                    echo "Error";
                }
            }
        }

        if($_SERVER['PATH_INFO'] == '/check_email'){

            $email = $_POST['email'];
            //echo $email;
            $where = array("reg_email" => $email);
            $check_email = $this->select_where("reg",$where);
            //print_r($check_email);
            if(count($check_email) > 0) //TODO
            {
                echo "email already registered";
                return false;
            }
            else
            {
                echo "email available";
                return true;
            }
        }
    }
}
$obj = new controller();
?>
