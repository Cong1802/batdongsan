


function back_page() {
  window.history.back();
}
// ------------xem lich 
// ------- xem lịch trả nợ 
$('.detail_calendar_no').click(function(){
  // console.log('1234r')
  $('.popup_calendar-over__tong').toggleClass('hidden');
})
// 
$('#xem_lich').click(function () {
  $('.popup_calendar-overlay').removeClass('hidden');
  $('.popup_calendar-overlay').addClass('flex');
  sizeTB('#scroll_tb tbody tr', '.result_table span', 3);
  sizeTB('#scroll_tb tbody tr', '#scroll_tb thead tr th', 5);
})
$('#popup_calendar-dong').click(function () {
  $('.popup_calendar-overlay').addClass('hidden');
})
$('#close-overlay-calendar').click(function () {
  $('.popup_calendar-overlay').addClass('hidden');
})
// --------------quen mat khau
$('.account_log-in_btn').click(function () {
  $('.popup_password').removeClass('hidden');
  $('.popup_password').addClass('d_flex');
});
$('#close_update-mk').click(function () {
  $('.popup_password ').addClass('hidden');
});
// ---------trang nhan mã otp 
$('#open').click(function () {
  $('.account_wish_an').removeClass('hidden');;
  $('.account_wish_an').addClass('flex');
});
$('#close_account').click(function () {
  $('.account_wish_an').addClass('hidden');
});
$('#close_otp').click(function () {
  $('.account_wish_an').addClass('hidden');
});
// --------------luu tin
$('.luu_btn').click(function () {
  $('.btn_luu').toggleClass('hidden');
  $('.btn_daluu').toggleClass('hidden');
}
);
// ------------bao xau
$('.popup_chitiet_baocao').click(function () {
  $('.popup_overlay').removeClass('hidden');
  $('.popup_overlay').addClass('flex');
});

$('#close').click(function () {
  $('.popup_overlay').addClass('hidden');
})

$('#clode_overlay').click(function () {
  $('.popup_overlay').addClass('hidden');
})
// --------------------Dang tin radio 
$('#radio_button').click(function () {
  if ($('#radio_button').is(':checked')) {
    $('#gia_open_khoanggia').off('click');
    $('.btn_opacity').addClass('opacity_click');
    $('.btn_nhap_gia input').attr('readonly', true);
    // ----
    $('.btn_tat_khoanggia ').removeClass('hidden');
    $('.btn_gia_max').addClass('hidden');
    $('#number').attr('placeholder', 'Nhập giá cố định');
  } else {
    $('#gia_open_khoanggia').on('click', function () {
      $('.btn_tat_khoanggia ').toggleClass('hidden');
      $('.btn_gia_max').toggleClass('hidden');
      $('#number').attr('placeholder', 'Giá min');
    });
    $('.btn_opacity').removeClass('opacity_click');
    $('.btn_nhap_gia input').attr('readonly', false);
  }
});
// -------
$('#gia_open_khoanggia').click(function () {
  $('.btn_tat_khoanggia ').toggleClass('hidden');
  $('#number').val('')
  $('#number').attr('placeholder', 'Giá min');
  $('.btn_gia_max').toggleClass('hidden');
});
$('.img_delete_mo').click(function () {
  $('#number').val('')
  $('#number').attr('placeholder', 'Nhập giá cố định');
  $('.btn_tat_khoanggia').toggleClass('hidden');
  $('.btn_gia_max').toggleClass('hidden');
  $('#number_max').val('')
});


// -----------------------------------------
$('.img_dt_delete').click(function () {
  $('.btn_dt').removeClass('hidden');
  $('.btn_dt_mo').addClass('hidden');
  $('#number_dt_1').val('')
  $('#number_dt_1').attr('placeholder', 'Nhập diện tích');
  $('#number_dt_2').val('')
})
$('#btn_dt_dong').click(function () {
  $('.btn_dt').addClass('hidden');
  $('.btn_dt_mo').removeClass('hidden');
  $('#number_dt_1').val('')
  $('#number_dt_1').attr('placeholder', 'Nhập giá từ');
})


$('#onclick_hen').change(function () {
  var value = $(this).val();
  if (value == 0) {
    $('.popup_dangtin_lenlich').removeClass('hidden');
  }
})

