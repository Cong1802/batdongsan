<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tin đăng thiết kế</title>
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_d_sdn.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_header_d.css">
</head>

<body>
    <div class="body_dang_tin">
        <div class="dt_khoi_tong flex">
            <div class="dt_khoi1">
                <? require_once APPPATH.'views/site/includes/sidebar.php'?>
            </div>
            <div class="dt_khoi2">
                <div class="dt_khoi2_header mr_b26px">
                    <? require_once APPPATH.'views/site/includes/header_sdn.php'?>
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
                                    </div>
                                    <!-- Cho thuê -->
                                    <div class="dt_khoi2_noidung_left_one mr_b4px currsor_p">
                                        <a href="quan-ly-tin-dang-cho-thue.html"
                                            class="dt_khoi2_noidung_khoi_click  click_toggle2 flex align_item_c jus_sb mr_b4px bg_1024">
                                            <div class="dt_khoi2_noidung_khoi_click_text fz16_5 color_999">Cho thuê (<?= $count_all_lease ?>)
                                            </div>
                                            <div class="dt_khoi2_noidung_khoi_click_img add_stroke2 ic_bottom_1024">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 9L12 15L18 9" stroke="#000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Dự án -->
                                    <div class="dt_khoi2_noidung_left_one mr_b4px currsor_p">
                                        <a href="quan-ly-tin-dang-du-an.html"
                                            class="dt_khoi2_noidung_khoi_click  click_toggle5 flex align_item_c jus_sb mr_b4px bg_1024">
                                            <div
                                                class="dt_khoi2_noidung_khoi_click_text fz16_5 click_muaban_cha color_999">
                                                Dự
                                                án (<?= $countAllProject ?>)
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
                                    <div class="dt_khoi2_noidung_left_one dt_khoi2_noidung_left_one_main mr_b4px currsor_p">
                                        <div class="dt_khoi2_noidung_left_one_thietke">
                                            <div class="dt_khoi2_noidung_khoi_click click_toggle3 bg_click flex align_item_c jus_sb mr_b4px">
                                                <div class="dt_khoi2_noidung_khoi_click_text fz16_5 main_color">Thiết kế
                                                    đẹp(<?= $count_all ?>)</div>
                                                <div
                                                    class="dt_khoi2_noidung_khoi_click_img dt_khoi2_noidung_left_one_thietke_click add_stroke3 add_stroke remove_stroke click_event_1366">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 9L12 15L18 9" stroke="#000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dt_khoi2_noidung_khoi_click_img dt_khoi2_noidung_left_one_thietke_click add_stroke3 add_stroke remove_stroke click_event_1024">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 9L12 15L18 9" stroke="#000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="click_con3">
                                                <div class="dt_khoi2_noidung_khoi_click_con c_tkdep <?= (!isset($_GET['type']) || $_GET['type'] == 1) ? "bg_click" : "" ?> mr_l24px mr_b4px"
                                                    onclick="tkdep(this);location.href='quan-ly-tin-dang-thiet-ke.html?type=1'"">
                                                    <div data-id="1" class="dt_khoi2_noidung_khoi_click_text_sub btn_next_page fz16_4">Tất cả (<?= $count_all ?>)
                                                    </div>
                                                </div>
                                                <div class="dt_khoi2_noidung_khoi_click_con <?= (isset($_GET['type']) && $_GET['type'] == 3) ? "bg_click" : "" ?> c_tkdep mr_l24px mr_b4px"
                                                    onclick="tkdep(this);location.href='quan-ly-tin-dang-thiet-ke.html?type=3'"">
                                                    <div data-id="3" class="dt_khoi2_noidung_khoi_click_text_sub  btn_next_page fz16_4">Nhà đep (<?= $countNewsHome ?>)</div>
                                                </div>
                                                <div class="dt_khoi2_noidung_khoi_click_con <?= (isset($_GET['type']) && $_GET['type'] == 2) ? "bg_click" : "" ?> c_tkdep mr_l24px"
                                                    onclick="tkdep(this);location.href='quan-ly-tin-dang-thiet-ke.html?type=2'">
                                                    <div data-id="2" class="dt_khoi2_noidung_khoi_click_text_sub btn_next_page fz16_4">Phòng đẹp (<?= $countNewsRoom ?>)</div>
                                                </div>
                                            </div>
                                            <div class="click_con3_3">
                                                <div  class="dt_khoi2_noidung_khoi_click_con c_tkdep <?= (!isset($_GET['type']) || $_GET['type'] == 1) ? "bg_click" : "" ?> mr_l24px mr_b4px"
                                                    onclick="tkdep(this);location.href='quan-ly-tin-dang-thiet-ke.html?type=1'">
                                                    <div data-id="1" class="dt_khoi2_noidung_khoi_click_text_sub btn_next_page fz16_4">Tất cả (<?= $count_all ?>)
                                                    </div>
                                                </div>
                                                <div class="dt_khoi2_noidung_khoi_click_con <?= (isset($_GET['type']) && $_GET['type'] == 3) ? "bg_click" : "" ?> c_tkdep mr_l24px mr_b4px"
                                                    onclick="tkdep(this);location.href='quan-ly-tin-dang-thiet-ke.html?type=3'">
                                                    <div data-id="3" class="dt_khoi2_noidung_khoi_click_text_sub fz16_4 btn_next_page">Nhà đep
                                                        (<?= $countNewsHome ?>)</div>
                                                </div>
                                                <div class="dt_khoi2_noidung_khoi_click_con <?= (isset($_GET['type']) && $_GET['type'] == 2) ? "bg_click" : "" ?> c_tkdep mr_l24px"
                                                    onclick="tkdep(this);location.href='quan-ly-tin-dang-thiet-ke.html?type=2'">
                                                    <div data-id="2" class="dt_khoi2_noidung_khoi_click_text_sub fz16_4 btn_next_page">Phòng đẹp
                                                        (<?= $countNewsRoom ?>)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tin đã lưu -->
                                    <div class="dt_khoi2_noidung_left_one mr_b4px currsor_p">
                                        <a href="quan-ly-tin-dang-tin-luu.html"
                                            class="dt_khoi2_noidung_khoi_click  click_toggle4 flex align_item_c jus_sb mr_b4px bg_1024">
                                            <div class="dt_khoi2_noidung_khoi_click_text fz16_5 color_999">Tin đã lưu
                                                (<?= $count_AllSave ?>)</div>
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
                        <!-- Thiết kế đẹp -->
                        <div class="div_right_three layout_thietke">
                            <div class="dt_khoi2_noidung_right_padding1 mr_b24px">
                                <div class="noidung_right_khoi flex">
                                    <div class="them_div_man_375_sub1 flex">
                                        <div class="noidung_right_khoi_search1 mr_r24px">
                                            <input type="text" class="input_search" value="<?= isset($_GET['key']) ? $_GET['key'] : "" ?>" placeholder="Nhập ID, tiêu đề tin">
                                            <input type="hidden" class="search-pr" value="<?= isset($_GET['key']) ? $_GET['key'] : ''; ?>">
                                            <div class="abs_search">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/search_34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="div_right_three_select mr_r24px">
                                            <select name="" id="select_city" class="select_option js-states form-control">
                                                <option disabled selected>Chọn thành phố </option>
                                                <? foreach($listcity as $opt): ?>
                                                <option <?= (isset($_GET['id_cit']) && $_GET['id_cit'] == $opt['cit_id']) ? "selected" : "" ?> value="<?= $opt['cit_id'] ?>"><?= $opt['cit_name'] ?></option>
                                                <? endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="them_div_man_375_sub2 flex">
                                        <div class="div_right_three_search2 mr_r24px">
                                            <input type="date" class="filter_date" value="<?= isset($_GET['time']) ? $_GET['time'] : ""?>" name="date" placeholder="Ngày đăng tin">
                                        </div>
                                        <div class="div_right_three_select">
                                            <select name="" id="select_styles" class="select_option js-states form-control">
                                                <option selected disabled >Phong cách</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Đương đại") ? "selected" : "" ?> value="Đương đại">Đương đại</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Hiện đại") ? "selected" : "" ?> value="Hiện đại">Hiện đại</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Tối giản") ? "selected" : "" ?> value="Tối giản">Tối giản</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Truyền thống") ? "selected" : "" ?> value="Truyền thống">Truyền thống</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Cổ điển") ? "selected" : "" ?> value="Cổ điển">Cổ điển</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Tân cổ điển") ? "selected" : "" ?> value="Tân cổ điển">Tân cổ điển</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Scanvindinavian") ? "selected" : "" ?> value="Scanvindinavian">Scanvindinavian</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Vintage") ? "selected" : "" ?> value="Vintage">Vintage</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Retro") ? "selected" : "" ?> value="Retro">Retro</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Bohemia") ? "selected" : "" ?> value="Bohemia">Bohemia</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Indochine") ? "selected" : "" ?> value="Indochine">Indochine</option>
                                                <option <?= (isset($_GET['style']) && $_GET['style'] == "Khác") ? "selected" : "" ?> value="Khác">Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Thiết kế đẹp / tất cả -->
                            <div class="div_right_three_noidung flex flex_w tat_ca">
                                <? 
                                    foreach($newsDesign as $rows): 
                                    $m = date('m',$rows['time_create']);
                                    $d = date('d',$rows['time_create']);
                                    $y = date('Y',$rows['time_create']);
                                    $arr_img = json_decode($rows['arr_img']);
                                ?>
                                    <div class="div_right_three_noidung_div div_right_three_noidung_div_fig_tk mr_r24px mr_b32px">
                                        <div class="div_right_three_noidung_img">
                                            <? if($rows['type'] == 3): ?>
                                            <img class="can_hover" src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $rows['banner_img'] ?>" alt="">
                                            <? elseif($rows['type'] == 2 && $arr_img[0] != ""): ?>
                                                <img class="can_hover" src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $arr_img[0] ?>" alt="">
                                            <? else: ?>
                                                <img class="can_hover" src="<? echo base_url(); ?>assets/images/test_2.png" alt="">
                                            <? endif ?>
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex"><?= $rows['news_view'] ?></div>
                                            </div>

                                            <div class="icon_3cham_1024">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>
                                            <div class="popup_nho hidden">
                                                <div onclick="location.href='cap-nhat-tin-dang-<?= ($rows['type'] == 2) ? 'phong-dep' : 'nha-dep' ?>-<?= $rows['id_news'] ?>.html'" class="popup_nho_div1 cursor_p flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div onclick="delete_newsDesign(<?= $rows['id_news'] ?>)" class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img">
                                                <div class="div_right_three_abs flex">
                                                    <div class="div_right_three_abs_img mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                    </div>
                                                    <div class="div_right_three_abs_tex"><?= $rows['news_view'] ?></div>
                                                </div>
                                                <div class="hover_img_icon">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                                </div>

                                                <div class="popup_nho hidden">
                                                    <div class="popup_nho_div1 flex">
                                                        <div class="popup_nho_div1_icon mr_r8px">
                                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                        </div>
                                                        <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                    </div>
                                                    <div class="popup_nho_div1 flex">
                                                        <div class="popup_nho_div1_icon mr_r8px">
                                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                        </div>
                                                        <div class="popup_nho_div1_tex">Xóa</div>
                                                    </div>
                                                </div>

                                                <div class="hover_img_text">
                                                    <? 
                                                        if(!file_exists("/upload/'".$y."'/'".$m."'/'".$d."'/'".$rows['desc_project']."'")) 
                                                        {
                                                            echo $rows['desc_project'];
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="div_right_three_noidung_div_sub">
                                            <div class="hover_img_text_2 elipsis2">
                                                <?= $rows['title_news'] ?>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                                <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_bt"><?= ($rows['type'] == 3) ? "Nhà đẹp" : "Phòng đẹp" ?></div>
                                            </div>
                                            <div class="border_b mr_b8px"></div>
                                            <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                                <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                    <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                        <? if($rows['user_avt'] != "" && file_exists("upload/'".$y."'/'".$m."'/'".$d."'/'".$rows['user_avt']."'")): ?>
                                                        <img src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $rows['user_avt'] ?>" alt="">
                                                        <? else: ?>
                                                        <img src="<? echo base_url(); ?>assets/images/avatar_test.png" alt="">
                                                        <? endif ?>
                                                    </div>
                                                    <div class="div_right_three_noidung_div_sub2_info_text">
                                                        <?= $rows['name'] ?>
                                                    </div>
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                    <div class="div_right_three_noidung_div_icon mr_r24px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                    </div>
                                                    <div class="div_right_three_noidung_div_icon red_tim">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                                stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach;?>
                                <? print_r($pagination) ?>
                            </div>
                            <!-- Thiết kế đẹp / nhà đẹp -->
                            <div class="div_right_three_noidung flex flex_w nha_dep hidden">
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="body_phantrang padding_unset mr_t32px pd_b_us w100pt">
                                    <div class="body_phantrang_img flex juss_tify_end">
                                        <div class="body_phantrang_img_left mr_r16px">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/phantrang_left.png" alt="">
                                        </div>
                                        <div class="body_phantrang_number flex">
                                            <div class="phantrang_number mr_r8px main_bg while_color">1</div>
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
                            <!-- Thiết kế đẹp / phòng đẹp -->
                            <div class="div_right_three_noidung flex flex_w phong_dep hidden">
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="div_right_three_noidung_div mr_r24px mr_b32px">
                                    <div class="div_right_three_noidung_img">
                                        <img class="can_hover" src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                        <div class="div_right_three_abs flex">
                                            <div class="div_right_three_abs_img mr_r8px">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                            </div>
                                            <div class="div_right_three_abs_tex">123</div>
                                        </div>
                                        <div class="hover_img ">
                                            <div class="div_right_three_abs flex">
                                                <div class="div_right_three_abs_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_three_abs_tex">123</div>
                                            </div>
                                            <div class="hover_img_icon">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/hover_icon_3cham.png" alt="">
                                            </div>

                                            <div class="popup_nho hidden">
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Chỉnh sửa</div>
                                                </div>
                                                <div class="popup_nho_div1 flex">
                                                    <div class="popup_nho_div1_icon mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/xoa.png" alt="">
                                                    </div>
                                                    <div class="popup_nho_div1_tex">Xóa</div>
                                                </div>
                                            </div>

                                            <div class="hover_img_text">Không gian làm việc tại nhà được bố trí hợp lý,
                                                sử dụng vật
                                                liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác
                                                riêng biệt và tập tru...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div_right_three_noidung_div_sub">
                                        <div class="div_right_three_noidung_div_sub1 flex jus_sb align_item_c mr_b8px">
                                            <div class="div_right_three_noidung_div_sao flex align_item_c">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saovang.png" alt="">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/saotrang.png" alt="">
                                            </div>
                                            <div class="div_right_three_noidung_div_bt">Nhà đẹp</div>
                                        </div>
                                        <div class="border_b mr_b8px"></div>
                                        <div class="div_right_three_noidung_div_sub2 flex jus_sb">
                                            <div class="div_right_three_noidung_div_sub2_info flex align_item_c">
                                                <div class="div_right_three_noidung_div_sub2_info_img mr_r8px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_sub2_info_text">
                                                    Nguyễn Ngọc Tuyết Phương
                                                </div>
                                            </div>
                                            <div class="div_right_three_noidung_div_sub2_tim flex align_item_c">
                                                <div class="div_right_three_noidung_div_icon mr_r24px">
                                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/chiase.png" alt="">
                                                </div>
                                                <div class="div_right_three_noidung_div_icon red_tim">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.8401 4.61012C20.3294 4.09912 19.7229 3.69376 19.0555 3.4172C18.388 3.14064 17.6726 2.99829 16.9501 2.99829C16.2276 2.99829 15.5122 3.14064 14.8448 3.4172C14.1773 3.69376 13.5709 4.09912 13.0601 4.61012L12.0001 5.67012L10.9401 4.61012C9.90843 3.57842 8.50915 2.99883 7.05012 2.99883C5.59109 2.99883 4.19181 3.57842 3.16012 4.61012C2.12843 5.64181 1.54883 7.04108 1.54883 8.50012C1.54883 9.95915 2.12843 11.3584 3.16012 12.3901L4.22012 13.4501L12.0001 21.2301L19.7801 13.4501L20.8401 12.3901C21.3511 11.8794 21.7565 11.2729 22.033 10.6055C22.3096 9.93801 22.4519 9.2226 22.4519 8.50012C22.4519 7.77763 22.3096 7.06222 22.033 6.39476C21.7565 5.7273 21.3511 5.12087 20.8401 4.61012V4.61012Z"
                                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="body_phantrang padding_unset mr_t32px pd_b_us w100pt">
                                    <div class="body_phantrang_img flex juss_tify_end">
                                        <div class="body_phantrang_img_left mr_r16px">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/phantrang_left.png" alt="">
                                        </div>
                                        <div class="body_phantrang_number flex">
                                            <div class="phantrang_number mr_r8px main_bg while_color">1</div>
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
                    </div>


                </div>
            </div>
        </div>
        <div class="dt_khoi3">
            <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
        </div>
    </div>



</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_duy.js"></script>

<script>
function tkdep(click_tk_dep) {
    $('.c_tkdep').removeClass('bg_click')
    $(click_tk_dep).addClass('bg_click');
}

$('.click_event_1024').click(function() {
    $('.click_con3_3').toggleClass('block')
})

$('.red_tim').click(function() {
    $(this).toggleClass('tim_fill');
    $(this).toggleClass('tim_stroke');
})

// SHOW POPUP NHỎ
$('.hover_img_icon').click(function() {
    $(this).parents('.div_right_three_noidung_img').children('.popup_nho').toggleClass('hidden');
})
$('.icon_3cham_1024').click(function() {
    $(this).parent('.div_right_three_noidung_img').find('.popup_nho').toggleClass('hidden');
})
</script>

<script>
$(".select_option").select2({
    width: "100%",
});

//---------------------search
$("#select_city").change(function(){
    search();
})
$("#select_styles").change(function(){
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
$(".filter_date").change(function(){
    search();
})
function search()
{
    var type = <?= isset($_GET['type']) ? $_GET['type'] : "0" ?>;
    var link = "/quan-ly-tin-dang-thiet-ke.html";
    var id_cit = $("#select_city").val();
    var keyword = $(".input_search").val();
    var time = $(".filter_date").val();
    link += "?key=" + keyword;
    if(id_cit != null)
    {
        link += "&id_cit=" + id_cit;
    }
    var style = $("#select_styles").val();
    if(style != null)
    {
        link += "&style=" + style;
    }
    if(time != "")
    {
        link += "&time=" + time;
    }
    if(type != "")
    {
        link += "&type=" + type;
    }
    location.href= link;
}

//-------------------------
$(".page-link").each(function() {
    var id_cit = $("#select_city").val();
    var keyword = $('.search-pr').val();
    var time= $(".filter_date").val();
    var type = <?= isset($_GET['type']) ? $_GET['type'] : "0" ?>;
    var style = $("#select_styles").val();
    var href = "";
        if(id_cit != null)
        {
            href = "&cit=" + id_cit;
        }
        if(time != '')
        {
            href += "&time=" + time;
        }
        if(type != 0)
        {
            href += "&type=" + type;
        }
        if(style != null)
        {
            href += "&style=" + style;
        }
        $(this).find('a').attr("href", $(this).find('a').attr('href') + "?keyword=" + keyword + href);
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
                alert("Xóa tin đăng dự án thành công");
                window.location.reload();
            }
        }
    });
})

function delete_newsDesign(s1)
{
    alert(s1);
}
</script>



</html>