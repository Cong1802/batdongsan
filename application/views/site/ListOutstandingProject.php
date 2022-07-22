<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/slick-theme.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_d.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_header_d.css">
    <title>Danh sách dự án nổi bật</title>

</head>

<body>
    <div id="tong_du_an">

        <div class="link_header">
            <? require_once APPPATH.'views/site/includes/da_header.php' ?>
        </div>

        <div class="khoi_all_noidung">

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

            <!-- body DỰ ÁN NỔI BẬT -->
            <div class="body">
                <div class="body_text">

                    <div class="text_sub1 pd_b24px">
                        <div class="them_div_480 flex align_items m_b15px">
                            <a href="">Trang Chủ</a>
                            <div class="text_sub1_fig_icon">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/duy_ic_right.png" alt="">
                            </div>
                            <span class="main_color">Dự án</span>
                        </div>
                        <div class="them_div_480_suv">
                            <div class="loc_480 flex align_items">
                                <div class="loc_480_1 flex align_items mr_r8px">
                                    <div class="loc_480_1_img">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/loc_20.png" alt="">
                                    </div>
                                    <div class="loc_480_1_text">Lọc +</div>
                                </div>
                                <div class="loc_480_2">
                                    <select class="select_option js-states form-control">
                                        <option value="">Toàn quốc</option>
                                        <option value="">Hà Nội</option>
                                        <option value="">Đà Nẵng</option>
                                        <option value="">TP. Hồ Chí Minh</option>
                                        <option value="">Hải Phòng</option>
                                        <option value="">Bà Rịa Vũng Tàu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text_sub2">
                        <div class="border_t_w79px"></div>
                        <p class="text_dau">Danh sách dự án nổi bật</p>
                        <p class="text_cuoi">Có <?= $SumOutstandingPJ ?> dự án</p>
                    </div>
                </div>

                <div class="body_content">
                    <div class="content_dau">
                        <div class="content_img">
							<?
							$y = date('Y', $OutstandingPJ_TBO['time_create']);
							$m = date('m', $OutstandingPJ_TBO['time_create']);
							$d = date('m', $OutstandingPJ_TBO['time_create']);
							$dir = "upload/".$y."/".$m."/".$d;
							?>
                            <img class="img_duan_1" src="<?= $dir."/".$OutstandingPJ_TBO['banner_img'] ?>" alt="">
                        </div>

                        <div class="content_text">
                            <div class="noidung_text">
                                <h2 class="text_1"><?= $OutstandingPJ_TBO['project_name'] ?></h2>
                                <p class="text_2"><?= $OutstandingPJ_TBO['addr_detail'] ?></p>
                                <div class="text_time">
                                    <p class="text_3">Ngày bàn giao: <?= date('d/m/Y', $OutstandingPJ_TBO['day_of_delivery']) ?></p>
                                    <p class="text_4">Trạng thái: <?= $status[$OutstandingPJ_TBO['status']] ?></p>
                                </div>
                                <p class="text_5">
                                    <?= $OutstandingPJ_TBO['desc_project'] ?>
                                </p>
                                <div class="text_money">
                                    <div class="text_6">
                                        <p class="text_6_1">GIá: <span><?= ($OutstandingPJ_TBO['nhapmin'] < 1000000000)?number_format((float)$OutstandingPJ_TBO['nhapmin']/1000000000, 2, '.', ''):$OutstandingPJ_TBO['nhapmin'] / 1000000000 ?> - <?= ($OutstandingPJ_TBO['nhapmax'] < 1000000000)?number_format((float)$OutstandingPJ_TBO['nhapmax']/1000000000, 2, '.', ''):$OutstandingPJ_TBO['nhapmax'] / 1000000000 ?> tỷ</span></p>
                                    </div>
                                    <a class="text_show" href="">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content_cuoi">
                        <div class="show_all">
							<?
							$count_PJ = count($OutstandingPJ_All);
							for ($i=1;$i<$count_PJ;$i++) {
								$y = date('Y', $OutstandingPJ_All[$i]['time_create']);
								$m = date('m', $OutstandingPJ_All[$i]['time_create']);
								$d = date('d', $OutstandingPJ_All[$i]['time_create']);
								$dir = "upload/".$y."/".$m."/".$d;
							?>
                            <div class="show_nha">
                                <div class="show_nha_img">
                                    <img src="<?= $dir."/".$OutstandingPJ_All[$i]['banner_img'] ?>" alt="">
                                    <div class="abs_view flex">
                                        <div class="abs_view_img">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye_white_svg.svg" alt="">
                                        </div>
                                        <div class="abs_view_text"><?= $OutstandingPJ_All[$i]['news_view'] ?></div>
                                    </div>
                                    <div class="abs_like">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                    </div>
                                </div>
                                <div class="show_nha_text">
                                    <div class="show_nha_text-sub">
                                        <p class="show_tex1"><?= $OutstandingPJ_All[$i]['project_name'] ?></p>
                                        <p class="show_tex2"><?= $OutstandingPJ_All[$i]['addr_detail'] ?></p>
                                        <div class="show_show">
                                            <div class="show_tex3">
                                                <div class="show_icon_text mr_b8px">
                                                    <div class="show_icon_text_img" title="Tên công ty">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/bad_svg.svg" alt="">
                                                    </div>
                                                    <p class="show_text3-1">
                                                        <?= $OutstandingPJ_All[$i]['cdt_come_name'] ?>
                                                    </p>
                                                </div>
                                                <div class="show_icon_text mr_b16px">
                                                    <div class="show_icon_text_img" title="Tiến độ">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xaydung.svg" alt="">
                                                    </div>
                                                    <p class="show_text_xd">
                                                        <?= $progress[$OutstandingPJ_All[$i]['progress']] ?>
                                                    </p>
                                                </div>
                                                <div class="show_icon_text">
                                                    <div class="show_icon_text_img"  title="Khoảng giá">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/price_svg.svg" alt="">
                                                    </div>
                                                    <p class="show_text5-1">
													<?= ($OutstandingPJ_All[$i]['nhapmin'] < 1000000000)?number_format((float)$OutstandingPJ_All[$i]['nhapmin']/1000000000, 2, '.', ''):$OutstandingPJ_All[$i]['nhapmin'] / 1000000000 ?> - <?= ($OutstandingPJ_All[$i]['nhapmax'] < 1000000000)?number_format((float)$OutstandingPJ_All[$i]['nhapmax']/1000000000, 2, '.', ''):$OutstandingPJ_All[$i]['nhapmax'] / 1000000000 ?> tỷ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="show_tex4">
                                                <div class="show_icon_text mr_b8px">
                                                    <div class="show_icon_text_img" title="Diện tích">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/kich_thuc_svg.svg "alt="">
                                                    </div>
                                                    <p class="show_text3-2">
                                                        <?= number_format($OutstandingPJ_All[$i]['detail_area'],0,",",".") ?> m2
                                                    </p>
                                                </div>

                                                <div class="show_icon_text mr_b16px">
                                                    <div class="show_icon_text_img" title="Thời gian hoàn thành">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/time_svg.svg" alt="">
                                                    </div>
                                                    <p class="show_text4-2 ">
                                                        <?= date('d/m/Y', $OutstandingPJ_All[$i]['time_done']) ?>
                                                    </p>
                                                </div>
                                                <div class="show_text5-2">
                                                    <div class="show_icon_text_img">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/so_sanh_svg.svg" alt="">
                                                    </div>
                                                    <p>So sánh</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<? } ?>
                        </div>
                    </div>

                    <div class="xemthem">
                        <div class="xemthem_text">
                            <a href="danh-sach-du-an-moi-nhat.html">Xem Thêm</a>
                        </div>
                        <img src="<? echo base_url(); ?>assets/images/img_du_an/next.svg" alt="">
                    </div>
                </div>
            </div>
            <!-- ------------------ -->

            <!-- body DỰ ÁN THEO KHU VỰC -->
            <div class="body_DATKV">
                <div class="body_padding">
                    <div class="body_padding_noidung">
                        <div class="body_padding_noidung_text">
                            <div class="noidung_text_heading">
                                <div class="noidung_text_heading_border"></div>
                                Dự án theo khu vực
                            </div>
                            <div class="noidung_text_khuvuc">
								<? foreach ($list_city as $val) {
									$num_rows = 0;
									foreach ($citynews as $num) {
										if ($num['select_city'] == $val['cit_id']) {
											$num_rows++;
										}
									}
								?>
								<div class="noidung_text_khuvuc_1">
									<p class="noidung_text_khuvuc_sub"><?= $val['cit_name'] ?> (<?= $num_rows ?>)</p>
								</div>
								<? } ?>
                            </div>
                        </div>
                        
                        <div class="body_padding_noidung_img">
                            <div class="noidung_img_DATKV1 js_slider_img">
                                <?php foreach($citynews as $val) {
									$y = date('Y', $val['time_create']);
									$m = date('m', $val['time_create']);
									$d = date('d', $val['time_create']);
									$dir = "upload/".$y."/".$m."/".$d;
								?>
                                    <div class="fig_da_theokv">
                                        <img src="<?= $dir."/".$val['banner_img'] ?>" alt="">
                                        <div class="noidung_img_absolute">
                                            <?= $val['project_name'] ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- --------------------- -->

            <!-- body DANH SÁCH DỰ ÁN SĂP MỞ BÁN -->
            <div class="body_DSdasmb">
                <div class="body_DSdasmb_sub">
                    <div class="body_DSdasmb_sub_heading">
                        <div class="noidung_text_heading_border"></div>
                        Danh sách dự án đang - sắp mở bán
                    </div>

                    <div class="body_DSdasmb_sub_button">
                        <div class="DSdasmb_dang_sap_mo_ban mr_r16px" style="cursor: pointer;">
                            <div class="DSdasmb_dang_sap_mo_ban_a status2 status_active">Đang mở bán</div>
                        </div>
                        <div class="DSdasmb_dang_sap_mo_ban" style="cursor: pointer;">
                            <div class="DSdasmb_dang_sap_mo_ban_a status1">Sắp mở bán</div>
                        </div>
                    </div>

                    <div class="body_DSdasmb_image">
                        <div class="body_DSdasmb_image_bg slick_480_1 w_100 status2_loop">
							<?
							$count_status2 = count($OutstandingPJ_Status2);
							for ($i=0;$i<$count_status2;$i++) {
                                $y = date('Y', $OutstandingPJ_Status2[$i]['time_create']);
                                $m = date('m', $OutstandingPJ_Status2[$i]['time_create']);
                                $d = date('d', $OutstandingPJ_Status2[$i]['time_create']);
								$dir = "upload/".$y."/".$m."/".$d;
							?>
                            <div class="body_DSdasmb_image_bg_sub">
                                <div class="body_DSdasmb_img">
                                    <div class="body_DSdasmb_img_fig">
                                        <img src="<?= $dir."/".$OutstandingPJ_Status2[$i]['banner_img'] ?>" alt="">
                                        <div class="abs_view flex">
                                            <div class="abs_view_img">
                                                <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye_white_svg.svg" alt="">
                                            </div>
                                            <div class="abs_view_text"><?= $OutstandingPJ_Status2[$i]['news_view'] ?></div>
                                        </div>
                                        <div class="abs_like">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/like.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="body_DSdasmb_position">
                                        <?= $OutstandingPJ_Status2[$i]['project_name'] ?>
                                    </div>
                                </div>
                                <div class="body_DSdasmb_all">
                                    <div class="body_DSdasmb_text_icon">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/vitri_svg.svg" alt="">

                                        </div>
                                        <div class="body_DSdasmb_text"><?= $OutstandingPJ_Status2[$i]['addr_detail'] ?></div>
                                    </div>
                                    <div class="not_name">
                                        <div class="het_ten1">
                                            <div class="body_DSdasmb_text_icon">
                                                <div class="show_icon_text_img">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/bad_svg.svg" alt="">
                                                </div>
                                                <div class="body_DSdasmb_text"><?= $OutstandingPJ_Status2[$i]['cdt_come_name'] ?></div>
                                            </div>
                                            <div class="body_DSdasmb_text_icon">
                                                <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xaydung.svg" alt="">
                                                </div>
                                                <div class="body_DSdasmb_text"><?= $progress[$OutstandingPJ_Status2[$i]['progress']] ?></div>
                                            </div>
                                        </div>
                                        <div class="het_ten2">
                                            <div class="body_DSdasmb_text_icon">
                                                <div class="show_icon_text_img">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/kich_thuc_svg.svg "alt="">
                                                </div>
                                                <div class="body_DSdasmb_text"><?= $OutstandingPJ_Status2[$i]['detail_area'] ?> m2</div>
                                            </div>
                                            <div class="body_DSdasmb_text_icon">
                                                <div class="show_icon_text_img">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/time_svg.svg" alt="">
                                                </div>
                                                <div class="body_DSdasmb_text"><?= date('d/m/Y', $OutstandingPJ_Status2[$i]['time_done']) ?></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="body_DSdasmb_text_cuoi">
                                        <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/icon_ul_li/price_svg.svg" alt="">
                                        </div>
                                        <div class="body_DSdasmb_text"><?= ($OutstandingPJ_Status2[$i]['nhapmin'] < 1000000000)?number_format((float)$OutstandingPJ_Status2[$i]['nhapmin']/1000000000, 2, '.', ''):$OutstandingPJ_Status2[$i]['nhapmin'] / 1000000000 ?> - <?= ($OutstandingPJ_Status2[$i]['nhapmax'] < 1000000000)?number_format((float)$OutstandingPJ_Status2[$i]['nhapmax']/1000000000, 2, '.', ''):$OutstandingPJ_Status2[$i]['nhapmax'] / 1000000000 ?> tỷ</div>
                                    </div>
                                </div>
                            </div>
							<? } ?>
                        </div>
                        <div class="body_DSdasmb_image_bg slick_480_1 w_100 status1_loop hidden">
							<?
							$count_status1 = count($OutstandingPJ_Status1);
							for ($i=0;$i<$count_status1;$i++) {
                                $y = date('Y', $OutstandingPJ_Status1[$i]['time_create']);
                                $m = date('m', $OutstandingPJ_Status1[$i]['time_create']);
                                $d = date('d', $OutstandingPJ_Status1[$i]['time_create']);
								$dir = "upload/".$y."/".$m."/".$d;
							?>
                            <div class="body_DSdasmb_image_bg_sub">
                                <div class="body_DSdasmb_img">
                                    <div class="body_DSdasmb_img_fig">
                                        <img src="<?= $dir."/".$OutstandingPJ_Status1[$i]['banner_img'] ?>" alt="">
                                        <div class="abs_view flex">
                                            <div class="abs_view_img">
                                                <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye_white_svg.svg" alt="">
                                            </div>
                                            <div class="abs_view_text"><?= $OutstandingPJ_Status1[$i]['news_view'] ?></div>
                                        </div>
                                        <div class="abs_like">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/like.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="body_DSdasmb_position">
                                        <?= $OutstandingPJ_Status1[$i]['project_name'] ?>
                                    </div>
                                </div>
                                <div class="body_DSdasmb_all">
                                    <div class="body_DSdasmb_text_icon">
                                        <div class="show_icon_text_img">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/vitri_svg.svg" alt="">

                                        </div>
                                        <div class="body_DSdasmb_text"><?= $OutstandingPJ_Status1[$i]['addr_detail'] ?></div>
                                    </div>
                                    <div class="not_name">
                                        <div class="het_ten1">
                                            <div class="body_DSdasmb_text_icon">
                                                <div class="show_icon_text_img">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/bad_svg.svg" alt="">
                                                </div>
                                                <div class="body_DSdasmb_text"><?= $OutstandingPJ_Status1[$i]['cdt_come_name'] ?></div>
                                            </div>
                                            <div class="body_DSdasmb_text_icon">
                                                <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xaydung.svg" alt="">
                                                </div>
                                                <div class="body_DSdasmb_text"><?= $progress[$OutstandingPJ_Status1[$i]['progress']] ?></div>
                                            </div>
                                        </div>
                                        <div class="het_ten2">
                                            <div class="body_DSdasmb_text_icon">
                                                <div class="show_icon_text_img">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/kich_thuc_svg.svg "alt="">
                                                </div>
                                                <div class="body_DSdasmb_text"><?= $OutstandingPJ_Status1[$i]['detail_area'] ?> m2</div>
                                            </div>
                                            <div class="body_DSdasmb_text_icon">
                                                <div class="show_icon_text_img">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/time_svg.svg" alt="">
                                                </div>
                                                <div class="body_DSdasmb_text"><?= date('d/m/Y', $OutstandingPJ_Status1[$i]['time_done']) ?></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="body_DSdasmb_text_cuoi">
                                        <div class="show_icon_text_img">
                                                <img src="<? echo base_url(); ?>assets/images/icon_ul_li/price_svg.svg" alt="">
                                        </div>
                                        <div class="body_DSdasmb_text"><?= ($OutstandingPJ_Status1[$i]['nhapmin'] < 1000000000)?number_format((float)$OutstandingPJ_Status1[$i]['nhapmin']/1000000000, 2, '.', ''):$OutstandingPJ_Status1[$i]['nhapmin'] / 1000000000 ?> - <?= ($OutstandingPJ_Status1[$i]['nhapmax'] < 1000000000)?number_format((float)$OutstandingPJ_Status1[$i]['nhapmax']/1000000000, 2, '.', ''):$OutstandingPJ_Status1[$i]['nhapmax'] / 1000000000 ?> tỷ</div>
                                    </div>
                                </div>
                            </div>
							<? } ?>
                        </div>
                    </div>
                </div>

                <div class="body_DSdasmb_xemthem">
                    <a href="" class="xemthem_bao">
                        <div class="DSdasmb_xemthem main_color">
                            Xem thêm
                        </div>
                        <div class="img_fig_xemthem">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/next.svg" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <!-- --------------------- -->


            <!-- body TIN TỨC DỰ ÁN -->
            <div class="body_tintuc">

                <div class="body_tintuc_duan">
                    <div class="body_tintuc_duan_sub">
                        <div class="body_tintuc_duan_tex mr_b24px">
                            Tin tức dự án
                        </div>
                        <div class="khoi_tintuc">
                            <div class="body_tintuc_duan_img">
                                <div class="img_fig_duan">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/tt_da_1.png" alt="">
                                </div>
                                <div class="khoi_noidung_tintuc">
                                    <div class="tintuc_duan_text1">Những đặc điểm dự án tại Hà Nội</div>
                                    <div class="tintuc_duan_text2">
                                        Chung cư Tràng An Complex là dự án tổ hợp chung cư, thương mại do
                                        GP Invest làm chủ đầu tư. Dự án tọa lạc tại số 1 Phùng Chí Kiên,
                                        đây là vị trí đắc địa của quận Cầu Giấy,...
                                    </div>
                                </div>
                            </div>
                            <div class="body_tintuc_duan_img">
                                <div class="img_fig_duan">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/tt_da_1.png" alt="">
                                </div>
                                <div class="khoi_noidung_tintuc">
                                    <div class="tintuc_duan_text1">Những đặc điểm dự án tại Hà Nội</div>
                                    <div class="tintuc_duan_text2">
                                        Chung cư Tràng An Complex là dự án tổ hợp chung cư, thương mại do
                                        GP Invest làm chủ đầu tư. Dự án tọa lạc tại số 1 Phùng Chí Kiên,
                                        đây là vị trí đắc địa của quận Cầu Giấy,...
                                    </div>
                                </div>
                            </div>
                            <div class="body_tintuc_duan_img">
                                <div class="img_fig_duan">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/tt_da_1.png" alt="">
                                </div>
                                <div class="khoi_noidung_tintuc">
                                    <div class="tintuc_duan_text1">Những đặc điểm dự án tại Hà Nội</div>
                                    <div class="tintuc_duan_text2">
                                        Chung cư Tràng An Complex là dự án tổ hợp chung cư, thương mại do
                                        GP Invest làm chủ đầu tư. Dự án tọa lạc tại số 1 Phùng Chí Kiên,
                                        đây là vị trí đắc địa của quận Cầu Giấy,...
                                    </div>
                                </div>
                            </div>
                            <div class="body_tintuc_duan_img">
                                <div class="img_fig_duan">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/tt_da_1.png" alt="">
                                </div>
                                <div class="khoi_noidung_tintuc">
                                    <div class="tintuc_duan_text1">Những đặc điểm dự án tại Hà Nội</div>
                                    <div class="tintuc_duan_text2">
                                        Chung cư Tràng An Complex là dự án tổ hợp chung cư, thương mại do
                                        GP Invest làm chủ đầu tư. Dự án tọa lạc tại số 1 Phùng Chí Kiên,
                                        đây là vị trí đắc địa của quận Cầu Giấy,...
                                    </div>
                                </div>
                            </div>
                            <div class="body_tintuc_duan_img">
                                <div class="img_fig_duan">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/tt_da_1.png" alt="">
                                </div>
                                <div class="khoi_noidung_tintuc">
                                    <div class="tintuc_duan_text1">Những đặc điểm dự án tại Hà Nội</div>
                                    <div class="tintuc_duan_text2">
                                        Chung cư Tràng An Complex là dự án tổ hợp chung cư, thương mại do
                                        GP Invest làm chủ đầu tư. Dự án tọa lạc tại số 1 Phùng Chí Kiên,
                                        đây là vị trí đắc địa của quận Cầu Giấy,...
                                    </div>
                                </div>
                            </div>
                            <div class="body_tintuc_duan_img">
                                <div class="img_fig_duan">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/tt_da_1.png" alt="">
                                </div>
                                <div class="khoi_noidung_tintuc">
                                    <div class="tintuc_duan_text1">Những đặc điểm dự án tại Hà Nội</div>
                                    <div class="tintuc_duan_text2">
                                        Chung cư Tràng An Complex là dự án tổ hợp chung cư, thương mại do
                                        GP Invest làm chủ đầu tư. Dự án tọa lạc tại số 1 Phùng Chí Kiên,
                                        đây là vị trí đắc địa của quận Cầu Giấy,...
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="body_DSdasmb_xemthem">
                        <div class="xemthem_bao">
                            <div class="DSdasmb_xemthem main_color">
                                Xem thêm
                            </div>
                            <div class="img_fig_xemthem">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/next.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- --------------------- -->


            <!-- body CHỦ ĐẦU TƯ -->
            <div class="body_CDT">
                <div class="body_CDT_content">
                    <h1 class="body_CDT_content_heading">
                        <div class="noidung_text_heading_border"></div>
                        Chủ đầu tư nổi bật
                    </h1>
                    <div class="body_CDT_content_img">
						<? foreach ($Invester as $val) { ?>
                        <div class="body_CDT_content_img_1">
                            <div class="test_img">
                                <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                            </div>
                            <div class="body_CDT_content_text">
                                <div class="body_CDT_content_text1 elipsis1"><?= $val['companyName'] ?></div>
                                <div class="body_CDT_content_text2"><?= $val['UserFollowed'] ?> người theo dõi</div>
                            </div>
                        </div>
						<? } ?>
                    </div>

                </div>
                <div class="body_DSdasmb_xemthem">
                    <div class="xemthem_bao">
                        <div class="DSdasmb_xemthem main_color">
                            Xem thêm
                        </div>
                        <div class="img_fig_xemthem">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/next.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- --------------------- -->


            <!-- body KÉT THÚC -->
            <div class="body_ketthuc">
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
        <div class="khung_footer">
            <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
        </div>



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

    </div>
</body>

</html>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_duy.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>

<script>
$(".select_option").select2({
    width: "100%",
});
</script>

<script>
$('.ketthuc_xemthem').click(function() {
    $('.show_xemthem').toggleClass('hidden');
    $('.show_thugon').toggleClass('hidden');
    $('.img_xemthem').toggleClass('hidden');
})
active_single_header('duan');
$('.noidung_text_khuvuc').slick({
	rows: 10,
    dots: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    arrow: true,
    prevArrow: '<button class="slick-prev prev-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/icon_DATKV_left.png" alt=""></button>',
    nextArrow: '<button class="slick-next next-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/icon_DATKV_right.png" alt=""></button>',
});

// $('.body_DSdasmb_image_bg').slick({
//     rows: 2,
//     dots: true,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrow: true,
//     responsive: [{
//         breakpoint: 481,
//         settings: {
//             slidesToShow: 2,
//             slidesToScroll: 2,
//             infinite: true,
//             dots: true
//         }
//     }]
// });

$('.body_CDT_content_img').slick({
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 3,
    arrow: true,
    responsive: [{
        breakpoint: 769,
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
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
        }
    }]

});

