<div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                        ?>
                            <div class="row mb10">
                                <?=$user?>
                            </div>

                            <div class="row mb10">
                                <li>
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>
                                <?php if($role == 1) { ?>
                                <li>
                                    <a href="admin/index.php">Đăng nhập Admin</a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>
                        <?php

                            } else {

                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập
                                <input type="text" name="user">
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="pass"> <br>
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name=""> Ghi nhớ tài khoản <br>
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký thành viên</a>
                        </li>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm = "index.php?act=sanpham&iddm=".$id;
                                    echo '<li>
                                            <a href="'.$linkdm.'">'.$name.'</a>
                                        </li>';
                                }
                            ?>
                            <!-- <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Balo</a>
                            </li>
                            <li>
                                <a href="#" class="boxsp-link" >Nước hoa</a>
                            </li>
                            <li>
                                <a href="#">Giày dép</a>
                            </li>
                            <li>
                                <a href="#">Quần áo</a>
                            </li>
                            <li>
                                <a href="#">Trang sức</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="boxfooter searchbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw">
                            <input type="submit" name="timkiem" value="Tìm kiếm" style="margin-top: 5px; width: 40%; ">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <?php
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=spchitiet&idsp=".$id;
                                $img = $img_path.$img;
                                echo '<div class="row mb10 top10">
                                        <a href="'.$linksp.'" ><img src="'.$img.'" alt=""></a>
                                        <a href="'.$linksp.'">'.$name.'</a>
                                    </div>';
                            }
                        ?>
                        <!-- <div class="row mb10 top10">
                            <img src="view/img/h1.jpg" alt="">
                            <a href="#">Citizen Sunshine and Luna Mechanical</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/h1.jpg" alt="">
                            <a href="#">Citizen Sunshine and Luna Mechanical</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/h1.jpg" alt="">
                            <a href="#">Citizen Sunshine and Luna Mechanical</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/h1.jpg" alt="">
                            <a href="#">Citizen Sunshine and Luna Mechanical</a>
                        </div> -->
                    </div>
                </div>