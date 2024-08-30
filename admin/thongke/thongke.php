<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
 
    <div class="row frmcontent ">
        <div class="row mb10 frmsloai">
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤP</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
</tr>
                <?php
                  foreach($listthongke as $thongke){
                    extract($thongke);
                    echo '
                    <tr>
                    
                    <th>'.$madm.'</th>
                    <th>'.$tendm.'</th>
                    <th>'.$countsp.'</th>
                    <th>'.$maxprice.'</th>
                    <th>'.$minprice.'</th>
                    <th>'.$avgprice.'</th>

                    </tr>';
                  }
                ?>
                
             
            </table>
        </div>
        <div class="row mb10">
          
            <a href="index.php?act=bieudo"> <input type="button" value="Xem biểu đồ"></a>
            
        </div>
      
    </div>
</div>