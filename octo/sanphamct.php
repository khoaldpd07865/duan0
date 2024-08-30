<div class="row mb  ">
    <div class="boxtrai mr demo">
        <div class="row "><?php
                            extract($onesp);
                            ?>
            <div class="boxtitle"><?= $name ?></div>
            <div class=" row boxcontent ">
                <?php



                $img = $img_path . $img;
                echo '<div class="row mb spct"> <img src="' . $img . '" width="200"> </br> </div>';
                echo $mota;
                ?>
            </div>

        </div>
        
    <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {
                            $("#binhluan").load("octo/binhluan/binhluanform.php", {
                                idpro: <?=$id?>
                            
                        });
                    });
                </script>
        <div class="row " id="binhluan">
           
        </div> -->
             <div class="row">
                   <iframe src="octo/binhluan/binhluanform.php?idpro=<?=$id?>" frameborder="0" height="300px" width="100%"></iframe>
             </div>
        <div class="row mb ">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class=" row boxcontent ">
                <?php
                foreach ($spcungloai as $spcungloai) {
                    extract($spcungloai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<li><a href="' . $linksp . '"> ' . $name . '</a> </li>
                    
                       
                    
                    
                    
                    
                    ';

                }
                ?>
            </div>

        </div>
    </div>

    <div class="boxphai">
        <?php include "./octo/boxright.php" ?>
    </div>

</div>