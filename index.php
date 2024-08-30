<?php
session_start();
include "./octo/header.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";
include "./model/pdo.php";
include "./global.php";
include "./model/taikhoan.php";
include "./model/cart.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

# code...


$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$danhsachtop10 = loadall_sanpham_top10();
//$spnew=loadall_sanpham_home();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
      $act = $_GET['act'];
      switch ($act) {
            case 'sanpham':
                  if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                        $kyw = $_POST['kyw'];
                  } else {
                        $kyw = "";
                  }
                  if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                        $iddm = $_GET['iddm'];
                  } else {
                        $iddm = 0;
                  }
                  $dssp = loadall_sanpham($kyw, $iddm);
                  $tendm = loadten_danhmuc($iddm);
                  include "./octo/sanpham.php";


                  break;

            case 'delcart':
                  if (isset($_GET['idcart'])) {
                        array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
                  } else {
                        $_SESSION['mycart'] = [];
                  }
                  header("Location: index.php?act=viewcart");
                  break;
            case 'addtocart':
                  if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $img = $_POST['img'];
                        $price = $_POST['price'];
                        $soluong = 1;
                        $ttien = $soluong * $price;
                        $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                        array_push($_SESSION['mycart'], $spadd);
                  }
                  include "octo/cart/viewcart.php";
                  break;
            case 'bill':
                  include "./octo/cart/bill.php";
                  break;
                  case 'billconfirm':
                
                        if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                              if (isset($_SESSION['user']))  
                              $iduser=$_SESSION['user'] ['id'];
                              else $id=0;
                             
                            $user = $_POST['user'];
                            $email = $_POST['email'];
                            $adress = $_POST['adress'];
                            $tel = $_POST['tel'];
                            $pttt = $_POST['pttt'];
                            $ngaydathang = date('h:i:sa d/m/Y');
                            $tongdonhang = tongdonhang();
                            // tạo bill
                            $idbill = insert_bill(  $iduser,$user,$email, $adress, $tel, $pttt, $ngaydathang, $tongdonhang);
        
                            // insert into cart: $session['mycart'] & idbill
        
                            foreach ($_SESSION['mycart'] as $cart) {
                                insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                            }
        
                            //xóa session cart 
                            $_SESSION['cart'] = [];
        
                        }
                        $bill = loadone_bill($idbill);
                        $billct = loadall_cart($idbill);
                        include "./octo/cart/billconfirm.php";
                        break;
                        case 'mybill':
                             $listbill=loadall_bill($_SESSION['user']['id']);
                              include "./octo/cart/mybill.php";
                              break;
            case 'viewcart':
                  include "octo/cart/viewcart.php";
            case 'gioithieu':
                  include "./octo/gioithieu.php";
                  break;
            case 'lienhe':
                  include "./octo/lienhe.php";
                  break;
            case 'sanphamct':
                  if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                        $id = $_GET['idsp'];
                        $onesp = loadone_sanpham($id);
                        extract($onesp);
                        $spcungloai = load_sanpham_cungloai($id, $iddm);

                        include "./octo/sanphamct.php";
                  } else {
                        include "./octo/home.php";
                  }

                  break;
            case 'quenmk':
                  if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {


                        $email = $_POST['email'];
                        $checkemail = checkemail($email);
                        if (is_array($checkemail)) {
                              $thongbao = "Mật Khẩu của bạn là:" . $checkemail['pass'];
                        } else {
                              $thongbao = "email này không tồn tại";
                        }
                  }

                  include "./taikhoan/quenmk.php";
                  break;
            case 'dangky':
                  if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                        $email = $_POST['email'];
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        insert_taikhoan($email, $user, $pass);
                        $thongbao = "Đã đăng ký thành công.Vui lòng đăng nhập để thực hiện chức năng bình luận và đặt hàng ";
                  }

                  include "./taikhoan/dangky.php";
                  break;
            case 'edit_taikhoan':
                  if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {


                        $user = $_POST['user'];
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                        $adress = $_POST['adress'];
                        $tel = $_POST['tel'];
                        $id = $_POST['id'];
                        update_taikhoan($id, $user, $email, $pass, $adress, $tel);
                        $_SESSION['user'] = checkuser($user, $pass);
                        header('Location:index.php?act=edit_taikhoan');
                  }




                  include "./taikhoan/edit_taikhoan.php";
                  break;
            case 'dangnhap':
                  if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                        $user = $_POST['user'];

                        $pass = $_POST['pass'];
                        $checkuser = checkuser($user, $pass);
                        if (is_array($checkuser)) {
                              $_SESSION['user'] = $checkuser;
                              header('Location:index.php');
                              $thongbao = "bạn đã đăng nhập thành công!";
                        } else {
                              $thongbao = "tài khoản không tồn tại,";
                        }
                  }

                  include "./taikhoan/dangky.php";
                  break;
            case 'thoat':
                  session_unset();
                  header("Location:index.php");
                  break;

            default:
                  include "./octo/home.php";
                  break;
      }
} else {
      include "./octo/home.php";
}
include "./octo/footer.php";
