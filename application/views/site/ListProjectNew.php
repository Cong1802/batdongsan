<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Danh sách dự án mới nhất</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick-theme.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_d.css">

</head>

<body>
    <div class="link_header">
        <? require_once APPPATH.'views/site/includes/da_header.php' ?>
    </div>

    <div class="select_them">
        <div class="select_them_padding">
            <div class="select_them_padding_select">
                <select class="select_option js-states form-control">
                    <option value="">Toàn quốc</option>
                </select>
            </div>
            <div class="select_them_padding_select">
                <select class="select_option js-states form-control">
                    <option value="">Quận huyện</option>
                </select>
            </div>
            <div class="select_them_padding_select">
                <select class="select_option js-states form-control">
                    <option value="">Loại bất động sản</option>
                </select>
            </div>
            <div class="select_them_padding_select">
                <select class="select_option js-states form-control">
                    <option value="">Khoảng giá</option>
                </select>
            </div>
            <div class="select_them_padding_select">
                <select class="select_option js-states form-control">
                    <option value="">Trạng thái</option>
                </select>
            </div>
            <div class="select_them_padding_select">
                <select class="select_option js-states form-control">
                    <option value="">Tiến độ</option>
                </select>
            </div>
        </div>
    </div>

    <div class="body_tong background_tong">
        <div class="body pd_b48px">
            <div class="body_text">
                <div class="them_div_480">
                    <div class="text_sub1 pd_b20px flex">
                        <a href="">Trang Chủ</a>
                        <div class="text_sub1_fig_icon">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/duy_ic_right.png" alt="" class="checked">
                        </div>
                        <span class="">Dự án</span>
                        <div class="text_sub1_fig_icon">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/duy_ic_right.png" alt="" class="checked">
                        </div>
                        <!-- <span class="main_color">Căn hộ</span> -->
                    </div>
                    <div class="them_div_480_suv">
                        <div class="loc_480 flex align_items loc_480_page2">
                            <div class="loc_480_1 flex align_items mr_r8px">
                                <div class="loc_480_1_img">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/loc_20.png" alt="">
                                </div>
                                <div class="loc_480_1_text">Lọc +</div>
                            </div>
                            <div class="loc_480_2">
                                <select class="select_option js-states form-control">
                                    <option value="">Toàn quốc</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text_sub2 width_377">
                    <div class="border_t_w64px"></div>
                    <p class="text_dau font_size">Danh sách dự án mới nhất 03/2021</p>
                    <p class="text_cuoi">Có 1234 dự án</p>
                </div>
            </div>
            <div class="body_content mr_t24px fig_duan_moi_480">
                <div class="content_dau flex_direction_rr justify_fl_end">
                    <div class="content_img content_img_768 mr_l65px fig_1024_1">
                        <img class="img_duan_1" src="<? echo base_url(); ?>assets/images/img_du_an/img1.png" alt="">
                    </div>

                    <div class="content_text fig_768_1 pd_l0">
                        <div class="noidung_text">
                            <h2 class="text_1">The House Plaza 02</h2>
                            <p class="text_2">Trần Điền, Hoàng Mai, Định Công, Hà Nội</p>
                            <div class="text_time">
                                <p class="text_3">Ngày giao bán: 20/10/2022</p>
                                <p class="text_4">Trạng thái: Đang mở bán</p>
                            </div>
                            <p class="text_5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
                                aliquam, purus sit amet luctus venenatis, lectus magna
                                fringilla urna, porttitor
                            </p>
                            <div class="text_money">
                                <div class="text_6">
                                    <p class="text_6_1">GIá: <span>100 - 150 tỷ</span></p>
                                </div>
                                <a class="text_show" href="">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="body_du_an_new">
            <div class="body_du_an_new_left mr_r24px">
                <div class="du_an_new_option mr_b24px">
                    <div class="du_an_new_option_div">

                        <div class="du_an_new_option_xapxep">
                            <select name="" id="" class="select_xapxep select_option js-states form-control">
                                <option value="">Sắp xếp</option>
                                <option value="">Tin đăng mới nhất</option>
                                <option value="">Tin đăng cũ nhất</option>
                                <option value="">Giá thấp nhất</option>
                                <option value="">Giá cao nhất</option>
                                <option value="">Diện tích giảm dần</option>
                                <option value="">Diện tích tăng dần</option>
                            </select>
                        </div>
                        <div class="du_an_new_option_bando">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/map_duan_new.png" alt="">
                            <div class="option_bando">
                                <a href="">Bản đồ</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="du_an_new_danh_sach_pading">
                    <a href="chi-tiet-du-an.html" class="du_an_new_danh_sach flex">
                        <div class="du_an_new_danh_sach_img ">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/img_duan_new.png" alt="">
                            <div class="abs_support flex justify_content_sb">
                                <div class="abs_support_view_text flex">
                                    <div class="abs_support_view mr_r6px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                    </div>
                                    <div class="abs_support_text">1M</div>
                                </div>
                                <div class="abs_support_like">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="du_an_new_danh_sach_text mr_l16px">
                            <div class="du_an_new_danh_sach_text_hd mr_b8px">
                                Legacy Central Quảng Ninh
                            </div>

                            <div class="du_an_new_danh_sach_text_p mr_b16px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                ut aliquam, purus sit amet luctus...
                            </div>

                            <div class="class_not_name flex">
                                <div class="het_ten_de_dat1 mr_r123px">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/bag.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Công ty CP Xây dựng WHAT
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Phương Đông, Uông Bí, Quảng Ninh
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex justify_content_sb">
                                        <div class="het_idia_name flex align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text ">
                                                2.000 m2
                                            </div>
                                        </div>
                                        <div class="het_idia_name flex mr_am30px align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text color_money">
                                                100 - 150 tỷ
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="het_ten_de_dat1 hidden_man480">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_xd.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            Đang xây dựng
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_time.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            20/10/2022
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text color_ccc">
                                            Chưa cập nhật
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fig_man480">
                                <div class="border_t_100pt"></div>
                                <div class="du_an_new_img_info flex align_items justify_content_sb">
                                    <div class="du_an_new_img_info_user flex align_items">
                                        <div class="img_fig_avatar mr_r8px">
                                            <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                        </div>
                                        <div class="du_an_new_img_info_username">
                                            Nguyễn Ngọc Tuyết Phương
                                        </div>
                                    </div>
                                    <!-- Người dùng on -->
                                    <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username ">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <!-- Người dùng off -->
                                    <div class="du_an_new_img_info_user flex c_pointer">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <div class="du_an_new_img_info_user flex">
                                        <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                                        <div class="du_an_new_img_info_username main_color">
                                            So sánh
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="da_info_man48 ">
                        <div class="border_t_100pt"></div>

                        <div class="du_an_new_img_info flex align_items justify_content_sb">
                            <div class="du_an_new_img_info_user">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/luu_24.png" alt="">
                            </div>
                            <!-- Người dùng on -->
                            <div class="du_an_new_img_info_user flex c_pointer color_on">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat_on2.png" alt="">
                            </div>
                            <!-- Người dùng off -->
                            <div class="du_an_new_img_info_user flex c_pointer hidden">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user flex">
                                <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user mr_r8px">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="du_an_new_danh_sach_pading">
                    <a href="chi-tiet-du-an.html" class="du_an_new_danh_sach flex">
                        <div class="du_an_new_danh_sach_img ">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/img_duan_new.png" alt="">
                            <div class="abs_support flex justify_content_sb">
                                <div class="abs_support_view_text flex">
                                    <div class="abs_support_view mr_r6px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                    </div>
                                    <div class="abs_support_text">1M</div>
                                </div>
                                <div class="abs_support_like">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="du_an_new_danh_sach_text mr_l16px">
                            <div class="du_an_new_danh_sach_text_hd mr_b8px">
                                Legacy Central Quảng Ninh
                            </div>

                            <div class="du_an_new_danh_sach_text_p mr_b16px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                ut aliquam, purus sit amet luctus...
                            </div>

                            <div class="class_not_name flex">
                                <div class="het_ten_de_dat1 mr_r123px">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/bag.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Công ty CP Xây dựng WHAT
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Phương Đông, Uông Bí, Quảng Ninh
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex justify_content_sb">
                                        <div class="het_idia_name flex align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text ">
                                                2.000 m2
                                            </div>
                                        </div>
                                        <div class="het_idia_name flex mr_am30px align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text color_money">
                                                100 - 150 tỷ
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="het_ten_de_dat1 hidden_man480">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_xd.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            Đang xây dựng
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_time.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            20/10/2022
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text color_ccc">
                                            Chưa cập nhật
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fig_man480">
                                <div class="border_t_100pt"></div>
                                <div class="du_an_new_img_info flex align_items justify_content_sb">
                                    <div class="du_an_new_img_info_user flex align_items">
                                        <div class="img_fig_avatar mr_r8px">
                                            <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                        </div>
                                        <div class="du_an_new_img_info_username">
                                            Nguyễn Ngọc Tuyết Phương
                                        </div>
                                    </div>
                                    <!-- Người dùng on -->
                                    <div class="du_an_new_img_info_user flex c_pointer color_on">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat_on2.png" alt="">
                                        <div class="du_an_new_img_info_username ">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <!-- Người dùng off -->
                                    <div class="du_an_new_img_info_user flex c_pointer hidden">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <div class="du_an_new_img_info_user flex">
                                        <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                                        <div class="du_an_new_img_info_username main_color">
                                            So sánh
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="da_info_man48 ">
                        <div class="border_t_100pt"></div>

                        <div class="du_an_new_img_info flex align_items justify_content_sb">
                            <div class="du_an_new_img_info_user">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/luu_24.png" alt="">
                            </div>
                            <!-- Người dùng on -->
                            <div class="du_an_new_img_info_user flex c_pointer color_on">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat_on2.png" alt="">
                            </div>
                            <!-- Người dùng off -->
                            <div class="du_an_new_img_info_user flex c_pointer hidden">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user flex">
                                <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user mr_r8px">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="du_an_new_danh_sach_pading">
                    <a href="chi-tiet-du-an.html" class="du_an_new_danh_sach flex">
                        <div class="du_an_new_danh_sach_img ">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/img_duan_new.png" alt="">
                            <div class="abs_support flex justify_content_sb">
                                <div class="abs_support_view_text flex">
                                    <div class="abs_support_view mr_r6px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                    </div>
                                    <div class="abs_support_text">1M</div>
                                </div>
                                <div class="abs_support_like">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="du_an_new_danh_sach_text mr_l16px">
                            <div class="du_an_new_danh_sach_text_hd mr_b8px">
                                Legacy Central Quảng Ninh
                            </div>

                            <div class="du_an_new_danh_sach_text_p mr_b16px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                ut aliquam, purus sit amet luctus...
                            </div>

                            <div class="class_not_name flex">
                                <div class="het_ten_de_dat1 mr_r123px">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/bag.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Công ty CP Xây dựng WHAT
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Phương Đông, Uông Bí, Quảng Ninh
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex justify_content_sb">
                                        <div class="het_idia_name flex align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text ">
                                                2.000 m2
                                            </div>
                                        </div>
                                        <div class="het_idia_name flex mr_am30px align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text color_money">
                                                100 - 150 tỷ
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="het_ten_de_dat1 hidden_man480">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_xd.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            Đang xây dựng
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_time.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            20/10/2022
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text color_ccc">
                                            Chưa cập nhật
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fig_man480">
                                <div class="border_t_100pt"></div>
                                <div class="du_an_new_img_info flex align_items justify_content_sb">
                                    <div class="du_an_new_img_info_user flex align_items">
                                        <div class="img_fig_avatar mr_r8px">
                                            <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                        </div>
                                        <div class="du_an_new_img_info_username">
                                            Nguyễn Ngọc Tuyết Phương
                                        </div>
                                    </div>
                                    <!-- Người dùng on -->
                                    <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username ">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <!-- Người dùng off -->
                                    <div class="du_an_new_img_info_user flex c_pointer">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <div class="du_an_new_img_info_user flex">
                                        <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                                        <div class="du_an_new_img_info_username main_color">
                                            So sánh
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="da_info_man48 ">
                        <div class="border_t_100pt"></div>

                        <div class="du_an_new_img_info flex align_items justify_content_sb">
                            <div class="du_an_new_img_info_user">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/luu_24.png" alt="">
                            </div>
                            <!-- Người dùng on -->
                            <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <!-- Người dùng off -->
                            <div class="du_an_new_img_info_user flex c_pointer">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user flex">
                                <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user mr_r8px">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="du_an_new_danh_sach_pading">
                    <a href="chi-tiet-du-an.html" class="du_an_new_danh_sach flex">
                        <div class="du_an_new_danh_sach_img ">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/img_duan_new.png" alt="">
                            <div class="abs_support flex justify_content_sb">
                                <div class="abs_support_view_text flex">
                                    <div class="abs_support_view mr_r6px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                    </div>
                                    <div class="abs_support_text">1M</div>
                                </div>
                                <div class="abs_support_like">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="du_an_new_danh_sach_text mr_l16px">
                            <div class="du_an_new_danh_sach_text_hd mr_b8px">
                                Legacy Central Quảng Ninh
                            </div>

                            <div class="du_an_new_danh_sach_text_p mr_b16px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                ut aliquam, purus sit amet luctus...
                            </div>

                            <div class="class_not_name flex">
                                <div class="het_ten_de_dat1 mr_r123px">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/bag.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Công ty CP Xây dựng WHAT
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Phương Đông, Uông Bí, Quảng Ninh
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex justify_content_sb">
                                        <div class="het_idia_name flex align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text ">
                                                2.000 m2
                                            </div>
                                        </div>
                                        <div class="het_idia_name flex mr_am30px align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text color_money">
                                                100 - 150 tỷ
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="het_ten_de_dat1 hidden_man480">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_xd.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            Đang xây dựng
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_time.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            20/10/2022
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text color_ccc">
                                            Chưa cập nhật
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fig_man480">
                                <div class="border_t_100pt"></div>
                                <div class="du_an_new_img_info flex align_items justify_content_sb">
                                    <div class="du_an_new_img_info_user flex align_items">
                                        <div class="img_fig_avatar mr_r8px">
                                            <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                        </div>
                                        <div class="du_an_new_img_info_username">
                                            Nguyễn Ngọc Tuyết Phương
                                        </div>
                                    </div>
                                    <!-- Người dùng on -->
                                    <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username ">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <!-- Người dùng off -->
                                    <div class="du_an_new_img_info_user flex c_pointer">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <div class="du_an_new_img_info_user flex">
                                        <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                                        <div class="du_an_new_img_info_username main_color">
                                            So sánh
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="da_info_man48 ">
                        <div class="border_t_100pt"></div>

                        <div class="du_an_new_img_info flex align_items justify_content_sb">
                            <div class="du_an_new_img_info_user">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/luu_24.png" alt="">
                            </div>
                            <!-- Người dùng on -->
                            <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <!-- Người dùng off -->
                            <div class="du_an_new_img_info_user flex c_pointer">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user flex">
                                <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user mr_r8px">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="du_an_new_danh_sach_pading">
                    <a href="chi-tiet-du-an.html" class="du_an_new_danh_sach flex">
                        <div class="du_an_new_danh_sach_img ">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/img_duan_new.png" alt="">
                            <div class="abs_support flex justify_content_sb">
                                <div class="abs_support_view_text flex">
                                    <div class="abs_support_view mr_r6px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                    </div>
                                    <div class="abs_support_text">1M</div>
                                </div>
                                <div class="abs_support_like">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="du_an_new_danh_sach_text mr_l16px">
                            <div class="du_an_new_danh_sach_text_hd mr_b8px">
                                Legacy Central Quảng Ninh
                            </div>

                            <div class="du_an_new_danh_sach_text_p mr_b16px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                ut aliquam, purus sit amet luctus...
                            </div>

                            <div class="class_not_name flex">
                                <div class="het_ten_de_dat1 mr_r123px">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/bag.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Công ty CP Xây dựng WHAT
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Phương Đông, Uông Bí, Quảng Ninh
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex justify_content_sb">
                                        <div class="het_idia_name flex align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text ">
                                                2.000 m2
                                            </div>
                                        </div>
                                        <div class="het_idia_name flex mr_am30px align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text color_money">
                                                100 - 150 tỷ
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="het_ten_de_dat1 hidden_man480">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_xd.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            Đang xây dựng
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_time.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            20/10/2022
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text color_ccc">
                                            Chưa cập nhật
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fig_man480">
                                <div class="border_t_100pt"></div>
                                <div class="du_an_new_img_info flex align_items justify_content_sb">
                                    <div class="du_an_new_img_info_user flex align_items">
                                        <div class="img_fig_avatar mr_r8px">
                                            <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                        </div>
                                        <div class="du_an_new_img_info_username">
                                            Nguyễn Ngọc Tuyết Phương
                                        </div>
                                    </div>
                                    <!-- Người dùng on -->
                                    <div class="du_an_new_img_info_user flex c_pointer color_on">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username ">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <!-- Người dùng off -->
                                    <div class="du_an_new_img_info_user flex c_pointer hidden">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <div class="du_an_new_img_info_user flex">
                                        <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                                        <div class="du_an_new_img_info_username main_color">
                                            So sánh
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="da_info_man48 ">
                        <div class="border_t_100pt"></div>

                        <div class="du_an_new_img_info flex align_items justify_content_sb">
                            <div class="du_an_new_img_info_user">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/luu_24.png" alt="">
                            </div>
                            <!-- Người dùng on -->
                            <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <!-- Người dùng off -->
                            <div class="du_an_new_img_info_user flex c_pointer">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user flex">
                                <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user mr_r8px">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="du_an_new_danh_sach_pading">
                    <a href="chi-tiet-du-an.html" class="du_an_new_danh_sach flex">
                        <div class="du_an_new_danh_sach_img ">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/img_duan_new.png" alt="">
                            <div class="abs_support flex justify_content_sb">
                                <div class="abs_support_view_text flex">
                                    <div class="abs_support_view mr_r6px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                    </div>
                                    <div class="abs_support_text">1M</div>
                                </div>
                                <div class="abs_support_like">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="du_an_new_danh_sach_text mr_l16px">
                            <div class="du_an_new_danh_sach_text_hd mr_b8px">
                                Legacy Central Quảng Ninh
                            </div>

                            <div class="du_an_new_danh_sach_text_p mr_b16px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                ut aliquam, purus sit amet luctus...
                            </div>

                            <div class="class_not_name flex">
                                <div class="het_ten_de_dat1 mr_r123px">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/bag.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Công ty CP Xây dựng WHAT
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Phương Đông, Uông Bí, Quảng Ninh
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex justify_content_sb">
                                        <div class="het_idia_name flex align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text ">
                                                2.000 m2
                                            </div>
                                        </div>
                                        <div class="het_idia_name flex mr_am30px align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text color_money">
                                                100 - 150 tỷ
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="het_ten_de_dat1 hidden_man480">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_xd.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            Đang xây dựng
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_time.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            20/10/2022
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text color_ccc">
                                            Chưa cập nhật
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fig_man480">
                                <div class="border_t_100pt"></div>
                                <div class="du_an_new_img_info flex align_items justify_content_sb">
                                    <div class="du_an_new_img_info_user flex align_items">
                                        <div class="img_fig_avatar mr_r8px">
                                            <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                        </div>
                                        <div class="du_an_new_img_info_username">
                                            Nguyễn Ngọc Tuyết Phương
                                        </div>
                                    </div>
                                    <!-- Người dùng on -->
                                    <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username ">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <!-- Người dùng off -->
                                    <div class="du_an_new_img_info_user flex c_pointer">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <div class="du_an_new_img_info_user flex">
                                        <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                                        <div class="du_an_new_img_info_username main_color">
                                            So sánh
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="da_info_man48 ">
                        <div class="border_t_100pt"></div>

                        <div class="du_an_new_img_info flex align_items justify_content_sb">
                            <div class="du_an_new_img_info_user">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/luu_24.png" alt="">
                            </div>
                            <!-- Người dùng on -->
                            <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <!-- Người dùng off -->
                            <div class="du_an_new_img_info_user flex c_pointer">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user flex">
                                <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user mr_r8px">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="du_an_new_danh_sach_pading">
                    <a href="chi-tiet-du-an.html" class="du_an_new_danh_sach flex">
                        <div class="du_an_new_danh_sach_img ">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/img_duan_new.png" alt="">
                            <div class="abs_support flex justify_content_sb">
                                <div class="abs_support_view_text flex">
                                    <div class="abs_support_view mr_r6px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                    </div>
                                    <div class="abs_support_text">1M</div>
                                </div>
                                <div class="abs_support_like">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="du_an_new_danh_sach_text mr_l16px">
                            <div class="du_an_new_danh_sach_text_hd mr_b8px">
                                Legacy Central Quảng Ninh
                            </div>

                            <div class="du_an_new_danh_sach_text_p mr_b16px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                ut aliquam, purus sit amet luctus...
                            </div>

                            <div class="class_not_name flex">
                                <div class="het_ten_de_dat1 mr_r123px">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/bag.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Công ty CP Xây dựng WHAT
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Phương Đông, Uông Bí, Quảng Ninh
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex justify_content_sb">
                                        <div class="het_idia_name flex align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text ">
                                                2.000 m2
                                            </div>
                                        </div>
                                        <div class="het_idia_name flex mr_am30px align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text color_money">
                                                100 - 150 tỷ
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="het_ten_de_dat1 hidden_man480">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_xd.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            Đang xây dựng
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_time.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            20/10/2022
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text color_ccc">
                                            Chưa cập nhật
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fig_man480">
                                <div class="border_t_100pt"></div>
                                <div class="du_an_new_img_info flex align_items justify_content_sb">
                                    <div class="du_an_new_img_info_user flex align_items">
                                        <div class="img_fig_avatar mr_r8px">
                                            <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                        </div>
                                        <div class="du_an_new_img_info_username">
                                            Nguyễn Ngọc Tuyết Phương
                                        </div>
                                    </div>
                                    <!-- Người dùng on -->
                                    <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username ">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <!-- Người dùng off -->
                                    <div class="du_an_new_img_info_user flex c_pointer">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <div class="du_an_new_img_info_user flex">
                                        <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                                        <div class="du_an_new_img_info_username main_color">
                                            So sánh
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="da_info_man48 ">
                        <div class="border_t_100pt"></div>

                        <div class="du_an_new_img_info flex align_items justify_content_sb">
                            <div class="du_an_new_img_info_user">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/luu_24.png" alt="">
                            </div>
                            <!-- Người dùng on -->
                            <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <!-- Người dùng off -->
                            <div class="du_an_new_img_info_user flex c_pointer">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user flex">
                                <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user mr_r8px">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="du_an_new_danh_sach_pading">
                    <a href="chi-tiet-du-an.html" class="du_an_new_danh_sach flex">
                        <div class="du_an_new_danh_sach_img ">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/img_duan_new.png" alt="">
                            <div class="abs_support flex justify_content_sb">
                                <div class="abs_support_view_text flex">
                                    <div class="abs_support_view mr_r6px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                    </div>
                                    <div class="abs_support_text">1M</div>
                                </div>
                                <div class="abs_support_like">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="du_an_new_danh_sach_text mr_l16px">
                            <div class="du_an_new_danh_sach_text_hd mr_b8px">
                                Legacy Central Quảng Ninh
                            </div>

                            <div class="du_an_new_danh_sach_text_p mr_b16px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                ut aliquam, purus sit amet luctus...
                            </div>

                            <div class="class_not_name flex">
                                <div class="het_ten_de_dat1 mr_r123px">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/bag.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Công ty CP Xây dựng WHAT
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Phương Đông, Uông Bí, Quảng Ninh
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex justify_content_sb">
                                        <div class="het_idia_name flex align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text ">
                                                2.000 m2
                                            </div>
                                        </div>
                                        <div class="het_idia_name flex mr_am30px align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text color_money">
                                                100 - 150 tỷ
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="het_ten_de_dat1 hidden_man480">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_xd.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            Đang xây dựng
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_time.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            20/10/2022
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text color_ccc">
                                            Chưa cập nhật
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fig_man480">
                                <div class="border_t_100pt"></div>
                                <div class="du_an_new_img_info flex align_items justify_content_sb">
                                    <div class="du_an_new_img_info_user flex align_items">
                                        <div class="img_fig_avatar mr_r8px">
                                            <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                        </div>
                                        <div class="du_an_new_img_info_username">
                                            Nguyễn Ngọc Tuyết Phương
                                        </div>
                                    </div>
                                    <!-- Người dùng on -->
                                    <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username ">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <!-- Người dùng off -->
                                    <div class="du_an_new_img_info_user flex c_pointer">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <div class="du_an_new_img_info_user flex">
                                        <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                                        <div class="du_an_new_img_info_username main_color">
                                            So sánh
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="da_info_man48 ">
                        <div class="border_t_100pt"></div>

                        <div class="du_an_new_img_info flex align_items justify_content_sb">
                            <div class="du_an_new_img_info_user">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/luu_24.png" alt="">
                            </div>
                            <!-- Người dùng on -->
                            <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <!-- Người dùng off -->
                            <div class="du_an_new_img_info_user flex c_pointer">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user flex">
                                <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user mr_r8px">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="du_an_new_danh_sach_pading">
                    <a href="chi-tiet-du-an.html" class="du_an_new_danh_sach flex">
                        <div class="du_an_new_danh_sach_img ">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/img_duan_new.png" alt="">
                            <div class="abs_support flex justify_content_sb">
                                <div class="abs_support_view_text flex">
                                    <div class="abs_support_view mr_r6px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                    </div>
                                    <div class="abs_support_text">1M</div>
                                </div>
                                <div class="abs_support_like">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="du_an_new_danh_sach_text mr_l16px">
                            <div class="du_an_new_danh_sach_text_hd mr_b8px">
                                Legacy Central Quảng Ninh
                            </div>

                            <div class="du_an_new_danh_sach_text_p mr_b16px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                ut aliquam, purus sit amet luctus...
                            </div>

                            <div class="class_not_name flex">
                                <div class="het_ten_de_dat1 mr_r123px">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/bag.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Công ty CP Xây dựng WHAT
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Phương Đông, Uông Bí, Quảng Ninh
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex justify_content_sb">
                                        <div class="het_idia_name flex align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text ">
                                                2.000 m2
                                            </div>
                                        </div>
                                        <div class="het_idia_name flex mr_am30px align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text color_money">
                                                100 - 150 tỷ
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="het_ten_de_dat1 hidden_man480">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_xd.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            Đang xây dựng
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_time.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            20/10/2022
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text color_ccc">
                                            Chưa cập nhật
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fig_man480">
                                <div class="border_t_100pt"></div>
                                <div class="du_an_new_img_info flex align_items justify_content_sb">
                                    <div class="du_an_new_img_info_user flex align_items">
                                        <div class="img_fig_avatar mr_r8px">
                                            <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                        </div>
                                        <div class="du_an_new_img_info_username">
                                            Nguyễn Ngọc Tuyết Phương
                                        </div>
                                    </div>
                                    <!-- Người dùng on -->
                                    <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username ">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <!-- Người dùng off -->
                                    <div class="du_an_new_img_info_user flex c_pointer">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <div class="du_an_new_img_info_user flex">
                                        <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                                        <div class="du_an_new_img_info_username main_color">
                                            So sánh
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="da_info_man48 ">
                        <div class="border_t_100pt"></div>

                        <div class="du_an_new_img_info flex align_items justify_content_sb">
                            <div class="du_an_new_img_info_user">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/luu_24.png" alt="">
                            </div>
                            <!-- Người dùng on -->
                            <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <!-- Người dùng off -->
                            <div class="du_an_new_img_info_user flex c_pointer">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user flex">
                                <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user mr_r8px">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="du_an_new_danh_sach_pading">
                    <a href="chi-tiet-du-an.html" class="du_an_new_danh_sach flex">
                        <div class="du_an_new_danh_sach_img ">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/img_duan_new.png" alt="">
                            <div class="abs_support flex justify_content_sb">
                                <div class="abs_support_view_text flex">
                                    <div class="abs_support_view mr_r6px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                    </div>
                                    <div class="abs_support_text">1M</div>
                                </div>
                                <div class="abs_support_like">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="du_an_new_danh_sach_text mr_l16px">
                            <div class="du_an_new_danh_sach_text_hd mr_b8px">
                                Legacy Central Quảng Ninh
                            </div>

                            <div class="du_an_new_danh_sach_text_p mr_b16px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                ut aliquam, purus sit amet luctus...
                            </div>

                            <div class="class_not_name flex">
                                <div class="het_ten_de_dat1 mr_r123px">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/bag.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Công ty CP Xây dựng WHAT
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text">
                                            Phương Đông, Uông Bí, Quảng Ninh
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex justify_content_sb">
                                        <div class="het_idia_name flex align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text ">
                                                2.000 m2
                                            </div>
                                        </div>
                                        <div class="het_idia_name flex mr_am30px align_items">
                                            <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png" alt="">
                                            </div>
                                            <div class="du_an_new_danh_sach_text_info_text color_money">
                                                100 - 150 tỷ
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="het_ten_de_dat1 hidden_man480">
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_xd.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            Đang xây dựng
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info mr_b9px flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_time.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text font_z">
                                            20/10/2022
                                        </div>
                                    </div>
                                    <div class="du_an_new_danh_sach_text_info flex align_items">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png" alt="">
                                        </div>
                                        <div class="du_an_new_danh_sach_text_info_text color_ccc">
                                            Chưa cập nhật
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fig_man480">
                                <div class="border_t_100pt"></div>
                                <div class="du_an_new_img_info flex align_items justify_content_sb">
                                    <div class="du_an_new_img_info_user flex align_items">
                                        <div class="img_fig_avatar mr_r8px">
                                            <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                        </div>
                                        <div class="du_an_new_img_info_username">
                                            Nguyễn Ngọc Tuyết Phương
                                        </div>
                                    </div>
                                    <!-- Người dùng on -->
                                    <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username ">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <!-- Người dùng off -->
                                    <div class="du_an_new_img_info_user flex c_pointer">
                                        <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                                        <div class="du_an_new_img_info_username">
                                            Chat ngay
                                        </div>
                                    </div>
                                    <div class="du_an_new_img_info_user flex">
                                        <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                                        <div class="du_an_new_img_info_username main_color">
                                            So sánh
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="da_info_man48 ">
                        <div class="border_t_100pt"></div>

                        <div class="du_an_new_img_info flex align_items justify_content_sb">
                            <div class="du_an_new_img_info_user">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/luu_24.png" alt="">
                            </div>
                            <!-- Người dùng on -->
                            <div class="du_an_new_img_info_user flex c_pointer color_on hidden">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <!-- Người dùng off -->
                            <div class="du_an_new_img_info_user flex c_pointer">
                                <img class="chat mr_r10px" src="<? echo base_url(); ?>assets/images/img_du_an/chat.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user flex">
                                <img class="vector mr_r11px" src="<? echo base_url(); ?>assets/images/img_du_an/Vector.png" alt="">
                            </div>
                            <div class="du_an_new_img_info_user mr_r8px">
                                <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>




                <div class="body_phantrang ct_1024 padding_unset flex justify_fl_end fig_768_2">
                    <div class="body_phantrang_img flex">
                        <div class="body_phantrang_img_left mr_r16px">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/phantrang_left.png" alt="">
                        </div>
                        <div class="body_phantrang_number flex">
                            <div class="phantrang_number mr_r8px main_background while_color">1</div>
                            <div class="phantrang_number mr_r8px">2</div>
                            <div class="phantrang_number mr_r8px">3</div>
                            <div class="phantrang_number">4</div>
                        </div>
                        <div class="body_phantrang_img_left mr_l16px">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/phantrang_right.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="body_du_an_new_right">
                <div class="du_an_new_tinhthanh mr_b24px">
                    <div class="du_an_new_tinhthanh_hd mr_b32px">Dự án theo tỉnh thành</div>
                    <!-- Màn 1366 -->
                    <div class="du_an_new_tinhthanh_text flex man1366">
                        <div class="du_an_new_tinhthanh_text_city">
                            <ul class="du_an_new_tinhthanh_text_city_nav">
                                <li><a href="">Hà Nội (20)</a></li>
                                <li><a href="">Bình Dương (20)</a></li>
                                <li><a href="">Hải Phòng (20)</a></li>
                                <li><a href="">Bà Rịa Vũng Tàu (20)</a></li>
                                <li><a href="">Bắc Giang (20)</a></li>
                                <li><a href="">Hưng Yên (20)</a></li>
                                <li><a href="">Bến Tre (20)</a></li>
                                <li><a href="">Bình Phước (20)</a></li>
                                <li><a href="">Cà Mau (20)</a></li>
                                <li><a href="">Cao bằng (20)</a></li>
                            </ul>
                        </div>
                        <div class="du_an_new_tinhthanh_text_city">
                            <ul class="du_an_new_tinhthanh_text_city_nav">
                                <li><a href="">TP Hồ Chí Minh (20)</a></li>
                                <li><a href="">Đà Nẵng (20)</a></li>
                                <li><a href="">Long An (20)</a></li>
                                <li><a href="">An Giang (20)</a></li>
                                <li><a href="">Bắc Cạn (20)</a></li>
                                <li><a href="">Bắc Ninh (20)</a></li>
                                <li><a href="">Nam Định (20)</a></li>
                                <li><a href="">Bình Thuận (20)</a></li>
                                <li><a href="">Cần Thơ (20)</a></li>
                                <li><a href="">Thanh Hóa (20)</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- --------------------------------------------------------------- -->
                    <!-- Màn 768 -->
                    <div class="du_an_new_tinhthanh_text flex justify_content_sb man768">
                        <div class="du_an_new_tinhthanh_text_city">
                            <ul class="du_an_new_tinhthanh_text_city_nav">
                                <li><a href="">Hà Nội (20)</a></li>
                                <li><a href="">Bình Dương (20)</a></li>
                                <li><a href="">Hải Phòng (20)</a></li>
                                <li><a href="">Bà Rịa Vũng Tàu (20)</a></li>
                                <li><a href="">Bắc Giang (20)</a></li>
                                <li><a href="">Hưng Yên (20)</a></li>
                                <li><a href="">Bến Tre (20)</a></li>

                            </ul>
                        </div>
                        <div class="du_an_new_tinhthanh_text_city">
                            <ul class="du_an_new_tinhthanh_text_city_nav">
                                <li><a href="">TP Hồ Chí Minh (20)</a></li>
                                <li><a href="">Đà Nẵng (20)</a></li>
                                <li><a href="">Long An (20)</a></li>
                                <li><a href="">An Giang (20)</a></li>
                                <li><a href="">Bắc Cạn (20)</a></li>
                                <li><a href="">Bắc Ninh (20)</a></li>
                                <li><a href="">Nam Định (20)</a></li>

                            </ul>
                        </div>
                        <div class="du_an_new_tinhthanh_text_city">
                            <ul class="du_an_new_tinhthanh_text_city_nav">
                                <li><a href="">Bình Phước (20)</a></li>
                                <li><a href="">Cà Mau (20)</a></li>
                                <li><a href="">Cao bằng (20)</a></li>
                                <li><a href="">Bình Thuận (20)</a></li>
                                <li><a href="">Cần Thơ (20)</a></li>
                                <li><a href="">Thanh Hóa (20)</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- --------------------------------------------------------------- -->
                </div>


                <div class="du_an_new_canho">
                    <div class="du_an_new_canho_hd mr_b24px">Dự án căn hộ nổi bật</div>
                    <div class="js_slider-ch">
                        <?php
                        for($i=0;$i<5;$i++):    
                    ?>
                        <div class="du_an_new_canho_img">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/DA_new_chnb.png" alt="">
                            <div class="du_an_new_canho_img_view">
                                <img class="mr_r8px" src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                <div class="du_an_new_canho_img_view_text font_size_14">100M</div>
                            </div>
                            <div class="du_an_new_canho_img_like">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                            </div>
                            <div class="du_an_new_canho_img_text">
                                <p class="du_an_new_canho_img_text1 main_color mr_b8px">Three Piece 1020</p>
                                <p class="du_an_new_canho_img_text2 elipsis2">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit ut aliquam, purus sit amet luctus heheh
                                </p>
                            </div>
                            <div class="du_an_new_canho_img_text">
                                <p class="du_an_new_canho_img_text1 main_color mr_b8px">Three Piece 1020</p>
                                <p class="du_an_new_canho_img_text2 elipsis2">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit ut aliquam, purus sit amet luctus heheh
                                </p>
                            </div>
                            <!-- <div class="du_an_new_canho_img_icon_left">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/DSDA_new_left.png" alt="">
                            </div>
                            <div class="du_an_new_canho_img_icon_right">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/DSDA_new_right.png" alt="">
                            </div> -->
                        </div>

                        <?php endfor; ?>
                    </div>
                </div>
            </div>

        </div>



        <!-- body Mua chung cư -->
        <div class="body_tindang background_tong">
            <div class="body_tindang_padding pt_unset pd_b64px">
                <div class="body_tindang_heading mr_b24px">
                    Mua bán căn hộ chưng cư
                </div>
                <div class="body_tindang_khung_img flex flex_w">
                    <?php for($i=0;$i<4;$i++):?>
                        <div class="body_tindang_khung_all mr_b24px">
                            <div class="body_tindang_khung_img1">
                                <div class="body_tindang_img">
                                    <div class="img_fig_mua_chcc">
                                        <img class="tindang_img" src="<? echo base_url(); ?>assets/images/img_du_an/mua_cc_1.png" alt="">
                                    </div>
                                    <div class="tindang_view flex">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                        <div class="tindang_view_tex mr_l8px">12354</div>
                                    </div>
                                    <div class="tindang_like">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                    </div>
                                </div>
                                <div class="body_tindang_text">
                                    <div class="body_tindang_text1_a elipsis2 main_color mr_b8px color_text">
                                        Đất thật giá thật, diện tích lớn tại Biển Cát Sổ sẵn công
                                        chứng trong ngày, gần 2 khu công.
                                    </div>
                                    <div class="body_tindang_text1 flex mr_b8px">
                                        <div class="show_icon_text_img">
                                            <img class="tindang_img_ic mr_r6px" src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png"
                                                alt="">
                                        </div>
                                        <div class="body_tindang_text2 color_text">
                                            Đường Kim Mã, Phường Kim Mã, Quận Ba Đình, Hà Nội
                                        </div>
                                    </div>
                                    <div class="body_tindang_text1 flex">
                                        <div class="body_tindang_text1_sub flex align_items mr_r112px">
                                            <div class="show_icon_text_img">
                                                <img class="tindang_img_ic mr_r6px" src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png"
                                                    alt="">
                                            </div>
                                            <div class="body_tindang_text2 color_text">
                                                200 m2
                                            </div>
                                        </div>
                                        <div class="body_tindang_text1_sub flex align_items">
                                            <div class="show_icon_text_img">
    
                                                <img class="tindang_img_ic mr_r6px" src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png"
                                                    alt="">
                                            </div>
                                            <div class="body_tindang_text2 color_money color_text">
                                                1.5 tỷ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body_tindang_khung_sup flex align_items justify_content_sb">
                                <div class="om_info flex align_items">
                                    <div class="body_tindang_khung_avatar mr_r8px">
                                        <img class="tindang_avatar" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                    </div>
                                    <div class="body_tindang_khung_name color_text">
                                        Nguyễn Ngọc Tuyết Phương
                                    </div>
                                </div>
                                <div class="body_tindang_khung_icon">
                                    <img class="tindang_chat_new" src="<? echo base_url(); ?>assets/images/img_du_an/chat_new.png" alt="">
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>
                </div>
            </div>
            <div class="body_tindang_padding pt_unset">
                <div class="body_tindang_heading mr_b24px">
                    Cho thuê căn hộ chung cư
                </div>
                <div class="body_tindang_khung_img flex flex_w">
                    <?php for($i=0;$i<4;$i++):?>
                        <div class="body_tindang_khung_all mr_r24px mr_b24px">
                            <div class="body_tindang_khung_img1">
                                <div class="body_tindang_img">
                                    <div class="img_fig_mua_chcc">
                                        <img class="tindang_img" src="<? echo base_url(); ?>assets/images/img_du_an/mua_cc_1.png" alt="">
                                    </div>
                                    <div class="tindang_view flex">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                        <div class="tindang_view_tex mr_l8px">12354</div>
                                    </div>
                                    <div class="tindang_like">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                    </div>
                                </div>
                                <div class="body_tindang_text">
                                    <div class="body_tindang_text1_a elipsis2 main_color mr_b8px color_text">
                                        Đất thật giá thật, diện tích lớn tại Biển Cát Sổ sẵn công
                                        chứng trong ngày, gần 2 khu công.
                                    </div>
                                    <div class="body_tindang_text1 flex mr_b8px">
                                        <div class="show_icon_text_img">
                                            <img class="tindang_img_ic mr_r6px" src="<? echo base_url(); ?>assets/images/img_du_an/address_hi.png"
                                                alt="">
                                        </div>
                                        <div class="body_tindang_text2 color_text">
                                            Đường Kim Mã, Phường Kim Mã, Quận Ba Đình, Hà Nội
                                        </div>
                                    </div>
                                    <div class="body_tindang_text1 flex">
                                        <div class="body_tindang_text1_sub flex align_items mr_r112px">
                                            <div class="show_icon_text_img">
                                                <img class="tindang_img_ic mr_r6px" src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png"
                                                    alt="">
                                            </div>
                                            <div class="body_tindang_text2 color_text">
                                                200 m2
                                            </div>
                                        </div>
                                        <div class="body_tindang_text1_sub flex align_items">
                                            <div class="show_icon_text_img">

                                                <img class="tindang_img_ic mr_r6px" src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png"
                                                    alt="">
                                            </div>
                                            <div class="body_tindang_text2 color_money color_text">
                                                1.5 tỷ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body_tindang_khung_sup flex align_items justify_content_sb">
                                <div class="om_info flex align_items">
                                    <div class="body_tindang_khung_avatar mr_r8px">
                                        <img class="tindang_avatar" src="<? echo base_url(); ?>assets/images/img_du_an/user.png" alt="">
                                    </div>
                                    <div class="body_tindang_khung_name color_text">
                                        Nguyễn Ngọc Tuyết Phương
                                    </div>
                                </div>
                                <div class="body_tindang_khung_icon">
                                    <img class="tindang_chat_new" src="<? echo base_url(); ?>assets/images/img_du_an/chat_new.png" alt="">
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>
                </div>
            </div>
        </div>


        <!-- body Từ khóa hot -->
        <div class="body_tukhoahot">
            <div class="body_tukhoahot_text mr_b8px">
                Từ khóa hot
            </div>
            <div class="tukhoahot_nhom1 flex">
                <?php for($i=0;$i<4;$i++):?>
                    <div class="tukhoahot_1 main_color mr_r24px mr_t16px">Bất Động Sản Dự Án</div>
                    <div class="tukhoahot_1 main_color mr_r24px mr_t16px">Dự Án Tại Vĩnh Long</div>
                    <div class="tukhoahot_1 main_color mr_r24px mr_t16px">Dự án One Piece Tại Sơn La</div>
                <?php endfor;?>
            </div>
        </div>

        <!-- body KÉT THÚC -->
        <div class="body_ketthuc background_none pd_t0px">
            <div class="body_ketthuc_khung">
                <div class="body_ketthuc_khung1">
                    <div class="body_ketthuc_khung1_text">
                        <div class="body_ketthuc_khung2_img_heading them1class">
                            <div class="img_fig_mucluc">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/mucluc.png" alt="">
                            </div>
                            <div class="body_ketthuc_khung2_heading">
                                Mục lục
                            </div>
                        </div>
                        <div class="body_ketthuc_khung1_text1">
                            Chung cư đang được coi là phân khúc bất động sản cực HOT đi cùng sự
                            phát triển của xã hội được khá nhiều người quan tâm trong thời điểm
                            hiện tại. Sản phẩm bất động sản tuyệt vời này giúp xã hội giải được
                            bài toàn về nhà ở đặc biệt là các thành phố lớn Chung cư cũng được
                            đánh giá cao với cơ sở hạ tầng hiện đại đầy đủ, với thiết kế hiện đại,
                            tiện ích, tiện nghi hoàn chỉnh và không gian sống của mình. Vì vậy nó
                            luôn luôn trở thành một trong những mục tiêu săn lùng của rất nhiều
                            người giúp họ có được một nơi an cư lý tưởng hay là kênh đầu tư lợi
                            nhuận sinh lời
                        </div>
                        <div class="body_ketthuc_khung1_text2">
                            <span>1 .Đánh giá tình hình chung cư việt nam hiện nay</span> <br>
                            Không phải ngẫu nhiên mà thị trường mua bán chung
                            cư đang trở nên sôi động và nhộn nhịp bởi chung cư
                            Việt Nam có những ưu điểm vượt trội đáp ứng được những
                            nhu cầu chính đáng của con người trong xã hội hiện đại
                            đặc biệt phải kể đến
                        </div>
                        <div class="img_xemthem hidden">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/img_xemthem.png" alt="">
                        </div>
                    </div>
                    <div class="ketthuc_xemthem">
                        <p class="show_xemthem">Xem thêm</p>
                        <p class="show_thugon hidden">Thu gọn</p>
                    </div>
                </div>



                <div class="body_ketthuc_khung2">
                    <div class="body_ketthuc_khung2_them_480">
                        <div class="body_ketthuc_khung2_img_heading">
                            <div class="img_fig_mucluc">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/mucluc.png" alt="">
                            </div>
                            <div class="body_ketthuc_khung2_heading">
                                Mục lục
                            </div>
                        </div>
                        <div class="body_ketthuc_khung2_them_480_sub dong_mucluc">
                            Đóng
                        </div>
                    </div>
                    <ul class="body_ketthuc_khung_mucluc">
                        <li><a class="mucluc1" href="">1. Đánh giá tình hình chung cư Việt Nam hiện nay</a></li>
                        <li><a class="mucluc2" href="">1.1 Cơ sỏ hạ tầng đồng bộ</a></li>
                        <li><a class="mucluc3" href="">1.2 An ninh tốt</a></li>
                        <li><a class="mucluc4" href="">1. Thiết kế hiện đại</a></li>
                        <li><a class="mucluc5" href="">1. Đánh giá tình hình chung cư Việt Nam hiện nay</a></li>
                        <li><a class="mucluc6" href="">1. Cơ sỏ hạ tầng đồng bộ</a></li>
                        <li><a class="mucluc7" href="">1. An ninh tốt</a></li>
                        <li><a class="mucluc8" href="">1. Thiết kế hiện đại</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>

    <!-- POPUP LỌC KẾT QUẢ MÀN 480 -->
    <div class="popup_locketqua hidden">
        <div class="popup_locketqua_padding">
            <div class="popup_locketqua_heading flex align_items justify_content_sb">
                <div class="popup_locketqua_heading1">Lọc kết quả</div>
                <div class="popup_locketqua_heading2 close_popup_locketqua">Đóng</div>
            </div>
            <div class="popup_locketqua_content">
                <div class="popup_locketqua_content_select">
                    <select class="select_option js-states form-control">
                        <option value="">Toàn quốc</option>
                    </select>
                </div>
                <div class="popup_locketqua_content_select">
                    <select class="select_option js-states form-control">
                        <option value="">Quận huyện</option>
                    </select>
                </div>
                <div class="popup_locketqua_content_select">
                    <select class="select_option js-states form-control">
                        <option value="">Loại bất động sản</option>
                    </select>
                </div>
                <div class="popup_locketqua_content_select">
                    <select class="select_option js-states form-control">
                        <option value="">Khoảng giá</option>
                    </select>
                </div>
                <div class="popup_locketqua_content_select">
                    <select class="select_option js-states form-control">
                        <option value="">Trạng thái</option>
                    </select>
                </div>
                <div class="popup_locketqua_content_select">
                    <select class="select_option js-states form-control">
                        <option value="">Tiến độ</option>
                    </select>
                </div>

                <div class="popup_locketqua_content_btn">Áp dụng</div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript" src="<? echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>assets/js/slick.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>assets/js/js_duy.js"></script>
