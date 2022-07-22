
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Đăng tin trước đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/frontend/css/css_q.css">
</head>

<body>
    <div class="wrapper_all">
        <header class="position_r">
            <?php require_once APPPATH.'views/site/includes/da_header.php' ?>
        </header>
        <div class="dangtin_container w_100 back_f7f8fc responsive_fixed">
            <div class="dangtin_hedding">
                <div class="lease_link d_flex align_c">
                    <a href="" class="lease_link-trangchu cursor_p">
                        <p class="font_s14 color_grey3">Trang chủ</p>
                    </a>
                    <span class="lease_link-img">
                        <img src="<? echo base_url(); ?>assets/images/arrow_r_back.png" alt="">
                    </span>
                    <a href="" class="lease_link-chothue cursor_p">
                        <p class="font_s14 color_grey3">Loại đăng tin</p>
                    </a>
                    <span class="lease_link-img">
                        <img src="<? echo base_url(); ?>assets/images/arrow_r_back.png" alt="">
                    </span>
                    <a href="" class="lease_link-chothue cursor_p">
                        <p class="font_s14 color_green">Soạn tin đăng</p>
                    </a>
                </div>
                <div class="lease_title mr_t_26">
                    <div class="lease_title-time font_s26 color_grey line_h30 font_w600">Đăng tin bất động sản miễn phí
                    </div>
                    <div class="lease_title-number d_flex">
                        <span class="font_s16 line_h24 color_grey font_w500 white_s_nw lease_title-number--motifi">Lưu ý:</span>
                        <span class="font_s16 line_h24 color_grey m_l_8">Tính năng Đăng tin miễn phí chỉ dành cho khách
                            hàng chưa từng có tài khoản trên Batdongsan3s.vn. Nếu bạn đã có tài khoản, vui lòng đăng
                            nhập và đăng tin trên trang Dịch vụ của Batdongsan3s.vn tại đây</span>
                    </div>
                </div>
            </div>
            <div class="dangtin_input_thongtin mr_t_24">
                <div class="dangtin_input_item pa_24_32 back_w border_r_8">
                    <div class="">
                        <p class="color_green font_w500 line_h24 font_s16">Thông tin cơ bản</p>
                    </div>
                    <div class="thongtin_input_map d_flex mr_t_29 pl_pr_22">
                        <div class="input_map-left ">
                            <div class="the-input mr_r_54">
                                <p class="line_h20 font_s16 font_w500 color_grey">Tên dự án <span class="chudo">*</span>
                                </p>
                                <div class="khung_input mr_t_8">
                                    <input type="text" placeholder="Nhập tên dự án">
                                </div>
                            </div>
                            <div class="d_flex align_c mr_t_17 flex_w ">
                                <span class="mr_r_17 font_s14 line_h16 font_w500 color_grey">Loại hình <span class="chudo">*</span></span>
                                <span class="dangtin-left-radio d_flex align_c mr_r_17">
                                    <input type="radio" name="radio_dangtin" class="cursor_p" id="check_mua" checked>
                                    <span class="mr_l_9 font_s14 line_h16 font_w500 color_grey">Mua bán</span>
                                </span>
                                <span class="dangtin-left-radio d_flex align_c">
                                    <input type="radio" name="radio_dangtin" class="cursor_p" id="check_thue">
                                    <span class="mr_l_9 font_s14 line_h16 font_w500 color_grey">Cho thuê</span>
                                </span>
                            </div>
                            <div class="the-input d_flex mr_r_54 the-input_xuong_res">
                                <div class="dangtin_khunginput_chonloai  mr_t_17 w_100">
                                    <p class="line_h20 font_s16 font_w500 color_grey">Loại bất động sản<span class="chudo">*</span></p>
                                    <div class="khung_input mr_t_8">
                                        <select name="" id="onclick_chonloai" class="size-14 select_option">
                                            <option selected disabled value="" class="">Chọn loại bất động sản</option>
                                            <option value="1">Căn hộ</option>
                                            <option value="1">Nhà riêng</option>
                                            <option value="1">Nhà mặt phố</option>
                                            <option value="1">Shophouse, Nhà phố thương mại</option>
                                            <option value="1">Biệt thự liền kề</option>
                                            <option value="1">Đất</option>
                                            <option value="1">Đất nền dự án</option>
                                            <option value="1">Bất động sản khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" mr_t_17 w_50 mr_l_12 dangtin_khunginput_chonloai-hien hidden">
                                    <p class="line_h20 font_s16 font_w500 color_grey">Bất động sản chi tiết <span class="chudo">*</span></p>
                                    <div class="khung_input mr_t_8">
                                        <select name="" id="onclick_chonloai_bds" class="size-14 select_option">
                                            <option selected disabled value="" class="">Bất động sản chi tiết</option>
                                            <option value="">Bất động sản chi tiết</option>
                                            <option value="">Căn hộ mini</option>
                                            <option value="">Căn hộ trung cấp</option>
                                            <option value="">Căn hộ cao cấp</option>
                                            <option value="">Căn hộ Penthouse</option>
                                            <option value="">Căn hộ Duplex</option>
                                            <option value="">Căn hộ Skyvilla</option>
                                            <option value="">Căn hộ loft house</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="the-input mr_r_54 mr_t_21 ">
                                <p class="line_h20 font_s16 font_w500 color_grey">Tỉnh/ thành phố <span class="chudo">*</span></p>
                                <div class="khung_input mr_t_8">
                                    <select name="" id="" class="size-14 select_option">
                                        <option selected disabled value="" class="">Chọn tỉnh/ thành phố</option>
                                        <option value="">Tỉnh Phú Thọ</option>
                                    </select>
                                </div>
                            </div>
                            <div id="the-input_quan" class="the-input mr_r_54 mr_t_21  ">
                                <p class="line_h20 font_s16 font_w500 color_grey">Quận huyện <span class="chudo">*</span></p>
                                <div class="khung_input mr_t_8">
                                    <select name="" id="" class="size-14 select_option">
                                        <option selected disabled value="" class="">Chọn quận huyện</option>
                                        <option value="">Thanh Thủy</option>
                                    </select>
                                </div>
                            </div>
                            <div id="the-input--res-mot" class="the-input  mr_r_54 mr_t_21">
                                <p class="line_h20 font_s16 font_w500 color_grey">Phường, xã</span></p>
                                <div class="khung_input mr_t_8">
                                    <select name="" id="" class="size-14 select_option">
                                        <option selected disabled value="" class="">Chọn phường, xã</option>
                                        <option value="">Thạch Đồng</option>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="the-input the-input--res mr_r_54 mr_t_21">
                                <p class="line_h20 font_s16 font_w500 color_grey">Đường phố</span></p>
                                <div class="khung_input mr_t_8">
                                    <select name="" id="" class="size-14 select_option">
                                        <option selected disabled value="" class="">Chọn Đường/ phố</option>
                                        <option value="">Khu 8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="the-input the-input--res mr_r_54 mr_t_21">
                                <p class="line_h20 font_s16 font_w500 color_grey">Địa chỉ chi tiết </span></p>
                                <div class="khung_input mr_t_8">
                                    <input type="text" placeholder="Nhập địa chỉ chi tiết">
                                </div>
                            </div>

                        </div>
                        <div class="input_map-right  mr_t_20">
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d251637.95196238213!2d105.6189045!3d9.779349!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1653901105958!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dangtin_input_item back_w border_r_8 mr_t_24">
                    <div class="dangtin_input-title pa_24_32_0">
                        <p class="color_green font_w500 line_h24 font_s16">Thông tin mô tả</p>
                    </div>
                    <div class="dangtin_mota pa_0_54_24 mr_t_29">
                        <div class="dangtin_mota-dong1 d_flex w_100">
                            <div class="dangtin_mota-dong1-left w_50 mr_r_12">
                                <div class="dangtin_mota-cot1-gia d_flex">
                                    <div class="dangtin_mota-dong1-gia-input w_100">
                                        <p class="line_h20 font_s16 font_w500 color_grey">Giá tiền (VNĐ)<span class="chudo">*</span></p>
                                        <div class="d_flex">
                                            <div class="dangtin_nhapgia  mr_t_8 w_60 m_r_16">
                                                <div onclick="giacodinh(this)" class="khung_input mr_t_0 btn_opacity btn_tat btn_nhap_gia position_r">
                                                    <input type="text" id="number" placeholder="Nhập giá cố định">
                                                    <div class="dangtin_mota-thue-thang position_a font_s14 color_grey3 hidden"><span class="position_r z_index_1">Tháng</span></div>
                                                </div>
                                                <div class="d_flex z_index_100 space_b flex_column_re">
                                                    <div class="dangtin_mota-thoathuan d_flex mr_t_12 align_c">
                                                        <div class="" id="radio_click">
                                                            <input type="checkbox" id="radio_button">
                                                        </div>
                                                        <div class="color_grey font_s14 line_h16 font_w500 mr_l_9">Giá
                                                            thỏa thuận</div>
                                                    </div>
                                                    <div class="btn_opacity mr_t_6 font_s12 line_h14 color_grey">
                                                        <p class="ren_number">0 triệu</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dangtin_mota-dong1-khoanggia w_40 mr_t_8">
                                                <div class="dangtin_btn-khoanggia btn_tat_khoanggia chuxanh_nentrang pa_10_0 btn_opacity cursor_p" id="gia_open_khoanggia">
                                                    <p class="font_s16 line_h19 font_w500">Khoảng giá</p>
                                                </div>
                                                <div class="btn_gia_max hidden mr_t_0 khung_input pos_re">
                                                    <input type="text" placeholder="Giá max" id="number_max">
                                                    <span class="img_delete_mo cursor_p"><img src="<? echo base_url(); ?>assets/images/delete.png" alt=""></span>
                                                    <div class="btn_opacity mr_t_6 font_s12 line_h14 color_grey float_r">
                                                        <p class="ren_number_max">0 triệu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dangtin_mota-dong3 mr_t_22">
                                    <p class="font_w500 font_s16 line_h20 color_grey">Diện tích (m2) <span class="chudo">*</span></p>
                                    <div class="dangtin_mota-dong3-left d_flex">
                                        <div class="dangtin_mota-dong3_m2 w_60 m_r_16 mr_t_8">
                                            <div class="btn_dt_nhap khung_input mr_t_0">
                                                <input type="text" placeholder="Nhập diện tích" id="number_dt_1">
                                            </div>
                                            <!-- <div class="btn_dt_mo hidden khung_input mr_t_0">
                                                <input type="text" placeholder="Nhập diện tích từ" id="number_dt_2">
                                            </div> -->
                                            <p class="font_s12 line_h14 color_grey mr_t_8 ren_number_dt_2">Quy đổi: 00,00 triệu/m2</p>
                                        </div>
                                        <div class=" dangtin_mota-dong3_khoangm2 w_40 mr_t_8">
                                            <div class="dangtin_btn_khoangm2 chuxanh_nentrang pa_10_0 btn_dt cursor_p" id="btn_dt_dong">
                                                <p class="font_s16 line_h19 font_w500">Khoảng diện tích</p>
                                            </div>
                                            <div class="btn_dt_mo hidden mr_t_0 khung_input pos_re">
                                                <input type="text" placeholder="Đến" id="number_dt_2">
                                                <span class="img_dt_delete cursor_p"><img src="<? echo base_url(); ?>assets/images/delete.png" alt=""></span>
                                                <div class="btn_opacity mr_t_6 font_s12 line_h14 color_grey">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dangtin_mota-dong1-right w_50 mr_l_12 mr_t_3">
                                <xdiv class="">
                                    <p class="color_grey font_w500 line_h20 font_s14">Hướng nhà</p>
                                    <div class="khung_input mr_t_8">
                                        <select name="" id="" class="size-14 select_option">
                                            <option selected disabled value="" class="">Chọn hướng nhà</option>
                                            <option value="">HTSKDDL</option>
                                        </select>
                                    </div>
                                </xdiv>
                                <div class="mr_t_21">
                                    <div class="dangtin_mota-dong2 ">
                                        <p class="color_grey font_s14 font_w500 line_h20">Tình trạng pháp lý</p>
                                        <div class="khung_input mr_t_8">
                                            <select name="" id="" class="size-14 select_option">
                                                <option selected disabled value="" class="">Chọn tình trạng pháp lý
                                                </option>
                                                <option value="">HTSKDDL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="dangtin_mota-dong4 mr_t_21">
                            <p class="font_w500 font_s16 line_h20 color_grey">Tên tiêu đề <span class="chudo">*</span>
                            </p>
                            <div class="khung_input">
                                <input type="text" placeholder="Nhập diện tích">
                            </div>

                        </div>
                        <div class="dangtin_mota-dong5 mr_t_21">
                            <p class="font_w500 font_s16 line_h20 color_grey">Mô tả <span class="chudo">*</span></p>
                            <div class="mr_t_8 dangtin_mota_textarea textarea">
                                <textarea name="tdn_mota" id="" cols="30" rows="5" placeholder="Nhập nội dung"></textarea>
                            </div>
                        </div>
                        <div class="dangtin_mota-dong6 mr_t_24 khung_input">
                            <select name="" id="" class="size-14 select_option">
                                <option selected disabled value="" class="">Chọn tag</option>
                                <option value="">Dữ liệu cập nhật sau</option>
                            </select>
                            <img src="<? echo base_url(); ?>assets/images/tag.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="dangtin_input_item back_w border_r_8 mr_t_24">
                    <div class="dangtin_img pa_24_32">
                        <div class="dangtin_img-title">
                            <p class="font_w500 font_s16 line_h24 color_green">Thông tin hình ảnh</p>
                            <p class="font_s14 line_h16 color_grey mr_t_8">Thêm ít nhất 3 ảnh cho bài đăng để đạt hiệu
                                quả tốt hơn.</p>
                        </div>
                        <div class="dangtin_img_input border_r_8 d_flex align_c flex_center pa_t_b_16 mr_t_24">
                            <div class="dangtin_img_input-text text_a_c">
                                <p class="font_s14 line_h16 color_grey">Tin đăng có hình ảnh thường hiệu quả hơn tới 59%
                                    so với tin đăng không có hình ảnh.<br>
                                    (Tối đã 10 ảnh)
                                </p>
                                <!-- div thêm ảnh  -->
                                <div class="test">
                                    <div class="dangtin-upload-img d_flex flex_center" id="images">
                                        <!-- <div class="dangtin-upload-img-hover">
                                        <div class="d_flex space_B">
                                            <div class="dangtin-upload-img-hover-trai">
                                                <img src="<? echo base_url(); ?>assets/images/xoay_trai.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/xoay_phai.png" alt="">
                                            </div>
                                            <div class="dangtin-upload-img-hover-trai">
                                                <img src="<? echo base_url(); ?>assets/images/xoa.png" alt="">
                                            </div>
                                        </div>
                                        <div class="dangtin-upload-img-hover-text">
                                            <p class="font_s14 line_h16 color_white">Đặt ảnh đại diện</p>
                                        </div>
                                    </div> -->
                                    </div>
                                </div>
                                <input type="file" onchange="preview()" id="file_input" accept="image/png,image/jpeg" multiple class="input_an">
                                <div class="flex butt_add_pic" id="dangtin_butt_add_pic">
                                    <img src="<? echo base_url(); ?>assets/images/camera.png" class="wh_22_18 right-8" alt="">
                                    <p class="color_green">Thêm Ảnh</p>
                                </div>
                                <p class="dangtin_upload--chudo text_a_c mr_t_51 font_s14 line_h16 color_reb_2 ">Lưu ý: Hình ảnh không được là
                                    ảnh sao chép trên Internet, không chứa logo, thông tin của website khác, kích thước
                                    tối thiểu 300 X 300 Px</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="dangtin_form back_w border_r_8 mr_t_24 pa_24_32 box_shadow_10">
                    <p class="font_w500 font_s16 line_h24 color_green">Thông tin liên hệ </p>
                    <div class="dangtin_form_input d_flex">
                        <div class="dangtin_form_input-ten-email w_50 mr_r_12 mr_t_29">
                            <div class="dangtin_form_input_dong1">
                                <p class="font_w500 font_s16 line_h20 color_grey">Tên liên hệ <span class="chudo">*</span></p>
                                <div class="dangtin_form_input-ten khung_input mr_t_8">
                                    <input type="text" placeholder="Nhập tên liên hệ">
                                </div>
                            </div>
                            <div class="dangtin_form_input-sdt mr_t_21">
                                <p class="font_w500 font_s16 line_h20 color_grey">Số điện thoại <span class="chudo">*</span></p>
                                <div class="khung_input mr_t_8">
                                    <input type="text" placeholder="Nhập số điện thoại">
                                </div>
                            </div>

                        </div>
                        <div class="dangtin_form_input-email w_50 mr_l_12 mr_t_29">
                            <p class="font_w500 font_s16 line_h20 color_grey">Email <span class="chudo">*</span></p>
                            <div class="khung_input mr_t_8">
                                <input type="text" placeholder="Nhập email">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dangtin_btn-dang-hen">
                    <div class="dangtin_btn-luu-dang d_flex align_c flex_center mr_t_32">
                        <div class="dangtin_btn-dang chutrang_nenxanh pa_11_0 d_flex cursor_p" id="btn_dangngay">
                            <p class="font_s16 line_h19 font_w500 mr_r_8">Đăng ngay</p>
                            <div class="d_flex">
                                <img src="<? echo base_url(); ?>assets/images/mui_ten_xanh.png" alt="">
                            </div>
                        </div>
                        <div class="dangtin_btn_chon mr_t_0 mr_l_16 position_r">
                            <div onclick="anhien(this)" class="dangtin_btn_chon-cha d_flex back_w border_r_8 flex_center align_c mr_r_8  cursor_p">
                                <p class="color_grey3 font_s14 line_h16">Chọn</p>
                                <span><img src="<? echo base_url(); ?>assets/images/mui_ten_xuong.png" alt=""></span>
                            </div>
                            <div onclick="henlichdt(this)" class="dangtin_btn_chon-con d_flex back_w border_r_8 align_c cursor_p position_a hidden">
                                <p class="font_s14 color_grey3 line_h16">Hẹn lịch đăng tin</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_shadow_10 back_w border_r_8 mr_t_32 pa_32"></div>
            </div>
            <div class="popup_dangtin_lenlich d_flex align_c flex_center hidden">
                <div class="popup_dangtin_lenlich-ovelay" id="btn_dangtin_lenlich"></div>
                <div class="popup_dangtin_lenlich-wrapper border_r_8 back_w z_index_1 box_shadow_10">
                    <div class="popup_dangtin_lenlich-title">
                        <p class="font_w600 font_s24 line_h28 color_grey">Lên lịch đăng tin</p>
                    </div>
                    <div class="popup_dangtin_lenlich-text mr_t_24">
                        <p class="font_s16 line_h24 color_grey">Lên lịch đăng tin vào thời gian phù hợp nhất để tương
                            tác với nhiều khách hàng hơn hoặc tự chọn ngày giờ đăng tin trong tương lai.</p>
                    </div>
                    <div class="popup_dangtin_input d_flex mr_t_32">
                        <div class="popup_dangtin_input_left khung_input pos_re mr_r_12 mr_t_0">
                            <input type="date">
                        </div>
                        <div class="popup_dangtin_input_right khung_input pos_re mr_l_12 mr_t_0">
                            <input type="time" value="16:21">
                        </div>
                    </div>
                    <div class="popup_dangtin-lenlich-btn d_flex w_100 flex_center mr_t_32">
                        <div class="dangtin-lenlich-btn chuxanh_nentrang pa_11_0 mr_r_12 cursor_p" id="huy_lenlich">
                            <p>Hủy</p>
                        </div>
                        <div class="dangtin-lenlich-btn chutrang_nenxanh pa_11_0 mr_l_12 cursor_p" id="luu_lenlich">
                            <p>Lưu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup_dangtin_lenlich_doi-time d_flex align_c flex_center hidden">
                <div class="popup_dangtin_lenlich-ovelay" id="btn_dangtin_capnhat"></div>
                <div class="popup_dangtin_lenlich-wrapper border_r_8 back_w z_index_1 box_shadow_10">
                    <div class="popup_dangtin_lenlich-title">
                        <p class="font_w600 font_s24 line_h28 color_grey">Lên lịch đăng tin</p>
                    </div>
                    <div class="popup_dangtin_lenlich-text mr_t_24">
                        <p class="font_s16 line_h24 color_grey">Lên lịch đăng tin vào thời gian phù hợp nhất để tương
                            tác với nhiều khách hàng hơn hoặc tự chọn ngày giờ đăng tin trong tương lai.</p>
                    </div>
                    <div class="popup_dangtin_input d_flex mr_t_32">
                        <div class="popup_dangtin_input_left khung_input pos_re mr_r_12 mr_t_0">
                            <input type="date">
                        </div>
                        <div class="popup_dangtin_input_right khung_input pos_re mr_l_12 mr_t_0">
                            <input type="time" value="16:21">
                        </div>
                    </div>
                    <div class="popup_dangtin-lenlich-btn d_flex w_100 flex_center mr_t_32">
                        <div class="dangtin-lenlich-btn chuxanh_nentrang pa_11_0 mr_r_12 cursor_p" id="huy_lenlich_time">
                            <p>Hủy</p>
                        </div>
                        <div class="dangtin-lenlich-btn chutrang_nenxanh pa_11_0 mr_l_12 cursor_p" id="luu_lenlich">
                            <p>Cập nhật</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="click_hoantat_thongtin popup_hien hidden">
                <div class="overlay" id="onclick_overlay_hoantat"></div>
                <div class="popup_hoantat-thongtin-wrapper z_index_1 back_w border_r_8 box_shadow_10">
                    <span class="popup_hoantat-thongtin-back d_inline_flex align_c cursor_p" id="btn_overlay_hoantat">
                        <span class="back_page mr_r_13 d_flex align_c"><img src="<? echo base_url(); ?>assets/images/back.png" alt=""></span>
                        <span class="font-medium font_s14 font_w500 color_grey ">Quay lại</span>
                    </span>
                    <div class="popup_hoantat-thongtin-wrapper-container mr_t_15_am">
                        <div class="popup_hoantat-thongtin-title text_c">
                            <p class="color_green font_s24 line_h28 font_w600">Hoàn tất thông tin</p>
                        </div>
                        <div class="khung_input mr_t_32">
                            <input type="text" placeholder="Email *">
                        </div>
                        <div class="khung_input">
                            <input type="text" placeholder="Mật khẩu *">
                        </div>
                        <div class="khung_input">
                            <input type="text" placeholder="Nhập lại mật khẩu *">
                        </div>
                        <div class="khung_input">
                            <input type="text" placeholder="Số điện thoại *">
                        </div>
                        <div class="khung_input">
                            <input type="text" placeholder="Họ và tên * ">
                        </div>
                        <div class="khung_input  ">
                            <select name="" id="onclick_hoantat" class="size-14 select_option">
                                <option selected disabled value="" class="">Loại tài khoản * </option>
                                <option value="0">Người thuê, mua</option>
                                <option value="1">Người môi giới</option>
                                <option value="2">Người cho thuê, bán</option>
                                <option value="3">Doanh nghiệp</option>
                            </select>
                        </div>
                        <div class="khung_input dangtin_hoantat_hien hidden">
                            <select name="" id="" class="size-14 select_option">
                                <option selected disabled value="" class="">Lĩnh vực *</option>
                                <option value="">Chủ đầu tư</option>
                                <option value="">Thi công xây dưng</option>
                                <option value="">Tư vấn thiết kế</option>
                                <option value="">Sàn giao dịch bất động sản</option>
                                <option value="">Trang trí nội thất</option>
                                <option value="">Vật liệu xây dựng</option>
                                <option value="">Các lĩnh vực khác</option>
                            </select>
                        </div>
                        <div class="khung_input hidden dangtin_hoantat_hien">
                            <input type="text" placeholder="Mã số thuế">
                        </div>
                        <div class="popup_hoantat-thongtin-btn chutrang_nenxanh pa_11_0 mr_t_32 cursor_p" id="onclick_hoantat_dangtin">
                            <p class="font_w500 font_s16 line_h19">Hoàn tất</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="onclick_hoantat-thongtin-otp popup_hien hidden">
                <div class="overlay_1" id="close_overlay_1"></div>
                <div class="popup_hoantat-thongtin-wrapper z_index_1 back_w border_r_8 box_shadow_10">
                    <div class="account_back d_flex" id="close_overlay_btn_1">
                        <div class="back_page"><img src="<? echo base_url(); ?>assets/images/back.png" alt=""></div>
                        <p class="font-medium font_s14">Quay lại</p>
                    </div>
                    <div class="account_log-in account_otp-beside w_100 quen_mk_otp">
                        <div class="account_title font_s24 text_c color_green font_w_600 mr_t_4_am line_h28">Nhập mã OTP
                        </div>
                        <div class="font_s14 m_t_b_24 text_l font_w500 color_grey mr_t_32">Mã xác thực gửi về Email
                            “ABC@gamil.com”</div>
                        <div class="account_otp-beside-otp">
                            <form method="" class="digit-group digit-group-otp font_s24 d_flex space_b dangtin_otp_input">
                                <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
                                <input type="text" id="digit-2" name="digit-2" data-next="digit-3" />
                                <input type="text" id="digit-3" name="digit-3" data-next="digit-4" />
                                <input type="text" id="digit-4" name="digit-4" data-next="digit-5" />
                                <input type="text" id="digit-5" name="digit-5" data-next="digit-6" />
                                <input type="text" id="digit-6" name="digit-6" />
                            </form>
                        </div>
                        <div class="account_otp_number d_flex flex_end mt_20 align_c ">
                            <a href="#" class="font_s16 mr_r_12 color_grey cursor_p btn">Gửi lại mã xác thực</a>
                            <div class="account_otp_nhap-capcha-img position_r cursor_p">
                                <img src="<? echo base_url(); ?>assets/images/load_capcha.png" alt="">
                            </div>
                        </div>
                        <div class="account_otp-btn btn_blue bg_green border_none account_log-in_btn" id="btn_xacthuc_dangtin"> Xác thực </div>
                        <div>
                            <div class="line_h24 color_yelow font_s16 text_c cursor_p mr_t_24" onclick="back_page()">
                                Nhập lại Email</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="onclick_dangtin-thanhcong popup_hien hidden">
                <div class="overlay" id="close_overlay_otp"> </div>
                <div class="popup_dangtin_thanhcong z_index_1 border_r_8 back_w box_shadow_10">
                    <p class="font_w500 font_s14 line_h16 color_grey text_c">Đăng tin thành công</p>
                    <p class="mr_t_8 color_grey font_s12 line_h14 text_c">Bạn còn 2 lượt đăng tin miễn phí trong ngày
                    </p>
                    <div class="d_flex w_100 flex_center">
                        <img src="<? echo base_url(); ?>assets/images/wish.png" alt="">
                    </div>
                    <div class="mr_t_16">
                        <p class="text_c font_w_500 color_grey font_s14">Chúc mừng bạn đã trở thành thành viên của
                            Batdongsan3S</p>
                    </div>
                    <div class=" mr_t_24  d_flex flex_center">
                        <div class="popup_dangtin_thanhcong-btn bg_green d_flex flex_center align_c w_100 cursor_p">
                            <div class="color_white font_s16 text_c line_h19 font_w500" id="onclick_quanly">Quản lý tin
                                đăng</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup_canhbao popup_hien hidden">
                <div class="overlay" id="close_overlay_canhbao"> </div>
                <div class="popup_warning_post d_flex flex_column flex_center align_c back_w border_r_8 box_shadow_10 z_index_1">
                    <div class="popup_warning_post-img">
                        <img src="<? echo base_url(); ?>assets/images/canhbao.png" alt="">
                    </div>
                    <div class="popup_warning_post-text text_c mr_t_24  ">
                        <p class="font_s14 line_h16 color_grey font_w500">Bạn cần đăng nhập để thực hiện thao tác này
                        </p>
                    </div>
                    <div class="popup_warning_post-btn_tong d_flex space_b mr_t_24 w_100">
                        <div class="popup_warning_post-btn chuden_nentrang cursor_p" id="onclick_huy_canhbao">
                            <p class="font_s16 font_w500 line_h19 color_grey">Hủy</p>
                        </div>
                        <a href="../trang-dang-nhap.html" class="popup_warning_post-btn chutrang_nenxanh chutrang_nenxanh cursor_p">
                            <p class="font_s16 font_w500 line_h19">Đăng nhập</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url(); ?>/assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>/assets/js/slick.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>/assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>/assets/js/js_c.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>/assets/js/js_quang.js"></script>
