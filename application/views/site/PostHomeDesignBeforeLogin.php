<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Tin đăng nhà đẹp</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_tan.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
</head>

<body>
    <? require_once APPPATH.'views/site/includes/da_header.php' ?>
    <div class="backgroung_chinh">
        <div class="link_trang">
            <form action="" enctype="multipart/form-data" method="post" onsubmit="return false" id="postNews_Home">
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

            <!-- tutorial -->
            <div class="tutorial top-24">
                <div class="khoitren flex space center-height">
                    <div class="tutorial_trai flex">
                        <img src="<? echo base_url(); ?>assets/images/tutorial_icon.png" alt="" class="wh-40 right-16">
                        <div class="tutorial_tieude">
                            <div class="tieude_tren textdo font-medium">Hướng dẫn tạo bài viết Nhà đẹp</div>
                            <div class="tieude_duoi size-12">Hãy đọc kỹ trước khi đăng bài nhé!</div>
                        </div>
                    </div>
                    <div class="tutorial_phai arrow_rotate_reset wh-24 c-pointer">
                        <img src="<? echo base_url(); ?>assets/images/arrow_updown.png" alt="">
                    </div>
                </div>
                <div style="display: none;" class="khoiduoi khoiduoi_tutorial top-24">
                    <p class="tieude textdo"><span class="font-medium">"Nhà đẹp"</span> là nơi bạn kể câu chuyện và quá trình lên ý tưởng thiết kế, thi công hoàn thiện nội thất và trang trí căn nhà của mình.</p>
                    <ul>
                        <li class="top-16">Sau đôi lời tự giới thiệu ngắn gọn, bạn hãy kể câu chuyện về bôi nhà của bạn nhé!</li>
                        <li class="top-16">Để dễ dàng lan tỏa hơn, hãy thêm ít nhất 5 ảnh</li>
                        <li class="top-16">Thật tuyệt nếu bạn ghi đầy đủ thông tin các sản phẩm ở phần mô tả bên dưới</li>
                        <li class="top-16">Bạn càng cập nhật nhiều tông tin, bài viết càng được hiện thị nhiều hơn trong kết quả tìm kiếm và số lượt xem sẽ dễ dàng tăng lên</li>
                    </ul>
                </div>
            </div>
            <!-- end tutorial -->

            <!-- thong tin bai dang -->
            <div class="thongtinbaidang top-24">
                <p class="tieude chuxanh font-medium">Thông tin bài đăng</p>
                <div class="ttbd_noidung flex space wrap top-8 center-height">
                    <div class="khoicon top-21">
                        <p class="title chuden font-medium height-20">Loại công trình <span class="chudo">*</span></p>
                        <div class="top-8">
                            <select name="" id="" class="select_option js-states form-control">
                                <option value="0">Chọn loại công trình</option>
                                <option value="1">Biệt thự</option>
                                <option value="2">Chung cư</option>
                            </select>
                        </div>
                    </div>
                    <div class="khoicon flex space top-21">
                        <div class="khoibe relative">
                            <p class="title chuden font-medium height-20">Ngân sách (VNĐ) <span class="chudo">*</span></p>
                            <div class="khunginput khoi_gia_min top-8">
                                <input type="text" class="giamin" placeholder="Nhập giá cố định">
                            </div>
                            <p class="ngansach_gia absolute size-12">
                                <span class="ngansach_tien">0</span> <span class="ngansach_donvi">triệu VNĐ</span>
                                <span class="den hidden">-</span>
                                <span class="ngansach_max hidden">0</span> <span class="dv_max hidden">triệu VNĐ</span>
                            </p>
                        </div>
                        <div class="khoibe">
                            <p class="title chutrang height-20 dontlook">Don't Look</p>
                            <button class="khoanggia font-medium size-16 c-pointer top-8">Khoảng giá</button>
                            <div class="khunginput khoi_giamax top-8 relative hidden">
                                <input type="text" class="giamax" placeholder="Giá max">
                                <img src="<? echo base_url(); ?>assets/images/delete.png" alt="" class="del_icon absolute wh-18">
                            </div>
                        </div>
                    </div>
                    <div class="khoicon top-21">
                        <p class="title chuden font-medium height-20">Phong cách <span class="chudo">*</span></p>
                        <div class="top-8">
                            <select name="" id="" class="select_option js-states form-control">
                                <option value="0">Chọn phong cách</option>
                                <option value="1">Đương đại</option>
                                <option value="2">Hiện đại</option>
                                <option value="3">Tối giản</option>
                                <option value="4">Truyền thống</option>
                                <option value="5">Cổ điển</option>
                                <option value="6">Tân cổ điển</option>
                                <option value="7">Scanvindinavian</option>
                                <option value="8">Vintage</option>
                                <option value="9">Retro</option>
                                <option value="10">Bohemia</option>
                                <option value="11">Indochine</option>
                                <option value="12">Khác</option>
                            </select>
                        </div>
                    </div>
                    <div class="khoicon top-21">
                        <p class="title chuden font-medium height-20">Số phòng ngủ</p>
                        <div class="khoi_phongngu top-8 flex">
                            <label for='1th_bedroom' class="cursor_p radio_bedroom">
                                <div>1</div>
                                <input value="1" id="1th_bedroom" class="hidden" name="bedroom" type="radio">
                            </label>
                            <label for='2th_bedroom' class="cursor_p radio_bedroom">
                                <div>2</div>
                                <input value="2" id="2th_bedroom" class="hidden" name="bedroom" type="radio">
                            </label>
                            <label for='3th_bedroom' class="cursor_p radio_bedroom">
                                <div>3</div>
                                <input value="3" id="3th_bedroom" class="hidden" name="bedroom" type="radio">
                            </label>
                            <label for='4th_bedroom' class="cursor_p radio_bedroom">
                                <div>4</div>
                                <input value="4+" id="4th_bedroom" class="hidden" name="bedroom" type="radio">
                            </label>
                        </div>
                    </div>
                    <div class="khoicon top-21 flex center-height">
                        <p class="title chuden font-medium height-20 right-16">Thực hiện bởi <span class="chudo">*</span></p>
                        <div class="flex center-center right-44">
                            <input type="radio" name="thuchien" class="right-8">
                            <p class="title chuden font-medium height-20">Tự làm</p>
                        </div>
                        <div class="flex center-center">
                            <input type="radio" name="thuchien" class="right-8">
                            <p class="title chuden font-medium height-20">Chuyên gia</p>
                        </div>
                    </div>
                    <div class="khoicon top-21">
                        <p class="title chuden font-medium height-20">Thời gian thi công</p>
                        <div class="top-8">
                            <select name="" id="" class="select_option js-states form-control">
                                <option value="0">Chọn thời gian thi công</option>
                                <option value="1">Dưới 1 tháng</option>
                                <option value="2">1 - 3 tháng</option>
                                <option value="3">3 - 6 năm</option>
                                <option value="3">9 - 1 năm</option>
                                <option value="4">Trên 1 năm</option>
                            </select>
                        </div>
                    </div>
                    <div class="khoicon top-21">
                        <p class="title chuden font-medium height-20">Diện tích <span class="chudo">*</span></p>
                        <div class="top-8">
                            <select name="" id="" class="select_option js-states form-control">
                                <option value="0">Chọn khoảng diện tích</option>
                                <option value="1">Dưới 50 m2</option>
                                <option value="2">50 m2 - 100 m2</option>
                                <option value="3">100 m2 - 150 m2</option>
                                <option value="4">150 m2 - 300 m2</option>
                                <option value="2">300 m2 trở lên</option>
                            </select>
                        </div>
                    </div>
                    <div class="khoicon top-21">
                        <p class="title chuden font-medium height-20">Dự án</p>
                        <div class="khunginput top-8">
                            <input type="text" placeholder="Nhập tên và chọn dự án">
                        </div>
                    </div>
                    <div class="khoicon mausac top-21 relative">
                        <p class="title chuden font-medium height-20">Màu sắc <span class="chudo">*</span></p>
                        <div class="chonmau flex space top-8">
                        <label for="den" class="cursor_p position_r btn_color">
                                <div class="den"></div>
                                <input type="checkbox" class="den" id="den">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>

                            <label for="trang" class="cursor_p position_r btn_color">
                                <div class="trang"></div>
                                <input type="checkbox" class="trang" id="trang">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>

                            <label for="do" class="cursor_p position_r btn_color ">
                                <div class="do"></div>
                                <input type="checkbox" class="do" id="do">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>

                            <label for="cam" class="cursor_p position_r btn_color">
                                <div class="cam"></div>
                                <input type="checkbox" class="cam" id="cam">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>

                            <label for="vang" class="cursor_p position_r btn_color">
                                <div class="vang"></div>
                                <input type="checkbox" class="vang" id="vang">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>

                            <label for="hong" class="cursor_p position_r btn_color">
                                <div class="hong"></div>
                                <input type="checkbox" class="hong" id="hong">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>
                            
                            <label for="xanhluc" class="cursor_p position_r btn_color">
                                <div class="xanhluc"></div>
                                <input type="checkbox" class="xanhluc" id="xanhluc">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>
                            
                            <label for="xamxanh" class="cursor_p position_r btn_color">
                                <div class="xamxanh"></div>
                                <input type="checkbox" class="xamxanh" id="xamxanh">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>

                            <label for="xanhmint" class="cursor_p position_r btn_color">
                                <div class="xanhmint"></div>
                                <input type="checkbox" class="xanhmint" id="xanhmint">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>
                            
                            <label for="xanhduong" class="cursor_p position_r btn_color">
                                <div class="xanhduong"></div>
                                <input type="checkbox" class="xanhduong" id="xanhduong">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>
                            
                            <label for="tim" class="cursor_p position_r btn_color">
                                <div class="tim"></div>
                                <input type="checkbox" class="tim" id="tim">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>
                            
                            <label for="xanhden" class="cursor_p position_r btn_color">
                                <div class="xanhden"></div>
                                <input type="checkbox" class="xanhden" id="xanhden">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>
                            
                            <label for="xam" class="cursor_p position_r btn_color">
                                <div class="xam"></div>
                                <input type="checkbox" class="xam" id="xam">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>
                            
                            <label for="be" class="cursor_p position_r btn_color">
                                <div class="be"></div>
                                <input type="checkbox" class="be" id="be">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>
                           
                            <label for="nau" class="cursor_p position_r btn_color">
                                <div class="nau"></div>
                                <input type="checkbox" class="nau" id="nau">
                                <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                            </label>
                            
                            <img src="<? echo base_url(); ?>assets/images/no-color.png" alt="" class="wh-20 c-pointer">
                        </div>
                        <i class="luu_y absolute">Chọn tối đa 3 màu</i>
                    </div>
                    <div class="khoicon top-21 flex space">
                        <div class="khoibe">
                            <p class="title chuden font-medium height-20">Địa chỉ</p>
                            <div class="top-8">
                                <select name="" id="" class="select_option js-states form-control">
                                    <option value="0">Tỉnh thành</option>
                                </select>
                            </div>
                        </div>
                        <div class="khoibe">
                            <p class="title chutrang height-20 dontlook">Don't look</p>
                            <div class="ttbd_khoi2 top-8">
                                <select name="" id="" class="select_option js-states form-control">
                                    <option value="0">Quận huyện</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="loai_anh flex center-height">
                    <p class="title chuden font-medium height-20 right-16">Loại ảnh <span class="chudo">*</span></p>
                    <div class="loai_anh_input flex center-height right-44">
                        <input type="radio" name="loai_anh" class="right-8 c-pointer">
                        <p class="title chuden font-medium height-20">Ảnh thật</p>
                    </div>
                    <div class="loai_anh_input flex center-height">
                        <input type="radio" name="loai_anh" class="right-8 c-pointer" checked>
                        <p class="title chuden font-medium height-20">Ảnh 3D</p>
                    </div>
                </div>
                <div class="ttbd_tieude khunginput">
                    <input type="text" placeholder="Nhập tiêu đề bài viết *">
                </div>
                <div class="ttbd_themanh relative">
                    <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="ttbd_post_anh">
                    <input type="file" class="hidden ttbd_click_anh">
                    <div class="ttbd_butt_anh flex center-center absolute c-pointer">
                        <img src="<? echo base_url(); ?>assets/images/tan_camera.png" alt="" class="right-8 wh-24">
                        <p class="chuxanh font-medium">Thêm ảnh bìa</p>
                    </div>
                </div>
                <div class="ttbd_mota relative">
                    <div class="ttbd_type_mota absolute">
                        <div class="ttbd_des_text c-pointer active_mota">
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
                        <div class="ttbd_des_img c-pointer">
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
                    <input type="file" class="hidden dtnd_click_anh">
                    <div class="tdnd_des_text_or_img">
                        <textarea name="" id="" cols="30" rows="10" class="tdnd_des_text"></textarea>
                        <div class="relative hidden tdnd_des_img">
                            <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="tdnd_post_anh">
                            <div class="tdnd_khoi_button flex center-center absolute">
                                <button class="tdnd_tieude_anh c-pointer">Thêm tiêu đề ảnh</button>
                                <img src="<? echo base_url(); ?>assets/images/rotate-left.png" alt="" class="wh-24 tdnd_img_left right-10 c-pointer">
                                <img src="<? echo base_url(); ?>assets/images/rotate-right.png" alt="" class="wh-24 tdnd_img_right right-10 c-pointer">
                                <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="wh-24 tdnd_remove c-pointer">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tdnd_mieuta_anh relative hidden">
                    <input type="text" placeholder="Nhập tiêu đề ảnh">
                    <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="wh-20 absolute c-pointer tdnd_tieude_remove">
                </div>

                <div class="chontag top-24">
                    <select name="" id="" class="select_option js-states form-control">
                        <option value="0">Chọn tag</option>
                    </select>
                </div>
            </div>
            <!-- end thong tin bai dang -->

            <!-- butt dang tin -->
            <div class="tdnd_khoibutt">
                <button type="submit" class="tdnd_butt_dangtin size-16 font-medium c-pointer">Đăng tin</button>
            </div>
            <!-- end butt dang tin -->

            <!-- doan text duoi -->
            <div class="doantext_duoi top-32">
                <p class="size-14">Bạn đang truy cập trang đăng tin BĐS miễn phí <a href="#" class="ko-gachchan chuxanh">Batdongsan3S</a>. Cùng khám phá những thông tin hữu ích dành cho môi giới, hoặc người đang có nhu cầu đăng tin bán nhà đất.</p>
                <p class="top-16 size-18 chuden font-medium">Các Loại hình bất động sản được đăng tin nhiều nhất hiện nay</p>
                <p class="top-16 size-14">Dạo quanh một vòng các web đăng tin BĐS miễn phí, có thể thấy rất nhiều mẫu tin đăng thuộc các loại hình bất động sản khác nhau. Tuy nhiên, theo thống kê của Homedy, hiện nay có 3 loại hình nhà đất đang được đăng tin rao nhiều nhất, bao gồm: bán nhà đất, bán căn hộ chung cư và <a href="#" class="ko-gachchan chuxanh">cho thuê nhà</a>. Điều này cho thấy nguồn cung cũng như nhu cầu của thị trường cho những sản phẩm bất động sản này là rất lớn.</p>
                <p class="top-16 size-18 chuden font-medium">Đăng tin mua bán nhà đất</p>
                <p class="top-16 size-14">Nếu bạn là một môi giới bất động sản, hãy tập trung vào loại hình tin đăng này. Đây là mảng vốn dĩ luôn được quan tâm nhiều và còn nhiều tiềm năng khai thác. Sở dĩ là do nhu cầu mua nhà đất tại Việt Nam luôn hiện hữu. Tâm lý chung của người Việt Nam từ xưa tới nay là luôn muốn sở hữu nhà đất có giấy tờ đất đai rõ ràng.</p>
                <div class="top-8 size-14">Đặc biệt là những khách hàng lớn tuổi hoặc những người có khả năng tài chính cao, nhà đất luôn là một trong những sự chọn lựa ưu tiên nhất blah blah blah.</div>
            </div>
            <!-- end doan text duoi -->
            </form>
        </div>
    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_tan.js"></script>
<script>
$(".select_option").select2({
    width: "100%",
});

$("#postNews_Home").validate({
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
            var title_img_gtda = [];


            var data = new FormData();
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

            $.ajax({
			 	url: base_url+'PostNews/addNewsProject',
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
                        window.location.href = base_url+'admin/ManageNews/ManageNewsProject';
                    }
			 	},
			 	error: function(xhr) {
			 		alert('Error');
			 	}
			});
        })
    }
});

$('.radio_bedroom').click(function(){
    $('.radio_bedroom div').each(function(){
        
    })
    $('.radio_bedroom input[type="radio"]').each(function(){
        if($(this).is(":checked"));
        {
            $(this).parents('.radio_bedroom').find('div').addClass('active');
        }
    })
})
</script>

</html>