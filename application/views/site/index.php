<?php
$y = date('Y', $ire_the_big_one['time_create']);
$m = date('m', $ire_the_big_one['time_create']);
$d = date('d', $ire_the_big_one['time_create']);
$dir = "upload/".$y."/".$m."/".$d."";
$y3 = date('Y', $ire_newest_the_big_one['time_create']);
$m3 = date('m', $ire_newest_the_big_one['time_create']);
$d3 = date('d', $ire_newest_the_big_one['time_create']);
$dir3 = "upload/".$y3."/".$m3."/".$d3."";
$y6 = date('Y', $ire_ate_the_big_one['time_create']);
$m6 = date('m', $ire_ate_the_big_one['time_create']);
$d6 = date('d', $ire_ate_the_big_one['time_create']);
$dir6 = "upload/".$y6."/".$m6."/".$d6."";
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title><?= $page_title ?></title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/style_t.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/homepage.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/style_header_d.css">
</head>

<body>
    <div class="wrapper_all effect_q">
        <header class="position_r header_hover">
            <!-- <div class="d_flex align_c"> -->
            <?php require_once APPPATH.'views/site/includes/inc_header.php'; ?>
            <!-- </div> -->
            <div class="filter_banner position_a  ">
                <div class="them_div_de_po_r"></div>
                <div class="div_filter duy_fig_tc_2 ">
                    <div class="duy_fig_768_1 d_flex">
                        <div class="div_search d_flex align_c">
                            <div class="div_select2">
                                <select class="select_option js-states form-control">
                                    <option selected disabled>Chọn loại hình</option>
                                    <option>Mua bán</option>
                                    <option>Dự án</option>
                                    <option>Cho thuê</option>
                                </select>
                            </div>

                            <div class="input_search position_r">
                                <input readonly class="btn_list_option cursor_p" type="text"
                                    placeholder="Từ khóa tìm kiếm">
                                <!-- <div class="list_option position_a">
                                <ul>
                                    <li>
                                        <label class="lable_radio" for="radio_filter0"><input id="radio_filter0" name="radio_filter" type="radio"> Căn hộ chung cư</label>
                                        <div class="sub_option">
                                            <ul>
                                                <li><label for="radio_filter_chil0"><input id="radio_filter_chil0" name="radio_filter" type="radio">Chung cư cao cấp</label></li>
                                                <li><label for="radio_filter_chil1"><input id="radio_filter_chil1" name="radio_filter" type="radio">Chung cư mini</label></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><label class="lable_radio" for="radio_filter1"><input id="radio_filter1" name="radio_filter" type="radio"> Nhà riêng</label></li>
                                    <li><label class="lable_radio" for="radio_filter2"><input id="radio_filter2" name="radio_filter" type="radio"> Nhà mặt phố</label></li>
                                    <li><label class="lable_radio" for="radio_filter3"><input id="radio_filter3" name="radio_filter" type="radio"> Shophouse, Nhà phố thương mại</label></li>
                                    <li><label class="lable_radio" for="radio_filter4"><input id="radio_filter4" name="radio_filter" type="radio"> Biệt thự liền kề</label></li>
                                    <li><label class="lable_radio" for="radio_filter5"><input id="radio_filter5" name="radio_filter" type="radio"> Đất</label></li>
                                    <li><label class="lable_radio" for="radio_filter6"><input id="radio_filter6" name="radio_filter" type="radio"> Đất nền dự án</label></li>
                                    <li><label class="lable_radio" for="radio_filter7"><input id="radio_filter7" name="radio_filter" type="radio"> Kho, Nhà xưởng</label></li>
                                    <li><label class="lable_radio" for="radio_filter8"><input id="radio_filter8" name="radio_filter" type="radio"> Khác</label></li>
                                </ul>
                            </div> -->
                            </div>

                            <div class="btn_filter btn_filter_click cursor_p">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_3748_97143)">
                                        <path
                                            d="M1 4.75001H3.736C3.95064 5.53975 4.41917 6.23691 5.06933 6.73395C5.71948 7.23098 6.51512 7.50027 7.3335 7.50027C8.15188 7.50027 8.94752 7.23098 9.59767 6.73395C10.2478 6.23691 10.7164 5.53975 10.931 4.75001H23C23.2652 4.75001 23.5196 4.64466 23.7071 4.45712C23.8946 4.26959 24 4.01523 24 3.75001C24 3.4848 23.8946 3.23044 23.7071 3.04291C23.5196 2.85537 23.2652 2.75001 23 2.75001H10.931C10.7164 1.96028 10.2478 1.26312 9.59767 0.766084C8.94752 0.269047 8.15188 -0.000244141 7.3335 -0.000244141C6.51512 -0.000244141 5.71948 0.269047 5.06933 0.766084C4.41917 1.26312 3.95064 1.96028 3.736 2.75001H1C0.734784 2.75001 0.48043 2.85537 0.292893 3.04291C0.105357 3.23044 0 3.4848 0 3.75001C0 4.01523 0.105357 4.26959 0.292893 4.45712C0.48043 4.64466 0.734784 4.75001 1 4.75001ZM7.333 2.00001C7.67912 2.00001 8.01746 2.10265 8.30525 2.29494C8.59303 2.48724 8.81734 2.76055 8.94979 3.08032C9.08224 3.40009 9.1169 3.75196 9.04937 4.09142C8.98185 4.43089 8.81518 4.74271 8.57044 4.98745C8.3257 5.23219 8.01388 5.39887 7.67441 5.46639C7.33494 5.53391 6.98307 5.49926 6.6633 5.3668C6.34353 5.23435 6.07022 5.01005 5.87793 4.72226C5.68564 4.43448 5.583 4.09613 5.583 3.75001C5.58353 3.28605 5.76807 2.84124 6.09615 2.51316C6.42422 2.18509 6.86903 2.00054 7.333 2.00001Z"
                                            fill="#666666" />
                                        <path
                                            d="M23 11H20.264C20.0497 10.2101 19.5814 9.51268 18.9313 9.01544C18.2812 8.5182 17.4855 8.24878 16.667 8.24878C15.8485 8.24878 15.0528 8.5182 14.4027 9.01544C13.7526 9.51268 13.2843 10.2101 13.07 11H1C0.734784 11 0.48043 11.1054 0.292893 11.2929C0.105357 11.4804 0 11.7348 0 12C0 12.2652 0.105357 12.5196 0.292893 12.7071C0.48043 12.8947 0.734784 13 1 13H13.07C13.2843 13.7899 13.7526 14.4873 14.4027 14.9846C15.0528 15.4818 15.8485 15.7512 16.667 15.7512C17.4855 15.7512 18.2812 15.4818 18.9313 14.9846C19.5814 14.4873 20.0497 13.7899 20.264 13H23C23.2652 13 23.5196 12.8947 23.7071 12.7071C23.8946 12.5196 24 12.2652 24 12C24 11.7348 23.8946 11.4804 23.7071 11.2929C23.5196 11.1054 23.2652 11 23 11ZM16.667 13.75C16.3209 13.75 15.9825 13.6474 15.6948 13.4551C15.407 13.2628 15.1827 12.9895 15.0502 12.6697C14.9178 12.3499 14.8831 11.9981 14.9506 11.6586C15.0181 11.3191 15.1848 11.0073 15.4296 10.7626C15.6743 10.5178 15.9861 10.3512 16.3256 10.2836C16.6651 10.2161 17.0169 10.2508 17.3367 10.3832C17.6565 10.5157 17.9298 10.74 18.1221 11.0278C18.3144 11.3156 18.417 11.6539 18.417 12C18.4165 12.464 18.2319 12.9088 17.9039 13.2369C17.5758 13.5649 17.131 13.7495 16.667 13.75Z"
                                            fill="#666666" />
                                        <path
                                            d="M23 19.25H10.931C10.7164 18.4603 10.2478 17.7631 9.59767 17.2661C8.94752 16.769 8.15188 16.4998 7.3335 16.4998C6.51512 16.4998 5.71948 16.769 5.06933 17.2661C4.41917 17.7631 3.95064 18.4603 3.736 19.25H1C0.734784 19.25 0.48043 19.3554 0.292893 19.5429C0.105357 19.7304 0 19.9848 0 20.25C0 20.5152 0.105357 20.7696 0.292893 20.9571C0.48043 21.1447 0.734784 21.25 1 21.25H3.736C3.95064 22.0397 4.41917 22.7369 5.06933 23.2339C5.71948 23.731 6.51512 24.0003 7.3335 24.0003C8.15188 24.0003 8.94752 23.731 9.59767 23.2339C10.2478 22.7369 10.7164 22.0397 10.931 21.25H23C23.2652 21.25 23.5196 21.1447 23.7071 20.9571C23.8946 20.7696 24 20.5152 24 20.25C24 19.9848 23.8946 19.7304 23.7071 19.5429C23.5196 19.3554 23.2652 19.25 23 19.25ZM7.333 22C6.98688 22 6.64854 21.8974 6.36075 21.7051C6.07297 21.5128 5.84866 21.2395 5.71621 20.9197C5.58376 20.5999 5.5491 20.2481 5.61663 19.9086C5.68415 19.5691 5.85082 19.2573 6.09556 19.0126C6.3403 18.7678 6.65213 18.6012 6.99159 18.5336C7.33106 18.4661 7.68293 18.5008 8.0027 18.6332C8.32247 18.7657 8.59578 18.99 8.78807 19.2778C8.98036 19.5656 9.083 19.9039 9.083 20.25C9.08221 20.7139 8.89758 21.1586 8.56956 21.4866C8.24154 21.8146 7.79689 21.9992 7.333 22Z"
                                            fill="#666666" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3748_97143">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="btn_search_to_hon">
                                <div class="btn_close_duy cursor_p hidden">
                                    <img src="<?php echo base_url(); ?>assets/images/img_du_an/close_x.png">
                                </div>
                                <div class="btn_search_to">
                                    <div class="btn_search cursor_p">
                                        <img src="<?php echo base_url(); ?>assets/images/search_svg.svg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="bat-dong-san-gan-day.html" class="btn_map_to">
                            <div class="btn_map cursor_p">
                                <img src="<?php echo base_url(); ?>assets/images/map_svg.svg">
                            </div>
                            <div class="btn_map_text">Bản đồ</div>
                        </a>
                    </div>

                    <div class="khung_tukhoa hidden">
                        <div class="khung_tukhoa_padding">
                            <div class="khung_tukhoa_padding_sub1">
                                <div class="khung_tukhoa_div1">
                                    <div class="khung_tukhoa_div1_heading">Có phải bạn muốn tìm</div>
                                </div>
                                <div class="khung_tukhoa_div1_sub">
                                    <div class="tu_khoa_timkiem">Mua chung cư vinhome Wespoit W1 tại Hà Nội</div>
                                    <div class="tu_khoa_timkiem">Mua biệt thự tại Ba Vì</div>
                                    <div class="tu_khoa_timkiem">The Sun Avenue</div>
                                    <div class="tu_khoa_timkiem">Mua chung cư vinhome Wespoit W1 tại Hà Nội</div>
                                    <div class="tu_khoa_timkiem">Mua biệt thự tại Ba Vì</div>
                                    <div class="tu_khoa_timkiem">The Sun Avenue</div>
                                    <div class="tu_khoa_timkiem">Mua chung cư vinhome Wespoit W1 tại Hà Nội</div>
                                </div>

                                <!-- NHẬP KÍ TỰ TRÊN THANH TÌM KIẾM SẼ HIỆN RA DIV NÀY -->
                                <div class="khung_tukhoa_khi_nhap_ky_tu hidden">
                                    <div class="khung_tukhoa_khi_nhap_ky_tu_tex">Chung cư giá rẻ tại Hà Nội</div>
                                    <div class="khung_tukhoa_khi_nhap_ky_tu_tex">Chung cư giá rẻ tại Hà Nội</div>
                                    <div class="khung_tukhoa_khi_nhap_ky_tu_tex">Chung cư giá rẻ tại Hà Nội</div>
                                    <div class="khung_tukhoa_khi_nhap_ky_tu_tex">Chung cư giá rẻ tại Hà Nội</div>
                                </div>
                            </div>

                            <div class="border_trang_chu"></div>
                            <div class="khung_tukhoa_padding_sub2">
                                <div class="khung_tukhoa_div2">
                                    <div class="khung_tukhoa_div1">Tin đăng gợi ý</div>
                                </div>
                                <div class="khung_tindang">
                                    <div class="khung_tindang_nav">
                                        <div class="khung_tindang_padding">
                                            <a href="#" class="khung_tindang_padding_suv flex">
                                                <div class="khung_tindang_padding_img">
                                                    <img src="<?php echo base_url(); ?>assets/images/img_du_an/bacsila.jpg"
                                                        alt="">
                                                </div>
                                                <div class="khung_tindang_padding_khungtext">
                                                    <div class="khung_tindang_padding_khungtext1">
                                                        Đất thật giá thật, diện tích lớn tại Biển Cát Sổ
                                                        sẵn công chứng trong ngày
                                                    </div>
                                                    <div
                                                        class="khung_tindang_padding_icon_text khung_tindang_padding_icon_text_mb8px">
                                                        <div class="khung_tindang_padding_icon">
                                                            <img src="<?php echo base_url(); ?>assets/images/img_du_an/address_hi.png"
                                                                alt="">
                                                        </div>
                                                        <div class="khung_tindang_padding_text">Định Công, Hoàng Mai,
                                                            Hà
                                                            Nội</div>
                                                    </div>
                                                    <div class="khung_tindang_padding_icon_text_suv">
                                                        <div class="khung_tindang_padding_icon_text ">
                                                            <div class="khung_tindang_padding_icon">
                                                                <img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_home.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="khung_tindang_padding_text">200 m2</div>
                                                        </div>
                                                        <div class="khung_tindang_padding_icon_text">
                                                            <div class="khung_tindang_padding_icon">
                                                                <img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_money.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="khung_tindang_padding_text_money">1.5 tỷ</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="border_tk_td"></div>
                                    </div>
                                    <div class="khung_tindang_nav">
                                        <div class="khung_tindang_padding">
                                            <a href="#" class="khung_tindang_padding_suv flex">
                                                <div class="khung_tindang_padding_img">
                                                    <img src="<?php echo base_url(); ?>assets/images/img_du_an/bacsila.jpg"
                                                        alt="">
                                                </div>
                                                <div class="khung_tindang_padding_khungtext">
                                                    <div class="khung_tindang_padding_khungtext1">
                                                        Đất thật giá thật, diện tích lớn tại Biển Cát Sổ
                                                        sẵn công chứng trong ngày
                                                    </div>
                                                    <div
                                                        class="khung_tindang_padding_icon_text khung_tindang_padding_icon_text_mb8px">
                                                        <div class="khung_tindang_padding_icon">
                                                            <img src="<?php echo base_url(); ?>assets/images/img_du_an/address_hi.png"
                                                                alt="">
                                                        </div>
                                                        <div class="khung_tindang_padding_text">Định Công, Hoàng Mai,
                                                            Hà
                                                            Nội</div>
                                                    </div>
                                                    <div class="khung_tindang_padding_icon_text_suv">
                                                        <div class="khung_tindang_padding_icon_text ">
                                                            <div class="khung_tindang_padding_icon">
                                                                <img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_home.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="khung_tindang_padding_text">200 m2</div>
                                                        </div>
                                                        <div class="khung_tindang_padding_icon_text">
                                                            <div class="khung_tindang_padding_icon">
                                                                <img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_money.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="khung_tindang_padding_text_money">1.5 tỷ</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="border_tk_td"></div>
                                    </div>
                                    <div class="khung_tindang_nav">
                                        <div class="khung_tindang_padding">
                                            <a href="#" class="khung_tindang_padding_suv flex">
                                                <div class="khung_tindang_padding_img">
                                                    <img src="<?php echo base_url(); ?>assets/images/img_du_an/bacsila.jpg"
                                                        alt="">
                                                </div>
                                                <div class="khung_tindang_padding_khungtext">
                                                    <div class="khung_tindang_padding_khungtext1">
                                                        Đất thật giá thật, diện tích lớn tại Biển Cát Sổ
                                                        sẵn công chứng trong ngày
                                                    </div>
                                                    <div
                                                        class="khung_tindang_padding_icon_text khung_tindang_padding_icon_text_mb8px">
                                                        <div class="khung_tindang_padding_icon">
                                                            <img src="<?php echo base_url(); ?>assets/images/img_du_an/address_hi.png"
                                                                alt="">
                                                        </div>
                                                        <div class="khung_tindang_padding_text">Định Công, Hoàng Mai,
                                                            Hà
                                                            Nội</div>
                                                    </div>
                                                    <div class="khung_tindang_padding_icon_text_suv">
                                                        <div class="khung_tindang_padding_icon_text ">
                                                            <div class="khung_tindang_padding_icon">
                                                                <img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_home.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="khung_tindang_padding_text">200 m2</div>
                                                        </div>
                                                        <div class="khung_tindang_padding_icon_text">
                                                            <div class="khung_tindang_padding_icon">
                                                                <img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_money.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="khung_tindang_padding_text_money">1.5 tỷ</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="border_tk_td"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="duy_select_boloc hidden">
                        <div class="duy_select_boloc_sub">
                            <div class="duy_select_boloc_div">
                                <select name="" id="" class="duy_liu select_option js-states form-control">
                                    <option value="">Thành phố</option>
                                </select>
                            </div>
                            <div class="duy_select_boloc_div">
                                <select name="" id="" class="duy_liu select_option js-states form-control">
                                    <option value="">Quận huyện</option>
                                </select>
                            </div>
                            <div class="duy_select_boloc_div">
                                <select name="" id="" class="duy_liu select_option js-states form-control">
                                    <option value="">Phường xã</option>
                                </select>
                            </div>
                            <div class="duy_select_boloc_div">
                                <select name="" id="" class="duy_liu select_option js-states form-control">
                                    <option value="">Đường phố</option>
                                </select>
                            </div>
                            <div class="duy_select_boloc_div">
                                <select name="" id="" class="duy_liu select_option js-states form-control">
                                    <option value="">Loại bất động sản</option>
                                </select>
                            </div>
                            <div class="duy_select_boloc_div">
                                <select name="" id="" class="duy_liu select_option js-states form-control">
                                    <option value="">Giá tiền</option>
                                </select>
                            </div>
                            <div class="duy_select_boloc_div">
                                <select name="" id="" class="duy_liu select_option js-states form-control">
                                    <option value="">Dự án</option>
                                </select>
                            </div>
                            <div class="duy_select_boloc_div">
                                <select name="" id="" class="duy_liu select_option js-states form-control">
                                    <option value="">Khoảng diện tích</option>
                                </select>
                            </div>
                            <div class="duy_select_boloc_div">
                                <select name="" id="" class="duy_liu select_option js-states form-control">
                                    <option value="">Hướng</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="them_layout_tk_man1024">
                <div class="them_layout_tk_man102_padding">
                    <a href="danh-sach-du-an-noi-bat.html" class="them_layout_tk_div_icon">
                        <div class="them_layout_tk_div_icon_img"><img
                                src="<?php echo base_url(); ?>assets/images/img_du_an/ic_dep_1.svg" alt="">
                        </div>
                        <div class="them_layout_tk_div_icon_text">dự án</div>
                    </a>
                    <a href="mua-ban-truoc-dang-nhap.html" class="them_layout_tk_div_icon">
                        <div class="them_layout_tk_div_icon_img"><img
                                src="<?php echo base_url(); ?>assets/images/img_du_an/ic_dep_2.svg" alt="">
                        </div>
                        <div class="them_layout_tk_div_icon_text">Mua bán</div>
                    </a>
                    <a href="cho-thue-truoc-dang-nhap.html" class="them_layout_tk_div_icon">
                        <div class="them_layout_tk_div_icon_img"><img
                                src="<?php echo base_url(); ?>assets/images/img_du_an/ic_dep_3.svg" alt="">
                        </div>
                        <div class="them_layout_tk_div_icon_text">Cho thuê</div>
                    </a>
                    <a href="danh-sach-phong-dep.html" class="them_layout_tk_div_icon">
                        <div class="them_layout_tk_div_icon_img"><img
                                src="<?php echo base_url(); ?>assets/images/img_du_an/ic_dep_4.svg" alt="">
                        </div>
                        <div class="them_layout_tk_div_icon_text">Phòng đẹp</div>
                    </a>
                    <a href="thiet-ke-nha-dep.html" class="them_layout_tk_div_icon">
                        <div class="them_layout_tk_div_icon_img"><img
                                src="<?php echo base_url(); ?>assets/images/img_du_an/ic_dep_5.svg" alt="">
                        </div>
                        <div class="them_layout_tk_div_icon_text">Nhà đẹp</div>
                    </a>
                    <a href="tin-tuc.html" class="them_layout_tk_div_icon">
                        <div class="them_layout_tk_div_icon_img"><img
                                src="<?php echo base_url(); ?>assets/images/img_du_an/ic_dep_6.svg" alt="">
                        </div>
                        <div class="them_layout_tk_div_icon_text">Tin tức</div>
                    </a>
                </div>
            </div>
        </header>
        <selection class="container pd_t_64">
            <!-- -->
            <selection class="estate_list d_flex flex_column  gp_0">
                <div class="estate_item_chart pd_t_41 d_themclass_fig1"
                    style="background-image: url(<?php echo base_url(); ?>assets/images/bds_bg_1.png);">
                    <div class="pd_lr_80 d_flex d_themclass_fig2">
                        <div class="flex_1 pd_r_36 bd_b40 duy_fb_375px reveal_fadeInUp">
                            <div class="title d_flex flex_column align_s">
                                <span class="stt d_flex align_e font_s24 font_w600 position_r duy_font_z20px">01</span>
                                <div class="font_s50 d_flex flex_column font_w600 align_e d_themclass_fig5">Bất động
                                    sản
                                    <span class="outstanding">Hấp dẫn</span>
                                </div>
                            </div>
                            <div class="selected_btn d_flex align_e mt_50 flex_end reveal fadeInRight">
                                <a href="mua-ban-truoc-dang-nhap.html"
                                    class="btn d_flex align_c pd_8_16 br_8 bd-gray gray_1">
                                    <span class="color_gray mr_20 duy_fz14_768">Xem tất cả danh sách</span>
                                    <span class="d_flex align_c d_themclass_fig11">
                                        <svg width="20" height="20" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z"
                                                stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M9 12L12 9L9 6" stroke="#666666" stroke-width="1.2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6 9H12" stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="outstanding w694_h397 position_r d_themclass_fig4 reveal_fadeInUp">
                            <div class="position_r fig_1520_1 d_themclass_fig3">
                                <img src="<?= $dir ?>/<?= $ire_the_big_one['banner_img'] ?>" alt="">
                                <div class="view">
									<img src="<?php echo base_url(); ?>/assets/images/icon_ul_li/eye_white_svg.svg" alt="">
                                    <span class="ml_8 color_white "><?= $ire_the_big_one['news_view'] ?></span>
                                </div>
                                <span class="save">
									<img src="<? echo base_url(); ?>assets/images/fi-rr-bookmark.svg" alt="">
                                </span>
                                <div class="title_out_overlay"></div>
                                <div class="title_out">
                                    <span class="font_s22 line_h30 font_w500 ellipsis_2 wb_br duy_fz14_375px"><?= $ire_the_big_one['project_name'] ?></span>
                                    <div class="duy_lai_them_div">
                                        <div class="duy_lai_them_div1">
                                            <div class="duy_lai_them_div1-1">
                                                <div class="duy_lai_them_div1-1_sub duy_fz13_375px">Địa chỉ:</div>
                                                <div class="duy_lai_them_div1-1_sub2 ellipsis_2 duy_fz13_375px"><?= $ire_the_big_one['addr_detail'] ?></div>

                                            </div>
                                            <div class="duy_lai_them_div1-2">
                                                <div class="duy_lai_them_div1-2_sub1 duy_fz13_375px">Diện tích:</div>
                                                <div class="duy_lai_them_div1-2_sub2">
                                                    <div class="duy_lai_them_div1-2_sub2_1 duy_fz13_375px"><?= $ire_the_big_one['detail_area'] ?> m2</div>
                                                    <div class="duy_lai_them_div1-2_sub2_2">Giá: <?= ($ire_the_big_one['total_investment'] < 1000000000)?number_format((float)$ire_the_big_one['total_investment']/1000000000, 2, '.', ''):$ire_the_big_one['total_investment'] / 1000000000 ?> tỷ</div>
                                                </div>
                                            </div>
                                            <a href="" class="duy_lai_them_div1_xemct duy_fz12_375px">Xem chi tiết</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="estate_sider-list pd_lr_80 d_themclass_fig6">
                    <div class="d_flex flex_w slider_js gap_24 mt_40 d_themclass_fig7">
                        <?php 
						$count_ire = count($ire_all);
						for ($i = 1; $i < $count_ire; $i++) {
							$y1 = date('Y', $ire_all[$i]['avtDate']);
							$m1 = date('m', $ire_all[$i]['avtDate']);
							$d1 = date('d', $ire_all[$i]['avtDate']);
							$dir1 = "upload/".$y1."/".$m1."/".$d1."";
							$y2 = date('Y', $ire_all[$i]['time_create']);
							$m2 = date('m', $ire_all[$i]['time_create']);
							$d2 = date('d', $ire_all[$i]['time_create']);
							$dir2 = "upload/".$y2."/".$m2."/".$d2."";
						?>
                        <div class="estate_item d_themclass_fig9">
                            <div class="estate_item_img mr_16 d_themclass_fig10">
                                <img src="<?= $dir2."/".$ire_all[$i]['banner_img'] ?>" alt="">
                                <div class="view">
									<img src="<?php echo base_url(); ?>/assets/images/icon_ul_li/eye_white_svg.svg" alt="">
                                    <span class="ml_10 color_white duy_fz12_375px"><?= $ire_all[$i]['news_view'] ?></span>
                                </div>
                                <span class="save duy_disp_none">
                                    <img src="<? echo base_url(); ?>assets/images/fi-rr-bookmark.svg" alt="">
                                </span>
                            </div>
                            <div class="estate_item_ct duy_fig_width_to">
                                <!-- chi tiet mua ban hoac chi tiet cho thue -->
                                <!-- <a href="chi-tiet-mua-ban-truoc-dang-nhap.html" class="estate_item_ct-title font_s17 blue_title ellipsis_2 font_w500 line_h24 duy_font_ct1 d_themclass_fig29"> -->
                                <a href="chi-tiet-cho-thue-truoc-dang-nhap.html"
                                    class="estate_item_ct-title font_s17 blue_title ellipsis_2 font_w500 line_h24 duy_font_ct1 d_themclass_fig29">
                                    <?= $ire_all[$i]['id'] ?>
                                </a>
                                <!-- end chi tiet mua ban hoac chi tiet cho thue -->
                                <div class="item_ct-infor mt_17 d_themclass_fig25">
                                    <div class="infor_address d_flex">
                                        <div class="icon duy_icon_20 d_flex center_center w_16">
                                            <img src="/assets/images/img_du_an/address_hi.svg" alt="">
                                        </div>
                                        <span class="font_s16 medium ml_10 ellipsis_2 duy_font_ct2"><?= $ire_all[$i]['addr_detail'] ?></span>
                                    </div>
                                    <div class="infor_acreage d_flex align_s mt_9 d_themclass_fig26">
                                        <div class="icon duy_icon_20 d_flex center_center w_16">
                                            <img src="/assets/images/img_du_an/icon_home.svg" alt="">
                                        </div>
                                        <span class="font_s16 medium ml_10 ellipsis_2 duy_font_ct2"><?= $ire_all[$i]['detail_area'] ?> m2</span>
                                    </div>
                                    <div class="infor_price d_flex space_b mt_11 d_themclass_fig26">
                                        <div class="price d_flex align_s">
                                            <div class="icon duy_icon_20 w_16">
                                                <img src="/assets/images/img_du_an/icon_money.svg" alt="">
                                            </div>
                                            <span class="font_s16 orange ml_10 ellipsis_2 duy_font_ct2"><?= $deal[$ire_all[$i]['Gia_thoa_thuan']] ?></span>
                                        </div>
                                        <div>
                                            <span class="font_s12 btn_blue-rg pd_4_8 br font_w500 duy_font_ct3"><?= $bds_type[$ire_all[$i]['bds_type']] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="estate_item_ct-people mt_6 d_flex space_b pd_t_8 pd_r_7 d_themclass_fig28 duy_disp_none">
                                    <div class="people d_flex align_c">
                                        <div class="avatar">
										<? if (file_exists($dir1."/".$ire_all[$i]['user_avt'])) { ?>
										<img src="<?= $dir1."/".$ire_all[$i]['user_avt'] ?>" alt="">
										<? } else { ?>
										<img src="/assets/images/default_avt.svg" alt="">
										<? } ?>
                                        </div>
                                        <span class="name font_s16 ml_8 duy_font_ct2"><?= ($ire_all[$i]['name'] != '')?$ire_all[$i]['name']:$ire_all[$i]['companyName'] ?></span>
                                    </div>
                                    <div class="inbox">
                                        <img src="<?php echo base_url(); ?>assets/images/chat_30svg.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="duy_them_div_hien_375">
                                <div class="duy_them_div_hien_375_img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_b_1363_17407)">
                                            <path
                                                d="M0 8C0 3.58172 3.58172 0 8 0H16C20.4183 0 24 3.58172 24 8V16C24 20.4183 20.4183 24 16 24H8C3.58172 24 0 20.4183 0 16V8Z"
                                                fill="white" fill-opacity="0.8" />
                                            <path
                                                d="M17.9177 20.9974C17.6487 20.9966 17.3825 20.9409 17.1344 20.8334C16.8864 20.726 16.6615 20.5689 16.4727 20.3712L12 15.7864L7.52732 20.3742C7.24007 20.6747 6.87168 20.879 6.47018 20.9605C6.06868 21.042 5.65269 20.9968 5.27644 20.8309C4.89645 20.6733 4.57139 20.4012 4.34369 20.0502C4.11599 19.6992 3.99625 19.2855 4.00009 18.8632V6.74946C4.00009 5.75504 4.3832 4.80135 5.06514 4.09819C5.74709 3.39503 6.672 3 7.63641 3L16.3636 3C16.8411 3 17.314 3.09698 17.7551 3.28541C18.1963 3.47384 18.5972 3.75002 18.9348 4.09819C19.2725 4.44636 19.5404 4.8597 19.7231 5.3146C19.9058 5.76951 19.9999 6.25707 19.9999 6.74946V18.8632C20.004 19.2851 19.8847 19.6986 19.6575 20.0496C19.4303 20.4006 19.1059 20.6728 18.7265 20.8309C18.4703 20.9414 18.1954 20.998 17.9177 20.9974ZM7.63641 4.49978C7.05776 4.49978 6.50282 4.7368 6.09365 5.1587C5.68448 5.58059 5.45462 6.15281 5.45462 6.74946V18.8632C5.45436 18.9882 5.49001 19.1104 5.55709 19.2145C5.62417 19.3185 5.71965 19.3998 5.83148 19.4479C5.94331 19.4961 6.06647 19.509 6.1854 19.485C6.30434 19.461 6.4137 19.4012 6.4997 19.3131L11.4909 14.1981C11.6272 14.0585 11.8115 13.9801 12.0036 13.9801C12.1958 13.9801 12.3801 14.0585 12.5164 14.1981L17.5017 19.3116C17.5877 19.3997 17.6971 19.4595 17.816 19.4835C17.935 19.5075 18.0581 19.4946 18.17 19.4464C18.2818 19.3983 18.3773 19.317 18.4444 19.213C18.5114 19.1089 18.5471 18.9867 18.5468 18.8617V6.74946C18.5468 6.15281 18.317 5.58059 17.9078 5.1587C17.4986 4.7368 16.9437 4.49978 16.365 4.49978H7.63641Z"
                                                fill="#666666" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_b_1363_17407" x="-10" y="-10" width="44" height="44"
                                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feGaussianBlur in="BackgroundImage" stdDeviation="5" />
                                                <feComposite in2="SourceAlpha" operator="in"
                                                    result="effect1_backgroundBlur_1363_17407" />
                                                <feBlend mode="normal" in="SourceGraphic"
                                                    in2="effect1_backgroundBlur_1363_17407" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>

                                </div>
                                <div class="duy_them_div_hien_375_img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 12H8.01M12 12H12.01M16 12H16.01M21 12C21 16.418 16.97 20 12 20C10.5286 20.005 9.07479 19.6807 7.745 19.051L3 20L4.395 16.28C3.512 15.042 3 13.574 3 12C3 7.58197 7.03 3.99997 12 3.99997C16.97 3.99997 21 7.58197 21 12Z"
                                            stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="duy_them_div_hien_375_img duy_them_div_hien_375_img_sub">
									<? if (file_exists($dir1."/".$ire_all[$i]['user_avt'])) { ?>
									<img src="<?= $dir1."/".$ire_all[$i]['user_avt'] ?>" alt="">
									<? } else { ?>
									<img src="/assets/images/default_avt.svg" alt="">
									<? } ?>
								</div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </selection>

            <selection class="estate_list mt_72">
                <div class="estate_item_chart"
                    style="background-image: url(<?php echo base_url(); ?>assets/images/bds_bg_1.png);">
                    <div class="pd_lr_80 d_flex d_themclass_fig8">
                        <div
                            class="flex_1 pd_r_36 bd_b40 pd_t_20 d_themclass_fig16 d_themclass_fig16_2 reveal fadeInUp  ">
                            <div class="title d_flex flex_column align_s">
                                <span class="stt d_flex align_e font_s24 font_w600 position_r duy_font_z20px">02</span>
                                <div class="font_s50 d_flex flex_column font_w600 align_e line_h71">Bất động sản <span
                                        class="outstanding">Mới nhất</span>
                                </div>
                            </div>
                            <div class="btn_group d_flex align_c mt_24 d_themclass_fig15">
                                <button
                                    class="btn btn_blue btn_170_40 font_s14 h_full mr_16 btn_ct d_themclass_fig14">Mua
                                    bán</button>
                                <button
                                    class="btn btn_170_40 font_s14 bd-gray gray_1 br_8 h_full btn_ct d_themclass_fig14">Cho
                                    thuê</button>
                            </div>
                            <div class="selected_btn d_flex flex_end mt_64 d_themclass_fig13">
                                <a href="mua-ban-truoc-dang-nhap.html"
                                    class="btn d_flex align_c pd_8_16 br_8 bd-gray gray_1 btn_219_40">
                                    <span class="color_gray mr_20 w_spance_nrap d_themclass_fig12 duy_fz12_375px">Xem
                                        tất cả danh
                                        sách</span>
                                    <span class="d_flex align_c d_themclass_fig11">
                                        <svg width="20" height="20" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z"
                                                stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M9 12L12 9L9 6" stroke="#666666" stroke-width="1.2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6 9H12" stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div
                            class="outstanding w694_h397 position_r pd_t_15 d_themclass_fig3 d_themclass_fig4_2 reveal fadeInRight">
                            <div class="position_r fig_1520_1 d_themclass_fig3">
                                <img src="<?= $dir3 ?>/<?= $ire_newest_the_big_one['banner_img'] ?>" alt="">
                                <div class="view">
									<img src="<?php echo base_url(); ?>/assets/images/icon_ul_li/eye_white_svg.svg" alt="">
                                    <span class="ml_8 color_white "><?= $ire_newest_the_big_one['news_view'] ?></span>
                                </div>
                                <span class="save">
									<img src="<? echo base_url(); ?>assets/images/fi-rr-bookmark.svg" alt="">
                                </span>
                                <div class="title_out_overlay"></div>
                                <div class="title_out">
                                    <span class="font_s22 line_h30 font_w500 ellipsis_2 wb_br duy_fz14_375px"><?= $ire_newest_the_big_one['project_name'] ?></span>
                                    <div class="duy_lai_them_div">
                                        <div class="duy_lai_them_div1">
                                            <div class="duy_lai_them_div1-1">
                                                <div class="duy_lai_them_div1-1_sub duy_fz13_375px">Địa chỉ:</div>
                                                <div class="duy_lai_them_div1-1_sub2 ellipsis_2 duy_fz13_375px"><?= $ire_newest_the_big_one['addr_detail'] ?></div>

                                            </div>
                                            <div class="duy_lai_them_div1-2">
                                                <div class="duy_lai_them_div1-2_sub1 duy_fz13_375px">Diện tích:</div>
                                                <div class="duy_lai_them_div1-2_sub2">
                                                    <div class="duy_lai_them_div1-2_sub2_1 duy_fz13_375px"><?= $ire_newest_the_big_one['detail_area'] ?> m2</div>
                                                    <div class="duy_lai_them_div1-2_sub2_2 duy_fz13_375px">Giá: <?= ($ire_newest_the_big_one['total_investment'] < 1000000000)?number_format((float)$ire_newest_the_big_one['total_investment']/1000000000, 2, '.', ''):$ire_newest_the_big_one['total_investment'] / 1000000000 ?> tỷ
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="" class="duy_lai_them_div1_xemct">Xem chi tiết</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pd_lr_80 mt_48 d_themclass_fig17">
                    <div class="row d_flex flex_w duy_fb_2_375px">
                        <?php 
						$count_newest = count($ire_newest_all);
						for ($i = 1; $i < $count_newest; $i++) {
						$y4 = date('Y', $ire_newest_all[$i]['time_create']);
						$m4 = date('m', $ire_newest_all[$i]['time_create']);
						$d4 = date('d', $ire_newest_all[$i]['time_create']);
						$dir4 = "upload/".$y4."/".$m4."/".$d4."";
						$y5 = date('Y', $ire_newest_all[$i]['avtDate']);
						$m5 = date('m', $ire_newest_all[$i]['avtDate']);
						$d5 = date('d', $ire_newest_all[$i]['avtDate']);
						$dir5 = "upload/".$y5."/".$m5."/".$d5."";
						?>
                        <div class="estate_item d_themclass_fig18 flex_column col_3">
                            <div class="estate_item_img d_themclass_fig19 mr_6 w_full max_h_234 pd_ltr_8">
                                <img src="<?= $dir4."/".$ire_newest_all[$i]['banner_img'] ?>" alt="">
                                <div class="view">
									<img src="<?php echo base_url(); ?>/assets/images/icon_ul_li/eye_white_svg.svg" alt="">
                                    <span class="ml_10 color_white "><?= $ire_newest_all[$i]['news_view'] ?></span>
                                </div>
                                <span class="save">
									<img src="<? echo base_url(); ?>assets/images/fi-rr-bookmark.svg" alt="">
                                </span>
                            </div>
                            <div class="estate_item_ct mt_16">
                                <a href="mua-ban-truoc-dang-nhap.html"
                                    class="estate_item_ct-title font_s17 blue_title ellipsis_2 pd_lr_16 font_w500 line_h24 duy_font_ct1">
                                    <?= $ire_newest_all[$i]['project_name'] ?>
                                </a>
                                <div class="item_ct-infor mt_8 pd_lr_16">
                                    <div class="infor_address d_flex align_s">
                                        <div class="icon d_flex center_center w_16 pd_t_3 duy_icon_20">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4545 8.72727C15.4545 13.1818 9.72727 17 9.72727 17C9.72727 17 4 13.1818 4 8.72727C4 7.20831 4.60341 5.75155 5.67748 4.67748C6.75155 3.60341 8.20831 3 9.72727 3C11.2462 3 12.703 3.60341 13.7771 4.67748C14.8511 5.75155 15.4545 7.20831 15.4545 8.72727Z"
                                                    stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M9.72745 10.6363C10.7818 10.6363 11.6365 9.78157 11.6365 8.72721C11.6365 7.67284 10.7818 6.81812 9.72745 6.81812C8.67309 6.81812 7.81836 7.67284 7.81836 8.72721C7.81836 9.78157 8.67309 10.6363 9.72745 10.6363Z"
                                                    stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <span
                                            class="font_s16 medium ml_10 ellipsis_2 line_h22 font_w500 duy_fz14_768"><?= $ire_newest_all[$i]['addr_detail'] ?></span>
                                    </div>
                                    <div class="infor_price d_flex space_b">
                                        <div class="infor_acreage d_flex w_40 align_s">
                                            <div class="icon d_flex center_center w_16 duy_icon_20">
                                                <img src="/assets/images/img_du_an/icon_home.svg" alt="">
                                            </div>
                                            <span class="font_s16 medium ml_10 wb_br ellipsis_2"><?= $ire_newest_all[$i]['detail_area'] ?> m2</span>
                                        </div>
                                        <div class="price d_flex align_c w_45 align_s" style="justify-content: end">
                                            <div class="icon w_16 d_flex duy_icon_20">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.98886 5.00007C9.68207 5.00486 9.43726 5.25744 9.44206 5.56422V6.16526C8.37101 6.39899 7.50007 7.17538 7.50007 8.26782C7.50007 9.55951 8.65644 10.5505 9.99754 10.5505C10.8086 10.5505 11.384 11.1011 11.384 11.7222C11.384 12.343 10.8086 12.8917 9.99754 12.8917C9.18649 12.8917 8.61102 12.343 8.61102 11.7222C8.62165 10.971 7.48944 10.971 7.50007 11.7222C7.50007 12.815 8.37016 13.5938 9.44206 13.8269V14.4366C9.43143 15.1878 10.5636 15.1878 10.553 14.4366V13.9419C11.642 13.7129 12.518 12.8325 12.495 11.7243C12.495 10.245 11.5412 9.44169 9.99754 9.44169C9.18649 9.44169 8.61102 8.89078 8.61102 8.26999C8.61102 7.65724 9.17336 7.11932 9.96716 7.10479C9.98808 7.1067 10.0091 7.10743 10.0301 7.10696C10.8225 7.12264 11.384 7.65792 11.384 8.26998C11.3734 9.02116 12.5056 9.02116 12.495 8.26998C12.495 7.16141 11.642 6.27918 10.553 6.05026V5.56422C10.5579 5.25064 10.3024 4.99516 9.98886 5.00007Z"
                                                        fill="#666666" />
                                                    <circle cx="10" cy="10" r="7.4" stroke="#666666"
                                                        stroke-width="1.2" />
                                                </svg>
                                            </div>
                                            <span class="font_s16 orange ml_10 wb_br ellipsis_2"><?= ($ire_newest_all[$i]['total_investment'] < 1000000000)?number_format((float)$ire_newest_all[$i]['total_investment']/1000000000, 2, '.', ''):$ire_newest_all[$i]['total_investment'] / 1000000000 ?> tỷ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="estate_item_ct-people mt_6 d_flex space_b bg_gray pd_8_16 br_lb_br_8">
                                    <div class="people d_flex align_c">
                                        <div class="avatar">
										<? if (file_exists($dir5."/".$ire_newest_all[$i]['user_avt'])) { ?>
										<img src="<?= $dir5."/".$ire_newest_all[$i]['user_avt'] ?>" alt="">
										<? } else { ?>
										<img src="/assets/images/default_avt.svg" alt="">
										<? } ?>
                                        </div>
                                        <span class="name font_s16 ml_8"><?= ($ire_newest_all[$i]['name'] != '')?$ire_newest_all[$i]['name']:$ire_newest_all[$i]['companyName'] ?></span>
                                    </div>
                                    <div class="inbox">
                                        <img src="<?php echo base_url(); ?>assets/images/chat_30svg.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </selection>

            <selection class="estate_list mt_48">
                <div class="estate_item_chart"
                    style="background-image: url(<?php echo base_url(); ?>assets/images/bds_bg_1.png);">
                    <div class="pd_lr_80 d_flex d_themclass_fig20 duy_flb_375">
                        <div class="flex_1 pd_r_36 bd_b40 pd_t_34 d_themclass_fig20_1 reveal fadeInUp ">
                            <div class="title d_flex flex_column align_s">
                                <span class="stt d_flex align_e font_s24 font_w600 position_r duy_font_z20px">03</span>
                                <div class="font_s50 d_flex flex_column font_w600 align_e d_themclass_fig23">Bất động
                                    sản <span class="outstanding">Bán gấp</span></div>
                            </div>
                            <div class="selected_btn d_flex align_e mt_50 flex_end">
                                <a href="mua-ban-truoc-dang-nhap.html"
                                    class="btn d_flex align_c pd_8_16 br_8 bd-gray gray_1 d_themclass_fig20_3">
                                    <span class="color_gray mr_20 duy_font_ct2 d_themclass_fig20_2">Xem tất cả danh
                                        sách</span>
                                    <span class="d_flex align_c">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z"
                                                stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M9 12L12 9L9 6" stroke="#666666" stroke-width="1.2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6 9H12" stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="outstanding position_r d_themclass_fig21 d_themclass_fig3 reveal fadeInRight">
                            <div class="position_r w694_h397 d_themclass_fig22">
                                <img src="<?= $dir ?>/<?= $ire_the_big_one['banner_img'] ?>" alt="">
                                <div class="view">
                                    <img src="<?php echo base_url(); ?>assets/images/eye_1.png" alt="">
                                    <span class="ml_8 color_white "><?= $ire_ate_the_big_one['news_view'] ?></span>
                                </div>
                                <span class="save">
								<img src="<?php echo base_url(); ?>assets/images/fi-rr-bookmark.svg" alt="">
                                </span>
                            </div>
                            <div class="title_out_overlay"></div>
                            <div class="title_out">
                                <span class="font_s22 line_h30 font_w500 ellipsis_2 wb_br duy_fz14_375px"><?= $ire_ate_the_big_one['project_name'] ?></span>
                                <div class="duy_lai_them_div">
                                    <div class="duy_lai_them_div1">
                                        <div class="duy_lai_them_div1-1">
                                            <div class="duy_lai_them_div1-1_sub duy_fz13_375px">Địa chỉ:</div>
                                            <div class="duy_lai_them_div1-1_sub2 ellipsis_2 duy_fz13_375px"><?= $ire_ate_the_big_one['addr_detail'] ?></div>

                                        </div>
                                        <div class="duy_lai_them_div1-2">
                                            <div class="duy_lai_them_div1-2_sub1 duy_fz13_375px">Diện tích:</div>
                                            <div class="duy_lai_them_div1-2_sub2">
                                                <div class="duy_lai_them_div1-2_sub2_1 duy_fz13_375px"><?= $ire_ate_the_big_one['detail_area'] ?> m2</div>
                                                <div class="duy_lai_them_div1-2_sub2_2">Giá: <?= ($ire_ate_the_big_one['total_investment'] < 1000000000)?number_format((float)$ire_ate_the_big_one['total_investment']/1000000000, 2, '.', ''):$ire_ate_the_big_one['total_investment'] / 1000000000 ?> tỷ</div>
                                            </div>
                                        </div>
                                        <a href="" class="duy_lai_them_div1_xemct duy_fz12_375px">Xem chi tiết</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="pd_lr_80 mt_40 d_themclass_fig17 d_themclass_fig17_2">
                    <div class="row d_flex flex_w">
                        <?php 
						$count_expired = count($ire_ate_all);
						for ($i = 1; $i < $count_expired; $i++) {
						$y7 = date('Y', $ire_ate_all[$i]['avtDate']);
						$m7 = date('m', $ire_ate_all[$i]['avtDate']);
						$d7 = date('d', $ire_ate_all[$i]['avtDate']);
						$dir7 = "upload/".$y7."/".$m7."/".$d7."";
						$y8 = date('Y', $ire_ate_all[$i]['time_create']);
						$m8 = date('m', $ire_ate_all[$i]['time_create']);
						$d8 = date('d', $ire_ate_all[$i]['time_create']);
						$dir8 = "upload/".$y8."/".$m8."/".$d8."";
						?>
                        <div class="estate_item col_2 d_themclass_fig27">
                            <div class="estate_item_img mr_16 d_themclass_fig24">
                                <img src="<?= $dir8."/".$ire_ate_all[$i]['banner_img'] ?>" alt="">
                                <div class="view">
                                    <img src="<?php echo base_url(); ?>assets/images/eye_1.png" alt="">
                                    <span class="ml_10 color_white"><?= $ire_ate_all[$i]['news_view'] ?></span>
                                </div>
                                <span class="save duy_disp_none">
									<img src="<? echo base_url(); ?>assets/images/fi-rr-bookmark.svg" alt="">
                                </span>
                            </div>
                            <div class="estate_item_ct estate_item_ct_duy">
                                <a href="mua-ban-truoc-dang-nhap.html"
                                    class="estate_item_ct-title font_s17 blue_title ellipsis_2 font_w500 line_h24 wb_br duy_font_ct1 d_themclass_fig29 duy_fz14_375px">
                                    <?= $ire_ate_all[$i]['project_name'] ?>
                                </a>
                                <div class="item_ct-infor mt_17 d_themclass_fig25">
                                    <div class="infor_address d_flex">
                                        <div class="icon d_flex align_s flex_center w_16 pd_t_2 duy_icon_20">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4545 8.72727C15.4545 13.1818 9.72727 17 9.72727 17C9.72727 17 4 13.1818 4 8.72727C4 7.20831 4.60341 5.75155 5.67748 4.67748C6.75155 3.60341 8.20831 3 9.72727 3C11.2462 3 12.703 3.60341 13.7771 4.67748C14.8511 5.75155 15.4545 7.20831 15.4545 8.72727Z"
                                                    stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M9.72745 10.6363C10.7818 10.6363 11.6365 9.78157 11.6365 8.72721C11.6365 7.67284 10.7818 6.81812 9.72745 6.81812C8.67309 6.81812 7.81836 7.67284 7.81836 8.72721C7.81836 9.78157 8.67309 10.6363 9.72745 10.6363Z"
                                                    stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <span
                                            class="font_s16 medium ml_10 ellipsis_2 wb_br duy_font_ct2 duy_fz13_375px"><?= $ire_ate_all[$i]['addr_detail'] ?></span>
                                    </div>
                                    <div class="infor_acreage d_flex align_s mt_9 d_themclass_fig26">
                                        <div class="icon d_flex align_s flex_center w_16 duy_icon_20">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.5 8C3.87405 7.62595 6.60919 5.4738 8.18908 4.24212C8.37149 4.09992 8.62738 4.1019 8.80799 4.24639L13.5 8"
                                                    stroke="#666666" stroke-width="1.2" stroke-linecap="round" />
                                                <path
                                                    d="M4.5 8V12.5C4.5 12.7761 4.72386 13 5 13H12C12.2761 13 12.5 12.7761 12.5 12.5V8"
                                                    stroke="#666666" stroke-width="1.2" stroke-linecap="round" />
                                                <path
                                                    d="M16.5 5H16C15.7239 5 15.5 5.22386 15.5 5.5V13.5C15.5 13.7761 15.7239 14 16 14H16.5M3.5 16V15.5C3.5 15.2239 3.72386 15 4 15H13C13.2761 15 13.5 15.2239 13.5 15.5V16"
                                                    stroke="#666666" stroke-width="1.2" stroke-linecap="round" />
                                            </svg>

                                        </div>
                                        <span
                                            class="font_s16 medium ml_10 ellipsis_2 wb_br duy_font_ct2 duy_fz13_375px"><?= $ire_ate_all[$i]['detail_area'] ?>
                                            m2</span>
                                    </div>
                                    <div class="infor_price d_flex space_b mt_11 d_themclass_fig26">
                                        <div class="price d_flex align_s">
                                            <div class="icon w_16 duy_icon_20">
                                                <img src="/assets/images/img_du_an/icon_money.svg" alt="">
                                            </div>
                                            <span
                                                class="font_s16 orange ml_10 ellipsis_2 duy_font_ct2 duy_fz13_375px">
												<?= ($ire_ate_all[$i]['total_investment'] < 1000000000)?number_format((float)$ire_ate_all[$i]['total_investment']/1000000000, 2, '.', ''):$ire_ate_all[$i]['total_investment'] / 1000000000 ?>
                                                tỷ</span>
                                        </div>
                                        <div>
                                            <span class="font_s12 btn_blue-rg pd_4_8 br font_w500 duy_disp_none"><?= $bds_type[$ire_ate_all[$i]['bds_type']] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="estate_item_ct-people mt_6 d_flex space_b pd_t_8 pd_r_7 d_themclass_fig28 duy_disp_none">
                                    <div class="people d_flex align_c">
                                        <div class="avatar">
										<? if (file_exists($dir7."/".$ire_ate_all[$i]['user_avt'])) { ?>
										<img src="<?= $dir7."/".$ire_ate_all[$i]['user_avt'] ?>" alt="">
										<? } else { ?>
										<img src="/assets/images/default_avt.svg" alt="">
										<? } ?>
                                        </div>
                                        <span class="name font_s16 ml_8 duy_font_ct2"><?= ($ire_ate_all[$i]['name'] != '')?$ire_ate_all[$i]['name']:$ire_ate_all[$i]['companyName'] ?></span>
                                    </div>
                                    <div class="inbox">
                                        <img src="<?php echo base_url(); ?>assets/images/inbox_green.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="duy_them_div_hien_375">
                                <div class="duy_them_div_hien_375_img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_b_1363_17407)">
                                            <path
                                                d="M0 8C0 3.58172 3.58172 0 8 0H16C20.4183 0 24 3.58172 24 8V16C24 20.4183 20.4183 24 16 24H8C3.58172 24 0 20.4183 0 16V8Z"
                                                fill="white" fill-opacity="0.8" />
                                            <path
                                                d="M17.9177 20.9974C17.6487 20.9966 17.3825 20.9409 17.1344 20.8334C16.8864 20.726 16.6615 20.5689 16.4727 20.3712L12 15.7864L7.52732 20.3742C7.24007 20.6747 6.87168 20.879 6.47018 20.9605C6.06868 21.042 5.65269 20.9968 5.27644 20.8309C4.89645 20.6733 4.57139 20.4012 4.34369 20.0502C4.11599 19.6992 3.99625 19.2855 4.00009 18.8632V6.74946C4.00009 5.75504 4.3832 4.80135 5.06514 4.09819C5.74709 3.39503 6.672 3 7.63641 3L16.3636 3C16.8411 3 17.314 3.09698 17.7551 3.28541C18.1963 3.47384 18.5972 3.75002 18.9348 4.09819C19.2725 4.44636 19.5404 4.8597 19.7231 5.3146C19.9058 5.76951 19.9999 6.25707 19.9999 6.74946V18.8632C20.004 19.2851 19.8847 19.6986 19.6575 20.0496C19.4303 20.4006 19.1059 20.6728 18.7265 20.8309C18.4703 20.9414 18.1954 20.998 17.9177 20.9974ZM7.63641 4.49978C7.05776 4.49978 6.50282 4.7368 6.09365 5.1587C5.68448 5.58059 5.45462 6.15281 5.45462 6.74946V18.8632C5.45436 18.9882 5.49001 19.1104 5.55709 19.2145C5.62417 19.3185 5.71965 19.3998 5.83148 19.4479C5.94331 19.4961 6.06647 19.509 6.1854 19.485C6.30434 19.461 6.4137 19.4012 6.4997 19.3131L11.4909 14.1981C11.6272 14.0585 11.8115 13.9801 12.0036 13.9801C12.1958 13.9801 12.3801 14.0585 12.5164 14.1981L17.5017 19.3116C17.5877 19.3997 17.6971 19.4595 17.816 19.4835C17.935 19.5075 18.0581 19.4946 18.17 19.4464C18.2818 19.3983 18.3773 19.317 18.4444 19.213C18.5114 19.1089 18.5471 18.9867 18.5468 18.8617V6.74946C18.5468 6.15281 18.317 5.58059 17.9078 5.1587C17.4986 4.7368 16.9437 4.49978 16.365 4.49978H7.63641Z"
                                                fill="#666666" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_b_1363_17407" x="-10" y="-10" width="44" height="44"
                                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feGaussianBlur in="BackgroundImage" stdDeviation="5" />
                                                <feComposite in2="SourceAlpha" operator="in"
                                                    result="effect1_backgroundBlur_1363_17407" />
                                                <feBlend mode="normal" in="SourceGraphic"
                                                    in2="effect1_backgroundBlur_1363_17407" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>

                                </div>
                                <div class="duy_them_div_hien_375_img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 12H8.01M12 12H12.01M16 12H16.01M21 12C21 16.418 16.97 20 12 20C10.5286 20.005 9.07479 19.6807 7.745 19.051L3 20L4.395 16.28C3.512 15.042 3 13.574 3 12C3 7.58197 7.03 3.99997 12 3.99997C16.97 3.99997 21 7.58197 21 12Z"
                                            stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="duy_them_div_hien_375_img duy_them_div_hien_375_img_sub"><img
                                        src="<?php echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt=""></div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </selection>

            <div class="project mt_48">
                <div class="project_top d_flex pd_lr_80 pd_t_45 d_themclass_fig30 duy_flb_375"
                    style="background-image: url(<?php echo base_url(); ?>assets/images/bds_bg_1.png)">
                    <div class="w_40_pt tl_w_100 bd_b40 d_themclass_fig31_w">
                        <div class="title d_flex flex_column align_s">
                            <span class="stt d_flex align_e font_s24 font_w600 position_r duy_font_z20px">04</span>
                            <div class="font_s50 d_flex flex_column align_e font_w600 line_h71">Bất động sản <span
                                    class="outstanding">Dự án</span></div>
                        </div>
                        <div class="btn_group d_flex align_c mt_24 d_themclass_fig32">
                            <button class="btn btn_129_40 font_s14 h_full btn_blue mr_16 d_themclass_fig30_w_h">Đang
                                khởi công</button>
                            <button
                                class="btn btn_116_40 font_s14 h_full mr_16 bd-gray gray_1 br_8 d_themclass_fig30_w_h">Đang
                                mở
                                bán</button>
                            <!-- <button class="btn pd_12_16 font_s14 h_full mr_16">Đang khởi công</button> -->
                            <button class="btn btn_107_40 font_s14 br_8 h_full bd-gray gray_1 d_themclass_fig30_w_h">Đã
                                bàn giao</button>
                        </div>
                        <div class="selected_btn d_flex align_e mt_64 flex_end d_themclass_fig33">
                            <a href="danh-sach-du-an_moi_nhat.html"
                                class="btn d_flex align_c pd_8_16 br_8 bd-gray gray_1">
                                <span class="color_gray mr_20 duy_fz14_768">Xem tất cả danh sách</span>
                                <span class="d_flex align_c">
                                    <svg width="20" height="20" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z"
                                            stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M9 12L12 9L9 6" stroke="#666666" stroke-width="1.2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6 9H12" stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class=" project_new d_themclass_fig31">
                        <div class="project_new-img position_r">
                            <img src="<?php echo base_url(); ?>assets/images/hotel_1.png" alt="">
                            <div class="project_item_heading bt_21 d_themclass_fig31_tex d_themclass_fig31_tex1">
                                <span
                                    class="project_item_heading-name w100 font_s24 d_themclass_fig31_tex duy_fz16_375px">Aqua
                                    City</span>
                                <div class="d_flex mt_8 align_c">
                                    <span class="white_s_nw mr_8 font_s18 duy_font_ct1 duy_color_fff duy_fz14_375px">1.5
                                        tỷ</span>
                                    <span
                                        class="ellipsis_1 white_s_nw address font_s18 duy_font_ct1 duy_color_fff duy_fz14_375px">Phường
                                        Đại Mỗ, Quận Nam Từ
                                        hah</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project_slider d_flex flex_w pd_lr_80 mt_24 d_themclass_fig34 d_themclass_fig35">
                    <?php foreach ($news_pj as $pj) : ?>
                    <a href="chi-tiet-du-an-<?= $pj['id'] ?>.html" class="project_item hover_img_105">
                        <img src="<?php echo base_url(); ?>assets/images/skyscrapers-sunset 1.png" alt="">
                        <div class="project_item_heading project_item_heading_duy" style="width: 100%">
                            <span
                                class="project_item_heading-name w100 ellipsis_1 mw_94"><?= $pj['project_name'] ?></span>
                            <div class="d_flex mt_8 align_c mw_94">
                                <span
                                    class="white_s_nw mr_8 font_s16"><?= ($pj['total_investment'] < 1000000000)?number_format((float)$pj['total_investment']/1000000000, 2, '.', ''):$pj['total_investment'] / 1000000000 ?>
                                    tỷ</span>
                                <span class="ellipsis_1 white_s_nw address font_s14"><?= $pj['cdt_addr_com'] ?></span>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <section class="news pd_lr_80 pd_t_48 cl_2 d_flex pd_b_93 mt_64 d_themclass_fig36">
                <div class="news_left pd_r_16 d_flex flex_column flex_end d_themclass_fig36_w100">
                    <div class="news_hd d_themclass_fig37">
                        <h2 class="discover_top-title">
                            <span class="br_t_70 pd_t_6 font_s50">
                                Tin tức nổi bật
                            </span>
                        </h2>
                        <div class="selected_btn d_flex align_e mt_20 pd_0">
                            <a href="tin-tuc.html" class="btn d_flex align_c pd_8_16 br_8 bd-gray gray_1">
                                <span class="color_gray mr_20 duy_fz12_375px nqd">Xem tất cả danh sách</span>
                                <span class="d_flex align_c">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z"
                                            stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M9 12L12 9L9 6" stroke="#666666" stroke-width="1.2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6 9H12" stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="news_hot d_flex mt_64 d_themclass_fig38 duy_flb_375">
                        <a href="chi-tiet-tin-tuc.html" class="news_hot-thumb duy_nqd_w100pt">
                            <img src="<?php echo base_url(); ?>assets/images/news_hot_1.png" alt="">
                        </a>
                        <div class="news_hot-ct pd_l_19 duy_fig_index1 duy_nqd_w100pt">
                            <a href="chi-tiet-tin-tuc.html"
                                class="title font_s16 black_md font_w500 line_h22 duy_fz16_768">
                                Thị trường bất động sản thương mại TP.HCM đang phục hồi
                            </a>
                            <div class="content font_s16 mt_6 gray_1 line_h24 ellipsis_14 duy_fz14_768">
                                <p>Nếu có kiến thức về xây dựng, hoàn toàn có thể tự thiết kế ngôi nhà cho hoặc tham
                                    khảo những mẫu sẵn có rồi chỉnh sửa cho phù hợp với đặc điểm căn nhà và nhu cầu của
                                    gia đình để tiết kiệm chi phí thiết kế.</p>
                                <p>Tuy nhiên, nếu không có chuyên môn, Homedy khuyên bạn nên tìm đến các đơn vị thiết
                                    kế
                                    có uy tín và kinh nghiệm lâu năm thiết kế ngôi nhà cho hợp lý và đảm bảo tính thẩm
                                    mỹ.</p>
                                <p>Gia chủ cũng bàn bạc kỹ lưỡng và thống nhất phong cách kiến trúc với kiến trúc sư.
                                    Hạn chế tình trạng trong quá trình thi công thay đổi kiến trúc căn nhà, dẫn đến
                                    phát...</p>
                            </div>
                            <span class="news_time font_s14 gray_2 line_h22 ellipsis_1">12 giờ trước</span>
                        </div>
                    </div>
                </div>
                <div class="news_right pd_l_16 d_themclass_fig36_w100">
                    <div class="news_right-list">
                        <?php
                    for ($i = 0; $i < 20; $i++) :?>
                        <div class="news_right-item d_flex tan-news_right">
                            <a href="chi-tiet-tin-tuc.html" class="im_thumbnail duy_fig_index2">
                                <img src="<?php echo base_url(); ?>assets/images/test_2.png" alt="">
                            </a>
                            <div class="im_content pd_l_16 pd_tb_8 pd_r_8 duy_fig_index3 ">
                                <a href="chi-tiet-tin-tuc.html"
                                    class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                    Thị trường bất động sản thương mại TP.HCM đang phục hồi
                                </a>
                                <div class="content font_s16 mt_8 gray_1 ellipsis_3 line_h24 nqd">
                                    <p>Nếu có kiến thức về xây dựng, hoàn toàn có thể tự thiết kế ngôi nhà cho hoặc
                                        tham
                                        khảo những mẫu sẵn có rồi chỉnh sửa cho phù hợp với đặc điểm căn nhà và nhu cầu
                                        của gia đình để tiết kiệm chi phí thiết kế.</p>
                                    <p>Tuy nhiên, nếu không có chuyên môn, Homedy khuyên bạn nên tìm đến các đơn vị
                                        thiết kế có uy tín và kinh nghiệm lâu năm thiết kế ngôi nhà cho hợp lý và đảm
                                        bảo tính thẩm mỹ.</p>
                                    <p>Gia chủ cũng bàn bạc kỹ lưỡng và thống nhất phong cách kiến trúc với kiến trúc
                                        sư. Hạn chế tình trạng trong quá trình thi công thay đổi kiến trúc căn nhà, dẫn
                                        đến phát...</p>
                                </div>
                                <span class="news_time font_s14 gray_2 line_h22 mt_2 d_block ellipsis_1">12 giờ
                                    trước</span>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </section>

            <div class="discover mt_64 pd_b_40 d_themclass_fig39">
                <div class="discover_top pd_t_82 pd_b_40 d_themclass_fig39_1">
                    <h2 class="discover_top-title text_a_c d_themclass_fig39_4">
                        <span class="br_t_70 pd_t_6 font_s50 font_w600">
                            Khám phá bất động sản ở thành phố lớn
                        </span>
                    </h2>
                    <div class="pd_l_80 over_hd user_sl_none d_themclass_fig39_2">
                        <div class="discover_contry_list d_flex mt_32 d_themclass_fig39_3">

                            <?php for ($i = 0; $i < 20; $i++) : ?>
                            <div class="discover_contry_item d_flex flex_column center_center">
                                <h3 class="contry_name font_s20 pd_t_20 line_h23 duy_fz16_768">TP. Hồ Chí Minh</h3>
                                <span class="contry_believe font_s16 mt_8 duy_fz14_5_768">1.222.111 tin</span>
                                <span class="contry_detal mt_24">
                                    <a href="mua-ban-truoc-dang-nhap.html"
                                        class="btn btn-orange color_white pd_8_16 br_50">Chi tiết</a>
                                </span>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>

                <div class="duy_fig">
                    <div class="duy_fig_img">
                        <img src="<?php echo base_url(); ?>assets/images/discover_img.png" alt="">
                    </div>
                    <div class="duy_fig_padding d_flex">
                        <div class="duy_fig_padding_suv d_flex duy_nqd_mb24px">
                            <div class="duy_fig_padding_suv_1 duy_fig_padding_suv_1_fig">
                                <div class="duy_fig_padding_heading">Bất động sản TPHCM</div>
                                <ul class="duy_fig_padding_ul">
                                    <li><a href="">Bán đất TPHCM</a></li>
                                    <li><a href="">Bán nhà TPHCM</a></li>
                                    <li><a href="">Bán đất nền TPHCM</a></li>
                                    <li><a href="">Bán nhà mặt phố TPHCM</a></li>
                                    <li><a href="">Bán căn hộ chung cư TPHCM</a></li>
                                    <li><a href="">Cho thuê phòng trọ TPHCM</a></li>
                                    <li><a href="">Cho thuê văn phòng TPHCM</a></li>
                                    <li><a href="">Cho thuê nhà mặt phố TPHCM</a></li>
                                    <li><a href="">Cho thuê nhà nguyên căn TPHCM</a></li>
                                </ul>
                            </div>
                            <div class="duy_fig_padding_suv_1 ">
                                <div class="duy_fig_padding_heading">Bất động sản Hà Nội</div>
                                <ul class="duy_fig_padding_ul">
                                    <li><a href="">Bán đất Hà Nội</a></li>
                                    <li><a href="">Bán nhà Hà Nội</a></li>
                                    <li><a href="">Bán đất nền Hà Nội</a></li>
                                    <li><a href="">Bán nhà mặt phố Hà Nội</a></li>
                                    <li><a href="">Bán căn hộ chung cư Hà Nội</a></li>
                                    <li><a href="">Cho thuê phòng trọ Hà Nội</a></li>
                                    <li><a href="">Cho thuê văn phòng Hà Nội</a></li>
                                    <li><a href="">Cho thuê nhà mặt phố Hà Nội</a></li>
                                    <li><a href="">Cho thuê nhà nguyên căn Hà Nội</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="duy_fig_padding_suv d_flex">
                            <div class="duy_fig_padding_suv_1 duy_fig_padding_suv_1_fig duy_fig_padding_suv_1_mr">
                                <div class="duy_fig_padding_heading">Mua bán nhà đất</div>
                                <ul class="duy_fig_padding_ul">
                                    <li><a href="">Bán đất quận 9</a></li>
                                    <li><a href="">Bán đất Bình Chánh</a></li>
                                    <li><a href="">Bán đất Bình Chánh</a></li>
                                    <li><a href="">Bán đất Bình Chánh</a></li>
                                    <li><a href="">Bán đất Bình Chánh</a></li>
                                    <li><a href="">Bán đất Bình Chánh</a></li>
                                    <li><a href="">Bán đất Bình Chánh</a></li>
                                    <li><a href="">Bán đất Bình Chánh</a></li>
                                    <li><a href="">Bán đất Bình Chánh</a></li>

                                </ul>
                            </div>
                            <div class="duy_fig_padding_suv_1">
                                <div class="duy_fig_padding_heading">Cho thuê bất động sản</div>
                                <ul class="duy_fig_padding_ul">
                                    <li><a href="">Phòng trọ Đà Nẵng</a></li>
                                    <li><a href="">Phòng trọ Đà Nẵng</a></li>
                                    <li><a href="">Phòng trọ quận 9</a></li>
                                    <li><a href="">Phòng trọ Đà Nẵng</a></li>
                                    <li><a href="">Thuê nhà Hải Phòng</a></li>
                                    <li><a href="">Phòng trọ quận 9</a></li>
                                    <li><a href="">Phòng trọ quận 9</a></li>
                                    <li><a href="">Thuê nhà Hải Phòng</a></li>
                                    <li><a href="">Phòng trọ quận 9</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </selection>
        <?php require_once APPPATH.'views/site/includes/da_footer.php'; ?>
    </div>
</body>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/slick.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/js_c.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/js_duy.js"></script>
<script>
$(".select_option").select2({
    width: "100%",
});

// EVENT tìm kiếm màn 375
$('.cl_loc_man375').click(function() {
    $(this).toggleClass('duy_svg_375')
    $('.click_rieng1').toggleClass('hidden');
    $('.click_rieng2').addClass('hidden');
    $('.click_rieng3').toggleClass('hidden');
})
$('.cl_dong_tk').click(function() {
    $('.popup_timkiem_tk').addClass('hidden');
})

// --------------------------------------


$('.project_slider').slick({
    rows: 2,
    dots: true,
    slidesToShow: 4,
    initialSlide: 0,
    slidesToScroll: 1,
    arrow: true,
    autoplaySpeed: 2000,
    prevArrow: '<button class="slick-prev prev-arrow"><img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_DATKV_left.png" alt="" /></button>',
    nextArrow: '<button class="slick-next next-arrow"><img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_DATKV_right.png" alt="" /></button>',
    responsive: [{
        breakpoint: 1025,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
        }
    }],
    responsive: [{
        breakpoint: 481,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 2,
            infinite: true,
            dots: true
        }
    }],
});
let clientWidth = window.innerWidth;
let row = 2;
let showNumber = 2;
if (clientWidth >= 1025 && clientWidth <= 1366) {
    row = 3;
    showNumber = 2;
} else if (clientWidth >= 769 && clientWidth <= 1024) {
    row = 5;
    showNumber = 1;
} else if (clientWidth >= 481 && clientWidth <= 768) {
    row = 5;
    showNumber = 1;
} else if (clientWidth <= 480) {
    row = 2;
    showNumber = 1;
}

$('.slider_js').slick({
    rows: row,
    dots: true,
    slidesToShow: showNumber,
    slidesToScroll: 1,
    arrow: true,
    // autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: '<button class="slick-prev prev-arrow"><img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_DATKV_left.png" alt="" /></button>',
    nextArrow: '<button class="slick-next next-arrow"><img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_DATKV_right.png" alt="" /></button>'
});




$('.news_right-list').slick({
    rows: 4,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrow: true,
    // autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: '<button class="slick-prev prev-arrow"><img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_DATKV_left.png" alt="" /></button>',
    nextArrow: '<button class="slick-next next-arrow"><img src="<?php echo base_url(); ?>assets/images/img_du_an/icon_DATKV_right.png" alt="" /></button>'
});



function MoveScroll(className) {
    let discover_contry_list = document.querySelector(className);

    if (discover_contry_list) {
        function Move(event) {

            let x = event.clientX;

            document.querySelector('.discover_contry_list').scroll(x, 0);
        }

        function handelMove(event) {
            let check = false;
            if (event.type == 'mousedown') {
                check = true;
            } else if (event.type == 'mouseup') {
                check = false;
            }
            if (check) {
                discover_contry_list.addEventListener('mousemove', Move);
            } else {
                discover_contry_list.removeEventListener('mousemove', Move);
            }
        }

        discover_contry_list.addEventListener('mousedown', handelMove);
        discover_contry_list.addEventListener('mouseup', handelMove);
    }
}

MoveScroll('.user_sl_none');
</script>

</html>
<script>
anh_xanh('img_xanh');
</script>
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


<script>
// di chuột 
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

//MỞ TÌM KIẾM
$('.input_search ').click(function() {
    $('.div_search').addClass('w100pt')
    $('.khung_tukhoa').removeClass('hidden');
    $('.btn_filter_click').addClass('hidden');
    $('.btn_close_duy').removeClass('hidden');
    $('.btn_map_to').addClass('hidden');
    $('.duy_select_boloc').addClass('hidden');
    $('.btn_filter_click').removeClass('btn_filter_click_color');
})
//ĐÓNG TÌM KIẾM
$('.btn_close_duy').click(function() {
    $('.div_search').removeClass('w100pt')
    $('.khung_tukhoa').addClass('hidden');
    $('.btn_filter_click').removeClass('hidden');
    $('.btn_close_duy').addClass('hidden');
    $('.btn_map_to').removeClass('hidden');
})
$(window).click(function(e) {
    if (($(e.target).is('.header_hover,.filter_banner,.container'))) {
        $('.duy_select_boloc').addClass('hidden');
    }
})

// CLICK BỘ LỌC
$('.btn_filter_click').click(function() {
    $(this).toggleClass('btn_filter_click_color')
    $('.duy_select_boloc').toggleClass('hidden');
})

function close_popup_filter() {
    $('.duy_select_boloc').toggleClass('hidden')
}
</script>