$('#huy_lenlich').click(function () {
  $('.popup_dangtin_lenlich').addClass('hidden');
})
$('#btn_dangtin_lenlich').click(function () {
  $('.popup_dangtin_lenlich').addClass('hidden');
})
// ------
$('#luu_lenlich').click(function () {
  $('.popup_dangtin_lenlich').addClass('hidden');
  $.ajax({
    type: 'POST',
    url: '../render/lenlichdangtin.php',
    data: {

    },
    success: function (data) {
      // alert(data);
      $('.dangtin_btn-dang-hen').html(data);
    }
  })
})

$('#luu_lenlich_sau').click(function () {
  $('.popup_dangtin_lenlich').addClass('hidden');
  $.ajax({
    type: 'POST',
    url: '../render/lenlichdangtin_sau.php',
    data: {

    },
    success: function (data) {
      // alert(data);
      $('.dangtin_btn-dang-hen').html(data);
    }
  })
})
// -----
function anhien(a) {
  $('.dangtin_btn_chon-con').toggleClass('hidden');
}
function henlichdt(c) {
  $('.popup_dangtin_lenlich').toggleClass('hidden');
  $('#luu_lenlich_sau').html('Lưu');
}
function doithoigian(d) {
  $('.popup_dangtin_lenlich').toggleClass('hidden');
  // $('.popup_dangtin_lenlich_doi-time').toggleClass('hidden');
  $('#luu_lenlich_sau').html('Cập nhật');
  $('#luu_lenlich').html('Cập nhật');
}
function btn_henlich_sau(f) {
  $('.popup_hien_con').toggleClass('hidden');
  $('.popup_hien_con').addClass('d_flex');
}
function dangngay(b) {
  $.ajax({
    type: 'POST',
    url: '../render/dangngay.php',
    data: {

    },
    success: function (data) {
      // alert(data);
      $('.dangtin_btn-dang-hen').html(data);
    }
  })
}
function dangngay_sau(e) {
  $.ajax({
    type: 'POST',
    url: '../render/dangngay_sau.php',
    data: {

    },
    success: function (data) {
      // alert(data);
      $('.dangtin_btn-dang-hen').html(data);
    }
  })
}
// $('#onclick_doi_time').change(function(){
//   var value = $(this).val();
//   if (value == 0) {
//     $('.popup_dangtin_lenlich_doi-time').removeClass('hidden');
//   }
// })
// $('#onclick_doi_time').change(function(){
//   var value = $(this).val();
//   if (value == 1) {
//     $('.dangtin_btn-luu-dang-hen').addClass('hidden');
//     $('.dangtin_btn-luu-dang').removeClass('hidden');
//   }
// })
$('#huy_lenlich_time ,#luu_lenlich,#luu_lenlich_sau').click(function () {
  $('.popup_dangtin_lenlich_doi-time').addClass('hidden');
})
$('#btn_dangtin_capnhat').click(function () {
  $('.popup_dangtin_lenlich_doi-time').addClass('hidden');
})
//---------------chọn loại bất động sản
$('#onclick_chonloai').change(function () {
  var value = $(this).val();
  if (value == 1) {
    $('.dangtin_khunginput_chonloai').removeClass('w_100');
    $('.dangtin_khunginput_chonloai').addClass('w_50_import');
    $('.dangtin_khunginput_chonloai').addClass('mr_r_12');
    $('.dangtin_khunginput_chonloai-hien').removeClass('hidden');
    $('.dangtin_khunginput_chonloai-hien').addClass('w_50');
  } else {
    // $('.dangtin_hoantat_hien').addClass('hidden');
  }
})
// --------------hoàn tất thông tin
$('#onclick_hoantat').change(function () {
  var value = $(this).val();
  if (value == 3) {
    $('.dangtin_hoantat_hien').removeClass('hidden');
  } else {
    $('.dangtin_hoantat_hien').addClass('hidden');
  }
})

