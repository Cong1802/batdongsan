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
                    <div class="back_page"><img src="<? echo base_url(); ?>assets/images/back.svg" alt=""></div>
                    <p class="font-medium size-14">Quay lại</p>
                </div>
                <form onsubmit="login_form(); return false;" type="post">
                    <div class="account_log-in ">
                        <div class="account_title font_s24 text_c color_green font_w_600">Đăng nhập</div>
                        <div class="font_s16 text_c font_w500 color_grey mt_10 mr_t_32 line_h19">Chào mừng bạn trở lại
                            với BATDONGSAN3S!</div>
                        <p class="error_email chudo size-12 mr_t_32"></p>
                        <div class="khung_input khung_input-email d_flex align_c account_log-in_input_dk_dn no-top">
                            <input type="text" class="input_email" placeholder="Nhập email">
                            <div class="account_log_in-input-img icon_email">
                                <img src="<? echo base_url(); ?>assets/images/email.svg" alt="" class="m_r_18">
                            </div>
                        </div>
						<p class="error_pw chudo size-12 mr_t_32"></p>
                        <div class="khung_input khung_input-email d_flex align_c account_log-in_input_dk_dn qmk_update_nhap no-top">
                            <input type="password" class="input_pw" placeholder="Nhập mật khẩu" id="pass_log_id"
                                name="pass">
                            <div class="account_log_in-input-img icon_password toggle-password"
                                toggle="#password-field">
                                <img src="<? echo base_url(); ?>assets/images/eye.svg" alt=""
                                    class="m_r_18 toggle-password_dong">
                                <img src="<? echo base_url(); ?>assets/images/eye_gray.png" alt=""
                                    class="m_r_18 toggle-password_mo hidden">
                            </div>
                        </div>
                        <div class="account_log-in_text text_r">
                            <a href="quen-mat-khau-nhap-email.html" class="color_yelow font_s14">Quên mật khẩu?</a>
                        </div>
                        <button type="button" onclick="login_form(); return false;"
                            class="btn_blue bg_green border_none" style="width: 100%"> Đăng nhập </button>
                        <div class="account_log-in-Memorize d_flex align_c">
                            <label class="checkbox-label">
                                <input type="checkbox" name="gioitinh">
                                <span class="checkbox-custom"></span>
                            </label>
                            <div class="account_log-in-Memorize-text font_s14 ml_10">Ghi nhớ tài khoản</div>
                        </div>
                        <div class="account_dangky font_s14 text_c">
                            <span class="account_dangky-text">Bạn chưa có tài khoản? <a
                                    href="trang-tai-khoan-dang-ky.html" class="color_green">Đăng ký</a> tại đây</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
<script>
var base_url = '<?php echo base_url(); ?>';
var regex_email =
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

$('.input_email').keyup(function(e) {
	if (e.keyCode == 13) {
		login_form();
	}
});
$('.input_pw').keyup(function(en) {
	if (en.keyCode == 13) {
		login_form();
	}
});
function login_form() {
    var flag = true;
	var userType = <?= $type-1 ?>;
    var email = $('.input_email').val();
	var password = $('.input_pw').val();

    if ($.trim(email) == '') {
		$('.error_email').removeClass('mr_t_32').addClass('mr_t_16').addClass('line_h16').html('Email không được để trống');
		flag = false;
    } else if ($.trim(email !== '') && regex_email.test(email) == false) {
		$('.error_email').removeClass('mr_t_32').addClass('mr_t_16').addClass('line_h16').html('Email không đúng định dạng');
		flag = false;
	} else {
		$('.error_email').removeClass('line_h16').removeClass('mr_t_16').addClass('mr_t_32').html('');
	}

	if ($.trim(password) == '') {
		$('.error_pw').removeClass('mr_t_32').addClass('mr_t_16').addClass('line_h16').html('Mật khẩu không được để trống');
		flag = false;
	} else if ($.trim(password) !== '' && $.trim(password).length < 8) {
		$('.error_pw').removeClass('mr_t_32').addClass('mr_t_16').addClass('line_h16').html('Mật khẩu phải nhập tối đa 8 ký tự');
		flag = false;
	} else {
		$('.error_pw').removeClass('line_h16').removeClass('mr_t_16').addClass('mr_t_32').html('');
	}

	if (flag == true) {
		$.ajax ({
			type: 'POST',
			url: base_url+'account/getLogin',
			dataType: 'json',
			data: {
				userType: userType,
				email: email,
				password: password
			},
			success: function(response) {
				if (response.status > 0) {
					location.href = "tong-quan.html";
				} else {
					$('.error_email').removeClass('mr_t_32').addClass('mr_t_16').addClass('line_h16').html('Tài khoản hoặc mật khẩu không đúng');
					$('.error_pw').removeClass('mr_t_32').addClass('mr_t_16').addClass('line_h16').html('Tài khoản hoặc mật khẩu không đúng');
				}
			},
			error: function(xhr) {
				console.log('error');
			}
		})
	}
}
</script>

</html>
