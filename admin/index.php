<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";

include "header.php";
//controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // kiem tra nguoi dung co click vao nut add khong
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'lisdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();

            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            /*controler sản phẩm */
      case 'addsp':
            // kiem tra nguoi dung co click vao nut add khong
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                   // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                  } else {
                   //  echo "Sorry, there was an error uploading your file.";
                  }
                insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                $thongbao = "thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
       case 'listsp':
        if (isset($_POST['listok']) && ($_POST['listok'])) {
          $kyw=$_POST['kyw'];
          $iddm=$_POST['iddm'];
          
        }else{
            $kyw='';
            $iddm=0;
        }
 
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw,$iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("",0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id']>0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();

            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
               
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                   // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                  } else {
                   //  echo "Sorry, there was an error uploading your file.";
                  }
                update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                $thongbao = "thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("",0);
            include "sanpham/list.php";
            break;
            case 'dskh':
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/list.php";
                break;
                case 'dsbl':
                    $listbinhluan=loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                    case 'thongke':
                        $listthongke=loadall_thongke(0);
                        include "./thongke/thongke.php";
                        break;
                        case 'bieudo':
                            $listthongke=loadall_thongke(0);
                            include "./thongke/bieudo.php";
                            break;
                case 'xoabl':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_binhluan($_GET['id']);
                    }
                    $listbinhluan=loadall_binhluan(0);
                     include "taikhoan/list.php";
                    break;
                case 'xoatk':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_taikhoan($_GET['id']);
                    }
                    $listtaikhoan = loadall_taikhoan("",0);
                    include "taikhoan/list.php";
                    break;
                case 'listbill':
                    if (isset($_POST['kyw'] ) && ($_POST['kyw']!="")) {
                        $kyw=$_POST['kyw'];
                    }
                    else{
                        $kyw="";
                    }
                    $listbill= loadall_return_bill($kyw,0);
                    include "./bill/listbill.php";
                    break; 
                
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}



include "footer.php";
?>