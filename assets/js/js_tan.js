$(".close").click(function(){
    $(".popup").addClass("hidden");
    $(".popup").removeClass("flex");
});

function back_page(){
    window.history.back();
}

function hienpopup(tenid){
    $("#"+tenid).addClass("flex");
    $("#"+tenid).removeClass("hidden");
}

$(".close").click(function(){
    $(".popup").addClass("hidden");
    $(".popup").removeClass("flex");
});

function loadImage(input, output) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $(output).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$('.butt_themanh').click(function() {
    $('.click_anh').click();
});

$('.click_anh').change(function() {
    loadImage(this,".post_anh");
});

$('.nhapmin').keyup(function() {
    var value = $(this).val();
    if (value < 1000000) {
        tienmin = value / 1000;
        dvmin = "nghìn";
    } else if (value < 1000000000) {
        tienmin = value / 1000000;
        dvmin = "triệu";
    } else {
        tienmin = value / 1000000000;
        dvmin = "tỷ";
    }
    $('.tienmin').html(tienmin);
    $('.dvmin').html(dvmin);
});

$('.nhapmax').keyup(function() {
    var value = $(this).val();
    if (value < 1000000) {
        tienmax = value / 1000;
        dvmax = "nghìn";
    } else if (value < 1000000000) {
        tienmax = value / 1000000;
        dvmax = "triệu";
    } else {
        tienmax = value / 1000000000;
        dvmax = "tỷ";
    }
    $('.tienmax').html(tienmax);
    $('.dvmax').html(dvmax);
});

$('.tonggia').keyup(function() {
    var value = $(this).val();
    if (value < 1000000) {
        tonggia = value / 1000;
        dvtonggia = "nghìn";
    } else if (value < 1000000000) {
        tonggia = value / 1000000;
        dvtonggia = "triệu";
    } else {
        tonggia = value / 1000000000;
        dvtonggia = "tỷ";
    }
    $('.tien_tonggia').html(tonggia);
    $('.dvtonggia').html(dvtonggia);
});

$('.des_text').click(function() {
    $(this).addClass('active_mota');
    $('.des_img').removeClass('active_mota');
    $('.mota_text').removeClass('hidden');
    $('.thongtinctda_khoianh').addClass('hidden');
});
$('.des_img').click(function() {
    $(this).addClass('active_mota');
    $('.des_text').removeClass('active_mota');
    $('.thongtinctda_khoianh').removeClass('hidden');
    $('.mota_text').addClass('hidden');

    $('.click_img_mota').click();
});

$('.click_img_mota').change(function() {
    loadImage(this,'.anh_mota');
});

$('.thongtinctda_tieude_anh').click(function() {
    $('.thongtinchitietduan .khoi_mota_img').removeClass('hidden');
});

$('.thongtinctda_remove_tieudeanh').click(function() {
    $('.thongtinchitietduan .khoi_mota_img').addClass('hidden');
    $(this).parents('.khoiduoi').find('.click_img_mota').val('');
});

var degrees = 0;
$('.ttctda_img_right').click(function() {
    degrees += 90;
    
    $('.anh_mota').css({
        'transform': 'rotate(' + degrees + 'deg)',
        '-ms-transform': 'rotate(' + degrees + 'deg)',
        '-moz-transform': 'rotate(' + degrees + 'deg)',
        '-webkit-transform': 'rotate(' + degrees + 'deg)',
        '-o-transform': 'rotate(' + degrees + 'deg)'
    });
});
$('.ttctda_img_left').click(function() {
    degrees -= 90;
    
    $('.anh_mota').css({
        'transform': 'rotate(' + degrees + 'deg)',
        '-ms-transform': 'rotate(' + degrees + 'deg)',
        '-moz-transform': 'rotate(' + degrees + 'deg)',
        '-webkit-transform': 'rotate(' + degrees + 'deg)',
        '-o-transform': 'rotate(' + degrees + 'deg)'
    });
});
$('.thongtinctda_remove').click(function() {
    $('.anh_mota').attr('src', 'http://localhost:6969/assets/images/anh_rong.png');
})

$('.vtda_destext').click(function() {
    $(this).parents('.vitriduan').find('.vtda_desimg').val('');
    $(this).addClass('active_mota');
    $('.vtda_desimg').removeClass('active_mota');
    $('.vtda_text').removeClass('hidden');
    $('.vitriduan_khoianh').addClass('hidden');
});
$('.vtda_desimg').click(function() {
    $(this).addClass('active_mota');
    $('.vtda_destext').removeClass('active_mota');
    $('.vitriduan_khoianh').removeClass('hidden');
    $('.vtda_text').addClass('hidden');

    $('.vtda_click_anh').click();
});

