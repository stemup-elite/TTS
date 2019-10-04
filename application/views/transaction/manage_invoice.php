<?php $this->load->view('stemup/head');?>
<link href="<?php echo base_url('css/stemup_css/style.css');?>" rel="stylesheet">
<!--<link href="--><?php //echo base_url('css/payment.css');?><!--" rel="stylesheet">-->

<style type="text/css">
    body{
        font-family: 'roboto2';
    }

    .main_content {
        padding: 100px 0;
    }

    .pagination > li > a.active {
        background-color: #dc3545;
        color: #ffff;
    }
</style>
<header class="container-fluid bg-stemup ">
    <div class="container">	<?php $this->load->view('stemup/home/home_header_login');?>	</div>
</header>
<div class="main_content col-md-12 col-lg-12">
    <div class="container">
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <h3 style="color:#3c8dbc;">Cộng tác viên</h3>
                        <div>
                            <span>Tên: </span> <?php echo $user['first_name']; echo $user['last_name'];?>
                        </div>
                        <div>
                            <span>Email: </span> <?php echo $user['email']; ?>
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9">
                        <div class="col-md-7 col-lg-7">
                            <h3 style="color:#3c8dbc;">Danh sách yêu cầu</h3>
                        </div>
                        <div class="col-md-5 col-lg-5" style="padding-right: 0">
                            <form class="bd-search d-flex" style="margin: 20px 0 10px;" action="" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm" name="timkiem" id="search_n_timkiem">
                                    <!-- <div id="error_n" style="color: red;"></div> -->
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit" style="height: 34px;">
                                            <i class="glyphicon glyphicon-search" id="glyphicon"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="data_mngq">
                            <table class="table table-bordered" style="font-size: 15px;">
                                <thead>
                                <tr style="background-color: rgba(60, 141, 188, 0.28);">
                                    <th class="ta-c">
                                        Tên
                                    </th>
                                    <th class="ta-c">
                                        Số điện thoại
                                    </th>
                                    <th class="ta-c">
                                        Email
                                    </th>
                                    <th class="ta-c">
                                        Địa chỉ
                                    </th>
                                    <th class="ta-c">
                                        Trạng thái
                                    </th>
                                    <th class="ta-c">
                                        Ngày yêu cầu
                                    </th>
                                    <th class="ta-c" style="padding-left: 0; padding-right: 0;">
                                        Sửa-Xóa-Code
                                    </th>
                                </tr>
                                </thead>
                                <?php
                                if (!is_null($invoices)) {
                                    echo '<tbody id="body_table_transaction">';
                                    foreach ($invoices as $item) {
                                        echo '<tr>';
                                        echo '<td class="ta-c">'.$item['name'].'</td>';
                                        echo '<td class="ta-c">'.$item['phone_num'].'</td>';
                                        echo '<td class="ta-c">'.$item['email'].'</td>';
                                        echo '<td class="ta-c">'.$item['address'].'</td>';
                                        if ($item['status'] == 0) {
                                            echo '<td class="ta-c" id="status_'.$item['id'].'">Đang chờ</td>';
                                        } else {
                                            echo '<td class="ta-c">Đã gửi code</td>';
                                        }
                                        echo '<td class="ta-c">'.date("d/m/Y", strtotime($item['created_at'])).'</td>';
                                        echo '<td class="ta-c" style="text-align: center">';
                                        echo '<a href="#"><i class="fa fa-edit" aria-hidden="true" title="Chỉnh sửa"></i></a>';
                                        echo '<a href="#" style="margin-left: 10%;" title="Xóa"><i class="fa fa-trash"></i></a>';
                                        if ($item['status'] == 0) {
                                            echo '<a href="#" data-toggle="modal" data-target="#myModal" style="margin-left: 10%;" title="Gửi code" id="click_sendCode'.$item['id'].'" onclick="change_onclick_sendCode('.$item['id'].')"><i class="fas fa-barcode"></i></a>';
                                        } else {
                                            echo '<a href="#" style="margin-left: 10%;" title="Gửi lại code" onclick="re_sendCode('.$item['id'].')"><i class="fas fa-share"></i></a>';
                                        }
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                    echo '</tbody>';
                                } else {
                                    echo '<h4>Không có hóa đơn nào</h4>';
                                }
                                ?>
                            </table>
                            <div><span>Đang xem từ <?php echo min($page*$per_page-$per_page+1, $total_rows) ?> đến <?php echo min($per_page*$page, $total_rows)?> trong số <?php echo $total_rows; ?> yêu cầu</span></div>
                            <ul class="pagination"><?php echo $pagination; ?></ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>

    </div>
</div>
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tạo thẻ nạp</h4>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="price_code">Mệnh giá:</label>
                    <select class="form-control" id="price_code">
                        <option value="50000">50.000 VNĐ</option>
                        <option value="100000">100.000 VNĐ</option>
                        <option value="200000">200.000 VNĐ</option>
                        <option value="500000">500.000 VNĐ</option>
                    </select>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="button_send_code" onclick="sendCode()">Gửi mã thẻ nạp</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>

        </div>
    </div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('stemup/footer');?>
<script>
    function change_onclick_sendCode(number) {
        $("#button_send_code").attr("onclick","sendCode("+number+")");
    }

    $('#myModal').on('hidden.bs.modal', function (e) {
        $("#button_send_code").attr("onclick","sendCode()");
    });

    function sendCode(number) {
        $.ajax({
            url : "<?php echo base_url().'index.php/transaction/create_code/' ?>"+number,
            type : "post",
            dataType:"text",
            data : {
                price: $('#price_code').val(),
                iid: number,
            },
            success : function (){
                $("#status_"+number).html('Đã gửi code');
                // $("#click_sendCode"+number).remove();
                $('#click_sendCode'+number).replaceWith('<a href="#" style="margin-left: 10%;" title="Gửi lại code" onclick="re_sendCode('+number+')"><i class="fas fa-share"></i></a>', false);
                $('#myModal').modal('toggle');
            }
        });
    }

    function re_sendCode(number) {
        $.ajax({
            url : "<?php echo base_url().'index.php/transaction/re_send_code/' ?>"+number,
            type : "post",
            dataType:"text",
            data : {
                iid: number,
            },
            success : function (){
                alert('Đã gửi lại code');
            }
        });
    }
</script>
</body>
</html>