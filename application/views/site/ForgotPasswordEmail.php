<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Quên mật khẩu</title>
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
            <? require_once APPPATH.'views/site/includes/header_q.php' ?>
        </header>
    </div>
    <div class="wrapper_all qmk_nhan_email trang_dang_nhap">
        <form id="form_dk1" type="post">
            <div class="main_tt">
                <div class="account insert_email d_flex flex_column gachduoi">
                    <div class="account_back d_flex" onclick="back_page()">
                        <div class="back_page"><img src="<? echo base_url(); ?>assets/images/back.svg" alt=""></div>
                        <p class="font-medium size-14">Quay lại</p>
                    </div>
                    <div class="account_log-in account_otp-beside insert_email_wrapper w_100">
                        <div class="account_title font_s24 text_c color_green font_w_600">Nhập số điện thoại</div>
                        <div class="font_s16 text_l font_w500 color_grey line_h19 mr_t_32">Vui lòng nhập số điện thoại
                            <span class="color_red">*</span></div>
                        <p class="error_phone size-12 chudo mr_t_16"></p>
                        <div class="khung_input khung_input-email d_flex align_c no-top">
                            <input type="text" class="phone" placeholder="Nhập số điện thoại">
                            <div class="account_log_in-input-img icon_email">
                                <img src="<? echo base_url(); ?>assets/images/email.svg" alt="" class="m_r_18">
                            </div>
                        </div>
                        <button onclick="otp_form_1(); return false;"
                            class="account_otp-btn btn_blue bg_green border_none account_log-in_btn line_h19 mr_t_32">Tiếp
                            theo </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>

</html>

<script>
	var base_url = '<?php echo base_url(); ?>';

	function otp_form_1() {
		var flag = true;
		var phone = $('.phone').val();
		
		if ($.trim(phone) == '') {
            $('.error_phone').removeClass('mr_t_16').addClass('line_h16').html('Số điện thoại không được để trống');
            flag = false;
        } else {
			$.ajax ({
				type: 'POST',
				url: base_url+'account/checkPhoneForgot',
				data: {phone: phone},
				success: function(response) {
					if (response == 0) {
						$('.error_phone').removeClass('mr_t_16').addClass('line_h16').html('Số điện thoại không tồn tại');
						flag = false;
					} else {
						$('.error_phone').removeClass('line_h16').addClass('mr_t_16').html('');
					}
				},
				error: function (xhr) {
					console.log('error');
				}
			})
		}

		if (flag == true) {
			$.ajax ({
				type: 'POST',
				url: base_url+'account/sendForgotPasswordOTP',
				data: {phone: phone},
				success: function(response) {
					if (response > 0) {
						console.log(response);
						location.href = "quen-mat-khau-nhan-otp-" + response + ".html";
					} else {
						return false;
						console.log('error 1');
					}
				},
				error: function(xhr) {
					console.log('error 2');
				}
			})
		}
	}
</script>
