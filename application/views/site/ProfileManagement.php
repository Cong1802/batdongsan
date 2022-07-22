<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_t_quang.css">
    <title>Quản lý hồ sơ</title>
</head>

<body>
    <div class="position_r d_flex back_f7f8fc ql_hoso">
        <div class="link_sidebar_quang">
            <? require_once APPPATH.'views/site/includes/sidebar.php'?>
        </div>
        <div class="wapper bg_blue_10 pd_tlr_8_24 flex_1 d_flex flex_column">
            <? require_once APPPATH.'views/site/includes/header_sdn.php'?>
            <div class="pd_b_64">
                <div class="personals mt_24">
                    <div class=" personals_tong d_flex mt_16">
                        <div class="filter_news bg_white pd_tb24_lr8 w_188 br_8 mn_h768">
                            <h2 class="font_s18 line_h24 font_w500 black_md pd_l_8">Hồ sơ</h2>
                            <div class="filter_menu mt_24">
                                <div class="filter_item">
                                    <div class="d_flex br_8 align_c space_b pd_9_8 pd_r_0 filter_name " id="ds_theodoi">
                                        <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Danh sách theo dõi</span>
                                        <div class="d_flex align_c records_375_img">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 9L12 15L18 9" stroke="#474747" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="children_menu">
                                        <div class="filter_item <?= (!isset($_GET['follow']) || $_GET['follow'] == 0) ? 'acive_mnc1' : "" ?>" onclick="search(0)">
                                            <div class="d_flex br_8 align_c space_b pd_9_8">
                                                <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Người theo dõi (<?= $CountFollower ?>)</span>
                                            </div>
                                        </div>

                                        <div class="filter_item <?= (isset($_GET['follow']) && $_GET['follow'] == 1) ? 'acive_mnc1' : "" ?>" onclick="search(1)">
                                            <div class="d_flex br_8 align_c space_b pd_9_8">
                                                <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Đang theo dõi (<?= $CountFollowUsers ?>)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="filter_item" onclick="location.href='khach-hang-tiem-nang.html'">
                                    <div class="d_flex br_8 align_c space_b pd_9_8 filter_name">
                                        <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Khách hàng tiềm năng</span>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="filter_item">
                                    <div class="d_flex br_8 align_c space_b pd_9_8 filter_name">
                                        <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Khách hàng từ điểm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="result_news flex_1 pd_l_24">
                            <div class="managent_menu bg_white pd_16 hidden">
                                <h4 class="font_s16 line_h24">Hồ sơ</h4>
                                <div class="d_flex align_c mt_16 managent_menu_list">
                                    <div class="h_40 w_214 click_acive acive_mnc1_mb" onclick="clickToggleClass(this,'.managent_menu_list','acive_mnc1_mb')">
                                        <select name="" id="select_chon_kh" class="select_option menu_child">
                                            <option value="1">Danh sách theo dõi (20)</option>
                                            <option value="1">Người theo dõi</option>
                                            <option value="2">Người đang theo dõi</option>
                                        </select>
                                    </div>
                                    <div class="h_40 bg_gray click_kh" onclick="activeChangeTable(this,'.managent_menu_list','acive_mnc1_mb','.content_ft','potential','viewsActivePeople')">
                                        <span>Khách hàng tiềm năng (20)</span>
                                    </div>
                                    <div class="h_40 bg_gray click_kh click_kh_diem" onclick="activeChangeTable(this,'.managent_menu_list','acive_mnc1_mb','.content_ft','table_transaction','viewsActivePeople')">
                                        <span>Khách hàng từ điểm (20)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="select_controles d_flex align_c bg_white br_8 records">
                                <div class=" select_controles_search  h_40 position_r">
                                    <input type="text" value="<?= isset($_GET['key']) ? $_GET['key'] : "" ?>" placeholder="Tìm kiếm theo tên, số điện thoại" class="rs_input input_search ipfzdf bd-grayc pd_11_16 w_100 h_100 br_8" />
                                    <div class="position_a abs_search sr_btn wh_20">
                                        <img src="<? echo base_url(); ?>assets/images/search_blue.png" alt="">
                                    </div>
                                </div>
                                <div class="w_188_40">
                                    <select name="" id="select_city" class="select_option">
                                        <option value="0">Toàn quốc</option>
                                        <? foreach($list_city as $opt): ?>
                                        <option <?= ((isset($_GET['id_cit'])) && $_GET['id_cit'] == $opt['cit_id']) ?  " selected" : "" ?> value="<?= $opt['cit_id'] ?>"><?= $opt['cit_name'] ?></option>
                                        <? endforeach ?>
                                    </select>
                                </div>
                                <div class="w_188_40">
                                    <select name="" id="select_districs" class="select_option">
                                        <option selected disabled >Chọn quận huyện</option>
                                        <? 
                                            if(isset($_GET['id_cit'])  && $_GET['id_cit'] != 0): 
                                            foreach($listDistricts as $opt):
                                        ?>
                                        <option <?= ((isset($_GET['district'])) && $_GET['district'] == $opt['cit_id']) ?  " selected" : "" ?> value="<?= $opt['cit_id'] ?>"><?= $opt['cit_name'] ?></option>
                                        <? endforeach;endif ?>
                                    </select>
                                </div>
                                <div class="w_188_40">
                                    <select name="" id="select_type_news" class="select_option">
                                        <option disabled selected>Loại hình</option>
                                        <option <?= ((isset($_GET['type_news'])) && $_GET['type_news'] == 1) ?  " selected" : "" ?> value="1">Mua bán</option>
                                        <option <?= ((isset($_GET['type_news'])) && $_GET['type_news'] == 2) ?  " selected" : "" ?> value="2">Cho thuê</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content_ft mt_24">
                                <!-- Người theo dõi -->
                                <div class="content_list follower viewsActivePeople">
                                    <?php
                                    foreach ($listUsers as $rows):
                                    $d = date('d',$rows['avtDate']);
                                    $m = date('m',$rows['avtDate']);
                                    $y = date('Y',$rows['avtDate']);
                                    ?>
                                        <div class="item_ct d_flex br_8 center_center">
                                            <div class="left d_flex flex_1">
                                                <div class="wh_120 position_r fshrink br_50p">
                                                    <? if($rows['user_avt'] != '' && file_exists('upload/"'.$y.'"/"'.$m.'"/"'.$d.'"/"'.$rows['user_avt'].'"')): ?>
                                                        <img src="<? echo base_url(); ?>'upload/<? $y ?>/<? $m ?>/<? $d ?>/<? $rows['user_avt']?>'" alt="" class="br_50p">    
                                                    <? else: ?>
                                                        <img src="<? echo base_url(); ?>assets/images/avatar_ts.png" alt="" class="br_50p">
                                                    <? endif ?>

                                                    <div class="records_management-star d_flex mr_t_9 center_center">
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml_16 flex_1 pd_t_4 bd_b_gray pd_b_9 w_90pt">
                                                    <h3 class="font_s18 line_h21 font_w500 black_md ellipsis_1"><?= $rows['name'] ?></h3>
                                                    <?php
                                                        $CI = &get_instance();
                                                        $CI->load->model('M_Account');
                                                        $countNews = $this->M_Account->CountNews($rows['id']);  
                                                    ?>
                                                   
                                                    <p class="font_s16 line_h19 font_w400 black_md block mt_8"><span class="cl_blue"><?= $countNews ?></span> tin đăng</p>
                                                    <span class="font_s16 line_h24 font_w500 black_md block mt_8">Khu vực hoạt động: <span class="font_w400"><?= $rows['cit_name'] ?></span></span>
                                                    <span class="font_s16 line_h19 font_w500 black_md block mt_8">Loại hình bđs: <span class="font_w400"><?= $newType[$rows['newType']] ?></span></span>
                                                    <div class="d_flex align_c flex_start mt_13">
                                                        <a href="/thong-tin-nguoi-mua-thue-<?= $rows['id'] ?>.html" class="d_flex align_c">
                                                            <span class="font_s16 line_h19 font_w500 cl_blue block mr_2">Xem chi tiết</span>
                                                            <div class="d_flex align_c wh_19">
                                                                <img src="<? echo base_url(); ?>assets/images/chevron-right_blue.png" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right position_r">
                                                <button class="btn br_8 d_flex align_c flex_center cl_blue btn_bd_blue w_157_40">
                                                    <div class="wh_24 mr_8">
                                                        <img src="<? echo base_url(); ?>assets/images/inbox_blue.svg" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w500 cl_blue">Chat ngay</span>
                                                </button>
                                                <button data-type = '<?= ($arr_follow != '' && in_array($rows['id'],$arr_follow)) ? 1 : 0 ?>' data-id='<?= $rows['id'] ?>' class="btn br_8 btn_follow d_flex align_c flex_center cl_white btn_infor w_157_40 mt_8">
                                                    <div class="wh_24 mr_8">
                                                        <img src="<? echo base_url(); ?>assets/images/fi-rr-user-add_white.svg" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w500 cl_white"><?= ($arr_follow != '' && in_array($rows['id'],$arr_follow)) ? 'Đang theo dõi' : 'Theo dõi' ?></span>
                                                </button>
                                            </div>
                                        </div>
                                    <? endforeach ?>
                                </div>
                                <!-- //Người theo dõi -->

                                <!-- // khách hàng từ điểm -->
                                <div class="main_table_list_all position_r mt_24 table_person table_transaction fz15 ">
                                    <!-- Ví 3s -->
                                    <div class="box_main_table_list position_r wallet activeTableView">
                                        <table class="table" id="scroll_tb">
                                            <thead class="">
                                                <tr class="bg_blue_5 cl_ch_blue">
                                                    <th class="stt">STT</th>
                                                    <th>Tên khách hàng</th>
                                                    <th>Thông tin khách hàng</th>
                                                    <th>Bất động sản quan tâm</th>
                                                    <th>Thời gian dùng điểm</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 0; $i < 10; $i++) :
                                                    $index = rand(0, 1) ?>
                                                    <tr>
                                                        <td class="stt"><?= $i + 1 ?></td>
                                                        <td>
                                                            <div class="d_flex align_c">
                                                                <div class="wh_26 br_50p  over_hd mr_10">
                                                                    <img src="<? echo base_url(); ?>assets/images/avatar_ts.png" alt="">
                                                                </div>
                                                                <span class="font_s15 line_h24 font_w400 black_md">Wade Warren</span>
                                                                <div class="ml_16 wh_20 d_flex align_c">
                                                                    <img src="<? echo base_url(); ?>assets/images/inbox_blue.svg" alt="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="block">0123456789</span>
                                                            <span class="block mt_8">ABC123@gmail.com</span>
                                                        </td>
                                                        <td>Mua nhà riêng</td>
                                                        <td>
                                                            <span class="block">20:00 CH</span>
                                                            <span class="block mt_8">20/10/2022</span>
                                                        </td>
                                                    </tr>
                                                <?php endfor; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination mt_32 d_flex flex_end">
                    <? print_r($pagination) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php'?>
    <script type="text/javascript" src="<? echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<? echo base_url(); ?>assets/js/js_t.js"></script>
    <script type="text/javascript" src="<? echo base_url(); ?>assets/js/select2.min.js"></script>
    <script type="text/javascript" src="<? echo base_url(); ?>assets/js/slick.min.js"></script>
    <script>
        var base_url = '<?= base_url() ?>';
        $(".select_option").select2({
            width: "100%",
        });

        // $('.click_acive').change(()=>{
        // })

        let clientWidth = window.innerWidth;
        if (clientWidth <= 768) {
            handle_show_popup([{
                className: '.table_transaction thead tr th:last-child',
                arr: '',
                noidung: 'Thời gian'
            }])
        }
        $('#quanlyhoso').addClass('color_click')

        //---------------------search