$('#onclick_hoantat').change(function () {
  var value = $(this).val();
  if (value == 3) {
    $('.dangtin_hoantat_hien').removeClass('hidden');
  } else {
    $('.dangtin_hoantat_hien').addClass('hidden');
  }
})
// --------------------đăng ngay
function dangngay_truoc(m) {
  $('.click_hoantat_thongtin').removeClass('hidden');
  $('.click_hoantat_thongtin').addClass('d_flex');
}
function btn_henlich_truoc() {
  $('.click_hoantat_thongtin').toggleClass('hidden');
  $('.click_hoantat_thongtin').addClass('d_flex');
}
$('#btn_dangngay').click(function () {
  $('.click_hoantat_thongtin').toggleClass('hidden');
  $('.click_hoantat_thongtin').addClass('d_flex');
})

$('#onclick_hoantat_dangtin').click(function () {
  $('.onclick_hoantat-thongtin-otp').removeClass('hidden');
  $('.onclick_hoantat-thongtin-otp').addClass('d_flex');
})
$('#btn_xacthuc_dangtin').click(function () {
  $('.onclick_dangtin-thanhcong').removeClass('hidden');
  $('.onclick_dangtin-thanhcong').addClass('d_flex');
})
$('#onclick_quanly').click(function () {
  $('.popup_canhbao').removeClass('hidden');
  $('.popup_canhbao').addClass('d_flex');
})
$('#onclick_huy_canhbao').click(function () {
  $('.popup_canhbao').addClass('hidden');
  $('.popup_canhbao').addClass('d_flex');
})
$('#close_overlay_canhbao').click(function () {
  $('.popup_canhbao').addClass('hidden');
})
$('#close_overlay_otp').click(function () {
  $('.onclick_dangtin-thanhcong').addClass('hidden');
})
$('#close_overlay_1 ,#close_overlay_btn_1').click(function () {
  $('.onclick_hoantat-thongtin-otp').addClass('hidden');
})
$('#onclick_overlay_hoantat , #btn_overlay_hoantat').click(function () {
  $('.click_hoantat_thongtin').addClass('hidden');
})

$('#dangtin_butt_add_pic').click(function () {

})
// ---------------------------------------------------------------

function clickToggleClass(element, listSelectName, className) {
  let panrentElement = document.querySelector(listSelectName);

  if (element && panrentElement) {
    let children = panrentElement.children;

    for (let i = 0; i < children.length; i++) {
      if (children[i].classList.contains(className)) {
        children[i].classList.remove(className);
      }
    }

    element.classList.add(className);
  }
}

function rmClassColor(
  element,
  listSelectName,
  className,
  defaultColor,
  changeColor,
  classNameHeaders = "",
  classHeaderView = "",
  acHeader = "",
  classContent = "",
  classContentView = ""
) {
  function change(className, clView, acView) {
    if (className != "") {
      let elHeader = document.querySelector(className);

      if (elHeader) {
        let chidren = [...elHeader.children];

        if (chidren) {
          chidren.forEach((e) => {
            if (e.classList.contains(clView)) {
              e.classList.add(acView);
            } else {
              if (e.classList.contains(acView)) {
                e.classList.remove(acView);
              }
            }
          });
        }
      }
    }
  }

  let panrentElement = document.querySelector(listSelectName);

  if (element && panrentElement) {
    let children = panrentElement.children;

    // thay đổi phần header ẩn hiện header
    change(classNameHeaders, classHeaderView, acHeader);

    // thay đổi nội dung
    change(classContent, classContentView, acHeader);

    //
    for (let i = 0; i < children.length; i++) {
      if (children[i].classList.contains(className)) {
        let elColor = children[i].querySelectorAll("svg path");

        if (elColor) {
          elColor.forEach((e) => {
            if (e.getAttribute("stroke")) {
              e.setAttribute("stroke", defaultColor);
            } else {
              e.setAttribute("fill", defaultColor);
            }
          });
        }
        children[i].classList.remove(className);
      }
    }
    let elChangeColor = element.querySelectorAll("svg path");

    if (elChangeColor) {
      elChangeColor.forEach((e) => {
        if (e.getAttribute("stroke")) {
          e.setAttribute("stroke", changeColor);
        } else {
          e.setAttribute("fill", changeColor);
        }
      });
    }
    element.classList.add(className);
  }
}
// ---------------------------------------------Tính dư nợ phải trả

