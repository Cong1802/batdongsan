
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Trang chọn tài khoản đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/frontend/css/css_q.css">
</head>

<body>
    <div class="link__header_register">
        <header class="position_r back_w">
            <?php require_once APPPATH.'views/site/includes/header_q.php'; ?>
        </header>
    </div>
    <div class="wrapper_all login_dangky">
        <div class="main_tt">
            <div class="account account_Respon d_flex align_c flex_column">
                <div class="account_p account_p-Respon ">
                    <div class="account_title font_s24 text_c color_green font_w_600">Bạn là?</div>
                    <div class="account_choose-text font_s14 m_t_b_24 text_c">Chọn loại tài khoản để đăng nhập</div>
                    <a href="trang-dang-nhap.html">
                        <div class="account_box d_flex bg_green">
                            <div class="account_box-w-h">
                                <div class="account_box-icon">
                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/renter.svg" alt="">
                                </div>
                                <div class="account_box-text color_white ">Người thuê, mua</div>
                            </div>
                        </div>
                    </a>
                    <a href="trang-dang-nhap.html">
                        <div class="account_box d_flex bg_green mr_t_16">
                            <div class="account_box-w-h">
                                <div class="account_box-icon">
                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/broker.svg" alt="">
                                </div>

                                <div class="account_box-text color_white ">Người môi giới</div>

                            </div>
                        </div>
                    </a>
                    <a href="trang-dang-nhap.html">
                        <div class="account_box d_flex bg_green mr_t_16">
                            <div class="account_box-w-h">
                                <div class="account_box-icon">
                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/the_lease.svg" alt="">
                                </div>
                                <div class="account_box-text color_white ">Người cho thuê, bán</div>
                            </div>
                        </div>
                    </a>
                    <a href="trang-dang-nhap.html">
                        <div class="account_box d_flex bg_green mr_t_16">
                            <div class="account_box-w-h">
                                <div class="account_box-icon">
                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/enterprise.svg" alt="">
                                </div>
                                <div class="account_box-text color_white ">Doanh nghiệp</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

<script type="text/javascript" src="<? echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>assets/js/js_quang.js"></script>
<script>
    $(".select_option").select2({
        width: "100%",
    });
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

    /* active_single_header('logoxanh'); */
</style>