$("#select_city").change(function(){
    search();
})
$("#select_type_news,#select_districs").change(function(){
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


function search(s1)
{
    var link = "quan-ly-ho-so.html";
    var id_cit = $("#select_city").val();
    var district = $("#select_districs").val();
    var keyword= $(".input_search").val();
    link += "?key=" + keyword;
    if(s1 != undefined)
    {
        link += "&follow=" + s1;
    }
    else
    {
        link += "&follow=" + '<?= isset($_GET['follow']) ? $_GET['follow'] : '' ?>';
    }
    if(id_cit != null)
    {
        link += "&id_cit=" + id_cit;
    }
    if(district != null)
    {
        link += "&district=" + district;
    }
    var type_news = $("#select_type_news").val();
    if(type_news != null)
    {
        link += "&type_news=" + type_news;
    }
    location.href= link;
}

//-------------------------
$(".page-link").each(function() {
    var follow      = '<?= isset($_GET['follow']) ? $_GET['follow'] : '' ?>'
    var district = $("#select_districs").val();
    var type_news = $("#select_type_news").val();
    var id_cit = $("#select_city").val();
    var keyword = $('.input_search').val();
    var link = $(this).find('a').attr("href");
    var type_news = $("#select_type_news").val();
    link    += "?key=" + keyword;
    if(follow != '')
    {
        link += "&follow=" + follow;
    }
    if(id_cit != null)
    {
        link += "&id_cit=" + id_cit;
    }
    if(district != null)
    {
        link += "&district=" + district;
    }
    if(type_news != null)
    {
        link += "&type_news=" + type_news;
    }
        if (keyword != '' || id_cit != null || type_news != null) {
            $(this).find('a').attr("href",link);
        }
    });

    $('.btn_follow').click(function(){
        var a = $(this);
        var type = a.attr('data-type');
        var id_user = $(this).attr('data-id');
        var form_data = new FormData();
        form_data.append('id_user',id_user);
        form_data.append('type',type);
        $.ajax({
            url:base_url+'Account/followUser',
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            data:form_data,
            enctype: 'multipart/form-data',
            success: function(response) {
                if (response.status == 1) {
                    a.find('span').text('Đang theo dõi')
                    a.attr('data-type',1)
                }
                else
                {
                    a.find('span').text('Theo dõi')
                    a.attr('data-type',0)
                }
            },
            error: function(xhr) {
                alert('Error');
            }
        })
    })
    </script>
</body>

</html>