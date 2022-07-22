
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Nhập email</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/css_q.css">
</head>

<body>
    <div class="link__header_register">
        <header class="position_r back_w">
            <? require_once APPPATH.'views/site/includes/header_q.php' ?>
        </header>
    </div>
    <div class="wrapper_all trang_dang_nhap">
        <div class="main_tt">
            <div class="account qmk_update_password d_flex flex_column gachduoi">
                <div class="account_back d_flex" onclick="back_page()">
                    <div class="back_page"><img src="<? echo base_url(); ?>assets/images/back.svg" alt=""></div>
                    <p class="font-medium size-14">Quay lại</p>
                </div>
				<form method="post">
                <div class="account_log-in account_otp-beside insert_email_wrapper quen_mk_update w_100">
                    <div class="account_title font_s24 text_c color_green font_w_600">Đặt lại mật khẩu</div>
					<p class="error_pw mr_t_35 chudo size-12"></p>
                    <div class="khung_input khung_input-email d_flex align_c qmk_update_nhap no-top">
                        <input type="password" placeholder="Nhập mật khẩu mới" class="change_pw" id="pass_log_id" name="pass">
                        <div class="account_log_in-input-img icon_email toggle-password" toggle="#password-field">
                            <img src="<? echo base_url(); ?>assets/images/eye.svg" alt="" class="cursor_p m_r_18 toggle-password_dong">
                            <img src="<? echo base_url(); ?>assets/images/eye_gray.png" alt="" class="cursor_p m_r_18 toggle-password_mo hidden">
                        </div>
                    </div>
					<p class="error_confirm_pw mr_t_35 chudo size-12"></p>
                    <div class="khung_input khung_input-email d_flex align_c qmk_update_nhap no-top">
                        <input type="password" placeholder="Nhập lại mật khẩu mới" class="confirm_change_pw" id="pass_log_id" name="pass">
                        <div class="account_log_in-input-img icon_password toggle-password" toggle="#password-field">
                            <img src="<? echo base_url(); ?>assets/images/eye.svg" alt="" class="cursor_p m_r_18 toggle-password_dong">
                            <img src="<? echo base_url(); ?>assets/images/eye_gray.png" alt="" class="cursor_p m_r_18 toggle-password_mo hidden">
                        </div>
                    </div>
                    <button onclick="otp_form_1(); return false;" class="account_otp-btn btn_blue bg_green border_none line_h19" style="width: 100%">Đổi mật khẩu </button>
                </div>
				</form>
            </div>
            <div class="popup_password hidden">
                <div class="popup_password-close" id="close_update-mk"></div>
                <div class="account_wish qmk_update_prosper d_flex flex_column border_r_8">
                    <div class="account_wish-wrapper qmk_update_prosper-wrapper border_r_8">
                        <div class="account_wish-img qmk_update_prosper-img d_flex w_100 flex_center">
                            <img src="<? echo base_url(); ?>assets/images/hinhtron_tichxanh.png" alt="">
                        </div>
                        <div class="account_wish-title mr_t_21">
                            <p class="text_c font_w_500 color_grey font_s14">Cập nhật mật khẩu thành công!</p>
                        </div>
                        <div class="account_wish-btn d_flex flex_center mr_t_24">
                            <div class="account_wish-btn-a qmk_wish-btn-a bg_green d_flex flex_center align_c">
                                <a href="trang-dang-nhap.html" class="color_white font_s16 text_c"> Đăng nhập ngay </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
<script>
var base_url 	= '<?php echo base_url(); ?>';
var regex_password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(.{8,20}$)/;

function otp_form_1() {
	var flag = true;
	var id = <?= $id ?>;
	var password = $('.change_pw').val();
	var confirm_pw = $('.confirm_change_pw').val();

	if ($.trim(password) == '') {
		$('.error_pw').removeClass('mr_t_35').addClass('mr_t_19').addClass('line_h16').html('Mật khẩu mới không được để trống');
		flag = false;
	} else if ($.trim(password).length < 8) {
		$('.error_pw').removeClass('mr_t_35').addClass('mr_t_19').addClass('line_h16').html('Mật khẩu mới phải nhập tối đa 8 ký tự');
		flag = false;
	} else if ($.trim(password) !== '' && regex_password.test(password) == false) {
		$('.error_pw').removeClass('mr_t_35').addClass('mr_t_19').addClass('line_h16').html('MK mới không đủ mạnh (VD: 123!@#Hhp)');
		flag = false;
	} else {
		$('.error_pw').removeClass('mr_t_19').removeClass('line_h16').addClass('mr_t_35').html('');
	}

	if ($.trim(confirm_pw) == '') {
		$('.error_confirm_pw').removeClass('mr_t_35').addClass('mr_t_19').addClass('line_h16').html('Nhập lại mật khẩu mới không được để trống');
		flag = false;
	} else if ($.trim(confirm_pw) != $.trim(password)) {
		$('.error_confirm_pw').removeClass('mr_t_35').addClass('mr_t_19').addClass('line_h16').html('Mật khẩu nhập lại không khớp');
		flag = false;
	} else {
		$('.error_confirm_pw').removeClass('mr_t_19').removeClass('line_h16').addClass('mr_t_35').html('');
	}

	if (flag == true) {
		$.ajax ({
			type: 'POST',
			url: base_url+'account/ForgotPasswordUpdate',
			data: {
				id: id,
				password: password
			},
			success: function(response) {
				$('.popup_password').removeClass('hidden').addClass('flex');
			},
			error: function(xhr) {
				console.log('failed');
			}
		})
	}
}
</script>

</html>
<style>
</style>