$('.vtda_click_anh').change(function() {
    loadImage(this, '.vtda_post_anh');
});

var degrees1 = 0;
$('.vitriduan_img_right').click(function() {
    degrees1 += 90;

    $('.vtda_post_anh').css({
        'transform': 'rotate(' + degrees1 + 'deg)',
        '-ms-transform': 'rotate(' + degrees1 + 'deg)',
        '-moz-transform': 'rotate(' + degrees1 + 'deg)',
        '-webkit-transform': 'rotate(' + degrees1 + 'deg)',
        '-o-transform': 'rotate(' + degrees1 + 'deg)'
    });
});

$('.vitriduan_img_left').click(function() {
    degrees1 -= 90;

    $('.vtda_post_anh').css({
        'transform': 'rotate(' + degrees1 + 'deg)',
        '-ms-transform': 'rotate(' + degrees1 + 'deg)',
        '-moz-transform': 'rotate(' + degrees1 + 'deg)',
        '-webkit-transform': 'rotate(' + degrees1 + 'deg)',
        '-o-transform': 'rotate(' + degrees1 + 'deg)'
    });
});

$('.vitriduan_remove').click(function() {
    $('.vtda_post_anh').attr('src', 'http://localhost:6969/assets/images/anh_rong.png');
    $(this).parents('.vitriduan').find('.vtda_click_anh').val("");
});

$('.vitriduan_tieude_anh').click(function() {
    $('.vitriduan_mota .khoi_mota_img').removeClass('hidden');
});

$('.vtda_remove_tieudeanh').click(function() {
    $('.vitriduan_mota .khoi_mota_img').addClass('hidden');
});


function mbda_add_anh(d) {
    $(d).parents('.khoi_tieude_mbda').find('.mbda_tieude_click_anh').click();
}
function mbda_tieude_click_anh(f) {
    loadImage(f, $(f).parents('.khoi_tieude_mbda').find('.mbda_post_anh'))
}

$('.mbda_destext').click(function() {
    $(this).addClass('active_mota');
    $(this).parents('.mbda_khoi_mota').find('.mbda_click_anh').val("");
    $('.mbda_desimg').removeClass('active_mota');
    $('.mbda_text').removeClass('hidden');
    $('.mbda_khoianh').addClass('hidden');
});

$('.mbda_desimg').click(function() {
    $(this).addClass('active_mota');
    $('.mbda_destext').removeClass('active_mota');
    $('.mbda_text').addClass('hidden');
    $('.mbda_khoianh').removeClass('hidden');

    $('.mbda_click_anh').click();
});

$('.mbda_click_anh').change(function() {
    loadImage(this, '.mbda_post_anh_mota');
});

degrees2 = 0;
$('.mbda_img_right').click(function() {
    degrees2 += 90;

    $('.mbda_post_anh_mota').css({
        'transform': 'rotate(' + degrees2 + 'deg)',
        '-ms-transform': 'rotate(' + degrees2 + 'deg)',
        '-moz-transform': 'rotate(' + degrees2 + 'deg)',
        '-webkit-transform': 'rotate(' + degrees2 + 'deg)',
        '-o-transform': 'rotate(' + degrees2 + 'deg)'
    });
});
$('.mbda_img_left').click(function() {
    degrees2 -= 90;

    $('.mbda_post_anh_mota').css({
        'transform': 'rotate(' + degrees2 + 'deg)',
        '-ms-transform': 'rotate(' + degrees2 + 'deg)',
        '-moz-transform': 'rotate(' + degrees2 + 'deg)',
        '-webkit-transform': 'rotate(' + degrees2 + 'deg)',
        '-o-transform': 'rotate(' + degrees2 + 'deg)'
    });
});


$('.mbda_remove').click(function() {
    $('.mbda_post_anh_mota').attr('src', 'http://localhost:6969/assets/images/anh_rong.png');
    $(this).parents('.mbda_khoi_mota').find('.mbda_click_anh').val('');
});

$('.mbda_tieude_anh').click(function() {
    $('.mbda_khoi_tieude').removeClass('hidden');
});
$('.mbda_tieude_remove').click(function() {
    $('.mbda_khoi_tieude').addClass('hidden');
});

$('.tida_destext').click(function() {
    $(this).parents('.tida_destext').find('.tida_desimg').val('');
    $(this).addClass('active_mota');
    $('.tida_desimg').removeClass('active_mota');
    $('.tida_text').removeClass('hidden');
    $('.tida_khoianh').addClass('hidden');
});
$('.tida_desimg').click(function() {
    $(this).addClass('active_mota');
    $('.tida_destext').removeClass('active_mota');
    $('.tida_khoianh').removeClass('hidden');
    $('.tida_text').addClass('hidden');

    $('.tida_click_anh').click();
});
$('.tida_click_anh').change(function() {
    loadImage(this, '.tida_post_anh');
});

