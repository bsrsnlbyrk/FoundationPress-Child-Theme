<?php /* Template Name: Contact */ ?>

<?php get_header();?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/style.css" />
    </head>
    <body style="height:100%"> 
        <div class="container" style="min-height:100%">
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
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24095.0418916199!2d28.778087350000003!3d40.98410325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1560201821494!5m2!1str!2str" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div style="overflow:auto">    
                <div id="title">
                    <p><i>İletişim</i></p>
                </div>
                <div id="form">
                    <?php echo do_shortcode( '[contact-form-7 id="14" title="İletişim formu 1"]' ); ?>
                </div>
            </div>
        </div>
    </body>
</html>

<?php get_footer();?>
