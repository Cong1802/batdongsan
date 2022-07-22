<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick-theme.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_d_sdn.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
</head>

<body>
    <div id="body_thong_tin">
        <div class="thongtin flex">
            <div class="thongtin_khoi1">
                <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
            </div>
            <div class="thongtin_khoi2">
                <div class="thongtin_khoi2_header">
                    <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
                </div>
                <div class="thongtin_khoi2_noidung">
                    <div class="thongtin_khoi2_noidung_padding">
                        <div class="thongtin_khoi2_noidung_img">
                            <img class="post_anh" src="<? echo base_url(); ?>assets/images/img_du_an/bg_chitiet_moigioi.png" alt="">
                            <div class="thay_anh flex align_item_c click_anh currsor_p">
                                <div class="thay_anh_img">
                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/camera.png" alt="">
                                </div>
                                <div class="thay_anh_text">Thay đổi ảnh bìa</div>
                            </div>
                            <input type="file" name="ct_img" class="chon_anh">
                        </div>
                        <div class="thongtin_khoi2_noidung_info">
                            <div class="thongtin_khoi2_noidung_info_suv flex">
                                <div class="thongtin_khoi2_noidung_info_img mr_r24px">
                                    <img class="thay_avatar" src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                    <div class="thongtin_khoi2_noidung_info_img_sub click_thay_avatar">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/camera_avatar.png" alt="">
                                    </div>
                                    <input type="file" class="chon_anh_2">
                                </div>
                                <div class="thongtin_khoi2_noidung_info_text">
                                    <div class="thongtin_khoi2_noidung_info_text1">Nguyễn Ngọc Tuyết Phương</div>
                                    <div class="thongtin_khoi2_noidung_info_text2">123 người theo dõi</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="luong_tk_doanhnghiep mr_b32px">
                    <div class="div_heading flex jus_sb align_item_c mr_b16px">
                        <div class="div_heading_text fz_24_5">Ảnh giới thiệu công ty</div>
                        <div class="div_heading_sup_tt flex fz16_5 main_color">
                            <div class="div_heading_bo_cuc mr_r24px currsor_p">Thay đổi bố cục</div>
                            <div class="div_heading_them_anh click_them_anh currsor_p click_popup_themanh">Thêm ảnh</div>
                            <input type="file" name="them_img" class="them_anh" multiple>
                        </div>
                    </div>
                    <div class="div_not_anh hidden">
                        <div class="div_not_anh_text">
                            Chưa có ảnh nào
                        </div>
                    </div>
                    <!-- TK DOANH NGHIỆP -->
                    <div class="khung_chua_anh">
                        <div class="khung_chua_anh_padding flex flex_w">
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="luong_tk_ngmua">
                    <div class="thongtin_khoi2_noidung_icon flex jus_sb">
                        <div class="div_text_thongtin fz_24_5">Thông tin</div>
                        <div class="div_chinhsua flex mr_b16px show_popup_chinhsua currsor_p">
                            <div class="thongtin_khoi2_noidung_icon_img">
                                <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua_ttcn.png" alt="">
                            </div>
                            <div class="thongtin_khoi2_noidung_icon_text main_color">Chỉnh sửa</div>
                        </div>
                    </div>
                    <div class="thongtin_khoi2_noidung_content mr_b32px">
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Email:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">ABSX123@gmail.com</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Số điện thoại:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">0123456789</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Hoạt động:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">Doanh nghiệp</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>

                        <!-- TK DOANH NGHIỆP -->
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Lĩnh vực:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">Tư vấn thiết kế</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Mã số thuế:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">0123456789</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Năm thành lập:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">20/10/1995</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Trang web:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">Chưa cập nhật</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Vốn điều lệ:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">1.000 tỷ</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>

                        <!-- TK CHO THUÊ, TK NGƯỜI MUA -->
                        <div class="thongtin_khoi2_noidung_content_suv hidden">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Giới tính:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">Nam</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv hidden">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Tỉnh thành:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">Định Công, Hoàng Mai. Hà Nội</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv hidden">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Quận huyện:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">Định Công, Hoàng Mai. Hà Nội</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv hidden">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Phường xã:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">Định Công, Hoàng Mai. Hà Nội</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Địa chỉ:</div>
                                <div class="thongtin_khoi2_noidung_content_text2 thongtin_khoi2_noidung_content_text2_scrooll">Định Công, Hoàng Mai. Hà Nội</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">URL trang profile:</div>
                                <div class="div_scrool_x">
                                    <div class="thongtin_khoi2_noidung_content_text2 thongtin_khoi2_noidung_content_text2_scrooll mr_r16px">https://batdongsan3S.com/abc/kkkks
                                </div>
                                </div>
                                <div class="thongtin_khoi2_noidung_img_saochep">
                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/saochep.png" alt="">
                                </div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Giới thiệu:</div>
                                <div class="thongtin_khoi2_noidung_content_text22">Lời giới thiệu chân thật từ đa
                                    cấp, đa cấp làm ăn uy tín, đa cấp không lừa đảo </div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                    </div>
                    <div class="thongtin_khoi2_noidung_button">
                        <div class="thongtin_khoi2_noidung_button_text">
                            Đổi mật khẩu
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="thongtin_khoi_footer">
            <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
        </div>
    </div>
    <!-- POPUP Chỉnh sửa thông tin cá nhân -->
    <div class="popup_ttcn hidden">
        <div class="popup_ttcn_overlay close_popup"></div>
        <div class="popup_ttcn_padding">
            <!-- TK cho thuê, người bán. nhà môi giới --- TK người mua, thuê -->
            <div class="popup_ttcn_padding_text hidden">Chỉnh sửa thông tin cá nhân</div>
            <!-- TK DOANH NGHIỆP -->
            <div class="popup_ttcn_padding_text">Chỉnh sửa thông tin doanh nghiệp</div>

            <div class="popup_ttcn_input">
                <div class="popup_ttcn_input_khoi">
                    <div class="popup_ttcn_input_khoi_sub flex mr_b16px">
                        <div class="popup_ttcn_input_khoi_sub1 hidden">
                            <div class="popup_ttcn_input_khoi1_text">Họ tên <span>*</span></div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <input type="text" placeholder="Nhập họ tên">
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub1">
                            <div class="popup_ttcn_input_khoi1_text">Tên công ty <span>*</span></div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <input type="text" placeholder="Nhập tên công ty">
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub1">
                            <div class="popup_ttcn_input_khoi1_text">Số điện thoại <span>*</span></div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <input type="text" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub1">
                            <div class="popup_ttcn_input_khoi1_text">Trang web</div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <input type="text" placeholder="Nhập trang web">
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub1">
                            <div class="popup_ttcn_input_khoi1_text">Vốn điều lệ</div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <input type="text" placeholder="Nhập vốn điều lệ">
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub1 hidden">
                            <div class="popup_ttcn_input_khoi1_text">Ngày sinh <span>*</span></div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <input type="date" placeholder="Nhập họ tên">
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub1">
                            <div class="popup_ttcn_input_khoi1_text">Năm thành lập</div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <input type="date" placeholder="Nhập họ tên">
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub1">
                            <div class="popup_ttcn_input_khoi1_text">Mã số thuế</div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <input type="text" placeholder="Nhập mã số thuế">
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub1">
                            <div class="popup_ttcn_input_khoi1_text">Lĩnh vực <span>*</span></div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <select name="" id="" class="select_option js-states form-control">
                                    <option value="">Chọn Lĩnh vực</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub1">
                            <div class="popup_ttcn_input_khoi1_text">Tỉnh thành <span>*</span></div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <select name="" id="" class="select_option js-states form-control">
                                    <option value="">Chọn tỉnh thành</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub1">
                            <div class="popup_ttcn_input_khoi1_text">Quận huyện <span>*</span></div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <select name="" id="" class="select_option js-states form-control">
                                    <option value="">Chọn quận huyện</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>

                        <!-- w100pt -->
                        <div class="popup_ttcn_input_khoi_sub1">
                            <div class="popup_ttcn_input_khoi1_text">Phường xã</div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <select name="" id="" class="select_option js-states form-control">
                                    <option value="">Chọn phường xã</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub1 w100pt">
                            <div class="popup_ttcn_input_khoi1_text">Địa chỉ chi tiết</div>
                            <div class="popup_ttcn_input_khoi1_ip">
                                <input type="text" placeholder="Nhập địa chỉ chi tiết">
                            </div>
                        </div>
                        <div class="popup_ttcn_input_khoi_sub">
                            <div class="popup_ttcn_input_khoi1_text">Giới thiệu <span></span></div>
                            <div class="popup_ttcn_input_khoi1_ip_h h119px">
                                <textarea name="" id="" placeholder="Nhập giới thiệu"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup_ttcn_button">
                <div class="popup_ttcn_button1">
                    <button class="button_huy currsor_p mr_r24px">Hủy</button>
                    <button class="button_capnhat currsor_p">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP THÊM ẢNH -->
    <div class="popup_themanh hidden">
        <div class="popup_themanh_overlay"></div>
        <div class="popup_themanh_padding">
            <div class="them_nhieu_anh flex flex_w">
                <div class="popup_themanh_anh_tieude flex mr_b40px mr_r24px">
                    <div class="popup_themanh_anh mr_r16px">
                        <img class="them_avatar" src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                        <div class="chon_lai_anh currsor_p">Chọn lại ảnh</div>
                    </div>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Nhập tiêu đề ảnh"></textarea>
                </div>
            </div>
            <div class="popup_themanh_button flex jus_sc">
                <div class="popup_themanh_huy currsor_p">Hủy</div>
                <div class="popup_themanh_dang currsor_p">Đăng</div>
            </div>
        </div>
    </div>

    <!-- POPUP ẢNH +10 CON -->
    <div class="popup_anh_con hidden">
        <div class="popup_anh_con_padding">
            <div class="popup_anh_con_images js_slick_popup_anh_con">
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs">1</div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs">2</div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs">3</div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs">4</div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs"></div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs"></div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs"></div>
                </div>
                
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs">1a</div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs">2a</div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs">3a</div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs">4a</div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs"></div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs"></div>
                </div>
                <div class="popup_anh_con_img">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                    <div class="popup_anh_con_img_abs"></div>
                </div>
            </div>
            <div class="popup_anh_con_image js_slick_popup_anh_to">
                <div class="popup_anh_con_image_to">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                </div>
                <div class="popup_anh_con_image_to">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                </div>
                <div class="popup_anh_con_image_to">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/fig1.png" alt="">
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_duy.js"></script>
<script>
    $(".select_option").select2({
        width: "100%",
    });

    $('#ql_tk').addClass('color_click')
// Slick
$('.js_slick_popup_anh_to').slick({
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrow: true,
    prevArrow: '<button class="slick-prev prev-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/icon_DATKV_left.png" alt=""></button>',
    nextArrow: '<button class="slick-next next-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/icon_DATKV_right.png" alt=""></button>',
});
$('.js_slick_popup_anh_con').slick({
    dots: true,
    slidesToShow: 7,
    slidesToScroll: 1,
    arrow: true,
    prevArrow: '<button class="slick-prev prev-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/icon_DATKV_left.png" alt=""></button>',
    nextArrow: '<button class="slick-next next-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/icon_DATKV_right.png" alt=""></button>',
});
</script>

<script>
    $(document).ready(function(){
        // var duy1 = document.getElementsByClassName('khung_chua_anh-img')
        $(".khung_chua_anh-img:last-child").addClass("click_show_popup_img_con");
    })
    $('.click_show_popup_img_con').click(function(){
        // $('.popup_anh_con').removeClass('hidden');
        // alert(duy);
    })
// $(document). (function(){
//   $(".popup_anh_con_img .popup_anh_con_img_abs:nth-child(3)").css("background-color", "yellow");
// });
</script>
</body>

</html>