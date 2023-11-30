
<?php
require_once '../model/danhmuc.php';
require_once '../model/sanpham.php';
require_once "../model/user.php";
require_once "../model/binhluan.php";
session_start();
// include("$body_link");
// include("header.php");


//wocommerce với order-received.php ; single-product-extended.php ; wishlist.php
//header với about.php ; cart.php ; checkout.php ; compare.php ; contact.php ; fag.php ; login-and-regiser.php ; terms-and-conditions.php ; track-your-order.php
//sidebar dùng với blog.php ; blog-single.php ; product-category.php ; shop-extended.php ; shop.php
// if(isset($_GET['action'])&&($_GET['action']!='')){
//     $act = $_GET['action'];
    
// }
$act = $_GET['action'] ?? "";
switch($act){
    
    case 'home':
        $body_link = "body_link_header_woocommerce.php";
        $view = '../view/home.php';
        break;
    case 'shop':
        $body_link = "body_link_header_sidebar.php";
        $view = '../view/shop.php';
        break;
    case 'login_and_register':
        $body_link = "body_link_header.php";
        $view = '../view/login-and-register.php';
        $load_user = load_all_user();
$arr = ['username'=>[],'password'=>[]];
foreach($load_user as $value){
    $username = $value['name'];
    $password = $value['psw'];
    // $arr[] =['username'=>$username,'password'=>$password];
    $arr['username'][] =$username;
    $arr['password'][] =$password;
}
$erro = "";
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $search_user=array_search($username,$arr['username']);
    $search_psw=array_search($password,$arr['password']);
    if (empty($username) || empty($password)) {
        $erro = "Vui long nhap thong tin dang nhap";
    }else if($search_psw === false || $search_user === false) {
        $erro = "Tai khoan ko ton tai";
    }else 
    if($search_user !== false && $search_psw !== false && $arr['password'][$search_psw] === $password && $arr['username'][$search_user] === $username){
        $_SESSION['username'] = $username;
        $view = "../view/home.php";
    }
}

        break;
        case 'dangxuat':
            session_unset();
            header('location: index.php?action=home');
            break;
        case 'dangky':
            $body_link = "body_link_header.php";
            $view = '../view/login-and-register.php';
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $name = $_POST['new_name'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $address = $_POST['address'];
                $password = $_POST['new_password'];
                $again_psw = $_POST['again_password'];
                if (validateemail($email) && validatePhoneNumber($sdt) && validatemk($password) && $password === $again_psw) {
                    add_user($name,$sdt,$email,$password,$address,0,0);
                    header('location: index.php?action=home ');
                }else{
                    echo $erro ="Dinh dang khong hop le";
                }
            }
            
            break;
        case 'chitietsanpham':
            $id_sp = $_GET['id_sp'] ?? '';
            

            $ctsp = load_one_sanpham($id_sp);
            $body_link = "body_link_header_woocommerce.php";
            $view = '../view/single-product-extended.php';
            
            break;
    default:
        $body_link = "body_link_header_woocommerce.php";
        $view = '../view/home.php';
        break;
}







// include_once '../view/home.php';

include("$body_link");
include("header.php");
include("$view");
include("footer.php");
include("body_link_footer.php");
?>