<script>
active_single_header('duan');
$('.ketthuc_xemthem').click(function() {
    $('.show_xemthem').toggleClass('hidden');
    $('.show_thugon').toggleClass('hidden');
    $('.img_xemthem').toggleClass('hidden');
})

$('.js_slider-ch').slick({
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrow: true,
    prevArrow: '<button class="slick-prev prev-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/DSDA_new_left.png" alt=""></button>',
    nextArrow: '<button class="slick-next next-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/DSDA_new_right.png" alt=""></button>',
    responsive: [{
        breakpoint: 1025,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
        }
    }],
    responsive: [{
        breakpoint: 481,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
        }
    }]
});
</script>
<script>
$(".select_option").select2({
    width: "100%",
});

// CLOSE/SHOW POPUP LỌC KẾT QUẢ MÀN 480
//CLOSE
$('.close_popup_locketqua').click(function() {
    $('.popup_locketqua').addClass('hidden');
})
//SHOW
$('.loc_480_1').click(function() {
    $('.popup_locketqua').removeClass('hidden');
})

// ĐÓNG MỞ MỤC LỤC
// MỞ
$('.them1class').click(function() {
    $('.body_ketthuc_khung2').addClass('block');
})
// ĐÓNG
$('.dong_mucluc').click(function() {
    $('.body_ketthuc_khung2').removeClass('block');
})
</script>
