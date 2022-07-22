<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Trang nhập mã otp</title>
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
    <div class="wrapper_all trang_dang_nhap">
        <div class="main_tt">
            <div class="account account_otp qmk_otp d_flex flex_column gachduoi">
                <div class="account_back d_flex" onclick="back_page()">
                    <div class="back_page"><img src="<? echo base_url(); ?>assets/images/back.svg" alt=""></div>
                    <p class="font-medium size-14">Quay lại</p>
                </div>
                <div class="account_log-in account_otp-beside w_100 quen_mk_otp">
                    <div class="account_title font_s24 text_c color_green font_w_600 mr_t_4_am">Nhập mã OTP</div>
                    <div class="font_s14 m_t_b_24 text_l font_w500 color_grey mr_t_32">Mã xác thực gửi về Email
                        “<?= $email ?>”</div>
                    <div class="account_otp-beside-otp">
                        <form method="post" class="digit-group digit-group-otp font_s24 d_flex space_b">
                            <input type="text" class="digit" id="digit-1" name="digit-1" data-next="digit-2" />
                            <input type="text" class="digit" id="digit-2" name="digit-2" data-next="digit-3" />
                            <input type="text" class="digit" id="digit-3" name="digit-3" data-next="digit-4" />
                            <input type="text" class="digit" id="digit-4" name="digit-4" data-next="digit-5" />
                            <input type="text" class="digit" id="digit-5" name="digit-5" data-next="digit-6" />
                            <input type="text" class="digit" id="digit-6" name="digit-6" />
                    </div>
                    <input type="hidden" class="the_otp">
                    <div class="account_otp_number d_flex flex_end mt_20 align_c">
                        <div class="font_s16 mr_r_12 color_grey cursor_p btn resend_OTP">Gửi lại mã xác thực</div>
                        <div class="account_otp_nhap-capcha-img position_r cursor_p">
                            <img src="<? echo base_url(); ?>assets/images/load_capcha.svg" alt="">
                        </div>
                    </div>
                    <button onclick="otp_form_1(); return false;"
                        class="account_otp-btn btn_blue bg_green border_none account_log-in_btn"> Xác thực </button>
                    <a href="quen-mat-khau-nhap-email.html">
                        <div class="line_h24 color_yelow font_s16 text_c cursor_p mr_t_24">Nhập lại Email</div>
                    </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
<script>
var base_url = '<?php echo base_url(); ?>';
$('.digit').keyup(function() {
    var otp = $('.the_otp').val($('#digit-1,#digit-2,#digit-3,#digit-4,#digit-5,#digit-6').map(function() {
        return $(this).val()
    }).get().join(''));
});

$('.account_otp_number').click(function() {
	var email = '<?= $email ?>';
	$.ajax ({
		type: 'POST',
		url: base_url+'account/sendForgotPasswordOTP',
		data: {email: email},
		success: function(response) {
			console.log('successful');
		},
		error: function(xhr) {
			console.log('error');
		}
	})
});

function otp_form_1() {
    var id_user = <?= $id_user ?>;
	var otp = $('.the_otp').val();

	$.ajax ({
		type: 'POST',
		url: base_url+'account/checkOTPforgotPW',
		data: {otp: otp,id: id_user},
		success: function(response) {
			console.log(response);
			location.href = "quen-mat-khau-update-mat-khau-"+response+".html";
		},
		error: function(xhr) {
			console.log(xhr);
		}
	})
}
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