function sizeTB(className, classW, number, childBl = true) {
  let elements = document.querySelector(className);
  let elementW = document.querySelectorAll(classW);

  if (elements && elementW) {
    let child = childBl ? [...elements.children] : elements;

    if (child) {
      let index = childBl ? child.length : 1;
      let iw = number;

      if (childBl) {
        for (let i = index - number; i <= index - 1; i++) {
          if (elementW[number - iw]) {
            elementW[number - iw].style.width = `${child[i].clientWidth}px`;
            --iw;
          }
        }
      } else {
        elementW[0].style.width = `${child.clientWidth}px`;
      }
    }
  } else {
    window.removeEventListener('resize', sizeTB);
  }
}



window.onresize = function () {
  sizeTB('#scroll_tb tbody tr', '.result_table span', 3);
  sizeTB('#scroll_tb tbody tr', '#scroll_tb thead tr th', 5);
  sizeTB('#scroll_tb', '.result_table', 1, false);
  sizeTB('#scroll_tb', '#scroll_tb thead', 1, false);
}
//   ------------------------

function loadImage(input, output) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $(output).attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
// nhap anh
$('.butt_add_pic').click(function () {
  $('.input_an').click();
  $('.dangtin_img_upload').append('<img src="" alt="" class="anh_moi">');
})
$(".input_an").change(function () {
  loadImage(this, ".anh_moi");
});
// --------------
function giatien(a) {
  var tien = $(a).val();
  $('.render_tien').html(tien);
}
// -------------------
function myFunction(x) {
  if (x.matches) { // If media query matches
    $('#check_thue').click(function () {
      if ($('#check_thue').is(':checked')) {
        $('.dangtin_mota-thue-thang').toggleClass('hidden');
        $('.dangtin_mota-dong1-left').addClass('w_65');
        $('.dangtin_mota-dong1-right').addClass('w_35');
      }
    });
  }
}



var x = window.matchMedia("(max-width: 768px)")
 // Call listener function at run time
x.addListener(myFunction_quan) // Attach listener function on state changes
myFunction_quan(x)
function myFunction_quan(x) {
  if (x.matches) { // If media query matches
    $('#the-input--res-xa').addClass('the-input--res')
    $('#onclick_chonloai_after,#onclick_chonloai').change(function () {
      var value = $(this).val();
      if (value == 1) {
        $('#the-input_quan').addClass('the_input_quan_res')
      } else if (value == 2) {
        $('#the-input_quan').addClass('the_input_quan_res')
      }
      else {
        $('#the-input_quan').addClass('the_input_quan_res')
      }
    })
  }
}


var y = window.matchMedia("(max-width: 1024px)and (min-width : 769px)")
myFunction(y) // Call listener function at run time
y.addListener(myFunction) // Attach listener function on state changes
function myFunction(y) {
  if (y.matches) { // If media query matches
    $('#the-input--res-mot').removeClass('the-input--res')
  } else {
    $('#the-input--res-mot').addClass('the-input--res')
  }
}
var y = window.matchMedia("(max-width: 1024px)and (min-width : 769px)")
myFunction(y) // Call listener function at run time
y.addListener(myFunction) // Attach listener function on state changes
function myFunction(y) {
  $('#onclick_chonloai_after,#onclick_chonloai').change(function () {
    var value = $(this).val();
    if (value == 1) {
      $('#the-input--res-mot').addClass('the-input--res')
    } else if (value == 2) {
      $('#the-input--res-mot').addClass('the-input--res')
    }
    else {
      $('#the-input--res-mot').addClass('the-input--res')
    }
  })
}


// $(window).resize(function() {
//   var width = $(window).width();
//   if (width >= 769){
//     $('.the-input_quan').removeClass('the_input_quan_res');
//     // $('.dangtin_khunginput_chonloai').addClass('w_50');
//     // $('.dangtin_khunginput_chonloai-hien').addClass('w_50')
//   }
// });
$('#check_thue').click(function () {
  if ($('#check_thue').is(':checked')) {
    $('.dangtin_mota-thue-thang').toggleClass('hidden');
  }
});

$('#check_mua').click(function () {
  if ($('#check_mua').is(':checked')) {
    $('.dangtin_mota-thue-thang').addClass('hidden');
    $('.dangtin_mota-dong1-left').removeClass('w_65');
    $('.dangtin_mota-dong1-right').removeClass('w_35');
  }
});
// --------------đang tin  sau  đăng nhập chọn phòng
$('.dong-numbers-rom-value-item').on('click', function () {
  $(this).parent().children().removeClass('chutrang_nenxanh');
  $(this).toggleClass('chutrang_nenxanh');
});