<script src="../../ckeditor/ckeditor.js"></script>
<script>   CKEDITOR.replace('tdn_mota');</script>
<script>
    $(".select_option").select2({
        width: "100%",
    });
    $('.lease_btn-xemthem').click(function() {
        $('.lease_show-xemthem').toggleClass('hidden');
        $('.lease_show-thugon').toggleClass('hidden');
        $('.lease-xemthem').toggleClass('hidden');
    })
    var file_input = document.getElementById("file_input");
    var imagecontainer = document.getElementById("images");
    var num_of_file = document.getElementById("num_of_file");

    function preview() {
        function createImg(tagName, src = '', className, appParent, text = '') {
            let element = document.createElement(tagName);

            if (src != '') {
                element.setAttribute("src", src);
            } else {
                element.innerText = text;
            }

            element.setAttribute("class", className);

            appParent.appendChild(element);
        }
        file = `${file_input.files.length}`;
        if (file > 10) {
            alert("Bạn chỉ có thể tải tối đa 10 file ảnh");
        } else {
            let stt = 0;
            for (i of file_input.files) {
                console.log(file_input.files)
                let reader = new FileReader();
                let figure = document.createElement("figure");
                let figcap = document.createElement("figcaption");
                figure.appendChild(figcap);
                reader.onload = () => {
                    let img = document.createElement("img");
                    img.setAttribute("src", reader.result);
                    figure.insertBefore(img, figcap);
                    let div = document.createElement('div');
                    figcap.appendChild(div);
                    createImg('img', '<? echo base_url(); ?>assets/images/xoay_trai.png', 'dangtin_icon_upload_trai', div);
                    createImg('img', '<? echo base_url(); ?>assets/images/xoay_phai.png', 'dangtin_icon_upload_phai', div);
                    let div2 = document.createElement('div');
                    figcap.appendChild(div2);
                    createImg('img', '<? echo base_url(); ?>assets/images/xoa.png', 'dangtin_icon_upload_xoa', div2);
                    createImg('p', '', 'dangtin_icon_upload_nutbam', figcap, 'Đặt ảnh đại diện');

                    // --xoay
                    var degreen = 0;

                    function rotate(degree, a) {
                        // For webkit browsers: e.g. Chrome
                        a.css({
                            WebkitTransform: 'rotate(' + degree + 'deg)'
                        });
                        // For Mozilla browser: e.g. Firefox
                        a.css({
                            '-moz-transform': 'rotate(' + degree + 'deg)'
                        });

                        // Animate rotation with a recursive call
                        setTimeout(function() {
                            rotate(++degree);
                        }, 65);
                    }
                    $('.dangtin_icon_upload_trai').click(function() {
                        degreen -= 90;
                        var a = $(this).parents("figure").find("img");
                        rotate(degreen, a);
                    });
                    $('.dangtin_icon_upload_phai').click(function() {
                        var b = $(this).parents("figure").find("img");
                        degreen += 90;
                        rotate(degreen, b);
                    });
                    // --xoa
                    $('.dangtin_icon_upload_xoa').click(function() {
                        $(this).parents("figure").remove();
                    });
                    // phong to
                    $('.dangtin_icon_upload_phai').click(function() {
                        $(this).parents("figure").find("img").addClass("xoay_phai");
                    });

                    // hover
                    $('figure').click(function() {
                        $('figure').addClass('');
                    })
                    // avt

                    $(".dangtin_icon_upload_nutbam").click(function() {
                        $(".dangtin_icon_upload_nutbam").each(function() {
                            $(this).text("Đặt làm ảnh đại diện");
                            // $(this).text(".dangtin_icon_upload_nutbam");
                        })
                        $(this).text("Ảnh đại diện");
                        $("figure").first().removeClass("avt");
                        $(this).parents("figure").attr("id", "123");
                        var file_input = document.getElementById("123");
                        $("#images").prepend(file_input);
                        $(this).parents("figure").attr("id", "");
                        $("figure").first().addClass("avt");

                        // $(".avt").find(".dangtin_icon_upload_nutbam").text("Ảnh đại diện");
                    })
                    // $('.dangtin_icon_upload_nutbam').click(function() {

                    //     $(this).parents(".dangtin-upload-img").append($(this).parents('figure').html);
                    //     $(this).parents("figure").remove();
                    // });
                }
                imagecontainer.appendChild(figure);
                reader.readAsDataURL(i)
            }
        }

    }

    $('#number').on('keyup', function() {
        number = $(this).val();
        if (number < 1000) {
            numbers = number / 1000;
            var dv = "Nghìn"
        } else if (number < 1000000000) {
            numbers = number / 1000000;
            var dv = "Triệu"
        } else {
            numbers = number / 1000000000;
            var dv = "Tỷ"
        }
        $(".ren_number").text(numbers + dv)
    });
    $('#number_max').on('keyup', function() {
        number = $(this).val();

        if (number < 1000) {
            numbers = number / 1000;
            var dv = "Nghìn"
        } else if (number < 1000000000) {
            numbers = number / 1000000;
            var dv = "Triệu"
        } else {
            numbers = number / 1000000000;
            var dv = "Tỷ"
        }
        $(".ren_number_max").text(numbers + dv)
    });
    // -----------------
    $('#check_thue').click(function() {
        if ($('#check_thue').is(':checked')) {
            $('#number').on('keyup', function() {
                number = $(this).val();
                if (number < 1000) {
                    numbers = number / 1000;
                    var dv = "Nghìn/tháng"
                } else if (number < 1000000000) {
                    numbers = number / 1000000;
                    var dv = "Triệu/tháng"
                } else {
                    numbers = number / 1000000000;
                    var dv = "Tỷ/tháng"
                }
                $(".ren_number").text(numbers + dv)
            });
            $('#number_max').on('keyup', function() {
                number_max = $(this).val();

                if (number < 1000) {
                    numbers_max_thue = number_max / 1000;
                    var dv = "Nghìn/tháng"
                } else if (number_max < 1000000000) {
                    numbers_max_thue = number_max / 1000000;
                    var dv = "Triệu/tháng"
                } else {
                    numbers_max_thue = number_max / 1000000000;
                    var dv = "Tỷ/tháng"
                }
                console.log(dv)
                $(".ren_number_max").text(numbers_max_thue + dv)
            });

            $('#number ,#number_dt_1,#number_max,#number_dt_2').on('keyup', function() {
                var giacodinh = Number($('#number').val());
                var dientich1 = Number($('#number_dt_1').val());
                if (dientich1 != 0 || dientich1 != '') {
                    var tieude = "Quy đổi: ";
                    var dv = " triệu/m2/tháng";
                    var ketqua = 0;
                    ketqua = giacodinh / dientich1;
                    console.log(ketqua);
                    $('.ren_number_dt_2').html(tieude + ketqua + dv);
                    if (ketqua < 1000000000) {
                        kq1 = ketqua / 1000000;
                    } else if (ketqua < 1000000000) {
                        kq1 = ketqua / 10000000;
                    }
                    $('.ren_number_dt_2').html(tieude + kq1 + dv);
                }
                var number_max = Number($('#number_max').val());
                if (number_max != 0 || number_max != '') {
                    var tieude = "Quy đổi: ";
                    var dv = " triệu/m2/tháng";
                    var ketqua1 = 0;
                    var ketqua2 = 0;
                    ketqua1 = giacodinh / dientich1;
                    ketqua2 = number_max / dientich1;
                    if (ketqua1 < 1000000000 && ketqua2 < 1000000000) {
                        kq1 = ketqua1 / 1000000;
                        kq2 = ketqua2 / 1000000;
                    };

                    if (kq1 < kq2) {
                        $('.ren_number_dt_2').html(tieude + kq1 + ' - ' + kq2 + dv);
                    } else {
                        $('.ren_number_dt_2').html(tieude + kq2 + ' - ' + kq1 + dv);
                    }
                }
                var dientich2 = Number($('#number_dt_2').val());
                if (dientich2 != 0 || dientich2 != '') {
                    var tieude = "Quy đổi: ";
                    var dv = " triệu/m2/tháng";
                    var ketqua1 = 0;
                    var ketqua2 = 0;
                    ketqua1 = giacodinh / dientich1;
                    ketqua2 = number_max / dientich2;
                    if (ketqua1 < 1000000000 && ketqua2 < 1000000000) {
                        kq1 = ketqua1 / 1000000;
                        kq2 = ketqua2 / 1000000;
                    }
                    if (kq1 < kq2) {
                        $('.ren_number_dt_2').html(tieude + kq1 + ' - ' + kq2 + dv);
                    } else {
                        $('.ren_number_dt_2').html(tieude + kq2 + ' - ' + kq1 + dv);
                    }
                }
            });
        }
    });

    $('#number ,#number_dt_1,#number_max,#number_dt_2').on('keyup', function() {
        var giacodinh = Number($('#number').val());
        var dientich1 = Number($('#number_dt_1').val());
        console.log(dientich1);
        if (dientich1 != 0 || dientich1 != '') {
            var tieude = "Quy đổi: ";
            var dv = " triệu/m2";
            var ketqua = 0;
            ketqua = giacodinh / dientich1;
            console.log(ketqua);
            $('.ren_number_dt_2').html(tieude + ketqua + dv);
            if (ketqua < 1000000000) {
                kq1 = ketqua / 1000000;
            } else if (ketqua < 1000000000) {
                kq1 = ketqua / 10000000;
            }
            $('.ren_number_dt_2').html(tieude + kq1 + dv);
        }
        var number_max = Number($('#number_max').val());
        if (number_max != 0 || number_max != '') {
            var tieude = "Quy đổi: ";
            var dv = " triệu/m2";
            var ketqua1 = 0;
            var ketqua2 = 0;
            ketqua1 = giacodinh / dientich1;
            ketqua2 = number_max / dientich1;
            var kq1 = 0;
            var kq2 = 0;
            if (ketqua1 < 1000000000 && ketqua2 < 1000000000) {
                kq1 = ketqua1 / 1000000;
                kq2 = ketqua2 / 1000000;
            };
            if (kq1 < kq2) {
                $('.ren_number_dt_2').html(tieude + kq1 + ' - ' + kq2 + dv);
            } else {
                $('.ren_number_dt_2').html(tieude + kq2 + ' - ' + kq1 + dv);
            }
        }
        var dientich2 = Number($('#number_dt_2').val());
        if (dientich2 != 0 || dientich2 != '') {
            var tieude = "Quy đổi: ";
            var dv = " triệu/m2";
            var ketqua1 = 0;
            var ketqua2 = 0;
            ketqua1 = giacodinh / dientich1;
            ketqua2 = number_max / dientich2;
            if (ketqua1 < 1000000000 && ketqua2 < 1000000000) {
                kq1 = ketqua1 / 1000000;
                kq2 = ketqua2 / 1000000;
            }
            if (kq1 <= kq2) {
                $('.ren_number_dt_2').html(tieude + kq1 + ' - ' + kq2 + dv);
            } else {
                $('.ren_number_dt_2').html(tieude + kq2 + ' - ' + kq1 + dv);
            }
        }
    });
</script>

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
    
</style>
