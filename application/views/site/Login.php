
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Trang đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/css_q.css">
</head>

<body>
    <div class="link__header_register">
        <header class="position_r back_w">
            <?php require_once APPPATH.'views/site/includes/header_q.php' ?>
        </header>
    </div>
    <div class="wrapper_all trang_dang_nhap">
        <div class="main_tt">
            <div class="account account_Respon d_flex flex_column">
                <div class="account_back d_flex" onclick="back_page()">
                    <div class="back_page"><img src="<? echo base_url(); ?>assets/images/back.png" alt=""></div>
                    <p class="font-medium size-14">Quay lại</p>
                </div>
                <div class="account_log-in ">
                    <div class="account_title font_s24 text_c color_green font_w_600">Đăng nhập</div>
                    <div class="font_s16 m_t_b_24 text_c font_w500 color_grey mt_10 mr_t_32 line_h19">Chào mừng bạn trở lại với BATDONGSAN3S!</div>
                    <div class="khung_input khung_input-email d_flex align_c account_log-in_input_dk_dn">
                        <input type="text" placeholder="Nhập email">
                        <div class="account_log_in-input-img icon_email">
                            <img src="<? echo base_url(); ?>assets/images/email.png" alt="" class="m_r_18">
                        </div>
                    </div>
                    <div class="khung_input khung_input-email d_flex align_c mr_t_32 account_log-in_input_dk_dn qmk_update_nhap">
                        <input type="password" placeholder="Nhập mật khẩu" id="pass_log_id" name="pass">
                        <div class="account_log_in-input-img icon_password toggle-password" toggle="#password-field">
                            <img src="<? echo base_url(); ?>assets/images/eye.png" alt="" class="m_r_18 toggle-password_dong">
                            <img src="<? echo base_url(); ?>assets/images/eye_gray.png" alt="" class="m_r_18 toggle-password_mo hidden">
                        </div>
                    </div>
                    <div class="account_log-in_text text_r">
                        <a href="quen-mat-khau-nhap-email.html" class="color_yelow font_s14">Quên mật khẩu?</a>
                    </div>
                    <a href="" class="btn_blue bg_green border_none"> Đăng nhập </a>
                    <div class="account_log-in-Memorize d_flex align_c">
                        <label class="checkbox-label">
                            <input type="checkbox" name="gioitinh">
                            <span class="checkbox-custom"></span>
                        </label>
                        <div class="account_log-in-Memorize-text font_s14 ml_10">Ghi nhớ tài khoản</div>
                    </div>
                    <div class="account_dangky font_s14 text_c">
                        <span class="account_dangky-text">Bạn chưa có tài khoản? <a href="trang-tai-khoan-dang-ky.html" class="color_green">Đăng ký</a> tại đây</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>

</html>