// ----------------- đăng tin sau chọn loại bất động sản 

$('#onclick_chonloai_after').change(function () {
  var value = $(this).val();
  if (value == 1) {
    $('.dangtin_form-after').removeClass('hidden');
    $('.dangtin_mo_ta_dong7').toggleClass('hidden')
    $('.dangtin_mota-dong8').addClass('hidden')
    $('.dangtin_mota-dong9').addClass('hidden')
    $('.dangtin_khunginput_chonloai').removeClass('w_100');
    $('.dangtin_khunginput_chonloai').addClass('w_50');
    $('.dangtin_khunginput_chonloai').addClass('mr_r_12');
    $('.dangtin_khunginput_chonloai-hien').removeClass('hidden');
  } else if (value == 2) {
    $('.dangtin_form-after').removeClass('hidden');
    $('.dangtin_mota-dong8').removeClass('hidden')
    $('.dangtin_mo_ta_dong7').addClass('hidden')
    $('.dangtin_mota-dong9').addClass('hidden')
    $('.dangtin_khunginput_chonloai').removeClass('w_100');
    $('.dangtin_khunginput_chonloai').addClass('w_50');
    $('.dangtin_khunginput_chonloai').addClass('mr_r_12');
    $('.dangtin_khunginput_chonloai-hien').removeClass('hidden');
  }
  else {
    $('.dangtin_form-after').addClass('hidden');
    $('.dangtin_mota-dong9').removeClass('hidden')
    $('.dangtin_mota-dong8').addClass('hidden')
    $('.dangtin_mo_ta_dong7').addClass('hidden')
    $('.dangtin_khunginput_chonloai').removeClass('w_100');
    $('.dangtin_khunginput_chonloai').addClass('w_50');
    $('.dangtin_khunginput_chonloai').addClass('mr_r_12');
    $('.dangtin_khunginput_chonloai-hien').removeClass('hidden');
  }
})
function btn_dangngay(g) {
  $('.popup_hien_con').removeClass('hidden');
  $('.popup_canhbao').addClass('d_flex');
}
// $('#btn_dangngay').click(function () {
//     $('.popup_hien_con').removeClass('hidden');
//     $('.popup_canhbao').addClass('d_flex');
// });

// $('#onclick_chonloai_after').change(function () {
//   var value = $(this).val();
//   if (value == 2) {
//     $('.dangtin_form-after').removeClass('hidden');
//     $('.dangtin_khunginput_chonloai').removeClass('w_100');
//     $('.dangtin_khunginput_chonloai').addClass('w_50');
//     $('.dangtin_khunginput_chonloai').addClass('mr_r_12');
//     $('.dangtin_khunginput_chonloai-hien').removeClass('hidden');
//   } else {
//     $('.dangtin_form-after').addClass('hidden');
//   }
// })
// ---------- check danh sách liên hệ


// function trangthai_check(mot){
//     $(mot).toggleClass('color_green2');
// }
// function trangthai_check_do(x){
//   if(x != ''){
//     $(x).toggleClass('back_reb2');
//   }
// }
function guigopy() {
  $('.popup_hien_het').removeClass('hidden');
  $('.popup_hien_het').addClass('d_flex');
}

// -----------------trang
function activeChangeTable(element, classList, classNameAv, contentParent, contentView, classCTAC) {
  function change(className, clView, acView) {
    if (className != "") {
      let elHeader = document.querySelector(className);

      if (elHeader) {
        let chidren = [...elHeader.children];

        if (chidren) {
          chidren.forEach((e) => {
            if (e.classList.contains(clView)) {
              e.classList.add(acView);
              e.style.display = "block";
            } else {
              if (e.classList.contains(acView)) {
                e.classList.remove(acView);
                e.style.display = "none";
              }
            }
          });
        }
      }
    }
  }
  if (element) {
    let panretClass = document.querySelector(classList);

    if (panretClass) {
      let chidrenEL = [...panretClass.children];

      chidrenEL.forEach((e) => {
        if (e.classList.contains(classNameAv)) {
          e.classList.remove(classNameAv);
        }
      })

      element.classList.add(classNameAv);
      change(contentParent, contentView, classCTAC)
    }
  }
}
// -----------mua dịch vụ 
$('#click_chuyen_khoan').click(function () {
  $('.popup_transfer').removeClass('hidden');
})
$('#overlay,#transfer_close').click(function () {
  $('.popup_transfer').addClass('hidden');
})

