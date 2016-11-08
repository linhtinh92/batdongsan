<div class="footer">
    <div class="footer-menu"><a href="vi.html">Trang chủ</a>|<a href="vi/gioi-thieu.html">Giới thiệu</a>|<a href="vi/dat-nen.html">Đất nền</a>|<a href="vi/can-ho.html">Căn hộ</a>|<a href="vi/tin-tuc.html">Tin tức</a>|<a href="vi/lien-he.html">Liên hệ</a></div>
    <div class="col-dl-7 col-screen footer-info">
        <h1 style="margin-bottom:4px;">SÀN GIAO DỊCH BĐS HƯNG THỊNH - PHÚ NHUẬN</h1>
        <p>ĐC: 163 Hoa Lan, Phường 2, Quận Phú Nhuận, TPHCM<br />Hotline 1 : 0937 39 49 39 </p>
        <p>Hotline 2 : 0933 098 886</p>
        <p>Email : duan@hungthinhland.info<br /> Website: <a>http://hungthinhland.info</a></p>        </div>
    <div class="col-dl-5 col-screen">
        <div class="footer_counter">
            <ul>
                <li>Đang online: <span>2</span></li>
                <li>Hôm qua: <span>1132</span></li>
                <li>Lượt truy cập: <span>411697</span></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</div>
<div class="container dropmenu">
    <div class="navfixed">
        <div class="dropdown dropdown_menu">
            <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="vi.html" class="navbar-brand"><img src="<?=get_template_directory_uri()?>/images/logo1.png" alt="logo" /></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a href="vi.html" class="active">Trang chủ</a></li>
                <li><a href="vi/gioi-thieu.html" >Giới thiệu</a></li>
                <li><a href="vi/can-ho.html" >Căn hộ</a></li>
                <li><a  href="vi/dat-nen.html">Đất nền</a></li>
                <li><a href="vi/tin-tuc.html" >Tin tức</a></li>
                <li><a href="vi/lien-he.html" >Liên hệ</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div id="goTop" class="gotoppage"><img src="<?=get_template_directory_uri()?>/images/icon-back.png" alt="Len dau trang" /></div>
<script type="text/javascript">
    $(document).ready(function(){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
            else $('#goTop').fadeOut();
        });
        $('#goTop').click(function () {
            $('body,html').animate({ scrollTop: 0 }, 'slow');
        });
    });
</script>
</body>
</html>