var degrees3 = 0;
$('.tida_img_right').click(function() {
    degrees3 += 90;

    $('.tida_post_anh').css({
        'transform': 'rotate(' + degrees3 + 'deg)',
        '-ms-transform': 'rotate(' + degrees3 + 'deg)',
        '-moz-transform': 'rotate(' + degrees3 + 'deg)',
        '-webkit-transform': 'rotate(' + degrees3 + 'deg)',
        '-o-transform': 'rotate(' + degrees3 + 'deg)'
    });
});
$('.tida_img_left').click(function() {
    degrees3 -=90;

    $('.tida_post_anh').css({
        'transform': 'rotate(' + degrees3 + 'deg)',
        '-ms-transform': 'rotate(' + degrees3 + 'deg)',
        '-moz-transform': 'rotate(' + degrees3 + 'deg)',
        '-webkit-transform': 'rotate(' + degrees3 + 'deg)',
        '-o-transform': 'rotate(' + degrees3 + 'deg)'
    });
});
$('.tida_remove').click(function() {
    $(this).parents('.tida_khoimota').find('.tida_click_anh').val('');
    $('.tida_post_anh').attr('src', 'http://localhost:6969/assets/images/anh_rong.png');
});
$('.tida_tieude_anh').click(function() {
    $('.tida_khoi_tieude').removeClass('hidden');
});
$('.tida_tieude_remove').click(function() {
    $('.tida_khoi_tieude').addClass('hidden');
});
function gtda_desimg(b){
    $(b).addClass('active_mota');
    $(b).parents('.gtda_khoimota').find('.gtda_destext').removeClass('active_mota');
    $(b).parents('.gtda_khoimota').find('.gtda_text').addClass('hidden');
    $(b).parents('.gtda_khoimota').find('.gtda_khoianh').removeClass('hidden');

    $(b).parents('.gtda_khoimota').find('.gtda_click_anh').click();
}
function gtda_click_anh(c){
    loadImage(c, $(c).parents('.gtda_khoimota').find('.gtda_post_anh'));
}

$('.chon').click(function() {
    $('.popup_con').toggleClass('hidden');
});

$('.popup_con').click(function() {
    $(this).addClass('hidden');
    $('.butt_luu').html('Lưu');
});

$('.butt_luu').click(function() {
    $('.butt_dangtin').addClass('hidden');
    $('.butt_henlich').removeClass('hidden');
});

$('.doithoigian').hover(function() {
    $(this).toggleClass('background_xam');
});
$('.dangngay').hover(function() {
    $(this).toggleClass('background_xam');
});

$('.doithoigian').click(function() {
    $('.butt_luu').html('Cập nhật');
    $('.henlich_popup_con').addClass('hidden');
})

$('.chon_henlich').click(function() {
    $('.henlich_popup_con').toggleClass('hidden');
});

$('.dangngay').click(function() {
    $('.henlich_popup_con').addClass('hidden');
    $('.butt_henlich').addClass('hidden');
    $('.butt_dangtin').removeClass('hidden');
});

// nhap otp
$('.nhap_otp').find('input').each(function() {
    $(this).on('keyup', function(e) {
        var parent = $($(this).parent());
        if (e.keyCode === 8 || e.keyCode === 37) {
            var prev = parent.find('input#' + $(this).data('previous'));
            if (prev.length) {
                $(prev).select();
            }
        } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
            var next = parent.find('input#' + $(this).data('next'));
            if (next.length) {
                $(next).select();
            }
        }
        var counter = 0;
        $('.nhap_otp').find('input').each(function() {
            if ($(this).val() == '') {
            counter++;
            } else {

            }
        });

        if (counter > 0) {
            $('.butt_xacthuc_otp').attr('disabled',true);
        } else {
            $('.butt_xacthuc_otp').attr('disabled',false);
        }
    });
});
$('.butt_xacthuc_otp').click(function() {
    alert('abc');
});

$('.tutorial_phai').click(function() {
    $(this).toggleClass('arrow_rotate');
    $(this).toggleClass('arrow_rotate_reset');
    $('.khoiduoi_tutorial').toggle(400);
});

$('.khoanggia').click(function() {
    $('.giamax').attr('name','price_max')
    $(this).addClass('hidden');
    $('.khoi_giamax').removeClass('hidden');
    $('.khoi_gia_min').children('input').attr('placeholder', 'Giá min');
    $('.den').removeClass('hidden');
    $('.ngansach_max').removeClass('hidden');
    $('.dv_max').removeClass('hidden');
});

