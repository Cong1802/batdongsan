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
            <? require_once APPPATH.'views/site/includes/header_q.php'?>
        </header>
    </div>
    <div class="wrapper_all">
        <div class="main_tt">
            <div class="account account_otp d_flex flex_column">
                <div class="account_back d_flex" onclick="back_page()">
                    <div class="back_page"><img src="<? echo base_url(); ?>assets/images/back.png" alt=""></div>
                    <p class="font-medium size-14">Quay lại</p>
                </div>
                <div class="account_log-in account_otp-beside w_100">
                    <div class="account_title font_s24 text_c color_green font_w_600 mr_t_4_am">Nhập mã OTP</div>
                    <div class="font_s16 m_t_b_24 text_c color_grey line_h24">
                        <span class="line_h24">
                            Mã OTP đã được gửi đến Email của bạn <br>
                            Bạn vui lòng kiểm tra Email đã đăng ký và nhập<br>
                            mã OTP để xác nhận đăng ký tài khoản.
                        </span>
                    </div>
                    <div class="account_otp-beside-otp">
                        <form id="form_dk1" onsubmit="otp_form_1(); return false;" type="post" class="digit-group digit-group-otp font_s24 d_flex space_b">
                            <input type="text" class="digit" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
                            <input type="text" class="digit" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1"
                                maxlength="1">
                            <input type="text" class="digit" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2"
                                maxlength="1">
                            <input type="text" class="digit" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3"
                                maxlength="1">
                            <input type="text" class="digit" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4"
                                maxlength="1">
                            <input type="text" class="digit" id="digit-6" name="digit-6" data-previous="digit-5" maxlength="1">
                    </div>
					<input type="hidden" class="the_otp">
                    <div class="account_otp_number d_flex flex_end mt_20 align_c ">
                        <a href="" class="font_s16 mr_r_12 color_grey cursor_p btn">Gửi lại mã xác thực</a>
                        <div class="account_otp_nhap-capcha-img position_r cursor_p">
                            <img src="<? echo base_url(); ?>assets/images/load_capcha.svg" alt="">
                        </div>
                    </div>
                    <div onclick="otp_form_1(); return false;" class="account_otp-btn btn_blue bg_green border_none account_log-in_btn"> Xác thực
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="account_wish account_wish_an flex_column hidden">
            <!-- <div class="overlay" id="close_otp"> </div> -->
            <div class="account_wish-wrapper account_wish-wrapper_overlay br_8">
                <div class="account_wish-img d_flex w_100 flex_center">
                    <img src="<? echo base_url(); ?>assets/images/wish.svg" alt="">
                </div>
                <div class="account_wish-title mr_t_16">
                    <p class="text_c font_w_500 color_grey font_s14">Chúc mừng bạn đã trở thành thành viên của
                        Batdongsan3S</p>
                </div>
                <div class="account_wish-btn d_flex space_b mr_t_32">
                    <div class="account_wish-btn-a account_wish-btn-left d_flex flex_center align_c cursor_p backpage">
                        <div class="color_green font_s16 text_c"> Quay lại</div>
                    </div>
                    <a href="trang-tai-khoan-dang-nhap.html" class="account_wish-btn-a account_wish-btn-right bg_green d_flex flex_center align_c cursor_p">
                        <div class="color_white font_s16 text_c"> Đăng nhập ngay
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
<script>
// $(".select_option").select2({
//     width: "100%",
// });

var base_url 	= '<?php echo base_url(); ?>';
$('.digit').keyup(function() {
	var otp = $('.the_otp').val($('#digit-1,#digit-2,#digit-3,#digit-4,#digit-5,#digit-6').map(function(){return $(this).val()}).get().join(''));
});

function otp_form_1() {
	var id_user = <?= $id_user ?>;
	var otp = $('.the_otp').val();
	
	$.ajax({
		type: 'POST',
		url: base_url+'account/getEmailRegister',
		data: {
			id_user: id_user,
			otp: otp,
		},
		success: function(response) {
			if (response == 2) {
				$('.account_wish_an').removeClass('hidden');
			} else {
				alert('Incorrect OTP');
			}
		},
		error: function (xhr) {
			console.log('error');
		}
	})
}

$('.backpage').click(function() {
	location.href = "/";
})
</script>

</html>
<style>


</style>
