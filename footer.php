<!DOCTYPE html>
<html>
    <head>
        <style>
            .footer{
                width:96%;
                height:120px;
                background-color:#A6754F;
                margin-left:2%;
                margin-right:2%;
                margin-top:3%;
                text-align:center;
                color:white;
                font-size:12px;
                font-family:'Tahoma', Geneva, sans-serif;
            }
            .footer a{
                padding-right:1%;
                padding-left:1%;
                color:white;
                margin:auto;
                text-decoration:none;
             }
            .footer img{
                width:25px;
                height:25px;
                margin-left:auto;                 
            }
            #text{
                font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
                margin-right:auto;
            }
            span{
                display:flex;
                align-items:center;
                
            }
        </style>
    </head>
    <body>
        <footer class="footer">
            <br/>
            <a href="#">ANASAYFA</a>
            <a href="#">ADEN PREMIUM</a>
            <a href="#">SOSYAL ALANLAR</a>
            <a href="#">KAT PLANI</a>
            <a href="#">VAZİYET PLANI</a>
            <a href="#">GALERİ</a>
            <a href="<?php echo get_stylesheet_directory_uri();?>/iletisim">İLETİŞİM</a>
            <br />
            <br>BİZE ULAŞIN:<b>0 312 489 1990</b></br>
            <br />
            <span>
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/uslu-yapi2.jpg" /><span id="text"><b>USLU YAPI</b></span>
            </span>
        </footer>
    </body>
</html>
