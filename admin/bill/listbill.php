<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
              <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
              <input type="submit" name="listok" value="GO">


    </form>
    <div class="row frmcontent ">
        <div class="row mb10 frmsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th>Ngày đặt hàng</th>
                    <th>THAO TÁC</th>
</tr>
                <?php
                 foreach($listbill as $bill){
                    extract($bill);
                    $kh=$bill["bill_name"].'
                    <br> '.$bill["bill_email"].'
                    <br> '.$bill["bill_adress"].'
                    <br> '.$bill["bill_tel"];
                    $ttdh=get_ttdh($bill["bill_status"]);
                    $countsp= loadall_cart_count($bill["id"]);

                    echo '<tr>
                    <td> <input type="checkbox" name="" id=""></td>
                    <td>DAM-' . $bill['id'] . '</td>
                    <td>'. $kh .'</td>
                    <td>' . $countsp . '</td>
                    <td><strong>' . $bill["total"] . ' VND</strong></td>
                    <td>' . $ttdh . '</td>
                    <td>' .$bill["ngaydathang"]. '</td>
                    <td><input type="button" name="" id="" value="Sua"><input type="button" name="" id="" value="Xoa"></td>
                </tr>';
                 }
                ?>
               
             
            </table>
        </div>
        <div class="row mb10">

        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"> <input type="button" value="nhập thêm"></a>
            
        </div>
    </div>
</div>