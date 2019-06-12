<?php get_header(); ?>

<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>    
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/jcarousel/dist/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/carousel.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/style.css" />
    </head>
    
    
    <body>
        <div class="container">
            <div class="menu">
                <a href="<?php echo home_url();?>" style="font-size:25px;margin-left:auto;"><span><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png" width="auto" height="auto"/>ADENpremium</span></a>
                <a href="#">ANASAYFA</a>
                <a href="#">ADEN PREMIUM</a>
                <a href="#">SOSYAL ALANLAR</a>
                <a href="#">KAT PLANI</a>
                <a href="#">VAZİYET PLANI</a>
                <a href="#">GALERİ</a>
                <a href="<?php echo get_stylesheet_directory_uri();?>/iletisim" style="margin-right:auto;">İLETİŞİM</a>
            </div>
            
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li class="item"><img src="<?php echo get_stylesheet_directory_uri();?>/images/tn_room1.jpeg" width="auto" height="auto"/></li>
                        <li class="item"><img src="<?php echo get_stylesheet_directory_uri();?>/images/tn_room2.jpg" height="auto"/></li>
                        <li class="item"><img src="<?php echo get_stylesheet_directory_uri();?>/images/tn_room3.jpg" width="auto" height="auto"/></li>
                    </ul>
                </div>
            </div>
            
            <div class="content">
                
                    <div id="image1">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/page1-2">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/images/family.jpg" alt="Ailenizin Huzuru İçin" style="width:200px;height:200px"/>
                        <p><i>Ailenizin Huzuru İçin</i></p>
                        </a>
                    </div>
                    <div id="image2">  
                        <a href="<?php echo get_stylesheet_directory_uri();?>/page2-2">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/images/child.jpg" alt="Mutluluğunuz İçin" style="width:200px;height:200px"/>
                        <p><i>Mutluluğunuz İçin</i></p>
                        </a>
                    </div>
                    <div id="image3">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/page3-2">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/images/comfort.png" alt="Konforunuz İçin" style="width:200px;height:200px"/>
                        <p><i>Konforunuz İçin</i></p>
                        </a>
                    </div>
                    <br />
                    <h3 style="color:#A6754F;text-align:center;font-family:'Times New Roman', Times, serif"><i>Uslu Yapı'dan Aden Premium</i></h3>
            </div>
        </div>
     </body>
</html>

<?php get_footer();?>