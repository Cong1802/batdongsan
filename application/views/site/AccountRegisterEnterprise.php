<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Trang đăng ký doanh nghiệp</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/css_q.css">
</head>

<body>
    <div class="link__header_register">
        <header class="position_r back_w">
            <? require_once APPPATH.'views/site/includes/header_q.php'?>
        </header>
    </div>
    <div class="wrapper_all dangy_dangnhap">
        <div class="main_tt">
            <div class="account account_nhap account_nhap-enterprise d_flex flex_column">
                <div class="account_back d_flex" onclick="back_page()">
                    <div class="back_page"><img src="<? echo base_url();?>assets/images/back.svg" alt=""></div>
                    <p class="font-medium size-14">Quay lại</p>
                </div>
                <form id="form_dk1" onsubmit="register_form_1(); return false;" type="post">
                    <div class="account_log-in w_100">
                        <div class="account_title font_s24 text_c color_green font_w_600">Đăng Ký</div>
                        <div class="font_s16 m_t_b_24 text_l font_w500 color_grey mr_b_0 line_h19 account_title_text1 ">
                            Thông tin đăng ký</div>
                        <div class="d_flex account_log-in__import space_b">
                            <div class="khung_input-left_tong w_50">
                                <p class="error_email size-12 chudo mr_t_16"></p>
                                <div class="khung_input khung_input-left d_flex align_c no-top">
                                    <input type="text" class="Acc_email" placeholder="Email *">
                                </div>

                                <p class="error_pw size-12 chudo mr_t_16"></p>
                                <div class="khung_input khung_input-left d_flex align_c no-top">
                                    <input type="password" class="Acc_pw" placeholder="Mật khẩu *">
                                </div>

                                <p class="error_confirm_pw size-12 chudo mr_t_16"></p>
                                <div class="khung_input khung_input-left d_flex align_c no-top">
                                    <input type="password" class="Acc_confirm_pw" placeholder="Nhập lại mật khẩu *">
                                </div>

                                <p class="error_phone size-12 chudo mr_t_16"></p>
                                <div class="khung_input khung_input-left d_flex align_c no-top">
                                    <input type="text" class="Acc_phone" placeholder="Nhập số điện thoại *">
                                </div>

                                <p class="error_com size-12 chudo mr_t_16"></p>
                                <div class="khung_input khung_input-left d_flex align_c no-top">
                                    <input type="text" class="Acc_com" placeholder="Tên công ty *">
                                </div>

                                <p class="error_field size-12 chudo mr_t_16"></p>
                                <div class="khung_input khung_input-right d_flex align_c no-top">
                                    <select name="" id="" class="size-14 select_option Acc_field">
                                        <option value="0" class="">Lĩnh vực *</option>
                                        <option value="1">Chủ đầu tư</option>
                                        <option value="2">Thi công xây dựng</option>
                                        <option value="3">Tư vấn thiết kế</option>
                                        <option value="4">Sàn giao dịch bất động sản</option>
                                        <option value="5">Trang trí nội thất</option>
                                        <option value="6">Vật liệu xây dựng</option>
                                        <option value="7">Các lĩnh vực khác</option>
                                    </select>
                                </div>
                            </div>
                            <div class="khung_input-right_tong w_50">
                                <p class="error_city size-12 chudo mr_t_16"></p>
                                <div class="khung_input khung_input-right d_flex align_c no-top">
                                    <select name="" id="" class="size-14 select_option Acc_city">
                                        <option value="0" class="">Tỉnh thành *</option>
                                        <? foreach ($list_city as $city) { ?>
                                        <option value="<?= $city['cit_id'] ?>"><?= $city['cit_name'] ?></option>
                                        <? } ?>
                                    </select>
                                </div>

                                <p class="error_district size-12 chudo mr_t_16"></p>
                                <div class="khung_input khung_input-right d_flex align_c no-top">
                                    <select name="" id="" class="size-14 select_option Acc_district">
                                        <option value="" class="">Quận huyện *</option>
                                    </select>
                                </div>

                                <p class="error_wards size-12 chudo mr_t_16"></p>
                                <div class="khung_input khung_input-right d_flex align_c no-top">
                                    <select name="" id="" class="size-14 select_option Acc_wards">
                                        <option value="" class="">Phường xã *</option>
                                    </select>
                                </div>

                                <p class="error_tax size-12 chudo mr_t_16"></p>
                                <div class="khung_input khung_input-right d_flex align_c no-top">
                                    <input type="text" class="Acc_tax" placeholder="Mã số thuế">
                                </div>

                                <p class="error_location size-12 chudo mr_t_16"></p>
                                <div class="khung_input khung_input-right d_flex align_c no-top">
                                    <input type="text" class="Acc_address" placeholder="Địa chỉ chi tiết">
                                </div>

                                <p class="error_captcha size-12 chudo mr_t_16"></p>
                                <div class="d_flex align_c account_import_capcha no-top">
                                    <div class="account_nhap-capcha-input khung_input float_r align_r no-top">
                                        <input type="text" class="captcha_input" placeholder="Nhập captcha *">
                                    </div>
                                    <div class="account_nhap-capcha font_s30 text_c color_green font_w_600">
                                        <div class="ramdum" id="code"></div>
                                        <input type="hidden" class="code_input" id="code_input" value="">
                                    </div>
                                    <div class="account_nhap-capcha-img d_flex cursor_p">
                                        <img class="img-rest" src="<? echo base_url(); ?>assets/images/load_capcha.svg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button onclick="register_form_1(); return false;"
                            class="btn_blue bg_green border_none account_log-in_btn">
                            Đăng ký
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
    <script>
    $(".select_option").select2({
        width: "100%",
    });

    // capcha
    $(document).ready(function() {
        var do_xuay = 0;

        $(".img-rest").click(function() {
            do_xuay += 360;
            xoay($(this), do_xuay);
        })

        function xoay(img, deg) {
            img.css("transform", "rotate(" + deg + "deg)");
            img.css("transition", "0.2s");
        }
    });

    function ramdumso(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    $(".ramdum").html(ramdumso(6));
    $('#code_input').val($(".ramdum").html());
    $(".img-rest").click(function() {
        $(".ramdum").html(ramdumso(6));
        $('#code_input').val($(".ramdum").html());
    });

    var base_url = '<?php echo base_url(); ?>';
    var regex_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var regex_password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(.{8,20}$)/;
    var regex_phone = /(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/;

    $('.Acc_city').change(function() {
        var id_city = $(this).val();
        $.ajax({
            type: 'POST',
            url: base_url + 'account/getListDistrict',
            dataType: 'json',
            data: {
                id: id_city
            },
            success: function(response) {
                $html = '<option value="0" class="">Quận huyện *</option>'
                $.each(response, function(index, val) {
                    $html += '<option value="' + val.cit_id + '">' + val.cit_name +
                        '</option>'
                });
                $('.Acc_district').html($html);
            },
            error: function(xhr) {
                console.log('error');
            }
        })
    });

    $('.Acc_district').change(function() {
        var id_district = $(this).val();
        $.ajax({
            type: 'POST',
            url: base_url + 'account/getListWard',
            dataType: 'json',
            data: {
                id: id_district
            },
            success: function(response) {
                $html = '<option value="0" class="">Phường xã *</option>';
                $.each(response, function(index, val) {
                    $html += '<option value="' + val.ward_id + '">' + val.ward_name +
                        '</option>';
                });
                $('.Acc_wards').html($html);
            },
            error: function(xhr) {
                console.log('error');
            }
        })
    });

    function register_form_1() {
        // validate
        var flag = true;
        var acc_email = $('.Acc_email').val();
        var acc_pw = $('.Acc_pw').val();
        var acc_confirm_pw = $('.Acc_confirm_pw').val();
        var acc_phone = $('.Acc_phone').val();
        var acc_com = $('.Acc_com').val();
        var acc_field = $('.Acc_field').val();
        var acc_city = $('.Acc_city').val();
        var acc_district = $('.Acc_district').val();
        var acc_wards = $('.Acc_wards').val();
        var acc_tax = $('.Acc_tax').val();
        var acc_address = $('.Acc_address').val();
        var captcha_input = $('.captcha_input').val();
        var code_input = $('#code_input').val();
        var userType = 3;

        if ($.trim(acc_email) == '') {
            $('.error_email').removeClass('mr_t_16').addClass('line_h16').html('Email không được để trống');
            flag = false;
        } else if ($.trim(acc_email) !== '' && regex_email.test(acc_email) == false) {
            $('.error_email').removeClass('mr_t_16').addClass('line_h16').html('Email không đúng định dạng');
            flag = false;
        } else {
            $.ajax({
                type: 'POST',
                url: base_url + 'account/checkEmail',
                data: {
                    email: acc_email
                },
                success: function(response) {
                    if (response > 0) {
                        $('.error_email').removeClass('mr_t_16').addClass('line_h16').html(
                            'Email đã được sử dụng');
                        flag = false;
                    } else {
                        $('.error_email').removeClass('line_h16').addClass('mr_t_16').html('');
                    }
                },
                async: false,
                error: function(xhr) {
                    console.log('error 3');
                }
            })
        }

        if ($.trim(acc_pw) == '') {
            $('.error_pw').removeClass('mr_t_16').addClass('line_h16').html('Mật khẩu không được để trống');
            flag = false;
        } else if ($.trim(acc_pw).length < 8) {
            $('.error_pw').removeClass('mr_t_16').addClass('line_h16').html('Mật khẩu phải nhập tối đa 8 ký tự');
            flag = false;
        } else if ($.trim(acc_pw) !== '' && regex_password.test(acc_pw) == false) {
            $('.error_pw').removeClass('mr_t_16').addClass('line_h16').html('MK không đủ mạnh (VD: 123!@#Hhp)');
        } else {
            $('.error_pw').removeClass('line_h16').addClass('mr_t_16').html('');
        }

        if ($.trim(acc_confirm_pw) == '') {
            $('.error_confirm_pw').removeClass('mr_t_16').addClass('line_h16').html(
                'Mật khẩu nhập lại không được để trống');
            flag = false;
        } else if (acc_confirm_pw != acc_pw) {
            $('.error_confirm_pw').removeClass('mr_t_16').addClass('line_h16').html('Mật khẩu nhập lại không khớp');
            flag = false;
        } else {
            $('.error_confirm_pw').removeClass('line_h16').addClass('mr_t_16').html('');
        }

        if ($.trim(acc_phone) == '') {
            $('.error_phone').removeClass('mr_t_16').addClass('line_h16').html('Số điện thoại không được để trống');
            flag = false;
        } else if ($.trim(acc_phone) !== '' && regex_phone.test(acc_phone) == false) {
            $('.error_phone').removeClass('mr_t_16').addClass('line_h16').html('Số điện thoại không đúng định dạng');
            flag = false;
        } else {
            $('.error_phone').removeClass('line_h16').addClass('mr_t_16').html('');
        }

        if (acc_com == '') {
            $('.error_com').removeClass('mr_t_16').addClass('line_h16').html('Tên công ty không được để trống');
            flag = false;
        } else {
            $('.error_com').removeClass('line_h16').addClass('mr_t_16').html('');
        }

        if (acc_field == 0) {
            $('.error_field').removeClass('mr_t_16').addClass('line_h16').html('Lĩnh vực không được để trống');
            flag = false;
        } else {
            $('.error_field').removeClass('line_h16').addClass('mr_t_16').html('');
        }

        if (acc_city == 0) {
            $('.error_city').removeClass('mr_t_16').addClass('line_h16').html('Tỉnh thành không được để trống');
            flag = false;
        } else {
            $('.error_city').removeClass('line_h16').addClass('mr_t_16').html('');
        }

        if (acc_district == 0) {
            $('.error_district').removeClass('mr_t_16').addClass('line_h16').html('Quận huyện không được để trống');
            flag = false;
        } else {
            $('.error_district').removeClass('line_h16').addClass('mr_t_16').html('');
        }

        if (acc_wards == 0) {
            $('.error_wards').removeClass('mr_t_16').addClass('line_h16').html('Phường xã không được để trống');
            flag = false;
        } else {
            $('.error_wards').removeClass('line_h16').addClass('mr_t_16').html('');
        }

        if (acc_tax == '') {
            $('.error_tax').removeClass('mr_t_16').addClass('line_h16').html('Mã số thuế không được để trống');
            flag = false;
        } else {
            $('.error_tax').removeClass('line_h16').addClass('mr_t_16').html('');
        }

        if (captcha_input == '') {
            $('.error_captcha').removeClass('mr_t_16').addClass('line_h16').html('Mã captcha không được để trống');
            flag = false;
        } else if (captcha_input != code_input) {
            $('.error_captcha').removeClass('mr_t_16').addClass('line_h16').html('Mã captcha không khớp');
            flag = false;
        } else {
            $('.error_captcha').removeClass('line_h16').addClass('mr_t_16').html('');
        }

        if (flag == true) {
            $.ajax({
                type: 'POST',
                url: base_url + 'account/sendOTP',
                dataType: 'json',
                data: {
                    email: acc_email
                },
                success: function(response) {
                    if (response == 1) {
                        console.log('success');
                    } else {
                        return false;
                        console.log('error 1');
                    }
                },
                error: function(xhr) {
                    console.log('error 2');
                }
            })

            var data = new FormData();
            data.append('email', acc_email);
            data.append('password', acc_pw);
            data.append('phone', acc_phone);
            data.append('com', acc_com);
            data.append('field', acc_field);
            data.append('city', acc_city);
            data.append('district', acc_district);
            data.append('ward', acc_wards);
            data.append('taxCode', acc_tax);
            data.append('address', acc_address);
            data.append('usertype', userType);
            $.ajax({
                type: 'POST',
                url: base_url + 'account/ajaxRegisterEnterprise',
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                data: data,
                enctype: 'multipart/form-data',
                success: function(response) {
                    console.log('successful');
                    location.href = "trang-nhan-ma-otp-" + response + ".html";
                },
                error: function(xhr) {
                    console.log('error Register');
                    return false;
                }
            })
        }
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
