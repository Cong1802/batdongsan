<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Cập nhật tin đăng dự án</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<? echo base_url()?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url()?>assets/css/slick-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style_tan.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style.css">
</head>

<body>
    <?
        $d= date('d',$newsDetail['time_create']);
        $m= date('m',$newsDetail['time_create']);
        $y = date('Y',$newsDetail['time_create']);
    ?>
    <? require_once APPPATH.'views/site/includes/da_header.php' ?>
    <div class="backgroung_chinh">
        <div class="link_trang">
            <form action="" method="POST" id="post_news_project" enctype="multipart/form-data">
                <div class="bot-24">
                    <div class="body_moigioi_padding_header_tex flex mr_b24px">
                        <div class="body_moigioi_padding_header_tex_tt font_size_14">Trang chủ</div>
                        <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_right.png" class="checked" alt="">
                        <div class="body_moigioi_padding_header_tex_moigioi font_size_14">Loại đăng tin</div>
                        <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_right.png" class="checked" alt="">
                        <div class="chuxanh">Soạn tin đăng
                        </div>
                    </div>
                </div>

                <!-- khoi noi dung -->
                <h1 class="chuden">Soạn tin đăng</h1>

                <!-- thong tin chung -->
                <div class="khung_thongtin top-24">
                    <p class="chuxanh font-medium thongtin_tieude">Thông tin cơ bản</p>
                    <div class="thongtin_noidung top-8">
                        <div class="khoitren flex space">
                            <div class="khoitrai">
                                <div class="khoicon top-21 box_input_infor">
                                    <p class="font-medium height-20">Tên dự án <span class="chudo">*</span></p>
                                    <div class="khunginput top-8 input_infor_tag">
                                        <input type="text" name= "project_name" value="<?= $newsDetail['project_name'] ?>" class="project_name" placeholder="Nhập tên dự án">
                                    </div>
                                </div>
                                <div class="khoicon top-21 box_input_infor">
                                    <p class="font-medium height-20">Giới thiệu <span class="chudo">*</span></p>
                                    <div class="khungtext top-8 input_infor_tag">
                                        <textarea name="introduce" id="" class="introduce" cols="30" rows="10"
                                            placeholder="Nhập nội dung giới thiệu ngắn"><?= $newsDetail['introduce'] ?></textarea>
                                    </div>
                                </div>
                                <div class="khoicon top-21 box_input_infor">
                                    <p class="font-medium height-20">Loại bất động sản <span class="chudo">*</span></p>
                                    <div class="top-8">
                                        <select name="bds_type" class="select_option bds_type js-states form-control">
                                                <option selected disabled>Chọn loại bất động sản</option>
                                                <option <?= ($newsDetail['bds_type'] == 1) ? "selected" : "" ?> value="1">Căn hộ</option>
                                                <option <?= ($newsDetail['bds_type'] == 2) ? "selected" : "" ?> value="2">Nhà riêng</option> 
                                                <option <?= ($newsDetail['bds_type'] == 3) ? "selected" : "" ?> value="3">Nhà mặt phố</option>
                                                <option <?= ($newsDetail['bds_type'] == 4) ? "selected" : "" ?> value="4">Shophouse, Nhà phố thương mại</option>
                                                <option <?= ($newsDetail['bds_type'] == 5) ? "selected" : "" ?> value="5">Biệt thự liền kề</option>
                                                <option <?= ($newsDetail['bds_type'] == 6) ? "selected" : "" ?> value="6">Đất</option>
                                                <option <?= ($newsDetail['bds_type'] == 7) ? "selected" : "" ?> value="7">Đất nền dự án</option>
                                                <option <?= ($newsDetail['bds_type'] == 8) ? "selected" : "" ?> value="8">Bất động sản khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="khoicon top-21 box_input_infor">
                                    <div class="font-medium height-20">Tỉnh/ thành phố <span class="chudo">*</span></div>
                                    <div class="top-8">
                                        <select onchange="address(this,'districts','ajaxGetListDistricts','Chọn quận huyện','1')" name="city" id="select_city" class="select_option js-states form-control">
                                            <option selected disabled>Chọn tỉnh thành phố</option>
                                            <? foreach($listcity as $cit): ?>
                                            <option <?= ($newsDetail['select_city'] == $cit['cit_id']) ? "selected" : "" ?> value="<?= $cit['cit_id'] ?>"><?= $cit['cit_name'] ?></option>
                                            <? endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="khoicon top-21 box_input_infor">
                                    <div class="font-medium height-20">Quận huyện <span class="chudo">*</span></div>
                                    <div class="top-8">
                                        <select onchange="address(this,'wards','ajaxGetListWards','Chọn phường xã','2')" name="districts" class="districts select_option js-states form-control">
                                            <option disabled selected>Chọn quận huyện</option>
                                            <? foreach($listDistricts as $districts): ?>
                                            <option <?= ($newsDetail['districts'] == $districts['cit_id']) ? "selected" : "" ?> value="<?= $districts['cit_id'] ?>"><?= $districts['cit_name'] ?></option>
                                            <? endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="khoicon top-21 box_input_infor">
                                    <div class="font-medium height-20">Phường xã</div>
                                    <div class="top-8">
                                        <select  onchange="address(this,'street','getStreetBy','Chọn Đường/ phố','3')" name="wards" class="select_option wards js-states form-control">
                                            <option disabled selected>Chọn phường xã</option>
                                            <? foreach($listWards as $wards): ?>
                                            <option <?= ($newsDetail['wards'] == $wards['ward_id']) ? "selected" : "" ?> value="<?= $wards['ward_id'] ?>"><?= $wards['ward_name'] ?></option>
                                            <? endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="khoicon top-21 box_input_infor">
                                    <div class="font-medium height-20">Ngày đăng</div>
                                    <div class="khunginput top-8">
                                        <input name="post_time" value="<?= date('Y-m-d',$newsDetail['time_create']) ?>" class="post_time" type="date">
                                    </div>
                                </div>
                            </div>
                            <div class="khoiphai">
                                <div class="khoicon top-44 khoi-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d251637.95196238213!2d105.6189045!3d9.779349!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1653901105958!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="khoicon top-21 box_input_infor">
                                    <div class="font-medium height-20">Đường phố</div>
                                    <div class="top-8">
                                        <select name="street" class="select_option street js-states form-control">
                                            <option disabled selected>Chọn Đường/ phố</option>
                                            <? foreach($listStreet as $street): ?>
                                            <option <?= ($newsDetail['street'] == $street['street_id']) ? "selected" : "" ?> value="<?= $street['street_id'] ?>"><?= $street['street_name'] ?></option>
                                            <? endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="khoicon top-21 box_input_infor">
                                    <div class="font-medium height-20">Địa chỉ chi tiết</div>
                                    <div class="khunginput top-8">
                                        <input type="text" name="addr_detail" class="addr_detail" value="<?= $newsDetail['addr_detail'] ?>" placeholder="Nhập địa chỉ chi tiết">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end thong tin chung -->

                <!-- them anh (fix) -->
                <div class="add_anhbia top-24">
                    <? if(file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['banner_img']) && $newsDetail['banner_img'] != ''): ?>
                        <img src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $newsDetail['banner_img'] ?>" alt="" class="post_anh">
                    <? else: ?>
                        <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="post_anh">
                    <? endif ?>
                    
                    <div class="butt_themanh flex center-center c-pointer">
                        <img src="<? echo base_url(); ?>assets/images/tan_camera.svg" alt="" class="right-8 wh-24">
                        <p class="font-medium chuxanh">Thêm ảnh bìa</p>
                    </div>
                    <input type="file" class="click_anh hidden banner_img">
                </div>
                <!-- end them anh -->
                <div class="border-375"></div>
                <!-- chu dau tu -->
                <div class="chudautu top-24">
                    <p class="font-medium chuxanh">Chủ đầu tư</p>
                    <div class="chudautu_noidung flex space top-8">
                        <div class="khoitrai">
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Tên công ty <span class="chudo">*</span></p>
                                <div class="khunginput top-8 input_infor_tag">
                                    <input type="text" name="cdt_come_name" value="<?= $newsDetail['cdt_com_name']?>" class="cdt_come_name" placeholder="Nhập tên công ty">
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Số điện thoại</p>
                                <div class="khunginput top-8">
                                    <input type="text" name="cdt_phone" value="<?= $newsDetail['cdt_phone']?>" class="cdt_phone" placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Số dự án</p>
                                <div class="khunginput top-8">
                                    <input type="text" name="cdt_project_num" class="cdt_project_num" value="<?= $newsDetail['cdt_project_num']?>" placeholder="Nhập số dự án">
                                </div>
                            </div>
                        </div>
                        <div class="khoiphai">
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Ngày thành lập công ty</p>
                                <div class="khunginput top-8">
                                    <input name="cdt_founding" value="<?= date('Y-m-d',$newsDetail['cdt_founding']) ?>" class="cdt_founding" type="date">
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Địa chỉ trụ sở chính</p>
                                <div class="khunginput top-8">
                                    <input type="text" class="cdt_addr_com" value="<?= $newsDetail['cdt_addr_com'] ?>" name="cdt_addr_com" placeholder="Nhập địa chỉ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end chu dau tu -->
                <div class="border-375"></div>
                <!-- thong tin chi tiet du an -->
                <div class="thongtinchitietduan top-24">
                    <p class="font-medium chuxanh">Thông tin chi tiết dự án</p>
                    <div class="thongtinchitietduan_noidung flex space top-8">
                        <div class="khoitrai">
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Thời gian khởi công</p>
                                <div class="khunginput top-8">
                                    <input class="time_st" value="<?= date('Y-m-d',$newsDetail['time_st']) ?>" name="time_st" type="date">
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Các loại diện tích</p>
                                <div class="khunginput top-8">
                                    <input type="text" class="area_type" name="area_type" value="<?= $newsDetail['area_type'] ?>" placeholder="Nhập các loại diện tích">
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Số tòa nhà</p>
                                <div class="khunginput top-8">
                                    <input type="text" name="home_num" class="home_num" value="<?= $newsDetail['home_num'] ?>" placeholder="Nhập số tòa nhà">
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Số sản phẩm</p>
                                <div class="khunginput top-8">
                                    <input type="text" class="product_num" value="<?= $newsDetail['product_num'] ?>" name="product_num" placeholder="Nhập số sản phẩm">
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Quy mô</p>
                                <div class="khunginput top-8">
                                    <input type="number" name="quy_mo" class="quy_mo" value="<?= $newsDetail['quy_mo'] ?>" placeholder="Nhập quy mô dự án (m2)">
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Diện tích xây dựng</p>
                                <div class="khunginput top-8">
                                    <input type="number" name="detail_area" class="detail_area" value="<?= $newsDetail['detail_area'] ?>" placeholder="Nhập diện tích xây dựng">
                                </div>
                            </div>
                        </div>
                        <div class="khoiphai">
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Thời gian hoàn thành</p>
                                <div class="khunginput top-8">
                                    <input name="time_done" class="time_done" value="<?= date('Y-m-d',$newsDetail['time_done']) ?>" type="date">
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Ngày bàn giao <span class="chudo">*</span></p>
                                <div class="khunginput top-8">
                                    <input name="day_of_delivery" value="<?= date('Y-m-d',$newsDetail['day_of_delivery']) ?>" class="day_of_delivery" type="date">
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor relative">
                                <p class="font-medium height-20">Khoảng giá <span class="chudo">*</span></p>
                                <div class="khoinho flex space top-8">
                                    <div class="khunginput khoibe input_infor_tag">
                                        <input type="text" name="price_min" value="<?= $newsDetail['nhapmin'] ?>" class="nhapmin" placeholder="Giá min">
                                    </div>
                                    <div class="khunginput khoibe input_infor_tag">
                                        <input type="text" name="price_max" value="<?= $newsDetail['nhapmax'] ?>" class="nhapmax" placeholder="Giá max">
                                    </div>
                                </div>
                                <div class="khoigia absolute right-position-0">
                                    <p>
                                        <span class="tienmin">0</span> <span class="dvmin">triệu</span>
                                        <span>-</span>
                                        <span class="tienmax">0</span> <span class="dvmax">triệu</span>
                                        <span>VNĐ</span>
                                    </p>
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor relative">
                                <p class="font-medium height-20">Tổng vốn đầu tư</p>
                                <div class="khunginput top-8">
                                    <input type="number" name="total_investment" value="<?= $newsDetail['total_investment']?>" class="tonggia total_investment" placeholder="Nhập số vốn đầu tư">
                                </div>
                                <div class="khoigia absolute right-position-0">
                                    <p>
                                        <span class="tien_tonggia">0</span> <span class="dvtonggia">triệu</span>
                                        <span>VNĐ</span>
                                    </p>
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium height-20">Tiến độ</p>
                                <div class="top-8">
                                    <select name="progress" class="select_option progress js-states form-control">
                                        <option selected disabled>Chọn tiến độ</option>
                                        <option <?= ($newsDetail['progress'] == 1) ? "selected" : ""?> value="1">Sắp mở bán</option>
                                        <option <?= ($newsDetail['progress'] == 2) ? "selected" : ""?> value="2">Đang mở bán</option>
                                    </select>
                                </div>
                            </div>
                            <div class="khoicon top-21 box_input_infor">
                                <p class="font-medium">Trạng thái</p>
                                <div class="top-8">
                                    <select name="status" class="select_option status js-states form-control">
                                        <option selected disabled>Chọn trạng thái</option>
                                        <option <?= ($newsDetail['status'] == 1) ? "selected" : ""?> value="1">Đang xây dựng</option>
                                        <option <?= ($newsDetail['status'] == 2) ? "selected" : ""?> value="2">Đã hoàn thiện</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="khoiduoi top-32 relative">
                        <div class="type_mota absolute">
                            <div class="des_text active_mota c-pointer">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="des_img c-pointer">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <input type="file" class="hidden click_img_mota">

                        <div class="khoi_mota">
                            <textarea name="" id="" cols="30" rows="10" class="mota_text <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_project']) && $newsDetail['desc_project'] != '') ? "hidden" : "" ?>"><?= $newsDetail['desc_project'] ?></textarea>
                            <div class="thongtinctda_khoianh relative <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_project'])  && $newsDetail['desc_project'] != '') ? "" : "hidden" ?>">
                                <?  if(file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_project'])): ?>
                                <img src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $newsDetail['desc_project'] ?>" alt="" class="mota_img anh_mota">
                                <? endif ?>
                                <div class="thongtinctda_khoibutton flex center-center absolute">
                                    <button type="button" class="thongtinctda_tieude_anh">Thêm tiêu đề ảnh</button>
                                    <img src="<? echo base_url(); ?>assets/images/rotate-left.png" alt="" class="wh-24 ttctda_img_left right-10">
                                    <img src="<? echo base_url(); ?>assets/images/rotate-right.png" alt="" class="wh-24 ttctda_img_right right-35">
                                    <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="wh-24 thongtinctda_remove">
                                </div>
                            </div>
                        </div>
                        <div class="khoi_mota_img top-8 relative <?= ((file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_project']))&& $newsDetail['title_img_project'] != '') ? "" : "hidden" ?>">
                            <input type="text" class="title_img_project" value="<?= $newsDetail['title_img_project'] ?>" placeholder="Nhập tiêu đề ảnh">
                            <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="absolute thongtinctda_remove_tieudeanh wh-20">
                        </div>
                    </div>
                </div>
                <!-- end chi tiet du an -->
                <div class="border-375"></div>
                <!-- vi tri du an -->
                <div class="vitriduan top-24">
                    <p class="font-medium chuxanh">Vị trí dự án</p>
                    <div class="vitriduan_noidung">
                        <p class="vtda_ghichu chuden right-22">(Giới thiệu và mô tả vị trí dự án)</p>
                        <div class="vitriduan_khoimota top-15 relative">
                            <div class="type_mota absolute">
                                <div class="vtda_destext c-pointer active_mota">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="vtda_desimg c-pointer">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <input type="file" class="hidden vtda_click_anh">

                            <div class="vitriduan_mota">
                                <div class="khoi_mota">
                                    <textarea name="" id="" cols="30" rows="10" class="vtda_text <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['project_addr']) && $newsDetail['project_addr'] != '') ? "hidden" : "" ?>"></textarea>
                                    <div class="vitriduan_khoianh relative <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['project_addr'])) ? "" : "hidden" ?>">
                                        <? if(file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['project_addr']) && $newsDetail['project_addr'] != ''): ?>
                                        <img src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $newsDetail['project_addr'] ?>" alt="" class="vtda_post_anh">
                                        <? endif ?>
                                        <div class="vitriduan_khoibutton flex center-center absolute">
                                            <button type="button" class="vitriduan_tieude_anh c-pointer">Thêm tiêu đề ảnh</button>
                                            <img src="<? echo base_url(); ?>assets/images/rotate-left.png" alt=""
                                                class="wh-24 vitriduan_img_left right-10 c-pointer">
                                            <img src="<? echo base_url(); ?>assets/images/rotate-right.png" alt=""
                                                class="wh-24 vitriduan_img_right right-35 c-pointer">
                                            <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt=""
                                                class="wh-24 vitriduan_remove c-pointer">
                                        </div>
                                    </div>
                                </div>
                                <div class="khoi_mota_img top-8 relative <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['project_addr']) && $newsDetail['title_img_vtda'] != '') ? "" : "hidden" ?>">
                                    <input type="text" class="title_img_vtda" value="<?= $newsDetail['title_img_vtda'] ?>"placeholder="Nhập tiêu đề ảnh">
                                    <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt=""
                                        class="absolute vtda_remove_tieudeanh wh-20 c-pointer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end vi tri du an -->
                <div class="border-375"></div>
                <!-- mat bang du an -->
                <?
                    $arr_title_mb = json_decode($newsDetail['title_mb_project']);
                    $img_mb_project = json_decode($newsDetail['img_mb_project']);
                ?>
                <div class="matbangduan top-24">
                    <p class="font-medium chuxanh">Mặt bằng dự án</p>
                    <div class="mbda_noidung">
                        <? foreach($arr_title_mb as $key=>$value): ?>
                        <div class="khoi_tieude_mbda">
                            <div class="box_input_infor">
                                <p class="font-medium chuden height-20 top-29">Tiêu đề mặt bằng dự án <span
                                        class="chudo">*</span></p>
                                <div class="khunginput top-8 input_infor_tag">
                                    <input class="title_mb_project" type="text" value="<?= $value ?>" name="title_mb_project" placeholder="Nhập tiêu đề mặt bằng dự án">
                                </div>
                            </div>
                            <input onchange="mbda_tieude_click_anh(this)" type="file" name="mbda_tieude_click_anh[]" class="hidden mbda_tieude_click_anh">
                            <div class="mbda_khoi_anh top-24 relative">
                                <? if( isset($img_mb_project[$key])): ?>
                                    <img src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $img_mb_project[$key] ?>" alt="" class="mbda_post_anh">
                                <? else: ?>
                                    <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="mbda_post_anh">
                                <? endif ?>
                                <div onclick="mbda_add_anh(this)" class="mbda_add_anh flex center-center absolute">
                                    <img src="<? echo base_url(); ?>assets/images/tan_camera.svg" alt="" class="right-8 wh-24">
                                    <p class="chuxanh">Thêm ảnh</p>
                                </div>
                            </div>
                        </div>
                        <? endforeach ?>
                    </div>
                    <div class="khoi_add_mbda left-22 flex top-8">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19" stroke="#3691D9" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M5 12H19" stroke="#3691D9" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <p class="chuxanh">Thêm tiêu đề mặt bằng dự án</p>
                    </div>
                    <div class="mbda_khoi_mota top-32 relative">
                        <div class="type_mota absolute">
                            <div class="mbda_destext c-pointer active_mota">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="mbda_desimg c-pointer">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <input type="file" class="mbda_click_anh hidden">
                        <div class="mbda_text-or-img">
                            <textarea name="" id="" cols="30" rows="10" class="mbda_text <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_mb_project'])  && $newsDetail['desc_mb_project'] != '') ? 'hidden' : '' ?>"><?= $newsDetail['desc_mb_project'] ?></textarea>
                            <div class="mbda_khoianh relative <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_mb_project'])) ? '' : 'hidden' ?>">
                            <? if(file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_mb_project']) && $newsDetail['desc_mb_project'] != ''): ?>
                            <img src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $newsDetail['desc_mb_project'] ?>" alt="" class="mbda_post_anh_mota">
                            <? endif ?>
                            <div class="mbda_khoibutton flex center-center absolute">
                                    <button type="button" class="mbda_tieude_anh c-pointer">Thêm tiêu đề ảnh</button>
                                    <img src="<? echo base_url(); ?>assets/images/rotate-left.png" alt=""
                                        class="wh-24 mbda_img_left right-10 c-pointer">
                                    <img src="<? echo base_url(); ?>assets/images/rotate-right.png" alt=""
                                        class="wh-24 mbda_img_right right-35 c-pointer">
                                    <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="wh-24 mbda_remove c-pointer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mbda_khoi_tieude relative <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_mb_project']) && $newsDetail['title_img_mbda'] != '') ? '' : 'hidden' ?>">
                        <input type="text" class="title_img_mbda" value ="<?= $newsDetail['title_img_mbda'] ?>" placeholder="Nhập tiêu đề ảnh">
                        <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="absolute mbda_tieude_remove wh-20 c-pointer">
                    </div>
                </div>
                <!-- end mat bang du an -->
                <div class="border-375"></div>
                <!-- tien ich du an -->
                <div class="tienichduan top-24">
                    <p class="font-medium chuxanh">Tiện ích dự án</p>
                    <?
                        $arr_utilities = explode(',',$newsDetail['list_utilities']);
                    ?>
                    <p class="tida_title chuden top-8">Bài đăng thông tin bổ sung thường có hiệu quả hơn 40% so với bài đăng
                        thường</p>
                    <div class="tida_khoi_thongtin flex">
                        <div class="tida_khoito">
                            <div class="tida_thongtin_khoicon top-24">
                                <div class="tida_click flex space center-center">
                                    <p class="font-medium chuden">Cơ sở vật chất</p>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                            fill="#474747" />
                                    </svg>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(1,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="1" class="right-9">
                                    <p>Công viên</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(2,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="2" class="right-9">
                                    <p>Hộp thư dân cư</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(3,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="3" class="right-9">
                                    <p>Đài phun nước</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(4,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="4" class="right-9">
                                    <p>Ghế công cộng</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(5,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="5" class="right-9">
                                    <p>Chỗ để xe miễn phí</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(6,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="6" class="right-9">
                                    <p>Chỗ để xe công cộng miễn phí</p>
                                </div>
                            </div>
                            <div class="tida_thongtin_khoicon top-24">
                                <div class="tida_click flex space center-center">
                                    <p class="font-medium chuden">Cơ sử vật chất</p>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                            fill="#474747" />
                                    </svg>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(7,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="7" class="right-9">
                                    <p>Rap chiếu phim</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(8,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="8" class="right-9">
                                    <p>Spa làm đẹp</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(9,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="9" class="right-9">
                                    <p>Khu vui chơi trẻ em</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(10,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="10" class="right-9">
                                    <p>Khu thư giãn người già</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(11,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="11" class="right-9">
                                    <p>Công viên nước</p>
                                </div>
                            </div>
                        </div>

                        <div class="tida_khoito">
                            <div class="tida_thongtin_khoicon top-24">
                                <div class="tida_click flex space center-center">
                                    <p class="font-medium chuden">Y tế giáo dục</p>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                            fill="#474747" />
                                    </svg>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(12,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="12" class="right-9">
                                    <p>Nhà thuốc</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(13,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="13" class="right-9">
                                    <p>Bệnh viện</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(14,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="14" class="right-9">
                                    <p>Trường cấp 1,2,3</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(15,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="15" class="right-9">
                                    <p>Trường mần non</p>
                                </div>
                            </div>
                            <div class="tida_thongtin_khoicon top-24">
                                <div class="tida_click flex space center-center">
                                    <p class="font-medium chuden">Tiêu dùng, ẩm thực</p>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                            fill="#474747" />
                                    </svg>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(16,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="16" class="right-9">
                                    <p>Quán bar</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(17,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="17" class="right-9">
                                    <p>Nhà hàng</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(18,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="18" class="right-9">
                                    <p>Trung tâm thương mại</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(19,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="19" class="right-9">
                                    <p>Cây ATM</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(20,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="20" class="right-9">
                                    <p>Ngân hàng</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(21,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="21" class="right-9">
                                    <p>Coffee shop</p>
                                </div>
                            </div>
                        </div>

                        <div class="tida_khoito">
                            <div class="tida_thongtin_khoicon top-24">
                                <div class="tida_click flex space center-center">
                                    <p class="font-medium chuden">An toàn, vệ sinh</p>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                            fill="#474747" />
                                    </svg>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(22,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="22" class="right-9">
                                    <p>Máy báo khói</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(23,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="23" class="right-9">
                                    <p>Bình chữa cháy</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(24,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="24" class="right-9">
                                    <p>Camera an ninh</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(25,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="25" class="right-9">
                                    <p>Máy báo khí CO</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(26,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="26" class="right-9">
                                    <p>Bảo vệ an ninh</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(27,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="27" class="right-9">
                                    <p>Dọn vệ sinh</p>
                                </div>
                            </div>
                            <div class="tida_thongtin_khoicon top-24 khoi-768">
                                <div class="tida_click flex space center-center">
                                    <p class="font-medium chuden">Thể thao</p>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                            fill="#474747" />
                                    </svg>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(28,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="28" class="right-9">
                                    <p>Bể bơi</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(29,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="29" class="right-9">
                                    <p>Bóng rổ</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(30,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="30" class="right-9">
                                    <p>Bóng đá</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(31,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="31" class="right-9">
                                    <p>Cầu lông</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(32,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="32" class="right-9">
                                    <p>Sân golf</p>
                                </div>
                            </div>
                        </div>

                        <div class="tida_khoito not-768">
                            <div class="tida_thongtin_khoicon top-24">
                                <div class="tida_click flex space center-center">
                                    <p class="font-medium chuden">Thể thao</p>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                            fill="#474747" />
                                    </svg>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(33,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="33" class="right-9">
                                    <p>Bể bơi</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(34,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="34" class="right-9">
                                    <p>Bóng rổ</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(35,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="35" class="right-9">
                                    <p>Bóng đá</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(36,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="36" class="right-9">
                                    <p>Cầu lông</p>
                                </div>
                                <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                    <input type="checkbox" <?= (in_array(37,$arr_utilities)) ? 'checked' : "" ?> name="utilities" value ="37" class="right-9">
                                    <p>Sân golf</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tida_khoimota relative top-29">
                        <div class="tida_button_mota absolute">
                            <div class="type_mota absolute">
                                <div class="tida_destext c-pointer active_mota">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="tida_desimg c-pointer">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <input type="file" class="hidden tida_click_anh">
                        <div class="tida_text_or_img">
                            <textarea name="" id="" cols="30" rows="10" class="tida_text <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_utilities_project']) && $newsDetail['desc_utilities_project'] != '') ? "hidden" : "" ?>"><?= $newsDetail['desc_utilities_project'] ?></textarea>
                            <div class="tida_khoianh relative <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_utilities_project'])) ? "" : "hidden" ?>">
                            <? if(file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_utilities_project']) && $newsDetail['desc_utilities_project'] != ''): ?>
                            <img src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $newsDetail['desc_utilities_project'] ?>" alt="" class="tida_post_anh">
                            <? endif ?>
                                <div class="tida_khoibutton flex center-center absolute">
                                    <button type="button" class="tida_tieude_anh c-pointer">Thêm tiêu đề ảnh</button>
                                    <img src="<? echo base_url(); ?>assets/images/rotate-left.png" alt=""
                                        class="wh-24 tida_img_left right-10 c-pointer">
                                    <img src="<? echo base_url(); ?>assets/images/rotate-right.png" alt=""
                                        class="wh-24 tida_img_right right-10 c-pointer">
                                    <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="wh-24 tida_remove c-pointer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tida_khoi_tieude relative <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$newsDetail['desc_utilities_project']) && $newsDetail['title_img_utilities']) ? "" : "hidden" ?>">
                        <input type="text" class="title_img_utilities" value="<?= $newsDetail['title_img_utilities']?>" placeholder="Nhập tiêu đề ảnh">
                        <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="absolute tida_tieude_remove wh-20 c-pointer">
                    </div>
                </div>
                <!-- end tien ich du an -->

                <!-- gioi thieu du an -->
                <div class="khoi_gioithieuduan">
                    <?
                        $arr_introduct = json_decode($newsDetail['introduct_project']);
                        $arr_part_name = explode(',',$newsDetail['part_name']); 
                        $title_img_gtda = json_decode($newsDetail['title_img_gtda']);
                        $count = 0;
                        foreach ($arr_introduct as $key=>$value):
                    ?>
                    <div class="gioithieuduan top-24">
                        <div class="box_input_infor">
                            <p class="font-medium chuden">Tên đầu mục<span class="chudo">*</span></p>
                            <div class="khunginput top-8 input_infor_tag">
                                <input type="text" class="part_name" value="<?= $arr_part_name[$key]?>" name="part_name" placeholder="Nhập tên đầu mục">
                            </div>
                        </div>
                        <div class="gtda_khoimota relative top-24">
                            <div class="gtda_button_mota absolute">
                                <div class="type_mota absolute">
                                    <div onclick="gtda_destext(this)" class="gtda_destext c-pointer active_mota">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                                stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                                stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div onclick="gtda_desimg(this)" class="gtda_desimg c-pointer">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z"
                                                stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z"
                                                stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <input onchange="gtda_click_anh(this)" type="file" class="hidden gtda_click_anh">
                            <div class="gtda_text_or_img">
                                <textarea name="" id="" cols="30" rows="10" class="gtda_text <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$value) && $value != '') ? 'hidden' : "" ?>"><?= $value ?></textarea>
                                <div class="gtda_khoianh relative <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$value) && $value != '') ? '' : "hidden" ?>">
                                    
                                    <img src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $value ?>" alt="" class="gtda_post_anh">
                                    
                                    <div class="gtda_khoibutton flex center-center absolute">
                                        <button type="button" onclick="show_gtda(this)" class="gtda_tieude_anh c-pointer">Thêm tiêu đề ảnh</button>
                                        <img onclick="gtda_img_left(this)" src="<? echo base_url(); ?>assets/images/rotate-left.png" alt=""
                                            class="wh-24 gtda_img_left right-10 c-pointer">
                                        <img onclick="gtda_img_right(this)" src="<? echo base_url(); ?>assets/images/rotate-right.png" alt=""
                                            class="wh-24 gtda_img_right right-10 c-pointer">
                                        <img onclick="gtda_remove(this)" src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="wh-24 gtda_remove c-pointer">
                                    </div>
                                </div>
                            </div>
                            <div class="gtda_khoi_tieude relative top-8 <?= (file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$value) && isset($title_img_gtda[$count])) ? '' : "hidden" ?>">
                                <input type="text" class="title_img_gtda" value="<?= (isset($title_img_gtda[$count])) ? $title_img_gtda[$count] : "" ?>" placeholder="Nhập tiêu đề ảnh">
                                <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" onclick="hide_gtda(this)"  class="absolute gtda_tieude_remove wh-20 c-pointer">
                            </div>
                            <!-- <?
                                if(file_exists('upload/'.$y.'/'.$m.'/'.$d.'/'.$value) &&  isset($title_img_gtda[$count])) 
                                {
                                    $count++;
                                }
                            ?> -->
                        </div>
                    </div>
                    <? endforeach ?>
                </div>
                <!-- end gioi thieu du an -->
                <div class="border-375"></div>
                <!-- add muc gioi thieu du an -->
                <div class="add_gioithieuduan top-24">
                    <div class="click_gioithieuduan flex center-height c-pointer">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19" stroke="#3691D9" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M5 12H19" stroke="#3691D9" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <p class="chuxanh">Thêm mục giới thiệu dự án</p>
                    </div>
                </div>
                <!-- end add muc gioi thieu du an -->

                <!-- butt dang tin -->
                <div class="flex space butt_dangtin relative <?= ($newsDetail['stt_news'] == 2 ) ? '' : 'hidden' ?>">
                    <button type="submit" class="butt_xanh btn_post_now flex center-center c-pointer">
                        <p class="font-medium size-16 right-8">Đăng ngay</p>
                        <img src="<? echo base_url(); ?>assets/images/butt_dangngay.svg" alt="" class="wh-20">
                    </button>
                    <div class="chon flex center-center c-pointer">
                        <p class="right-3">Chọn</p>
                        <img src="<? echo base_url(); ?>assets/images/arrow_chon.png" alt="" class="wh-24">
                    </div>
                    <div onclick="hienpopup('popup_lenlich')"
                        class="popup_con chuden size-14 flex center-height absolute c-pointer hidden">Hẹn lịch đăng tin
                    </div>
                </div>
                <!-- end butt dang tin -->

                <!-- butt hen lich dang tin -->
                <div class="flex space butt_henlich relative <?= ($newsDetail['stt_news'] == 3 ) ? '' : 'hidden' ?>">
                    <button class="butt_xanh btn_appointment flex center-center c-pointer">
                        <p class="font-medium size-16 right-8">Hẹn lịch đăng tin</p>
                        <img src="<? echo base_url(); ?>assets/images/clock_henlich.png" alt="" class="wh-20">
                    </button>
                    <div class="chon_henlich flex center-center c-pointer">
                        <p class="right-3">Chọn</p>
                        <img src="<? echo base_url(); ?>assets/images/arrow_chon.png" alt="" class="wh-24">
                    </div>
                    <div class="henlich_popup_con chuden size-14 absolute c-pointer hidden">
                        <div onclick="hienpopup('popup_lenlich')" class="doithoigian flex center-height">Đổi thời gian</div>
                        <div class="dangngay flex center-height">Đăng ngay</div>
                    </div>
                </div>
                <!-- end butt hen lich dang tin -->

                <div class="gioithieu_tindang top-32 size-14">
                    <p>Bạn đang truy cập trang đăng tin BĐS miễn phí <span class="chuxanh">Batdongsan3S</span>. Cùng khám
                        phá những thông tin hữu ích dành cho môi giới, hoặc người đang có nhu cầu đăng tin bán nhà đất.</p>
                    <p class="top-16 size-18 font-medium">Các Loại hình bất động sản được đăng tin nhiều nhất hiện nay</p>
                    <p class="top-16">Dạo quanh một vòng các web đăng tin BĐS miễn phí, có thể thấy rất nhiều mẫu tin đăng
                        thuộc các loại hình bất động sản khác nhau. Tuy nhiên, theo thống kê của Homedy, hiện nay có 3 loại
                        hình nhà đất đang được đăng tin rao nhiều nhất, bao gồm: bán nhà đất, bán căn hộ chung cư và <span
                            class="chuxanh">cho thuê nhà</span>. Điều này cho thấy nguồn cung cũng như nhu cầu của thị
                        trường cho những sản phẩm bất động sản này là rất lớn.</p>
                    blah blah blah...
                </div>
                    <!-- popup len lich -->
                    <div id="popup_lenlich" class="popup chuden size-16 hidden">
                        <div class="table overflow-hidden">
                            <div class="lenlich_noidung">
                                <p class="lenlich_tieude font-medium size-24">Lên lịch đăng tin</p>
                                <div class="top-24 chuden">Lên lịch đăng tin vào thời gian phù hợp nhất để tương tác với nhiều
                                    khách hàng hơn hoặc tự chọn ngày giờ đăng tin trong tương lại.</div>
                                <div class="lenlich_input top-32 flex space">
                                    <div class="khunginput">
                                        <input class="date_post_news" value="<?= date('Y-m-d',$newsDetail['date_post_news']) ?>" type="date">
                                    </div>
                                    <div class="khunginput">
                                        <input class="time_post_news" value="<?= date('H:i',$newsDetail['time_post_news']) ?>" type="time">
                                    </div>
                                </div>
                                <div class="khoi_butt top-32 flex center-center">
                                    <button type="button" class="butt_huy font-medium size-16 close c-pointer right-24">Hủy</button>
                                    <button type="submit" class="butt_luu btn_appointment font-medium size-16 close c-pointer">Lưu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end popup len lich -->
            </form>
        </div>
    </div>


    <!-- popup hoan tat thong tin -->
    <div id="popup_thongtin" class="popup chuden size-16 hidden">
        <div class="table overflow-hidden">
            <div class="hoantatthongtin_noidung">
                <div class="back_butt flex absolute center-height c-pointer close">
                    <img src="<? echo base_url(); ?>assets/images/back-arrow.png" alt="" class="wh-24 right-8">
                    <p class="size-14 font-medium chuden">Quay lại</p>
                </div>
                <div class="chuxanh size-24 top-16 bot-16 font-medium text-center">Hoàn tất thông tin</div>
                <div class="khoithongtin">
                    <div class="khunginput top-16">
                        <input type="text" placeholder="Email *">
                    </div>
                    <div class="khunginput top-16">
                        <input type="text" placeholder="Mật khẩu *">
                    </div>
                    <div class="khunginput top-16">
                        <input type="text" placeholder="Nhập lại mật khẩu *">
                    </div>
                    <div class="khunginput top-16">
                        <input type="text" placeholder="Số điện thoại *">
                    </div>
                    <div class="khunginput top-16">
                        <input type="text" placeholder="Họ và tên *">
                    </div>
                    <div class="top-16">
                        <select name="" id="thongtin_loaitk" class="select_option js-states form-control">
                            <option value="0">Loại tài khoản *</option>
                            <option value="1">Người môi giới</option>
                            <option value="2">Người cho thuê, bán</option>
                            <option value="3">Doanh nghiệp</option>
                        </select>
                    </div>
                    <div class="thongtin_linhvuc top-16 hidden">
                        <select name="" id="" class="select_option js-states form-control">
                            <option value="">Lĩnh vực *</option>
                            <option value="">Người môi giới</option>
                            <option value="">Người cho thuê, bán</option>
                            <option value="">Doanh nghiệp</option>
                        </select>
                    </div>
                    <div class="thongtin_msthue khunginput top-16 hidden">
                        <input type="text" placeholder="Mã số thuế">
                    </div>
                    <button class="butt_hoantat c-pointer font-medium size-16">Hoàn tất</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end popup hoan tat thong tin -->

    <!-- popup otp -->
    <div id="popup_otp" class="popup chuden size-16 hidden">
        <div class="table overflow-hidden">
            <div class="otp_noidung">
                <div class="back_butt flex absolute center-height c-pointer close">
                    <img src="<? echo base_url(); ?>assets/images/back-arrow.png" alt="" class="wh-24 right-8">
                    <p class="size-14 font-medium chuden">Quay lại</p>
                </div>
                <div class="chuxanh size-24 top-16 bot-16 font-medium text-center">Nhập mã OTP</div>
                <div class="top-16 font-medium chuden">Mã xác thực gửi về Email "<span
                        class="email">ABC@gmail.com</span>"</div>
                <div class="nhap_otp flex space top-24">
                    <input type="text" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
                    <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1"
                        maxlength="1">
                    <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2"
                        maxlength="1">
                    <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3"
                        maxlength="1">
                    <input type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4"
                        maxlength="1">
                    <input type="text" id="digit-6" name="digit-6" data-previous="digit-5" maxlength="1">
                </div>
                <div class="top-19 flex-end center-height">
                    <p class="chuden right-8 c-default">Gửi lại mã xác thực</p>
                    <img src="<? echo base_url(); ?>assets/images/reload.png" alt="" class="wh-30 c-pointer">
                </div>
                <button class="butt_xacthuc_otp c-pointer font-medium size-16">Xác thực</button>
                <div class="top-24 flex center-width chuvang c-pointer">Nhập lại Email</div>
            </div>
        </div>
    </div>
    <!-- end popup otp -->

    <!-- popup thanh cong -->
    <div id="popup_thanhcong" class="popup chuden size-16 hidden">
        <div class="table overflow-hidden">
            <div class="thanhcong_noidung">
                <p class="text-center size-14 font-medium">Đăng tin thành công</p>
                <p class="top-8 size-12 text-center">Bạn còn <span>2</span> lượt đăng tin miễn phí trong này</p>
                <div class="img_successful">
                    <img src="<? echo base_url(); ?>assets/images/successful.png" alt="">
                </div>
                <div class="top-16 font-medium size-14 text-center">Chúc mừng bạn đã trợ thành thành viên của
                    Batdongsan3S</div>
                <button class="butt_thanhcong top-24 size-16 font-medium c-pointer">Quản lý tin đăng</button>
            </div>
        </div>
    </div>
    <!-- end popup thanh cong -->

    <!-- popup error -->
    <div id="popup_error" class="popup chuden size-16 hidden">
        <div class="table overflow-hidden">
            <div class="error_noidung">
                <div class="img_error flex center-width">
                    <img src="<? echo base_url(); ?>assets/images/error_icon.png" alt="">
                </div>
                <div class="error_thongbao text-center top-24 size-14 font-medium">Bạn cần đăng nhập để thực
                    hiện thông báo này</div>
                <div class="error_butt top-24 flex space">
                    <button class="error_huy size-16 font-medium c-pointer close">Hủy</button>
                    <button class="error_dangnhap size-16 font-medium c-pointer">Đăng nhập</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end popup error -->


    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_tan.js"></script>
<script>
var base_url 	= '<?php echo base_url(); ?>'; 
$(".select_option").select2({
    width: "100%",
});

$('#thongtin_loaitk').change(function() {
    var value = $(this).val();
    if (value != 0) {
        $('.thongtin_linhvuc').removeClass('hidden');
        $('.thongtin_msthue').removeClass('hidden');
    } else {
        $('.thongtin_linhvuc').addClass('hidden');
        $('.thongtin_msthue').addClass('hidden');
    }
});
var stt_news = 2;
var date_post_news = 0;
var time_post_news = 0;
$('.btn_post_now').click(function() {
    stt_news = 2;
    date_post_news = 0;
    time_post_news = 0;
})
$('.btn_appointment').click(function() {
    stt_news = 3;
    date_post_news = $(".date_post_news").val();
    time_post_news = $(".time_post_news").val();
})
$("#post_news_project").validate({
    errorPlacement: function (error, element) {
        error.appendTo(element.parents(".box_input_infor"));
        error.wrap("<span class='errors'>");
        element.parents('.box_input_infor').addClass('validate_input');
    },
    rules: {
        project_name: "required",
        introduce: "required",
        city: "required",
        bds_type: "required",
        districts: "required",
        cdt_come_name: "required",
        price_min: "required",
        price_max: "required",
        title_mb_project: "required",
        part_name: "required",
    },
    messages: {
        project_name: "Vui lòng nhập tên dự án",
        introduce: "Vui lòng nhập nội dung giới thiệu",
        city: "Vui lòng chọn thành phố",
        bds_type: "Vui lòng chọn loại hình bất động sản",
        districts: "Vui lòng chọn quận huyện",
        cdt_come_name: "Vui lòng nhập tên công ty",
        price_min: "Vui lòng nhập lại khoảng giá",
        price_max: "Vui lòng nhập lại khoảng giá",
        title_mb_project: "Vui lòng nhập tiêu đề dự án",
        part_name: "Vui lòng nhập đầu mục dự án",
    },
    submitHandler: function() {
        hienpopup('popup_thongtin');
        $(".butt_hoantat").click(function(){
            var project_name			= $('.project_name').val();
            var introduce 				= $('.introduce').val();
            var bds_type 				= $('.bds_type').find(':selected').val();
            var select_city 		    = $('#select_city').find(':selected').val();
            var districts 			    = $('.districts').find(':selected').val();
            var wards 				    = $('.wards').find(':selected').val();
            var street				    = $('.street').find(':selected').val();
            var addr_detail 			= $('.addr_detail').val();
            var post_time 			    = $('.post_time').val();
            var banner_img 				= $('.banner_img')[0].files[0];
            var cdt_come_name 			= $('.cdt_come_name').val();
            var cdt_founding		    = $('.cdt_founding').val();
            var cdt_phone 			    = $('.cdt_phone').val();
            var cdt_addr_com 			= $('.cdt_addr_com').val();
            var cdt_project_num		    = $('.cdt_project_num').val();
            var time_st 			    = $('.time_st').val();
            var time_done 				= $('.time_done').val();
            var area_type 				= $('.area_type').val();
            var day_of_delivery 		= $('.day_of_delivery').val();
            var home_num 		        = $('.home_num').val();
            var nhapmin 			    = $('.nhapmin').val();
            var nhapmax 			    = $('.nhapmax').val();
            var product_num 			= $('.product_num').val();
            var total_investment 		= $('.total_investment').val();
            var quy_mo 				    = $('.quy_mo').val();
            var progress 			    = $('.progress').val();
            var detail_area 		    = $('.detail_area').val();
            var status 				    = $('.status').val();
            var title_img_project 	    = $('.title_img_project').val();
            var title_img_vtda 	        = $('.title_img_vtda').val();
            var title_img_mbda 	        = $('.title_img_mbda').val();
            var title_img_utilities 	= $('.title_img_utilities').val();
            var count_img_mb = [];
            var count_gtda = [];
            var title_img_gtda = [];
            var s2= 0;
            var sz= 0;
            $(".title_img_gtda").each(function(){
                if($(this).val() != "")
                {
                    title_img_gtda.push($(this).val())
                }
            })

            title_img_gtda = JSON.stringify(title_img_gtda);

            console.log(title_img_gtda);

            //----------
            if($(".click_img_mota").val() != "")
            {
                var desc_img_project        = $(".click_img_mota")[0].files[0];
            }
            else
            {
                var desc_project        = $(".mota_text").val();
            }
            
            //--------------
            if($(".vtda_click_anh").val() != "")
            {
                var project_img_addr        = $(".vtda_click_anh")[0].files[0];
            }
            else
            {
                var project_addr        = $(".vtda_text").val();
            }
            
            //--------
            var mbda_tieude_click_anh   = $(".mbda_tieude_click_anh")[0].files[0];

            var title_mb_project = [];
            var part_name = [];
            var gtda_text = [];
            $(".title_mb_project").each(function(){
                title_mb_project.push($(this).val())
            })
            title_mb_project = JSON.stringify(title_mb_project);
            var img_mb_project          = $('.mbda_tieude_click_anh')[0].files[0];
            //--------------
            if($(".mbda_click_anh").val() != "")
            {
                var desc_mb_img_project = $(".mbda_click_anh")[0].files[0];
            }
            else
            {
                var desc_mb_project         = $(".mbda_text").val();
            }
            //-----------tida_click_anh
            if($(".tida_click_anh").val() != "")
            {
                var utilities_img_project   = $(".tida_click_anh")[0].files[0];
            }
            else
            {
                var utilities_project       = $(".tida_text").val();
            }
            //------------tiện ích dự án
            var list_utilities              = []
            $('input:checkbox[name=utilities]:checked').each(function() {
				list_utilities.push($(this).val());
			});
            //------------
            var arr_desc_gtda = [];
            $(".gioithieuduan").each(function(){
                if($(this).find('input[type="file"]').val() != "")
                {
                    arr_desc_gtda.push(1);
                }
                else
                {
                    arr_desc_gtda.push($(this).find('.gtda_text').val());
                }
            })
            arr_desc_gtda = JSON.stringify(arr_desc_gtda);
            //------------đầu mục dự án
            $(".part_name").each(function(){
                part_name.push($(this).val())
            })
            $(".gtda_text").each(function(){
                gtda_text.push($(this).val())
            })
            gtda_text = JSON.stringify(gtda_text);

            var data = new FormData();
            data.append('id_news','<?= $newsDetail['id_news'] ?>');
            data.append('time_create','<?= $newsDetail['time_create'] ?>');
            data.append('banner_img_old','<?= $newsDetail['banner_img'] ?>');
            data.append('desc_img_project_old','<?= $newsDetail['desc_project'] ?>');
            data.append('project_addr_old','<?= $newsDetail['project_addr'] ?>');
            data.append('desc_mb_project_old','<?= $newsDetail['desc_mb_project'] ?>');
            data.append('img_mb_project_old','<?= $newsDetail['img_mb_project'] ?>');
            data.append('utilities_img_project_old','<?= $newsDetail['desc_utilities_project'] ?>');
            data.append('introduct_project','<?= $newsDetail['introduct_project'] ?>');
            data.append('project_name', project_name);
            data.append('introduce', introduce);
            data.append('bds_type', bds_type);
            data.append('select_city', select_city);
            data.append('districts', districts);
            data.append('wards', wards);
            data.append('street', street);
            data.append('addr_detail', addr_detail);
            data.append('post_time', post_time);
            data.append('banner_img', banner_img);
            data.append('cdt_come_name', cdt_come_name);
            data.append('cdt_founding', cdt_founding);
            data.append('cdt_phone', cdt_phone);
            data.append('cdt_addr_com', cdt_addr_com);
            data.append('cdt_project_num', cdt_project_num);
            data.append('time_st', time_st);
            data.append('time_done', time_done);
            data.append('area_type', area_type);
            data.append('day_of_delivery', day_of_delivery);
            data.append('home_num', home_num);
            data.append('nhapmin', nhapmin);
            data.append('nhapmax', nhapmax);
            data.append('product_num', product_num);
            data.append('total_investment', total_investment);
            data.append('quy_mo', quy_mo);
            data.append('progress', progress);
            data.append('detail_area', detail_area);
            data.append('status', status);
            data.append('desc_img_project', desc_img_project);
            data.append('desc_project', desc_project);
            data.append('project_img_addr', project_img_addr);
            data.append('project_addr', project_addr);
            data.append('utilities_project', utilities_project);
            data.append('utilities_img_project', utilities_img_project);
            data.append('title_img_project', title_img_project);
            data.append('title_img_vtda', title_img_vtda);
            data.append('title_img_mbda', title_img_mbda);
            data.append('title_img_utilities', title_img_utilities);
            data.append('title_img_gtda', title_img_gtda);
            data.append('stt_news', stt_news);
            data.append('date_post_news', date_post_news);
            data.append('time_post_news', time_post_news);
            $(".mbda_tieude_click_anh").each(function(){
                
                if($(this)[0].files[0])
                {
                    count_img_mb.push(s2);
                    data.append('arr_mb_img_project[]', $(this)[0].files[0]);
                }
                s2++;
            });
            data.append('count_img_mb', count_img_mb);
            $(".gtda_click_anh").each(function(){
                if($(this)[0].files[0])
                {
                    count_gtda.push(sz);
                    data.append('arr_img_gtda[]', $(this)[0].files[0]);
                }
                sz++;
            })
            data.append('count_gtda',count_gtda);
            data.append('arr_desc_gtda',arr_desc_gtda);
            data.append('gtda_text',gtda_text);
            data.append('desc_mb_img_project',desc_mb_img_project);
            data.append('title_mb_project',title_mb_project);
            data.append('desc_mb_project', desc_mb_project)
            data.append('list_utilities', list_utilities);
            data.append('part_name', part_name);

            $.ajax({
			 	url: base_url+'admin/ManageNews/postNewsProjectUpdate',
			 	type: 'post',
			 	cache: false,
			 	contentType: false,
			 	processData: false,
			 	dataType: 'json',
			 	data:data,
			 	enctype: 'multipart/form-data',
			 	success: function(response) {
                    if (response.status == 1) {
                        alert(response.msg);
                        window.location.href = 'quan-ly-tin-dang-du-an.html';
                    }
			 	},
			 	error: function(xhr) {
			 		alert('Error');
			 	}
			});
        })
    }
});

function show_gtda(e) {
    $(e).parents('.gtda_khoimota').find('.gtda_khoi_tieude').removeClass('hidden');
};

function hide_gtda(e) {
    $(e).parents('.gtda_khoimota').find('.gtda_khoi_tieude').addClass('hidden');
};
function gtda_img_left (e) {
    degrees2 -= 90;

    $(e).parents('.gtda_khoianh').find('img').css({
        'transform': 'rotate(' + degrees2 + 'deg)',
        '-ms-transform': 'rotate(' + degrees2 + 'deg)',
        '-moz-transform': 'rotate(' + degrees2 + 'deg)',
        '-webkit-transform': 'rotate(' + degrees2 + 'deg)',
        '-o-transform': 'rotate(' + degrees2 + 'deg)'
    });
};
function gtda_img_right (e) {
    degrees2 += 90;

    $(e).parents('.gtda_khoianh').find('img').css({
        'transform': 'rotate(' + degrees2 + 'deg)',
        '-ms-transform': 'rotate(' + degrees2 + 'deg)',
        '-moz-transform': 'rotate(' + degrees2 + 'deg)',
        '-webkit-transform': 'rotate(' + degrees2 + 'deg)',
        '-o-transform': 'rotate(' + degrees2 + 'deg)'
    });
};
function gtda_remove (e) {
    $(e).parents('.gioithieuduan').find('.gtda_desimg').val('');
    $(e).parents('.gtda_khoianh').find('.gtda_post_anh').attr('src', ''+base_url+'assets/images/anh_rong.png');
};
function gtda_destext(a){
    $(a).parents('.gioithieuduan').find('.gtda_desimg').val('');
    $(a).addClass('active_mota');
    $(a).parents('.gioithieuduan').find('.gtda_desimg').removeClass('active_mota');
    $(a).parents('.gioithieuduan').find('.gtda_text').removeClass('hidden');
    $(a).parents('.gioithieuduan').find('.gtda_khoianh').addClass('hidden');
};
//-------------------
function address(value1,value2,value3,value4,value5)
{
    var city_id = $(value1).val();
    if (city_id > 0) {
        $.ajax({
            url: base_url+'PostNews/'+value3,
            type: 'POST',
            dataType: 'json',
            data: {city: city_id},
            success: function (response) {
                $html 	   = '<option value="">'+value4+'</option>';
                $.each(response, function(index, val) {
                    if(value5 == 1)
                    {
                        $html += '<option value="'+val.cit_id+'">'+val.cit_name+'</option>'
                    }
                    else if(value5 == 2)
                    {
                        $html += '<option value="'+val.ward_id+'">'+val.ward_name+'</option>'
                    }
                    else if(value5 == 3)
                    {
                        $html += '<option value="'+val.street_id+'">'+val.street_name+'</option>'
                    }
                });
                $("."+value2).html($html);
            },
        });
    }  
}
$(document).ready(function() {
  var buttonAdd = $(".khoi_add_mbda");
  var button_gtda = $('.click_gioithieuduan');

  buttonAdd.click(function() {
  var   _html  = ' <div class="khoi_tieude_mbda">'
        _html += '  <div class="box_input_infor">'
        _html += '            <p class="font-medium chuden height-20 top-29">Tiêu đề mặt bằng dự án <span class="chudo">*</span></p>'
        _html += '            <div class="khunginput top-8 input_infor_tag">'
        _html += '               <input class="title_mb_project" type="text" name="title_mb_project" placeholder="Nhập tiêu đề mặt bằng dự án">'
        _html += '            </div>'
        _html += '        </div>'
        _html += '       <input onchange="mbda_tieude_click_anh(this)" type="file" name="mbda_tieude_click_anh[]" class="hidden mbda_tieude_click_anh">'
        _html += '       <div class="mbda_khoi_anh top-24 relative">'
        _html += '         <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="mbda_post_anh">'
        _html += '        <div onclick="mbda_add_anh(this)" class="mbda_add_anh flex center-center absolute">'
        _html += '            <img src="<? echo base_url(); ?>assets/images/tan_camera.svg" alt="" class="right-8 wh-24">'
        _html += '            <p class="chuxanh">Thêm ảnh</p>'
        _html += '        </div>'
        _html += '     </div>'
        _html += ' </div>'
    $('.mbda_noidung').append(_html)
  });

  button_gtda.click(function() {
    var __html =    '<div class="gioithieuduan top-24">'
    __html +=               '<div class="box_input_infor">'
    __html +=                    '<p class="font-medium chuden">Tên đầu mục <span class="chudo">*</span></p>'
    __html +=                     '<div class="khunginput top-8 input_infor_tag">'
    __html +=                       '<input type="text" class="part_name" name="part_name" placeholder="Nhập tên đầu mục">'
    __html +=                     '</div>'
    __html +=                  '</div>'
    __html +=                 '<div class="gtda_khoimota relative top-24">'
    __html +=                     '<div class="gtda_button_mota absolute">'
    __html +=                         '<div class="type_mota absolute">'
    __html +=                              '<div onclick="gtda_destext(this)" class="gtda_destext c-pointer active_mota">'
    __html +=                                  '<svg width="24" height="24" viewBox="0 0 24 24" fill="none"'
    __html +=                                      'xmlns="http://www.w3.org/2000/svg">'
    __html +=                                    '<path d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />'
    __html +=                                        '<path d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />'
    __html +=                                    '</svg>'
    __html +=                                '</div>'
    __html +=                                '<div onclick="gtda_desimg(this)" class="gtda_desimg c-pointer">'
    __html +=                                    '<svg width="24" height="24" viewBox="0 0 24 24" fill="none"'
    __html +=                                        'xmlns="http://www.w3.org/2000/svg">'
    __html +=                                        '<path d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />'
    __html +=                                        '<path d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />'
    __html +=                                    '</svg>'
    __html +=                                '</div>'
    __html +=                            '</div>'
    __html +=                        '</div>'
    __html +=                        '<input onchange="gtda_click_anh(this)" type="file" class="hidden gtda_click_anh">'
    __html +=                        '<div class="gtda_text_or_img">'
    __html +=                            '<textarea name="" id="" cols="30" rows="10" class="gtda_text"></textarea>'
    __html +=                            '<div class="gtda_khoianh relative hidden">'
    __html +=                                '<img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="gtda_post_anh">'
    __html +=                                '<div class="gtda_khoibutton flex center-center absolute">'
    __html +=                                    '<button type="button" onclick="show_gtda(this)" class="gtda_tieude_anh c-pointer">Thêm tiêu đề ảnh</button>'
    __html +=                                    '<img onclick="gtda_img_left(this)" src="<? echo base_url(); ?>assets/images/rotate-left.png" alt=""'
    __html +=                                        'class="wh-24 gtda_img_left right-10 c-pointer">'
    __html +=                                    '<img onclick="gtda_img_right(this)" src="<? echo base_url(); ?>assets/images/rotate-right.png" alt=""'
    __html +=                                        'class="wh-24 gtda_img_right right-10 c-pointer">'
    __html +=                                    '<img onclick="gtda_remove(this)" src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="wh-24 gtda_remove c-pointer">'
    __html +=                                '</div>'
    __html +=                            '</div>'
    __html +=                        '</div>'
    __html +=                        '<div class="gtda_khoi_tieude relative top-8 hidden">'
    __html +=                            '<input type="text" class="title_img_gtda" placeholder="Nhập tiêu đề ảnh">'
    __html +=                           '<img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" onclick="hide_gtda(this)"  class="absolute gtda_tieude_remove wh-20 c-pointer">'
    __html +=                        '</div>'
    __html +=                   '</div>'
    __html +=                '</div>'
    $('.khoi_gioithieuduan').append(__html)
  });
});
</script>

</html>

