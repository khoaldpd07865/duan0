<div class="row mb  ">
    <div class="boxtrai mr demo">
        <div class="row">
            <div class="banner n1">

                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="../img1/img1.png" style="width:100%">
                        
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="../img1/img2.jpg" style="width:100%">
                      
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="../img1/img3.jpg" style="width:100%">
                       
                    </div>

                    <!-- Next and previous buttons -->
               
                </div>
                <br>
                
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew  as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "mr";
                } else {
                    $mr = "";
                }
                echo ' <div class="boxsp ' . $mr . ' " >
                            <div class=" row img"> <a href="' . $linksp . '"><img src="' . $hinh . '" alt></a></div>
                            <p>' . $price . '</p>
                            <a href="' . $linksp . '">' . $name . ' </a>
                       
                        <div class="row btndaddtocart">
                        <form action="index.php?act=addtocart" method="post">
                           <input type="hidden" name="id" value="' . $id . '">
                           <input type="hidden" name="name" value="' . $name . '">
                           <input type="hidden" name="img" value="' . $img . '">
                           <input type="hidden" name="price" value="' . $price . '">
                           <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" >
          
          
                        </form>
                        </div>
                        </div>
                        
                        ';
                $i+= 1;
            }
            ?>
            <!--     <div class="boxsp mr">
                            <div class=" row img"> <img src="images/sp1.jpg" alt></div>
                            <p>30$</p>
                            <a href="chitietsp.html">Versace Pour Homme </a>
                        </div>
                        <div class="boxsp mr">
                            <div class=" row img"> <img src="images/sp2.jpg" alt></div>
                            <p>30$</p>
                            <a href="#">Creed Aventus </a>
                        </div> <div class="boxsp ">
                            <div class=" row img"> <img src="images/sp3.jpg" alt></div>
                            <p>30$</p>
                            <a href="#">Thomas Kosmala No 4 </a>
                        </div> <div class="boxsp mr">
                            <div class=" row img"> <img src="images/sp4.jpg" alt></div>
                            <p>30$</p>
                            <a href="#">Dior Sauvage EDP</a>
                        </div> <div class="boxsp mr">
                            <div class=" row img"> <img src="images/sp5.jpg" alt></div>
                            <p>30$</p>
                            <a href="#">Kilian Good Girl Gone Bad </a>
                        </div> <div class="boxsp ">
                            <div class=" row img"> <img src="images/sp6.webp"
                                    alt></div>
                            <p>30$</p>
                            <a href="#">Giorgio Armani Acqua Di Gio </a>
                        </div>
                        <div class="boxsp mr">
                            <div class=" row img"> <img src="images/sp7.jpg" alt></div>
                            <p>30$</p>
                            <a href="#">Versace Bright Crystal </a>
                        </div> <div class="boxsp mr">
                            <div class=" row img"> <img src="images/sp8.jpg" alt></div>
                            <p>30$</p>
                            <a href="#">o Malone English Pea </a>
                        </div> <div class="boxsp ">
                            <div class=" row img"> <img src="images/sp9.jpg" alt></div>
                            <p>30$</p>
                            <a href="#">Versace Eros For Men EDT </a>
                        </div>
                        <div class="boxsp mr">
                            <div class=" row img"> <img src="images/sp10.jpg"
                                    alt></div>
                            <p>30$</p>
                            <a href="#">Narciso Rodriguez For Her </a>
                        </div> <div class="boxsp mr">
                            <div class=" row img"> <img src="images/sp11.jpg"
                                    alt></div>
                            <p>30$</p>
                            <a href="#">Gucci Bloom For Women EDP </a>
                        </div> <div class="boxsp ">
                            <div class=" row img"> <img src="images/sp12.jpg"
                                    alt></div>
                            <p>30$</p>
                            <a href="#">Le Labo Santal 33 EDP</a>
                        </div> -->

        </div>

    </div>

    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>

</div>