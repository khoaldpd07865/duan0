<div class="row mb ">
                <div class="boxtrai mr ">
                    
                    <form action="index.php?act=billconfirm" method="post">
                    <div class="row mb">
                      <div class="boxtitle">Thông tin đặt hàng</div>
                    
                  <div class="row boxcontent billform">
                    <?php
                    if (isset($_SESSION['user'])) {
                        $user=$_SESSION['user']['user'];
                        $adress=$_SESSION['user']['adress'];
                        $email=$_SESSION['user']['email'];
                        $tel=$_SESSION['user']['tel'];

                    }else{
                        $user="";
                        $adress="";
                        $email="";
                        $tel="";
                    }
                    ?>
                     <table class="mo">
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="user" value="<?=$user?>"></td>
                        </tr>
                        <tr>
                            <td>Địa Chỉ</td>
                            <td><input type="text" name="adress" value="<?=$adress?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?=$email?>"></td>
                           
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" value="<?=$tel?>"></td>
                        </tr>
                     </table>
                  
                </div>
                </div>


                
                <div class="row mb">
                      <div class="boxtitle">Phương Thức thanh toán</div>
                   
                  <div class="row boxcontent phuongthuc ">
                   <table class="mo">
                   <input type="radio" name="pttt" checked> Trả Tiền khi nhận hàng
                        <input type="radio" name="pttt" > Chuyển khoản ngân hàng
                       <input type="radio" name="pttt" > Thanh toán

                   
                   </table>
                  
                </div>
                </div>
                <div class="row mb">
                      <div class="boxtitle">Gio Hang</div>
                   
                  <div class="row boxcontent cart">
                    <table>
              
                      <?php viewcart(0); ?>
                      </table>
                </div>
                </div>
               
                <div class="row mb bill">
               
                  <input  type="submit" value="Đồng Ý ĐẶT HÀNG" name="dongydathang"> </a>  
                </div>
                </form>
                </div>

                
               
               
             
                <div class="boxphai">
                    <?php
                    include "./octo/boxright.php";
                    ?>
                </div>
               
                </div>
                
                