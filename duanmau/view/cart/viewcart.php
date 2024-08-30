<div class="row mb">
            <div class="boxtrai mr">
                <div class="boxtitle">GIỎ HÀNG</div>
                    <div class="row boxcontent cart">
                        <table>
                            <!-- <tr>
                                <th>Hình</th>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Thao tác</th>
                            </tr> -->

                            <?php
                                viewcart(1);
                            ?>

                            <!-- <tr>
                                <td>1</td>
                                <td><img src="img/a1.jpg" alt="" height="80px"></td>
                                <td>Đồng hồ</td>
                                <td>50</td>
                                <td>2</td>
                                <td>100</td>
                                <td><input type="button" value="Xóa"></td>
                            </tr> -->
                        </table>
                    </div>
                    <div class="row mb bill">
                    <a href="index.php?act=bill"> <input type="button" value="Tiếp tục đặt hàng" class="btn-cart"></a> <a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng" class="btn-cart"></a>
                    </div>
                </div>

            
            <div class="boxphai">
               <?php
                    include "view/boxright.php";
               ?>
            </div>
</div>

<style>
    .bill {
        margin: 0 20px;
    }

    .btn-cart {
        padding: 8px 24px;
        background-color: rgba(0, 0, 0, 0.7);
        margin-left: 10px;
        border: none; 
        margin-top: 12px;
        border-radius: 3px;
        color: #fff;
        cursor: pointer;
    }

    .btn-cart:hover {
        background-color: #777;
    }
</style>
        