function chongoi1() {
  $(".radio_check1").prop('checked', true);
}
function chongoi2() {
  $(".radio_check2").prop('checked', true);
}
function chongoi3() {
  $(".radio_check3").prop('checked', true);
}

function chongoi4() {
  $(".radio_check4").prop('checked', true);
}

$('#click_vi3s').click(function () {
  $('.popup_canhbao').removeClass('hidden');
})

function mua_dv_click(element) {
  $('.mua_dv-item-btn').not($(element)).each(function (index, e) {
    let child = $(e).children('.mua_dv-item-phuongthuc.hidden')
    if (child) {
      $(e).children('.mua_dv-item-phuongthuc').addClass('hidden')
    }
  })
  $(element).children('.mua_dv-item-phuongthuc').toggleClass('hidden');
}
// quenmat khau otp
$('.digit-group').find('input').each(function () {
  $(this).attr('maxlength', 1);
  $(this).on('keyup', function (e) {
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
      } else {
        if (parent.data('autosubmit')) {
          parent.submit();
        }
      }
    }
  });
});

// password click
$(document).on('click', '.toggle-password', function () {
  $(this).parent('.qmk_update_nhap').find('.toggle-password_dong').toggleClass('hidden');
  $(this).parent('.qmk_update_nhap').find('.toggle-password_mo').toggleClass('hidden');
  var input = $(this).parent('.qmk_update_nhap').find("#pass_log_id");
  input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
});

// -----------chat với chúng tôi
// $('#click_like').mouseover(function () {
//   $('.popup_chat_ad-write-icon-img_nho').toggleClass('hidden');
// })
// $('#click_like').mouseout(function () {
//   let out = setTimeout(() => {
//     $('.popup_chat_ad-write-icon-img_nho').toggleClass('hidden');
//   },500);

//   $('.popup_chat_ad-write-icon-img_nho').mouseover (function () {
//     clearTimeout(out);
//   })
// })
// $('.popup_chat_ad-write-icon-img_nho').mouseout(function () {
//   $('.popup_chat_ad-write-icon-img_nho').toggleClass('hidden');
//   console.log('out')
// })
$('#onclick_chat_ngay').click(function () {
  $('.popup_chat_ad').toggleClass('hidden');
})
$('#icon_chat_375 ,.icon_chat_375_2').click(function () {
  // console.log($('.popup_chat_ad'))
  $('.popup_chat_ad').toggleClass('hidden');
})

$('#popup_chat_ad_close').click(function () {
  $('.popup_chat_ad').addClass('hidden');
})
$('.information_buy_item-check').click(function () {
  $(this).toggleClass('bg_green')
})
$('#click_daytin').click(function () {
  $('.popup_daytin').removeClass('hidden');
})
$('#close_overlay , #close_popup_daytin').click(function () {
  $('.popup_daytin').addClass('hidden');
})
$('#click_xoatin').click(function () {
  $('.popup_hien_xoa').removeClass('hidden');
})
$('#close_overlay_canhbao , #onclick_huy_canhbao').click(function () {
  $('.popup_hien_xoa').addClass('hidden');
})
$('#click_buy_packs').click(function () {
  $('.popup_transfer').removeClass('hidden');
})
$('#click_vi3s').click(function () {
  $('.popup_hien_con').removeClass('hidden');
})

// --------------Responsive mục lục cho thuê

$('#btn_mucluc').click(function () {
  console.log('123456789')
  $('.lease_last-right').addClass('d_block');
})
$('#dong_mucluc').click(function () {
  $('.lease_last-right').removeClass('d_block');
})

function btn_theodoi(h) {
  $(h).parents('.lease_broke_thongtin-item').find('.lease_broke_thongtin-btn').html('Đã theo dõi');
}

