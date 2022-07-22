
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Loại tin đăng</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/css_q.css">
</head>

<body>
    <div class="wrapper_all">
        <header class="position_r">
            <? require_once APPPATH.'views/site/includes/da_header.php' ?>
        </header>
        <div class="loai_dangtin_container w_100 back_f7f8fc pl_pr_80 p_t_26 responsive_fixed">
            <div class="dangtin_hedding p_t_26">
                <div class="lease_link d_flex align_c">
                    <a href="" class="lease_link-trangchu cursor_p">
                        <p class="font_s14 color_grey3">Trang chủ</p>
                    </a>
                    <span class="lease_link-img">
                        <img src="<? echo base_url(); ?>assets/images/arrow_r_back.png" alt="">
                    </span>
                    <a href="/" class="lease_link-chothue cursor_p">
                        <p class="font_s14 color_green">Loại đăng tin</p>
                    </a>
                </div>
                <div class="mr_t_26">
                    <div class=" font_s26 color_grey line_h30 font_w500">Chọn loại bài đăng bạn muốn tạo trên 3S
                    </div>
                </div>
            </div>
            <div class="loai_dangtin_box d_flex w_100 space_b mr_t_24">
                <a href="/dang-tin-sau-dang-nhap.html" class="loai_dangtin-item back_w d_flex flex_column align_c flex_center cursor_p ">
                    <div class="loai_dangtin-item-img">
                        <img src="<? echo base_url(); ?>assets/images/loai1_dangtin.png" alt="">
                    </div>
                    <div class="loai_dangtin-item-trade mr_t_24 text_c">
                        <p class="font_w500 font_s18 line_h24 color_grey">Tin đăng Mua bán/<br>
                            Cho thuê bất động sản</p>
                        <p class="font_s16 line_h24 color_grey mr_t_16">Đăng tin mua bán, cho thuê <br>
                            dễ dàng tiếp cận tới khách hàng</p>
                    </div>
                </a>
                <a href="/tin-dang-du-an.html" class="loai_dangtin-item back_w d_flex flex_column align_c flex_center cursor_p ">
                    <div class="loai_dangtin-item-img">
                        <img src="<? echo base_url(); ?>assets/images/loai2_dangtin.png" alt="">
                    </div>
                    <div class="loai_dangtin-item-trade mr_t_24 text_c">
                        <p class="font_w500 font_s18 line_h24 color_grey">Tin đăng dự án
                        </p>
                        <p class="font_s16 line_h24 color_grey mr_t_16">Đăng tin dự án <br>
                            giới thiệu mô tả các dự án<br>
                            để tiếp cận khách hàng</p>
                    </div>
                </a>
                <a href="/tin-dang-phong-dep.html" class="loai_dangtin-item back_w d_flex flex_column align_c flex_center cursor_p ">
                    <div class="loai_dangtin-item-img">
                        <img src="<? echo base_url(); ?>assets/images/loai3_dangtin.png" alt="">
                    </div>
                    <div class="loai_dangtin-item-trade mr_t_24 text_c">
                        <p class="font_w500 font_s18 line_h24 color_grey">Phòng đẹp<br>
                            Cho thuê bất động sản</p>
                        <p class="font_s16 line_h24 color_grey mr_t_16">Chia sẻ những bức ảnh và <br>
                            câu chuyện về 1 góc không gian<br>
                            trong ngôi nhà mà bạn yêu thích</p>
                    </div>
                </a>
                <a href="/tin-dang-nha-dep.html" class="loai_dangtin-item back_w d_flex flex_column align_c flex_center cursor_p pa_l_r_13">
                    <div class="loai_dangtin-item-img">
                        <img src="<? echo base_url(); ?>assets/images/loai4_dangtin.png" alt="">
                    </div>
                    <div class="loai_dangtin-item-trade mr_t_24 text_c">
                        <p class="font_w500 font_s18 line_h24 color_grey">Nhà đẹp
                        </p>
                        <p class="font_s16 line_h24 color_grey mr_t_16">Chia sẻ những bức ảnh và câu<br>chuyện (Chi tiết về quá trình xây<br>dựng và thiết kế) về ngôi nhà của<br>bạn</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
<script>
    // CKEDITOR.replace('tdn_mota');
    $(".select_option").select2({
        width: "100%",
    });

    $('.lease_btn-xemthem').click(function() {
        $('.lease_show-xemthem').toggleClass('hidden');
        $('.lease_show-thugon').toggleClass('hidden');
        $('.lease-xemthem').toggleClass('hidden');
    })
</script>

</script>

</html>
<style>
    .select2-container--default .select2-selection--single {
        border: none !important;
    }

    .select2-search .select2-search--dropdown {
        display: none !important;
    }

    .select2-selection__rendered {
        background: #FAFAFA;
    }
</style>