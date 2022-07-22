<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tin đăng tin lưu</title>
    <link rel="stylesheet" href="<? echo base_url()?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style_d_sdn.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/daterangepicker.css" />

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
                <div class="dt_khoi2_noidung flex dt_khoi2_noidung_fig_tinl">
                    <div class="dt_khoi2_noidung_left mr_r24px">
                        <div class="dt_khoi2_noidung_left_padding">
                            <div class="dt_khoi2_noidung_left_hd fz18_5 mr_b24px mr_l8px">Tin đăng</div>
                            <div class="them_div_ovflow_x">
                                <div class="fig_1024_tin_mb_1">
                                    <!-- Mua Bán -->
                                    <div class="dt_khoi2_noidung_left_one mr_b4px currsor_p">
                                        <a href="quan-ly-tin-dang-mua-ban.html"
                                            class="dt_khoi2_noidung_khoi_click  click_toggle1 flex align_item_c jus_sb mr_b4px bg_1024">
                                            <div class="dt_khoi2_noidung_khoi_click_text fz16_5 click_muaban_cha color_999">
                                                Mua bán (<?= $countPurchase ?>)
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
                                            <div class="dt_khoi2_noidung_khoi_click_text fz16_5 color_999">Cho thuê (<?= $countPurchase ?>)
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
                                            <div class="dt_khoi2_noidung_khoi_click_text fz16_5 click_muaban_cha color_999">
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
                                    <div class="dt_khoi2_noidung_left_one mr_b4px currsor_p">
                                        <a href="quan-ly-tin-dang-thiet-ke.html"
                                            class="dt_khoi2_noidung_khoi_click  click_toggle3 flex align_item_c jus_sb mr_b4px bg_1024">
                                            <div class="dt_khoi2_noidung_khoi_click_text fz16_5 color_999">Thiết kế đẹp(<?= $count_all_design ?>)
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
                                    <div class="dt_khoi2_noidung_left_one dt_khoi2_noidung_left_one_tinluu mr_b4px currsor_p">
                                        <div class="dt_khoi2_noidung_left_one_tinluu">
                                            <div class="dt_khoi2_noidung_khoi_click bg_click click_toggle4 flex align_item_c jus_sb mr_b4px">
                                                <a href="quan-ly-tin-dang-tin-luu.html" class="dt_khoi2_noidung_khoi_click_text fz16_5 main_color">Tin đã lưu (<?= $count_AllSave ?>)</a>
                                                <div
                                                    class="dt_khoi2_noidung_khoi_click_img dt_khoi2_noidung_left_one_tinluu_click add_stroke4 add_stroke remove_stroke">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 9L12 15L18 9" stroke="#000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="click_con4">
                                                <div data-id="0" class="dt_khoi2_noidung_khoi_click_con c_tinluu mr_l24px btn_next_page <?= (!isset($_GET['type']) || $_GET['type'] == 0) ? "bg_click" : "" ?> mr_b4px"
                                                    onclick="tinluu(this);location.href= '/quan-ly-tin-dang-tin-luu.html?type=0'">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Tất cả (<?= $count_AllSave ?>)</div>
                                                </div>
                                                <div data-id="4" class="dt_khoi2_noidung_khoi_click_con c_tinluu mr_l24px btn_next_page <?= (isset($_GET['type']) && $_GET['type'] == 4) ? "bg_click" : "" ?> mr_b4px"
                                                    onclick="tinluu(this);location.href= '/quan-ly-tin-dang-tin-luu.html?type=4'">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Tin đăng (<?= $count_NewsSave ?>)</div>
                                                </div>
                                                <div class="dt_khoi2_noidung_khoi_click_con btn_next_page <?= (isset($_GET['type']) && $_GET['type'] == 1) ? "bg_click" : "" ?>  c_tinluu mr_l24px"
                                                    onclick="tinluu(this);location.href= '/quan-ly-tin-dang-tin-luu.html?type=1'">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Dự án (<?= $count_NewsProjectSave ?>)</div>
                                                </div>
                                                <div data-id="3" class="dt_khoi2_noidung_khoi_click_con c_tinluu mr_l24px btn_next_page <?= (isset($_GET['type']) && $_GET['type'] == 3) ? "bg_click" : "" ?>"
                                                    onclick="tinluu(this);location.href= '/quan-ly-tin-dang-tin-luu.html?type=3'">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub  fz16_4">Thiết kế đẹp (<?= $count_NewsDesignSave ?>)
                                                    </div>
                                                </div>
        
                                            </div>
                                            <div class="click_con4_4">
                                                <div class="dt_khoi2_noidung_khoi_click_con c_tinluu mr_l24px btn_next_page <?= (!isset($_GET['type']) || $_GET['type'] == 0) ? "bg_click" : "" ?> bg_click mr_b4px"
                                                    onclick="tinluu(this)">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Tất cả (<?= $count_AllSave ?>)</div>
                                                </div>
                                                <div class="dt_khoi2_noidung_khoi_click_con c_tinluu mr_l24px btn_next_page <?= (isset($_GET['type']) && $_GET['type'] == 4) ? "bg_click" : "" ?> mr_b4px"
                                                    onclick="tinluu(this)">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Tin đăng (<?= $count_NewsSave ?>)</div>
                                                </div>
                                                <div class="dt_khoi2_noidung_khoi_click_con btn_next_page <?= (isset($_GET['type']) && $_GET['type'] == 1) ? "bg_click" : "" ?> c_tinluu mr_l24px"
                                                    onclick="tinluu(this)">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Dự án (<?= $count_NewsProjectSave ?>)</div>
                                                </div>
                                                <div class="dt_khoi2_noidung_khoi_click_con c_tinluu mr_l24px btn_next_page <?= (isset($_GET['type']) && $_GET['type'] == 3) ? "bg_click" : "" ?>"
                                                    onclick="tinluu(this)">
                                                    <div class="dt_khoi2_noidung_khoi_click_text_sub fz16_4">Thiết kế đẹp (<?= $count_NewsDesignSave ?>)
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dt_khoi2_noidung_right dt_khoi2_noidung_right_fig_tinl">
                        <!-- Tin đã lưu -->
                        <div class="div_right_four layout_tinluu">
                            <div class="dt_khoi2_noidung_right_padding1 mr_b24px">
                                <div class="them_div_ovflow_x">
                                    <div class="noidung_right_khoi flex noidung_right_khoi_fig_tinl">
                                        <div class="noidung_right_khoi_search_tLuu mr_r24px">
                                            <input type="text" class="input_search" value="<?= isset($_GET['key']) ? $_GET['key'] : ''; ?>" placeholder="Nhập ID, tiêu đề tin">
                                            <input type="hidden" class="search-pr" value="<?= isset($_GET['key']) ? $_GET['key'] : ''; ?>">
                                            <div class="noidung_right_khoi_icon_search abs_search">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/search.png" alt="">
                                            </div>
                                        </div>
                                        <div class="div_right_three_select_tluu mr_r24px">
                                            <select name="" id="select_city" class="select_option js-states form-control">
                                                <option disabled selected>Chọn thành phố </option>
                                                <? foreach($listcity as $opt): ?>
                                                <option <?= (isset($_GET['id_cit']) && $_GET['id_cit'] == $opt['cit_id']) ? "selected" : "" ?> value="<?= $opt['cit_id'] ?>"><?= $opt['cit_name'] ?></option>
                                                <? endforeach ?>
                                            </select>
                                        </div>
                                        <div class="div_right_three_search2_tLuu mr_r24px">
                                            <input type="text" value="<?= isset($_GET['time']) ? $_GET['time'] : ''; ?>" readonly name="dates" placeholder="Ngày đăng tin">
                                        </div>
                                        <button type="button" class="filter_date">Lọc</button>
                                    </div>
                                </div>
                            </div>
                            <div class="div_right_four_noidung div_right_four_noidung_tinl flex flex_w">
                                <?php foreach($newsSave as $rows):
                                    $m = date('m',$rows['time_create']);
                                    $d = date('d',$rows['time_create']);
                                    $y = date('Y',$rows['time_create']);
                                    $arr_img = json_decode($rows['arr_img']);    
                                ?>
                                    <div data-id="<?= $rows['id_news'] ?>" class="div_right_four_noidung_padding div_right_four_noidung_padding_tinl">
                                        <div class="div_right_four_noidung_img mr_b16px">
                                                <? if($rows['type'] == 1 || $rows['type'] == 3): ?>
                                                    <? if($rows['banner_img']!= ""):  ?>
                                                        <img src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $rows['banner_img'] ?>" alt="">
                                                    <? else: ?>
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                                    <? endif ?>
                                                <?  else: 
                                                    $arr_img = json_decode($rows['arr_img']);
                                                ?>
                                                    <? if($arr_img != '' && $arr_img[0]!= ""):  ?>
                                                        <img src="<? echo base_url(); ?>upload/<?= $y ?>/<?= $m ?>/<?= $d ?>/<?= $arr_img[0] ?>" alt="">
                                                    <? else: ?>
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/img_tk.png" alt="">
                                                    <? endif ?>
                                                    
                                                <? endif ?>
                                            <div class="div_right_four_noidung_img_view_text flex align_item_c">
                                                <div class="div_right_four_noidung_img_view">
                                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/view.png" alt="">
                                                </div>
                                                <div class="div_right_four_noidung_img_text"><?= $rows['news_view'] ?></div>
                                            </div>
                                            <div class="div_right_four_noidung_icon_luu click_huyluu currsor_p">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0 8C0 3.58172 3.58172 0 8 0H22C26.4183 0 30 3.58172 30 8V22C30 26.4183 26.4183 30 22 30H8C3.58172 30 0 26.4183 0 22V8Z"
                                                        fill="#FFA317" />
                                                    <path
                                                        d="M20.9177 23.9974C20.6487 23.9966 20.3825 23.9409 20.1344 23.8334C19.8864 23.726 19.6615 23.5689 19.4727 23.3712L15 18.7864L10.5273 23.3742C10.2401 23.6747 9.87168 23.879 9.47018 23.9605C9.06868 24.042 8.65269 23.9968 8.27644 23.8309C7.89645 23.6733 7.57139 23.4012 7.34369 23.0502C7.11599 22.6992 6.99625 22.2855 7.00009 21.8632V9.74946C7.00009 8.75504 7.3832 7.80135 8.06514 7.09819C8.74709 6.39503 9.672 6 10.6364 6L19.3636 6C19.8411 6 20.314 6.09698 20.7551 6.28541C21.1963 6.47384 21.5972 6.75002 21.9348 7.09819C22.2725 7.44636 22.5404 7.8597 22.7231 8.3146C22.9058 8.76951 22.9999 9.25707 22.9999 9.74946V21.8632C23.004 22.2851 22.8847 22.6986 22.6575 23.0496C22.4303 23.4006 22.1059 23.6728 21.7265 23.8309C21.4703 23.9414 21.1954 23.998 20.9177 23.9974ZM10.6364 7.49978C10.0578 7.49978 9.50282 7.7368 9.09365 8.1587C8.68448 8.58059 8.45462 9.15281 8.45462 9.74946V21.8632C8.45436 21.9882 8.49001 22.1104 8.55709 22.2145C8.62417 22.3185 8.71965 22.3998 8.83148 22.4479C8.94331 22.4961 9.06647 22.509 9.1854 22.485C9.30434 22.461 9.4137 22.4012 9.4997 22.3131L14.4909 17.1981C14.6272 17.0585 14.8115 16.9801 15.0036 16.9801C15.1958 16.9801 15.3801 17.0585 15.5164 17.1981L20.5017 22.3116C20.5877 22.3997 20.6971 22.4595 20.816 22.4835C20.935 22.5075 21.0581 22.4946 21.17 22.4464C21.2818 22.3983 21.3773 22.317 21.4444 22.213C21.5114 22.1089 21.5471 21.9867 21.5468 21.8617V9.74946C21.5468 9.15281 21.317 8.58059 20.9078 8.1587C20.4986 7.7368 19.9437 7.49978 19.365 7.49978H10.6364Z"
                                                        fill="white" />
                                                </svg>

                                                <div class="huy_luu_all">
                                                    <div class="hover_huyluu cl_huy">Hủy Lưu</div>
                                                    <div class="hover_huyluu cl_luu hidden">Lưu</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="div_right_four_noidung_text_info">
                                            <div class="div_right_four_noidung_text elipsis2 mr_b16px">
                                                <?= $rows['desc_project'] ?>
                                            </div>
                                            <div class="div_right_four_noidung_div_info flex align_item_c jus_sb">
                                                <div class="div_right_four_noidung_info flex align_item_c">
                                                    <div class="div_right_four_noidung_info_img mr_r8px">
                                                        <? if($rows['user_avt'] != ''): 
                                                            $mm = date('m',strtotime($rows['updatedDate']));
                                                            $dd = date('d',strtotime($rows['updatedDate']));
                                                            $yy = date('Y',strtotime($rows['updatedDate']));
                                                        ?>
                                                        <img src="<? echo base_url(); ?>upload/<?= $yy ?>/<?= $mm ?>/<?= $dd ?>/<?= $rows['user_avt']?>" alt="">
                                                        <? else: ?>
                                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/user_30.png" alt="">
                                                        <? endif ?>
                                                    </div>
                                                    <div class="div_right_four_noidung_info_text">
                                                        <?= $rows['name'] ?>
                                                    </div>
                                                </div>
                                                <a href="chi_tiet_du_an.html" class="div_right_four_noidung_info_button main_bg_sub main_color">
                                                    <?= $type_news[$rows['type']] ?>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                <?php endforeach;?>
                                <? print_r($pagination) ?>
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
<script type="text/javascript" src="<? echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url(); ?>assets/js/js_duy.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>