$('#btn_close_filter').click(function () {
  $('.popup_loc--375').addClass('hidden');
})
$('#open_boloc').click(function () {
  $('.popup_loc--375').removeClass('hidden');
})
// SHOW MENU
$('.icon_menu').click(function(){
  $('.popup_menu').removeClass('hidden');
})
$('.icon_menu2  ').click(function(){
  $('.popup_menu').addClass('hidden');
})
// HIDDEN MENU
$('.dong').click(function(){
  $('.popup_menu').addClass('hidden');
})
$('.popup_menu_overlay').click(function(){
  $('.popup_menu').addClass('hidden');
})
// DỰ ÁN
$('.click_mn_da').click(function(){
  $(this).toggleClass('rotata_menu');
  $('.menu_c2_768_da').toggleClass('hidden');
  $(this).parents('.li_menu_da').toggleClass('bg_menu');
  $(this).parents('.li_menu_da').toggleClass('color_menu');
  $('.li_trangchu').toggleClass('color_menu')
  $('.li_trangchu').toggleClass('bg_menu')
})
// MUA BÁN
$('.click_mn_muaban').click(function(){
  $(this).toggleClass('rotata_menu')
  $('.menu_c2_768_mb').toggleClass('hidden');
  $(this).parents('.li_mn_mb').toggleClass('bg_menu');
  $(this).parents('.li_mn_mb').toggleClass('color_menu');
  $('.li_trangchu').toggleClass('color_menu')
  $('.li_trangchu').toggleClass('bg_menu')
})
// CHO THUE
$('.click_mn_chothue').click(function(){
  $(this).toggleClass('rotata_menu')
  $('.menu_c2_768_ct').toggleClass('hidden');
  $(this).parents('.li_mn_ct').toggleClass('bg_menu');
  $(this).parents('.li_mn_ct').toggleClass('color_menu');
  $('.li_trangchu').toggleClass('color_menu')
  $('.li_trangchu').toggleClass('bg_menu')
})
// CHUYÊN GIA
$('.click_mn_chuyengia').click(function(){
  $(this).toggleClass('rotata_menu')
  $('.menu_c2_768_cg').toggleClass('hidden');
  $(this).parents('.li_mn_cg').toggleClass('bg_menu');
  $(this).parents('.li_mn_cg').toggleClass('color_menu');
  $('.li_trangchu').toggleClass('color_menu')
  $('.li_trangchu').toggleClass('bg_menu')
})
// THIẾT KẾ ĐẸP
$('.click_mn_tk').click(function(){
  $(this).toggleClass('rotata_menu')
  $('.menu_c2_768_tk').toggleClass('hidden');
  $(this).parents('.li_mn_tk').toggleClass('bg_menu');
  $(this).parents('.li_mn_tk').toggleClass('color_menu');
  $('.li_trangchu').toggleClass('color_menu')
  $('.li_trangchu').toggleClass('bg_menu')
})
// -----xoay tien ich cho thue
$('.tienich_item-cot__right_375').click(function(){
  $(this).toggleClass('rotate_icon')
  $(this).parent('.detail_tienich_item-cot').find('.detail_tienich_item_elemrnt').toggleClass('hidden')
})
$('.detail_tienich_btn_see').click(function(){
  $('.see_overview').toggleClass('rotate_icon')
  $('.detail_tienich_tong').toggleClass('overView_tienich');
  $('.tienich_xem').toggleClass('tienich_thu')
  $('.tienich_xem').toggleClass('tienich_dong')
  $('.tienich_thu').html('Xem thêm');
  $('.tienich_dong').html('Thu gọn');
})

$('.post_additional_total--right').click(function(){
  $(this).parent('.dangtin_after_bosung-item_dong').find('.detail__post_additional_total').toggleClass('additional_hidden')
  $(this).toggleClass('rotate_icon');
})
$('.icon_menu_total').click(function(){
  $('.popup_menu').toggleClass('hidden');
})
// ---------popup tinh lai suat vay
$('.popup_calendar-overlay').click(function(){
  $('.popup_calendar-over__tong').toggleClass('hidden')
})
$('.guide__click_muc').click(function(){
  $('.page_tutorial_right').toggleClass('guide_ul')
})
$('.guide__click_close').click(function(){
  $('.page_tutorial_right').addClass('guide_ul')
})


// hiệu ứng css
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", reveal);
