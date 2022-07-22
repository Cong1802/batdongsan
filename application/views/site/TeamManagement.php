<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_t.css">
    <title>Quản lý đội nhóm nhân viên</title>
</head>

<body>
    <div class="position_r d_flex back_f7f8fc ql_tien_nv">
        <div class="link_sidebar_quang">
            <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
        </div>
        <div class="wapper bg_blue_10 pd_tlr_8_24 flex_1 d_flex flex_column ql_dn">
            <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
            <? if ($checkRole['TeamRole'] == 0) { ?>
            <!-- bang dang ky doi nhom -->
            <div class="no_members mt_23 flex_1"
                style="background-image: url('/assets/images/white-empty-room 1.png');">
                <div class="d_flex align_c flex_center flex_column position_r h_100" style="height: 660px">
                    <span class="font_s20 line_h23 font_w400 black_md">Bạn chưa có nhân viên, hãy tìm kiếm và thêm vào
                        đội nhóm của mình họ.</span>
                    <button class="mt_24 mn_w187 btn bd-gray br_8 bg_white font_s16 line_h19 font_w500 black_md bt_add"
                        onclick="viewAndClosePopup('#popup_add_group', '#popup_add_group .main_popup')">Đăng ký</button>
                </div>
            </div>
            <? } elseif ($checkRole['TeamRole'] == 1 || $checkRole['TeamRole'] == 2) { ?>
            <div class="pd_b_96 ql_nhom_nv_tong">
                <div class="information bg_white br_8 d_flex pd_40 mt_24">
                    <div class="information_img">
					<?
					if ($checkRole['TeamRole'] == 1) {
						$y = date('Y', $TeamManagement['avtDate']);
						$m = date('m', $TeamManagement['avtDate']);
						$d = date('d', $TeamManagement['avtDate']);
						$dir = "upload/".$y."/".$m."/".$d;
						$avt = $dir."/".$TeamManagement['user_avt'];
						if (file_exists($avt)) {
							echo '<img src="'.$avt.'" alt="">';
						} else {
							echo '<img src="/assets/images/avatar_md.png" alt="">';
						}
					} elseif ($checkRole['TeamRole'] == 2) {
						$y1 = date('Y', $Boss['avtDate']);
						$m1 = date('m', $Boss['avtDate']);
						$d1 = date('d', $Boss['avtDate']);
						$dir1 = "upload/".$y1."/".$m1."/".$d1;
						$avt1 = $dir1."/".$Boss['user_avt'];
						if (file_exists($avt1)) {
							echo '<img src="'.$avt1.'" alt="">';
						} else {
							echo '<img src="/assets/images/avatar_md.png" alt="">';
						}
					}
					?>
                    </div>
                    <div class="information_personal pd_l_24">
                        <h2 class="font_s36 line_h50 font_w500 black_md">
                            <? if ($checkRole['TeamRole'] == 1) {
								echo $TeamManagement['teamName'];
							} elseif ($checkRole['TeamRole'] == 2) {
								echo $Boss['teamName'];
							}
							?>
						</h2>
                        <div class="mt_8">
                            <div>
                                <span>Quản lý:</span>
                                <span>
									<?
									if ($checkRole['TeamRole'] == 1) {
										echo $TeamManagement['name'];
									} elseif ($checkRole['TeamRole'] == 2) {
										echo  $Boss['name'];
									}
									?>
								</span>
                            </div>
                            <div>
                                <span>Số lượng thành viên:</span>
                                <span>
									<?
									if ($checkRole['TeamRole'] == 1) {
										echo $countMembers1;
									} elseif ($checkRole['TeamRole'] == 2) {
										echo $countMembers2;
									}
									?>
								</span>
                            </div>
                            <div>
                                <span>Email:</span>
                                <span>
									<?
										if ($checkRole['TeamRole'] == 1) {
											echo $TeamManagement['teamEmail'];
										} elseif ($checkRole['TeamRole'] == 2) {
											echo $Boss['teamEmail'];
										}
									?>
								</span>
                            </div>
                            <div>
                                <span>Số điện thoại:</span>
                                <span>
									<?
									if ($checkRole['TeamRole'] == 1) {
										echo $TeamManagement['teamPhone'];
									} elseif ($checkRole['TeamRole'] == 2) {
										echo $Boss['teamPhone'];
									}
									?>
								</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="personals mt_40">
					<? if ($checkRole['TeamRole'] == 1) { ?>
                    <div class="d_flex align_c personals_search space_b">
                        <div class="d_flex align_c personals_searching">
                            <div class="bd-grayc br_8 d_flex align_c mn_w506 space_b search_ip">
                                <input type="text" name="search"
                                    placeholder="Tìm kiếm tên, số điện thoại, email nhân viên">
                                <button class="btn">
                                    <img src="/assets/images/search_blue.png" alt="">
                                </button>
                            </div>
                            <div class="w_188_h40 ql_nhom_status_select">
                                <select name="" id="" class="select_option">
                                    <option value="">Trạng thái</option>
                                    <option value="0">Hoạt động</option>
                                    <option value="1">Chưa xác nhận</option>
                                </select>
                            </div>
                        </div>
                        <!-- dành cho quản lý nhóm -->
                        <div class="h_40 ql_nhom_status_menu">
                            <div class="ql_nhom_status_select_375">
                                <select name="" id="" class="select_option">
                                    <option value="">Trạng thái</option>
                                    <option value="0">Hoạt động</option>
                                    <option value="1">Chưa xác nhận</option>
                                </select>
                            </div>
                            <button class="btn br_8 d_flex align_c btn_blue mn_w180 pd_lr_19 h_40"
                                onclick="viewAndClosePopup('#popup_add_staff', '#popup_add_staff .main_popup')">
                                <div class="mr_8 d_flex align_c">
                                    <img src="/assets/images/plus_white.png" alt="">
                                </div>
                                <span class="cl_white">Thêm nhân viên</span>
                            </button>
                        </div>
                    </div>
					<? } ?>

                    <div class="main_table_list_all position_r mt_24 table_person">
						<? if ($checkRole['TeamRole'] == 2) { ?>
                        <!-- Bảng dành cho nhân viên -->
                        <div class="box_main_table_list position_r staff ">
                            <table class="table" id="scroll_tb">
                                <thead class="">
                                    <tr class="bg_blue_5 cl_ch_blue">
                                        <th class="stt">STT</th>
                                        <th>Nhân viên</th>
                                        <th>Thông tin</th>
                                        <th>Số điểm</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; foreach ($listMembers1 as $val) {$i++; ?>
                                    <tr>
                                        <td class="stt"><?= $i ?></td>
                                        <td><?= $val['name'] ?></td>
                                        <td class="d_flex align_s flex_column cl_t_8">
                                            <span><?= $val['email'] ?></span>
                                            <span><?= $val['phone'] ?></span>
                                        </td>
                                        <td><?= $val['point'] ?></td>
                                        <td>
                                            <span
                                                class="<?= $i % 2 == 0 ? 'cl_green' : 'cl_oran' ?>"><?= $i % 2 == 0 ? 'Hoạt động' : 'Chưa xác nhận' ?></span>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

						<div class="pagination mt_32 d_flex flex_end hidden">
							<span class="active"><img src="/assets/images/arrow_l_back_white.png" alt=""></span>
							<span class="active">1</span>
							<span>2</span>
							<span>3</span>
							<span>4</span>
							<span class="active"><img src="/assets/images/arrow_r_back_white.png" alt=""></span>
						</div>
                        <!-- // bảng dành cho nhân viên -->
						<? } ?>

						<? if ($checkRole['TeamRole'] == 1) { ?>
						<? if ($countMembers1 > 0) { ?>
                        <!-- dành cho quản lý nhóm -->
                        <div class="box_main_table_list position_r manage">
                            <table class="table" id="scroll_tb">
                                <thead class="">
                                    <tr class="bg_blue_5 cl_ch_blue">
                                        <th class="stt">STT</th>
                                        <th>Nhân viên</th>
                                        <th>Số tiền (VNĐ)</th>
                                        <th>Thông tin</th>
                                        <th>Quản lý</th>
                                        <th>Trạng thái</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <?php $i=0; foreach ($listMembers as $val) {$i++ ?>
                                    <tr>
                                        <td class="stt"><?= $i ?></td>
                                        <td><?= $val['name'] ?></td>
                                        <td>
                                            <span class="block"><?= number_format($val['money']) ?></span>
                                            <div data-id="<?= $val['tmMemberID'] ?>" class="d_flex align_c mt_10 cursor_p dealMoney">
                                                <div class="d_flex align_c wh_20 mr_8">
                                                    <img src="/assets/images/repeat_blue.png" alt="">
                                                </div>
                                                <span class="font_s16 line_h20 font_w400 cl_blue">Chuyển</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="block"><?= $val['email'] ?></span>
                                            <span class="block mt_8"><?= $val['phone'] ?></span>
                                        </td>
                                        <td>
                                            <div class="d_flex align_c cursor_p">
                                                <a href="/quan-ly-danh-sach-dang.html" class="d_flex align_c cursor_p">
                                                    <div class="d_flex align_c wh_20 mr_8">
                                                        <img src="/assets/images/monitor_blue.png" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h20 font_w400 cl_blue">Quản lý tin
                                                        đăng</span>
                                                </a>
                                            </div>
                                            <div class="d_flex align_c mt_16 cursor_p">
                                                <a href="/quan-ly-lich-su-giao-dich.html"
                                                    class="d_flex align_c cursor_p">
                                                    <div class="d_flex align_c wh_20 mr_8">
                                                        <img src="/assets/images/external-link_blue.png" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h20 font_w400 cl_blue">Quản lý giao
                                                        dịch</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="<?= ($val['memberActive'] == 0)?"cl_oran":"cl_green" ?>"><?= ($val['memberActive'] == 0)?"Chưa xác nhận":"Hoạt động" ?></span>
                                        </td>
                                        <td>
                                            <div data-id="<?= $val['tmMemberID'] ?>" data-name="<?= $val['name'] ?>" class="del_member wh_20 d_flex align_c cursor_p">
                                                <img src="/assets/images/trash_red.png" alt="">
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
						<? } ?>

						<div class="pagination mt_32 d_flex flex_end hidden">
							<span class="active"><img src="/assets/images/arrow_l_back_white.png" alt=""></span>
							<span class="active">1</span>
							<span>2</span>
							<span>3</span>
							<span>4</span>
							<span class="active"><img src="/assets/images/arrow_r_back_white.png" alt=""></span>
						</div>

						<? if ($countMembers1 == 0) { ?>
                        <div class="no_members "
                            style="background-image: url('/assets/images/white-empty-room 1.png');">
                            <div class="d_flex align_c flex_end flex_column position_r h_100 flex_center">
                                <span class="font_s20 line_h23 font_w400 black_md">Bạn chưa có nhân viên, hãy tìm kiếm
                                    và thêm vào đội nhóm của mình họ.</span>
                                <button
                                    class="mt_24 mn_w187 btn bd-gray br_8 bg_white font_s16 line_h19 font_w500 black_md bt_add"
									onclick="viewAndClosePopup('#popup_add_staff', '#popup_add_staff .main_popup')">Thêm
                                    nhân viên</button>
                            </div>
                        </div>
						<? }} ?>
                        <!--// dành cho quản lý nhóm -->
                    </div>
                </div>
            </div>
            <? } ?>
        </div>
    </div>

	<!-- popup xóa -->
    <div id="popup_xoa_staff" class="popup hidden">
        <div class="main_popup w_343 bg_white pd_32_16">
            <div class="sroll_popup">
                <div class="content_poup flex_column d_flex align_c flex_center">
                    <div class="popup_img wh_70">
                        <img src="/assets/images/delete _red.png" alt="">
                    </div>
                    <span class="font_s14 line_h16 font_w500 black_md mt_21 txt_center">Bạn chắc chắn muốn xóa nhân viên
                        <span class="font_w500 block user_name">Brooklyn Simmons?</span></span>
                    <div class="mt_24 d_flex align_c flex_center">
                        <button type="button"
                            class="btn font_s16 del_confirm line_h19 font_w500 btn_error cl_white mn_w120 br_8 h_40 mr_24">Đồng
                            ý</button>
                        <button type="button"
                            class="btn font_s16 line_h19 font_w500 btn_bd_blue blue_title mn_w120 br_8 h_40"
                            onclick="showHiddenPopup('#popup_xoa_staff','hidden')">Quay lại</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- thêm nhân viên -->
    <div id="popup_add_staff" class="popup hidden">
        <div class="main_popup mn_w502 bg_white pd_lrb40_t24 popup_insent_staff">
            <div class="sroll_popup">
                <div class="header_popup d_flex align_c space_b">
                    <h2 class="font_s16 line_h19 font_w600 black_md">Thêm nhân viên</h2>
                    <span class="font_s14 line_h16 font_w500 black_md cursor_p"
                        onclick="showHiddenPopup('#popup_add_staff','hidden')">Đóng</span>
                </div>
                <div class="content_poup mt_32">
                    <form action="" method="post">
                        <div class="d_flex align_c mt_21 bd_b_gr">
                            <div class="h_40 w_100">
                                <input type="text" id="info" placeholder="Nhập gmail hoặc số điện thoại"
                                    class="rs_input w_100 h_100 br_8 ipfzdf txtels">
                            </div>
                            <div class="cursor_p">
                                <button type="button" class="btn wh_34 search_user">
                                    <img src="/assets/images/searching_blue.png" alt="" class="">
                                </button>
                            </div>
                        </div>
                        <span class="error font_s14 line_h16 font_w400 font_sitalic block mt_7 no-user"></span>

                        <div class="staff_result">
                            <div class="d_flex align_c user_info no-top">
                                <div class="staff_result_img br_50p add_user_avt">
                                    <!-- <img src="/assets/images/avatar_ts.png" alt="" class="br_50p"> -->
                                </div>
                                <div class="staff_result_content pd_l_16 d_flex flex_column align_s">
                                    <span class="font_s16 line_h19 font_w400 black_md add_user_name"></span>
                                    <span class="font_s16 line_h19 font_w400 black_md add_user_email"></span>
                                    <span class="font_s16 line_h19 font_w400 black_md add_user_phone"></span>
                                </div>
                            </div>
                        </div>


                        <div class="mt_40 d_flex align_c ">
                            <button type="button"
                                class="ql_group_btn-insert btn font_s16 line_h19 font_w500 btn_br_blue blue_title mn_w187 br_8 h_40 mr_24"
                                onclick="showHiddenPopup('#popup_add_staff','hidden')">Hủy</button>
                            <button type="button"
                                class="ql_group_btn-insert btn font_s16 line_h19 font_w500 btn_blue cl_white mn_w187 br_8 h_40 disableBtn fake_butt">Thêm thành viên</button>
                            <button type="button" data-team="<?= $TeamManagement['teamID'] ?>"
                                class="ql_group_btn-insert btn font_s16 line_h19 font_w500 btn_blue cl_white mn_w187 br_8 h_40 add_staff add_user_id real_butt hidden">Thêm thành viên</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- tạo nhóm thành công, chuyển tiền thành công -->
    <div id="popup_add_sussess" class="popup hidden">
        <div class="main_popup w_343 bg_white pd_32_16">
            <div class="sroll_popup">
                <div class="content_poup flex_column d_flex align_c flex_center">
                    <div class="popup_img wh_70">
                        <img src="/assets/images/hinhtron_tichxanh.png" alt="">
                    </div>
                    <span class="font_s14 line_h16 font_w500 black_md mt_21 success_content">Bạn đăng ký đội nhóm thành công</span>
                    <div class="mt_24 d_flex align_c flex_center">
                        <button type="button"
                            class="btn font_s16 line_h19 font_w500 btn_blue cl_white mn_w150 br_8 h_40 butt_content"
                            onclick="showHiddenPopup('#popup_add_sussess','hidden'); location.reload();">Dùng
                            ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tạo form tạo nhóm -->
    <div id="popup_add_group" class="popup hidden">
        <div class="main_popup mn_w650 bg_white pd_lrb40_t24">
            <div class="sroll_popup">
                <div class="header_popup">
                    <h2 class="font_s24 line_h28 font_w600 black_md">Đăng ký đội nhóm</h2>
                </div>
                <div class="content_poup mt_32">
                    <div>
                        <span class="font_s16 line_h24 font_w500 black_md">Giải pháp giúp bạn quản lý công ty, đội nhóm
                            một cách hiệu quả</span>
                        <div class="d_flex align_s mt_18">
                            <div class="popup_img wh_20 mr_10">
                                <img src="/assets/images/check-square_blue.png" alt="">
                            </div>
                            <span class="font_s16 line_h24 font_w400 black_md">Bạn có thể thêm, xóa nhân viên khỏi đội
                                nhóm của mình</span>
                        </div>

                        <div class="d_flex align_s mt_16">
                            <div class="popup_img wh_20 mr_10">
                                <img src="/assets/images/check-square_blue.png" alt="">
                            </div>
                            <span class="font_s16 line_h24 font_w400 black_md">Phân chia điểm, quản lý giao dịch và hiệu
                                quả đăng tin của nhân viên cùng nhiều tính năng khác</span>
                        </div>
                    </div>

                    <div class="mt_37">
                        <form id="register_team" onsubmit="register_form_1(); return false;" type="post">
                            <div class="d_flex flex_column align_s">
                                <div class="d_flex">
                                    <p class="font_s16 line_h20 font_w500 black_md">Tên đội nhóm <span
                                            class="cl_red">*</span></p>
                                    <p class="cl_red name_error"></p>
                                </div>
                                <div class="h_40 w_100 mt_8">
                                    <input type="text" id="teamName" placeholder="Nhập tên hội nhóm"
                                        class="rs_input bd-gray1 w_100 h_100 br_8 pd_l_16">
                                </div>
                            </div>

                            <div class="mt_24">
                                <span class="font_s16 line_h19 font_w400 blue_title">Sử dụng thông tin đăng ký tài
                                    khoản</span>
                                <div class="d_flex flex_column align_s mt_13">
                                    <div class="d_flex">
                                        <p class="font_s16 line_h20 font_w500 black_md">Số điện thoại<span
                                                class="cl_red">*</span></p>
                                        <p class="cl_red phone_error"></p>
                                    </div>
                                    <div class="h_40 w_100 mt_8 ">
                                        <input type="text" id="teamPhone" placeholder="Nhập số điện thoại"
                                            class="rs_input bd-gray1 w_100 h_100 br_8 pd_l_16">
                                    </div>
                                </div>
                                <div class="d_flex flex_column align_s mt_21">
                                    <div class="d_flex">
                                        <p class="font_s16 line_h20 font_w500 black_md">Gmail <span
                                                class="cl_red">*</span></p>
                                        <p class="cl_red email_error"></p>
                                    </div>
                                    <div class="h_40 w_100 mt_8">
                                        <input type="text" id="teamEmail" placeholder="Nhập gmail"
                                            class="rs_input bd-gray1 w_100 h_100 br_8 pd_l_16">
                                    </div>
                                </div>
                            </div>

                            <div class="mt_48 d_flex align_c flex_center">
                                <button type="button"
                                    class="btn font_s16 line_h19 font_w500 btn_br_blue blue_title mn_w187 br_8 h_40 mr_24"
                                    onclick="showHiddenPopup('#popup_add_group','hidden')">Hủy</button>
                                <button type="button"
                                    class="btn font_s16 line_h19 font_w500 btn_blue cl_white mn_w187 br_8 h_40"
                                    type="button" id="register_submit" onclick="register_form_1(); return false;">Đăng
                                    ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- form quản lý tiền nhân viên -->
    <div id="popup_money_management" class="popup hidden">
        <div class="main_popup mn_w650 bg_white pd_lrb40_t24">
            <div class="sroll_popup">
                <div class="header_popup">
                    <h2 class="font_s24 line_h28 font_w600 black_md">Quản lý tiền nhân viên</h2>
                </div>
                <div class="content_poup mt_35">
                    <div>
                        <span class="font_s18 line_h21 font_w600 black_md">Thông tin tài khoản nhân viên</span>
                        <div class="information bg_white br_8 d_flex pd_24 mt_14 drop_context">
                            <div class="information_img wh_80 deal_avt">
                                <!-- <img src="/assets/images/avatar_md.png" alt=""> -->
                            </div>
                            <div class="information_personal pd_l_16">
                                <span class="font_s20 line_h23 font_w500 black_md block deal_name"></span>
                                <span class="font_s16 line_h19 font_w400 black_md block mt_8 deal_email"></span>
                                <span class="font_s16 line_h19 font_w400 black_md block mt_8 deal_phone"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mt_34">
                        <span class="font_s18 line_h21 font_w600 black_md">Thông tin</span>
                        <div class="list_btn mt_16 d_flex align_c">
                            <button type="button"
                                class="btn font_s16 line_h19 transmoney font_w500 bd-gray1 btn_blue cl_white mn_w123 br_8 h_40 mr_16 btn_active_bl">Chuyển
                                tiền</button>
                            <button type="button"
                                class="btn font_s16 line_h19 evictmoney font_w500 bd-gray1 color_gray mn_w123 br_8 h_40">Thu hồi
                                tiền</button>
                        </div>
                    </div>

                    <div class="mt_24">
                        <span class="font_s16 line_h19 font_w400 black_md moneyContent">Nhập số tiền bạn muốn chuyển sang tài khoản
                            nhân viên</span>
                        <form action="" method="post">
                            <div class="mt_32 d_flex align_s">
                                <div class="d_flex flex_column flex_1">
                                    <span class="font_s16 line_h19 font_w500 black_md">Số dư tài khoản hiện tại</span>
                                    <span class="block font_s16 line_h19 font_w400 black_md mt_16"><?= number_format($wallet['money']) ?> VNĐ</span>
                                </div>
                                <div class="d_flex flex_column align_s w_338">
                                    <span class="font_s16 line_h19 font_w500 black_md moneyTitle">Số tiền muốn chuyển</span>
                                    <div class="d_flex align_c w_100 bd_b_gr">
                                        <div class="h_40 w_100 mt_8 flex_1 pd_r_5 money_ip">
											<input type="hidden" id="memberMoney">
                                            <input type="text" data-type="0" id="money" placeholder="Nhập số tiền"
                                                class="rs_input w_100 h_100 br_8" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
                                        <span class="font_s16 line_h19 font_w400 black_md">VNĐ</span>
                                    </div>
                                </div>
                            </div>
                            <span class="error font_s14 line_h16 font_w400 font_sitalic block mt_7"></span>
                            <!-- <span class="error font_s14 line_h16 font_w400 font_sitalic block mt_7">Giá trị nhập vào
                                không hợp lệ</span> -->

                            <div class="mt_48 d_flex align_c flex_center">
                                <button type="button"
                                    class="btn font_s16 line_h19 font_w500 btn_br_blue blue_title mn_w187 br_8 h_40 mr_24"
                                    onclick="showHiddenPopup('#popup_money_management','hidden')">Hủy</button>
                                <button type="button" id="moneyConfirm"
                                    class="btn font_s16 line_h19 font_w500 btn_blue cl_white mn_w187 br_8 h_40">Thực hiện</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>

    <script src="<? echo base_url();?>assets/js/js_t.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
    <script>
    $(".select_option").select2({
        width: "100%"
    });

    var base_url = '<?php echo base_url(); ?>';

    function register_form_1() {
        var regex_email =
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var regex_phone = /(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/;
        // validate
        var flag = true;
        var teamName = $('#teamName').val();
        var teamPhone = $('#teamPhone').val();
        var teamEmail = $('#teamEmail').val();
        var idManager = <?= $user_id ?>;

        if (teamName == '') {
            $('.name_error').html('(Tên đội nhóm không được để trống)');
            flag = false;
        } else {
            $('.name_error').html('');
        }

        if ($.trim(teamPhone) == '') {
            $('.phone_error').html('(Số điện thoại không được để trống)');
            flag = false;
        } else if ($.trim(teamPhone) !== '' && regex_phone.test(teamPhone) == false) {
            $('.phone_error').html('(Số điện thoại không đúng định dạng)');
            flag = false;
        } else {
            $('.phone_error').html('');
        }

        if ($.trim(teamEmail) == '') {
            $('.email_error').html('(Email không được để trống)');
            flag = false;
        } else if ($.trim(teamEmail) !== '' && regex_email.test(teamEmail) == false) {
            $('.email_error').html('(Email không đúng định dạng)');
            flag = false;
        } else {
            $('.email_error').html('');
        }

        var data = new FormData();
        data.append('name', teamName);
        data.append('phone', teamPhone);
        data.append('email', teamEmail);
        data.append('manager', idManager);

        if (flag == true) {
            $.ajax({
                type: 'POST',
                url: base_url + 'admin/Management/addTeam',
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                data: data,
                enctype: 'multipart/form-data',
                success: function(response) {
                    console.log(response);
                    showHiddenPopup('#popup_add_sussess', 'hidden');
                },
                error: function(xhr) {
                    console.log('error');
                }
            })
        }
    }

	$('.del_member').click(function() {
		showHiddenPopup('#popup_xoa_staff', 'hidden');
		var user_id = $(this).attr('data-id');
		var user_name = $(this).attr('data-name');
		$('#popup_xoa_staff .user_name').html(user_name);
		$('.del_confirm').click(function() {
			$.ajax({
				type: 'POST',
				url: base_url+'admin/Management/del_member',
				data: {id: user_id},
				success: function(response) {
					console.log(response);
					location.reload();
				},
				error: function(xhr) {
					console.log('error');
				}
			})
		});
	});

	$('.search_user').click(function() {
		var check = true;
		var info = $('#info').val();
		var user_id = <?= $user_id ?>;

		if (info == '') {
			$('.no-user').html('Vui lòng nhập email hoặc số điện thoại');
			check = false;
		}
		if (check == true) {
			$.ajax({
				type: 'POST',
				url: base_url+'/admin/Management/searchUser',
				data: {info: info,user_id: user_id},
				success: function(response) {
					var userInfo = JSON.parse(response);
					if (userInfo['info'] == 1) {
						$('.add_user_id').attr('data-id', userInfo['id']);
						$('.add_user_name').html(userInfo['name']);
						$('.add_user_email').html(userInfo['email']);
						$('.add_user_phone').html(userInfo['phone']);
						if (userInfo['user_avt'] == '') {
							$('.user_info').removeClass('no-top');
							$('.add_user_avt').addClass('wh_80');
							$('.add_user_avt').html('<img src="/assets/images/default_avt.svg" alt="" class="br_50p">');
						} else {
							$('.user_info').removeClass('no-top');
							$('.add_user_avt').addClass('wh_80');
							$('.add_user_avt').html('<img src="'+userInfo['avt']+'" alt="" class="br_50p">');
						}
						$('.no-user').html('');
						$('.fake_butt').addClass('hidden');
						$('.real_butt').removeClass('hidden');
					} else if (response == 2) {
						$('.no-user').html('Tài khoản không hợp lệ');
					} else {
						$('.no-user').html('Tài khoản không tồn tại');
					}
				},
				error: function(xhr) {
					console.log('error');
				}
			});
		}
	});

	$('.add_user_id').click(function() {
		var id = $(this).attr('data-id');
		var team = $(this).attr('data-team');
		
		var data = new FormData();

		data.append('id', id);
		data.append('team', team);
		$.ajax({
			type: 'POST',
			url: base_url+'admin/Management/addMember',
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'json',
			data: data,
			enctype: 'multipart/form-data',
			success: function(response) {
				if (response == 1) {
					alert('Thành viên này đã có đội nhóm');
					return false;
				} else {
					$('#popup_add_sussess .success_content').html('Thêm thành viên đội nhóm thành công');
					$('#popup_add_sussess .butt_content').html('Đóng');
					showHiddenPopup('#popup_add_sussess','hidden');
				}
			},
			error: function(xhr) {
				console.log('error');
			}
		});
	});

	$('.transmoney').click(function() {
		$(this).addClass('btn_active_bl');
		$('.evictmoney').removeClass('btn_active_bl');
		$('.moneyContent').html('Nhập số tiền bạn muốn chuyển sang tài khoản nhân viên');
		$('.moneyTitle').html('Số tiền muốn chuyển');
		$('#money').attr('data-type', 0);
	});
	$('.evictmoney').click(function() {
		$(this).addClass('btn_active_bl');
		$('.transmoney').removeClass('btn_active_bl');
		$('.moneyContent').html('Nhập số tiền bạn muốn thu hồi từ tài khoản nhân viên');
		$('.moneyTitle').html('Số tiền thu hồi');
		$('#money').attr('data-type', 1);
	});

	$('.dealMoney').click(function() {
		var id_user = <?= $user_id ?>;
		var id_member = $(this).attr('data-id');

		$.ajax({
			type: 'POST',
			url: base_url+'admin/Management/getMemberInfo',
			data: {id_user: id_user,id_member: id_member},
			success: function(response) {
				var info = JSON.parse(response);
				$('.deal_name').html(info['name']);
				$('.deal_email').html(info['email']);
				$('.deal_phone').html(info['phone']);
				$('#memberMoney').val(info['money']);
				if (info['user_avt'] == '') {
					$('.deal_avt').html('<img src="/assets/images/avatar_md.png" alt="">');
				} else {
					$('.deal_avt').html('<img src="'+info['avt']+'" alt="">');
				}
			},
			error: function(xhr) {
				console.log('error');
			}
		});
		viewAndClosePopup('#popup_money_management','#popup_money_management > .main_popup');

	});
	$('#moneyConfirm').click(function() {
		var check = true;
		var id_user = <?= $user_id ?>;
		var id_member = $('.dealMoney').attr('data-id');
		var MaMoney = Number(<?= $wallet['money'] ?>);
		var MeMoney = Number($('#memberMoney').val());
		var type = $('#money').attr('data-type');
		var money = Number($('#money').val());
		var MaChange = 0;
		var MeChange = 0;
		
		if (type == 0) {
			// chuyen tien
			MaChange = MaMoney - money;
			MeChange = MeMoney + money;
		} else {
			// thu tien
			MaChange = MaMoney + money;
			MeChange = MeMoney - money;
		}

		if (money == '') {
			alert('Vui lòng nhập số tiền');
			check = false;
		}
		if (check == true) {
			$.ajax({
				type: 'POST',
				url: base_url+'admin/Management/updateWallet',
				data: {
					Manager: id_user,
					Member: id_member,
					MaMoney: MaChange,
					MeMoney: MeChange,
				},
				success: function(response) {
					$('#popup_add_sussess .success_content').html('Thực hiện chuyển tiền thành công');
					$('#popup_add_sussess .butt_content').html('Đóng');
					showHiddenPopup('#popup_add_sussess','hidden');
				},
				error: function(xhr) {
					console.log('error');
				}
			});
		}
	});

    //     $('[data-toggle="select2"]').each(function(){
    //   var placeholder = $(this).attr('data-placeholder')
    //   placeholder = (placeholder === undefined) ? '' : placeholder;

    //   $(this).select2({
    //     theme: "bootstrap4",
    //     placeholder: placeholder,
    //     width: 'auto',
    //     inheritClass: true
    //   });
    // });

    // sizeTB('#scroll_tb tbody tr', '.result_table span', 3);
    // sizeTB('#scroll_tb tbody tr', '#scroll_tb thead tr th', 5);

    // window.onresize = function() {
    //     sizeTB('#scroll_tb tbody tr', '.result_table span', 3);
    //     sizeTB('#scroll_tb tbody tr', '#scroll_tb thead tr th', 5);
    //     sizeTB('#scroll_tb', '.result_table', 1, false);
    //     sizeTB('#scroll_tb', '#scroll_tb thead', 1, false);
    // }
    </script>
</body>

</html>
