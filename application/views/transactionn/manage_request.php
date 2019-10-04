<?php $this->load->view('stemup/head');?>
    <link href="<?php echo base_url('css/stemup_css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('css/payment.css');?>" rel="stylesheet">

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
                                <form class="bd-search d-flex" style="margin: 20px 0 10px;" action="http://localhost/stemup/index.php/sadmin/find_news" method="get">
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
                                            Email
                                        </th>
                                        <th class="ta-c">
                                            Số điện thoại
                                        </th>
                                        <th class="ta-c">
                                            Loại thẻ
                                        </th>
                                        <th class="ta-c">
                                            Mệnh giá
                                        </th>
                                        <th class="ta-c">
                                            Ngày yêu cầu
                                        </th>
                                        <th class="ta-c" style="padding-left: 0; padding-right: 0;">
                                            Sửa-Xóa
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="body_table_transaction">
                                    <?php
                                    foreach ($request as $item) {
                                        echo '<tr>';
                                        echo '<td class="ta-c">'.$item['email'].'</td>';
                                        echo '<td class="ta-c">'.$item['phone_num'].'</td>';
                                        echo '<td class="ta-c">'.$item['type'].'</td>';
                                        echo '<td class="ta-c">'.number_format($item['price']).' VND</td>';
                                        echo '<td class="ta-c">'.date("d/m/Y", strtotime($item['created_at'])).'</td>';
                                        echo '<td class="ta-c" style="text-align: center">';
                                        echo '<a href="#"><i class="fa fa-edit" aria-hidden="true" title="Chỉnh sửa"></i></a>';
                                        echo '<a href="#" style="margin-left: 10%;" title="Xóa"><i class="fa fa-trash"></i></a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <div><span>Đang xem từ <?php echo min($page*$per_page+1, $total_rows) ?> đến <?php echo min($per_page*($page+1), $total_rows)?> trong số <?php echo $total_rows; ?> yêu cầu</span></div>
                                <ul class="pagination"><?php echo $pagination; ?></ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>

        </div>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('stemup/footer');?>
</body>
</html>