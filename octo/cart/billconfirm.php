<div class="row mb ">
    <div class="boxtrai mr ">


        <div class="row mb">
            <div class="boxtitle">Cảm ơn đã đặt hàng</div>

            <div class="row boxcontent billform">


            </div>
        </div>

        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }
        ?>
        <div class="row mb">
            <div class="boxtitle">Thong tin dat hang</div>

            <div class="row boxcontent billform" style="text-align: center;">
                <li>Ma don hang:DAM-<?=$bill['id'] ?></li>
                <li>NGAY DAT HANG-<?=$bill['ngaydathang'] ?></li>
                <li>tong don hang-<?=$bill['total'] ?></li>
                <li>phuong thuc don hang-<?=$bill['bill_pttt'] ?></li>


            </div>
        </div>






        <div class="row mb">
            <div class="boxtitle">Thông tin đặt hàng</div>

            <div class="row boxcontent billform">
               
                <table class="">
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?=$bill['bill_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Địa Chỉ</td>
                        <td><?=$bill['bill_adress'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$bill['bill_email'] ?></td>

                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><?=$bill['bill_tel'] ?></td>
                    </tr>
                </table>

            </div>
        </div>




        <div class="row mb">
            <div class="boxtitle">CHi tiet gio hang</div>

            <div class="row boxcontent cart">
                <table>

                    <?php
                    bill_chi_tiet($billct);
                    ?>
                </table>
            </div>
        </div>



    </div>





    <div class="boxphai">
        <?php
        include "./octo/boxright.php";
        ?>
    </div>

</div>