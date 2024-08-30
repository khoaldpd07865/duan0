<div class="row mb">
    <div class="boxtrai mr">

        <form action="index.php?act=billcomfirm" method="post">
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent billform">
                    <table>

                        <?php
                            if(isset($_SESSION['user'])) {
                                $user = $_SESSION['user']['user'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            } else {
                                $user = "";
                                $address = "";
                                $email = "";
                                $tel = "";
                            }
                        ?>

                        <tr class="mb12">
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="user" value="<?=$user?>" class="submit-input"></td>
                        </tr>
                        <tr class="mb12">
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?=$address?>" class="submit-input"></td>
                        </tr>
                        <tr class="mb12">
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?=$email?>" class="submit-input"></td>
                        </tr>
                        <tr class="mb12">
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" value="<?=$tel?>" class="submit-input"></td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt">Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt">chuyển khoảng ngân hàng</td>
                            <td><input type="radio" name="pttt">Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row mb">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row boxcontent cart">
                    <table>
                        <?php viewcart(1); ?>
                    </table>
                </div>
            </div>
            <div class="row mb bill">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG " name="dongydathang">
            </div>
        </form>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>


<style>
    .mb12 input {
        padding: 4px 192px;
        border-radius: 5px;
        outline: none;
        margin-left: 12px;
        border: 1px solid #666;
    }

    .mb12 {
        margin-bottom: 30px;
    }

</style>