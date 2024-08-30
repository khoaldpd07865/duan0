
<div class="row mb">
                        <div class="boxtitle">TÀI KHỎAN</div>
                        <div class="boxcontent fomttaikhoan">
        <?php
           if (isset($_SESSION['user'])) {
             extract($_SESSION['user']);
  
          
        
          ?>
           <div class="row mb10">
                                    Xin chào  <br>
                                    <?=$user?>

                                </div>
                                <div class="row mb10">
                                <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                                <li><a href="index.php?act=quenmk">Quên Mật Khẩu</a></li>
                            <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>

                            <?php
                            if ($role == 1) {
                                
                            
                             ?>
                           
                            <li><a href="admin/index.php">Đăng nhập admin</a></li>
                            <?php } ?>
                            <li><a href="index.php?act=thoat">Thoát</a></li>

                                </div>
                                <?php
                                }else{

                                 ?>
                            <form action="index.php?act=dangnhap" method="post">
                                <div class="row mb10">
                                    Xin chào  <br>

                                    <input type="text" name="user" id><br>
                                </div>
                                <div class="row mb10">
                                    Quên mật khẩu
                                    <input type="password" name="pass" id> <br>
                                </div>
                                <div class="row mb10">

                                    <input type="checkbox" name=""> Ghi nhớ tài
                                    khoản? </div>
                                <div class="row mb10">
                                    <input type="submit" value="đăng nhập"  name="dangnhap"><br>
                                </div>

                            </form>
                            <li><a href="#">Quên Mật Khẩu</a></li>
                            <li><a href="index.php?act=dangky">Đăng Ký Thành Viên</a></li>
                        <?php } ?>
                        </div>

                    </div>
                    <div class="row mb">
                        <div class="boxtitle">DANH MỤC</div>
                        <div class="boxcontent2 menudoc">
                            <ul>
                               <?php
                               foreach($dsdm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm".$id;
                                echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                               }
                               ?>
                             <!--   <li><a href="#">Đồng hồ</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Điện Thoại</a></li>
                                <li><a href="#">Ba Lô</a></li> -->
                            </ul>
                        </div>
                        <div class="boxfooter searbox">
                            <form action="index.php?act=sanpham" method="post">
                                <input type="text" name="kyw" >
                                <input type="submit" value="Tìm Kiếm" name="timkiem" >
                            </form>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="boxtitle">TOP 10 YEU THICH</div>
                        <div class=" row boxcontent ">


                      <?php foreach($danhsachtop10 as $sp){
                          extract($sp);
                          $linksp="index.php?act=sanphamct&idsp=".$id;
                          $img=$img_path.$img;
                          echo '  <div class="row mb10 top10">
                          <a href="'.$linksp.'">     <img src="'.$img.'" alt=""></a>
                          <a href="'.$linksp.'">'.$name.'</a>
                      </div>';
                      }

                      ?>
                          <!--   
                            <div class="row mb10 top10">
                                <img src="images/sp2.jpg" alt>
                                <a href="#">Creed Aventus</a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="images/sp3.jpg" alt>
                                <a href="#">Thomas Kosmala No 4</a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="images/sp4.jpg" alt>
                                <a href="#">Dior Sauvage EDP</a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="images/sp5.jpg" alt>
                                <a href="#">Kilian Good Girl Gone Bad</a>
                            </div>-->
                        </div>

                    </div>