<?
    $month = date('m', time());
    $year = date('Y', time());
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_d_sdn.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_header_d.css">
</head>

<body>
    <div class="body_dang_tin">
        <div class="dt_khoi_tong flex">
            <div class="dt_khoi1">
                <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
            </div>
            <div class="dt_khoi2">
                <div class="dt_khoi2_header mr_b26px">
                    <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
                </div>
                <div class="dt_khoi2_noidung flex">
                    <div class="dt_khoi2_noidung_left mr_r24px">
                        <div class="dt_khoi2_noidung_left_padding">
                            <div class="dt_khoi2_noidung_left_hd fz18_5 mr_b24px mr_l8px">Tin đăng</div>
                            <div class="them_div_ovflow_x">
                                <div class="fig_1024_tin_mb_1">
                                    <!-- Mua Bán -->
                                    <div class="dt_khoi2_noidung_left_one mr_b4px currsor_p">
                                        <a href="quan-ly-tin-dang-mua-ban.html"
                                            class="dt_khoi2_noidung_khoi_click  click_toggle1 flex align_item_c jus_sb mr_b4px bg_1024">
                                            <div
                                                class="dt_khoi2_noidung_khoi_click_text fz16_5 click_muaban_cha color_999">
                                                Mua bán (<?= $count_all_purchase ?>)
                                            </div>
                                            <div class="dt_khoi2_noidung_khoi_click_img ic_bottom_1024">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 9L12 15L18 9" stroke="#000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="click_con hidden">
                                            <div class="dt_khoi2_noidung_khoi_click_con c_muaban bg_click click_show_dt mr_l24px mr_b4px"
                                                onclick="muaban(this)">
                                                <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Tin đăng (<?= $count_all_lease ?>)
                                                </div>
                                            </div>
                                            <div class="dt_khoi2_noidung_khoi_click_con c_muaban mr_l24px click_show_lich_dt"
                                                onclick="muaban(this)">
                                                <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4 ">Lịch đẩy tin
                                                    (<?= $count_all_lease ?>)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cho thuê -->
                                    <div class="dt_khoi2_noidung_left_one mr_b4px currsor_p">
                                        <div class="dt_khoi2_noidung_left_one_chothue">
                                            <div
                                                class="dt_khoi2_noidung_khoi_click bg_click click_toggle2 flex align_item_c jus_sb mr_b4px">
                                                <a href="quan-ly-tin-dang-cho-thue.html"
                                                    class="dt_khoi2_noidung_khoi_click_text fz16_5 main_color">Cho thuê
                                                    (<?= $count_all_lease ?>)</a>
                                                <div
                                                    class="dt_khoi2_noidung_khoi_click_img add_stroke remove_stroke click_event_1366">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 9L12 15L18 9" stroke="#000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dt_khoi2_noidung_khoi_click_img add_stroke remove_stroke click_event_1024">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 9L12 15L18 9" stroke="#000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="click_con2">
                                                <div class="dt_khoi2_noidung_khoi_click_con c_chothue c_chothue_td bg_click mr_l24px mr_b4px"
                                                    onclick="chothue(this)">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Tin đăng
                                                        (<?= $count_all_lease ?>)
                                                    </div>
                                                </div>
                                                <div class="dt_khoi2_noidung_khoi_click_con c_chothue c_show_chothue_ldt mr_l24px"
                                                    onclick="chothue(this)">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Lịch đẩy
                                                        tin
                                                        (<?= $count_all_lease ?>)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="click_con2_2">
                                                <div class="dt_khoi2_noidung_khoi_click_con c_chothue c_chothue_td bg_click mr_l24px mr_b4px"
                                                    onclick="chothue(this)">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Tin đăng
                                                        (<?= $count_all_lease ?>)
                                                    </div>
                                                </div>
                                                <div class="dt_khoi2_noidung_khoi_click_con c_chothue c_show_chothue_ldt mr_l24px"
                                                    onclick="chothue(this)">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Lịch đẩy
                                                        tin
                                                        (<?= $count_all_lease ?>)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Dự án -->
                                    <div class="dt_khoi2_noidung_left_one mr_b4px currsor_p">
                                        <a href="quan-ly-tin-dang-du-an.html"
                                            class="dt_khoi2_noidung_khoi_click  click_toggle5 flex align_item_c jus_sb mr_b4px bg_1024">
                                            <div
                                                class="dt_khoi2_noidung_khoi_click_text fz16_5 click_muaban_cha color_999">
                                                Dự án (<?= $countAllProject ?>)
                                            </div>
                                            <div class="dt_khoi2_noidung_khoi_click_img ic_bottom_1024">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 9L12 15L18 9" stroke="#000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Thiết kế đẹp -->
                                    <div class="dt_khoi2_noidung_left_one mr_b4px currsor_p">
                                        <a href="quan-ly-tin-dang-thiet-ke.html"
                                            class="dt_khoi2_noidung_khoi_click  click_toggle3 flex align_item_c jus_sb mr_b4px bg_1024">
                                            <div class="dt_khoi2_noidung_khoi_click_text fz16_5 color_999">Thiết kế đẹp (<?= $count_all_design ?>)
                                            </div>
                                            <div class="dt_khoi2_noidung_khoi_click_img add_stroke3 ic_bottom_1024">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 9L12 15L18 9" stroke="#000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Tin đã lưu -->
                                    <div class="dt_khoi2_noidung_left_one mr_b4px currsor_p">
                                        <a href="quan-ly-tin-dang-tin-luu.html"
                                            class="dt_khoi2_noidung_khoi_click  click_toggle4 flex align_item_c jus_sb mr_b4px bg_1024">
                                            <div class="dt_khoi2_noidung_khoi_click_text fz16_5 color_999">Tin đã lưu
                                                (<?= $count_AllSave ?>)
                                            </div>
                                            <div class="dt_khoi2_noidung_khoi_click_img add_stroke4 ic_bottom_1024">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 9L12 15L18 9" stroke="#999" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="dt_khoi2_noidung_right">
                        <!-- Cho thue -->
                        <div class="div_right_one layout_muaban">
                            <!-- input nhập -->
                            <div class="dt_khoi2_noidung_right_padding1 mr_b24px">
                                <div class="noidung_right_khoi flex">
                                    <div class="noidung_right_khoi_search mr_r24px">
                                        <input type="text" class="input_search" value="<?= isset($_GET['key']) ? $_GET['key'] : "" ?>" placeholder="Nhập ID, tiêu đề tin">
                                        <input type="hidden" class="search-pr" value="<?= isset($_GET['key']) ? $_GET['key'] : ''; ?>">
                                        <div class="abs_search">
                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/search_34.png" alt="">
                                        </div>
                                    </div>
                                    <!-- <div class="fig_man375_sdn1 flex"> -->
                                    <div class="noidung_right_khoi_select1 mr_r24px">
                                        <select name="" id="select_city" class="select_option js-states form-control">
                                            <option disabled selected>Chọn thành phố </option>
                                            <? foreach($listcity as $opt): ?>
                                            <option <?= (isset($_GET['id_cit']) && $_GET['id_cit'] == $opt['cit_id']) ? "selected" : "" ?> value="<?= $opt['cit_id'] ?>"><?= $opt['cit_name'] ?></option>
                                            <? endforeach ?>
                                        </select>
                                    </div>
                                    <div class="noidung_right_khoi_select2">
                                        <select name="" id="select_stt" class="select_option js-states form-control">
                                            <option disabled selected>Trạng thái</option>
                                            <option <?= (isset($_GET['stt']) && $_GET['stt'] == 0) ? "selected" : "" ?> value="0">Tất cả</option>
                                            <option <?= (isset($_GET['stt']) && $_GET['stt'] == 1) ? "selected" : "" ?> value="2">Tin đã đăng</option>
                                            <option <?= (isset($_GET['stt']) && $_GET['stt'] == 2) ? "selected" : "" ?> value="1">Tin nháp</option>
                                            <option <?= (isset($_GET['stt']) && $_GET['stt'] == 3) ? "selected" : "" ?> value="3">Tin chờ</option>
                                            <option <?= (isset($_GET['stt']) && $_GET['stt'] == 4) ? "selected" : "" ?> value="4">Tin hết hạn</option>
                                        </select>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <!-- Định dạng -->
                            <div class="daytin_dinhdang hidden_dinhdang flex">
                                <div class="daytin_dinhdang_tex mr_r14px">Định dạng:</div>
                                <div class="daytin_dinhdang_tex_img flex">
                                    <div class="daytin_dinhdang_img_sub currsor_p show_dd1 click_dinhdang mr_r8px rm_cl_dinhdang bg_dinhdang"
                                        onclick="c_dinhdang(this)">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="4.5" y="5.5" width="15" height="3" rx="0.5" stroke="#666666" />
                                            <rect x="4.5" y="10.5" width="15" height="3" rx="0.5" stroke="#666666" />
                                            <rect x="4.5" y="15.5" width="15" height="3" rx="0.5" stroke="#666666" />
                                        </svg>
                                    </div>
                                    <div class="daytin_dinhdang_img_sub fig_loi1 currsor_p show_dd2 click_dinhdang"
                                        onclick="c_dinhdang(this)">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.54545 19.5H17.4545C17.997 19.5 18.5173 19.2845 18.9009 18.9009C19.2845 18.5173 19.5 17.997 19.5 17.4545V7.90909C19.5 7.3666 19.2845 6.84633 18.9009 6.46274C18.5173 6.07914 17.997 5.86364 17.4545 5.86364H16.7727V5.18182C16.7727 5.00099 16.7009 4.82757 16.573 4.6997C16.4452 4.57183 16.2717 4.5 16.0909 4.5C15.9101 4.5 15.7367 4.57183 15.6088 4.6997C15.4809 4.82757 15.4091 5.00099 15.4091 5.18182V5.86364H8.59091V5.18182C8.59091 5.00099 8.51907 4.82757 8.39121 4.6997C8.26334 4.57183 8.08992 4.5 7.90909 4.5C7.72826 4.5 7.55484 4.57183 7.42697 4.6997C7.29911 4.82757 7.22727 5.00099 7.22727 5.18182V5.86364H6.54545C6.00297 5.86364 5.4827 6.07914 5.0991 6.46274C4.7155 6.84633 4.5 7.3666 4.5 7.90909V17.4545C4.5 17.997 4.7155 18.5173 5.0991 18.9009C5.4827 19.2845 6.00297 19.5 6.54545 19.5ZM17.4545 18.1364H6.54545C6.36463 18.1364 6.1912 18.0645 6.06334 17.9367C5.93547 17.8088 5.86364 17.6354 5.86364 17.4545V11.3182H18.1364V17.4545C18.1364 17.6354 18.0645 17.8088 17.9367 17.9367C17.8088 18.0645 17.6354 18.1364 17.4545 18.1364ZM6.54545 7.22727H7.22727V7.90909C7.22727 8.08992 7.29911 8.26334 7.42697 8.39121C7.55484 8.51907 7.72826 8.59091 7.90909 8.59091C8.08992 8.59091 8.26334 8.51907 8.39121 8.39121C8.51907 8.26334 8.59091 8.08992 8.59091 7.90909V7.22727H15.4091V7.90909C15.4091 8.08992 15.4809 8.26334 15.6088 8.39121C15.7367 8.51907 15.9101 8.59091 16.0909 8.59091C16.2717 8.59091 16.4452 8.51907 16.573 8.39121C16.7009 8.26334 16.7727 8.08992 16.7727 7.90909V7.22727H17.4545C17.6354 7.22727 17.8088 7.29911 17.9367 7.42697C18.0645 7.55484 18.1364 7.72826 18.1364 7.90909V9.95455H5.86364V7.90909C5.86364 7.72826 5.93547 7.55484 6.06334 7.42697C6.1912 7.29911 6.36463 7.22727 6.54545 7.22727Z"
                                                fill="#666666" />
                                            <path
                                                d="M15.8312 12.7359C15.7485 12.7705 15.6724 12.8189 15.6062 12.8791C15.4816 13.0098 15.4109 13.1827 15.4084 13.3632C15.405 13.4086 15.405 13.4542 15.4084 13.4996C15.4158 13.5423 15.4296 13.5837 15.4493 13.6223C15.4643 13.6657 15.4849 13.707 15.5107 13.745L15.5925 13.8473C15.6589 13.9074 15.735 13.9558 15.8175 13.9905C15.9026 14.0308 15.9962 14.0495 16.0902 14.045C16.2708 14.0425 16.4437 13.9719 16.5743 13.8473C16.6375 13.7836 16.6875 13.708 16.7215 13.625C16.7554 13.5419 16.7726 13.4529 16.7721 13.3632C16.7696 13.1827 16.6989 13.0098 16.5743 12.8791C16.4785 12.7845 16.3567 12.7204 16.2244 12.6949C16.0922 12.6694 15.9553 12.6837 15.8312 12.7359ZM13.8471 12.8791C13.7807 12.819 13.7046 12.7706 13.6221 12.7359C13.4979 12.6837 13.361 12.6694 13.2288 12.6949C13.0965 12.7204 12.9748 12.7845 12.8789 12.8791C12.7827 12.9745 12.7171 13.0963 12.6905 13.2291C12.6639 13.3619 12.6774 13.4996 12.7293 13.6247C12.7812 13.7497 12.8692 13.8565 12.9821 13.9314C13.095 14.0062 13.2275 14.0458 13.363 14.045C13.4521 14.0439 13.5401 14.0254 13.6221 13.9905C13.7046 13.9558 13.7807 13.9074 13.8471 13.8473C13.9717 13.7166 14.0423 13.5437 14.0448 13.3632C14.0437 13.2741 14.0252 13.1861 13.9902 13.1041C13.9578 13.0204 13.9091 12.944 13.8471 12.8791ZM10.8948 12.7359C10.7706 12.6837 10.6338 12.6694 10.5015 12.6949C10.3692 12.7204 10.2475 12.7845 10.1516 12.8791C10.027 13.0098 9.95639 13.1827 9.95388 13.3632C9.95043 13.4086 9.95043 13.4542 9.95388 13.4996C9.96125 13.5423 9.97504 13.5837 9.99479 13.6223C10.0097 13.6657 10.0304 13.707 10.0562 13.745C10.0814 13.7807 10.1087 13.8149 10.138 13.8473C10.2721 13.9751 10.4505 14.046 10.6357 14.045C10.7248 14.0439 10.8128 14.0254 10.8948 13.9905C10.9774 13.9558 11.0534 13.9074 11.1198 13.8473C11.1837 13.7839 11.2344 13.7085 11.269 13.6254C11.3037 13.5423 11.3215 13.4532 11.3215 13.3632C11.3215 13.2732 11.3037 13.1841 11.269 13.101C11.2344 13.0179 11.1837 12.9425 11.1198 12.8791C11.0534 12.819 10.9774 12.7706 10.8948 12.7359ZM13.6221 15.4632C13.4979 15.411 13.361 15.3967 13.2288 15.4222C13.0965 15.4477 12.9748 15.5118 12.8789 15.6064C12.8157 15.6701 12.7657 15.7456 12.7318 15.8287C12.6978 15.9118 12.6806 16.0007 12.6812 16.0905C12.6822 16.1796 12.7008 16.2676 12.7357 16.3496C12.7703 16.4321 12.8188 16.5082 12.8789 16.5746C12.9426 16.6378 13.0181 16.6878 13.1012 16.7217C13.1843 16.7556 13.2732 16.7728 13.363 16.7723C13.4521 16.7712 13.5401 16.7527 13.6221 16.7177C13.7067 16.6871 13.7835 16.6383 13.8471 16.5746C13.9108 16.511 13.9596 16.4342 13.9902 16.3496C14.0252 16.2676 14.0437 16.1796 14.0448 16.0905C14.0453 16.0007 14.0281 15.9118 13.9942 15.8287C13.9603 15.7456 13.9103 15.6701 13.8471 15.6064C13.7807 15.5463 13.7046 15.4978 13.6221 15.4632ZM10.8948 15.4632C10.7706 15.411 10.6338 15.3967 10.5015 15.4222C10.3692 15.4477 10.2475 15.5118 10.1516 15.6064C10.027 15.737 9.95639 15.91 9.95388 16.0905C9.95496 16.1796 9.97349 16.2676 10.0084 16.3496C10.0431 16.4321 10.0915 16.5082 10.1516 16.5746C10.2823 16.6992 10.4552 16.7698 10.6357 16.7723C10.7251 16.7746 10.8139 16.7559 10.8948 16.7177C10.9794 16.6871 11.0562 16.6383 11.1199 16.5746C11.1835 16.511 11.2324 16.4342 11.263 16.3496C11.2979 16.2676 11.3164 16.1796 11.3175 16.0905C11.315 15.91 11.2444 15.737 11.1198 15.6064C11.0534 15.5463 10.9774 15.4978 10.8948 15.4632ZM8.16752 15.4632C8.00152 15.395 7.81533 15.395 7.64934 15.4632C7.56671 15.4977 7.49061 15.5462 7.42434 15.6064C7.36043 15.6698 7.30971 15.7452 7.27509 15.8283C7.24048 15.9113 7.22266 16.0005 7.22266 16.0905C7.22266 16.1805 7.24048 16.2696 7.27509 16.3527C7.30971 16.4358 7.36043 16.5112 7.42434 16.5746C7.49069 16.6347 7.56677 16.6831 7.64934 16.7177C7.73025 16.7559 7.81899 16.7746 7.90843 16.7723C8.04385 16.7731 8.17645 16.7335 8.2893 16.6587C8.40215 16.5838 8.49016 16.477 8.54209 16.3519C8.59402 16.2269 8.60753 16.0892 8.58089 15.9564C8.55425 15.8236 8.48867 15.7017 8.39252 15.6064C8.32768 15.5443 8.25121 15.4957 8.16752 15.4632Z"
                                                fill="#666666" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- --------------- -->
                            <!-- Mua bán tin đăng -->
                            <div class="div_muaban_dangtin mr_t24px">
                                <div class="dt_khoi2_noidung_right_padding2 flex mr_b16px">
                                    <div class="dt_khoi2_noidung_right_padding2_text1 main_clolor">Tin đăng</div>
                                    <div class="dt_khoi2_noidung_right_padding2_text2 main_clolor">Thống kê</div>
                                    <div class="dt_khoi2_noidung_right_padding2_text3 main_clolor">Trạng thái</div>
                                </div>
                                <? 
                                    foreach($newsPurchase as $rows): 
                                    $m = date('m',$rows['time_create']);
                                    $d = date('d',$rows['time_create']);
                                    $y = date('Y',$rows['time_create']);
                                    $arr_img = json_decode($rows['arr_img']);
                                ?>
                                    <div class="dt_khoi2_noidung_right_padding3">
                                        <div class="dt_khoi2_noidung_right_padding3_sub flex align_item_c jus_sb">
                                            <div class="them_div_de_fig_375">
                                                <div class="them_div_4-6_1 flex align_item_c">
                                                    <!-- khối ảnh, -->
                                                    <div class="dt_khoi2_noidung_right_padding3_sub_2 mr_r16px">
                                                        <div class="noidung_right_padding3_sub_img mr_b8px">
                                                            <? if($arr_img != "" && isset($arr_img[0])): ?>
                                                            <img src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $arr_img[0] ?>" alt="">
                                                            <? else: ?>
                                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/bg_none.png" alt="">
                                                            <? endif ?>
                                                        </div>
                                                        <? if($rows['stt_news'] == 1): ?>
                                                            <div class="noidung_right_padding3_div3_button main_bg fz_12_4 currsor_p">Tin nháp</div>
                                                        <? elseif($rows['stt_news'] == 2): ?>
                                                            <? if($rows['time_expired'] < time()): ?>
                                                                <div class="noidung_right_padding3_div3_button bg_errror fz_12_4 currsor_p">Tin hết hạn</div>
                                                            <? else: ?>
                                                                <div class="noidung_right_padding3_div3_button bg_success fz_12_4 currsor_p"> Còn hạn</div>
                                                            <? endif ?>
                                                        <? elseif($rows['stt_news'] == 3): ?>
                                                            <div class="noidung_right_padding3_div3_button bg_money fz_12_4 currsor_p">Tin chờ</div>
                                                        <? endif ?>
                                                    </div>
                                                    <div class="sua_khoidiv_4_6_fig_7_6">
                                                        <div class="noidung_right_padding3_div1_hd fz17_5 mr_b8px elipsis1"><?= $rows['project_name'] ?></div>
                                                        <div class="sua_khoidiv_4_6 flex jus_sb">
                                                            <!-- Khối nội dung -->
                                                            <div class="noidung_right_padding3_div1">
                                                                <div class="noidung_right_padding3_div1_tex_id main_clolor mr_b8px">ID:<?= $rows['id_news'] ?> </div>
                                                                <div class="noidung_right_padding3_div1_tex_address flex mr_b8px">
                                                                    <div class="noidung_right_padding3_div1_tex_address_img">
                                                                        <img src="<?= base_url() ?>assets/images/img_du_an/address_hi.png" alt="">
                                                                    </div>
                                                                    <div class="noidung_right_padding3_div1_tex_diachi">
                                                                        <?php
                                                                            $CI = &get_instance();
                                                                            $CI->load->model('M_ManageNews');
                                                                            if($rows['select_city'] != 0)
                                                                            {
                                                                                echo $this->M_ManageNews->getCity($rows['select_city']);  
                                                                            }
                                                                            if($rows['districts'] != 0)
                                                                            {
                                                                                echo ', '.$this->M_ManageNews->getDistricts($rows['districts']);
                                                                            }
                                                                            if($rows['wards'] != 0)
                                                                            {
                                                                                echo ', '.$this->M_ManageNews->getWard($rows['wards']);
                                                                            }
                                                                            
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="noidung_right_padding3_div1_linktinh fig_margin_375 flex">
                                                                    <div
                                                                        class="noidung_right_padding3_div1_linktinh1 flex">
                                                                        <div
                                                                            class="noidung_right_padding3_div1_tex_address_img">
                                                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_home.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div
                                                                            class="noidung_right_padding3_div1_tex_diachi">
                                                                            <?
                                                                                if($rows['area_max'] == 0)
                                                                                {
                                                                                    echo fomatNumber($rows['area_min']).' m2';
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo fomatNumber($rows['area_min']).' - '.fomatNumber($rows['area_max']).' m2';
                                                                                }
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="noidung_right_padding3_div1_linktinh1 flex">
                                                                        <div
                                                                            class="noidung_right_padding3_div1_tex_address_img">
                                                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_money.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="noidung_right_padding3_div1_tex_diachi">
                                                                        <?
                                                                            if($rows['Gia_thoa_thuan'] == 0)
                                                                            {
                                                                                if($rows['price_max'] == 0)
                                                                                {
                                                                                    echo fomatMoney($rows['price_min']).' tỷ';
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo fomatMoney($rows['price_min']).'  -  '.fomatMoney($rows['price_max']).' tỷ';
                                                                                }
                                                                            }
                                                                            else
                                                                            {
                                                                                echo "Giá thỏa thuận";
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="noidung_right_padding3_div1_linktinh1 flex">
                                                                        <div
                                                                            class="noidung_right_padding3_div1_tex_address_img">
                                                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="noidung_right_padding3_div1_tex_diachi"> <?= $rows['area_convert'] ?> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- khối ngày tạo,  -->
                                                            <div class="noidung_right_padding3_div3">
                                                                <p class="muaban_ngaytao nt">Ngày tạo: <?= date('d/m/Y',$rows['time_create']) ?></p>
                                                                <p class="muaban_ngaytao nd">Ngày đăng: <?= ($rows['stt_news'] == 3) ? date('d/m/Y',$rows['date_post_news']) : date('d/m/Y',$rows['time_create']) ?></p>
                                                                <p class="muaban_ngaytao nh">Ngày hết hạn: <?= date('d/m/Y',$rows['time_expired']) ?>
                                                                </p>
                                                            </div>
                                                            <div class="noidung_right_padding3_div2">
                                                                <div
                                                                    class="noidung_right_padding3_div2_khung flex mr_b8px">
                                                                    <div class="noidung_right_padding3_div2_khung_img">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/icon_like.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="noidung_right_padding3_div2_khung_tex"><?= $count_save_lease ?></div>
                                                                </div>
                                                                <div
                                                                    class="noidung_right_padding3_div2_khung flex mr_b8px">
                                                                    <div class="noidung_right_padding3_div2_khung_img">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/icon_view.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="noidung_right_padding3_div2_khung_tex"><?= $rows['news_view'] ?></div>
                                                                </div>
                                                                <div class="noidung_right_padding3_div2_khung flex">
                                                                    <div class="noidung_right_padding3_div2_khung_img">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/icon_chat.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="noidung_right_padding3_div2_khung_tex"><?= $rows['comment'] ?></div>
                                                                </div>
                                                            </div>

                                                            <div class="border_bottom_1024"></div>


                                                            <div class="abs_3cham show_popup_3cham currsor_p">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/3_cham.png" alt="">
                                                            </div>
                                                            <div class="popup_muaban hidden">
                                                                <div class="popup_muaban_padding currsor_p">
                                                                    <div class="popup_muaban_padding_div1 flex">
                                                                        <div class="popup_muaban_padding_div1_img">
                                                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/xemchitiet.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="popup_muaban_padding_div1_text">Xem
                                                                            chi tiết tin
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="popup_muaban_padding_div1 flex click_day_tin">
                                                                        <div class="popup_muaban_padding_div1_img">
                                                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/arrow-up.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="popup_muaban_padding_div1_text">Đẩy
                                                                            tin</div>
                                                                    </div>
                                                                    <div
                                                                        class="popup_muaban_padding_div1 flex show_popup_gimtin">
                                                                        <div class="popup_muaban_padding_div1_img">
                                                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/ghim.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="popup_muaban_padding_div1_text">Ghim
                                                                            tin</div>
                                                                    </div>
                                                                    <div class="popup_muaban_padding_div1 flex">
                                                                        <div class="popup_muaban_padding_div1_img">
                                                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div onclick="location.href='cap-nhat-dang-tin-sau-dang-nhap-<?= $rows['id_news'] ?>.html'" class="popup_muaban_padding_div1_text">
                                                                            Chỉnh sửa</div>
                                                                    </div>
                                                                    <div data-id="<?= $rows['id_news'] ?>" class="popup_muaban_padding_div1 btn_delete_news flex show_popup_xoa">
                                                                        <div class="popup_muaban_padding_div1_img">
                                                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                                        </div>
                                                                        <div class="popup_muaban_padding_div1_text">Xóa
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="them_div_de_fig_375_1">
                                                    <div class="them_div_de_fig_375_1_suv">
                                                        <div class="them_div_de_fig_suv flex align_item_c">
                                                            <div class="noidung_right_padding3_div1_tex_address_img">
                                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_vuong.png" alt="">
                                                            </div>
                                                            <div class="noidung_right_padding3_div1_tex_diachi"><?= $rows['area_convert'] ?> </div>
                                                        </div>
                                                        <p class="muaban_ngaytao nt">Ngày tạo: <?= date('d/m/Y',$rows['time_create']) ?></p>
                                                        <p class="muaban_ngaytao nd">Ngày đăng: <?= ($rows['stt_news'] == 3) ? date('d/m/Y',$rows['date_post_news']) : date('d/m/Y',$rows['time_create']) ?></p>
                                                        <p class="muaban_ngaytao nh">Ngày hết hạn: <?= date('d/m/Y',$rows['time_expired']) ?>
                                                    </div>
                                                    <div class="border_bottom_375"></div>
                                                    <div class="them_div_de_fig_375_2_suv">
                                                        <div class="them_div_de_fig_375_2_sub">
                                                            <div class="noidung_right_padding3_div2_khung flex mr_b8px">
                                                                <div class="noidung_right_padding3_div2_khung_img">
                                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/icon_view.png" alt="">
                                                                </div>
                                                                <div class="noidung_right_padding3_div2_khung_tex">1235
                                                                </div>
                                                            </div>
                                                            <div class="noidung_right_padding3_div2_khung flex mr_b8px">
                                                                <div class="noidung_right_padding3_div2_khung_img">
                                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/icon_like.png" alt="">
                                                                </div>
                                                                <div class="noidung_right_padding3_div2_khung_tex">
                                                                    1235</div>
                                                            </div>
                                                            <div class="noidung_right_padding3_div2_khung flex">
                                                                <div class="noidung_right_padding3_div2_khung_img">
                                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/icon_chat.png" alt="">
                                                                </div>
                                                                <div class="noidung_right_padding3_div2_khung_tex">
                                                                    1235</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <? endforeach ?>
                                <? print_r($pagination) ?>
                            </div>
                            <!-- -------------------- -->

                            <!-- Mua bán lịch đẩy tin -->
                            <div class="div_muaban_daytin">

                                <!-- SHOW LỊCH ĐẨY TIN -->
                                <div class="show_lich_day_tin hidden">
                                    <!-- Định dạng 2 -->
                                    <div class="daytin_dinhdang2 flex ">
                                        <div class="daytin_dinhdang_tex mr_r14px">Định dạng:</div>
                                        <div class="daytin_dinhdang_tex_img flex">
                                            <div class="daytin_dinhdang_img_sub currsor_p ldt_one show_dd11 click_dinhdang mr_r8px rm_cl_dinhdang bg_dinhdang"
                                                onclick="c_dinhdang(this)">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="4.5" y="5.5" width="15" height="3" rx="0.5"
                                                        stroke="#666666" />
                                                    <rect x="4.5" y="10.5" width="15" height="3" rx="0.5"
                                                        stroke="#666666" />
                                                    <rect x="4.5" y="15.5" width="15" height="3" rx="0.5"
                                                        stroke="#666666" />
                                                </svg>
                                            </div>
                                            <div class="daytin_dinhdang_img_sub currsor_p ldt_two show_dd22 click_dinhdang"
                                                onclick="c_dinhdang(this)">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.54545 19.5H17.4545C17.997 19.5 18.5173 19.2845 18.9009 18.9009C19.2845 18.5173 19.5 17.997 19.5 17.4545V7.90909C19.5 7.3666 19.2845 6.84633 18.9009 6.46274C18.5173 6.07914 17.997 5.86364 17.4545 5.86364H16.7727V5.18182C16.7727 5.00099 16.7009 4.82757 16.573 4.6997C16.4452 4.57183 16.2717 4.5 16.0909 4.5C15.9101 4.5 15.7367 4.57183 15.6088 4.6997C15.4809 4.82757 15.4091 5.00099 15.4091 5.18182V5.86364H8.59091V5.18182C8.59091 5.00099 8.51907 4.82757 8.39121 4.6997C8.26334 4.57183 8.08992 4.5 7.90909 4.5C7.72826 4.5 7.55484 4.57183 7.42697 4.6997C7.29911 4.82757 7.22727 5.00099 7.22727 5.18182V5.86364H6.54545C6.00297 5.86364 5.4827 6.07914 5.0991 6.46274C4.7155 6.84633 4.5 7.3666 4.5 7.90909V17.4545C4.5 17.997 4.7155 18.5173 5.0991 18.9009C5.4827 19.2845 6.00297 19.5 6.54545 19.5ZM17.4545 18.1364H6.54545C6.36463 18.1364 6.1912 18.0645 6.06334 17.9367C5.93547 17.8088 5.86364 17.6354 5.86364 17.4545V11.3182H18.1364V17.4545C18.1364 17.6354 18.0645 17.8088 17.9367 17.9367C17.8088 18.0645 17.6354 18.1364 17.4545 18.1364ZM6.54545 7.22727H7.22727V7.90909C7.22727 8.08992 7.29911 8.26334 7.42697 8.39121C7.55484 8.51907 7.72826 8.59091 7.90909 8.59091C8.08992 8.59091 8.26334 8.51907 8.39121 8.39121C8.51907 8.26334 8.59091 8.08992 8.59091 7.90909V7.22727H15.4091V7.90909C15.4091 8.08992 15.4809 8.26334 15.6088 8.39121C15.7367 8.51907 15.9101 8.59091 16.0909 8.59091C16.2717 8.59091 16.4452 8.51907 16.573 8.39121C16.7009 8.26334 16.7727 8.08992 16.7727 7.90909V7.22727H17.4545C17.6354 7.22727 17.8088 7.29911 17.9367 7.42697C18.0645 7.55484 18.1364 7.72826 18.1364 7.90909V9.95455H5.86364V7.90909C5.86364 7.72826 5.93547 7.55484 6.06334 7.42697C6.1912 7.29911 6.36463 7.22727 6.54545 7.22727Z"
                                                        fill="#666666" />
                                                    <path
                                                        d="M15.8312 12.7359C15.7485 12.7705 15.6724 12.8189 15.6062 12.8791C15.4816 13.0098 15.4109 13.1827 15.4084 13.3632C15.405 13.4086 15.405 13.4542 15.4084 13.4996C15.4158 13.5423 15.4296 13.5837 15.4493 13.6223C15.4643 13.6657 15.4849 13.707 15.5107 13.745L15.5925 13.8473C15.6589 13.9074 15.735 13.9558 15.8175 13.9905C15.9026 14.0308 15.9962 14.0495 16.0902 14.045C16.2708 14.0425 16.4437 13.9719 16.5743 13.8473C16.6375 13.7836 16.6875 13.708 16.7215 13.625C16.7554 13.5419 16.7726 13.4529 16.7721 13.3632C16.7696 13.1827 16.6989 13.0098 16.5743 12.8791C16.4785 12.7845 16.3567 12.7204 16.2244 12.6949C16.0922 12.6694 15.9553 12.6837 15.8312 12.7359ZM13.8471 12.8791C13.7807 12.819 13.7046 12.7706 13.6221 12.7359C13.4979 12.6837 13.361 12.6694 13.2288 12.6949C13.0965 12.7204 12.9748 12.7845 12.8789 12.8791C12.7827 12.9745 12.7171 13.0963 12.6905 13.2291C12.6639 13.3619 12.6774 13.4996 12.7293 13.6247C12.7812 13.7497 12.8692 13.8565 12.9821 13.9314C13.095 14.0062 13.2275 14.0458 13.363 14.045C13.4521 14.0439 13.5401 14.0254 13.6221 13.9905C13.7046 13.9558 13.7807 13.9074 13.8471 13.8473C13.9717 13.7166 14.0423 13.5437 14.0448 13.3632C14.0437 13.2741 14.0252 13.1861 13.9902 13.1041C13.9578 13.0204 13.9091 12.944 13.8471 12.8791ZM10.8948 12.7359C10.7706 12.6837 10.6338 12.6694 10.5015 12.6949C10.3692 12.7204 10.2475 12.7845 10.1516 12.8791C10.027 13.0098 9.95639 13.1827 9.95388 13.3632C9.95043 13.4086 9.95043 13.4542 9.95388 13.4996C9.96125 13.5423 9.97504 13.5837 9.99479 13.6223C10.0097 13.6657 10.0304 13.707 10.0562 13.745C10.0814 13.7807 10.1087 13.8149 10.138 13.8473C10.2721 13.9751 10.4505 14.046 10.6357 14.045C10.7248 14.0439 10.8128 14.0254 10.8948 13.9905C10.9774 13.9558 11.0534 13.9074 11.1198 13.8473C11.1837 13.7839 11.2344 13.7085 11.269 13.6254C11.3037 13.5423 11.3215 13.4532 11.3215 13.3632C11.3215 13.2732 11.3037 13.1841 11.269 13.101C11.2344 13.0179 11.1837 12.9425 11.1198 12.8791C11.0534 12.819 10.9774 12.7706 10.8948 12.7359ZM13.6221 15.4632C13.4979 15.411 13.361 15.3967 13.2288 15.4222C13.0965 15.4477 12.9748 15.5118 12.8789 15.6064C12.8157 15.6701 12.7657 15.7456 12.7318 15.8287C12.6978 15.9118 12.6806 16.0007 12.6812 16.0905C12.6822 16.1796 12.7008 16.2676 12.7357 16.3496C12.7703 16.4321 12.8188 16.5082 12.8789 16.5746C12.9426 16.6378 13.0181 16.6878 13.1012 16.7217C13.1843 16.7556 13.2732 16.7728 13.363 16.7723C13.4521 16.7712 13.5401 16.7527 13.6221 16.7177C13.7067 16.6871 13.7835 16.6383 13.8471 16.5746C13.9108 16.511 13.9596 16.4342 13.9902 16.3496C14.0252 16.2676 14.0437 16.1796 14.0448 16.0905C14.0453 16.0007 14.0281 15.9118 13.9942 15.8287C13.9603 15.7456 13.9103 15.6701 13.8471 15.6064C13.7807 15.5463 13.7046 15.4978 13.6221 15.4632ZM10.8948 15.4632C10.7706 15.411 10.6338 15.3967 10.5015 15.4222C10.3692 15.4477 10.2475 15.5118 10.1516 15.6064C10.027 15.737 9.95639 15.91 9.95388 16.0905C9.95496 16.1796 9.97349 16.2676 10.0084 16.3496C10.0431 16.4321 10.0915 16.5082 10.1516 16.5746C10.2823 16.6992 10.4552 16.7698 10.6357 16.7723C10.7251 16.7746 10.8139 16.7559 10.8948 16.7177C10.9794 16.6871 11.0562 16.6383 11.1199 16.5746C11.1835 16.511 11.2324 16.4342 11.263 16.3496C11.2979 16.2676 11.3164 16.1796 11.3175 16.0905C11.315 15.91 11.2444 15.737 11.1198 15.6064C11.0534 15.5463 10.9774 15.4978 10.8948 15.4632ZM8.16752 15.4632C8.00152 15.395 7.81533 15.395 7.64934 15.4632C7.56671 15.4977 7.49061 15.5462 7.42434 15.6064C7.36043 15.6698 7.30971 15.7452 7.27509 15.8283C7.24048 15.9113 7.22266 16.0005 7.22266 16.0905C7.22266 16.1805 7.24048 16.2696 7.27509 16.3527C7.30971 16.4358 7.36043 16.5112 7.42434 16.5746C7.49069 16.6347 7.56677 16.6831 7.64934 16.7177C7.73025 16.7559 7.81899 16.7746 7.90843 16.7723C8.04385 16.7731 8.17645 16.7335 8.2893 16.6587C8.40215 16.5838 8.49016 16.477 8.54209 16.3519C8.59402 16.2269 8.60753 16.0892 8.58089 15.9564C8.55425 15.8236 8.48867 15.7017 8.39252 15.6064C8.32768 15.5443 8.25121 15.4957 8.16752 15.4632Z"
                                                        fill="#666666" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- -------------------- -->
                                    <!-- LỊCH ĐẨY TIN TIN NHÁP -->
                                    <div class="tin_nhap ldt_tinnhap  flex juss_tify_end mr_b9px hidden">
                                        <div class="tin_nhap_img">
                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/arrow-left.png" alt="">
                                        </div>
                                        <div class="tin_nhap_text fz16_4 main_clolor">Tin nháp</div>
                                    </div>
                                    <!-- ----------------------------------- -->
                                    <!-- LỊCH ĐẨY TIN ĐỊNH DẠNG TABLE -->
                                    <div class="them_div_ovflow_x">
                                        <div class="div_table mr_t24px ldt_table">
                                            <table>
                                                <tr>
                                                    <th class="w82px">STT</th>
                                                    <th class="w424px">Tin đăng</th>
                                                    <!-- <th class="w180px">Nơi ghim</th> -->
                                                    <th class="w300px">Lịch đẩy tin</th>
                                                    <th class="w153 text-center">Cập nhật</th>
                                                </tr>
                                                <tr class="bg_ntn_child">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="div_table_tex_td">
                                                            <div class="div_table_tex_td1 fz15_5 mr_b8px">
                                                                Đất sân bay Long Thành - Century City mặt tiền đường
                                                                DT769
                                                                Sổ
                                                                đỏ,
                                                                thổ cư từng nền LH 0899 888 358
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                ID: 0123456789
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                Địa chỉ: Số 1 Trần Điền, Định Công, Hoàng Mai, hà Nội
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="noighim">
                                                            Bất động sản dự án
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="lichdaytin flex">
                                                            <div class="lichdaytin_sub1 mr_r16px">
                                                                <div class="lichdaytin_img mr_b14px color_ccc">1</div>
                                                                <div class="lichdaytin_img mr_b14px color_ccc">2</div>
                                                                <div class="lichdaytin_img mr_b14px main_clolor">3</div>
                                                                <div class="lichdaytin_img mr_b14px">4</div>
                                                                <div class="lichdaytin_img mr_b14px">5</div>
                                                                <div class="lichdaytin_img mr_b14px">6</div>
                                                                <div class="lichdaytin_img mr_b14px">7</div>
                                                            </div>
                                                            <div class="lichdaytin_sub2">
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px main_clolor">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="capnhat flex align_item_c center-center">
                                                            <div class="capnhat_img mr_r10px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/capnhat24.png" alt="">
                                                            </div>
                                                            <div class="capnhat_text main_clolor">Cập nhật</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg_ntn_child">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="div_table_tex_td">
                                                            <div class="div_table_tex_td1 fz15_5 mr_b8px">
                                                                Đất sân bay Long Thành - Century City mặt tiền đường
                                                                DT769
                                                                Sổ
                                                                đỏ,
                                                                thổ cư từng nền LH 0899 888 358
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                ID: 0123456789
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                Địa chỉ: Số 1 Trần Điền, Định Công, Hoàng Mai, hà Nội
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="noighim">
                                                            Bất động sản dự án
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="lichdaytin flex">
                                                            <div class="lichdaytin_sub1 mr_r16px">
                                                                <div class="lichdaytin_img mr_b14px color_ccc">1</div>
                                                                <div class="lichdaytin_img mr_b14px color_ccc">2</div>
                                                                <div class="lichdaytin_img mr_b14px main_clolor">3</div>
                                                                <div class="lichdaytin_img mr_b14px">4</div>
                                                                <div class="lichdaytin_img mr_b14px">5</div>
                                                                <div class="lichdaytin_img mr_b14px">6</div>
                                                                <div class="lichdaytin_img mr_b14px">7</div>
                                                            </div>
                                                            <div class="lichdaytin_sub2">
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px main_clolor">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="capnhat flex align_item_c center-center">
                                                            <div class="capnhat_img mr_r10px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/capnhat24.png" alt="">
                                                            </div>
                                                            <div class="capnhat_text main_clolor">Cập nhật</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg_ntn_child">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="div_table_tex_td">
                                                            <div class="div_table_tex_td1 fz15_5 mr_b8px">
                                                                Đất sân bay Long Thành - Century City mặt tiền đường
                                                                DT769
                                                                Sổ
                                                                đỏ,
                                                                thổ cư từng nền LH 0899 888 358
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                ID: 0123456789
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                Địa chỉ: Số 1 Trần Điền, Định Công, Hoàng Mai, hà Nội
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="noighim">
                                                            Bất động sản dự án
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="lichdaytin flex">
                                                            <div class="lichdaytin_sub1 mr_r16px">
                                                                <div class="lichdaytin_img mr_b14px color_ccc">1</div>
                                                                <div class="lichdaytin_img mr_b14px color_ccc">2</div>
                                                                <div class="lichdaytin_img mr_b14px main_clolor">3</div>
                                                                <div class="lichdaytin_img mr_b14px">4</div>
                                                                <div class="lichdaytin_img mr_b14px">5</div>
                                                                <div class="lichdaytin_img mr_b14px">6</div>
                                                                <div class="lichdaytin_img mr_b14px">7</div>
                                                            </div>
                                                            <div class="lichdaytin_sub2">
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px main_clolor">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="capnhat flex align_item_c center-center">
                                                            <div class="capnhat_img mr_r10px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/capnhat24.png" alt="">
                                                            </div>
                                                            <div class="capnhat_text main_clolor">Cập nhật</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg_ntn_child">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="div_table_tex_td">
                                                            <div class="div_table_tex_td1 fz15_5 mr_b8px">
                                                                Đất sân bay Long Thành - Century City mặt tiền đường
                                                                DT769
                                                                Sổ
                                                                đỏ,
                                                                thổ cư từng nền LH 0899 888 358
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                ID: 0123456789
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                Địa chỉ: Số 1 Trần Điền, Định Công, Hoàng Mai, hà Nội
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="noighim">
                                                            Bất động sản dự án
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="lichdaytin flex">
                                                            <div class="lichdaytin_sub1 mr_r16px">
                                                                <div class="lichdaytin_img mr_b14px color_ccc">1</div>
                                                                <div class="lichdaytin_img mr_b14px color_ccc">2</div>
                                                                <div class="lichdaytin_img mr_b14px main_clolor">3</div>
                                                                <div class="lichdaytin_img mr_b14px">4</div>
                                                                <div class="lichdaytin_img mr_b14px">5</div>
                                                                <div class="lichdaytin_img mr_b14px">6</div>
                                                                <div class="lichdaytin_img mr_b14px">7</div>
                                                            </div>
                                                            <div class="lichdaytin_sub2">
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px main_clolor">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="capnhat flex align_item_c center-center">
                                                            <div class="capnhat_img mr_r10px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/capnhat24.png" alt="">
                                                            </div>
                                                            <div class="capnhat_text main_clolor">Cập nhật</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg_ntn_child">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="div_table_tex_td">
                                                            <div class="div_table_tex_td1 fz15_5 mr_b8px">
                                                                Đất sân bay Long Thành - Century City mặt tiền đường
                                                                DT769
                                                                Sổ
                                                                đỏ,
                                                                thổ cư từng nền LH 0899 888 358
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                ID: 0123456789
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                Địa chỉ: Số 1 Trần Điền, Định Công, Hoàng Mai, hà Nội
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="noighim">
                                                            Bất động sản dự án
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="lichdaytin flex">
                                                            <div class="lichdaytin_sub1 mr_r16px">
                                                                <div class="lichdaytin_img mr_b14px color_ccc">1</div>
                                                                <div class="lichdaytin_img mr_b14px color_ccc">2</div>
                                                                <div class="lichdaytin_img mr_b14px main_clolor">3</div>
                                                                <div class="lichdaytin_img mr_b14px">4</div>
                                                                <div class="lichdaytin_img mr_b14px">5</div>
                                                                <div class="lichdaytin_img mr_b14px">6</div>
                                                                <div class="lichdaytin_img mr_b14px">7</div>
                                                            </div>
                                                            <div class="lichdaytin_sub2">
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px main_clolor">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="capnhat flex align_item_c center-center">
                                                            <div class="capnhat_img mr_r10px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/capnhat24.png" alt="">
                                                            </div>
                                                            <div class="capnhat_text main_clolor">Cập nhật</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg_ntn_child">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="div_table_tex_td">
                                                            <div class="div_table_tex_td1 fz15_5 mr_b8px">
                                                                Đất sân bay Long Thành - Century City mặt tiền đường
                                                                DT769
                                                                Sổ
                                                                đỏ,
                                                                thổ cư từng nền LH 0899 888 358
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                ID: 0123456789
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                Địa chỉ: Số 1 Trần Điền, Định Công, Hoàng Mai, hà Nội
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="noighim">
                                                            Bất động sản dự án
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="lichdaytin flex">
                                                            <div class="lichdaytin_sub1 mr_r16px">
                                                                <div class="lichdaytin_img mr_b14px color_ccc">1</div>
                                                                <div class="lichdaytin_img mr_b14px color_ccc">2</div>
                                                                <div class="lichdaytin_img mr_b14px main_clolor">3</div>
                                                                <div class="lichdaytin_img mr_b14px">4</div>
                                                                <div class="lichdaytin_img mr_b14px">5</div>
                                                                <div class="lichdaytin_img mr_b14px">6</div>
                                                                <div class="lichdaytin_img mr_b14px">7</div>
                                                            </div>
                                                            <div class="lichdaytin_sub2">
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px main_clolor">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="capnhat flex align_item_c center-center">
                                                            <div class="capnhat_img mr_r10px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/capnhat24.png" alt="">
                                                            </div>
                                                            <div class="capnhat_text main_clolor">Cập nhật</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg_ntn_child">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="div_table_tex_td">
                                                            <div class="div_table_tex_td1 fz15_5 mr_b8px">
                                                                Đất sân bay Long Thành - Century City mặt tiền đường
                                                                DT769
                                                                Sổ
                                                                đỏ,
                                                                thổ cư từng nền LH 0899 888 358
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                ID: 0123456789
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                Địa chỉ: Số 1 Trần Điền, Định Công, Hoàng Mai, hà Nội
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="noighim">
                                                            Bất động sản dự án
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="lichdaytin flex">
                                                            <div class="lichdaytin_sub1 mr_r16px">
                                                                <div class="lichdaytin_img mr_b14px color_ccc">1</div>
                                                                <div class="lichdaytin_img mr_b14px color_ccc">2</div>
                                                                <div class="lichdaytin_img mr_b14px main_clolor">3</div>
                                                                <div class="lichdaytin_img mr_b14px">4</div>
                                                                <div class="lichdaytin_img mr_b14px">5</div>
                                                                <div class="lichdaytin_img mr_b14px">6</div>
                                                                <div class="lichdaytin_img mr_b14px">7</div>
                                                            </div>
                                                            <div class="lichdaytin_sub2">
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px main_clolor">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="capnhat flex align_item_c center-center">
                                                            <div class="capnhat_img mr_r10px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/capnhat24.png" alt="">
                                                            </div>
                                                            <div class="capnhat_text main_clolor">Cập nhật</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg_ntn_child">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="div_table_tex_td">
                                                            <div class="div_table_tex_td1 fz15_5 mr_b8px">
                                                                Đất sân bay Long Thành - Century City mặt tiền đường
                                                                DT769
                                                                Sổ
                                                                đỏ,
                                                                thổ cư từng nền LH 0899 888 358
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                ID: 0123456789
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                Địa chỉ: Số 1 Trần Điền, Định Công, Hoàng Mai, hà Nội
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="noighim">
                                                            Bất động sản dự án
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="lichdaytin flex">
                                                            <div class="lichdaytin_sub1 mr_r16px">
                                                                <div class="lichdaytin_img mr_b14px color_ccc">1</div>
                                                                <div class="lichdaytin_img mr_b14px color_ccc">2</div>
                                                                <div class="lichdaytin_img mr_b14px main_clolor">3</div>
                                                                <div class="lichdaytin_img mr_b14px">4</div>
                                                                <div class="lichdaytin_img mr_b14px">5</div>
                                                                <div class="lichdaytin_img mr_b14px">6</div>
                                                                <div class="lichdaytin_img mr_b14px">7</div>
                                                            </div>
                                                            <div class="lichdaytin_sub2">
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px main_clolor">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="capnhat flex align_item_c center-center">
                                                            <div class="capnhat_img mr_r10px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/capnhat24.png" alt="">
                                                            </div>
                                                            <div class="capnhat_text main_clolor">Cập nhật</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg_ntn_child">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="div_table_tex_td">
                                                            <div class="div_table_tex_td1 fz15_5 mr_b8px">
                                                                Đất sân bay Long Thành - Century City mặt tiền đường
                                                                DT769
                                                                Sổ
                                                                đỏ,
                                                                thổ cư từng nền LH 0899 888 358
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                ID: 0123456789
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                Địa chỉ: Số 1 Trần Điền, Định Công, Hoàng Mai, hà Nội
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="noighim">
                                                            Bất động sản dự án
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="lichdaytin flex">
                                                            <div class="lichdaytin_sub1 mr_r16px">
                                                                <div class="lichdaytin_img mr_b14px color_ccc">1</div>
                                                                <div class="lichdaytin_img mr_b14px color_ccc">2</div>
                                                                <div class="lichdaytin_img mr_b14px main_clolor">3</div>
                                                                <div class="lichdaytin_img mr_b14px">4</div>
                                                                <div class="lichdaytin_img mr_b14px">5</div>
                                                                <div class="lichdaytin_img mr_b14px">6</div>
                                                                <div class="lichdaytin_img mr_b14px">7</div>
                                                            </div>
                                                            <div class="lichdaytin_sub2">
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px main_clolor">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="capnhat flex align_item_c center-center">
                                                            <div class="capnhat_img mr_r10px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/capnhat24.png" alt="">
                                                            </div>
                                                            <div class="capnhat_text main_clolor">Cập nhật</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg_ntn_child">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="div_table_tex_td">
                                                            <div class="div_table_tex_td1 fz15_5 mr_b8px">
                                                                Đất sân bay Long Thành - Century City mặt tiền đường
                                                                DT769
                                                                Sổ
                                                                đỏ,
                                                                thổ cư từng nền LH 0899 888 358
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                ID: 0123456789
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                Địa chỉ: Số 1 Trần Điền, Định Công, Hoàng Mai, hà Nội
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="noighim">
                                                            Bất động sản dự án
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="lichdaytin flex">
                                                            <div class="lichdaytin_sub1 mr_r16px">
                                                                <div class="lichdaytin_img mr_b14px color_ccc">1</div>
                                                                <div class="lichdaytin_img mr_b14px color_ccc">2</div>
                                                                <div class="lichdaytin_img mr_b14px main_clolor">3</div>
                                                                <div class="lichdaytin_img mr_b14px">4</div>
                                                                <div class="lichdaytin_img mr_b14px">5</div>
                                                                <div class="lichdaytin_img mr_b14px">6</div>
                                                                <div class="lichdaytin_img mr_b14px">7</div>
                                                            </div>
                                                            <div class="lichdaytin_sub2">
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px main_clolor">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="capnhat flex align_item_c center-center">
                                                            <div class="capnhat_img mr_r10px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/capnhat24.png" alt="">
                                                            </div>
                                                            <div class="capnhat_text main_clolor">Cập nhật</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg_ntn_child">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="div_table_tex_td">
                                                            <div class="div_table_tex_td1 fz15_5 mr_b8px">
                                                                Đất sân bay Long Thành - Century City mặt tiền đường
                                                                DT769
                                                                Sổ
                                                                đỏ,
                                                                thổ cư từng nền LH 0899 888 358
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                ID: 0123456789
                                                            </div>
                                                            <div class="div_table_tex_td1 mr_b8px">
                                                                Địa chỉ: Số 1 Trần Điền, Định Công, Hoàng Mai, hà Nội
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="noighim">
                                                            Bất động sản dự án
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="lichdaytin flex">
                                                            <div class="lichdaytin_sub1 mr_r16px">
                                                                <div class="lichdaytin_img mr_b14px color_ccc">1</div>
                                                                <div class="lichdaytin_img mr_b14px color_ccc">2</div>
                                                                <div class="lichdaytin_img mr_b14px main_clolor">3</div>
                                                                <div class="lichdaytin_img mr_b14px">4</div>
                                                                <div class="lichdaytin_img mr_b14px">5</div>
                                                                <div class="lichdaytin_img mr_b14px">6</div>
                                                                <div class="lichdaytin_img mr_b14px">7</div>
                                                            </div>
                                                            <div class="lichdaytin_sub2">
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px color_ccc">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px main_clolor">
                                                                    02/10/2022
                                                                </div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                                <div class="lichdaytin_text mr_b26px">02/10/2022</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="capnhat flex align_item_c center-center">
                                                            <div class="capnhat_img mr_r10px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/capnhat24.png" alt="">
                                                            </div>
                                                            <div class="capnhat_text main_clolor">Cập nhật</div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </table>

                                            <div class="body_phantrang padding_unset mr_t102px">
                                                <div class="body_phantrang_img flex juss_tify_end">
                                                    <div class="body_phantrang_img_left mr_r16px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/phantrang_left.png" alt="">
                                                    </div>
                                                    <div class="body_phantrang_number flex">
                                                        <div class="phantrang_number mr_r8px main_bg while_color">1
                                                        </div>
                                                        <div class="phantrang_number mr_r8px">2</div>
                                                        <div class="phantrang_number mr_r8px">3</div>
                                                        <div class="phantrang_number mr_r8px">4</div>
                                                    </div>
                                                    <div class="body_phantrang_img_left mr_l16px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/phantrang_right.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- LỊCH ĐẨY TIN CLICK TUẦN THÁNG -->
                                    <div class="tuan_thang ldt_click_tuanthang flex jus_sb mr_b2px hidden">
                                        <div class="tuan_thang_box1 flex">
                                            <div class="tuan_thang_button flex align_item_c currsor_p">
                                                <div class="tuan_thang_button1 ldt_click_show_tuan cl_ngaythang mr_r8px bg_ngaythang"
                                                    onclick="c_ngaythang(this)">Tuần</div>
                                                <div class="tuan_thang_button2 ldt_click_show_thang cl_ngaythang"
                                                    onclick="c_ngaythang(this)">
                                                    Tháng</div>
                                            </div>
                                            <div class="tuan_thang_homnay flex align_item_c">
                                                <div class="tuan_thang_homnay_img">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/left_30.png" alt="">
                                                </div>
                                                <div class="tuan_thang_homnay_text main_color fz16_5">Hôm nay</div>
                                                <div class="tuan_thang_homnay_img">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/right_30.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tuan_thang_box2 flex align_item_c">
                                            <div class="tuan_thang_box2_text"><span class="fz18_5">Tháng 5</span> / 2022
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ------------------------------------- -->

                                    <!-- LỊCH ĐẨY TIN ĐỊNH DẠNG TUẦN THÁNG Layout Tuần -->
                                    <!-- Layout Tuần -->
                                    <div class="them_div_ovflow_x">
                                        <div class="khung_div_ngaythang ldt_layout_tuan flex hidden">
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">CN (01/05)</div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronnau.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronlam.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronxanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">Thứ 2 (02/05)
                                                    </div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronnau.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronlam.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronxanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">Thứ 3 (03/05)
                                                    </div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronnau.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronlam.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronxanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">Thứ 4 (04/05)
                                                    </div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronnau.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronlam.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronxanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">Thứ 5 (05/05)
                                                    </div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronnau.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronlam.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronxanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5 main_color">Thứ 6
                                                        (06/05)</div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2 bg_dinhdang">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronnau.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronlam.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronxanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">Thứ 7 (07/05)
                                                    </div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronnau.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronlam.png" alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img_ldt mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/tronxanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- -------------------- -->
                                    <div class="them_div_ovflow_x">
                                        <div class="khung_div_thang1 ldt_layout_thang hidden">
                                            <?php echo build_calendar2($month,$year);?>
                                        </div>
                                    </div>
                                    <!-- ------------------------------------- -->

                                </div>
                                <!-- ------------------------------------- -->

                                <!-- Định dạng Ngày -->

                                <div class="div_dd_ngay hidden">
                                    <!-- Tin nháp -->
                                    <div class="tin_nhap tin_nhap_po_re mr_b9px mr_t_am11px">
                                        <div class="tin_nhap_suv flex align_item_c juss_tify_end currsor_p">
                                            <div class="tin_nhap_img">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/arrow-left.png" alt="">
                                            </div>
                                            <div class="tin_nhap_text fz16_4 main_clolor">Tin nháp</div>
                                        </div>
                                        <div class="popup_tinnhap hidden_popup hidden">
                                            <div class="popup_tinnhap_padding">
                                                <div
                                                    class="popup_tinnhap_padding_div1 hidden_popup_tinnhap flex align_item_c mr_b10px currsor_p">
                                                    <div class="popup_tinnhap_padding_div1_text main_color">Tin nháp
                                                    </div>
                                                    <div class="popup_tinnhap_padding_div1_img">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/arrow_left.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="tinnhap_scroll_no">
                                                    <div class="popup_tinnhap_padding_noidung">
                                                        <div
                                                            class="popup_tinnhap_padding_noidung_suv flex align_item_c">
                                                            <div class="popup_tinnhap_padding_img mr_r8px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                            </div>
                                                            <div class="popup_tinnhap_padding_text fzi_14_4">
                                                                <div class="popup_tinnhap_padding_text1 mr_b8px">Bán
                                                                    nhà
                                                                    lớn nhất Hà Nội tại thành phố khác</div>
                                                                <div class="popup_tinnhap_padding_text2">Đã cập
                                                                    nhật:
                                                                    <span>15:00.05/06/2022</span>
                                                                </div>
                                                            </div>
                                                            <div class="popup_tinnhap_padding_icon">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/3cham_tinnhap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="border_tinhap"></div>

                                                    </div>
                                                    <div class="popup_tinnhap_padding_noidung">
                                                        <div
                                                            class="popup_tinnhap_padding_noidung_suv flex align_item_c">
                                                            <div class="popup_tinnhap_padding_img mr_r8px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                            </div>
                                                            <div class="popup_tinnhap_padding_text fzi_14_4">
                                                                <div class="popup_tinnhap_padding_text1 mr_b8px">Bán
                                                                    nhà
                                                                    lớn nhất Hà Nội tại thành phố khác</div>
                                                                <div class="popup_tinnhap_padding_text2">Đã cập
                                                                    nhật:
                                                                    <span>15:00.05/06/2022</span>
                                                                </div>
                                                            </div>
                                                            <div class="popup_tinnhap_padding_icon">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/3cham_tinnhap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="border_tinhap"></div>

                                                    </div>
                                                    <div class="popup_tinnhap_padding_noidung">
                                                        <div
                                                            class="popup_tinnhap_padding_noidung_suv flex align_item_c">
                                                            <div class="popup_tinnhap_padding_img mr_r8px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                            </div>
                                                            <div class="popup_tinnhap_padding_text fzi_14_4">
                                                                <div class="popup_tinnhap_padding_text1 mr_b8px">Bán
                                                                    nhà
                                                                    lớn nhất Hà Nội tại thành phố khác</div>
                                                                <div class="popup_tinnhap_padding_text2">Đã cập
                                                                    nhật:
                                                                    <span>15:00.05/06/2022</span>
                                                                </div>
                                                            </div>
                                                            <div class="popup_tinnhap_padding_icon">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/3cham_tinnhap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="border_tinhap"></div>

                                                    </div>
                                                    <div class="popup_tinnhap_padding_noidung">
                                                        <div
                                                            class="popup_tinnhap_padding_noidung_suv flex align_item_c">
                                                            <div class="popup_tinnhap_padding_img mr_r8px">
                                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                            </div>
                                                            <div class="popup_tinnhap_padding_text fzi_14_4">
                                                                <div class="popup_tinnhap_padding_text1 mr_b8px">Bán
                                                                    nhà
                                                                    lớn nhất Hà Nội tại thành phố khác</div>
                                                                <div class="popup_tinnhap_padding_text2">Đã cập
                                                                    nhật:
                                                                    <span>15:00.05/06/2022</span>
                                                                </div>
                                                            </div>
                                                            <div class="popup_tinnhap_padding_icon">
                                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/3cham_tinnhap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="border_tinhap"></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ----------------------------------- -->
                                    <!-- CLICK TUẦN THÁNG -->
                                    <div class="tuan_thang click_tuanthang flex jus_sb mr_b2px">
                                        <div class="tuan_thang_box1 flex">
                                            <div class="tuan_thang_button flex align_item_c currsor_p">
                                                <div class="tuan_thang_button1 click_show_tuan cl_ngaythang mr_r8px bg_ngaythang"
                                                    onclick="c_ngaythang(this)">Tuần</div>
                                                <div class="tuan_thang_button2 click_show_thang cl_ngaythang"
                                                    onclick="c_ngaythang(this)">
                                                    Tháng</div>
                                            </div>
                                            <div class="tuan_thang_homnay flex align_item_c">
                                                <div class="tuan_thang_homnay_img">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/left_30.png" alt="">
                                                </div>
                                                <div class="tuan_thang_homnay_text main_color fz16_5">Hôm nay</div>
                                                <div class="tuan_thang_homnay_img">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/right_30.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tuan_thang_box2 flex align_item_c">
                                            <div class="tuan_thang_box2_text"><span class="fz18_5">Tháng 5</span> / 2022
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ------------------------------------- -->
                                    <!-- Layout Tuần -->
                                    <div class="them_div_ovflow_x">
                                        <div class="khung_div_ngaythang layout_tuan flex">
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">CN (01/05)</div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_do.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_xanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_vang.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">Thứ 2 (02/05)
                                                    </div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_do.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_xanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_vang.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">Thứ 3 (03/05)
                                                    </div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_do.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_xanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_vang.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">Thứ 4 (04/05)
                                                    </div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_do.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_xanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_vang.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">Thứ 5 (05/05)
                                                    </div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_do.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_xanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_vang.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5 main_color">Thứ 6
                                                        (06/05)</div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2 bg_dinhdang">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_do.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_xanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_vang.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="khung_div_ngaythang_padding">
                                                <div class="khung_div_ngaythang_khoi1 mr_b2px">
                                                    <div class="khung_div_ngaythang_khoi1_tex fz16_5">Thứ 7 (07/05)
                                                    </div>
                                                </div>
                                                <div class="khung_div_ngaythang_khoi2">
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_do.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_xanh.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="khung_div_ngaythang_khoi2_img mr_b2px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                        <div class="khung_div_ngaythang_khoi2_abs_sub">
                                                            <div
                                                                class="khung_div_ngaythang_khoi2_abs flex align_item_c jus_sb">
                                                                <div
                                                                    class="khung_div_ngaythang_khoi2_abs_tin flex align_item_c">
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_img mr_r8px">
                                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/thang_vang.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="khung_div_ngaythang_khoi2_abs_tex fzi_14_4">
                                                                        12:00</div>
                                                                </div>
                                                                <div class="khung_div_ngaythang_khoi2_abs_3cham_y">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <ellipse cx="9.58398" cy="4.58337" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                        <circle cx="9.58398" cy="9.58337" r="1.25"
                                                                            fill="#3691D9" />
                                                                        <ellipse cx="9.58398" cy="14.5834" rx="1.25"
                                                                            ry="1.25" fill="#3691D9" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ------------------------------------- -->
                                    <!-- Layout Tháng -->
                                    <div class="them_div_ovflow_x">
                                        <div class="khung_div_thang layout_thang hidden">
                                            <?php echo build_calendar3($month,$year);?>
                                        </div>
                                    </div>
                                    <!-- ------------------------------------- -->

                                </div>
                                <!-- -------------------- -->

                            </div>
                            <!-- -------------------- -->
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="dt_khoi3">
            <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
        </div>
    </div>

    <!-- POPUP ĐẨY TIN -->
    <div class="popup_daytin hidden">
        <div class="popup_daytin_overlay"></div>
        <div class="popup_daytin_padding">
            <div class="popup_daytin_noidung">
                <div class="popup_daytin_noidung_heading flex align_item_c jus_sb mr_b16px">
                    <div class="popup_daytin_noidung_heading1">Đẩy tin đăng</div>
                    <div class="popup_daytin_noidung_heading2 currsor_p close_pp_daytin">Đóng</div>
                </div>
                <div class="them_div_ovflow_y">
                    <div class="them_div_scroll_popup">
                        <div class="popup_daytin_noidung_tieude mr_b16px">
                            <div class="popup_daytin_noidung_tieude1 mr_b8px">Tiêu đề tin</div>
                            <div class="popup_daytin_noidung_tieude2 main_color">Legacy Central Quảng Ninh</div>
                        </div>
                        <div class="popup_daytin_noidung_ngaydang flex">
                            <div class="popup_daytin_noidung_ngaydang1">Ngày đăng tin: 20/12/2022</div>
                            <div class="popup_daytin_noidung_ngaydang1">Ngày hạn đăng tin: 29/12/2022</div>
                            <div class="popup_daytin_noidung_ngaydang1">Số ngày còn lại: 8</div>
                        </div>
                        <div class="popup_daytin_noidung_diem flex align_item_c jus_sb mr_b24px">
                            <div class="popup_daytin_noidung_diem_text">
                                <div class="popup_daytin_noidung_diem_text1 fz_18_5 main_color mr_b8px">Số điểm của bạn:
                                    3 điểm
                                </div>
                                <div class="popup_daytin_noidung_diem_text2">(1 lần đẩy tin bạn sẽ bị trừ 1 điểm, tin
                                    của bạn sẽ
                                    được đẩy lên đầu Listing tin đăng)</div>
                            </div>
                            <div class="popup_daytin_noidung_diem_bt currsor_p">Mua điểm</div>
                        </div>
                        <div class="popup_daytin_noidung_input mr_b36px">
                            <div class="popup_daytin_noidung_input_suv fz_16_5 mr_b13px">Thời gian đẩy tin</div>
                            <div class="popup_daytin_noidung_input_khung flex align_item_c">
                                <div class="popup_daytin_noidung_input_khung_ip mr_r24px">
                                    <input type="text" placeholder="Nhập số ngày up tin *">
                                </div>
                                <div class="popup_daytin_noidung_input_khung_tex">Số điểm bị trừ tương ứng <span
                                        class="color_errror">0</span></div>
                            </div>
                        </div>
                        <div class="popup_daytin_noidung_thoigian mr_b40px flex">
                            <div class="popup_daytin_noidung_thoigian_khung1 flex align_item_c mr_r40px">
                                <div class="popup_daytin_noidung_thoigian_num main_color mr_r16px">1</div>
                                <div class="popup_daytin_noidung_thoigian_date mr_r16px">
                                    <input type="date">
                                </div>
                                <div class="popup_daytin_noidung_thoigian_time">
                                    <input type="time">
                                </div>
                            </div>

                            <div class="popup_daytin_noidung_thoigian_khung1 flex align_item_c">
                                <div class="popup_daytin_noidung_thoigian_num main_color mr_r16px">2</div>
                                <div class="popup_daytin_noidung_thoigian_date mr_r16px">
                                    <input type="date">
                                </div>
                                <div class="popup_daytin_noidung_thoigian_time">
                                    <input type="time">
                                </div>
                            </div>
                        </div>
                        <div class="popup_daytin_noidung_bt_uptin mr_b40px">
                            <div class="popup_daytin_noidung_bt_uptin_text fz_16_5 currsor_p">Up tin</div>
                        </div>
                        <div class="popup_daytin_noidung_bt_chat">
                            <div class="popup_daytin_noidung_bt_chat_sub flex align_item_c">
                                <div class="popup_daytin_noidung_bt_chat_img">
                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chat_ngay.png" alt="">
                                </div>
                                <div class="popup_daytin_noidung_bt_chat_text fz_16_5 currsor_p">Chat với chúng tôi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP XÓA -->
    <div class="popup_xoa hidden">
        <div class="popup_xoa_overlay currsor_p back"></div>
        <div class="popup_xoa_padding">
            <div class="img_delete">
                <img src="<? echo base_url(); ?>assets/images/img_sdn/delete.png" alt="">
            </div>
            <div class="popup_xoa_tex">
                Bạn chắc chắn muốn xóa tin này?
            </div>
            <div class="popup_xoa_btn">
                <div class="popup_xoa_btn1 currsor_p">Đồng ý</div>
                <div class="popup_xoa_btn2 currsor_p back">Quay lại</div>
            </div>
        </div>
    </div>
    <!----------------------------------->

    <!-- POPUP ĐẨY TIN CON -->
    <div class="popup_daytin_con hidden">
        <div class="popup_daytin_con_overlay currsor_p back_daytin_con"></div>
        <div class="popup_daytin_con_padding">
            <div class="img_daytin">
                <img src="<? echo base_url(); ?>assets/images/img_sdn/daytin.png" alt="">
            </div>
            <div class="popup_daytin_con_text">
                Bạn có muốn sử dụng 5 điểm để đẩy tin?
            </div>
            <div class="popup_daytin_con_btn">
                <div class="popup_daytin_con_btn1 currsor_p back_daytin_con">Quay lại</div>
                <div class="popup_daytin_con_btn2 currsor_p">Đồng ý</div>
            </div>
        </div>
    </div>
    <!----------------------------------->

    <!-- POPUP GIM TIN -->
    <div class="popup_gimtin hidden">
        <div class="popup_gimtin_overlay dong_gimtin"></div>
        <div class="popup_gimtin_padding">
            <div class="popup_gimtin_text_dong dong_gimtin">Đóng</div>
            <div class="popup_gimtin_khoi_main">
                <div class="popup_gimtin_text_hd">Chọn mục bạn muốn ghim</div>
                <div class="popup_gimtin_text_hd_div1 mr_b32px">
                    <div class="popup_gimtin_div_trangchu">
                        <div class="div_trangchu_text">Trang chủ</div>
                        <div class="div_trangchu_text_2">(Tin của bạn sẽ được ghim trên trang chủ)</div>
                    </div>
                    <div class="popup_gimtin_div_checkbox">
                        <div class="popup_gimtin_div_checkbox_padding">
                            <div class="popup_gimtin_div_checkbox_text">Bất động sản hấp dẫn</div>
                            <div class="popup_gimtin_div_checkbox_input">
                                <input type="radio" name="duy">
                            </div>
                        </div>
                    </div>
                    <div class="popup_gimtin_div_checkbox">
                        <div class="popup_gimtin_div_checkbox_padding">
                            <div class="popup_gimtin_div_checkbox_text">Bất động sản mới nhất</div>
                            <div class="popup_gimtin_div_checkbox_input">
                                <input type="radio" name="duy">
                            </div>
                        </div>
                    </div>
                    <div class="popup_gimtin_div_checkbox">
                        <div class="popup_gimtin_div_checkbox_padding">
                            <div class="popup_gimtin_div_checkbox_text">Bất động sản bán gấp</div>
                            <div class="popup_gimtin_div_checkbox_input">
                                <input type="radio" name="duy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup_gimtin_text_hd_div2">
                    <div class="popup_gimtin_div_trangchu">
                        <div class="div_trangchu_text">Trang ngành</div>
                        <div class="div_trangchu_text_2">(Tin của bạn sẽ được ghim trên trang ngành)</div>
                    </div>
                    <div class="popup_gimtin_div_checkbox">
                        <div class="popup_gimtin_div_checkbox_padding">
                            <div class="popup_gimtin_div_checkbox_text">Trang ngành</div>
                            <div class="popup_gimtin_div_checkbox_input">
                                <input type="radio">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup_gimtin_khoi_main_btn currsor_p">Tiếp theo</div>
            </div>
        </div>
    </div>
    <!----------------------------------->



</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_duy.js"></script>
<script>
function chothue(click_chothue) {
    $('.c_chothue').removeClass('bg_click')
    $(click_chothue).addClass('bg_click');
}
$('.c_show_chothue_ldt').click(function() {
    $('.show_lich_day_tin').removeClass('hidden');
    $('.div_muaban_dangtin').addClass('hidden');
    $('.hidden_dinhdang').addClass('hidden');
    $('.ldt_tinnhap').addClass('hidden');
    $('.div_dd_ngay').addClass('hidden');
    $('.ldt_table').removeClass('hidden');
    $('.show_dd11').addClass('bg_dinhdang');
    $('.show_dd11').addClass('rm_cl_dinhdang');
    $('.show_dd22').removeClass('bg_dinhdang');
    $('.show_dd22').removeClass('fill_dd');

})
$('.c_chothue_td').click(function() {
    $('.show_lich_day_tin').addClass('hidden');
    $('.div_muaban_dangtin').removeClass('hidden');
    $('.hidden_dinhdang').removeClass('hidden');
    $('.show_dd1').addClass('bg_dinhdang');
    $('.show_dd1').addClass('rm_cl_dinhdang');
    $('.show_dd2').removeClass('bg_dinhdang');
    $('.show_dd2').removeClass('fill_dd');
})


// ĐINH DẠNG
function c_dinhdang(dinhdang) {
    $('.click_dinhdang').removeClass('bg_dinhdang');
    $('.click_dinhdang').removeClass('rm_cl_dinhdang');
    $('.click_dinhdang').removeClass('fill_dd');
    $(dinhdang).addClass('rm_cl_dinhdang');
    $(dinhdang).addClass('bg_dinhdang');
    $(dinhdang).addClass('fill_dd');
}
// CLICK SHOW ĐỊNH DẠNG
$('.show_dd1').click(function() {
    $('.div_muaban_dangtin').removeClass('hidden');
    $('.layout_tuan').addClass('hidden');
    $('.layout_thang').addClass('hidden');
    $('.click_tuanthang').addClass('hidden');
    $('.tin_nhap').addClass('hidden');

})
$('.show_dd2').click(function() {
    $('.div_muaban_dangtin').addClass('hidden');
    $('.layout_tuan').removeClass('hidden');
    $('.layout_thang').addClass('hidden');
    $('.click_tuanthang').removeClass('hidden');
    $('.tin_nhap').removeClass('hidden');
    $('.div_dd_ngay').removeClass('hidden');
    $('.click_show_tuan').addClass('bg_ngaythang');
    $('.click_show_thang').removeClass('bg_ngaythang');
})

$('.show_dd22').click(function() {
    $('.ldt_click_show_tuan').addClass('bg_ngaythang');
    $('.ldt_click_show_thang').removeClass('bg_ngaythang');
    $('.ldt_layout_thang').addClass('hidden')
})
// CLICK TUẦN THÁNG
$('.click_show_tuan').click(function() {
    $('.layout_tuan').removeClass('hidden');
    $('.layout_thang').addClass('hidden');
})
$('.click_show_thang').click(function() {
    $('.layout_tuan').addClass('hidden');
    $('.layout_thang').removeClass('hidden');
})


// NGÀY THÁNG
function c_ngaythang(click_ngaythang) {
    $('.cl_ngaythang').removeClass('bg_ngaythang');
    $(click_ngaythang).addClass('bg_ngaythang');
}
</script>
<!-- -------------------------- -->

<!-- QUẢN LÝ TIN ĐĂNG CHO THUÊ -->
<script>
$('.ldt_one').click(function() {
    $('.ldt_table').removeClass('hidden');
    $('.ldt_layout_tuan').addClass('hidden');
    $('.ldt_tinnhap').addClass('hidden');
    $('.tuan_thang').addClass('hidden');
    $('.ldt_layout_thang    ').addClass('hidden');

})
$('.ldt_two').click(function() {
    $('.ldt_table').addClass('hidden');
    $('.ldt_layout_tuan').removeClass('hidden');
    $('.ldt_click_tuanthang').removeClass('hidden');
    $('.ldt_tinnhap').removeClass('hidden');
})

// LỊCH ĐẨY TIN TUẦN, THÁNG
$('.ldt_click_show_tuan').click(function() {
    $('.khung_div_thang1').addClass('hidden');
    $('.ldt_layout_tuan').removeClass('hidden');
})
$('.ldt_click_show_thang').click(function() {
    $('.khung_div_thang1').removeClass('hidden');
    $('.ldt_layout_tuan').addClass('hidden');
    $('.layout_thang').addClass('hidden')
})
</script>
<!-- -------------------------- -->


<script>
// Click Popup mua bán / 3 chấm
$('.show_popup_3cham').click(function() {
    $(this).parents('.dt_khoi2_noidung_right_padding3_sub').find('.popup_muaban').toggleClass('hidden');
})
</script>
<script>
$(".select_option").select2({
    width: "100%",
});
</script>
<script>
$('.click_event_1024').click(function() {
    $('.click_con2_2').toggleClass('block')
})

//---------------------search

$("#select_city").change(function(){
    search();
})
$("#select_stt").change(function(){
    search();
})
$(".input_search").keypress(function(e){
    if(e.which == 13) {
        search();
    }
})
$(".abs_search").click(function(){
    search();
})

function search()
{
    var link = "quan-ly-tin-dang-cho-thue.html";
    var id_cit = $("#select_city").val();
    var keyword= $(".input_search").val();
    link += "?key=" + keyword;
    if(id_cit != null)
    {
        link += "&id_cit=" + id_cit;
    }
    var id_stt = $("#select_stt").val();
    if(id_stt != null)
    {
        link += "&stt=" + id_stt;
    }
    location.href= link;
}

//-------------------------
$(".page-link").each(function() {
    var stt = $("#select_stt").val();
    var id_cit = $("#select_city").val();
    var keyword = $('.search-pr').val();
        if (keyword !== '' || id_cit != null || stt != null) {
            $(this).find('a').attr("href", $(this).find('a').attr('href') + "?keyword=" + keyword + "&cit=" + citi_id + "&stt=" + stt);
        }
});

$('.btn_delete_news').click(function(){
    $('.popup_xoa_btn1').attr('data_id',$(this).attr('data-id'));
})

$('.popup_xoa_btn1').click(function(){
    var id_news = $(this).attr('data_id');
    var data = new FormData();
    data.append('id_news', id_news);       
    $.ajax({
        type: 'POST',
        url: "admin/ManageNews/deleteNews",
        data: data,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
        enctype: 'multipart/form-data',
        success: function(response) {
            if (response.status == true) {
                alert("Xóa tin đăng mua bán thành công");
                window.location.reload();
            }
        }
    });
})
</script>


</html>