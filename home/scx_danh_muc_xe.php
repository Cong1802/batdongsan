<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Danh mục xe</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/style_o.css?v=<?= $ver ?>">
</head>

<body>
    <div class="main_wrapper_all">
        <div class="wapper_all">
            <?php include('../includes/menu_sidebar.php'); ?>
        </div>
        <div class="box_main_all">
            <?php include('../includes/menu_header_tab.php');  ?>
            <div class="main">
                <div class="header_all d_flex space_b align_c position_r">
                    <div class="head_title">
                        <p>Sửa chữa xe <span>/</span> Danh mục xe</p>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="scx_danh_muc_xe">
                        <div class="head_main_body d_flex space_b">
                            <div id="toolbar_01" class="toolbar form_search position_r">
                                <input type="text" class="input_search" value="" placeholder="Tìm kiếm">
                                <span class="btn_search"></span>
                            </div>
                            <a href="them-moi-xe.html">
                                <div id="toolbar_04" class="toolbar btn_blue btn_tao_phieu_bao_gia d_flex align_c">
                                    <img class="position_a" src="../images/img_add.png" alt="">
                                    <p>Thêm mới xe</p>
                                </div>
                            </a>
                            <div id="flex_p_3" class="d_flex flex_end ml_10">
                            <div id="toolbar_05" class="toolbar btn_blue_w export_file font_w500 white_s_nw">
                                Xuất file
                            </div>
                                <div id="" class="toolbar choose_func_480 cursor_p position_r white_s_nw">
                                    <div class="d_flex box_select select_tt space_b align_c">
                                        <p class="p_box_option1 p_output_tt_func_480" data-id="0">Thêm mới xe</p>
                                        <img src="../images/show_infor.png" alt="">
                                    </div>
                                    <div class="show_list_popup list_popup_func_480 position_a" style="display: none">
                                        <div class="box_list_popup_stt text_a_l">
                                           <a href="them-moi-xe.html"><p class="option_tt d_flex align_c color_grey">Thêm mới xe</p></a> 
                                            <p class="option_tt d_flex align_c">Xuất file</p>
                                        </div>
                                    </div>
                                </div>
                            <div id="toolbar_06" class="toolbar box_instructs d_flex align_c white_s_nw">
                                <img src="../images/instructs.png" alt="">
                                <p class="color_blue font_w500 ml_10 font_s15 white_s_nw">Hướng dẫn</p>
                            </div>
                            </div>
                        </div>
                        <div class="choose_branch d_flex space_b align_c mt_20">
                            <p class="font_s24 color_grey font_wB white_s_nw">Danh mục xe</p>
                            <?php include('../includes/chi_nhanh.php'); ?>
                        </div>
                        <div class="details_main_body mt_20">
                            <div class="main_table_list">
                                <div class="main_table_list_all">
                                    <div class="box_main_table_list">
                                        <table class="table table_danh_muc_xe">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" class="checked_all"><span class="span_thead"></span></th>
                                                    <th>STT<span class="span_thead"></span></th>
                                                    <th>Biển số xe<span class="span_thead"></span></th>
                                                    <th>Mã khách hàng<span class="span_thead"></span></th>
                                                    <th>Tên khách hàng<span class="span_thead"></span></th>
                                                    <th>Điện thoại<span class="span_thead"></span></th>
                                                    <th>Hãng xe<span class="span_thead"></span></th>
                                                    <th>Mẫu xe<span class="span_thead"></span></th>
                                                    <th>Loại xe<span class="span_thead"></span></th>
                                                    <th>Năm sản xuất<span class="span_thead"></span></th>
                                                    <th>Số khung<span class="span_thead"></span></th>
                                                    <th>Số máy<span class="span_thead"></span></th>
                                                    <th>Màu sơn<span class="span_thead"></span></th>
                                                    <th>Dung tích</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="prev_tr_hide">
                                                    <td class="checkbox_check">
                                                        <input type="checkbox" class="check_box_one">
                                                    </td>
                                                    <td>1</td>
                                                    <td class="color_blue cursor_p font_w500">26D1 - 8689</td>
                                                    <td class="color_blue cursor_p font_w500">KH0000078</td>
                                                    <td>Nguyễn Quang Anh</td>
                                                    <td>0999.999.888</td>
                                                    <td>Mercedes Benz</td>
                                                    <td>S650 Maybach</td>
                                                    <td>Sedan</td>
                                                    <td>2021</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr></tr>
                                                <tr class="op_js_tr_hide position_r" style="display: none;">
                                                    <td colspan="14" class="op_js_tr_box">
                                                        <div class="op_object_detail d_flex space_b flex_start">
                                                            <div class="btn_blue btn_tr_op">
                                                                Chỉnh sửa
                                                            </div>
                                                            <div class="btn_blue_w btn_tr_op" onclick="repairHistory()">
                                                                Lịch sử sửa chữa/bảo dưỡng
                                                            </div>
                                                            <div class="btn_red btn_tr_op">
                                                                Xoá xe
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="prev_tr_hide">
                                                    <td class="checkbox_check">
                                                        <input type="checkbox" class="check_box_one">
                                                    </td>
                                                    <td>1</td>
                                                    <td class="color_blue cursor_p font_w500">26D1 - 8689</td>
                                                    <td class="color_blue cursor_p font_w500">KH0000078</td>
                                                    <td>Nguyễn Quang Anh</td>
                                                    <td>0999.999.888</td>
                                                    <td>Mercedes Benz</td>
                                                    <td>S650 Maybach</td>
                                                    <td>Sedan</td>
                                                    <td>2021</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="prev_tr_hide">
                                                    <td class="checkbox_check">
                                                        <input type="checkbox" class="check_box_one">
                                                    </td>
                                                    <td>1</td>
                                                    <td class="color_blue cursor_p font_w500">26D1 - 8689</td>
                                                    <td class="color_blue cursor_p font_w500">KH0000078</td>
                                                    <td>Nguyễn Quang Anh</td>
                                                    <td>0999.999.888</td>
                                                    <td>Mercedes Benz</td>
                                                    <td>S650 Maybach</td>
                                                    <td>Sedan</td>
                                                    <td>2021</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination_l d_flex space_b align_c">
                            <div class="total_record color_grey">
                                Hiển thị:
                                <select>
                                    <option value="1">10</option>
                                    <option value="2">20</option>
                                    <option value="3">50</option>
                                </select>
                            </div>
                            <div class="pagi_right d_flex flex_end align_c">
                                <li><a rel="nofollow" href="" class="preview" title="Prev page">&lt;</a></li>
                                <li class="active"><a rel="nofollow">1</a></li>
                                <li><a rel="nofollow" href="" class="">2</a></li>
                                <li><a rel="nofollow" href="" class="">3</a></li>
                                <li><a rel="nofollow" href="" class="">4</a></li>
                                <li><a rel="nofollow" href="" class=" next" title="Next page">&gt;</a></li>
                                <li><a rel="nofollow" href="" class=" notUndeline">...</a></li>
                                <li><a rel="nofollow" href="" class=" " title="Last page"></a></li>
                                <p class="font_s14 color_grey">Hiển thị 1-20 trên tổng số <span>50</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('../includes/inc_popup_o.php');  ?>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script>
    $('.active4').each(function() {
        if ($(this).hasClass('active4')) {
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });

    $('.select2_one1').select2({
        width: '100%',
        placeholder: 'Toàn bộ chi nhánh',
    })
</script>

</html>