$('.del_iconn').click(function() {
    $('.giamax').attr('name','');
    $('.khoi_giamax').addClass('hidden');
    $('.khoanggia').removeClass('hidden');
    $('.khoi_gia_min').children('input').attr('placeholder', 'Nhập giá cố định');
    $('.den').addClass('hidden');
    $('.ngansach_max').addClass('hidden');
    $('.dv_max').addClass('hidden');
});

$('.giamin').keyup(function() {
    var value = $(this).val();
    if (value < 1000000) {
        min = value / 1000;
        dv = "nghìn VNĐ";
    } else if (value < 1000000000) {
        min = value / 1000000;
        dv = "triệu VNĐ";
    } else {
        min = value / 1000000000;
        dv = "tỷ VNĐ";
    }
    $('.ngansach_tien').html(min);
    $('.ngansach_donvi').html(dv);
});

$('.giamax').keyup(function() {
    var value = $(this).val();
    if (value < 1000000) {
        max = value / 1000;
        dv = "nghìn VNĐ";
    } else if (value < 1000000000) {
        max = value / 1000000;
        dv = "triệu VNĐ";
    } else {
        max = value / 1000000000;
        dv = "tỷ VNĐ";
    }
    $('.ngansach_max').html(max);
    $('.dv_max').html(dv)
});

$('.ttbd_butt_anh').click(function() {
    $('.ttbd_click_anh').click();
});

$('.ttbd_click_anh').change(function() {
    loadImage(this, '.ttbd_post_anh');
});

$('.ttbd_des_text').click(function() {
    $(this).parents('.khoiduoi').find('.des_img').val('');
    $(this).addClass('active_mota');
    $('.ttbd_des_img').removeClass('active_mota');
    $('.tdnd_des_text').removeClass('hidden');
    $('.tdnd_des_img').addClass('hidden');
});

$('.ttbd_des_img').click(function() {
    $(this).addClass('active_mota');
    $('.ttbd_des_text').removeClass('active_mota');
    $('.tdnd_des_img').removeClass('hidden');
    $('.tdnd_des_text').addClass('hidden');
    $('.dtnd_click_anh').click();
});

$('.dtnd_click_anh').change(function() {
    loadImage(this, '.tdnd_post_anh');
});

var degrees4 = 0;
$('.tdnd_img_right').click(function() {
    degrees4 += 90;

    $('.tdnd_post_anh').css({
        'transform': 'rotate(' + degrees4 + 'deg)',
        '-ms-transform': 'rotate(' + degrees4 + 'deg)',
        '-moz-transform': 'rotate(' + degrees4 + 'deg)',
        '-webkit-transform': 'rotate(' + degrees4 + 'deg)',
        '-o-transform': 'rotate(' + degrees4 + 'deg)'
    });
});

var degrees5 = 0;
$('.tdnd_img_left').click(function() {
    degrees5 -= 90;

    $('.tdnd_post_anh').css({
        'transform': 'rotate(' + degrees5 + 'deg)',
        '-ms-transform': 'rotate(' + degrees5 + 'deg)',
        '-moz-transform': 'rotate(' + degrees5 + 'deg)',
        '-webkit-transform': 'rotate(' + degrees5 + 'deg)',
        '-o-transform': 'rotate(' + degrees5 + 'deg)'
    });
});

$('.tdnd_remove').click(function() {
    $('.tdnd_post_anh').attr('src', 'http://localhost:6969/assets/images/anh_rong.png');
});

$('.tdnd_tieude_anh').click(function() {
    $('.tdnd_mieuta_anh').removeClass('hidden');
});
$('.tdnd_tieude_remove').click(function() {
    $('.tdnd_mieuta_anh').addClass('hidden');
});
var sx = 0;
$('.butt_addanh').click(function() {

    tdpd_img($(this).find('.tdqp_click_addanh'));
    sx++;
});
var i = 1;
$('.tida_click').click(function() {
    $(this).parents('.tida_thongtin_khoicon').find('svg').toggleClass('arrow_rotate');
    $(this).parents('.tida_thongtin_khoicon').find('.noidung_con').toggleClass('hidden_375');
    $(this).parents('.tida_thongtin_khoicon').find('.noidung_con').animate();
});

    //------------------checkcolor
    $(".btn_color").click(function()
    {
        var i = 0;
        $(".btn_color").each(function(){
 
            if($(this).find('input').is(":checked"))
            {
                i++;
            }
        })
        if(i > 3)
        {
            $(this).find('input').prop("checked",false)
            alert("Bạn chỉ có thể chọn tối đa là 3 màu")
        }
        else
        {
            var check = $(this).find('input').is(":checked");
            if(check)
            {
                $(this).children('.img_success').show();
            }
            else
            {
                $(this).children('.img_success').hide();
            }    
        }
       
    })