var base_url 	= '<?php echo base_url(); ?>';

$('input[name="dates"]').daterangepicker({
    "autoUpdateInput": false,
    "locale": {
        "format": "DD/MM/YYYY"
    }
});

$('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
    $(this).val(picker.startDate.format('DD/MM/YYYY') + '-' + picker.endDate.format('DD/MM/YYYY'));
});


$('input[name="dates"]').on('cancel.daterangepicker', function (ev, picker) {
    $(this).val('');
});

$('.click_huyluu').click(function() {
    $(this).toggleClass('huyluu1');
    $(this).toggleClass('huyluu2');
    $('.cl_luu').toggleClass('hidden');
    $('.cl_huy').toggleClass('hidden');
    var type = '';
    var id_news = $(this).parents('.div_right_four_noidung_padding_tinl').attr('data-id');
    if($(this).hasClass('huyluu1') == false)
    {
        type = 1;
    }
    else
    {
        type = 0;
    }
    $.ajax({
        type: 'POST',
        url: 'admin/ManageNews/updateNewsSave',
        data:{
            type:type,
            id_news: id_news,
        },
        success: function(response) {
            console.log(response)
        }
    })
})

$('.dt_khoi2_noidung_left_one_tinluu_click').click(function() {
    $('.click_con4_4').toggleClass('block')
})

function tinluu(click_tinluu) {
    $('.c_tinluu').removeClass('bg_click')
    $(click_tinluu).addClass('bg_click');
}
$(".select_option").select2({
    width: "100%",
});

//---------------------search
var type = "";
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
$(".filter_date").click(function(){
    search();
})
function search()
{
    if(type == "")
    {
        type = <?= isset($_GET['type']) ? $_GET['type'] : "0" ?>;
    }
    var link = "/quan-ly-tin-dang-tin-luu.html";
    var id_cit = $("#select_city").val();
    var keyword = $(".input_search").val();
    var time = $("input[name='dates']").val();
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
    var time= $("input[name='dates']").val();
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


</script>


</html>