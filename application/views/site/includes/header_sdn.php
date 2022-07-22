<?php
	$y = date('Y', $userInfo['avtDate']);
	$m = date('m', $userInfo['avtDate']);
	$d = date('d', $userInfo['avtDate']);
	$dir = "upload/".$y."/".$m."/".$d;
	$y1 = date('Y', $userInfo['coverImageDate']);
	$m1 = date('m', $userInfo['coverImageDate']);
	$d1 = date('d', $userInfo['coverImageDate']);
	$dir1 = "upload/".$y1."/".$m1."/".$d1;
	// if (!isset($_SESSION['user']) || $_SESSION['user'] == null) {
	// 	redirect('/trang-tai-khoan-dang-nhap.html');
	// } else {
	// 	$user = $_SESSION['user'];
		
	// }
?>
<div id="header">
    <div class="khoi_header flex align_item justify_c_sb">
        <!-- TK cho thuê, người bán. nhà môi giới -->
		<? if ($userInfo['userType'] == 0 || $userInfo['userType'] == 1 || $userInfo['userType'] == 2) { ?>
        <div class="khoi_header1 flex">
            <div class="img_menu_3_gach">
                <img src="<? echo base_url() ?>assets/images/img_du_an/menu2.png" alt="">
            </div>
            <div class="them_div_tq_375 flex">
                <div class="khoi_header1_div">
                    <div class="khoi_header1_div1">Ví 3S: <span><?= number_format($wallet['money']) ?> VND</span> </div>
                </div>
                <div class="border_right"></div>
                <div class="khoi_header1_div">
                    <div class="khoi_header1_div1">Điểm: <span><?= $wallet['point'] ?></span> </div>
                </div>
            </div>
        </div>
        <!-- ---------------------------------------- -->
        <!-- TK người mua, thuê -->
		<? } else { ?>
        <div class="khoi_header_nguoimua flex">
            <div class="img_menu_3_gach">
                <img src="<? echo base_url() ?>assets/images/img_du_an/menu2.png" alt="">
            </div>
            <a href="/" class="khoi_header_nguoimua">Trang chủ</a>
            <div class="khoi_header_nguoimua_img">
                <img src="<? echo base_url() ?>assets/images/img_sdn/arrou_right_16.png" alt="">
            </div>
            <div class="khoi_header_nguoimua main_color">Quản lý thông tin</div>
        </div>
        <!-- ---------------------------------------- -->
		<? } ?>
        <div class="khoi_header2">
            <div class="khoi_header2_div flex align_item">
                <div class="khoi_header2_div1 flex mr_r42px">
                    <a href="/" class="khoi_header2_div1_tex mr_r44px cursor_p">Trang chủ</a>
                    <a href="huong-dan-sau-dang-nhap.html" class="khoi_header2_div1_tex cursor_p">Hướng dẫn</a>
                </div>
                <div class="khoi_header2_div2 flex align_item ">
                    <a href="dang-tin-sau-dang-nhap.html" class="khoi_header2_div2_btn flex justify_c_sb mr_r24px align_item">
                        <div class="khoi_header2_div2_btn_img">
                            <img src="<? echo base_url() ?>assets/images/img_du_an/icon_upnews.svg" alt="">
                        </div>
                        <div class="khoi_header2_div2_btn_tex">Đăng tin</div>
                    </a>
                    <div class="khoi_header2_div2_img flex align_item">
                        <div class="khoi_header2_div2_img1 hover_thongbao mr_r24px cursor_p">
                            <img src="<? echo base_url() ?>assets/images/img_sdn/bell_svg.svg" alt="">
                            <!-- POPUP THÔNG BÁO -->
                            <div class="popup_thongbao">
                                <div class="popup_thongbao_padding">
                                    <div class="popup_thongbao_padding_heading fz_18_5 main_color mr_b16px">Thông báo
                                    </div>
                                    <div class="popup_thongbao_noidung mr_b16px">
                                        <div class="popup_thongbao_noidung_to">
                                            <div
                                                class="popup_thongbao_noidung_suv flex align_item justify_c_sb align_item">
                                                <div class="popup_thongbao_noidung_suv1 flex justify_c_sb align_item">
                                                    <div class="popup_thongbao_noidung_suv1_img mr_r8px">
                                                        <img src="<? echo base_url() ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                    </div>
                                                    <div class="popup_thongbao_noidung_suv1_text">
                                                        <div class="popup_thongbao_noidung_suv1_text1 mr_b8px">Thông báo
                                                        </div>
                                                        <div class="popup_thongbao_noidung_suv1_text2">15:00.05/06/2022
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="popup_thongbao_noidung_suv2">
                                                    <img src="<? echo base_url() ?>assets/images/img_sdn/close.png" alt="">
                                                </div>
                                            </div>
                                            <div class="border_thongbao"></div>
                                        </div>
                                        <div class="popup_thongbao_noidung_to">
                                            <div
                                                class="popup_thongbao_noidung_suv flex align_item justify_c_sb align_item">
                                                <div class="popup_thongbao_noidung_suv1 flex justify_c_sb align_item">
                                                    <div class="popup_thongbao_noidung_suv1_img mr_r8px">
                                                        <img src="<? echo base_url() ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                    </div>
                                                    <div class="popup_thongbao_noidung_suv1_text">
                                                        <div class="popup_thongbao_noidung_suv1_text1 mr_b8px">Thông báo
                                                        </div>
                                                        <div class="popup_thongbao_noidung_suv1_text2">15:00.05/06/2022
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="popup_thongbao_noidung_suv2">
                                                    <img src="<? echo base_url() ?>assets/images/img_sdn/close.png" alt="">
                                                </div>
                                            </div>
                                            <div class="border_thongbao"></div>
                                        </div>
                                        <div class="popup_thongbao_noidung_to">
                                            <div
                                                class="popup_thongbao_noidung_suv flex align_item justify_c_sb align_item">
                                                <div class="popup_thongbao_noidung_suv1 flex justify_c_sb align_item">
                                                    <div class="popup_thongbao_noidung_suv1_img mr_r8px">
                                                        <img src="<? echo base_url() ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                    </div>
                                                    <div class="popup_thongbao_noidung_suv1_text">
                                                        <div class="popup_thongbao_noidung_suv1_text1 mr_b8px">Thông báo
                                                        </div>
                                                        <div class="popup_thongbao_noidung_suv1_text2">15:00.05/06/2022
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="popup_thongbao_noidung_suv2">
                                                    <img src="<? echo base_url() ?>assets/images/img_sdn/close.png" alt="">
                                                </div>
                                            </div>
                                            <div class="border_thongbao"></div>
                                        </div>
                                        <div class="popup_thongbao_noidung_to">
                                            <div
                                                class="popup_thongbao_noidung_suv flex align_item justify_c_sb align_item">
                                                <div class="popup_thongbao_noidung_suv1 flex justify_c_sb align_item">
                                                    <div class="popup_thongbao_noidung_suv1_img mr_r8px">
                                                        <img src="<? echo base_url() ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                    </div>
                                                    <div class="popup_thongbao_noidung_suv1_text">
                                                        <div class="popup_thongbao_noidung_suv1_text1 mr_b8px">Thông báo
                                                        </div>
                                                        <div class="popup_thongbao_noidung_suv1_text2">15:00.05/06/2022
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="popup_thongbao_noidung_suv2">
                                                    <img src="<? echo base_url() ?>assets/images/img_sdn/close.png" alt="">
                                                </div>
                                            </div>
                                            <div class="border_thongbao"></div>
                                        </div>
                                        <div class="popup_thongbao_noidung_to">
                                            <div
                                                class="popup_thongbao_noidung_suv flex align_item justify_c_sb align_item">
                                                <div class="popup_thongbao_noidung_suv1 flex justify_c_sb align_item">
                                                    <div class="popup_thongbao_noidung_suv1_img mr_r8px">
                                                        <img src="<? echo base_url() ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                    </div>
                                                    <div class="popup_thongbao_noidung_suv1_text">
                                                        <div class="popup_thongbao_noidung_suv1_text1 mr_b8px">Thông báo
                                                        </div>
                                                        <div class="popup_thongbao_noidung_suv1_text2">15:00.05/06/2022
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="popup_thongbao_noidung_suv2">
                                                    <img src="<? echo base_url() ?>assets/images/img_sdn/close.png" alt="">
                                                </div>
                                            </div>
                                            <div class="border_thongbao"></div>
                                        </div>
                                        <div class="popup_thongbao_noidung_to">
                                            <div
                                                class="popup_thongbao_noidung_suv flex align_item justify_c_sb align_item">
                                                <div class="popup_thongbao_noidung_suv1 flex justify_c_sb align_item">
                                                    <div class="popup_thongbao_noidung_suv1_img mr_r8px">
                                                        <img src="<? echo base_url() ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                                    </div>
                                                    <div class="popup_thongbao_noidung_suv1_text">
                                                        <div class="popup_thongbao_noidung_suv1_text1 mr_b8px">Thông báo
                                                        </div>
                                                        <div class="popup_thongbao_noidung_suv1_text2">15:00.05/06/2022
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="popup_thongbao_noidung_suv2">
                                                    <img src="<? echo base_url() ?>assets/images/img_sdn/close.png" alt="">
                                                </div>
                                            </div>
                                            <div class="border_thongbao"></div>
                                        </div>
                                    </div>
                                    <div class="thong_bao_xoa cursor_p">
                                        Xóa tất cả thông báo
                                    </div>
                                </div>
                            </div>
                            <!-- --------------- -->
                        </div>
                        <div class="khoi_header2_div2_img1 mr_r24px cursor_p">
                            <img src="<? echo base_url() ?>assets/images/img_sdn/messenger_svg.svg" alt="">
                        </div>
                        <div class="khoi_header2_div2_img2 cursor_p">
							<?
							$avt = $dir."/".$userInfo['user_avt'];
							if (file_exists($avt)) {
							?>
                            <img src="<?= $avt ?>" alt="">
							<? } else { ?>
                            <img src="/assets/images/default_avt.svg" alt="">
							<? } ?>
                            <!-- POPUP USER -->
                            <div class="popup_user">
                                <div class="popup_user_padding">
                                    <div class="popup_user_padding_khoi1 flex align_item mr_b10px">
                                        <div class="popup_user_padding_khoi1_img mr_r8px">
                                            <img src="<? echo base_url() ?>assets/images/img_sdn/user_x60.png" alt="">
                                        </div>
                                        <div class="popup_user_padding_khoi1_text">
                                            <div class="popup_user_padding_khoi1_text1 mr_b6px fz_16_5 elipsis1"><?= $userInfo['name'] ?></div>
                                            <div class="popup_user_padding_khoi1_text1 mr_b6px elipsis1">ID: <?= $userInfo['id'] ?></div>
                                            <div class="popup_user_padding_khoi1_text1 elipsis1"><?= $userInfo['email'] ?></div>
                                        </div>
                                    </div>
                                    <div class="border_user"></div>
                                    <div class="popup_user_padding_khoi2">
                                        <ul class="popup_user_padding_khoi2_ul">
                                            <li><a href="#">Quản lý thông tin</a></li>
                                            <li><a href="#">Nội dung đã lưu</a></li>
                                            <li><a href="/">Hướng dẫn</a></li>
                                            <li><a href="#">Cài đặt</a></li>
                                        </ul>
                                    </div>
                                    <div class="border_user"></div>
									<a href="/dang-xuat.html"><div class="dang_xuat cursor_p">Đăng xuất</div></a>
                                </div>
                            </div>
                            <!-- --------------- -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script>
    // SHOW SIDEBAR SAU ĐĂNG NHẬP
$('.img_menu_3_gach').click(function () {
    $('.slider_bar_2').removeClass('hidden');
    $('.slider_bar_2').addClass('block');
})
</script>
