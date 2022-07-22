<?
	$user_type = array (0 => "Người thuê, mua", 1 => "Người môi giới", 2 => "Người cho thuê bán", 3 => "Doanh nghiệp");
	$field = array (1 => "Chủ đầu tư", 2 => " Thi công xây dựng", 3 => "Tư vấn thiết kế", 4 => "Sàn giao dịch bất động sản", 5 => "Trang trí nội thất", 6 => "Vật liệu xây dựng", 7 => "Các lĩnh vực khác");
	$gender = array (0 => "Nam", 1 => "Nữ", 2 => "Khác");
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tài khoản</title>
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
							<?
							$avt = $dir1."/".$userInfo['coverImage'];
							if (file_exists($avt)) {
							?>
							<img class="post_anh" src="<?= $avt ?>" alt="">
							<? } else { ?>
							<img class="post_anh" src="/assets/images/default_avt.svg" alt="">
							<? } ?>
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
                                    <?
									$avt1 = $dir."/".$userInfo['user_avt'];
									if (file_exists($avt1)) {
									?>
                                    <img class="thay_avatar" src="<?= $avt1 ?>" alt="">
                                    <? } else { ?>
                                    <img class="thay_avatar" src="/assets/images/default_avt.svg" alt="">
                                    <? } ?>
                                    <div class="thongtin_khoi2_noidung_info_img_sub click_thay_avatar">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/camera_avatar.png" alt="">
                                    </div>
                                    <input type="file" class="chon_anh_2">
                                </div>
                                <div class="thongtin_khoi2_noidung_info_text">
                                    <div class="thongtin_khoi2_noidung_info_text1"><?= ($userInfo['userType'] != 3)?$userInfo['name']:$userInfo['companyName'] ?></div>
                                    <div class="thongtin_khoi2_noidung_info_text2">123 người theo dõi</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <? if ($userInfo['userType'] == 3) { ?>
                <div class="luong_tk_doanhnghiep mr_b32px">
                    <div class="div_heading flex jus_sb align_item_c mr_b16px">
                        <div class="div_heading_text fz_24_5">Ảnh giới thiệu công ty</div>
                        <div class="div_heading_sup_tt flex fz16_5 main_color">
                            <div class="div_heading_bo_cuc mr_r24px currsor_p">Thay đổi bố cục</div>
                            <div class="div_heading_them_anh click_them_anh currsor_p click_popup_themanh">Thêm ảnh
                            </div>
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
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                            <div class="khung_chua_anh-img">
                                <img src="<? echo base_url(); ?>assets/images/manhlinh.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <? } ?>

                <div class="luong_tk_ngmua">
                    <div class="thongtin_khoi2_noidung_icon flex jus_sb">
                        <div class="div_text_thongtin fz_24_5">Thông tin</div>
                        <div class="div_chinhsua flex mr_b16px show_popup_chinhsua currsor_p">
                            <div class="thongtin_khoi2_noidung_icon_img">
                                <img src="<? echo base_url(); ?>assets/images/img_sdn/chinhsua_ttcn.svg" alt="">
                            </div>
                            <div class="thongtin_khoi2_noidung_icon_text main_color">Chỉnh sửa</div>
                        </div>
                    </div>
                    <div class="thongtin_khoi2_noidung_content mr_b32px">
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Email:</div>
                                <div class="thongtin_khoi2_noidung_content_text2"><?= $userInfo['email'] ?></div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Số điện thoại:</div>
                                <div class="thongtin_khoi2_noidung_content_text2"><?= $userInfo['phone'] ?></div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Hoạt động:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">
                                    <?= $user_type[$userInfo['userType']] ?></div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <? if ($userInfo['userType'] == 3) { ?>
                        <!-- TK DOANH NGHIỆP -->
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Lĩnh vực:</div>
                                <div class="thongtin_khoi2_noidung_content_text2"><?= $field[$userInfo['field']] ?>
                                </div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Mã số thuế:</div>
                                <div class="thongtin_khoi2_noidung_content_text2"><?= $userInfo['taxCode'] ?></div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Năm thành lập:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">
                                    <?= ($userInfo['FoundedYear'] == 0 || $userInfo['FoundedYear'] == '')?"Chưa cập nhật":date('d/m/Y', strtotime($userInfo['FoundedYear'])) ?>
                                </div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Trang web:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">
                                    <?= ($userInfo['userURL'] == '')?"Chưa cập nhật":$userInfo['userURL'] ?></div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Vốn điều lệ:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">
                                    <?= ($userInfo['AuthorCapital'] < 1000000000)?number_format((float)$userInfo['AuthorCapital']/1000000000, 2, '.', ''):$userInfo['AuthorCapital'] / 1000000000 ?>
                                    tỷ</div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <? } else { ?>
                        <!-- TK CHO THUÊ, TK NGƯỜI MUA -->
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Giới tính:</div>
                                <div class="thongtin_khoi2_noidung_content_text2"><?= $gender[$userInfo['gender']] ?>
                                </div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Tỉnh thành:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">
                                    <? foreach ($city as $val) {
										if ($userInfo['cityID'] == $val['cit_id']) {
											echo $val['cit_name'];
										}
									} ?>
                                </div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Quận huyện:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">
                                    <? foreach ($district as $val) {
										if ($userInfo['districtID'] == $val['cit_id']) {
											echo $val['cit_name'];
										}
									} ?>
                                </div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Phường xã:</div>
                                <div class="thongtin_khoi2_noidung_content_text2">
                                    <? foreach ($ward as $val) {
										if ($userInfo['wardID'] == $val['ward_id']) {
											echo $val['ward_name'];
										}
									} ?>
                                </div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <? } ?>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Địa chỉ:</div>
                                <div
                                    class="thongtin_khoi2_noidung_content_text2 thongtin_khoi2_noidung_content_text2_scrooll">
                                    <?= $userInfo['address'] ?></div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">URL trang profile:</div>
                                <div class="div_scrool_x">
                                    <div
                                        class="thongtin_khoi2_noidung_content_text2 thongtin_khoi2_noidung_content_text2_scrooll mr_r16px">
                                        <?= ($userInfo['profileURL'] == '')?"Chưa cập nhật":$userInfo['profileURL'] ?>
                                    </div>
                                </div>
                                <? if ($userInfo['profileURL'] != '') { ?>
                                <div class="thongtin_khoi2_noidung_img_saochep">
                                    <img src="<? echo base_url(); ?>assets/images/img_sdn/saochep.png" alt="">
                                </div>
                                <? } ?>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                        <div class="thongtin_khoi2_noidung_content_suv">
                            <div class="thongtin_khoi2_noidung_content_text flex mr_b16px">
                                <div class="thongtin_khoi2_noidung_content_text1">Giới thiệu:</div>
                                <div class="thongtin_khoi2_noidung_content_text22">
                                    <?= ($userInfo['self-describe'] == '')?"Chưa cập nhật":$userInfo['self-describe'] ?>
                                </div>
                            </div>
                            <div class="border_ttcn"></div>
                        </div>
                    </div>
                    <div class="thongtin_khoi2_noidung_button">
                        <a href="thay-doi-mat-khau.html" class="thongtin_khoi2_noidung_button_text currsor_p">
                            Đổi mật khẩu
                        </a>
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
        <form id="submit_edit" onsubmit="edit_acc_form(); return false;" type="post">
            <div class="popup_ttcn_padding">
                <!-- TK cho thuê, người bán. nhà môi giới --- TK người mua, thuê -->
                <div class="popup_ttcn_padding_text">
                    <?= ($userInfo['userType'] != 3)?"Chỉnh sửa thông tin cá nhân":"Chỉnh sửa thông tin doanh nghiệp" ?>
                </div>
                <!-- TK DOANH NGHIỆP -->
                <!-- <div class="popup_ttcn_padding_text">Chỉnh sửa thông tin doanh nghiệp</div> -->

                <div class="popup_ttcn_input">
                    <div class="popup_ttcn_input_khoi">
                        <div class="popup_ttcn_input_khoi_sub flex mr_b16px">
                            <? if ($userInfo['userType'] != 3) { ?>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Họ tên <span>*</span></div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <input type="text" id="name" value="<?= $userInfo['name'] ?>"
                                        placeholder="Nhập họ tên">
                                </div>
                            </div>
                            <? } ?>
                            <? if ($userInfo['userType'] == 3) { ?>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Tên công ty <span>*</span></div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <input type="text" id="com_name" value="<?= $userInfo['companyName'] ?>"
                                        placeholder="Nhập tên công ty">
                                </div>
                            </div>
                            <? } ?>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Số điện thoại <span>*</span></div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <input type="text" id="phone" value="<?= $userInfo['phone'] ?>"
                                        placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <? if ($userInfo['userType'] == 3) { ?>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Trang web</div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <input type="text" id="userURL" value="<?= $userInfo['userURL'] ?>" placeholder="Nhập trang web">
                                </div>
                            </div>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Vốn điều lệ</div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <input type="text" id="AuthorCapital" value="<?= $userInfo['AuthorCapital'] ?>"
                                        placeholder="Nhập vốn điều lệ">
                                </div>
                            </div>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Mã số thuế</div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <input type="text" id="taxCode" value="<?= $userInfo['taxCode'] ?>"
                                        placeholder="Nhập mã số thuế">
                                </div>
                            </div>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Lĩnh vực <span>*</span></div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <select name="" id="field" class="select_option js-states form-control">
                                        <option value="0">Chọn Lĩnh vực</option>
                                        <option value="1" <?= ($userInfo['field'] == 1)?"selected":"" ?>>Chủ đầu tư</option>
                                        <option value="2" <?= ($userInfo['field'] == 2)?"selected":"" ?>>Thi công xây dựng</option>
                                        <option value="3" <?= ($userInfo['field'] == 3)?"selected":"" ?>>Tư vấn thiết kế</option>
                                        <option value="4" <?= ($userInfo['field'] == 4)?"selected":"" ?>>Sàn giao dịch bất động sản</option>
                                        <option value="5" <?= ($userInfo['field'] == 5)?"selected":"" ?>>Trang trí nội thất</option>
                                        <option value="6" <?= ($userInfo['field'] == 6)?"selected":"" ?>>Vật liệu xây dựng</option>
                                        <option value="7" <?= ($userInfo['field'] == 7)?"selected":"" ?>>Các lĩnh vực khác</option>
                                    </select>
                                </div>
                            </div>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Năm thành lập</div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <input type="date" id="FoundedYear" value="<?= $userInfo['FoundedYear'] ?>"
                                        placeholder="Nhập họ tên">
                                </div>
                            </div>
                            <? } ?>
                            <? if ($userInfo['userType']  != 3) { ?>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Giới tính</div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <select name="" id="gender" class="select_option js-states form-control">
                                        <option value="">Chọn giới tính</option>
                                        <option value="0" <?= ($userInfo['gender'] == 0)?"selected":"" ?>>Nam</option>
                                        <option value="1" <?= ($userInfo['gender'] == 1)?"selected":"" ?>>Nữ</option>
                                        <option value="2" <?= ($userInfo['gender'] == 2)?"selected":"" ?>>Khác</option>
                                    </select>
                                </div>
                            </div>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Ngày sinh</div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <input type="date" id="userBirth" value="<?= $userInfo['userBirth'] ?>">
                                </div>
                            </div>
                            <? } ?>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Tỉnh thành <span>*</span></div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <select name="" id="cityID" class="select_option js-states form-control">
                                        <option value="">Chọn tỉnh thành</option>
                                        <? foreach($city as $val) { ?>
                                        <option value="<?= $val['cit_id'] ?>"
                                            <?= ($userInfo['cityID'] == $val['cit_id'])?"selected":"" ?>>
                                            <?= $val['cit_name'] ?></option>
                                        <? } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="popup_ttcn_input_khoi_sub1">
                                <div class="popup_ttcn_input_khoi1_text">Quận huyện <span>*</span></div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <select name="" id="district" class="select_option js-states form-control">
                                        <option value="">Chọn quận huyện</option>
                                    </select>
                                </div>
                            </div>
                            <div
                                class="popup_ttcn_input_khoi_sub1 <?= ($userInfo['userType'] == 0 || $userInfo['userType'] == 1)?"w100pt":"" ?>">
                                <div class="popup_ttcn_input_khoi1_text">Phường xã</div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <select name="" id="ward" class="select_option js-states form-control">
                                        <option value="">Chọn phường xã</option>
                                    </select>
                                </div>
                            </div>
                            <? if ($userInfo['userType'] == 0) { ?>
                            <div class="popup_ttcn_input_khoi_sub1 w100pt">
                                <div class="popup_ttcn_input_khoi1_text">Loại hình quan tâm</div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <select name="" id="newTypeInterest" class="select_option js-states form-control">
                                        <option value="0">Chọn loại hình quan tâm</option>
                                        <option value="1" <?= ($userInfo['newTypeInterest'] == 1)?"selected":"" ?>>Mua bán</option>
                                        <option value="2" <?= ($userInfo['newTypeInterest'] == 2)?"selected":"" ?>>Cho thuê</option>
                                    </select>
                                </div>
                            </div>
                            <div class="popup_ttcn_input_khoi_sub1 w100pt">
                                <div class="popup_ttcn_input_khoi1_text">Loại bất động sản</div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <select name="" id="newType" class="select_option js-states form-control">
                                        <option value="0">Chọn loại bất động sản</option>
                                        <option value="1" <?= ($userInfo['newType'] == 1)?"selected":"" ?>>Căn hộ</option>
                                        <option value="2" <?= ($userInfo['newType'] == 2)?"selected":"" ?>>Nhà riêng</option>
                                        <option value="3" <?= ($userInfo['newType'] == 3)?"selected":"" ?>>Nhà mặt phố</option>
                                        <option value="4" <?= ($userInfo['newType'] == 4)?"selected":"" ?>>Shophouse, Nhà phố thương mại</option>
                                        <option value="5" <?= ($userInfo['newType'] == 5)?"selected":"" ?>>Biệt thự liền kề</option>
                                        <option value="6" <?= ($userInfo['newType'] == 6)?"selected":"" ?>>Đất</option>
                                        <option value="7" <?= ($userInfo['newType'] == 7)?"selected":"" ?>>Đất nền dự án</option>
                                        <option value="8" <?= ($userInfo['newType'] == 8)?"selected":"" ?>>Bất động sản khác</option>
                                    </select>
                                </div>
                            </div>
                            <? } ?>
                            <div class="popup_ttcn_input_khoi_sub1 w100pt">
                                <div class="popup_ttcn_input_khoi1_text">Địa chỉ chi tiết</div>
                                <div class="popup_ttcn_input_khoi1_ip">
                                    <input type="text" id="address" value="<?= $userInfo['address'] ?>"
                                        placeholder="Nhập địa chỉ chi tiết">
                                </div>
                            </div>
                            <div class="popup_ttcn_input_khoi_sub">
                                <div class="popup_ttcn_input_khoi1_text">Giới thiệu <span></span></div>
                                <div class="popup_ttcn_input_khoi1_ip_h h119px">
                                    <textarea name="" id="self-describe" placeholder="Nhập giới thiệu"><?= $userInfo['self-describe'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup_ttcn_button">
					<div class="button_huy button_update currsor_p mr_r24px">Hủy</div>
                    <button type="button" id="submit_edit" onclick="edit_acc_form(); return false;"
                            class="button_capnhat button_update currsor_p">Cập nhật</button>
                </div>
            </div>
        </form>
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
    $(document).ready(function() {
        // var duy1 = document.getElementsByClassName('khung_chua_anh-img')
        $(".khung_chua_anh-img:last-child").addClass("click_show_popup_img_con");
    })
    $('.click_show_popup_img_con').click(function() {
        // $('.popup_anh_con').removeClass('hidden');
        // alert(duy);
    })
    // $(document). (function(){
    //   $(".popup_anh_con_img .popup_anh_con_img_abs:nth-child(3)").css("background-color", "yellow");
    // });
    var base_url = '<?= base_url() ?>';
    var cityID = <?= $userInfo['cityID'] ?>;
    var districtID = <?= $userInfo['districtID'] ?>;
    var wardID = <?= $userInfo['wardID'] ?>;
    $.ajax({
        type: 'POST',
        url: base_url + 'account/getListDistrict',
        data: {
            id: cityID
        },
        success: function(response) {
            $html = '<option value="0">Chọn quận huyện</option>';
            $.each(JSON.parse(response), function(index, val) {
                $html += '<option value="' + val.cit_id + '">' + val.cit_name + '</option>'
            });
            $('#district').html($html);
            $("#district").val(districtID).trigger('change');
        },
        error: function(xhr) {
            console.log('error');
        }
    })
    $.ajax({
        type: 'POST',
        url: base_url + 'account/getListWard',
        data: {
            id: districtID
        },
        success: function(response) {
            $html = '<option value="0">Chọn phường xã</option>';
            $.each(JSON.parse(response), function(index, val) {
                $html += '<option value="' + val.ward_id + '">' + val.ward_name + '</option>'
            });
            $('#ward').html($html);
            $("#ward").val(wardID).trigger('change');
        },
        error: function(xhr) {
            console.log('error');
        }
    })
    $('#cityID').change(function() {
        var id_city = $(this).val();
        var wardOp = '<option value="0" class="">Phường xã *</option>';
        $('#ward').html(wardOp);
        $.ajax({
            type: 'POST',
            url: base_url + 'account/getListDistrict',
            dataType: 'json',
            data: {
                id: id_city
            },
            success: function(response) {
                $html = '<option value="0" class="">Quận huyện *</option>'
                $.each(response, function(index, val) {
                    $html += '<option value="' + val.cit_id + '">' + val.cit_name +
                        '</option>'
                });
                $('#district').html($html);
            },
            error: function(xhr) {
                console.log('error');
            }
        })
    });

    $('#district').change(function() {
        var id_district = $(this).val();
        $.ajax({
            type: 'POST',
            url: base_url + 'account/getListWard',
            dataType: 'json',
            data: {
                id: id_district
            },
            success: function(response) {
                $html = '<option value="0" class="">Phường xã *</option>';
                $.each(response, function(index, val) {
                    $html += '<option value="' + val.ward_id + '">' + val.ward_name +
                        '</option>';
                });
                $('#ward').html($html);
                $("#ward").val(wardID).trigger('change');
            },
            error: function(xhr) {
                console.log('error');
            }
        })
    });

    function edit_acc_form() {
        var name = $('#name').val();
        var com_name = $('#com_name').val();
        var phone = $('#phone').val();
        var userURL = $('#userURL').val();
        var AuthorCapital = $('#AuthorCapital').val();
        var taxCode = $('#taxCode').val();
        var field = $('#field').val();
        var FoundedYear = $('#FoundedYear').val();
        var gender = $('#gender').val();
        var userBirth = $('#userBirth').val();
        var cityID = $('#cityID').val();
        var district = $('#district').val();
        var ward = $('#ward').val();
        var newTypeInterest = $('#newTypeInterest').val();
        var newType = $('#newType').val();
        var address = $('#address').val();
        var self_describe = $('#self-describe').val();
        var data = new FormData();

        data.append('name', name);
        data.append('companyName', com_name);
        data.append('phone', phone);
        data.append('userURL', userURL);
        data.append('AuthorCapital', AuthorCapital);
        data.append('taxCode', taxCode);
        data.append('field', field);
        data.append('FoundedYear', FoundedYear);
        data.append('gender', gender);
        data.append('userBirth', userBirth);
        data.append('cityID', cityID);
        data.append('districtID', district);
        data.append('wardID', ward);
        data.append('newTypeInterest', newTypeInterest);
        data.append('newType', newType);
        data.append('address', address);
        data.append('self-describe', self_describe);
        

        $.ajax ({
            type: 'POST',
            url: base_url+'account/edit_account',
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'json',
			data: data,
			enctype: 'multipart/form-data',
			success: function(response) {
				alert('Chỉnh sửa thông tin thành công');
				window.location.reload();
			},
			error: function(xhr) {
				console.log('error');
			}
        })
    }

	$('.chon_anh_2').change(function() {
		var img = $(this)[0].files[0];
		var data = new FormData();

		data.append('user_avt', img);
		$.ajax ({
			type: 'POST',
            url: base_url+'account/postImg',
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'json',
			data: data,
			enctype: 'multipart/form-data',
			success: function(response) {
				window.location.reload();
			},
			error: function(xhr) {
				console.log('error');
			}
		})
	});

	$('.chon_anh').change(function() {
		var img = $(this)[0].files[0];
		var data = new FormData();
		
		data.append('coverImage', img);
		$.ajax ({
			type: 'POST',
            url: base_url+'account/postCoverImg',
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'json',
			data: data,
			enctype: 'multipart/form-data',
			success: function(response) {
				window.location.reload();
			},
			error: function(xhr) {
				console.log('error');
			}
		})
	});
    </script>
</body>

</html>