// SLICK ẢNH



let clientWidth = window.innerWidth;
let row = 2;
let showNumber = 2;

if (clientWidth >= 1025 && clientWidth <= 1366) {
    row = 2;
    showNumber = 2;
} else if (clientWidth >= 769 && clientWidth <= 1024) {
    row = 2;
    showNumber = 1;
} else if (clientWidth >= 481 && clientWidth <= 768) {
    row = 2;
    showNumber = 1;
} else if (clientWidth <= 480) {
    row = 2;
    showNumber = 1;
}
$('.js_slider_img').slick({
    dots: true,
    rows: row,
    slidesToShow: showNumber,
    slidesToScroll: 1,
    arrow: true,
    prevArrow: '<button class="slick-prev prev-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/icon_DATKV_left.png" alt=""></button>',
    nextArrow: '<button class="slick-next next-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/icon_DATKV_right.png" alt=""></button>',
});

$('.status2').click(function() {
	$(this).addClass('status_active');
	$('.status1').removeClass('status_active');
	$('.status2_loop').removeClass('hidden');
	$('.status1_loop').addClass('hidden');
});
$('.status1').click(function() {
	$(this).addClass('status_active');
	$('.status2').removeClass('status_active');
	$('.status1_loop').removeClass('hidden');
	$('.status2_loop').addClass('hidden');
});
</script>
