<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
                    
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="row boxcontent formregister">
                <form action="index.php?act=quenmk" method="post">
                    <input type="email" name="email" placeholder="Email">
                    <div class="form-sub">
                        <div class="form-sub__btn">
                            <input type="submit" name="guiemail" value="Gửi">
                        </div>

                        <div class="form-sub__btn">
                            <input type="reset" value="Nhập lại">
                        </div>
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }
                    ?>
                </h2>
            </div>
        </div>          
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php";?>
    </div>      
</div>

<style>
    .formregister input {
        width: 70%;
        padding: 6px 16px;
        margin: 8px 0;
        outline: none;
        border: 1px solid rgba(0, 0, 0, 0.4);
        border-radius: 3px;
    }

    .formregister input:hover {
        cursor: pointer;
        background: #f5f5f5;
        border: 1px solid #2483ffe6;
    }

    .form-sub {
        display: flex;
    }

    .form-sub__btn input {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 4px 28px;
        cursor:pointer ;
        background-color: #000;
        color: #fff;
    }

    .form-sub__btn input:hover {
       background-color: rgba(0, 0, 0, 0.7);
    }

    .thongbao {
        color: red;
    }
</style>