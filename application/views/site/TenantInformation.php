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
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_t_quang.css">
    <title>Thông tin người mua thuê</title>
</head>

<body>
    <div class="position_r d_flex infor__buying_rent">
        <div class="link_sidebar_quang">
            <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
        </div>
        <div class="wapper bg_blue_10 pd_tlr_8_24 flex_1 d_flex flex_column ql_dn">
            <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
            <div class="pd_b_64 mt_16 tenant_pd">
                <div class="banner_infor pd_lr_21 infor_tenant">
                    <div class="h_376">
                        <img src="<? echo base_url(); ?>assets/images/banner_infor.png" alt="">
                    </div>
                    <div class="pd_l_24 d_flex space_b infor_people">
                        <div class="wh_200 br_50p over_hd">
                            <img src="<? echo base_url(); ?>assets/images/avatar_md.png" alt="" class="br_50p">
                        </div>
                        <div class="flex_1 ml_24 name_infor">
                            <h3 class="font_s36 line_h50 font_w500 black_md"><?= $Information['name'] ?></h3>
                            <div class="d_flex align_c mt_8">
                                <span class="font_s20 line_h28 font_w400 black_md block">123 người theo dõi</span>
                                <button class="btn br_8 btn_blue pd_4_10 h_24 ml_40">
                                    <span class="font_s14 line_h16 font_w400 cl_white">theo dõi</span>
                                </button>
                            </div>
                        </div>
                        <div class="d_flex contact_infor">
                            <button class="btn br_8 d_flex align_c flex_center cl_blue btn_bd_blue w_157_40 mr_24">
                                <div class="wh_24 mr_8">
                                    <img src="<? echo base_url(); ?>assets/images/inbox_blue.png" alt="">
                                </div>
                                <span class="font_s16 line_h19 font_w500 cl_blue">Chat ngay</span>
                            </button>

                            <button class="btn br_8 d_flex align_c flex_center cl_red btn_bd_red w_157_40">
                                <div class="wh_24 mr_8">
                                    <img src="<? echo base_url(); ?>assets/images/phone-call_red.png" alt="">
                                </div>
                                <span class="font_s16 line_h19 font_w500 cl_red"><?= substr($Information['phone'],0,4) ?> *** ***</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="personal bg_white pd_32 mt_30 br_8">
                    <?php
                    $arr = [
                        [
                            'fiel' => 'Email:',
                            'name' => $Information['email']
                        ],
                        [
                            'fiel' => 'Số điện thoại:',
                            'name' => $Information['phone']
                        ],
                        [
                            'fiel' => 'Giới tính:',
                            'name' => 'Nam'
                        ],
                        [
                            'fiel' => 'Ngày sinh:',
                            'name' => ($Information['userBirth'] != 0) ? $Information['userBirth'] : 'Chưa cập nhật'
                        ],
                        [
                            'fiel' => 'Hoạt động:',
                            'name' => $UserType[$Information['userType']]
                        ],
                        [
                            'fiel' => 'Bất động sản quan tâm:',
                            'name' => (($Information['email'] == 1) ? 'Mua bán' : 'Cho thuê')
                        ],
                        [
                            'fiel' => 'Loại bất động sản:',
                            'name' =>   $newType[$Information['newTypeInterest']]
                        ],
                        [
                            'fiel' => 'Địa chỉ:',
                            'name' => $Information['cit_name'].','.$district.','.$ward
                        ],
                        [
                            'fiel' => 'URL trang profile:',
                            'name' => $Information['profileURL']
                        ],
                        [
                            'fiel' => 'Giới thiệu:',
                            'name' => $Information['self-describe']
                        ]
                    ]
                    ?>
                    <?php foreach ($arr as $fiel) : ?>
                        <div class="d_flex align_c">
                            <span class="mn_w265 block font_s16 line_h24 font_w400 black_md"><?= $fiel['fiel'] ?></span>
                            <span class="font_s16 line_h24 font_w400 black_md"><?= $fiel['name'] ?></span>
                        </div>
                    <?php endforeach; ?>

                </div>
                <div class="d_flex contact_infor  contact_infor_2_quang">
                    <button class="btn br_8 d_flex align_c flex_center cl_blue btn_bd_blue w_157_40 mr_24">
                        <div class="wh_24 mr_8">
                            <img src="<? echo base_url(); ?>assets/images/inbox_blue.png" alt="">
                        </div>
                        <span class="font_s16 line_h19 font_w500 cl_blue">Chat ngay</span>
                    </button>

                    <button class="btn br_8 d_flex align_c flex_center cl_red btn_bd_red w_157_40">
                        <div class="wh_24 mr_8">
                            <img src="<? echo base_url(); ?>assets/images/phone-call_red.png" alt="">
                        </div>
                        <span class="font_s16 line_h19 font_w500 cl_red">0333 *** ***</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
    <script src="<? echo base_url();?>assets/js/js_t.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
    <script>
        $(".select_option").select2({
            width: "100%",
        });
    </script>
</body>

</html>